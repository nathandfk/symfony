<?php

namespace App\Security;

use App\Entity\Users;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Authenticator\AbstractLoginFormAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\CsrfTokenBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Util\TargetPathTrait;

class LoginFormAuthenticator extends AbstractLoginFormAuthenticator
{
    use TargetPathTrait;

    public const LOGIN_ROUTE = 'login';

    private UrlGeneratorInterface $urlGenerator;
    private $doctrine;
    private $mailer;

    public function __construct(UrlGeneratorInterface $urlGenerator, ManagerRegistry $doctrine, MailerInterface $mailer)
    {
        $this->urlGenerator = $urlGenerator;
        $this->doctrine = $doctrine;
        $this->mailer = $mailer;
    }

    public function authenticate(Request $request): Passport
    {
        $email = $request->request->get('email', '');
        $password = $request->request->get('password', '');
        $request->getSession()->set(Security::LAST_USERNAME, $email);
        if ($email) {
            $repository = $this->doctrine->getRepository(Users::class);
            $user = $repository->findOneBy(["email" => $email]);
            $em = $this->doctrine->getManager();
            if ($user->getStatut() == FALSE) {
                $request->getSession()->set(Security::AUTHENTICATION_ERROR, "Votre compte");
                $password = '';
                $toDay = new \DateTimeImmutable('now', new \DateTimeZone('Europe/Paris'));
                $time =  strtotime($toDay->format('Y-m-d H:i:s')) - strtotime($user->getUpdatedAt()->format('Y-m-d H:i:s'));
                if ($time > 86380) {
                    $activate = $this->generator(24);
                    $user->setActivationKey($activate);
                    $user->setUpdatedAt($toDay);
                    $em->persist($user);
                    $em->flush();

                $postsRep = $this->doctrine->getRepository(Posts::class);
                $posts = $postsRep->findBy(["type" => "ADMIN_EMAIL"]);
                $firstName = $user->getFirstName();
                $emailUser = $user->getEmail();
                $link = "https://f2i-dev14-nd.nathandfk.fr/membre/compte?key=".$activate."&email=".$user->getEmail();
                if ($posts) {
                    foreach ($posts as $post) {
                        $email = (new Email())
                            ->from($post->getDescription())
                            ->to($emailUser)
                            ->subject('Activation de votre compte')
                            ->text('Activez votre compte')
                            ->html("
                            <div>
                            <p>Bonjour <b>$firstName</b></p>
                            <p>Vous êtes bien inscrit sur notre site internet</p>
                            <p>Veuillez cliquer sur le lien suivant pour confirmer qu'il s'agit bien de vous</p>
                            <p><a href='$link'>$link</a></p>
                            <p>Ce lien expirera sous une période de 24 heures.</p>
                            <p>Nous sommes très ravis de vous compter parmi nous, sans plus attendre faites vos réservations partout en Europe.</p>
                            <p>Profitez pleinement de notre site internet et de tout ce qu'il vous offre.</p>
                            <p>L'équipe AtypikHouse.</p>
                            <div style='text-align: center;'>
                            <img src='https://f2i-dev14-nd.nathandfk.fr/assets/pictures/logo-ath4.png' width='220'>
                            </div>
                            ");

                        $this->mailer->send($email);
                    }
                }
                    throw new CustomUserMessageAuthenticationException(
                        "Nous venons de vous envoyer un lien par mail, merci de nous confirmer qu'il s'agit bien de vous en cliquant sur le lien. Ce lien expire sous 24 heures !"
                    );

                } else {
                    throw new CustomUserMessageAuthenticationException(
                        "Votre compte n'est toujours pas activé. Vous n'avez toujours pas confirmé votre email. Un email vous a été envoyé à votre adresse mail, il expire sous 24 heures"
                    );
                }

            } else if (!$user->isAccount()) {
                $request->getSession()->set(Security::AUTHENTICATION_ERROR, "Votre compte");
                $password = '';
                throw new CustomUserMessageAuthenticationException(
                    "Votre compte a été bloqué par l'administrateur"
                );
            } else if (!is_null($user->getDeletedAt())) {
                $request->getSession()->set(Security::AUTHENTICATION_ERROR, "Votre compte");
                $user->setDeletedAt(null);
                $em->persist($user);
                $em->flush();
                throw new CustomUserMessageAuthenticationException(
                    "Votre compte a été supprimé ! Nous avons remarqué que vous tentez de vous connecter sur votre compte. 
                    Nous venons de le restaurer."
                );
            } 
        }

        return new Passport(
            new UserBadge($email),
            new PasswordCredentials($password),
            [
                new CsrfTokenBadge('authenticate', $request->request->get('_csrf_token')),
            ]
        );
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {

        if ($targetPath = $this->getTargetPath($request->getSession(), $firewallName)) {
            return new RedirectResponse($targetPath);
        }

        // For example:
        return new RedirectResponse($this->urlGenerator->generate('login'));
        throw new \Exception('TODO: provide a valid redirect inside '.__FILE__);
    }

    protected function getLoginUrl(Request $request): string
    {
        return $this->urlGenerator->generate(self::LOGIN_ROUTE);
    }

    public function generator(int $limit = 8, $remove = []){
        $character = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'a', 'A', 'b', 'B', 'c', 'C', '?', '^', '-', '_','d', 'D', 'e', 'E', 'f', 'F', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
        $tableSize = count($character);
        $element = "";
        for ($i=0; $i < $limit; $i++) { 
            $element .= $character[rand(0, $tableSize - 1)];
        }
        return $element;
    }
}
