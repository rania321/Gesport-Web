<?php

namespace App\Form;

use App\Entity\Reservationactivite;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use App\Entity\Activite;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class ReservationactiviteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('datedebutr',DateType::class,['widget' => 'single_text','format' => 'yyyy-MM-dd',])
            ->add('heurer', ChoiceType::class, [
                'choices' => [
                    '8:00' => '08:00:00',
                    '9:30' => '09:30:00',
                    '11:00' => '11:00:00',
                    '12:30' => '12:30:00',
                    '14:00' => '14:00:00',
                    '15:30' => '15:30:00',
                    '17:00' => '17:00:00',
                ],
                'placeholder' => 'Choisissez une heure', // Optionnel : affichez un message par défaut
            ])
            
            
            ->add('ida', HiddenType::class, [
                'mapped' => false, // Empêche ce champ d'être lié à l'entité
            ]);

        
        // Si l'option 'editMode' est définie à true, on ajoute le champ du statut
        if ($options['editMode']) {
            $builder->add('statutr');
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservationactivite::class,
            'editMode' => false, // Par défaut, le formulaire est en mode ajout
        ]);
    }
}
