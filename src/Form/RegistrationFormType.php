<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
         ->add('lastname', TextType::class,[
            'attr'=>['class'=>'form-control','minlength'=>'2','maxlength'=>'50','placeholder'=>'Nom'],
            'label'=>'Nom',
            'label_attr'=>['class'=>'form-label'],
            'constraints'=>[new NotBlank(),new Assert\Length(['min'=>2,'max'=> 50])]])

        ->add('firstname',TextType::class,[
            'attr'=>['class'=>'form-control','minlength'=>'2','maxlength'=>'50','placeholder'=>'prenom'],
            'label'=>'Prenom',
            'label_attr'=>['class'=>'form-label'],
            'constraints'=>[new Assert\NotBlank(),new Assert\Length(['min'=>2, 'max'=>50])]])

        ->add('mobile',TextType::class,[
            'attr'=>['class'=>'form-control','placeholder'=>'Tél-Portable'],
            'label'=>'Tél-Portable',
            'label_attr'=>['class'=>'form-label'],
            'constraints'=>[new Assert\NotBlank()]])
        ->add('tel_fixe',TextType::class,[
            'attr'=>['class'=>'form-control','minlength'=>'2','maxlength'=>'10','placeholder'=>'Tél-Fixe'],
            'label'=>'Tél-Fixe',
            'label_attr'=>['class'=>'form-label'],
            'constraints'=>[new Assert\NotBlank()]])
        ->add('adresse',TextType::class,[
            'attr'=>['class'=>'form-control','minlength' =>'2','maxlength'=>'100','placeholder'=>'Adresse'],
            'label'=>'Adresse',
            'label_attr'=>['class'=>'form-label'],
            'constraints'=>[new NotBlank(),new Assert\Length(['min'=>2,'max'=>100])]])

        ->add('city',TextType::class,[
            'attr'=>['class'=>'form-control','minlength'=>'2','maxlength'=>'50','placeholder'=>'Ville'],
            'label'=>'Ville',
            'label_attr'=>['class'=>'form-label'],
            'constraints'=>[new NotBlank(),new Assert\Length(['min'=>2,'max'=>50])]])
        ->add('zipecode',TextType::class,[
            'attr'=>['class'=>'form-control','placeholder'=>'Code-Postale'],
            'label'=>'Code-Postale',
            'label_attr'=>['class'=>'form-label'],
            'constraints'=>[new Assert\NotBlank()]])

        ->add('email',EmailType::class, [
            'attr'=>['class'=>'form-control','minlength'=>'2','maxlength'=>'180','placeholder'=>'Email'],
            'label'=>'Email',
            'label_attr'=>['class'=>'form-label'],
            'constraints'=>[new Assert\NotBlank(),new Assert\Email(),new Assert\Length(['min'=>2,'max'=>180])]])
           
        ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ])
        ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password','placeholder'=>'Mot de Passe'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
