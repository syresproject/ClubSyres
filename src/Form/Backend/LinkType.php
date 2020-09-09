<?php

namespace App\Form\Backend;

use App\Entity\Link;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LinkType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numeroLien')
            ->add('name')
            ->add('link')
            ->add('dateUn',  DateType::class, [
                'widget'=>'single_text',
                'format' => 'yyyy-MM-dd',
                'html5' => true
            ])
            ->add('type', ChoiceType::class, array(
                'choices' => array(
                    'Par défaut'   => Link::OTHER,
                    'Test final'   => Link::TEST_FINAL,
                    'Emotion'      => Link::EMOTION,
                    'Tenus'        => Link::TENUS
                ),
            ))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\Entity\Link'
        ));
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'App_link';
    }
}
