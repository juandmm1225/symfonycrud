<?php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use App\Entity\Product;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('code', TextType::class, ['required' => true])
            ->add('name', TextType::class, ['required' => true])
            ->add('description', TextType::class, ['required' => true])
            ->add('brand', TextType::class, ['required' => true])
            ->add('category', TextType::class, ['required' => true])
            ->add('price', FloatType::class, ['required' => true])
            ->add('createdAt', DateType::class, ['required' => true])
            ->add('updatedAt', DateType::class, ['required' => true])
            ->add('save', SubmitType::class, ['label' => 'Create category'])
        ;
    }
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Category::class,
        ]);
    }
}