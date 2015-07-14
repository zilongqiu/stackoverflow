<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\Type\UserType;

/**
 * @Route("/users")
 */
class UserController extends Controller
{
    /**
     * @Route("/add", name="user_add")
     */
    public function addAction(Request $request)
    {
        $form = $this->createForm(new UserType());
        $form->handleRequest($request);

        if ($form->isValid()) {
            $data = $form->getData();
        }

        return $this->render('AppBundle:User:add.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
