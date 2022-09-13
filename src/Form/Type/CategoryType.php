<?php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use App\Entity\Category;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class CategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, ['required' => true])
            ->add('active', BooleanType::class, ['required' => true])
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