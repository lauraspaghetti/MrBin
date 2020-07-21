<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => false, 
                'attr' => [
                    'placeholder' => "Nom"
                ]

            ] )
            ->add('prenom', TextType::class, [
                'label' => false, 
                'attr' => [
                    'placeholder' => "Prénom"
                ]
            ])
            ->add('email', TextType::class, [
                'label' => false, 
                'attr' => [
                    'placeholder' => "Email"
                ]
            ])
            ->add('objet', TextType::class, [
                'label' => false, 
                'attr' => [
                    'placeholder' => "Objet"
                ]
            ])
            ->add('message', TextType::class, [
                'label' => false, 
                'attr' => [
                    'placeholder' => "Message"
                ]
            
            ])
            ->add('Envoyer', SubmitType::class)//bouton submit
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
