<?php

namespace BoutiqueBundle\Form;

use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
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

class CommandeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idMembre', IntegerType::class, array(
                'required' => false,
                'constraints' => array(
                    new Assert\NotBlank(array(
                        'message' => 'Veuillez remplir ce champs',
                    )),
                    // new Assert\Length(array(
                    //     'min' => 3,
                    //     'max' => 20,
                    //     'minMessage' => 'Le pseudo doit comporter minimum 3 caractères',
                    //     'maxMessage' => 'Le pseudo doit comporter maximum 20 caractères',
                    // )),
                ),
            ))
            ->add('montant', IntegerType::class, array(
                'required' => false,
                'constraints' => array(
                    new Assert\NotBlank,
                ),
            ))
            ->add('dateEnregistrement', DateTimeType::class, array(
                'required' => false,
                'constraints' => array(
                    new Assert\NotBlank,
                ),
            ))
            ->add('Etat', IntegerType::class, array(
                'required' => false,
                'constraints' => array(
                    new Assert\NotBlank,
                ),
            ))
            ->add('Ajouter', SubmitType::class, array(
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
            'data_class' => 'BoutiqueBundle\Entity\Commande',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'boutiquebundle_commande';
    }

}
