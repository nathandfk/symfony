<?php

namespace App\Form;

use App\Entity\Country;
use App\Entity\Users;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UsersType extends AbstractType
{
    private $countries;
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $choice = ['Entrer votre pays' => ''];
        foreach ($this->countries as $country) {
            $choice += [$country->getNameFr() => $country->getId()];
        }
        $builder
            ->add('firstName', null, ['required' => true,'attr' => ['class' => 'form-control w-100', 'placeholder' => 'Prénom *'], 'label' => 'Prénom *'])
            ->add('lastName', null, ['required' => true,'attr' => ['class' => 'form-control w-100', 'placeholder' => 'Nom *'], 'label' => 'Nom *'])
            ->add('password', RepeatedType::class, array(
                'type' => PasswordType::class,
                'required' => '',
                'first_options'  => array('label' => 'Mot de passe *', 'required' => false,'attr' => ['class' => 'form-control w-100', 'placeholder' => '**********']),
                'second_options' => array('label' => 'Répéter le mot de passe *', 'required' => false,'attr' => ['class' => 'form-control w-100', 'placeholder' => '**********']),
            ))
            ->add('society', null, ['label' => 'Société'])
            ->add('birthday', BirthdayType::class, ['required' => false, 'format' => 'dd-MM-yyyy', 'placeholder' => [
                'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour',
            ], 'attr' => ['class' => 'd-flex gap-1 ai-center'], 'label' => 'Date de naissance'])
            ->add('email', EmailType::class, ['required' => true,'attr' => ['class' => 'form-control w-100', 'placeholder' => 'E-mail *'], 'label' => 'E-mail *'])
            ->add('phoneNumber', TelType::class, ['required' => false, 'attr' => ['class' => 'form-control w-100', 'placeholder' => '+33 1 23 45 67 89'], 'label' => 'Numéro de téléphone'])
            // ->add('roles')
            ->add('address', null, ['required' => true,'attr' => ['class' => 'form-control w-100'], 'label' => 'Adresse *'])
            ->add('complAddress', null, ['attr' => ['class' => 'form-control w-100'], 'label' => 'Complément d\'adresse'])
            ->add('city', null, ['required' => true,'attr' => ['class' => 'form-control w-100'], 'label' => 'Ville *'])
            ->add('country', ChoiceType::class, ['required' => true,'attr' => ['class' => 'form-control w-100'], 'label' => 'Pays *', 'choices'  => $choice,])
            // ->add('activationKey')
            // ->add('addedAt')
            // ->add('updatedAt')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
    public function __construct(ManagerRegistry $doctrine){
        $repository = $doctrine->getRepository(Country::class);
        $countries = $repository->findBy([], ['nameFr' => "ASC"]);
        $this->countries = $countries;
    }
}
