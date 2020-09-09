<?php

namespace App\Controller\Backend;

use App\Entity\PanelisteGroup;
use App\Entity\User;
use App\Form\Backend\ImpPanelisteGroupType;
use App\Form\Backend\PanelisteGroupImportType;
use App\Form\PanelisteGroupType;
use App\Services\PanelisteImport;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Date;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


/**
 * @Route("/admin/panelistegroup", name="admin_paneliste_groups_")
 */
class PanelisteGroupController extends AbstractController
{


    //j'ai te montre ?oui

    /**
     * Lists all PanelisteGroup entities.
     */

    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $panelisteGroups = $em->getRepository('App:PanelisteGroup')->findAll();

        return $this->render('/Backend/PanelisteGroup/index.html.twig', array(
            'panelisteGroups' => $panelisteGroups,
        ));
    }


    /**
     * @Route("/select-Group-p", name="select-Group-p")
     * @param Request $request
     * @return JsonResponse
     */
    public function ajaxSelectGroupe(Request $request) {
        //recuperation des donées
        $students = $this->getDoctrine()
            ->getRepository(PanelisteGroup::class)
            ->findAll();

        //dd($students);
        //if ($request->isXmlHttpRequest() || $request->query->get('showJson') == 1) {
            $jsonData = array();
            //$idx = 0;
            foreach($students as $groupP) {
                $temp = array(
                    'id' => $groupP->getId(),
                    'name' => $groupP->getName()
                );

                //$jsonData = $temp;  //ceci ecrase les precedant affiche seulement les dernier
                //array_push
                $jsonData[] = $temp;
            }
            return $this->json($jsonData);
        /*}
        else{
            return new JsonResponse("Les donn\ées ne sont pas recharg\é !");
        }
        */
    }


     //Creates a new PanelisteGroup entity.


    /**
     * @Route("/api/new", methods={"post"})
     * @param Request $request
     * @return JsonResponse
     */
    public function apiNewGroup(Request $request)
    {
        $messages =
            [
                "message" => 'Ajout reussi !'
            ];

        $status = 201;

       // return $this->json(["error" => 'page introuvable !'], 404);

        $em = $this->getDoctrine()->getManager();

        //la valeur l'input //$request->request , pour recuperer le poste
        $name = $request->request->get('name');

        //Vrification du champs si existe
        $groupeExiste = $em->getRepository(PanelisteGroup::class);

        //Si le champs existe
        if ($groupeExiste->findBy(["name" => $name])){
            //Les error
            $messages= [
                "error" => 'Les champs existe !'
            ];
            $status = 400;
        } else {
        // Si le champs n'esxiste pas

        //dd($name);
        //formatage du json //getContent(): retourne le tableau
        //$data = json_decode($request->getContent(), true);
        $groupe = new PanelisteGroup();
        //recuperation du nom
        //$groupe->setName($data['name']);
        $groupe->setName($name);
        $em->persist($groupe);
        $em->flush();

    }

    //Recuperation Du message et le status
    return $this->json($messages, $status);

    }

    /**
     * @Route("/api/select", methods={"post"})
     * @param Request $request
     * @return JsonResponse
     */
    public function apiSelect(Request $request)
    {
        $messages =
            [
                "message" => 'Ajout reussi !'
            ];
        $status = 201;

        $em = $this->getDoctrine()->getManager();

        //la valeur l'input //$request->request , pour recuperer le poste
        $name = $request->request->get('name');

        //Vrification du champs si existe
        $groupeExiste = $em->getRepository(PanelisteGroup::class);

        //Si le champs existe
        if ($groupeExiste->findBy(["name" => $name])){
            //Les error
            $messages= [
                "error" => 'Les champs existe !'
            ];
            $status = 400;
        } else {
            // Si le champs n'esxiste pas

            //dd($name);
            //formatage du json //getContent(): retourne le tableau
            //$data = json_decode($request->getContent(), true);
            $groupe = new PanelisteGroup();
            //recuperation du nom
            //$groupe->setName($data['name']);
            $groupe->setName($name);
            $em->persist($groupe);
            $em->flush();

        }

        //Recuperation Du message et le status
        return $this->json($messages, $status);

    }


    /**
     * @Route("/rend-html-new", name="newRend")
     */
    public function rendNewAction(Request $request)
    {

       return $this->render('Backend/PanelisteGroup/rend_html_new.html.twig');
    }

    /**
     * @Route("/new", name="new")
     */
    public function newAction(Request $request)
    {
        $panelisteGroup = new PanelisteGroup();
        $form = $this->createForm(PanelisteGroupType::class, $panelisteGroup);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($panelisteGroup);
            $em->flush();

            $this->addFlash('success', 'L\'élément a bien été crée.');

            return $this->redirectToRoute('admin_paneliste_groups_show', array('id' => $panelisteGroup->getId()));
        }

        return $this->render('/Backend/PanelisteGroup/new.html.twig', array(
            'panelisteGroup' => $panelisteGroup,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a PanelisteGroup entity.
     *
     * @Route("/{id}/show", name="show")
     * @param PanelisteGroup $panelisteGroup
     * @return Response
     */
    public function showAction(PanelisteGroup $panelisteGroup)
    {
        $deleteForm = $this->createDeleteForm($panelisteGroup);

        return $this->render('/Backend/PanelisteGroup/show.html.twig', array(
            'panelisteGroup' => $panelisteGroup,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing PanelisteGroup entity.
     *
     * @Route("/{id}/edit", name="edit")
     */
    public function editAction(Request $request, PanelisteGroup $panelisteGroup)
    {
        $deleteForm = $this->createDeleteForm($panelisteGroup);
        $editForm = $this->createForm('App\Form\PanelisteGroupType', $panelisteGroup);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($panelisteGroup);
            $em->flush();

            $this->addFlash('success', 'Les modifications ont bien été prises en compte.');

            return $this->redirectToRoute('admin_paneliste_groups_edit', array('id' => $panelisteGroup->getId()));
        }

        return $this->render('/Backend/PanelisteGroup/edit.html.twig', array(
            'panelisteGroup' => $panelisteGroup,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a PanelisteGroup entity.
     * @Route("/{id}/delete", name="delete")
     * @ParamConverter("post")
     * @param Request $request
     * @param PanelisteGroup $panelisteGroup
     * @return RedirectResponse
     */
    public function deleteAction(Request $request, PanelisteGroup $panelisteGroup)
    {
        $form = $this->createDeleteForm($panelisteGroup);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($panelisteGroup);
            $em->flush();

            $this->addFlash('success', 'L\'élément a bien été supprimé.');
        }

        return $this->redirectToRoute('admin_paneliste_groups_index');
    }

    /**
     * Creates a form to delete a PanelisteGroup entity.
     *
     * @param PanelisteGroup $panelisteGroup The PanelisteGroup entity
     *
     * @return \Symfony\Component\Form\FormInterface
     *
     * @Route("/create", name="create")
     */
    private function createDeleteForm(PanelisteGroup $panelisteGroup)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_paneliste_groups_delete', array('id' => $panelisteGroup->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }

    /**
     * @Route("/ajout-groupe", name="ajout_group")
     * @param Request $request
     * @param PanelisteImport $panelisteImportService
     * @return Response
     */
    public function importAction(Request $request)
    {
        $import = new PanelisteGroup();
        $form = $this->createForm(PanelisteGroupImportType::class, $import);
        $form->handleRequest($request);
        //dump($import);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($import);
            $em->flush();
            $this->addFlash('success', 'Insertion reussi !');
            // return $this->redirectToRoute('admin_user_import');
            //return $this->redirectToRoute('backend__news_shows', array('id' => $imagesAccueil->getId()));
        }
        return $this->render('backend/PanelisteGroup/ajout_group.html.twig', array(
            'form' => $form->createView()
        ));
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
     * @return Response
     */
    public function importGAction(Request $request)
    {
        $import = new PanelisteGroup();
        //Creation de form
        $form = $this->createForm(ImpPanelisteGroupType::class, $import);
        $form->handleRequest($request);
        $group = null;


        //phpinfo();
        //echo (extension_loaded('xdebug') ? '' : 'non '), 'exists';

        $usersSetters = [
            "setIdPaneliste",
            "setTitle",
            "setFirstname",
            "setLastname",
            "setEmail",
            "setBirthdate",
            /* "setZipcode",*/
            "setStatut",
            "setPhone",
            /* "addPanelisteGroup",*/
        ];

        if (!is_null($import->getName())){
            dd($import->getName());
        }
            //dd("Bonjour");
        //else dd("Bonsoir");
        //dump($request);
       // if ($request->isXmlHttpRequest()) {
        if ($form->isSubmitted() && $form->isValid()) {

            //dd("Nous sommes ici");
            $em = $this->getDoctrine()->getManager();
            $impForm = $form->get('file')->getData();

            $rowNo = 1;
            $reposotoryUser = $em->getRepository(User::class);
            $reposotoryGroup = $em->getRepository(PanelisteGroup::class);
            if (($fp = fopen($impForm, "r")) !== FALSE) {
                //Condition plus affection
                while (($row = fgetcsv($fp, 1000, ";")) !== FALSE) {
                    //dd($row);
                    $rowNo++;
                    //dd($row);
                    //Nombre de ligne
                    $count = count($row);


                    $objUser = new User();
                    $num = count($usersSetters);
                    //dump($num);
                    $objUser->setIdPaneliste($row[0]);
                    $objUser->setTitle($row[1]);
                    $objUser->setFirstname($row[2]);
                    $objUser->setLastname($row[3]);
                    $objUser->setEmail($row[4]);
                    $objUser->setBirthdate($this->formatDate($row[5]));
                    $objUser->setStatut($row[6]);
                    $objUser->setPhone($row[7]);
                    ;



                    //for ($c=0; $c < $num; $c++) {
                        //$idPanelisteFichier = $row[0];
                        if ($user = $reposotoryUser->findOneBy(["idPaneliste" =>$objUser->getidPaneliste()])){
                            //Le donnees Du formulaire
                            $group = $reposotoryGroup->find($form->get('group')->getData());

                            $getId_u_g = $reposotoryGroup->getUser_idEtgroupe_id($user->getId(), $group->getId());
                            //la function du jointure
                            if ($getId_u_g !==true ){
                                $user->addPanelisteGroup($group);
                            }

                            $em->persist($user);

                            //dump($user);
                        } else {
                            //j'ai recupere le mail
                            $existeEmail =$reposotoryUser->findOneBy(["email"=>$objUser->getEmail()]);
                            //Si l'email == null
                            if ($existeEmail == null ) {
                                $group = $reposotoryGroup->find($form->get('group')->getData());
                                //dd($user);
                                $objUser->addPanelisteGroup($group);
                                $em->persist($objUser);
                                //dump($objUser);
                            }

                        }

                }
                $em->flush();
                fclose($fp);
                $this->addFlash('success', 'Insertion reussi !');
                return $this->redirectToRoute('admin_paneliste_groups_import');
            }
            //return $this->redirectToRoute('backend__news_shows', array('id' => $imagesAccueil->getId()));
        }


        return $this->render('Backend/PanelisteGroup/import.html.twig', array(
            'form' => $form->createView()
        ));
    }


}
