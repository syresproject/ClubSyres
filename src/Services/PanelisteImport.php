<?php

namespace App\Services;

use App\Entity\PanelisteGroup;
use App\Entity\User;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints\DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;

class PanelisteImport
{
    private $em;
    private $fosUserManager;
    private $phpexcel;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function importAction($filePath, $panelisteGroupId = null)
    {
        set_time_limit(0);
        ini_set('memory_limit',-1);
        copy($filePath, __DIR__.'/../../public/upload/import/data.csv');

        $userRepository = $this->em->getRepository('App:User');
        $this->em->getConnection()->getConfiguration()->setSQLLogger(null);

        /** @var ArrayCollection | User[] $allUsers */
        $allUsers = $userRepository->findAll();

        $listOfIdPaneliste = array();
        foreach ($allUsers as &$tmpUser) {
            $listOfIdPaneliste[$tmpUser->getIdPaneliste()] = $tmpUser;
        }

        $batchCount = 0;

        $file = fopen($filePath, "r");

        $lineCount = 1;
        while ($tmpRow = fgetcsv($file, 0, ';')) {
            for ($counter = 0; $counter < 10; $counter++) {
                if ((!isset($tmpRow[$counter]) || $tmpRow[$counter] == "") && ($counter != 7 && $counter != 6))  {
                    return [$lineCount, $counter];
                }
            }

            $lineCount++;
        }

        $file = fopen($filePath, "r");

        while ($tmpRow = fgetcsv($file, 0, ';')) {
            $zeroString = '';

            /* If user doesnt exist */
            if (!isset($listOfIdPaneliste[$tmpRow[0]])) {
                //$dtBirthdate = new DateTime('d-m-Y', $tmpRow[4]);
                $dtBirthdate = \DateTime::createFromFormat('d-m-Y', $tmpRow[5]);

                $newUser = new User();
                $newUser->setIdPaneliste($tmpRow[0]);
                $newUser->setTitle($tmpRow[1]);
                $newUser->setLastname($tmpRow[3]);
                $newUser->setFirstname($tmpRow[2]);
                $newUser->setBirthdate($dtBirthdate);
                $newUser->setStatut($tmpRow[9]);


                dump($dtBirthdate);
                dump($tmpRow);
                if (strlen($tmpRow[5]) <= 4) {
                    for ($i = 0; $i < 4 - strlen($tmpRow[5]); ++$i) {
                        $zeroString .= '0';
                    }
                    $newUser->setZipcode($zeroString . $tmpRow[5]);
                }
                else {
                    $newUser->setZipcode($tmpRow[5]);
                }

                $newUser->setPhone($tmpRow[6]);
                if (filter_var($tmpRow[4], FILTER_VALIDATE_EMAIL))
                    $newUser->setEmail($tmpRow[4]);


                if (isset($tmpRow[9]) && ($tmpRow[8] == 'X' || $tmpRow[9] == 'Z')) {
                    $newUser->setEnabled(false);
                } else {
                    $newUser->setEnabled(true);
                }

                if ($panelisteGroupId !== null) {
                    $panelisteGroup = $this->em->getRepository('App:PanelisteGroup')->find($panelisteGroupId);
                    $newUser->addPanelisteGroup($panelisteGroup);
                }

                //$newUser->setUsername($newUser->getIdPaneliste());
                $newUser->setPassword($tmpRow[4]);
                //$this->fosUserManager->updateUser($newUser, false);

                dump($this);
                $this->em->persist($newUser);

                $listOfIdPaneliste[$newUser->getIdPaneliste()] = $newUser;
            }

            /* If user already exist */
            else {
                $oldUser = $userRepository->findOneBy(array('idPaneliste' => $tmpRow[0]));
                $oldUser->setTitle($tmpRow[1]);
                $oldUser->setLastname($tmpRow[3]);
                $oldUser->setFirstname($tmpRow[2]);


                dump($tmpRow);

                if (strlen($tmpRow[5]) <= 4) {
                    for ($i = 0; $i <= 4 - strlen($tmpRow[5]); ++$i) {
                        $zeroString .= '0';
                    }
                    $oldUser->setZipcode($zeroString . $tmpRow[5]);
                }
                else {
                    $oldUser->setZipcode($tmpRow[5]);
                }

                $oldUser->setPhone($tmpRow[6]);
                if (filter_var($tmpRow[7], FILTER_VALIDATE_EMAIL))
                    $oldUser->setEmail($tmpRow[7]);

                /*
                if (isset($tmpRow[8])) {
                    $oldUser->setBonusTest($tmpRow[8]);
                }
                */

                /* Update birthdate + password */
                /*
                if ($oldUser->getDateNaissance()->format('d/m/Y') != $tmpRow[4]) {
                    if (!is_bool($tmpRow[4])) {
                        $dtBirthdate = DateTime::createFromFormat('d/m/Y', $tmpRow[4]);
                        $oldUser->setBirthdate($dtBirthdate);
                    }
                    $oldUser->setPlainPassword($tmpRow[4]);
                    $this->fosUserManager->updateUser($oldUser, false);
                }
                */

                if (isset($tmpRow[9]) && ($tmpRow[9] == 'X' || $tmpRow[9] == 'Z')) {
                    $oldUser->setEnabled(false);
                } else {
                    $oldUser->setEnabled(true);
                }

                /* Update group */
                if ($panelisteGroupId !== null) {
                    $panelisteGroup = $this->em->getRepository('App:PanelisteGroup')->find($panelisteGroupId);
                    if (!$oldUser->getPanelisteGroups()->contains($panelisteGroup)) {
                        $oldUser->addPanelisteGroup($panelisteGroup);
                    }
                }

                $this->em->persist($oldUser);
            }

            $batchCount++;

            if ($batchCount >= 200) {
                $batchCount = 0;

                $this->em->flush();
                $this->em->clear();
            }
        }

        $this->em->flush();
        $this->em->clear();

        return true;
    }
}