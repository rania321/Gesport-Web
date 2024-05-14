<?php

namespace App\Form;

use App\Entity\Vente;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class VenteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('quantitév')
            ->add('datev', DateType::class, [
                'widget' => 'single_text',
                'label' => 'DateAjoutP',
                'html5' => false,
                // Spécifiez le format de la date si nécessaire
                'format' => 'yyyy-MM-dd',
                // Définissez la date actuelle comme valeur par défaut
                'data' => new \DateTime(),
                // Vous pouvez également désactiver le champ si vous le souhaitez
                //'disabled' => true,
            ])
            ->add('montantv')
            ->add('Produit')
            ->add('User')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Vente::class,
        ]);
    }
}
