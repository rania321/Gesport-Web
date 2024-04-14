<?php

namespace App\Form;

use App\Entity\Produit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Unique;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomP')
            ->add('descriP')
            ->add('PrixP', NumberType::class, [
                'scale' => 2, // Spécifiez 2 décimales pour le prix
                'invalid_message' => 'Veuillez saisir un prix valide.', // Message d'erreur en cas de saisie invalide
                'attr' => [
                    'pattern' => '\d+(\.\d{1,2})?', // Expression régulière pour valider un nombre à virgule flottante
                    'title' => 'Veuillez saisir un nombre à virgule flottante (ex: 12.34)', // Message affiché au survol
                ],
            ])          
            ->add('StockP')
            ->add('DateAjoutP', DateType::class, [
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
            ->add('imageP')

            ->add('referenceP', TextType::class, [
                'constraints' => [
                    new UniqueEntity([
                        'fields' => 'referenceP',
                        'message' => 'Cette référence est déjà utilisée.',
                        'entityClass' => Produit::class,
                    ]),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
