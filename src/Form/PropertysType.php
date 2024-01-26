<?php

namespace App\Form;

use App\Entity\Property;
use App\Form\PropertysType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class PropertysType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        
            ->add('category',ChoiceType::class, [
                'choices' => [
                    'A Vendre' => 1,
                    'A Louer' => 2,
                   ],
                   'label'=>'Categorie',
                   ])
            ->add('type',ChoiceType::class, [
                'choices' => [
                    'Maison' => 1,
                    'Appartement' => 2,
                    'label'=>'Type',
                ],
                
                ])
            ->add('surface',NumberType::class,[
                'label'=>'Surface M²',
            ])
            ->add('status',ChoiceType::class, [
                'choices' => [
                    'Très Bien' => 1,
                    'Bien' => 2,
                    'Pas Mal' => 3,
                    'Mal' => 4,
                    'Très Mal' => 5,
                ],
                
                ])
            ->add('description')
            ->add('price')
            ->add('num_rooms')
            ->add('num_bathrooms')
            ->add('num_parkings')
            ->add('num_stage')
            ->add('numero_stage')
            ->add('image')
            ->add('internet')
            ->add('balcon')
            ->add('salle_sport')
            ->add('piscine')
            ->add('cuisine')
            ->add('security_cam')
            ->add('numero_way')
            ->add('name_way')
            ->add('type_way')
            ->add('city')
            ->add('zipecode')
            ->add('departement')
            ->add('region')
            ->add('map')
           
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Property::class,
        ]);
    }
}
