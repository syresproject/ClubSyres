<?php

namespace App\Form\Backend;

use App\Entity\Newsletter;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class NewsletterType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('imageFile', FileType::class, array(
                'required' =>false
            ))
            ->add('imageFileUn', FileType::class, array(
                'required' =>false
            ))
            ->add('imageFileDeux', FileType::class, array(
                'required' =>false
            ))
            ->add('imageFileTrois', FileType::class, array(
                'required' =>false
            ))
            ->add('imageFileQuatre', FileType::class, array(
                'required' =>false
            ))
            ->add('presentation', TextType::class)
            ->add('salutation', TextType::class)
            ->add('text_desc', TextType::class)
            ->add('footer_text_un', TextType::class)
            ->add('footer_text_deux', TextType::class)
            ->add('footer_text_trois', TextType::class)
            ->add('footer_text_quatre', TextType::class)
            ->add('footer_text_cinq', TextType::class)
            ->add('footer_text_six', TextType::class)
            ->add('footer_text_sept', TextType::class)
            ->add('footer_text_huit', TextType::class)

            ->add('save', SubmitType::class, [
                'attr' => ['class' => 'save'],
            ]);


    }



    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'app_newsletter';
    }


}
