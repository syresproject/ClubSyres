<?php

namespace App\Entity;

use App\Repository\InscriptionRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=InscriptionRepository::class)
 * @ORM\HasLifecycleCallbacks()
 */
class Inscription
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /*
     * @ORM\Column(name="date_de_creation", type="date", nullable=true)
     * @Assert\NotBlank()
     * /
    private $date;*/

    /*
     * @return mixed
     * /
    public function getDate()
    {
        return $this->date;
    }


    /*
     * @param mixed $date
     * @ORM\PrePersist()
     * /
    public function setDate($date)
    {
        //$this->date = $date;
        $this->date = new \DateTime();
    }*/



    /**
     * @var string
     *maju
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *maju
     * @ORM\Column(name="prenom", type="string", length=100, nullable=true)
     */
    private $prenom;

    /**
     * jour/moi/annes
     * @ORM\Column(name="date_de_naissance", type="datetime", nullable=true)
     */
    private $dateDeNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=150, nullable=true)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile_smartPhone", type="string", length=150, nullable=true)
     */
    private $typeMobile;

    /**
     * @var string
     *
     * @ORM\Column(name="tablette", type="string", length=150, nullable=true)
     */
    private $tablette;

    /**
     * @var string
     *
     * @ORM\Column(name="Tel_portable", type="string", nullable=true)
     */
    private $numTelephone;

    /**
     * @var string
     *
     * @ORM\Column(name="Tel_Bureau", type="string", nullable=true)
     */
    private $numBureau;

    /**
     * @return string
     */
    public function getNumBureau()
    {
        return $this->numBureau;
    }

    /**
     * @param string $numBureau
     * @return Inscription
     */
    public function setNumBureau(string $numBureau): Inscription
    {
        $this->numBureau = $numBureau;
        return $this;
    }


    /**
     * @var string
     *
     * @ORM\Column(name="Tel_dom", type="string", nullable=true)
     */
    private $numTelDom;

    /**
     * @return string
     */
    public function getNumTelDom()
    {
        return $this->numTelDom;
    }

    /**
     * @param string $numTelDom
     * @return Inscription
     */
    public function setNumTelDom(string $numTelDom): Inscription
    {
        $this->numTelDom = $numTelDom;
        return $this;
    }


    /*
     * @var string
     *
     * @ORM\Column(name="contacter_par_sms", type="string", length=150, nullable=true)
     * /
    private $contacterParInternet;
    */

    /**
     * @var string
     *
     * @ORM\Column(name="connecterSurReseauxS", type="string", length=150, nullable=true)
     */
    private $connecterSurReseauxS;

    /**
     * @var string
     *
     * @ORM\Column(name="ad_rue_avenue", type="string", length=150, nullable=true)
     */
    private $nomAddresse;

    /**
     *
     *
     * @ORM\Column(name="ad_appt_etage_couloir", type="string", length=100, nullable=true)
     */
    private $appt_etage_couloir;

    /**
     *
     *
     * @ORM\Column(name="ad_batiment", type="string", length=50, nullable=true)
     */
    private $add_batiment;

    /**
     *
     *
     * @ORM\Column(name="ad_lieu_dit", type="string", length=155, nullable=true)
     */
    private $lieuDit;

    /**
     * @return mixed
     */
    public function getApptEtageCouloir()
    {
        return $this->appt_etage_couloir;
    }

    /**
     * @param mixed $appt_etage_couloir
     * @return Inscription
     */
    public function setApptEtageCouloir($appt_etage_couloir)
    {
        $this->appt_etage_couloir = $appt_etage_couloir;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddBatiment()
    {
        return $this->add_batiment;
    }

    /**
     * @param mixed $add_batiment
     * @return Inscription
     */
    public function setAddBatiment($add_batiment)
    {
        $this->add_batiment = $add_batiment;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLieuDit()
    {
        return $this->lieuDit;
    }

    /**
     * @param mixed $lieuDit
     * @return Inscription
     */
    public function setLieuDit($lieuDit)
    {
        $this->lieuDit = $lieuDit;
        return $this;
    }



    /**
     * @var string
     *
     * @ORM\Column(name="ville_adresse", type="string", length=155, nullable=true)
     */
    private $villeAddresse;

    /**
     * @var string
     * @Assert\Length(
     *      min = 5,
     *      max = 5,
     *      minMessage = "Le code postale contient 5 caractere {{ limit }} characters long",
     *      maxMessage = "Le code postale contient 5 caractere {{ limit }} characters"
     * )
     * @ORM\Column(name="CP", type="string", length=5, nullable=true)
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="profession", type="string", length=155, nullable=true)
     */
    private $profession;

    /**
     * @var string
     *
     * @ORM\Column(name="domaine_activite", type="string", length=155, nullable=true)
     */
    private $domaineMetier;

    /**
     * @var string
     *
     * @ORM\Column(name="allergie", type="string", length=2, nullable=true)
     */
    private $etesAlergique;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_allergie", type="string", length=191, nullable=true)
     */
    private $descAlergique;

    /**
     * @var string
     *
     * @ORM\Column(name="connaissance_condition_test", type="string", length=155, nullable=true)
     */
    private $connaissezCondition;

    /**
     * @var string
     *
     * @ORM\Column(name="politique_de_confidentialité", length=191, nullable=true)
     */
    private $checkboxUN;

    /**
     * @var string
     *
     * @ORM\Column(name="autorise_syres_traiter_donnees", length=10, nullable=true)
     */
    private $checkboxDeux;

    /**
     * @var string
     *
     * @ORM\Column(name="autorise_syres_traiter_donnees_p_sensibles", length=10, nullable=true)
     */
    private $checkboxTrois;

    /**
     * @var string
     *
     * @ORM\Column(name="dedommagement_deplacement", length=10, nullable=true)
     */
    private $checkboxQuatre;

    /**
     * @var string
     *
     * @ORM\Column(name="conscient_que_produits_confidentiels", length=10, nullable=true)
     */
    private $checkboxCinq;

    /**
     * @return string
     */
    public function getCheckboxUN()
    {
        return $this->checkboxUN;
    }

    /**
     * @param string $checkboxUN
     */
    public function setCheckboxUN($checkboxUN)
    {
        $this->checkboxUN = $checkboxUN;
    }



    /**
     * @return string
     */
    public function getCheckboxDeux()
    {
        return $this->checkboxDeux;
    }

    /**
     * @param string $checkboxDeux
     * @return Inscription
     */
    public function setCheckboxDeux(string $checkboxDeux): Inscription
    {
        $this->checkboxDeux = $checkboxDeux;
        return $this;
    }

    /**
     * @return string
     */
    public function getCheckboxTrois()
    {
        return $this->checkboxTrois;
    }

    /**
     * @param string $checkboxTrois
     * @return Inscription
     */
    public function setCheckboxTrois(string $checkboxTrois): Inscription
    {
        $this->checkboxTrois = $checkboxTrois;
        return $this;
    }

    /**
     * @return string
     */
    public function getCheckboxQuatre()
    {
        return $this->checkboxQuatre;
    }

    /**
     * @param string $checkboxQuatre
     * @return Inscription
     */
    public function setCheckboxQuatre(string $checkboxQuatre): Inscription
    {
        $this->checkboxQuatre = $checkboxQuatre;
        return $this;
    }

    /**
     * @return string
     */
    public function getCheckboxCinq()
    {
        return $this->checkboxCinq;
    }

    /**
     * @param string $checkboxCinq
     * @return Inscription
     */
    public function setCheckboxCinq(string $checkboxCinq): Inscription
    {
        $this->checkboxCinq = $checkboxCinq;
        return $this;
    }

    /**
     * @return string
     * /
    public function getCheckboxSix()
    {
    return $this->checkboxSix;
    }

    /**
     * @param string $checkboxSix
     * @return Inscription
     * /
    public function setCheckboxSix(string $checkboxSix): InscriptionController
    {
    $this->checkboxSix = $checkboxSix;
    return $this;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="contacter_etude_consommateur", type="string", length=155, nullable=true)
     * /
    private $checkboxSix;
     * /

    /**
     * @var string
     *
     * @ORM\Column(name="contacter_etude_explorateur_enquete", type="string", length=155, nullable=true)
     */
    private $checkboxSept;

    /**
     * @var string
     *
     * @ORM\Column(name="contacter_reunion_consommateur", type="string", length=155, nullable=true)
     */
    private $checkboxHuit;

    /**
     * @var string
     *
     * @ORM\Column(name="contacter_interview", type="string", length=155, nullable=true)
     */
    private $checkboxNeuf;

    /**
     * @var string
     *
     * @ORM\Column(name="societe_inscrit", type="string", length=155, nullable=true)
     */
    private $societeInscrit;

    /**
     * @var string
     *
     * @ORM\Column(name="fumez_vous", type="string", length=155, nullable=true)
     */
    private $fumezVous;

    /**
     * @var string
     *
     * @ORM\Column(name="vapotez_vous", type="string", length=155, nullable=true)
     */
    private $vapotezVous;

    /**
     * @return string
     */
    public function getVapotezVous()
    {
        return $this->vapotezVous;
    }

    /**
     * @param string $vapotezVous
     */
    public function setVapotezVous($vapotezVous)
    {
        $this->vapotezVous = $vapotezVous;
    }



    /**
     * @var string
     *
     * @ORM\Column(name="zone_pollue", type="string", length=155, nullable=true)
     */
    private $zonePollue;

    /**
     * @return string
     */
    public function getCheckboxSept()
    {
        return $this->checkboxSept;
    }

    /**
     * @param string $checkboxSept
     * @return Inscription
     */
    public function setCheckboxSept(string $checkboxSept): Inscription
    {
        $this->checkboxSept = $checkboxSept;
        return $this;
    }

    /**
     * @return string
     */
    public function getCheckboxHuit()
    {
        return $this->checkboxHuit;
    }

    /**
     * @param string $checkboxHuit
     * @return Inscription
     */
    public function setCheckboxHuit(string $checkboxHuit): Inscription
    {
        $this->checkboxHuit = $checkboxHuit;
        return $this;
    }

    /**
     * @return string
     */
    public function getCheckboxNeuf()
    {
        return $this->checkboxNeuf;
    }

    /**
     * @param string $checkboxNeuf
     * @return Inscription
     */
    public function setCheckboxNeuf(string $checkboxNeuf): Inscription
    {
        $this->checkboxNeuf = $checkboxNeuf;
        return $this;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="sex_premier_enfant", type="string", length=100, nullable=true)
     */
    private $enfantUnSex;

    /**
     *
     * @ORM\Column(name="age_premier_enfant", type="datetime", nullable=true)
     */
    private $enfantUnAge;

    /**
     * @return mixed
     */
    public function getEnfantUnAge()
    {
        return $this->enfantUnAge;
    }

    /**
     * @param mixed $enfantUnAge
     * @return Inscription
     */
    public function setEnfantUnAge($enfantUnAge)
    {
        $this->enfantUnAge = $enfantUnAge;
        return $this;
    }


    /**
     *
     * @ORM\Column(name="sex_deuxieme_enfant", type="string", length=100, nullable=true)
     */
    private $enfantDeuxSex;

    /**
     * @return string
     */
    public function getEnfantUnSex()
    {
        return $this->enfantUnSex;
    }

    /**
     * @param string $enfantUnSex
     * @return Inscription
     */
    public function setEnfantUnSex(string $enfantUnSex): Inscription
    {
        $this->enfantUnSex = $enfantUnSex;
        return $this;
    }



    /**
     * @return string
     */
    public function getEnfantDeuxSex()
    {
        return $this->enfantDeuxSex;
    }

    /**
     * @param string $enfantDeuxSex
     * @return Inscription
     */
    public function setEnfantDeuxSex(string $enfantDeuxSex): Inscription
    {
        $this->enfantDeuxSex = $enfantDeuxSex;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEnfantDeuxAge()
    {
        return $this->enfantDeuxAge;
    }

    /**
     * @param mixed $enfantDeuxAge
     * @return Inscription
     */
    public function setEnfantDeuxAge($enfantDeuxAge)
    {
        $this->enfantDeuxAge = $enfantDeuxAge;
        return $this;
    }



    /**
     * @return string
     */
    public function getEnfantsMineur()
    {
        return $this->enfantsMineur;
    }

    /**
     * @param string $enfantsMineur
     * @return Inscription
     */
    public function setEnfantsMineur(string $enfantsMineur): Inscription
    {
        $this->enfantsMineur = $enfantsMineur;
        return $this;
    }

    /**
     *
     * @ORM\Column(name="age_deuxieme_enfant", type="datetime", nullable=true)
     */
    private $enfantDeuxAge;


    /**
     * @var string
     *
     * @ORM\Column(name="enfantsMineur", type="string", length=155, nullable=true)
     */
    private $enfantsMineur;

    /**
     * @var string
     *
     * @ORM\Column(name="sex_troisieme_enfant", type="string", length=155, nullable=true)
     */
    private $enfantTroisSex;

    /**
     *
     * @ORM\Column(name="age_troisieme_enfant", type="datetime", nullable=true)
     */
    private $enfantTroisAge;

    /**
     * @var string
     *
     * @ORM\Column(name="sex_quatrieme_enfant", type="string", length=155, nullable=true)
     */
    private $enfantQuatreSex;

    /**
     *
     * @ORM\Column(name="age_quatrieme_enfant", type="datetime", nullable=true)
     */
    private $enfantQuatreAge;

    /**
     * @return string
     */
    public function getEnfantTroisSex()
    {
        return $this->enfantTroisSex;
    }

    /**
     * @param string $enfantTroisSex
     * @return Inscription
     */
    public function setEnfantTroisSex($enfantTroisSex)
    {
        $this->enfantTroisSex = $enfantTroisSex;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEnfantTroisAge()
    {
        return $this->enfantTroisAge;
    }

    /**
     * @param mixed $enfantTroisAge
     * @return Inscription
     */
    public function setEnfantTroisAge($enfantTroisAge)
    {
        $this->enfantTroisAge = $enfantTroisAge;
        return $this;
    }

    /**
     * @return string
     */
    public function getEnfantQuatreSex()
    {
        return $this->enfantQuatreSex;
    }

    /**
     * @param string $enfantQuatreSex
     * @return Inscription
     */
    public function setEnfantQuatreSex($enfantQuatreSex)
    {
        $this->enfantQuatreSex = $enfantQuatreSex;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEnfantQuatreAge()
    {
        return $this->enfantQuatreAge;
    }

    /**
     * @param mixed $enfantQuatreAge
     * @return Inscription
     */
    public function setEnfantQuatreAge($enfantQuatreAge)
    {
        $this->enfantQuatreAge = $enfantQuatreAge;
        return $this;
    }


    /**
     * @var string
     * @ORM\Column(name="langueParle", type="string", length=155, nullable=true)
     */
    private $langueParle;



    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=55, nullable=true)
     */
    private $vousEtes;

    /**
     * @var string
     *
     * @ORM\Column(name="utilisez_produit_bio", type="string", length=155, nullable=true)
     */
    private $utilisezProduitBio;


    /**
     * @var string
     *
     * @ORM\Column(name="carnation", type="string", length=191, nullable=true)
     */
    private $typePeau;

    /**
     * @var string
     *
     * @ORM\Column(name="couleur_peau", type="string", length=191, nullable=true)
     */
    private $couleurPeau;

    /**
     * @var string
     *
     * @ORM\Column(name="couleur_cheveux", type="string", length=191, nullable=true)
     */
    private $couleurCheveux;

    /**
     * @var string
     *
     * @ORM\Column(name="corps_soleil", type="string", length=191, nullable=true)
     */
    private $corpAuSoleil;


    /**
     *
     * @ORM\Column(name="type_s_antichute", length=1, nullable=true)
     */
    private $typeSAntichute;

    /**
     *
     * @ORM\Column(name="type_s_antipelliculaire", length=1, nullable=true)
     */
    private $typeSAntipelliculaire;

    /*
     *
     * @ORM\Column(name="type_s_deux_en_en", length=1, nullable=true)
     * /
    private $typeSDeuxEnEn;
*/

    /**
     *
     * @ORM\Column(name="type_s_huile", length=1, nullable=true)
     */
    private $typeSHuile;

    /**
     *
     * @ORM\Column(name="type_s_cheveux_colore", length=1, nullable=true)
     */
    private $typeSCheveuxColore;



    /**
     *
     * @ORM\Column(name="type_s_cheveux_gras", length=1, nullable=true)
     */
    private $typeSCheveuxGras;


    /*
     *
     * @ORM\Column(name="type_s_cheveux_normaux", length=1, nullable=true)
     * /
    private $typeSCheveuxNormaux;
*/

    /*
     *
     * @ORM\Column(name="type_s_cheveux_ond_boucle_f", length=1, nullable=true)
     * /
    private $typeSCheveuxOndBoucle_f;
*/

    /*
     *
     * @ORM\Column(name="type_s_cheveux_secs", length=1, nullable=true)
     * /
    private $typeSCheveuxSecs;
*/

    /*
     *
     * @ORM\Column(name="type_s_usages_fr_doux", length=1, nullable=true)
     * /
    private $typeSUsages_fr_doux;
    */

    /**
     *
     * @ORM\Column(name="type_s_shampooing_sec", length=1, nullable=true)
     */
    private $typeSShampooingSec;

    /*
     *
     * @ORM\Column(name="type_s_special_reflets", length=1, nullable=true)
     * /
    private $typeSSpecialReflets;
    */

    /**
     * @return mixed
     */
    public function getTypeSAntichute()
    {
        return $this->typeSAntichute;
    }

    /**
     * @param mixed $typeSAntichute
     * @return Inscription
     */
    public function setTypeSAntichute($typeSAntichute)
    {
        $this->typeSAntichute = $typeSAntichute;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTypeSAntipelliculaire()
    {
        return $this->typeSAntipelliculaire;
    }

    /**
     * @param mixed $typeSAntipelliculaire
     * @return Inscription
     */
    public function setTypeSAntipelliculaire($typeSAntipelliculaire)
    {
        $this->typeSAntipelliculaire = $typeSAntipelliculaire;
        return $this;
    }

    /*
     * @return mixed
     * /
    public function getTypeSDeuxEnEn()
    {
        return $this->typeSDeuxEnEn;
    }

    /**
     * @param mixed $typeSDeuxEnEn
     * @return InscriptionController
     * /
    public function setTypeSDeuxEnEn($typeSDeuxEnEn)
    {
        $this->typeSDeuxEnEn = $typeSDeuxEnEn;
        return $this;
    }
    */

    /**
     * @return mixed
     */
    public function getTypeSHuile()
    {
        return $this->typeSHuile;
    }

    /**
     * @param mixed $typeSHuile
     * @return Inscription
     */
    public function setTypeSHuile($typeSHuile)
    {
        $this->typeSHuile = $typeSHuile;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTypeSCheveuxColore()
    {
        return $this->typeSCheveuxColore;
    }

    /**
     * @param mixed $typeSCheveuxColore
     * @return Inscription
     */
    public function setTypeSCheveuxColore($typeSCheveuxColore)
    {
        $this->typeSCheveuxColore = $typeSCheveuxColore;
        return $this;
    }

    /*
     *  /**
     *
     * @ORM\Column(name="type_s_cheveux_fins", length=1, nullable=true)

    private $typeSCheveuxFins;

     * @return mixed
     * /
    public function getTypeSCheveuxFins()
    {
        return $this->typeSCheveuxFins;
    }

    /**
     * @param mixed $typeSCheveuxFins
     * @return InscriptionController
     * /
    public function setTypeSCheveuxFins($typeSCheveuxFins)
    {
        $this->typeSCheveuxFins = $typeSCheveuxFins;
        return $this;
    }

    */

    /**
     * @return mixed
     */
    public function getTypeSCheveuxGras()
    {
        return $this->typeSCheveuxGras;
    }

    /**
     * @param mixed $typeSCheveuxGras
     * @return Inscription
     */
    public function setTypeSCheveuxGras($typeSCheveuxGras)
    {
        $this->typeSCheveuxGras = $typeSCheveuxGras;
        return $this;
    }

    /*
     *     /**
     *
     * @ORM\Column(name="type_s_cheveux_Mixtes", length=1, nullable=true)
     * /
    private $typeSCheveuxMixtes;
     * /
    /**
     * @return mixed
     * /
    public function getTypeSCheveuxMixtes()
    {
        return $this->typeSCheveuxMixtes;
    }

    /**
     * @param mixed $typeSCheveuxMixtes
     * @return InscriptionController
     * /
    public function setTypeSCheveuxMixtes($typeSCheveuxMixtes)
    {
        $this->typeSCheveuxMixtes = $typeSCheveuxMixtes;
        return $this;
    }
    */

    /**
     * @return mixed
     */
    public function getTypeSCheveuxNormaux()
    {
        return $this->typeSCheveuxNormaux;
    }

    /**
     * @param mixed $typeSCheveuxNormaux
     * @return Inscription
     */
    public function setTypeSCheveuxNormaux($typeSCheveuxNormaux)
    {
        $this->typeSCheveuxNormaux = $typeSCheveuxNormaux;
        return $this;
    }

    /*
     * @return mixed
     * /
    public function getTypeSCheveuxOndBoucleF()
    {
        return $this->typeSCheveuxOndBoucle_f;
    }

    / **
     * @param mixed $typeSCheveuxOndBoucle_f
     * @return InscriptionController
     * /
    public function setTypeSCheveuxOndBoucleF($typeSCheveuxOndBoucle_f)
    {
        $this->typeSCheveuxOndBoucle_f = $typeSCheveuxOndBoucle_f;
        return $this;
    }
    */

    /*
     * @return mixed
     * /
    public function getTypeSCheveuxSecs()
    {
        return $this->typeSCheveuxSecs;
    }

    /**
     * @param mixed $typeSCheveuxSecs
     * @return InscriptionController
     * /
    public function setTypeSCheveuxSecs($typeSCheveuxSecs)
    {
        $this->typeSCheveuxSecs = $typeSCheveuxSecs;
        return $this;
    }
*/

    /*
     * @return mixed
     * /
    public function getTypeSUsagesFrDoux()
    {
        return $this->typeSUsages_fr_doux;
    }

    /**
     * @param mixed $typeSUsages_fr_doux
     * @return InscriptionController
     * /
    public function setTypeSUsagesFrDoux($typeSUsages_fr_doux)
    {
        $this->typeSUsages_fr_doux = $typeSUsages_fr_doux;
        return $this;
    }
    */

    /**
     * @return mixed
     */
    public function getTypeSShampooingSec()
    {
        return $this->typeSShampooingSec;
    }

    /**
     * @param mixed $typeSShampooingSec
     * @return Inscription
     */
    public function setTypeSShampooingSec($typeSShampooingSec)
    {
        $this->typeSShampooingSec = $typeSShampooingSec;
        return $this;
    }

    /*
     * @return mixed
     * /
    public function getTypeSSpecialReflets()
    {
        return $this->typeSSpecialReflets;
    }

    /**
     * @param mixed $typeSSpecialReflets
     * @return InscriptionController
     * /
    public function setTypeSSpecialReflets($typeSSpecialReflets)
    {
        $this->typeSSpecialReflets = $typeSSpecialReflets;
        return $this;
    }
*/











    /**
     *
     * @ORM\Column(name="autres_p_capillaires_apre_shamp", length=191, nullable=true)
     */
    private $autresProduitsCapillairesApreS;

    /**
     *
     * @ORM\Column(name="autres_produits_capillaires_baume", length=191, nullable=true)
     */
    private $autresProduitsCapillairesBaume;

    /**
     *
     * @ORM\Column(name="autres_produits_capillaires_creme", length=191, nullable=true)
     */
    private $autresProduitsCapillairesCreme;

    /**
     *
     * @ORM\Column(name="autres_produits_capillaires_masque", length=191, nullable=true)
     */
    private $autresProduitsCapillairesMasque;

    /**
     *
     * @ORM\Column(name="autres_produits_capillaires_lotion", length=191, nullable=true)
     */
    private $autresProduitsCapillairesLotion;

    /**
     *
     * @ORM\Column(name="autres_produits_capillaires_mousse", length=191, nullable=true)
     */
    private $autresProduitsCapillairesMousse;

    /**
     *
     * @ORM\Column(name="autres_produits_capillaires_capsule", length=191, nullable=true)
     */
    private $autresProduitsCapillairesCapsule;

    /**
     * @return mixed
     */
    public function getAutresProduitsCapillairesApreS()
    {
        return $this->autresProduitsCapillairesApreS;
    }

    /**
     * @param mixed $autresProduitsCapillairesApreS
     * @return Inscription
     */
    public function setAutresProduitsCapillairesApreS($autresProduitsCapillairesApreS)
    {
        $this->autresProduitsCapillairesApreS = $autresProduitsCapillairesApreS;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAutresProduitsCapillairesBaume()
    {
        return $this->autresProduitsCapillairesBaume;
    }

    /**
     * @param mixed $autresProduitsCapillairesBaume
     * @return Inscription
     */
    public function setAutresProduitsCapillairesBaume($autresProduitsCapillairesBaume)
    {
        $this->autresProduitsCapillairesBaume = $autresProduitsCapillairesBaume;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAutresProduitsCapillairesCreme()
    {
        return $this->autresProduitsCapillairesCreme;
    }

    /**
     * @param mixed $autresProduitsCapillairesCreme
     * @return Inscription
     */
    public function setAutresProduitsCapillairesCreme($autresProduitsCapillairesCreme)
    {
        $this->autresProduitsCapillairesCreme = $autresProduitsCapillairesCreme;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAutresProduitsCapillairesMasque()
    {
        return $this->autresProduitsCapillairesMasque;
    }

    /**
     * @param mixed $autresProduitsCapillairesMasque
     * @return Inscription
     */
    public function setAutresProduitsCapillairesMasque($autresProduitsCapillairesMasque)
    {
        $this->autresProduitsCapillairesMasque = $autresProduitsCapillairesMasque;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAutresProduitsCapillairesLotion()
    {
        return $this->autresProduitsCapillairesLotion;
    }

    /**
     * @param mixed $autresProduitsCapillairesLotion
     * @return Inscription
     */
    public function setAutresProduitsCapillairesLotion($autresProduitsCapillairesLotion)
    {
        $this->autresProduitsCapillairesLotion = $autresProduitsCapillairesLotion;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAutresProduitsCapillairesMousse()
    {
        return $this->autresProduitsCapillairesMousse;
    }

    /**
     * @param mixed $autresProduitsCapillairesMousse
     * @return Inscription
     */
    public function setAutresProduitsCapillairesMousse($autresProduitsCapillairesMousse)
    {
        $this->autresProduitsCapillairesMousse = $autresProduitsCapillairesMousse;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAutresProduitsCapillairesCapsule()
    {
        return $this->autresProduitsCapillairesCapsule;
    }

    /**
     * @param mixed $autresProduitsCapillairesCapsule
     * @return Inscription
     */
    public function setAutresProduitsCapillairesCapsule($autresProduitsCapillairesCapsule)
    {
        $this->autresProduitsCapillairesCapsule = $autresProduitsCapillairesCapsule;
        return $this;
    }





    /**
     * @var string
     *
     * @ORM\Column(name="maquillage_teint", type="string", length=191, nullable=true)
     */
    private $maquillageTeint;

    /**
     *
     * @ORM\Column(name="ou_achete_maquillage", type="string", length=191, nullable=true)
     */
    private $ouAcheteMaquillage;

    /**
     * @return mixed
     */
    public function getOuAcheteMaquillage()
    {
        return $this->ouAcheteMaquillage;
    }

    /**
     * @param mixed $ouAcheteMaquillage
     * @return Inscription
     */
    public function setOuAcheteMaquillage($ouAcheteMaquillage)
    {
        $this->ouAcheteMaquillage = $ouAcheteMaquillage;
        return $this;
    }


    /**
     * @var string
     *
     * @ORM\Column(name="maquillage_levre", type="string", length=191, nullable=true)
     */
    private $maquillageLevre;

    /**
     * @return string
     */
    public function getMaquillageLevre()
    {
        return $this->maquillageLevre;
    }

    /**
     * @param string $maquillageLevre
     */
    public function setMaquillageLevre($maquillageLevre)
    {
        $this->maquillageLevre = $maquillageLevre;
    }



    /**
     * @var string
     *
     * @ORM\Column(name="maquillage_yeux", type="string", length=191, nullable=true)
     */
    private $maquillageYeux;

    /**
     *
     * @ORM\Column(name="dermatologie_esthetique_Acide_hyaluronique", type="string", length=191, nullable=true)
     */
    private $dermatologieEsthtiqueAcideH;

    /**
     *
     * @ORM\Column(name="dermatologie_esthetique_Botox", type="string", length=191, nullable=true)
     */
    private $dermatologieEsthtiqueBotox;

    /**
     *
     * @ORM\Column(name="dermatologie_esthetique_Laser", type="string", length=191, nullable=true)
     */
    private $dermatologieEsthtiqueLaser;

    /**
     *
     * @ORM\Column(name="dermatologie_esthetique_Peeling", type="string", length=191, nullable=true)
     */
    private $dermatologieEsthtiquePeeling;

    /**
     *
     * @ORM\Column(name="dermatologie_esthetique_Mesotherapie", type="string", length=191, nullable=true)
     */
    private $dermatologieEsthtiqueMesotherapie;

    /**
     *
     * @ORM\Column(name="dermatologie_esthetique_Autre", type="string", length=191, nullable=true)
     */
    private $dermatologieEsthtiqueAutre;

    /**
     * @return mixed
     */
    public function getDermatologieEsthtiqueAcideH()
    {
        return $this->dermatologieEsthtiqueAcideH;
    }

    /**
     * @param mixed $dermatologieEsthtiqueAcideH
     * @return Inscription
     */
    public function setDermatologieEsthtiqueAcideH($dermatologieEsthtiqueAcideH)
    {
        $this->dermatologieEsthtiqueAcideH = $dermatologieEsthtiqueAcideH;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDermatologieEsthtiqueBotox()
    {
        return $this->dermatologieEsthtiqueBotox;

    }


    /**
     * @param mixed $dermatologieEsthtiqueBotox
     * @return Inscription
     */
    public function setDermatologieEsthtiqueBotox($dermatologieEsthtiqueBotox)
    {
        $this->dermatologieEsthtiqueBotox = $dermatologieEsthtiqueBotox;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDermatologieEsthtiqueLaser()
    {
        return $this->dermatologieEsthtiqueLaser;

    }


    /**
     * @param mixed $dermatologieEsthtiqueLaser
     * @return Inscription
     */
    public function setDermatologieEsthtiqueLaser($dermatologieEsthtiqueLaser)
    {
        $this->dermatologieEsthtiqueLaser = $dermatologieEsthtiqueLaser;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDermatologieEsthtiquePeeling()
    {
        return $this->dermatologieEsthtiquePeeling;

    }

    /**
     * @param mixed $dermatologieEsthtiquePeeling
     * @return Inscription
     */
    public function setDermatologieEsthtiquePeeling($dermatologieEsthtiquePeeling)
    {
        $this->dermatologieEsthtiquePeeling = $dermatologieEsthtiquePeeling;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDermatologieEsthtiqueMesotherapie()
    {
        return $this->dermatologieEsthtiqueMesotherapie;
    }

    /**
     * @param mixed $dermatologieEsthtiqueMesotherapie
     * @return Inscription
     */
    public function setDermatologieEsthtiqueMesotherapie($dermatologieEsthtiqueMesotherapie)
    {
        $this->dermatologieEsthtiqueMesotherapie = $dermatologieEsthtiqueMesotherapie;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDermatologieEsthtiqueAutre()
    {
        return $this->dermatologieEsthtiqueAutre;
    }

    /**
     * @param mixed $dermatologieEsthtiqueAutre
     * @return Inscription
     */
    public function setDermatologieEsthtiqueAutre($dermatologieEsthtiqueAutre)
    {
        $this->dermatologieEsthtiqueAutre = $dermatologieEsthtiqueAutre;
        return $this;
    }





    /**
     * @return string
     */
    public function getMaquillageYeux()
    {
        return $this->maquillageYeux;
    }

    /**
     * @param string $maquillageYeux
     */
    public function setMaquillageYeux(string $maquillageYeux)
    {
        $this->maquillageYeux = $maquillageYeux;

    }





    /**
     * @return string
     */
    public function getFrequenceRasage()
    {
        return $this->frequenceRasage;
    }

    /**
     * @param string $frequenceRasage
     */
    public function setFrequenceRasage(string $frequenceRasage)
    {
        $this->frequenceRasage = $frequenceRasage;
    }

    /**
     * @return string
     */
    public function getLongueBarbe()
    {
        return $this->longueBarbe;
    }

    /**
     * @param string $longueBarbe
     */
    public function setLongueBarbe(string $longueBarbe)
    {
        $this->longueBarbe = $longueBarbe;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="frequence_rasage", type="string", length=191, nullable=true)
     */
    private $frequenceRasage;

    /**
     * @var string
     *
     * @ORM\Column(name="longue_barbe", type="string", length=191, nullable=true)
     */
    private $longueBarbe;

    /**
     * @var string
     *
     * @ORM\Column(name="type_rasage_electrique", length=191, nullable=true)
     */
    private $typeRasageRElec;

    /**
     * Get typeRasageRElec
     *
     * @return string
     */
    public function getTypeRasageRElec()
    {
        return $this->typeRasageRElec;
    }

    /**
     * @param string $typeRasageRElec
     * @return Inscription
     */
    public function setTypeRasageRElec(string $typeRasageRElec)
    {
        $this->typeRasageRElec = $typeRasageRElec;
        return $this;
    }



    /*
        /**
         * @return string
         * /
        public function getTypeRasageRElec()
        {
            return explode(",",$this->typeRasageRElec);
        }

        /**
         * @param string $typeRasage
         * /
        public function setTypeRasageRElec(string $typeRasageRElec)
        {
            $this->typeRasageRElec = implode(',',$typeRasageRElec);

        }
        */

    /**
     *
     *
     * @ORM\Column(name="type_rasage_rasoir_mecanique_jetable", length=191, nullable=true)
     */
    private $typeRasageMeca;


    /**
     * Get typeRasageMeca
     *
     * @return string
     */
    public function getTypeRasageMeca()
    {
        return $this->typeRasageMeca;
    }

    /**
     *Set typeRasageMeca
     *
     * @param string $typeRasageMeca
     *
     * @return Inscription
     */
    public function setTypeRasageMeca($typeRasageMeca)
    {
        $this->typeRasageMeca = $typeRasageMeca;
        return $this;
    }


    /**
     * @var string
     *
     * @ORM\Column(name="type_rasage_rasoir_mecanique_rechargeable", type="string", length=191, nullable=true)
     */
    private $typeRasageMecaR;


    /**
     * Get typeRasageMeca
     *
     * @return string
     */
    public function getTypeRasageMecaR()
    {
        return $this->typeRasageMecaR;

    }

    /**
     *Set typeRasageMecaR
     *
     * @param string $typeRasageMecaR
     *
     * @return Inscription
     */
    public function setTypeRasageMecaR($typeRasageMecaR)
    {
        $this->typeRasageMecaR = $typeRasageMecaR;
        return $this;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="type_rasage_rasoir_tondeuse", type="string", length=191, nullable=true)
     */
    private $typeRasageTondeuse;


    /**
     * Get typeRasageMeca
     *
     * @return string
     */
    public function getTypeRasageTondeuse()
    {
        return $this->typeRasageTondeuse;
    }

    /**
     * Set $typeRasageTondeuse
     *
     * @param string $typeRasageTondeuse
     *
     * @return Inscription
     */
    public function setTypeRasageTondeuse($typeRasageTondeuse)
    {
        $this->typeRasageTondeuse = $typeRasageTondeuse;
        return $this;
    }




    /**
     * @var string
     *
     * @ORM\Column(name="calvitie", type="string", length=191, nullable=true)
     */
    private $calvitie;

    /**
     * @var string
     *
     * @ORM\Column(name="type_peau_corps", type="string", length=191, nullable=true)
     */
    private $caracteristiqueCorps;

    /**
     *
     * @ORM\Column(name="autre_c_corps_sensible", length=191, nullable=true)
     */
    private $autreCaracteristiqueCorpsPeau;

    /**
     *
     * @ORM\Column(name="autre_c_corps_bouton", length=191, nullable=true)
     */
    private $autreCaracteristiqueCorpsBoutton;


    /**
     *
     * @ORM\Column(name="autre_c_corps_jambe_l", length=191, nullable=true)
     */
    private $autreCaracteristiqueCorpsJambeL;

    /**
     *
     * @ORM\Column(name="autre_c_corps_jamb_s", length=191, nullable=true)
     */
    private $autreCaracteristiqueCorpsJambS;

    /**
     *
     * @ORM\Column(name="autre_caracteristique_corps_odeur", length=191, nullable=true)
     */
    private $autreCaracteristiqueCorpsOdeur;




    /**
     *
     * @ORM\Column(name="autre_c_corps_rel", length=191, nullable=true)
     */
    private $autreCaracteristiqueCorpsRel;

    /**
     *
     * @ORM\Column(name="autre_c_corps_tache", length=191, nullable=true)
     */
    private $autreCaracteristiqueCorpsTache;

    /**
     *
     * @ORM\Column(name="autre_c_corps_varice", length=191, nullable=true)
     */
    private $autreCaracteristiqueCorpsVar;

    /**
     *
     * @ORM\Column(name="autre_c_corps_vergeture", length=191, nullable=true)
     */
    private $autreCaracteristiqueCorpsVer;

    /**
     * @return mixed
     */
    public function getAutreCaracteristiqueCorpsPeau()
    {
        return $this->autreCaracteristiqueCorpsPeau;
    }

    /**
     * @param mixed $autreCaracteristiqueCorpsPeau
     * @return Inscription
     */
    public function setAutreCaracteristiqueCorpsPeau($autreCaracteristiqueCorpsPeau)
    {
        $this->autreCaracteristiqueCorpsPeau = $autreCaracteristiqueCorpsPeau;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAutreCaracteristiqueCorpsBoutton()
    {
        return $this->autreCaracteristiqueCorpsBoutton;
    }

    /**
     * @param mixed $autreCaracteristiqueCorpsBoutton
     * @return Inscription
     */
    public function setAutreCaracteristiqueCorpsBoutton($autreCaracteristiqueCorpsBoutton)
    {
        $this->autreCaracteristiqueCorpsBoutton = $autreCaracteristiqueCorpsBoutton;
        return $this;
    }




    /**
     * @return mixed
     */
    public function getAutreCaracteristiqueCorpsJambeL()
    {
        return $this->autreCaracteristiqueCorpsJambeL;
    }

    /**
     * @param mixed $autreCaracteristiqueCorpsJambeL
     * @return Inscription
     */
    public function setAutreCaracteristiqueCorpsJambeL($autreCaracteristiqueCorpsJambeL)
    {
        $this->autreCaracteristiqueCorpsJambeL = $autreCaracteristiqueCorpsJambeL;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAutreCaracteristiqueCorpsJambS()
    {
        return $this->autreCaracteristiqueCorpsJambS;
    }

    /**
     * @param mixed $autreCaracteristiqueCorpsJambS
     * @return Inscription
     */
    public function setAutreCaracteristiqueCorpsJambS($autreCaracteristiqueCorpsJambS)
    {
        $this->autreCaracteristiqueCorpsJambS = $autreCaracteristiqueCorpsJambS;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAutreCaracteristiqueCorpsOdeur()
    {
        return $this->autreCaracteristiqueCorpsOdeur;
    }

    /**
     * @param mixed $autreCaracteristiqueCorpsOdeur
     * @return Inscription
     */
    public function setAutreCaracteristiqueCorpsOdeur($autreCaracteristiqueCorpsOdeur)
    {
        $this->autreCaracteristiqueCorpsOdeur = $autreCaracteristiqueCorpsOdeur;
        return $this;
    }





    /**
     * @return mixed
     */
    public function getAutreCaracteristiqueCorpsRel()
    {
        return $this->autreCaracteristiqueCorpsRel;
    }

    /**
     * @param mixed $autreCaracteristiqueCorpsRel
     * @return Inscription
     */
    public function setAutreCaracteristiqueCorpsRel($autreCaracteristiqueCorpsRel)
    {
        $this->autreCaracteristiqueCorpsRel = $autreCaracteristiqueCorpsRel;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAutreCaracteristiqueCorpsTache()
    {
        return $this->autreCaracteristiqueCorpsTache;
    }

    /**
     * @param mixed $autreCaracteristiqueCorpsTache
     * @return Inscription
     */
    public function setAutreCaracteristiqueCorpsTache($autreCaracteristiqueCorpsTache)
    {
        $this->autreCaracteristiqueCorpsTache = $autreCaracteristiqueCorpsTache;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAutreCaracteristiqueCorpsVar()
    {
        return $this->autreCaracteristiqueCorpsVar;
    }

    /**
     * @param mixed $autreCaracteristiqueCorpsVar
     * @return Inscription
     */
    public function setAutreCaracteristiqueCorpsVar($autreCaracteristiqueCorpsVar)
    {
        $this->autreCaracteristiqueCorpsVar = $autreCaracteristiqueCorpsVar;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAutreCaracteristiqueCorpsVer()
    {
        return $this->autreCaracteristiqueCorpsVer;
    }

    /**
     * @param mixed $autreCaracteristiqueCorpsVer
     * @return Inscription
     */
    public function setAutreCaracteristiqueCorpsVer($autreCaracteristiqueCorpsVer)
    {
        $this->autreCaracteristiqueCorpsVer = $autreCaracteristiqueCorpsVer;
        return $this;
    }







    /**
     *
     * @ORM\Column(name="deo_bille", length=1, nullable=true)
     */
    private $deoBille;

    /**
     *
     * @ORM\Column(name="deo_creme", length=1, nullable=true)
     */
    private $deoCreme;

    /**
     *
     * @ORM\Column(name="deo_pierre_d_alun", length=1, nullable=true)
     */
    private $deo_lingette;


    /**
     *
     * @ORM\Column(name="deo_spray", length=1, nullable=true)
     */
    private $deoSpray;

    /**
     *
     * @ORM\Column(name="deo_stick", length=1, nullable=true)
     */
    private $deoStick;

    /////
    /**
     *
     * @ORM\Column(name="anti_t_bille_roll_on", length=1, nullable=true)
     */
    private $anti_t_bille;

    /**
     *
     * @ORM\Column(name="anti_t_bille_creme_tube", length=1, nullable=true)
     */
    private $anti_t_creme;

    /**
     *
     * @ORM\Column(name="anti_t_spray", length=1, nullable=true)
     */
    private $anti_t_spray;

    /**
     *
     * @ORM\Column(name="anti_t_stick", length=1, nullable=true)
     */
    private $anti_t_stick;

    /**
     * @return mixed
     */
    public function getAntiTBille()
    {
        return $this->anti_t_bille;
    }

    /**
     * @param mixed $anti_t_bille
     */
    public function setAntiTBille($anti_t_bille)
    {
        $this->anti_t_bille = $anti_t_bille;
    }

    /**
     * @return mixed
     */
    public function getAntiTCreme()
    {
        return $this->anti_t_creme;
    }

    /**
     * @param mixed $anti_t_creme
     */
    public function setAntiTCreme($anti_t_creme)
    {
        $this->anti_t_creme = $anti_t_creme;
    }

    /**
     * @return mixed
     */
    public function getAntiTSpray()
    {
        return $this->anti_t_spray;
    }

    /**
     * @param mixed $anti_t_spray
     */
    public function setAntiTSpray($anti_t_spray)
    {
        $this->anti_t_spray = $anti_t_spray;
    }

    /**
     * @return mixed
     */
    public function getAntiTStick()
    {
        return $this->anti_t_stick;
    }

    /**
     * @param mixed $anti_t_stick
     */
    public function setAntiTStick($anti_t_stick)
    {
        $this->anti_t_stick = $anti_t_stick;
    }


    /**
     * @return mixed
     */
    public function getDeoBille()
    {
        return $this->deoBille;
    }

    /**
     * @param mixed $deoBille
     * @return Inscription
     */
    public function setDeoBille($deoBille)
    {
        $this->deoBille = $deoBille;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeoCreme()
    {
        return $this->deoCreme;
    }

    /**
     * @param mixed $deoCreme
     * @return Inscription
     */
    public function setDeoCreme($deoCreme)
    {
        $this->deoCreme = $deoCreme;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeoLingette()
    {
        return $this->deo_lingette;
    }

    /**
     * @param mixed $deo_lingette
     * @return Inscription
     */
    public function setDeoLingette($deo_lingette)
    {
        $this->deo_lingette = $deo_lingette;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getDeoSpray()
    {
        return $this->deoSpray;
    }

    /**
     * @param mixed $deoSpray
     * @return Inscription
     */
    public function setDeoSpray($deoSpray)
    {
        $this->deoSpray = $deoSpray;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeoStick()
    {
        return $this->deoStick;
    }

    /**
     * @param mixed $deoStick
     * @return Inscription
     */
    public function setDeoStick($deoStick)
    {
        $this->deoStick = $deoStick;
        return $this;
    }





    /**
     * @return string
     */
    public function getPeauVisageSinsible()
    {
        return $this->peauVisageSinsible;
    }

    /**
     * @param string $peauVisageSinsible
     */
    public function setPeauVisageSinsible(string $peauVisageSinsible)
    {
        $this->peauVisageSinsible = $peauVisageSinsible;
    }


    /**
     * @return string
     * @ORM\Column(name="type_peau_visage", type="string", length=191, nullable=true)
     */
    private $peauVisage;

    /**
     * @return mixed
     */
    public function getPeauVisage()
    {
        return $this->peauVisage;
    }

    /**
     * @param mixed $peauVisage
     * @return Inscription
     */
    public function setPeauVisage($peauVisage)
    {
        $this->peauVisage = $peauVisage;
        return $this;
    }




    /**
     * @var string
     *
     * @ORM\Column(name="peau_visage_sensible", type="string", length=191, nullable=true)
     */
    private $peauVisageSinsible;

    /**
     * @var string
     *
     * @ORM\Column(name="visage_intolerante", type="string", length=191, nullable=true)
     */
    private $visageIntolerante;

    /**
     * @var string
     *
     * @ORM\Column(name="peau_visage_reactive", type="string", length=191, nullable=true)
     */
    private $peauVisageReactive;

    /**
     *
     * @ORM\Column(name="autre_caracteristique_v_rides", length=1, nullable=true)
     */
    private $autreCaracteristiqueVRides;

    /**
     *
     * @ORM\Column(name="autre_caracteristique_v_ridules", length=1, nullable=true)
     */
    private $autreCaracteristiqueVRidules;

    /**
     *
     * @ORM\Column(name="autre_caracteristique_v_perte", length=1, nullable=true)
     */
    private $autreCaracteristiqueVPerte;
    /**
     *
     * @ORM\Column(name="autre_caracteristique_v_teint", length=1, nullable=true)
     */
    private $autreCaracteristiqueVTeint;

    /**
     *
     * @ORM\Column(name="autre_caracteristique_v_rougeurs", length=1, nullable=true)
     */
    private $autreCaracteristiqueVRougeurs;


    /**
     *
     * @ORM\Column(name="autre_caracteristique_v_taches_pig", length=1, nullable=true)
     */
    private $autreCaracteristiqueVTaches;

    /**
     *
     * @ORM\Column(name="autre_caracteristique_v_acne", length=1, nullable=true)
     */
    private $autreCaracteristiqueVAcne;

    /**
     *
     * @ORM\Column(name="autre_caracteristique_v_points", length=1, nullable=true)
     */
    private $autreCaracteristiqueVPoints;

    /**
     *
     * @ORM\Column(name="autre_caracteristique_v_cicatrices", length=1, nullable=true)
     */
    private $autreCaracteristiqueVCicatrices;

    /**
     *
     * @ORM\Column(name="autre_caracteristique_v_eczema", length=1, nullable=true)
     */
    private $autreCaracteristiqueVEczema;

    /**
     *
     * @ORM\Column(name="autre_caracteristique_v_peau", length=1, nullable=true)
     */
    private $autreCaracteristiqueVPeau;

    /**
     *
     * @ORM\Column(name="autre_caracteristique_v_pores", length=1, nullable=true)
     */
    private $autreCaracteristiqueVPores;

    /**
     *
     * @ORM\Column(name="autre_caracteristique_v_peau_abime", length=1, nullable=true)
     */
    private $autreCaracteristiqueVPeauAbi;

    /**
     *
     * @ORM\Column(name="autre_caracteristique_v_imperfections", length=1, nullable=true)
     */
    private $autreCaracteristiqueVImperfections;

    /**
     *
     * @ORM\Column(name="autre_caracteristique_v_peau_fatique", length=1, nullable=true)
     */
    private $autreCaracteristiqueVPeauF;


    /**
     *
     * @ORM\Column(name="autre_caracteristique_v_deshydratee", length=1, nullable=true)
     */
    private $autreCaracteristiqueVDes;


    /**
     * @return mixed
     */
    public function getAutreCaracteristiqueVPeauAbi()
    {
        return $this->autreCaracteristiqueVPeauAbi;
    }

    /**
     * @param mixed $autreCaracteristiqueVPeauAbi
     * @return Inscription
     */
    public function setAutreCaracteristiqueVPeauAbi($autreCaracteristiqueVPeauAbi)
    {
        $this->autreCaracteristiqueVPeauAbi = $autreCaracteristiqueVPeauAbi;
        return $this;
    }



    /**
     * @return mixed
     */
    public function getAutreCaracteristiqueVPeauF()
    {
        return $this->autreCaracteristiqueVPeauF;
    }

    /**
     * @param mixed $autreCaracteristiqueVPeauF
     * @return Inscription
     */
    public function setAutreCaracteristiqueVPeauF($autreCaracteristiqueVPeauF)
    {
        $this->autreCaracteristiqueVPeauF = $autreCaracteristiqueVPeauF;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAutreCaracteristiqueVDes()
    {
        return $this->autreCaracteristiqueVDes;
    }

    /**
     * @param mixed $autreCaracteristiqueVDes
     * @return Inscription
     */
    public function setAutreCaracteristiqueVDes($autreCaracteristiqueVDes)
    {
        $this->autreCaracteristiqueVDes = $autreCaracteristiqueVDes;
        return $this;
    }



    /**
     * @return mixed
     */
    public function getAutreCaracteristiqueVRides()
    {
        return $this->autreCaracteristiqueVRides;
    }

    /**
     * @param mixed $autreCaracteristiqueVRides
     * @return Inscription
     */
    public function setAutreCaracteristiqueVRides($autreCaracteristiqueVRides)
    {
        $this->autreCaracteristiqueVRides = $autreCaracteristiqueVRides;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAutreCaracteristiqueVRidules()
    {
        return $this->autreCaracteristiqueVRidules;
    }

    /**
     * @param mixed $autreCaracteristiqueVRidules
     * @return Inscription
     */
    public function setAutreCaracteristiqueVRidules($autreCaracteristiqueVRidules)
    {
        $this->autreCaracteristiqueVRidules = $autreCaracteristiqueVRidules;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAutreCaracteristiqueVPerte()
    {
        return $this->autreCaracteristiqueVPerte;
    }

    /**
     * @param mixed $autreCaracteristiqueVPerte
     * @return Inscription
     */
    public function setAutreCaracteristiqueVPerte($autreCaracteristiqueVPerte)
    {
        $this->autreCaracteristiqueVPerte = $autreCaracteristiqueVPerte;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAutreCaracteristiqueVTeint()
    {
        return $this->autreCaracteristiqueVTeint;
    }

    /**
     * @param mixed $autreCaracteristiqueVTeint
     * @return Inscription
     */
    public function setAutreCaracteristiqueVTeint($autreCaracteristiqueVTeint)
    {
        $this->autreCaracteristiqueVTeint = $autreCaracteristiqueVTeint;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAutreCaracteristiqueVRougeurs()
    {
        return $this->autreCaracteristiqueVRougeurs;
    }

    /**
     * @param mixed $autreCaracteristiqueVRougeurs
     * @return Inscription
     */
    public function setAutreCaracteristiqueVRougeurs($autreCaracteristiqueVRougeurs)
    {
        $this->autreCaracteristiqueVRougeurs = $autreCaracteristiqueVRougeurs;
        return $this;
    }



    /**
     * @return mixed
     */
    public function getAutreCaracteristiqueVTaches()
    {
        return $this->autreCaracteristiqueVTaches;
    }

    /**
     * @param mixed $autreCaracteristiqueVTaches
     * @return Inscription
     */
    public function setAutreCaracteristiqueVTaches($autreCaracteristiqueVTaches)
    {
        $this->autreCaracteristiqueVTaches = $autreCaracteristiqueVTaches;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAutreCaracteristiqueVAcne()
    {
        return $this->autreCaracteristiqueVAcne;
    }

    /**
     * @param mixed $autreCaracteristiqueVAcne
     * @return Inscription
     */
    public function setAutreCaracteristiqueVAcne($autreCaracteristiqueVAcne)
    {
        $this->autreCaracteristiqueVAcne = $autreCaracteristiqueVAcne;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAutreCaracteristiqueVPoints()
    {
        return $this->autreCaracteristiqueVPoints;
    }

    /**
     * @param mixed $autreCaracteristiqueVPoints
     * @return Inscription
     */
    public function setAutreCaracteristiqueVPoints($autreCaracteristiqueVPoints)
    {
        $this->autreCaracteristiqueVPoints = $autreCaracteristiqueVPoints;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAutreCaracteristiqueVCicatrices()
    {
        return $this->autreCaracteristiqueVCicatrices;
    }

    /**
     * @param mixed $autreCaracteristiqueVCicatrices
     * @return Inscription
     */
    public function setAutreCaracteristiqueVCicatrices($autreCaracteristiqueVCicatrices)
    {
        $this->autreCaracteristiqueVCicatrices = $autreCaracteristiqueVCicatrices;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAutreCaracteristiqueVEczema()
    {
        return $this->autreCaracteristiqueVEczema;
    }

    /**
     * @param mixed $autreCaracteristiqueVEczema
     * @return Inscription
     */
    public function setAutreCaracteristiqueVEczema($autreCaracteristiqueVEczema)
    {
        $this->autreCaracteristiqueVEczema = $autreCaracteristiqueVEczema;
        return $this;
    }



    /**
     * @return mixed
     */
    public function getAutreCaracteristiqueVPores()
    {
        return $this->autreCaracteristiqueVPores;
    }

    /**
     * @param mixed $autreCaracteristiqueVPores
     * @return Inscription
     */
    public function setAutreCaracteristiqueVPores($autreCaracteristiqueVPores)
    {
        $this->autreCaracteristiqueVPores = $autreCaracteristiqueVPores;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAutreCaracteristiqueVImperfections()
    {
        return $this->autreCaracteristiqueVImperfections;
    }

    /**
     * @param mixed $autreCaracteristiqueVImperfections
     * @return Inscription
     */
    public function setAutreCaracteristiqueVImperfections($autreCaracteristiqueVImperfections)
    {
        $this->autreCaracteristiqueVImperfections = $autreCaracteristiqueVImperfections;
        return $this;
    }



    /**
     *
     * @ORM\Column(name="gel_nettoyant", length=1, nullable=true)
     */
    private $gelNottyant;



    /**
     *
     * @ORM\Column(name="gel_nettoyant_specifique", length=1, nullable=true)
     */
    private $gelNottyantSpe;



    /**
     *
     * @ORM\Column(name="lotion_nettoyant", length=1, nullable=true)
     */
    private $lotionNettoyant;


    /**
     *
     * @ORM\Column(name="gel_exfoliant", length=1, nullable=true)
     */
    private $gelExfoliant;

    /**
     *
     * @ORM\Column(name="savon_pain_derma", length=1, nullable=true)
     */
    private $savonDerma;

    /**
     * @return mixed
     */
    public function getGelNottyant()
    {
        return $this->gelNottyant;
    }

    /**
     * @param mixed $gelNottyant
     * @return Inscription
     */
    public function setGelNottyant($gelNottyant)
    {
        $this->gelNottyant = $gelNottyant;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGelNottyantSpe()
    {
        return $this->gelNottyantSpe;
    }

    /**
     * @param mixed $gelNottyantSpe
     * @return Inscription
     */
    public function setGelNottyantSpe($gelNottyantSpe)
    {
        $this->gelNottyantSpe = $gelNottyantSpe;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLotionNettoyant()
    {
        return $this->lotionNettoyant;
    }

    /**
     * @param mixed $lotionNettoyant
     * @return Inscription
     */
    public function setLotionNettoyant($lotionNettoyant)
    {
        $this->lotionNettoyant = $lotionNettoyant;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGelExfoliant()
    {
        return $this->gelExfoliant;
    }

    /**
     * @param mixed $gelExfoliant
     * @return Inscription
     */
    public function setGelExfoliant($gelExfoliant)
    {
        $this->gelExfoliant = $gelExfoliant;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSavonDerma()
    {
        return $this->savonDerma;
    }

    /**
     * @param mixed $savonDerma
     * @return Inscription
     */
    public function setSavonDerma($savonDerma)
    {
        $this->savonDerma = $savonDerma;
        return $this;
    }





    /**
     * @var string
     *
     * @ORM\Column(name="ouachete_soin_visage", type="string", length=191, nullable=true)
     */
    private $ouacheteSoinVisage;

    /**
     * @return string
     */
    public function getOuacheteSoinVisage()
    {
        return $this->ouacheteSoinVisage;
    }

    /**
     * @param string $ouacheteSoinVisage
     */
    public function setOuacheteSoinVisage(string $ouacheteSoinVisage)
    {
        $this->ouacheteSoinVisage = $ouacheteSoinVisage;
    }

    /**
     *
     * @ORM\Column(name="caracteristique_yeux_sensible", length=1, nullable=true)
     */
    private $caracteristiqueYeuxS;


    /**
     *
     * @ORM\Column(name="caracteristique_yeux_lentille", length=1, nullable=true)
     */
    private $caracteristiqueYeuxL;

    /**
     *
     * @ORM\Column(name="caracteristique_yeux_cernes", length=1, nullable=true)
     */
    private $caracteristiqueYeuxC;

    /**
     *
     * @ORM\Column(name="caracteristique_yeux_poche", length=1, nullable=true)
     */
    private $caracteristiqueYeuxPoche;

    /**
     *
     * @ORM\Column(name="caracteristique_yeux_paupieres", length=1, nullable=true)
     */
    private $caracteristiqueYeuxPopiere;

    /**
     *
     * @ORM\Column(name="caracteristique_yeux_gonfles", length=1, nullable=true)
     */
    private $caracteristiqueYeuxGonfles;

    /**
     * @return mixed
     */
    public function getCaracteristiqueYeuxS()
    {
        return $this->caracteristiqueYeuxS;
    }

    /**
     * @param mixed $caracteristiqueYeuxS
     * @return Inscription
     */
    public function setCaracteristiqueYeuxS($caracteristiqueYeuxS)
    {
        $this->caracteristiqueYeuxS = $caracteristiqueYeuxS;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCaracteristiqueYeuxL()
    {
        return $this->caracteristiqueYeuxL;
    }

    /**
     * @param mixed $caracteristiqueYeuxL
     * @return Inscription
     */
    public function setCaracteristiqueYeuxL($caracteristiqueYeuxL)
    {
        $this->caracteristiqueYeuxL = $caracteristiqueYeuxL;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCaracteristiqueYeuxC()
    {
        return $this->caracteristiqueYeuxC;
    }

    /**
     * @param mixed $caracteristiqueYeuxC
     * @return Inscription
     */
    public function setCaracteristiqueYeuxC($caracteristiqueYeuxC)
    {
        $this->caracteristiqueYeuxC = $caracteristiqueYeuxC;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCaracteristiqueYeuxPoche()
    {
        return $this->caracteristiqueYeuxPoche;
    }

    /**
     * @param mixed $caracteristiqueYeuxPoche
     * @return Inscription
     */
    public function setCaracteristiqueYeuxPoche($caracteristiqueYeuxPoche)
    {
        $this->caracteristiqueYeuxPoche = $caracteristiqueYeuxPoche;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCaracteristiqueYeuxPopiere()
    {
        return $this->caracteristiqueYeuxPopiere;
    }

    /**
     * @param mixed $caracteristiqueYeuxPopiere
     * @return Inscription
     */
    public function setCaracteristiqueYeuxPopiere($caracteristiqueYeuxPopiere)
    {
        $this->caracteristiqueYeuxPopiere = $caracteristiqueYeuxPopiere;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCaracteristiqueYeuxGonfles()
    {
        return $this->caracteristiqueYeuxGonfles;
    }

    /**
     * @param mixed $caracteristiqueYeuxGonfles
     * @return Inscription
     */
    public function setCaracteristiqueYeuxGonfles($caracteristiqueYeuxGonfles)
    {
        $this->caracteristiqueYeuxGonfles = $caracteristiqueYeuxGonfles;
        return $this;
    }








    /**
     * @var string
     *
     * @ORM\Column(name="type_cheveux", type="string", length=191, nullable=true)
     */
    private $typeCheveux;

    /*
    /**
     * @var string
     *
     * @ORM\Column(name="longueur_cheveux", type="string", length=191, nullable=true)
     * /
    private $longueurCheveux;
*/
    /**
     * @var string
     *
     * @ORM\Column(name="mode_epilation_jambe", type="string", length=191, nullable=true)
     */
    private $modeEpilation;


    /**
     * @var string
     *
     * @ORM\Column(name="epillation_maillot", type="string", length=191, nullable=true)
     */
    private $epillationMaillot;

    /**
     * @return string
     */
    public function getEpillationMaillot()
    {
        return $this->epillationMaillot;
    }

    /**
     * @param string $epillationMaillot
     */
    public function setEpillationMaillot(string $epillationMaillot)
    {
        $this->epillationMaillot = $epillationMaillot;
    }

    /**
     * @return string
     */
    public function getEpillationVisage()
    {
        return $this->epillationVisage;
    }

    /**
     * @param string $epillationVisage
     */
    public function setEpillationVisage(string $epillationVisage)
    {
        $this->epillationVisage = $epillationVisage;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="epillation_visage", type="string", length=191, nullable=true)
     */
    private $epillationVisage;

    /**
     * @var string
     *
     * @ORM\Column(name="etre_rappler_skype", type="string", length=191, nullable=true)
     */
    private $etreRappler;

    /**
     * @var string
     *
     * @ORM\Column(name="deplacement_region", type="string", length=191, nullable=true)
     */
    private $deplacementRegion;



    /**
     * @return string
     */
    public function getEtreRappler()
    {
        return $this->etreRappler;
    }

    /**
     * @param string $etreRappler
     */
    public function setEtreRappler(string $etreRappler)
    {
        $this->etreRappler = $etreRappler;
    }

    /**
     * Get deplacementRegion
     * @return string
     */
    public function getDeplacementRegion()
    {
        return explode(",",$this->deplacementRegion);
    }

    /**
     * Set deplacementRegion
     *
     * @param string $deplacementRegion
     *
     * @return Inscription
     */
    public function setDeplacementRegion(array $deplacementRegion)
    {
        $this->deplacementRegion = implode(',',$deplacementRegion);
        return $this;

    }



    /**
     * @return string
     */
    public function getModeEpilation()
    {
        return $this->modeEpilation;
    }


    /**
     * @param string $modeEpilation
     */
    public function setModeEpilation(string $modeEpilation)
    {
        $this->modeEpilation = $modeEpilation;
    }


    /**
     * @return string
     */
    public function getTypeCheveux()
    {
        return $this->typeCheveux;

    }

    /**
     * @param string $typeCheveux
     */
    public function setTypeCheveux(string $typeCheveux)
    {
        $this->typeCheveux = $typeCheveux;
    }

    /*
    /**
     * @return string
     * /
    public function getLongueurCheveux()
    {
        return $this->longueurCheveux;
    }

    /**
     * @param string $longueurCheveux
     * /
    public function setLongueurCheveux(string $longueurCheveux)
    {
        $this->longueurCheveux = $longueurCheveux;
    }
    */

    /**
     * @return string
     */
    public function getNatureCheveux()
    {
        return $this->natureCheveux;
    }

    /**
     * @param string $natureCheveux
     */
    public function setNatureCheveux(string $natureCheveux)
    {
        $this->natureCheveux = $natureCheveux;
    }

    /**
     * @return string
     */
    public function getAlopecie()
    {
        return $this->alopecie;
    }

    /**
     * @param string $alopecie
     */
    public function setAlopecie(string $alopecie)
    {
        $this->alopecie = $alopecie;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="nature_cheveux", type="string", length=191, nullable=true)
     */
    private $natureCheveux;

    /**
     * @var string
     *
     * @ORM\Column(name="alopecie", type="string", length=191, nullable=true)
     */
    private $alopecie;


    /**
     * @return string
     */
    public function getVisageIntolerante()
    {
        return $this->visageIntolerante;
    }

    /**
     * @param string $visageIntolerante
     */
    public function setVisageIntolerante(string $visageIntolerante)
    {
        $this->visageIntolerante = $visageIntolerante;
    }

    /**
     * @return string
     */
    public function getPeauVisageReactive()
    {
        return $this->peauVisageReactive;
    }

    /**
     * @param string $peauVisageReactive
     */
    public function setPeauVisageReactive(string $peauVisageReactive)
    {
        $this->peauVisageReactive = $peauVisageReactive;
    }







    /**
     * @return string
     */
    public function getCalvitie()
    {
        return $this->calvitie;
    }

    /**
     * @param string $calvitie
     */
    public function setCalvitie(string $calvitie)
    {
        $this->calvitie = $calvitie;
    }

    /**
     * @return string
     */
    public function getCaracteristiqueCorps()
    {
        return $this->caracteristiqueCorps;
    }

    /**
     * @return Inscription
     */
    public function setCaracteristiqueCorps( $caracteristiqueCorps)
    {
        $this->caracteristiqueCorps = $caracteristiqueCorps;
        //$this->caracteristiqueCorps = implode(',',$caracteristiqueCorps);

        return $this;
    }



///**
//     * Set langueParle
//     *
//     * @param string $langueParle
//     *
//     * @return InscriptionController
//     */
//    public function setLangueParle(array $langueParle)
//    {
//        $this->langueParle = implode(',',$langueParle);
//
//        return $this;
//    }
//
//    /**
//     * Get langueParle
//     *
//     * @return string
//     */
//    public function getLangueParle()
//    {
//        return explode(",",$this->langueParle);
//
//    }

    /**
     * @var string
     *
     * @ORM\Column(name="probleme_peau_poil_incarne", type="string", length=191, nullable=true)
     */
    private $problemePeauPoileInc;

    /**
     * @return string
     */
    public function getProblemePeauPoileInc()
    {
        return $this->problemePeauPoileInc;
    }

    /**
     * @param string $problemePeauPoileInc
     */
    public function setProblemePeauPoileInc(string $problemePeauPoileInc)
    {
        $this->problemePeauPoileInc = $problemePeauPoileInc;

    }


    /**
     * @var string
     *
     * @ORM\Column(name="probleme_peau_sensible", type="string", length=191, nullable=true)
     */
    private $problemePeauSensible;

    /**
     * @return string
     */
    public function getProblemePeauSensible()
    {
        return $this->problemePeauSensible;
    }

    /**
     * @param string $problemePeauSensible
     */
    public function setProblemePeauSensible(string $problemePeauSensible)
    {
        $this->problemePeauSensible = $problemePeauSensible;

    }



    /**
     * @var string
     *
     * @ORM\Column(name="probleme_peau_barbe_dure", type="string", length=191, nullable=true)
     */
    private $problemePeauBarbe;

    /**
     * @return string
     */
    public function getProblemePeauBarbe()
    {
        return $this->problemePeauBarbe;
    }

    /**
     * @param string $problemePeauBarbe
     */
    public function setProblemePeauBarbe(string $problemePeauBarbe)
    {
        $this->problemePeauBarbe = $problemePeauBarbe;

    }

    /**
     * @return string
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * @param string $origin
     * @return Inscription
     */
    public function setOrigin(string $origin)
    {
        $this->origin = $origin;
        return $this;
    }


    /**
     * @var string
     *
     * @ORM\Column(name="votre_origine", type="string", length=191, nullable=true)
     */
    private $origin;



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Inscription
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Inscription
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set dateDeNaissance
     *
     * @param string $dateDeNaissance
     *
     * @return Inscription
     */
    public function setDateDeNaissance($dateDeNaissance)
    {
        $this->dateDeNaissance = $dateDeNaissance;

        return $this;
    }

    /**
     * Get dateDeNaissance
     *
     * @return string
     */
    public function getDateDeNaissance()
    {
        return $this->dateDeNaissance;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Inscription
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set typeMobile
     *
     * @param string $typeMobile
     *
     * @return Inscription
     */
    public function setTypeMobile($typeMobile)
    {
        $this->typeMobile = $typeMobile;

        return $this;
    }

    /**
     * Get typeMobile
     *
     * @return string
     */
    public function getTypeMobile()
    {
        return $this->typeMobile;
    }

    /**
     * Set tablette
     *
     * @param string $tablette
     *
     * @return Inscription
     */
    public function setTablette($tablette)
    {
        $this->tablette = $tablette;

        return $this;
    }

    /**
     * Get tablette
     *
     * @return string
     */
    public function getTablette()
    {
        return $this->tablette;
    }

    /**
     * Set numTelephone
     *
     * @param string $numTelephone
     *
     * @return Inscription
     */
    public function setNumTelephone($numTelephone)
    {
        $this->numTelephone = $numTelephone;

        return $this;
    }

    /**
     * Get numTelephone
     *
     * @return string
     */
    public function getNumTelephone()
    {
        return $this->numTelephone;
    }

    /*
     * Set contacterParInternet
     *
     * @param string $contacterParInternet
     *
     * @return InscriptionController
     * /
    public function setContacterParInternet($contacterParInternet)
    {
        $this->contacterParInternet = $contacterParInternet;

        return $this;
    }

    /**
     * Get contacterParInternet
     *
     * @return string
     * /
    public function getContacterParInternet()
    {
        return $this->contacterParInternet;
    }
    */


    /**
     * Set connecterSurReseauxS
     *
     * @param string $connecterSurReseauxS
     *
     * @return Inscription
     */
    public function setConnecterSurReseauxS($connecterSurReseauxS)
    {
        $this->connecterSurReseauxS = $connecterSurReseauxS;

        return $this;
    }

    /**
     * Get connecterSurReseauxS
     *
     * @return string
     */
    public function getConnecterSurReseauxS()
    {
        return $this->connecterSurReseauxS;
    }

    /**
     * Set nomAddresse
     *
     * @param string $nomAddresse
     *
     * @return Inscription
     */
    public function setNomAddresse($nomAddresse)
    {
        $this->nomAddresse = $nomAddresse;

        return $this;
    }

    /**
     * Get nomAddresse
     *
     * @return string
     */
    public function getNomAddresse()
    {
        return $this->nomAddresse;
    }

    /**
     * Set villeAddresse
     *
     * @param string $villeAddresse
     *
     * @return Inscription
     */
    public function setVilleAddresse($villeAddresse)
    {
        $this->villeAddresse = $villeAddresse;

        return $this;
    }

    /**
     * Get villeAddresse
     *
     * @return string
     */
    public function getVilleAddresse()
    {
        return $this->villeAddresse;
    }

    /**
     * @return string
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * @param string $codePostal
     * @return Inscription
     */
    public function setCodePostal(string $codePostal): Inscription
    {
        $this->codePostal = $codePostal;
        return $this;
    }



    /**
     * Set profession
     *
     * @param string $profession
     *
     * @return Inscription
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * Get profession
     *
     * @return string
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Set domaineMetier
     *
     * @param string $domaineMetier
     *
     * @return Inscription
     */
    public function setDomaineMetier($domaineMetier)
    {
        $this->domaineMetier = $domaineMetier;

        return $this;
    }

    /**
     * Get domaineMetier
     *
     * @return string
     */
    public function getDomaineMetier()
    {
        return $this->domaineMetier;
    }

    /**
     * Set etesAlergique
     *
     * @param string $etesAlergique
     *
     * @return Inscription
     */
    public function setEtesAlergique($etesAlergique)
    {
        $this->etesAlergique = $etesAlergique;

        return $this;
    }

    /**
     * Get etesAlergique
     *
     * @return string
     */
    public function getEtesAlergique()
    {
        return $this->etesAlergique;
    }

    /**
     * Set descAlergique
     *
     * @param string $descAlergique
     *
     * @return Inscription
     */
    public function setDescAlergique($descAlergique)
    {
        $this->descAlergique = $descAlergique;

        return $this;
    }

    /**
     * Get descAlergique
     *
     * @return string
     */
    public function getDescAlergique()
    {
        return $this->descAlergique;
    }

    /**
     * Set connaissezCondition
     *
     * @param string $connaissezCondition
     *
     * @return Inscription
     */
    public function setConnaissezCondition($connaissezCondition)
    {
        $this->connaissezCondition = $connaissezCondition;

        return $this;
    }

    /**
     * Get connaissezCondition
     *
     * @return string
     */
    public function getConnaissezCondition()
    {
        return $this->connaissezCondition;
    }

    /**
     * Set societeInscrit
     *
     * @param string $societeInscrit
     *
     * @return Inscription
     */
    public function setSocieteInscrit($societeInscrit)
    {
        $this->societeInscrit = $societeInscrit;

        return $this;
    }

    /**
     * Get societeInscrit
     *
     * @return string
     */
    public function getSocieteInscrit()
    {
        return $this->societeInscrit;
    }

    /**
     * Set fumezVous
     *
     * @param string $fumezVous
     *
     * @return Inscription
     */
    public function setFumezVous($fumezVous)
    {
        $this->fumezVous = $fumezVous;

        return $this;
    }

    /**
     * Get fumezVous
     *
     * @return string
     */
    public function getFumezVous()
    {
        return $this->fumezVous;
    }

    /**
     * Set zonePollue
     *
     * @param string $zonePollue
     *
     * @return Inscription
     */
    public function setZonePollue($zonePollue)
    {
        $this->zonePollue = $zonePollue;

        return $this;
    }

    /**
     * Get zonePollue
     *
     * @return string
     */
    public function getZonePollue()
    {
        return $this->zonePollue;
    }

    /**
     * Set utilisezProduitBio
     *
     * @param string $utilisezProduitBio
     *
     * @return Inscription
     */
    public function setUtilisezProduitBio($utilisezProduitBio)
    {
        $this->utilisezProduitBio = $utilisezProduitBio;

        return $this;
    }

    /**
     * Get utilisezProduitBio
     *
     * @return string
     */
    public function getUtilisezProduitBio()
    {
        return $this->utilisezProduitBio;
    }


    /**
     * Set langueParle
     *
     * @param string $langueParle
     *
     * @return Inscription
     */
    public function setLangueParle(array $langueParle)
    {
        $this->langueParle = implode(',',$langueParle);

        return $this;
    }

    /**
     * Get langueParle
     *
     * @return string
     */
    public function getLangueParle()
    {
        return explode(",",$this->langueParle);

    }



    /**
     * Set vousEtes
     *
     * @param string $vousEtes
     *
     * @return Inscription
     */
    public function setVousEtes($vousEtes)
    {
        $this->vousEtes = $vousEtes;

        return $this;
    }

    /**
     * Get vousEtes
     *
     * @return string
     */
    public function getVousEtes()
    {
        return $this->vousEtes;
    }

    /**
     * Set typePeau
     *
     * @param string $typePeau
     *
     * @return Inscription
     */
    public function setTypePeau($typePeau)
    {
        $this->typePeau = $typePeau;

        return $this;
    }

    /**
     * Get typePeau
     *
     * @return string
     */
    public function getTypePeau()
    {
        return $this->typePeau;
    }

    /**
     * Set couleurPeau
     *
     * @param string $couleurPeau
     *
     * @return Inscription
     */
    public function setCouleurPeau($couleurPeau)
    {
        $this->couleurPeau = $couleurPeau;

        return $this;
    }

    /**
     * Get couleurPeau
     *
     * @return string
     */
    public function getCouleurPeau()
    {
        return $this->couleurPeau;
    }

    /**
     * Set couleurCheveux
     *
     * @param string $couleurCheveux
     *
     * @return Inscription
     */
    public function setCouleurCheveux($couleurCheveux)
    {
        $this->couleurCheveux = $couleurCheveux;

        return $this;
    }

    /**
     * Get couleurCheveux
     *
     * @return string
     */
    public function getCouleurCheveux()
    {
        return $this->couleurCheveux;
    }

    /**
     * Set corpAuSoleil
     *
     * @param string $corpAuSoleil
     *
     * @return Inscription
     */
    public function setCorpAuSoleil($corpAuSoleil)
    {
        $this->corpAuSoleil = $corpAuSoleil;

        return $this;
    }

    /**
     * Get corpAuSoleil
     *
     * @return string
     */
    public function getCorpAuSoleil()
    {
        return $this->corpAuSoleil;
    }

    /**
     * Set maquillageTeint
     *
     * @param string $maquillageTeint
     *
     * @return Inscription
     */
    public function setMaquillageTeint($maquillageTeint)
    {
        $this->maquillageTeint = $maquillageTeint;

        return $this;
    }

    /**
     * Get maquillageTeint
     *
     * @return string
     */
    public function getMaquillageTeint()
    {
        return $this->maquillageTeint;
    }
}
