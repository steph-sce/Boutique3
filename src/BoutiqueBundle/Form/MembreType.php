<?php

namespace BoutiqueBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType; //Type="text"
use Symfony\Component\Form\Extension\Core\Type\FormType; // type="password"
use Symfony\Component\Form\Extension\Core\Type\IntegerType; //type="email"
use Symfony\Component\Form\Extension\Core\Type\PasswordType; //champs select
use Symfony\Component\Form\Extension\Core\Type\SubmitType; //type="checkbox"
use Symfony\Component\Form\Extension\Core\Type\TextType; //type="number"
use Symfony\Component\Form\FormBuilderInterface; //type="submit"
use Symfony\Component\OptionsResolver\OptionsResolver; //

use Symfony\Component\Validator\Constraints as Assert;

/*
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Type;
 */

class MembreType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, array(
                'required' => false,
                'constraints' => array(
                    new Assert\NotBlank(array(
                        'message' => 'Veuillez remplir ce champs',
                    )),
                    new Assert\Length(array(
                        'min' => 3,
                        'max' => 20,
                        'minMessage' => 'Le pseudo doit comporter minimum 3 caractères',
                        'maxMessage' => 'Le pseudo doit comporter maximum 20 caractères',
                    )),
                    new Assert\Regex(array(
                        'pattern' => '/^[a-zA-Z-._0-9]+$/',
                        'message' => 'Le pseudo accepte les lettres et les chiffres',
                    )),
                ),
            ))
            ->add('prenom', TextType::class, array(
                'required' => false,
                'constraints' => array(
                    new Assert\NotBlank,
                    new Assert\Length(array(
                        'min' => 3,
                        'max' => 20,
                        'minMessage' => 'Le pseudo doit comporter minimum 3 caractères',
                        'maxMessage' => 'Le pseudo doit comporter maximum 20 caractères',
                    )),
                ),
            ))
            ->add('nom', TextType::class, array(
                'required' => false,
                'constraints' => array(
                    new Assert\NotBlank,
                    new Assert\Length(array(
                        'min' => 3,
                        'max' => 20,
                        'minMessage' => 'Le pseudo doit comporter minimum 3 caractères',
                        'maxMessage' => 'Le pseudo doit comporter maximum 20 caractères',
                    )),
                ),
            ))
            ->add('email', EmailType::class, array(
                'required' => false,
                'constraints' => array(
                    new Assert\NotBlank,
                    new Assert\Email,
                ),
            ))
            ->add('civilite', ChoiceType::class, array(
                'choices' => array(
                    'Homme' => 'm',
                    'Femme' => 'f',
                ),
            ))
            ->add('ville', TextType::class, array(
                'required' => false,
                'constraints' => array(
                    new Assert\NotBlank,
                    new Assert\Length(array(
                        'min' => 3,
                        'max' => 20,
                        'minMessage' => 'Le pseudo doit comporter minimum 3 caractères',
                        'maxMessage' => 'Le pseudo doit comporter maximum 20 caractères',
                    )),
                ),
            ))
            ->add('codePostal', IntegerType::class, array(
                'required' => false,
                'constraints' => array(
                    new Assert\NotBlank,
                    new Assert\Type(array(
                        'type' => 'integer',
                        'message' => 'Votre code postal doit être composé de chiffres',
                    )),
                    new Assert\Length(array(
                        'min' => 5,
                        'max' => 5,
                        'minMessage' => 'Votre code postal doit être composé de 5 chiffres',
                    )),
                ),
            ))
            ->add('adresse', TextType::class, array(
                'required' => false,
                'constraints' => array(
                    new Assert\NotBlank,
                    new Assert\Length(array(
                        'min' => 3,
                        'max' => 50,
                        'minMessage' => 'Le pseudo doit comporter minimum 3 caractères',
                        'maxMessage' => 'Le pseudo doit comporter maximum 20 caractères',
                    )),
                ),
                'attr' => array(
                    'placeholder' => 'Votre Adresse',
                    'class' => 'form-control',
                ),
            ));
        if ($options['admin']) {
            $builder->add('statut', ChoiceType::class, array('choices' => array(
                'Membre' => 0,
                'Admin' => 1,
            )));
        } else {
            $builder
                ->add('password', PasswordType::class, array(
                    'required' => false,
                    'constraints' => array(
                        new Assert\NotBlank,
                        new Assert\Regex(array(
                            'pattern' => '/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{8,20}$/',
                            'message' => 'Veuillez renseigner un Mot de passe de 8 caractères mini contentant une maj, et un chiffre, et un caractère spécial',
                        )),
                    ),

                ));
        }
        $builder
            ->add('inscription', SubmitType::class, array(
                'attr' => array(
                    'class' => "btn-primary",
                ),
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BoutiqueBundle\Entity\Membre',
            'admin' => false,
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'boutiquebundle_membre';
    }

}
