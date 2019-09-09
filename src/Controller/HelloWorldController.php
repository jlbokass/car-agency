<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloWorldController extends AbstractController
{
    /**
     * @Route("/", name="hello_world", methods={"GET"})
     *
     * @return Response
     */
    public function index()
    {
        $langages = [
          'html',
          'javascript',
          'php',
          'twig'
        ];

        return $this->render('hello_world/index.html.twig', [
            'languages' => $langages,
        ]);
    }

    /**
     * @Route("/{language}", name="show", methods={"GET"})
     * @param $language
     * @return Response
     */
    public function show($language)
    {
        return $this->render('hello_world/show.html.twig', [
            'language' => $language,
        ]);
    }
}
