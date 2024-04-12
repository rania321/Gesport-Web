<?php
namespace App\Form;

use App\Entity\Tournoi;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;


class TournoiTypeEdit extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomt')
            ->add('datedebutt', DateType::class, [
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
            ])
            ->add('datefint', DateType::class, [
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
            ])
            ->add('statutt', ChoiceType::class, [
                'label' => 'Statut de l\'équipe',
                'choices' => [
                    'À venir' => 'À venir',
                    'En cours' => 'En cours',
                    'Terminé' => 'Terminé',
                ],
                'expanded' => true, // Afficher sous forme de boutons radio
                'multiple' => false, // Autoriser une seule sélection
                'attr' => ['class' => 'btn-group-toggle', 'data-toggle' => 'buttons']
            ])
            ->add('descrit');
            
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Tournoi::class,
        ]);
    }
}