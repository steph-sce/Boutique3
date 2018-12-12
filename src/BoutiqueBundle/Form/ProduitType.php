<?php

namespace BoutiqueBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProduitType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('reference')
        ->add('categorie')
        ->add('titre')
        ->add('description')
        ->add('couleur')
        ->add('taille')
        ->add('public')
        ->add('photo')
        ->add('prix')
        ->add('stock')
        ->add('Inscription');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BoutiqueBundle\Entity\Produit',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'boutiquebundle_produit';
    }

}
