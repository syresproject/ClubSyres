<?php

namespace App\Command;

use App\Repository\UserRepository;
use ProxyManager\Autoloader\Autoloader;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class MailCommand extends Command
{

    protected static $defaultName = 'MailCommand';
    private $mailer;
    private $userRepo;
    /**
     * MailCommand constructor.
     */
    public function __construct(MailerInterface $mailer, UserRepository $userRepository)
    {
        $this->mailer = $mailer;
        $this->userRepo = $userRepository;
        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setDescription('c cmd pour envoyer des emails a nos client') // c just un description pour ton command si tu travail en group, les membre peux comprendre le cmd
            ->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')// ca comme les parametre en passe a un fonction, pour example un id ou la date ? pas la date d'envoie, une date pour comparer par ex. ok
            ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')// c pour ajouter des options par exm
        ;
    }


    /*
     * la function execute ? execute est recever les parametres et les option pour nous utilisons
     */
    //je peux passer le request ici pour recuperer les getUsers  ?
    // c un cmd il ny'a aucun relation avec request ok
    // alors appeler users repository, et $user->findAll();
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $arg1 = $input->getArgument('arg1');

        // il verfie quoi ?// si on a des argument ou non ok
        if ($arg1) {
            $io->note(sprintf('You passed an argument: %s', $arg1));
        }

        if ($input->getOption('option1')) {
            // ...
        }


        $idLinkIdSurvey = null;
        //for sur une collection fixr ca
        //recuperation du Users
        $users = $this->userRepo->findAll();//good
        foreach ($users as $user) {
            $idLink = $user->getPanelisteGroups();
            foreach ($idLink->getIterator() as $idLink => $valueIdLink) {

                $panelise_groupIdLink = $valueIdLink->getSurveys();
                foreach ($panelise_groupIdLink->getIterator() as $valueIdLink => $valueIdLink2) {
                    $idLinkIdSurvey = $valueIdLink2->getPanelisteGroup();

                    //foreach ($idLinkIdSurvey->getIterator()as $valueIdLink2 => $valueIdLink2){
                        // que ce que tu fais? boucler sur le groupe pour recuperer la liste user avec leur mail .concentrer
                    //}
                     //dd("result : " . $idLinkIdSurvey); //il faut faire execute ?essayer pour faire dump ?oui ça va s'afficher ou ?uoi je vaux dire dans le navigateur ?nn dans le console

                    //je ne comprends pas comment le lancer bin/console lenomdecmd
                    //$idLinkIdSurvey->getSurveys();
                    $surveys = $idLinkIdSurvey->getSurveys();
                    foreach ($surveys as $survey) {
                        $links = $survey->getLinks();
                        foreach ($links as $link){// les dates en dateun sont datetime en datetime ja vu date car tout 00:00:00 on peut le mettre en date


                            //copparaison de la date avec la date du jour
                            if($link->getDateUn() === new \DateTime('now')){
                                // envoyer mail()


                                /*
                                 * Je vais prendre le meme boucle pour recuperer la liste des email
                                 * par contre là imagine que
                                 */
                                $fromMail = 'mouaderrah1@gmail.com';//done
                                $tomail = $user->getEmail();// ddjidor@gmail.com
                                $message = (new Email())
                                    ->from($fromMail)
                                    ->to($tomail) //c'est un tableau des mails  ok
                                    ->subject('[Syres, Vous etes invité par ] ')


                                    ->html('
                            <h2>Hi there </h2>
                            <p>We\'re thrilled to invite you on behalf of  to test exclusive cosmetic products with us. The idea is simple: test a product at home, give your feedback, cash in your reward.</p>
                            <p>The products you\'ll test are manufactured by the most renowned cosmetic brands. Their names will never be disclosed prior to the test to avoid any bias.</p>
                            <p>Ready to start testing? Take the 5-minute subscription form at www.syres.sg/5-minute-form and wait to receive your first invite from our team. Hint: the more information you provide, the higher your chances to test products that suit your needs!</p>
                            <p>In the meantime, feel free to indulge yourself with our beauty advice: www.syres.sg/blog</p>
                      

                ');


                                $this->mailer->send($message);
                            }
                            dump($link->getDateUn());
                        }

                    }
                }
            }
        }

        $io->success('email a ete envoyé avec success');

        return 0;
    }

    //le mail ou est le code
    //et on mets ou la date d'envoies la date d'envoie en cron, ici just pour envoyer des mail ok
}
