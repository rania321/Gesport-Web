<?php

namespace App\Form;

use App\Entity\Activitefavoris;
use App\Entity\Activite;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActivitefavorisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // Ajoutez ici les champs nécessaires pour le formulaire, par exemple :
            // ->add('comment', TextareaType::class)
            // ->add('save', SubmitType::class, ['label' => 'Add Love'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Activitefavoris::class,
        ]);
    }
}
