<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloWorldController extends AbstractController
{
    /**
     * @Route("/{name}", name="hello_world")
     * @param $name
     * @return Response
     */
    public function index($name)
    {
        return $this->render('hello_world/index.html.twig', [
            'name' => $name,
        ]);
    }
}
