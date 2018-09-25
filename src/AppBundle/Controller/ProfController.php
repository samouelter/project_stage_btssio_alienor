<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ProfController extends Controller
{
    /**
     * @Route("/prof/parametre", name="parametre_prof")
     */
    public function parametre_prof(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('parametre_utilisateur.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/prof/contact", name="contact_prof")
     */
    public function contact_prof(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('contact_prof.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/prof/recherche_etp", name="recherche_etp")
     */
    public function recherche_etp(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('recherche_entreprise.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/prof/convention", name="convention")
     */
    public function convention(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('convention.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/prof/eleves", name="liste eleves")
     */
    public function liste_eleves(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('eleves.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/prof/validation", name="validation eleves")
     */
    public function valid_inscr(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('validation_inscritpion.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
