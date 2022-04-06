<?php

namespace App\Form;

use App\Entity\Annonce;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AnnonceFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            
            ->add('description',CKEditorType::class)   

            ->add('categorie' ,  ChoiceType::class ,[


                'choices' => [
                    'Sélectionner catégorie'=>'Sélectionner catégorie',
                    'Santé' => 'Santé',
                    'Mechanique'=> 'Méchanicien'
                ],
                ]



            )


            ->add('country' ,  ChoiceType::class ,[


                'choices' => [
                    'Sélectionner location'=>'Sélectionner pays',
                    'afrique' => 'afrique',
                    'france'=> 'france'
                ],
                ]


            )

            ->add('city' ,  ChoiceType::class ,[


                    'choices' => [
                        'Sélectionner cité'=>'Sélectionner cité',
                        'tunis' => 'tunis',
                        'paris'=> 'paris'
                    ],
                ]


            )

            ->add('type' ,  ChoiceType::class ,[


                    'choices' => [
                        'Type de travail'=>'Type de travail',
                        'Temps partiel ' => 'Temps partiel ',
                        'Temporaire'=> 'Temporaire'
                    ],
                ]


            )

            ->add('exp' ,  ChoiceType::class ,[


                    'choices' => [
                        'Exerience'=>'Experience(Optional)',
                        '1 Moins de 1 an' => '1',
                        '2 ans'=> '2',
                        '3 ans'=>'3',
                        '4 ans'=>'4',
                        'Sur 5 ans'=>'5'
                    ],
                ]


            )

            ->add('salaire')

            ->add('qualification' ,  ChoiceType::class ,[


                    'choices' => [
                        'Qualification'=>'Qualification',
                        'immatriculation'=>'immatriculation',
                        'Intermédiaire' => 'Intermédiaire',
                        'Diplômé'=> 'Diplômé',

                    ],
                ]


            )

            ->add('sex' ,  ChoiceType::class ,[


                    'choices' => [
                        'Sex'=>'Sex',
                        'Homme' => 'Homme',
                        'Femme'=> 'Femme',

                    ],
                ]


            )


            ->add('description',TextareaType::class)
            ->add('eduexp',TextareaType::class)
            ->add('responsibilities',TextareaType::class)
            ->add('autres',TextareaType::class)



            ->add('publier',SubmitType::class);
            
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Annonce::class,
        ]);
    }
}
