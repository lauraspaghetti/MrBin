<?php

namespace App\Form;

use App\Entity\Mairie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MairieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomMairie')
            ->add('commune')
            ->add('adresse')
            ->add('horaires')
            ->add('Enregistrer', SubmitType::class)//bouton submit
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Mairie::class,
        ]);
    }
}
