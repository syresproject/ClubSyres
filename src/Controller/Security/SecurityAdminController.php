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

class SecurityAdminController extends AbstractController
{

    /**
     * @Route("/admin/login", name="app_admin_login")
     * @param AuthenticationUtils $authenticationUtils
     * @param Request $request
     * @return Response
     */
    public function login(AuthenticationUtils $authenticationUtils, Request $request): Response
    {
        //return new Response("Hello !", Response::HTTP_OK);

        /*
        $msg = $request->get("msg");
        $enabledM = $request->get("enabled");

        $dateNaissance = $request->get("dateNaissance");
        */

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        //dd($lastUsername);
        return $this->render('security/login.admin.html.twig',
            [
                'last_username' => $lastUsername,
                'error' => $error,
               /* 'msg'=>$msg,
                'enabledM' => $enabledM,
                'dateNaissance'=>$dateNaissance*/
            ]);
    }

    /**
     * @Route("/admin/logout", name="app_admin_logout")
     */
    public function logout()// on suppose que on a just admin, commenter le aut de user et tester just admin i
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }


}
