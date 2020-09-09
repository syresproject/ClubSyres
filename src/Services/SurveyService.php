<?php

namespace App\Services;

use App\Entity\LinkLog;
use App\Entity\Survey;
use App\Entity\User;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;

class SurveyService
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @param User $user
     * @param Survey $survey
     * @return bool
     */
    public function userHasRepliedAllLinksForSurvey(User $user, $survey)
    {
        foreach ($survey->getLinks() as $link) {
            $linkLogs = $this->em->getRepository('App:LinkLog')->findOneBy(array(
                'user' => $user,
                'type' => LinkLog::REPLY,
                'link' => $link
            ));

            if (!$linkLogs)
                return false;
        }

        return true;
    }

    /**
     * @param User $user
     * @return array
     */
    public function getSurveyCount($user)
    {
        $surveysCount = array(
            Survey::ENQUETE             => 0,
            Survey::PRE_RECRUTEMENT     => 0,
            Survey::TEST                => 0,
        );

        if ($user) {
            $panelisteGroups = $user->getPanelisteGroups();
            foreach ($panelisteGroups as $panelisteGroup) {
                $tmpSurveys = $panelisteGroup->getSurveys();
                foreach ($tmpSurveys as $tmpSurvey) {
                    if ($tmpSurvey->isVisible() &&
                        ($tmpSurvey->getStatus() == Survey::EN_COURS || $tmpSurvey->getStatus() == Survey::FOCUS_GROUP))  {
                        $surveysCount[$tmpSurvey->getType()]++;
                    }
                }
            }
        }

        return $surveysCount;
    }
}