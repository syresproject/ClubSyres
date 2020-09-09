<?php

namespace App\Form\Backend;

use App\Entity\PanelisteGroup;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Choice;

class ImpPanelisteGroupType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('group', EntityType::class, [
                // looks for choices from this entity
                'class' => PanelisteGroup::class,
                "mapped"=>false,
                'choice_label' => 'name',
                // 'multiple' => true,
                // 'expanded' => true,
            ])
            ->add('file', FileType::class,
                array("mapped"=>false
                ))



        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\Entity\PanelisteGroup'
        ));
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'app_panelistegroup';
    }
}
