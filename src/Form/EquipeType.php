<?php

namespace App\Form;

use App\Entity\Equipe;
use App\Entity\Tournoi;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class EquipeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
         $builder
            ->add('nome', null, [
                'label' => 'Nom de l\'équipe',
                'attr' => ['class' => 'form-control']
            ])
            ->add('statute', ChoiceType::class, [
                'label' => 'Statut de l\'équipe',
                'choices' => [
                    'Qualifiée' => 'Qualifiée',
                    'Éliminée' => 'Éliminée',
                    'Inscrite' => 'Inscrite',
                ],
                'expanded' => true, // Afficher sous forme de boutons radio
                'multiple' => false, // Autoriser une seule sélection
                'attr' => ['class' => 'btn-group-toggle', 'data-toggle' => 'buttons']
            ])
            ->add('Tournoi', EntityType::class, [
                'class' => Tournoi::class,
                'choice_label' => 'nomt',
                'placeholder' => 'Choisissez un tournoi',
                'label' => 'Tournoi',
                'attr' => ['class' => 'form-select']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Equipe::class,
        ]);
    }
}