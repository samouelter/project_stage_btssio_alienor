<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class EleveController extends Controller
{
    /**
     * @Route("/eleve/parametre", name="parametre_eleve")
     */
    public function acces_parameter(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('parametre_utilisateur.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/eleve/contact", name="contact_eleve")
     */
    public function acces_contact(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('contact_eleve.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/eleve/proposition_stage", name="prop_stage")
     */
    public function prop_stage(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('proposition_stage.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/eleve/creer_etp", name="creation_entreprise")
     */
    public function creer_etp(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('creer_etp.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/eleve/info_etp", name="information_etp")
     */
    public function info_etp(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('info_etp.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
