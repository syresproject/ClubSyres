<?php

namespace App\Controller\Backend;

use App\Entity\PanelisteGroup;
use App\Form\Backend\UserImportType;
use App\Services\PanelisteImport;
use Carbon\Carbon;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\User;
use App\Form\Backend\UserType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * User controller.
 * @Route("/admin/user", name="admin_user_")
 */
class UserController extends AbstractController
{
    /**
     * Lists all User entities.
     * @Route("/index", name="index")
     * @param Request $request
     * @param PaginatorInterface $paginator
     */
    public function indexAction(Request $request, PaginatorInterface $paginator)
    {

        $donnees = $this->getDoctrine()->getRepository(User::class)->findBy([],['id' => 'desc']);


        $users = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            10 // Nombre de résultats par page
        );

        return $this->render('Backend/User/index.html.twig',array(
            'users' =>$users
        ));


        /*  $em = $this->getDoctrine()->getManager();

          $users = $em->getRepository(User::class)->findAll();


          //dd($users);
          return $this->render('Backend/User/index.html.twig',array(
              'users' =>$users
          ));
          */


        /*
          $students = $this->getDoctrine()
              ->getRepository('App:User')
              ->findAll();

          if ($request->isXmlHttpRequest() || $request->query->get('showJson') == 1) {
              $jsonData = array();
              $idx = 0;
              foreach($students as $student) {
                  $temp = array(
                      'idPaneliste' => $student->getIdPaneliste(),
                      'title' => $student->getTitle(),
                      'firstname' => $student->getFirstname(),
                      'lastname' => $student->getLastname(),
                     /* 'birthdate' => $student->getBirthdate().$this->formatDate("Ymd"),* /
                      'email' => $student->getEmail(),
                      'state' => $student->getStatut()
                  );
                  $jsonData[$idx++] = $temp;
              }
              return new JsonResponse($jsonData);
          } else {
              return $this->render('Backend/User/index.html.twig');
          }
        */

    }

    /**
     * Creates a new User entity.
     * @Route("/create", name="create")
     */
    public function createAction(Request $request)
    {
        $entity = new User();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $userManager = $this->container->get('fos_user.user_manager');
            $entity->getBirthdate()->format('d/m/Y');

            /*
            $entity->setPlainPassword($entity->getBirthdate()->format('d/m/Y'));
            $entity->setUsername($entity->getIdPaneliste());
            $userManager->updateUser($entity, false);*/

            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $this->addFlash('success', 'Le panéliste a bien été crée.');
            return $this->redirect($this->generateUrl('admin_user_show', array('id' => $entity->getId())));
        }

        return $this->render('Backend/User/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a User entity.
     *
     * @param User $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(User $entity)
    {
        $form = $this->createForm(UserType::class, $entity, array(
            'action' => $this->generateUrl('admin_user_create'),
            'method' => 'POST',
        ));
        return $form;
    }

    /**
     * Displays a form to create a new User entity.
     * @Route("/new", name="new")
     * @param Request $request
     * @return Response
     */
    public function newAction(Request $request)
    {
        $entity = new User();
        $form = $this->createForm(UserType::class, $entity);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($entity);
            //dump($entityManager);
            $entityManager->flush();

            $this->addFlash('success', 'Le panéliste a bien été crée.');
            return $this->redirect($this->generateUrl('admin_user_new'));
        }
        return $this->render('Backend/User/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a User entity.
     * @Route("/{id}/show", name="show")
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('App:User')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('Backend/User/show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing User entity.
     * @Route("/{id}/edit", name="edit")
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository(User::class)->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }
        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('Backend/User/edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a User entity.
     *
     * @param User $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(User $entity)
    {
        $form = $this->createForm(UserType::class, $entity, array(
            'action' => $this->generateUrl('admin_user_edit', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));
        return $form;
    }

    /**
     * Edits an existing User entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('App:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $userManager = $this->container->get('fos_user.user_manager');
            $entity->setPlainPassword($entity->getBirthdate()->format('d/m/Y'));
            $entity->setUsername($entity->getIdPaneliste());
            $userManager->updateUser($entity, false);

            $em->flush();

            $this->addFlash('success', 'Les modifications ont bien été prises en compte.');

            return $this->redirect($this->generateUrl('admin_user_edit', array('id' => $id)));
        }

        return $this->render('App:Backend/User:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a User entity.
     * @Route("/{id}/delete", name="delete")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('App:User')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find User entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('backend_user_index'));
    }

    /**
     * Creates a form to delete a User entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_user_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }


    public function formatDate(string $date)
    {
        $d = explode("/", explode(" ",$date)[0]);
        return \DateTime::createFromFormat('Ymd', $d[2].$d[1].$d[0]);
        //return $date->format('Y-m-d');
    }


    /**
     * @Route("/import", name="import")
     * @param Request $request
     * @param PanelisteImport $panelisteImportService
     * @return Response
     */
    public function importAction(Request $request, PanelisteImport $panelisteImportService)
    {
        //Reinitialisation d'un objet cession
        $session = $request->getSession();

        $import = new User();
        $form = $this->createForm(UserImportType::class, $import);
        $form->handleRequest($request);

        //init

        //un tableau des seters
        $usersSetters = [
            /*"setId",*/
            "setIdPaneliste",
            "setTitle",
            "setFirstname",
            "setLastname",
            "setEmail",
            "setBirthdate",
            "setStatut",
            "setPhone"
        ];

        if ($form->isSubmitted() && $form->isValid()) {
            //initialisation de un tableau vide
            //pour qu'il ne creer pas
            $arrayProblem = $session->get('name', []);

            // les ancient valeur provenant de la cession si sont superieur donc, il y avait de valeur
            //on reinitialise
            if (count($arrayProblem) > 0) $arrayProblem = [];

            //recupere les contenu du fichier
            $impForm = $form->get('file')->getData();
            $em = $this->getDoctrine()->getManager();
            $rowNo = 1;
            //email
            $eEmail = $em->getRepository(User::class);

            //un ArrayCollection est tableau avec beaucoup des fonctionnalité; exemple le premier le dernier etc.
            if (($fp = fopen($impForm, "r")) !== FALSE) {
                while (($row = fgetcsv($fp, 1000, ";")) !== FALSE) {

                    //dump($row);
                    //si la condition null
                    $userEm =$eEmail->findOneBy(["idPaneliste" => $row[0]]);
                    //dump($userEm);

                    //num la tails des setters ou les nombre des iteme
                    $num = count($usersSetters);
                    $rowNo++;
                    $test = new User();
                    if (!is_null($userEm)){
                        //dd($userEm);
                        //Modification Du statut
                        for ($c=0; $c < $num; $c++) {
                            if ($c == 6) {
                                //dump($c);
                                //une function qui contient deux array array
                                //carbon format la date
                                $test->setStatut(dd($row[$c]));
                            }
                        }
                        //continue;
                    }

                    for ($c=0; $c < $num; $c++) {
                        //dd($num);
                        if ($c == 5){
                            //une function qui contient deux array array
                            //carbon format la date
                            call_user_func_array(array($test,$usersSetters[$c]), array($this->formatDate($row[$c])));
                        }
                        else{
                            //dd($row);
                            // un tableau à deux dimention [les setters] [les ligne et les colonnes]
                            call_user_func_array(array($test,$usersSetters[$c]), array($row[$c]));
                        }
                    }
                    $em->persist($test);
                }
                $this->addFlash('success', 'Insertion reussi !');
                $em->flush();
                fclose($fp);

                //j'ai passe le tableau à la variable de la cession [name]
                $session->set('name', $arrayProblem);
                //dd($session->get('name'));
                return $this->redirectToRoute('admin_user_import');
            }
        }

        return $this->render('Backend/User/import.html.twig', array(
            'form' => $form->createView(),
            //la recuperation
            "arrayProblem"=>$session->get('name')
        ));
    }

    public function exportAction(Request $request)
    {
        ini_set("memory_limit","1000M");
        set_time_limit(300);
        $response = new StreamedResponse();
        $response->setCallback(function() {
            $users = $this->getDoctrine()->getRepository(User::class)->findAll();
            $gamification = $this->get('gamification');

            $handle = fopen('php://output', 'w+');

            fprintf($handle, chr(0xEF).chr(0xBB).chr(0xBF));

            fputcsv($handle, array(
                'id', 'nom', 'prenom', 'email', 'rang', 'etoiles',  'points', 'enquetes', 'equetes_pre_selection', 'tests', 'focus_tests', 'experience'
            ),';');
            foreach ($users as $key => $row) {
                $totalPoints = $gamification->getTotalPoints($row);
                $rankingData = $gamification->getActualRankingData($totalPoints['totalPoints']);

                fputcsv($handle, array(
                    $row->getIdPaneliste(),
                    $row->getLastname(),
                    $row->getFirstname(),
                    $row->getEmail(),
                    $rankingData['name'],
                    $rankingData['stars'] + 1,
                    $totalPoints["totalPoints"],
                    $totalPoints['typeCount'][0],
                    $totalPoints['typeCount'][1],
                    $totalPoints['typeCount'][2],
                    $totalPoints['focusParticipations'],
                    $totalPoints['clubParticipations'],
                ), ';');

                unset($totalPoints);
                unset($rankingData);
                unset($row);
                unset($users[$key]);
                unset($key);
            }
            fclose($handle);
        });
        $response->setStatusCode(200);
        $response->headers->set('Content-type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment;filename="export.csv"');
        return $response;
    }

}


