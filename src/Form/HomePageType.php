<?php

namespace App\Form;

use App\Entity\HomePage;
use FOS\CKEditorBundle\Installer\CKEditorInstaller;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HomePageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('textWelcome', TextType::class)

            ->add('imageFile', FileType::class)
            ->add('imageFileUn', FileType::class)

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => HomePage::class,
        ]);
    }
}
