<?php

namespace App\Form;

use App\Entity\Country;
use App\Entity\Dwelling;
use App\Entity\Posts;
use Symfony\Component\Form\AbstractType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\All;
use Symfony\Component\Validator\Constraints\Count;
use Symfony\Component\Validator\Constraints\File;

class DwellingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $choice = ['Entrer votre pays' => ''];
        foreach ($this->countries as $country) {
            $choice += [$country->getNameFr() => $country];
        }

        $types = ["Choisissez le type d'habitat" => ''];
        foreach ($this->type as $element) {
            $types += [$element->getDescription() => $element];
        }

        $equipments = [];
        foreach ($this->equipments as $element) {
            $equipments += [$element->getDescription() => $element->getId()];
        }
        $builder
            ->add('pictures', FileType::class, [
                'multiple' => true,
                'required' => true,
                'constraints' => [
                    new Count(['max' => 4, 'max' => 10]),
                    new All([
                        new File([
                            'maxSize' => '15M',
                            'mimeTypes' => [
                                'image/jpeg',
                                'image/png',
                                'image/jpg',
                            ],
                        ])
                    ])
                    ],
                
                // 'upload_max_size_message' => 'La taille totale de fichiers ne doit pas dépasser 10 MB',
                // 'attr'     => [
                //     'accept' => 'image/*',
                //     'multiple' => 'multiple',
                //     'required' => 'required',
                // ], 
                'attr' => [
                    'accept' => '.jpg, .jpeg, .png'
                ],
                'label' => 'Images (Taille totale maximale 15MB, 4 fichiers min et 10 fichiers max)*'
            ])
            ->add('title', null, ['required' => true,'attr' => ['class' => 'form-control w-100', 'placeholder' => 'Titre *'], 'label' => 'Titre *'])
            ->add('abstract', null, ['required' => true,'attr' => ['class' => 'form-control w-100', 'placeholder' => 'Résumé *'], 'label' => 'Résumé *'])
            ->add('description', TextareaType::class, ['required' => true,'attr' => ['class' => 'form-control w-100', 'placeholder' => 'Description *'], 'label' => 'Description *'])
            ->add('price', NumberType::class, ['required' => true,'attr' => ['class' => 'form-control w-100', 'placeholder' => 'Exemple: 129'], 'label' => 'Prix (Les prix sont en euros, entrez uniquement le nombre) *'])
            ->add('equipments', ChoiceType::class, ['required' => true,'attr' => ['class' => 'form-control w-100'], 'label' => 'Équipements *', 'choices'  => $equipments, 'multiple' => true])
            ->add('address', null, ['required' => true,'attr' => ['class' => 'form-control w-100', 'placeholder' => 'Adresse *'], 'label' => 'Adresse *'])
            ->add('complAddress', null, ['attr' => ['class' => 'form-control w-100', 'placeholder' => 'Complément d\'adresse'], 'label' => 'Complément d\'adresse'])
            ->add('city', null, ['required' => true, 'attr' => ['class' => 'form-control w-100', 'placeholder' => 'Ville *'], 'label' => 'Ville *'])
            ->add('state', null, ['required' => true, 'attr' => ['class' => 'form-control w-100', 'placeholder' => 'Région *'], 'label' => 'Région *'])
            ->add('longitude', HiddenType::class, ['attr' => ['class' => 'form-control w-100', 'placeholder' => 'Longitude *'], 'label' => 'Longitude *'])
            ->add('latitude', HiddenType::class, ['attr' => ['class' => 'form-control w-100', 'placeholder' => 'Latitude *'], 'label' => 'Latitude *'])
            ->add('type', ChoiceType::class, ['required' => true,'attr' => ['class' => 'form-control w-100'], 'label' => 'Type *', 'choices'  => $types])
            ->add('country', ChoiceType::class, ['required' => true,'attr' => ['class' => 'form-control w-100'], 'label' => 'Pays *', 'choices'  => $choice])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Dwelling::class,
        ]);
    }
    public function __construct(ManagerRegistry $doctrine){
        $repository = $doctrine->getRepository(Country::class);
        $countries = $repository->findBy(['europe' => '1'], ['nameFr' => "ASC"]);
        $this->countries = $countries;

        $repository = $doctrine->getRepository(Posts::class);
        $type = $repository->findBy(['type' => 'TYPE', 'deletedAt' => null], ['description' => 'ASC']);
        $this->type = $type;

        $equipments = $repository->findBy(['type' => 'EQUIPMENT', 'deletedAt' => null], ['description' => 'ASC']);
        $this->equipments = $equipments;
    }
}
