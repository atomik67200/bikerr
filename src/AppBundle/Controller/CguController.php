<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;


/**
 * Aide controller.
 *
 * @Route("/cgu")
 */
class CguController extends Controller {

    /**
     * @Route("/conditions-generales", name="conditions_generales")
     *
     */
    public function conditionsGenerales() {
        $membre = $this->getUser();
        return $this->render('cgu/generales.html.twig', array('membre' => $membre));
    }

    /**
     * @Route("/utilisation-service", name="utilisation_service")
     *
     */
    public function utilisationService() {
        $membre = $this->getUser();
        return $this->render('cgu/utilisation.html.twig', array('membre' => $membre));
    }

    /**
     * @Route("/conditions-assurance", name="condition_assurance")
     *
     */
    public function conditionsAssurance() {
        $membre = $this->getUser();
        return $this->render('cgu/assurance.html.twig', array('membre' => $membre));
    }

    /**
     * @Route("/confidentialite", name="confidentialite")
     *
     */
    public function confidentialite() {
        $membre = $this->getUser();
        return $this->render('cgu/confidentialite.html.twig', array('membre' => $membre));
    }

    /**
     * @Route("/ecomobilite", name="ecomobilite")
     *
     */
    public function ecomobilite() {
        $membre = $this->getUser();
        return $this->render('cgu/ecomobilite.html.twig', array('membre' => $membre));
    }

    /**
     * @Route("/cookies", name="cookies")
     *
     */
    public function cookies() {
        $membre = $this->getUser();
        return $this->render('cgu/cookies.html.twig', array('membre' => $membre));
    }
}