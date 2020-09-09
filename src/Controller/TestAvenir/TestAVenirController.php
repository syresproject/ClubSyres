<?php

namespace App\Controller\TestAvenir;

use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/paneliste", name="user_test_a_venirs_")
 */
class TestAVenirController extends AbstractController
{
    /**
     * @Route("/test_a_venir", name="index")
     */
    public function index()
    {
        $userP = $this->getUser()->getIdPaneliste();
        $userS = $this->getUser()->getTitle();
        $userA = $this->getUser()->getBirthdate();
        $_age = floor((time() - strtotime($ymd)) / 31556926);


        //dump($_age);
        //dump($userA);
        return $this->render('frontend/test_a_venir/test_a_venir.index.html.twig', [
            'controller_name' => 'TestAVenirController',
            'userP'=>$userP,
            /*
            'date' => (new \DateTime('+10 seconds'))->getTimestamp(),
            */
        ]);
    }
}
