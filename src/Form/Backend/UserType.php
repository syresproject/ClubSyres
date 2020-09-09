<?php

namespace App\Form\Backend;

use App\Entity\PanelisteGroup;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idPaneliste')
            ->add('title', ChoiceType::class, array(
                'choices' => array(
                    'Homme' => '1',
                    'Femme' => '2',
                ),
                'empty_data' => '',
                'required' => false
            ))
            ->add('firstname')
            ->add('lastname')
            ->add('birthdate', DateType::class, array(
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
                'html5' => false
            ),)
            ->add('email')
            ->add('phone')
            ->add('enabled', ChoiceType::class, array(
                'multiple' => false,
                'expanded' => true,
                'choices' => array('Oui' => true, 'Non' => false)
            ))
            ->add('statut')
            ->add('panelisteGroups', EntityType::class, array(
                'class' => PanelisteGroup::class,
                'multiple' => true,
                'expanded' => true
            ))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'App_user';
    }


}