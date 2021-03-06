<?php
// src/AppBundle/Form/RegistrationType.php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;


/**
 * Class EnregistrementType
 * @package AppBundle\Form
 */
class EnregistrementType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->remove('username')
            ->remove('plainPassword')

            ->add('email',TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Adresse email'),
                'required' => true,
                'label' => false
            ))

            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'invalid_message' => 'Les mots de passe ne concordent pas.',

                'options' => array(
                    'attr' => array(
                        'class' => 'password-field')),

                'required' => true,

                'first_options' => array(
                    'label' => false,
                    'attr' => array(
                        'placeholder' => 'Créez un mot de passe')),

                'second_options' => array(
                    'label' => false,
                    'attr' => array(
                        'placeholder' => 'Confirmez le mot de passe')
                )))

            ->add('conditions',CheckboxType::class, array(
                'mapped' => false,
                'required' => true,
                'label' => 'J\'ai lu et j\'accepte.'
                ));


    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }
}