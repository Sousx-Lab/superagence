<?php

namespace App\Form;

use App\Entity\Contact;
use Grafikart\RecaptchaBundle\Type\RecaptchaSubmitType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class,[
                'label' => 'Nom',
                'required' => true,
            ])
            ->add('lastname', TextType::class,[
                'label' => 'Prénom',
                'required' => true,
            ])
            ->add('phone', TextType::class,[
                'label' => 'Téléphone',
                'required' => false,
            ])
            ->add('email', EmailType::class,[
                'label' => 'Email',
                'required' => true,
            ])
            ->add('message', TextareaType::class)
            ->add('captcha', RecaptchaSubmitType::class,[
                'label' => 'Envoyer',
                'attr' => [
                    'class' => 'btn btn-primary'
                ]
            ]);
         
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class
        ]);
    }
}
