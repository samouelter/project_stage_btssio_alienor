<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends Controller
{
    /**
     * @Route("/eleve", name="homepage_eleve")
     */
    public function indexEleve(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('index/index_eleve.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/prof", name="hoddmepage_prof")
     */
    public function indexProf(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('index/index_prof.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }


        /**
        * Matches /eleve/*
        *
        * @Route("/eleve/{err}", name="404")
        */
        public function error404(Request $request,$err)
        {
            // replace this example code with whatever you need
            return $this->render('404.html.twig', [
                'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            ]);
        }

}
