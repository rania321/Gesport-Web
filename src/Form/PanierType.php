<?php

namespace App\Form;

use App\Entity\Panier;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class PanierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('quantitep')
            ->add('totalpa')
            ->add('idv', HiddenType::class, [
                'mapped' => false, // Empêche ce champ d'être lié à l'entité
                'data' => '2',     // Valeur constante

            ])
            ->add('idp', HiddenType::class, [
                'mapped' => false, // Empêche ce champ d'être lié à l'entité
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Panier::class,
        ]);
    }
}
