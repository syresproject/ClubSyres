<?php

namespace App\Controller\Frontend;

use App\Entity\Link;
use App\Entity\LinkLog;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class LinkController extends AbstractController
{
    /**
     *
     * @Route("/paneliste/link/{token}", name="user_link_redirect")
     */
    public function redirectAction(Request $request, $token)
    {
        /** @var Link $link */
        $link = $this->getDoctrine()->getRepository('App:Link')->findOneBy(array(
            'token' => $token
        ));

        if ($link) {
            /** @var User $user */
            $user = $this->getUser();
            $panelisteGroup = $link->getSurvey()->getPanelisteGroup();

            if (!$user->getPanelisteGroups()->contains($panelisteGroup)) {
                $this->addFlash('error', 'You cannot access to this survey');
                //return $this->redirectToRoute('user_accueil_index');
            }

            // Log activity
            $linkLog = new LinkLog();
            $linkLog->setUrl($link->getLink());
            $linkLog->setLink($link);
            $linkLog->setUser($user);
            $linkLog->setType(LinkLog::ACCESS);

            $em = $this->getDoctrine()->getManager();
            $em->persist($linkLog);
            $em->flush();

            // Redirection
            return $this->redirect($link->getLink());
        }

        $this->addFlash('error', 'Survey not found');
        return $this->redirectToRoute('admin_contact_index', );
    }
}
