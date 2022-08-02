<?php

namespace App\Form;

use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType as TypePasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('password', RepeatedType::class, array(
                'type' => TypePasswordType::class,
                'required' => true,
                'first_options'  => array('label' => 'Mot de passe *', 'required' => false,'attr' => ['class' => 'form-control w-100', 'placeholder' => '**********']),
                'second_options' => array('label' => 'Répéter le mot de passe *', 'required' => false,'attr' => ['class' => 'form-control w-100', 'placeholder' => '**********']),
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}
