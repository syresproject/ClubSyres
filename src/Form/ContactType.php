<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idPaneliste')
            ->add('firstname')
            ->add('lastname')
            ->add('email', EmailType::class, array(
                'required'=>false
            ))
            ->add('subject')
            ->add('content')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\Entity\Contact'
        ));
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'app_contact';
    }
}
