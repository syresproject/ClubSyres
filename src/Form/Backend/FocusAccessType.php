<?php

namespace App\Form\Backend;

use App\Entity\FocusAccess;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FocusAccessType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('access', ChoiceType::class, array(
                'choices'           => array(
                    'Par défaut'    => FocusAccess::ACCESS_BY_DEFAULT,
                    'Forcé oui'     => FocusAccess::ACCESS_FORCED_YES,
                    'Forceé non'    => FocusAccess::ACCESS_FORCED_NO
                ),
                'choices_as_values' => true
            ))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\Entity\FocusAccess'
        ));
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'app_focusaccess';
    }
}
