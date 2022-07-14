<?php

namespace App\Security;

use App\Entity\Users;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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

    public function __construct(UrlGeneratorInterface $urlGenerator, ManagerRegistry $doctrine)
    {
        $this->urlGenerator = $urlGenerator;
        $this->doctrine = $doctrine;
    }

    public function authenticate(Request $request): Passport
    {
        $email = $request->request->get('email', '');
        $password = $request->request->get('password', '');
        $request->getSession()->set(Security::LAST_USERNAME, $email);
        if ($email) {
            $repository = $this->doctrine->getRepository(Users::class);
            $user = $repository->findOneBy(["email" => $email]);
            if ($user->getStatut() == FALSE) {
                $request->getSession()->set(Security::AUTHENTICATION_ERROR, "Votre compte");
                $password = '';
                throw new CustomUserMessageAuthenticationException(
                    "Vous n'avez toujours pas confirmé votre compte"
                );
            } else if (!$user->isAccount()) {
                $request->getSession()->set(Security::AUTHENTICATION_ERROR, "Votre compte");
                $password = '';
                throw new CustomUserMessageAuthenticationException(
                    "Votre compte a été bloqué par l'administrateur"
                );
            } else if (!is_null($user->getDeletedAt())) {
                $request->getSession()->set(Security::AUTHENTICATION_ERROR, "Votre compte");
                $password = '';
                throw new CustomUserMessageAuthenticationException(
                    "Ce compte a été supprimé"
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
}
