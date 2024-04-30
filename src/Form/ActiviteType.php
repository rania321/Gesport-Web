<?php

namespace App\Form;

use App\Entity\Activite;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ActiviteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
            ->add('noma')
            ->add('typea')
            ->add('dispoa', ChoiceType::class, [
                'choices' => [
                    'Disponible' => 'Disponible',
                    'Non disponible' => 'Non disponible',
                ],
                'placeholder' => 'Disponibilité', // Optionnel : affichez un message par défaut
            ])
            ->add('descria')
            ->add('imagea', FileType::class, [
                'label' => 'Image de lactivité',
                'required' => false, // Si l'image n'est pas obligatoire
                'mapped' => false, // Pour que le champ n'essaie pas de mapper la propriété dans l'entité
                'attr' => ['class' => 'form-control'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Activite::class,
        ]);
    }
}
