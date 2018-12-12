<?php

namespace BoutiqueBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class ProduitType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('reference', TextType::class, array(
                    'required' => false,
                    'constraints' => array(
                        new Assert\NotBlank(array(
                            'message' => 'Veuillez saisir une référence',
                                )),
                        new Assert\Length(array(
                            'min' => 3,
                            'max' => 20,
                            'minMessage' => 'La référence doit contenir min 3 caractères',
                            'maxMessage' => 'La référence doit contenir max 20 caractères',
                                )),
                        new Assert\Regex(array(
                            'pattern' => "/^[a-zA-Z,_0-9]+$/",
                            'message' => 'Les lettres, chiffres, ainsi que ".", "_" et "-" sont autorisés',
                                )),
                    ),
                ))
                ->add('categorie', TextType::class)
                ->add('titre', TextareaType::class)
                ->add('description', TextType::class)
                ->add('couleur', TextType::class)
                ->add('taille', TextType::class)
                ->add('public', ChoiceType::class, array(
                    'choices' => array(
                        'Homme' => 'm',
                        'Femme' => 'f',
                        'Mixte' => 'mixte',
                    ),
                ))
                ->add('file', FileType::class, array(
                    'required' => false
                ))
                ->add('prix', MoneyType::class)
                ->add('stock', IntegerType::class, array(
                    'required' => false,
                    'constraints' => array(
                        new Assert\NotBlank(),
                        new Assert\Type(array(
                            'type' => 'integer',
                            'message' => 'Cela doit être un chiffre',
                                )),
                    ),
                    'attr' => array(
                        'class' => 'maClasseCustom'
                    )
                ))
                ->add('Enregistrer', SubmitType::class, array(
                    'attr' => array(
                        'class' => 'btn btn-primary'
                    )
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'BoutiqueBundle\Entity\Produit',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'boutiquebundle_produit';
    }

}
