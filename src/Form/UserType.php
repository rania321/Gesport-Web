<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomu')
            ->add('prenomu')
            ->add('emailu')
            ->add('mdpu');
           // Vérifiez si le champ de sélection du rôle doit être masqué
        if (!$options['hide_role_field']) {
            $builder->add('roleu', null, ['disabled' => true]);
            
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'hide_role_field' => false,
            
        ]);
    }
}
