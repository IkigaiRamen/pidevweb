<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ModifierCvType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {


        $builder

            ->add('bio',TextareaType::class )
            ->add('job')
            ->add('city')
            ->add('etat')
            ->add('exp' )
            ->add('sex')
            ->add('age')
            ->add('qualification')
            ->add('titre1')
            ->add('institut1')
            ->add('periode1')
            ->add('description1' ,TextareaType::class)
            ->add('titre2')
            ->add('institut2')
            ->add('periode2')
            ->add('description2' ,TextareaType::class)
            ->add('work1')
            ->add('company1')
            ->add('workperiod1')
            ->add('workdescription1',TextareaType::class)
            ->add('work2')
            ->add('company2')
            ->add('workperiod2')
            ->add('workdescription2',TextareaType::class)
            ->add('Modifier',SubmitType::class)
            ->add('Modifier2',SubmitType::class)
            ->add('Modifier3',SubmitType::class);
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
