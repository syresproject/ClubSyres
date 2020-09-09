<?php

namespace App\Controller\Security;

use App\Entity\Link;
use App\Entity\User;
use App\Form\Backend\RegistrationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{

    /**
     * @Route("/", name="app_login")
     * @param AuthenticationUtils $authenticationUtils
     * @param Request $request
     * @return Response
     */
    public function login(AuthenticationUtils $authenticationUtils, Request $request): Response
    {
        //return new Response("Hello !", Response::HTTP_OK);

        $msg = $request->get("msg");
        $isEnabled = $request->get("enabled");

        //dump($isEnabled);
        $dateNaissance = $request->get("dateNaissance");

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig',
            [
                'last_username' => $lastUsername,
                'error' => $error,
                'msg'=>$msg,
                'enabledM' => $isEnabled,
                'dateNaissance'=>$dateNaissance
            ]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()// on suppose que on a just admin, commenter le aut de user et tester just admin i
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    /*
     * @Route("/inscription", name="SecurityController")
     * @param Request $request
     * @return Response
     * /
    public function registration(Request $request){
        $user = new User();
        $form = $this->createForm(RegistrationType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted()&& $form->isValid()){
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($user);
            $manager->flush();

            return $this->redirectToRoute('app_login');
        }
        return $this->render('security/securityRegistration.html.twig', [
            'form' => $form->createView()
        ]);
    }
    */

}
