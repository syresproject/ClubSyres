<?php

namespace App\Services;

use App\Entity\Link;
use App\Entity\Survey;
use App\Entity\User;
use Doctrine\ORM\EntityManager;

class Gamification
{
    private $em;

    public function __construct(EntityManager $em, SurveyService $surveyService)
    {
        $this->em = $em;
        $this->surveyService = $surveyService;
    }

    public function getTotalPoints($user)
    {
        $totalPoints = 0;

        $typeCount = array(
            Survey::ENQUETE         => $user->getBonusSurvey(),
            Survey::PRE_RECRUTEMENT => $user->getBonusPrerecruitment(),
            Survey::TEST            => $user->getBonusTest(),
        );

        $totalPoints += $user->getBonusPrerecruitment() * 100;
        $totalPoints += $user->getBonusSurvey() * 100;
        $totalPoints += $user->getBonusTest() * 50;
        $totalPoints += $user->getBonusPoint();

        foreach ($user->getPanelisteGroups() as $userGroup) {
            foreach ($userGroup->getSurveys() as $survey) {
                if ($this->surveyService->userHasRepliedAllLinksForSurvey($user, $survey)) {

                    $links = $survey->getLinks();

                    foreach ($links as $link) {
                        switch ($link->getType()) {
                            case Link::TEST_FINAL:
                                $totalPoints += 50;
                                break;
                            case Link::EMOTION:
                                $totalPoints += 50;
                                break;
                            case Link::TENUS:
                                $totalPoints += 100;
                                break;
                            default:
                                break;
                        }
                    }

                    $typeCount[$survey->getType()]++;

                    if ($survey->getType() == Survey::ENQUETE || $survey->getType() == Survey::PRE_RECRUTEMENT) {
                        $totalPoints += 100;
                    } else {
                        $totalPoints += 50;
                    }
                }
            }
        }

        // FOCUS TEST
        $focusMessageRepo = $this->em->getRepository('App:FocusMessage');
        $focusParticipations = $focusMessageRepo->getTotalParticipation($user);

        $totalPoints += $focusParticipations * 50;

        // CLUB SYRES
        $clubArticleRepo = $this->em->getRepository('App:ClubArticle');
        $clubParticipations = $clubArticleRepo->getTotalParticipation($user);

        $totalPoints += $clubParticipations * 50;

        return array(
            'totalPoints'           => $totalPoints,
            'typeCount'             => $typeCount,
            'focusParticipations'   => $focusParticipations,
            'clubParticipations'    => $clubParticipations
        );
    }

    public function getRankingArray()
    {
        //Le grade de point 
        return array(
            array(
                'name'  => 'Débutant',
                'from'  => 0,
                'to'    => 999,
                'stars' => 0,
                'next'  => 'Bronze'
            ),
            array(
                'name'  => 'Bronze',
                'from'  => 1000,
                'to'    => 2499,
                'stars' => 1,
                'next'  => 'Argent'
            ),
            array(
                'name'  => 'Argent',
                'from'  => 2500,
                'to'    => 4499,
                'stars' => 2,
                'next'  => 'Or'
            ),
            array(
                'name'  => 'Or',
                'from'  => 4500,
                'to'    => 6999,
                'stars' => 3,
                'next'  => 'Platine'
            ),
            array(
                'name'  => 'Platine',
                'from'  => 7000,
                'to'    => 9999,
                'stars' => 4,
                'next'  => 'Diamant'
            ),
            array(
                'name'  => 'Diamant',
                'from'  => 10000,
                'to'    => PHP_INT_MAX,
                'stars' => 5,
                'next'  => false
            )
        );
    }

    public function getActualRankingData($points)
    {
        $rankings = $this->getRankingArray();

        foreach ($rankings as $rankingData) {
            if ($rankingData['from'] <= $points && $rankingData['to'] > $points)
                return $rankingData;
        }

        return false;
    }

    public function getRankingEvolutionPercent($points)
    {
        $actualRanking = $this->getActualRankingData($points);

        if ($actualRanking) {
            if ($actualRanking['next'] == false) {
                return 100;
            }

            $points = round(($points - $actualRanking['from']) / ($actualRanking['to'] - $actualRanking['from']) * 100);
            $roundedPoints = $points - ($points % 5);

            if ($roundedPoints < 5 && $points > 0)
                return 5;
            return $roundedPoints;
        }

        return 0;
    }
}