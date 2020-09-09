<?php

namespace App\Services;


use App\Entity\FocusAccesss;
use App\Entity\LinkLog;
use App\Entity\Survey;
use App\Entity\User;
use App\Services\SurveyService;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;


class FocusAccessCheck
{
    private $em;

    public function __construct(EntityManagerInterface $em, SurveyService $surveyService)
    {
        $this->em = $em;
        $this->surveyService = $surveyService;
    }

    /**
     * @param User $user
     * @param Survey $survey
     */
    public function checkUser(User $user, $survey)
    {
        return $this->surveyService->userHasRepliedAllLinksForSurvey($user, $survey);
    }

    /**
     * @param User $user
     * @param Survey $survey
     */
    public function checkUserWithOverride(User $user, $survey)
    {
        $focusAccess = $this->em->getRepository('App:FocusAccesss')->findOneBy(array(
            'user' => $user,
            'focusGroup' => $survey->getFocusGroup()
        ));

        if (!$focusAccess || $focusAccess->getAccess() == FocusAccesss::ACCESS_BY_DEFAULT) {
            return $this->surveyService->userHasRepliedAllLinksForSurvey($user, $survey);
        } elseif ($focusAccess->getAccess() == FocusAccesss::ACCESS_FORCED_NO) {
            return false;
        }

        return true;
    }
}