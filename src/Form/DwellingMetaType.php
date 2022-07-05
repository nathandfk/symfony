<?php

namespace App\Form;

use App\Entity\DwellingMeta;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DwellingMetaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // ->add('field')
            // ->add('value', RadioType::class, ['attr' => ['class' => 'form-control w-100', 'placeholder' => ''], 'label' => false])
            // ->add('dwelling')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => DwellingMeta::class,
        ]);
    }
}
