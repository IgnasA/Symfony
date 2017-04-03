<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $ar = [1, 6, 17, 99, 18];
        // replace this example code with whatever you need
        $form = $this->createFormBuilder()
          ->add('name', TextType::class)
          ->add('submit', SubmitType::class)
          ->getForm();
        return $this->render('AppBundle::index.html.twig', [

            //'name' => 'Testas'
            //'arr' => $ar,
            'form' => $form->createView(),
        ]);
    }
}
