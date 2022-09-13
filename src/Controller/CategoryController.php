<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\Type\CategoryType;
use phpDocumentor\Reflection\Types\Boolean;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends AbstractController
{
    public function new(Request $request): Response
    {
        // creates a task object and initializes some data for this example
        $category = new Category();

        $form = $this->createForm(CategoryType::class, $category);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $category = $form->getData();

            // ... perform some action, such as saving the task to the database

            return $this->redirectToRoute('succes');
        }


        return $this->renderForm('category/category.html.twig', [
            'form' => $form,
        ]);
        
    }
}

