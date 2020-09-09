<?php

namespace App\Controller\Frontend;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FagController extends AbstractController
{
    /**
     * @Route("/paneliste/fag", name="user_fag")
     */
    public function index()
    {
        return $this->render('frontend/fag/index.html.twig', [
        ]);
    }
}
