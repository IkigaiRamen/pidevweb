<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ModifierProfilType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {


        $builder

            ->add('job')
            ->add('firstname')
            ->add('lastname')
            ->add('numTel' )
            ->add('city')
            ->add('bio')

            ->add('imageFile',VichImageType::class , [ 'mapped' => false, 'required'=>false])
            ->add('Modifier',SubmitType::class);
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
