<?php

namespace App\Form;

use App\Entity\Survey;
use App\Form\Backend\LinkType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class SurveyType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idSurvey')
            ->add('name')
            ->add('type', ChoiceType::class, array(
                'choices' => array(
                    'survey'           => Survey::ENQUETE,
                    'preselection'   => Survey::PRE_RECRUTEMENT,
                    'Test'              => Survey::TEST
                )
            ))
            ->add('description', CKEditorType::class)

            ->add('category')
            ->add('panelisteGroup')
            ->add('status', ChoiceType::class, array(
                'choices' => array(
                    'upcoming'       => Survey::A_VENIR,
                    'on_going'      => Survey::EN_COURS,
                    'Focus group'   => Survey::FOCUS_GROUP,
                    'closed'       => Survey::CLOTURE
                ),
                'expanded' => true,
            ))
            ->add('imageFile', FileType::class, array(
                'required' => false
            ))
            ->add('visible', ChoiceType::class, array(
                'multiple'          => false,
                'choices'           => array('yes' => true, 'no' => false),
                'expanded' => true,
            ))
            ->add('links', CollectionType::class, array(
                'entry_type'    => LinkType::class,
                'allow_add'     => true,
                'allow_delete'  => true,
                'by_reference'  => false
            ))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\Entity\Survey'
        ));
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'App_survey';
    }
}
