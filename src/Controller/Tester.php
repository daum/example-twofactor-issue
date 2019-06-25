<?php

namespace App\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Tester extends AbstractController
{
    /**
     * @Route("/")
     * @Security("has_role('ROLE_USER')")
     */
    public function example()
    {
        if($this->isGranted('ROLE_ADMIN')){
            return new Response("Welcome admin <a href='/logout'>Logout</a>");
        }
        return new Response("Welcome <a href='/logout'>Logout</a>");
    }

}