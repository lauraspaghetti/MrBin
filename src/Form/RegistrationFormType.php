<?php

namespace App\Form;

use App\Entity\Mairie;
use App\Entity\Utilisateur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nom', TextType::class, [
            'label' => false, 
            'attr' => [
                'placeholder' => "Nom"
            ]
        ])
        ->add('prenom', TextType::class, [
            'label' => false, 
            'attr' => [
                'placeholder' => "Prénom"
            ]
        ])
        ->add('mairie', EntityType::class, [
            'label' => false, 
            'class' => Mairie::class, 
            'choice_label' => 'nomMairie',
            'placeholder' => "Choisissez votre mairie",

        ])
        ->add('email', TextType::class, [
            'label' => false, 
            'attr' => [
                'placeholder' => "Email"
            ]
        ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => "Vous devez accepter nos conditions d'utilisation pour poursuivre.",
                    ]),
                ],
            ])
            ->add('plainPassword', 
                PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'label' => false, 
                'attr' => [
                    'placeholder' => "Mot de passe"
                ],
                'mapped' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Saisissez un mot de passe svp',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Votre mot de passe doit faire au moins {{ limit }} caractères',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
                
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
