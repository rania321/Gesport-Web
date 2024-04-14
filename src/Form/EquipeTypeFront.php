<?php

namespace App\Form;

use App\Entity\Equipe;
use App\Entity\Tournoi;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;


class EquipeTypeFront extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nome', null, [
                'label' => 'Nom de l\'équipe',
                'attr' => ['class' => 'form-control']
            ])

            ->add('statute', HiddenType::class, [
                'data' => 'Inscrite', // Définir la valeur par défaut
            ])
            ->add('Tournoi', EntityType::class, [
                'class' => Tournoi::class,
                'query_builder' => function (EntityRepository $er) { // Utilisez Doctrine\ORM\EntityRepository
                    return $er->createQueryBuilder('t')
                        ->where('t.datedebutt >= CURRENT_DATE()') // Tournois à venir
                        ->orWhere('t.datefint>= CURRENT_DATE()'); // Tournois en cours
                },
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