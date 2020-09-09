<?php

namespace App\Form\TestAvenir;

use App\Entity\Deo;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class DeoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('utilisateur_deo', ChoiceType::class,[
                    'choices'  => [
                        'Oui, de déodorant'=>'Oui, de déodorant',
                        'Oui, d\'anti-transpirant'=>'Oui, d\'anti-transpirant',
                        'Non'=>'Non'
                    ],
                    'label' => false
                ]
            )
            ->add('sels_alu',ChoiceType::class, array(
                'label' => false,
                'choices' => array(
                    'Oui'=> 'Oui',
                    'Non'=> 'Non'),
                'expanded' => true,
                'multiple' => false,
                'required' => false,
                ))

            ->add('pierre_alun', ChoiceType::class, array(
                'label' => false,
                'choices' => array(
                    'Oui'=> 'Oui',
                    'Non'=> 'Non'),
                'expanded' => true,
                'multiple' => false,
                'required' => true,
            ))

            ->add('forme_deo',
                ChoiceType::class, array(
                    'choices' => array(
                        'Spray/aérosol'=>'spray',
                        'Stick'=>'stick',
                        'Crème/tube'=>'Crème/tube',
                        'Bille/roll-on'=>'Bille/roll-on',
                        'Lingettes'=>'lingettes',
                        'Pierre d\'alun'=>'Pierre d\'alun',
                    )
                ))

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Deo::class,
        ]);
    }
}