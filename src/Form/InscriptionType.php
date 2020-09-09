<?php

namespace App\Form;

use App\Entity\Inscription;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;



class InscriptionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            /*
            ->add('date', DateType::class, [
                'widget' => 'choice',
                'input'  => 'datetime_immutable'
            ])*/

            ->add('nom', TextType::class,
                ['attr'=> array(
                    'placeholder'=>'Votre nom ',
                    'class'=>'class_nom'

                ),
                    'label'=> 'Votre nom *',
                ]
            )
            ->add('prenom', TextType::class,
                ['attr'=> array(
                    'placeholder'=>'Votre prénom',
                    'class'=>'class_prenom inputV'
                ),
                    'label'=> 'Votre prénom *',
                ])
            ->add('dateDeNaissance',DateType::class, [
                    'widget' => 'single_text',
                    // this is actually the default format for single_text
                    'format' => 'yyyy-MM-dd',
                'label'=> 'Votre date de naissance *'
            ]
            )
            ->add('mail',EmailType::class, [
                    'label'=>'Adresse mail *',
                    'attr'=> array('
                       placeholder'=>'Merci de saisir l\'adresse mail la plus souvent utilisée',
                        'class'=>'input_mail',
                    )
                ]
            )
            ->add('typeMobile',
                ChoiceType::class, array(
                    'choices' => array(
                       'Oui'=>'-1',
                       'Non' =>'0',
                    ),
                    'label'=> 'Votre mobile est-il un Smartphone ? *',
                    'placeholder'=> 'Votre mobile est-il un Smartphone ?'
                ))
            ->add('tablette',
                ChoiceType::class, array(
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3',
                    ),
                    'label'=> 'Avez-vous une tablette ? *',
                    'required'=> true,
                    'placeholder'=> 'Avez-vous une tablette ? ',
                    'attr'=> array(
                        'class'=>'classTablette',

                    )
                ))
            ->add('numTelephone', TextType::class,[
                    'label'=>'N° de téléphone portable *',
                    'required'=> true,
                    'attr'=> [
                        'placeholder'=>'Entrez votre N° Portable au Format suivant : 06 00 00 00 00',
                        'class'=>'ajoutText'
                    ]
                ]
            )

            ->add('numBureau', TextType::class,[
                    'label'=>'N° de téléphone du bureau ',
                    'required'=> false,
                    'attr'=> [
                        'placeholder'=>'Entrez votre N° du bureau au Format suivant : 01 00 00 00 00',
                        'class'=>'ajoutText'
                    ]
                ]
            )
            ->add('numTelDom', TextType::class,[
                    'label'=>'N° de téléphone fixe ',
                    'required'=> false,
                    'attr'=> [
                        'placeholder'=>'Entrez votre N° Fixe au Format suivant : 01 00 00 00 00',
                        'class'=>'ajoutText'
                    ]
                ]
            )

            /*
            ->add('contacterParInternet',ChoiceType::class,[
                'choices' => array(
                    '1'=>'Oui',
                    '3'=>'Non',
                ),
                'placeholder'=>'Être contacté(e) par SMS ?',
                'required'=> true,
                'label'=>'Êtes-vous d\'accord pour être contacté(e)  par SMS dans le cadre de l\'organisation des tests ? *',
                'attr' => array(
                    'class' => 'contacterParInternet'
                )
            ])
           */

            ->add('apptEtageCouloir', TextType::class,[
                'label'=>'Appartement, étage, couloir ',
                'required'=> false,
                'attr' => array(
                    'class'=>'apptEtageCouloir',
                    'placeholder'=>'Appartement, étage, couloir',
                ),

            ])

            ->add('addBatiment', TextType::class,[
                'label'=>'Entrée batiment, immeuble, résidence ',
                'required'=> false,
                'attr' => array(
                    'class'=>'addBatiment',
                    'placeholder'=>'Entrée batiment, immeuble, résidence',
                ),

            ])

            ->add('nomAddresse', TextType::class,[
                'label'=>'Rue, avenue, hameau * ',
                'required'=> true,
                'attr' => array(
                    'class'=>'addresse',
                    'placeholder'=>'Rue, avenue, hameau',
                ),
            ])
            ->add('lieuDit', TextType::class,[
                'label'=>'Lieu dit ',
                'required'=> false,
                'attr' => array(
                    'class'=>'addBatiment',
                    'placeholder'=>'Lieu dit',
                ),
            ])
            ->add('villeAddresse', TextType::class,[
                'label'=>'Ville *',
                'required'=> true,
                'attr'=> ['placeholder'=>'Ville']

            ])
            ->add('codePostal', TextType::class,[
                'label'=>'Votre code postal *',
                'required'=> true,
                'attr'=> ['placeholder'=>'Code postal en cinq chiffres']
            ])

            ->add('connecterSurReseauxS', ChoiceType::class,[
                'choices' => array(
                    'Oui, régulièrement' =>'443',
                    'Oui, mais pas trop souvent' =>'444',
                    'Non'   =>'445',
                ),
                'placeholder'=>'Souvent connecté sur les réseaux sociaux',
                'required'=> true,
                'label'=>'Êtes-vous souvent connecté sur les réseaux sociaux ? *',
                'attr'=> array(
                    'class'=>'connecterSurReseauxS'
                )
            ])

            ->add('profession', ChoiceType::class,[
                'choices' => array(
                    'Agriculteur'               =>'17',
                    'Cadre, ingénieur, profession intellectuelle supérieure' =>'13',
                    'Chef d\'entreprise'        =>'12',
                    'Employé'                   =>'15',
                    'Enseignant, fonctionnaire' =>'372',
                    'Etudiant'                  =>'18',
                    'Femme / homme au foyer'    =>'19',
                    'Ouvrier'                   =>'373',
                    'Profession intermédiaire (technicien, agent de maîtrise)' =>'14',
                    'Profession libérale, artisan, commerçant'=>'16',
                    'Retraité'                  =>'20',
                    'Sans activité'             =>'21'
                ),
                'placeholder'=>'Votre profession',
                'label'=>'Votre profession *',
                'required'=> true,
            ])
            ->add('domaineMetier', ChoiceType::class,[
                'choices' => array(
                    'Activité scientifique, technique, informatique'=>'392',
                    'Activités immobilières'                        =>'389',
                    'Administration publique'                       =>'385',
                    'Agriculture, sylviculture et pêche'            =>'377',
                    'Alimentation, agroalimentaire'                 =>'378',
                    'Arts, spectacles et activités récréatives'     =>'380',
                    'Beauté, bien-être'                             =>'394',
                    'Commerce'                                      =>'386',
                    'Construction, BTP'                             =>'382',
                    'Enseignement'                                  =>'384',
                    'Finance, banque, assurances'                   =>'379',
                    'Industries manufacturières et autres'          =>'390',
                    'Information et communication'                  =>'387',
                    'Juridique (Avocats…)'                          =>'423',
                    'Production, distribution d\'énergie'           =>'388',
                    'R&D, marketing'                                =>'391',
                    'Ressources humaines'                           =>'424',
                    'Santé et action sociale'                       =>'393',
                    'Services (gardiennage, entretien)'             =>'422',
                    'Tourisme, hébergement, restauration et loisirs'=>'383',
                    'Transport et automobile'                       =>'381',
                    'Aucun, sans activité'                          =>'475'
                ),
                'placeholder'=>'Domaine d\'activité ',

                'label'=>'Votre domaine d\'activité *',
                'required'=> true,
                'attr'=> array(
                    'class'=>'domaineMetier'
                )
            ])
            ->add('etesAlergique', ChoiceType::class,[
                'choices'=> array(
                    'Oui'=>'1',
                    'Non'=>'3'
                ),
                'placeholder'=>'Êtes-vous allergique à certains produits cosmétiques ?',
                'label'=>'Êtes-vous allergique à certains produits cosmétiques ? *',
                'required'=> true,
                'attr'=> array(
                    'class'=>'allergie'
                )
            ])
            ->add('descAlergique',TextType::class,[
                /*'placeholder'=>'merci de préciser à quoi êtes vous allergique',*/
                'label'=>'Description des allergies *',
                'required'=> false,
                'attr'=> array(
                    'class'=>'descAllergie'

                )
            ])

            ->add('connaissezCondition',
                ChoiceType::class, [
                    'choices'=> array(
                        'Oui'=>'1',
                        'Non'=>'2'
                    ),
                    'placeholder'=>'Connaissez-vous les conditions générales d\'une autre société ?',
                    'required'=> true,
                    'label'=>'Connaissez-vous les conditions de réalisation des tests consommateurs au travers d\'autre(s) société(s) ? *',
                    'attr'=> array(
                        'class' => 'conditionG'
                    )
                ])

            ->add('societeInscrit', TextType::class, [
                'required'=> false,
                'label' => 'Merci de donner le ou les nom(s) de société où vous êtes déjà inscrit(e) *',
                'attr'=> array(
                    'placeholder'=>'Merci de donner le ou les nom(s) de société où vous êtes déjà inscrit(e)',
                    'class' => 'autreS'
                )
            ])
            ->add('fumezVous',
                ChoiceType::class, [
                    'choices'=> array(
                        'Oui'=>'1',
                        'Non'=>'3'

                    ),
                    'label'=>'Fumez-vous ? *',
                    'placeholder'=>'Fumez-vous ? '
                ])

            ->add('vapotezVous',
                ChoiceType::class, [
                    'choices'=> array(
                        'Oui'=>'1',
                        'Non'=>'3'
                    ),
                    'label'=>'Vapotez-vous ? *',
                    'placeholder'=>'Vapotez-vous ? '
                ])

            ->add('zonePollue',
                ChoiceType::class, [
                    'choices'=> array(
                        'Oui'=>'1',
                        'Non'=>'3'
                    ),
                    'placeholder'=>'Habitez-vous dans une zone polluée ?',
                    'label'=>'Habitez-vous dans une zone polluée ? *',
                    'required'=> true,
                ]
            )

            ->add('langueParle',
                ChoiceType::class,[
                    'choices' => array(
                        'Allemand'=>'825',
                        'Anglais'=>'823',
                        'Arabe'=>'830',
                        'Espagnol'=>'824',
                        'Hindi'=>'829',
                        'Italien'=>'827',
                        'Mandarin (chinois)'=>'828',
                        'Portugais'=>'826',
                        'Russe'=>'831',
                        'Aucune des ces langues'=>'841',
                    ),

                    'placeholder'=>'Langue courament parlé',
                    'label'=>'Quelle(s) langue(s) parlez-vous couramment ? *',
                    'required'=> false,
                    'mapped' => true,
                    'expanded' => true,
                    'multiple' => true,
                    'attr'=>array(
                        'class'=>'langue'
                    )
                ]
            )


            ->add('enfantsMineur',
                ChoiceType::class, [
                    'choices'=> array(
                        'Un enfant mineur'          =>'1',
                        'Deux enfants mineurs'      =>'2',
                        'Trois enfants mineurs'     =>'3',
                        'Plus de trois enfants mineurs'=>'4',
                        'Pas d\'enfant mineur'      =>'Zero'
                    ),
                    'label'=>'Combien d\'enfants mineurs avez-vous ?',
                    'placeholder'=> "Combien d'enfants mineurs avez-vous ?",
                    'attr'=> array(
                        'class'=>'enfantMineur'
                    )
                ]
            )
            ->add('enfantUnSex',
                ChoiceType::class, [
                    'choices'=> array(
                        'Fille'=>'2',
                        'Garçon'=>'1',
                    ),
                    'required'=> false,
                    'label'=>'Sexe de votre premier enfant mineur',
                    'placeholder'=> "Veuillez indiquer le sexe de votre premier enfant mineur",
                    'attr'=> array(
                        'class'=>'sexEnfantUN'
                    )
                ]
            )

            ->add('enfantUnAge',
                DateType::class, [
                    'widget' => 'single_text',
                    // this is actually the default format for single_text
                    'format' => 'yyyy-MM-dd',
                    'label'=>'Date de naissance du premier enfant mineur',
                    'required'=> false,
                    'attr'=> array(
                        'class'=>'input_age'
                    )
                ]

            )
            ->add('enfantDeuxSex',
                ChoiceType::class, [
                    'choices'=> array(
                        'Fille'=>'2',
                        'Garçon'=>'1',
                    ),
                    'label'=>'Sexe de votre deuxième enfant mineur',
                    'placeholder'=> "Veuillez indiquer le sexe de votre deuxième enfant mineur",
                    'required'=> false,
                    'attr'=> array(
                        'class'=>'sexEnfantDeux'
                    )
                ]
            )
            ->add('enfantDeuxAge',
                DateType::class, [
                    'widget' => 'single_text',
                    // this is actually the default format for single_text
                    'format' => 'yyyy-MM-dd',
                    'label'=>'Date de naissance du deuxième enfant mineur',
                    'required'=> false,
                    'attr'=> array(
                        'class'=>'input_age'
                    )
                ]

            )

            ->add('enfantTroisSex',
                ChoiceType::class, [
                    'choices'=> array(
                        'Fille'=>'2',
                        'Garçon'=>'1',
                    ),
                    'label'=>'Sexe de votre troisième enfant mineur',
                    'placeholder'=> "Veuillez indiquer le sexe de votre troisième enfant mineur",
                    'required'=> false,
                    'attr'=> array(
                        'class'=>'sexEnfantTrois'
                    )
                ]
            )
            ->add('enfantTroisAge',
                DateType::class, [
                    'widget' => 'single_text',
                    // this is actually the default format for single_text
                    'format' => 'yyyy-MM-dd',
                    'label'=>'Date de naissance du troisième enfant mineur',
                    'required'=> false
                ]
            )

            ->add('enfantQuatreSex',
                ChoiceType::class, [
                    'choices'=> array(
                        'Fille'=>'2',
                        'Garçon'=>'1',
                    ),
                    'label'=>'Sexe de votre quatrième enfant mineur',
                    'placeholder'=> "Veuillez indiquer le sexe de votre quatrième enfant mineur",
                    'required'=> false,
                    'attr'=> array(
                        'class'=>'sexEnfantQuatre'
                    )
                ]
            )
            ->add('enfantQuatreAge',
                DateType::class, [
                    'widget' => 'single_text',
                    // this is actually the default format for single_text
                    'format' => 'yyyy-MM-dd',
                    'label'=>'Date de naissance du quatrième enfant mineur',
                    'required'=> false
                ]

            )



            ->add('vousEtes',
                ChoiceType::class, [
                    'choices'=> array(
                        'Un homme'=>'1',
                        'Une femme'=>'2'
                    ),
/*
                    'mapped' => true,
                    'expanded' => true,
                    'multiple' => false,*/
                    'required'=> true,
                    'label' => 'Vous êtes ? *',
                    'placeholder'=> "Veuillez choisir",
                    'attr'=> array(
                        'class'=>'vousEtes',
                    )
                ]
            )

            ->add('utilisezProduitBio',
                ChoiceType::class, [
                    'choices'=> array(
                        'Oui'=>'369',
                        'Non, mais accepte d\'en utiliser'=>'368',
                        'Non, ne souhaite pas en utiliser'=>'367'
                    ),
                    'placeholder'=> "Utilisez-vous des produits cosmétiques bio ?",
                    'label'=>'Utilisez-vous des produits cosmétiques bio ? *',
                    'attr'=> array(
                        'class'=>'produiBio'
                    )
                ])

            ->add('origin',
                ChoiceType::class, [
                    'choices'=> array(
                        'Caucasienne (type européen)'   =>'325',
                        'Hispanique (Péninsule Ibérique, Amérique Latine)' =>'354',
                        'Asiatique'                     =>'326',
                        'Indienne'                      =>'328',
                        'Japonaise'                     =>'355',
                        'Magrébine (Afrique du nord)'   =>'330',
                        'Métisse (brassage de peau, de certaines îles)'=>'329',
                        'Autre métissage'               =>'449',
                        'Noire (Afrique, Antilles, afro-américain...)'=>'327',
                        'Moyen Orient'                  =>'450',
                        'Russe / Slave'                 =>'451',
                        'Autre'                         =>'376'
                    ),
                    'placeholder'=> "Quelle est votre origine ?",
                    'label'=>'Quelle est votre origine ? *',
                    'required'=> true,
                ]
            )
            ->add('typePeau',
                ChoiceType::class, [
                    'choices'=> array(
                        'Claire'    =>'41',
                        'Moyenne'   =>'42',
                        'Mate'      =>'43'
                    ),
                    'placeholder'=> "Votre carnation ",
                    'label'=>'Votre carnation *'
                ])

            ->add('couleurPeau',
                ChoiceType::class, [
                    'choices'=> array(
                        'Très blanche ou laiteuse'=>'Très blanche ou laiteuse',
                        'Très claire'=>'Très claire',
                        'Claire ou moyenne'=>'Claire ou moyenne',
                        'Mate'=>'Mate',
                        'Brune foncée'=>'Brune foncée',
                        'Noire'=>'Noire'
                    ),
                    'placeholder'=> "Votre couleur de peau",
                    'label'=>'Votre couleur de peau *'

                ])
            ->add('couleurCheveux',
                ChoiceType::class, [
                    'choices'=> array(
                        'Blonds'=>'Blonds',
                        'Roux'=>'Roux',
                        'Châtains clairs'=>'Châtains clairs',
                        'Châtains'=>'Châtains',
                        'Bruns'=>'Bruns',
                        'Noirs'=>'Noirs',
                        'Pas de cheveux'=>'Pas de cheveux'
                    ),
                    'placeholder'=> 'Vous avez les cheveux naturellement : ',
                    'required'=> true,
                    'label'=>'Vous avez les cheveux naturellement : *'

                ])

            ->add('typeSAntichute',
                ChoiceType::class, array(
                    'label' => 'Antichute',
                    'choices' => array(
                        'Oui'=>'1',
                        'Non'=> '3'),
                    'expanded' => true,
                    'multiple' => false,
                    'attr' => array(
                        'shampoing'
                    ),
                    'required' => true
                )
            )

            ->add('typeSAntipelliculaire',
                ChoiceType::class, array(
                    'label' => 'Antipelliculaire',
                    'choices' => array(
                        'Oui' => '1',
                        'Non' => '3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => true,
                    'attr' => array(
                        'shampoing'
                    )
                )
            )

            /*
            ->add('typeSDeuxEnEn',
                ChoiceType::class, array(
                    'label' => 'Deux en un, trois en un',
                    'choices' => array(1 => 'Oui', 3 => 'Non'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => true,
                    'attr' => array(
                        'shampoing'
                    )
                )
            )

           */

            ->add('typeSHuile',
                ChoiceType::class, array(
                    'label' => 'Huile douche shampooing',
                    'choices' => array(
                        'Oui' => '1',
                        'Non' => '3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => true,
                    'attr' => array(
                        'shampoing'
                    )
                )
            )

            ->add('typeSCheveuxColore',
                ChoiceType::class, array(
                    'label' => 'Pour cheveux colorés ou permanentés',
                    'choices' => array(
                        'Oui' => '1',
                        'Non' => '3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => true,
                    'attr' => array(
                        'shampoing'
                    )
                )
            )

            /*
            ->add('typeSCheveuxFins',
                ChoiceType::class, array(
                    'label' => 'Pour cheveux fins, sans volume',
                    'choices' => array(1 => 'Oui', 3 => 'Non'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => true,
                    'attr' => array(
                        'shampoing'
                    )
                )
            )

            */

            ->add('typeSCheveuxGras',
                ChoiceType::class, array(
                    'label' => 'Pour cheveux gras',
                    'choices' => array(
                        'Oui' => '1',
                        'Non' => '3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => true,
                    'attr' => array(
                        'shampoing'
                    )
                )
            )

            /*
            ->add('typeSCheveuxMixtes',
                ChoiceType::class, array(
                    'label' => 'Pour cheveux mixtes',
                    'choices' => array(1 => 'Oui', 3 => 'Non'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => true,
                    'attr' => array(
                        'shampoing'
                    )
                )
            )
            */

            /*
            ->add('typeSCheveuxNormaux',
                ChoiceType::class, array(
                    'label' => 'Pour cheveux normaux',
                    'choices' => array(1 => 'Oui', 3 => 'Non'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => true,
                    'attr' => array(
                        'shampoing'
                    )
                )
            )
*/
            /*
            ->add('typeSCheveuxOndBoucleF',
                ChoiceType::class, array(
                    'label' => 'Pour cheveux ondulés, bouclés, frisés',
                    'choices' => array(1 => 'Oui', 3 => 'Non'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => true,
                    'attr' => array(
                        'shampoing'
                    )
                )
            )
            * /
            ->add('typeSCheveuxSecs',
                ChoiceType::class, array(
                    'label' => 'Pour cheveux secs ou abîmés',
                    'choices' => array(1 => 'Oui', 3 => 'Non'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => true,
                    'attr' => array(
                        'shampoing'
                    )
                )
            )
            */

            /*
            ->add('typeSUsagesFrDoux',
                ChoiceType::class, array(
                    'label' => 'Pour usages fréquents, shampooings doux',
                    'choices' => array(1 => 'Oui', 3 => 'Non'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => true,
                    'attr' => array(
                        'shampoing'
                    )
                )
            )
            */

            ->add('typeSShampooingSec',
                ChoiceType::class, array(
                    'label' => 'Shampooing sec',
                    'choices' => array(
                        'Oui' => '1',
                        'Non' => '3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => true,
                    'attr' => array(
                        'shampoing'
                    )
                )
            )

            /*
            ->add('typeSSpecialReflets',
                ChoiceType::class, array(
                    'label' => 'Spécial reflets',
                    'choices' => array(1 => 'Oui', 3 => 'Non'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => true,
                    'attr' => array(
                        'shampoing'
                    )
                )
            )
           */

            ->add('autresProduitsCapillairesApreS',
                ChoiceType::class, array(
                    'label' => 'Après-shampooing',
                    'choices' => array(
                        'Oui' => '1',
                        'Non' => '3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => true,
                    'attr' => array(
                        'classFemme'
                    )
                )
            )
            ->add('autresProduitsCapillairesBaume',
                ChoiceType::class, array(
                    'label' => 'Baume démêlant',
                    'choices' => array(
                        'Oui'=> '1',
                        'Non' => '3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr' => array(
                        'classFemme'
                    )
                )
            )

            ->add('autresProduitsCapillairesCreme',
                ChoiceType::class, array(
                    'label' => 'Crème de soin cheveux',
                    'choices' => array(
                        'Oui'=> '1',
                        'Non'=> '3' ),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => true,
                    'attr' => array(
                        'classFemme'
                    )
                )
            )
            ->add('autresProduitsCapillairesMasque',
                ChoiceType::class, array(
                    'label' => 'Masque de soin cheveux',
                    'choices' => array(
                        'Oui'=> '1',
                        'Non'=> '3' ),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => true,
                    'attr' => array(
                        'classFemme'
                    )
                )
            )
            ->add('autresProduitsCapillairesLotion',
                ChoiceType::class, array(
                    'label' => 'Lotion capillaire',
                    'choices' => array(
                        'Oui'=> '1',
                        'Non'=> '3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => true,
                    'attr' => array(
                        'classFemme'
                    )
                )
            )
            ->add('autresProduitsCapillairesMousse',
                ChoiceType::class, array(
                    'label' => 'Mousse sans rinçage',
                    'choices' => array(
                        'Oui'=> '1',
                        'Non'=> '3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => true,
                    'attr' => array(
                        'classFemme'
                    )
                )
            )
            ->add('autresProduitsCapillairesCapsule',
                ChoiceType::class, array(
                    'label' => 'Capsule, masque, huile de soin sans rincage',
                    'choices' => array(
                        'Oui'=> '1',
                        'Non'=> '3' ),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => true,
                    'attr' => array(
                        'classFemme'
                    )
                )
            )
            ->add('corpAuSoleil',
                ChoiceType::class, [
                    'choices'=> array(
                        'De très nombreuses taches de rousseur, attrape toujours des coups de soleil, ne bronze jamais'=>'De très nombreuses taches de rousseur, attrape toujours des coups de soleil, ne bronze jamais',
                        'De nombreuses taches de rousseur, attrape souvent des coups de soleil, bronze difficilement'=>'De nombreuses taches de rousseur, attrape souvent des coups de soleil, bronze difficilement',
                        'Quelques taches de rousseur apparaissent au soleil, attrape parfois des coups de soleil, bronze progressivement'=>'Quelques taches de rousseur apparaissent au soleil, attrape parfois des coups de soleil, bronze progressivement',
                        'Aucune tache de rousseur, attrape peu de coups de soleil, bronze toujours'=>'Aucune tache de rousseur, attrape peu de coups de soleil, bronze toujours',
                        'Aucune tache de rousseur, attrape rarement des coups de soleil, bronze toujours'=>'Aucune tache de rousseur, attrape rarement des coups de soleil, bronze toujours',
                        'Aucune tache de rousseur, n\'attrape jamais de coup de soleil, ne brûle jamais'=>'Aucune tache de rousseur, n\'attrape jamais de coup de soleil, ne brûle jamais'
                    ),
                    'placeholder'=> "Votre corps au soleil se caractérise par :  ",
                    'required'=> true,
                    'label'=>'Votre corps au soleil se caractérise par : *',
                    'attr'=> array(
                        'class'=>'corpAuSoleil'
                    )
                ]

            )
            ->add('maquillageTeint', ChoiceType::class,[
                    'choices'=> array(
                        'Oui'=>'1',
                        'Non'=>'3'
                    ),
                    'attr' => array(
                        'class' => 'maquillageTeint'
                    ),
                    'placeholder'=> "Vous maquillez-vous le teint ? ",
                    'required'=> false,
                    'label'=>'Vous maquillez-vous le teint ? *'
                ]
            )

            ->add('ouAcheteMaquillage',
                ChoiceType::class, [
                    'choices'=> array(
                        'En grande, moyenne ou petite surface (Carrefour, Auchan, Lidl...)'=>'467',
                        'En pharmacie, parapharmacie'               =>'468',
                        'En parfumerie'                             =>'469',
                        'En institut'                               =>'470',
                        'Sur internet (haut de gamme)'              =>'471',
                        'Sur internet (autre achat)'                =>'472',
                        'Autre distribution'                        =>'473'
                    ),
                    'expanded' => false,
                    'multiple' => false,
                    'attr' => array(
                         'class' => 'classFemme classFemmes ouAcheteMaquillage'
                    ),
                    'placeholder'=> "Où achetez-vous généralement vos maquillages du teint ?",
                    'label'=>'Où achetez-vous généralement votre maquillage du teint ? *',
                    'required'=> false
                ])

            ->add('maquillageYeux',
                ChoiceType::class, [
                    'choices'=> array(
                        'Oui'   =>'1',
                        'Non'   =>'3'
                    ),
                    'placeholder'=> "Vous maquillez-vous les yeux ?",
                    'required'=> false,
                    'label'=>'Vous maquillez-vous les yeux ? *',
                    'attr'=> array(
                        'class'=>'maquillageYeux',
                    )
                ])

            ->add('maquillageLevre',
                ChoiceType::class, [
                    'choices'=> array(
                        'Oui'   =>'1',
                        'Non'   =>'3'
                    ),
                    'placeholder'=> 'Vous maquillez-vous les lèvres ?',
                    'required'=> false,
                    'label'=>'Vous maquillez-vous les lèvres ? *',
                    'attr'=> array(
                        'class'=>'classFemme classFemmes maquillageLevre',
                    )
                ])

            ->add('dermatologieEsthtiqueAcideH',
                ChoiceType::class, array(
                    'label' => 'Acide Hyaluronique',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=> array(
                        'class'=>'dermatologie_acide'
                    )

                )


            /*
                                                             array(
                                                             'Acide Hyaluronique'=>'Acide Hyaluronique',
                                                             'Botox'=>'Botox',
                                                             'Laser'=>'Laser',
                                                             'Peeling'=>'Peeling',
                                                             'Mésothérapie'=>'Mésothérapie',
                                                             'Autre'=>'Autre',
                                                             'J\'ai eu aucun recours' =>'J\'ai eu aucun recours',
                                                           ),
            */
            )




            ->add('dermatologieEsthtiqueBotox',
                ChoiceType::class, array(
                    'label' => 'Botox',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=> array(
                        'class'=>'dermatologie_acide'
                    )

                ))

            ->add('dermatologieEsthtiqueLaser',
                ChoiceType::class, array(
                    'label' => 'Laser',
                    'choices' => array(
                        'Oui'=>'1',
                        'Non'=>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=> array(
                        'class'=>'dermatologie_acide'
                    )
                ))

            ->add('dermatologieEsthtiquePeeling',
                ChoiceType::class, array(
                    'label' => 'Peeling',
                    'choices' => array(
                        'Oui'=>'1',
                        'Non'=>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=> array(
                        'class'=>'dermatologie_acide'
                    )

                ))


            ->add('dermatologieEsthtiqueMesotherapie',
                ChoiceType::class, array(
                    'label' => 'Mésothérapie',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=> array(
                        'class'=>'dermatologie_acide'
                    )

                ))


            ->add('dermatologieEsthtiqueAutre',
                ChoiceType::class, array(
                    'label' => 'Autre',
                    'choices' => array(
                        'Oui'  => '1',
                        'Non'  => '3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=> array(
                        'class'=>'dermatologie_acide'
                    )

                ))

            ->add(
                'frequenceRasage',
                ChoiceType::class, [
                'choices'=> array(
                    'Tous les jours'            =>'245',
                    'Plus occasionnellement'    =>'246',
                    'Je porte la barbe'         =>'247',
                    'Je suis imberbe'           =>'474',
                    'Je ne me rase pas'         =>'506'
                ),
                'placeholder'=> "Votre fréquence de rasage ? ",
                'label'=>'Votre fréquence de rasage ? *',
                'required'=> false,
                'attr'=> array(
                    'class'=>'frequenceRasage classHomme classHommes'
                )
            ])
            ->add('longueBarbe',
                ChoiceType::class, [
                    'choices'=> array(
                        'Barbe de 3 jours'      =>'440',
                        'Barbe courte (+1 cm)'  =>'441',
                        'Barbe longue (+2 cm)'  =>'442',
                    ),
                    'placeholder'=> 'De quelle longueur est votre barbe ? ',
                    'label'=>'De quelle longueur est votre barbe ? *',
                    'required'=> false,
                    'attr'=> array(
                        'class'=>'classHommes'
                    )
                ])

            ->add('typeRasageRElec', ChoiceType::class, array(
                    'label' => 'Rasoir électrique ?',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=> array(
                        'class'=>'classHomme typeRasage'
                    )

                )

            )
            /*
                        ->add('typeRasageRElec',
                            ChoiceType::class,[
                                'choices' => InscriptionController::getChoicesTypeRasageRElec(),

                                /*
                                  'choices'=> array(
                                      'Oui'=> array(
                                          'Rasoir électrique'=>'Rasoir électrique',
                                          'Rasoir mécanique jetable'=>'Rasoir mécanique jetable',
                                          'Rasoir mécanique rechargeable'=>'Rasoir mécanique rechargeable',
                                          'Tondeuse à barbe'=>'Tondeuse à barbe'
                                        ),
                                      'Non'=>'Non'
                                    ),
                                */
            /*
                                'placeholder'=> "Votre type de rasage? *",
                                'required'=> false,
                                'label'=>'Rasez-vous avec un rasoir? *',
                                'mapped' => true,
                                'expanded' => true,
                                'multiple' => true,
                                'attr'=> array(
                                    'class'=>'classHomme typeRasage'
                                )]
                        )
            */
            ->add('typeRasageMeca', ChoiceType::class, array(
                    'label' => 'Rasoir mécanique jetable ?',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'attr'=> array(
                        'class'=>'classHomme typeRasage'
                    )

                )

            )

            ->add('typeRasageMecaR',ChoiceType::class, array(
                    'label' => 'Rasoir mécanique rechargeable ?',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'attr'=> array(
                        'class'=>'classHomme typeRasage'
                    )

                )
            )

            ->add('typeRasageTondeuse',
                ChoiceType::class, array(
                    'label' => 'Tondeuse à barbe ?',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'attr'=> array(
                        'class'=>'classHomme typeRasage'
                    )

                )
            )


            //Homme
            ->add('problemePeauPoileInc',
                ChoiceType::class, array(
                    'label' => 'Poils incarnés ?',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'attr'=> array(
                        'class'=>'classHomme'
                    )

                )

            )



            ->add('problemePeauSensible',
                ChoiceType::class, array(
                    'label' => 'Sensible au feu du rasoir',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=> array(
                        'class'=>'classHomme'
                    )

                )
            )

            ->add('problemePeauBarbe',
                ChoiceType::class, array(
                    'label' => 'Barbe dure ?',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=> array(
                        'class'=>'classHomme'
                    )

                )
            )
            ->add('calvitie',
                ChoiceType::class,[
                    'choices'=> array(
                        'Oui, naissante'    =>'769',
                        'Oui, installée'    =>'549',
                        'Oui, chauve'       =>'364',
                        'Non'               =>'549'
                    ),
                    'placeholder'=>' Avez-vous une calvitie ? ',
                    'label' => 'Avez-vous une calvitie ? *',
                    'required'=> false,
                    'attr'=> array(
                        'class'=>'classHomme classHommes calvitie',

                    )
                ]
            )
            ->add('caracteristiqueCorps',
                ChoiceType::class,[
                    'choices'=> array(
                        'Très sèche : Très rêche au toucher, inconfortable, tiraille, desquame intensément, fissurée, présence de gerçures, dartres. Souvent confondue avec une peau déshydratée, elle a besoin d\'une hydratation importante. Elle est soulagée après l\'application d\'un produit adapté.' =>'93',
                        'Sèche : Rêche au toucher, démange, tiraille après la toilette, desquame. Elle est sujette aux rougeurs.' =>'94',
                        'Normale-sèche : Peau normale, confortable, lisse, ne tiraille pas mais présente des zones à tendance sèche et des éventuelles zones d\'inconfort.' =>'95',
                        'Normale : Peau normale, lisse, confortable, non brillante, ne tiraille pas et présente un grain de peau régulier.' =>'96',
                        'Normale-grasse : Peau normale, confortable, lisse, ne tiraille pas mais présente des zones à tendance grasse.' =>'97',
                        'Grasse : Peau épaisse et brillante.' =>'98',
                        'Mixte : Peau normale ou sèche ou grasse sur certaines zones présentant des brillances et des zones sèches inconfortables et légèrement déshydratées.'=>'99'
                    ),
                    'placeholder'=>'La peau de votre corps est : ',
                    'label'=>'La peau de votre corps est : *',
                    'required'=> true,
                ]
            )


            ->add('autreCaracteristiqueCorpsBoutton',
                ChoiceType::class, array(
                    'label' => 'Boutons: ?',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=> array(
                        'class'=>'autreCaracteristiqueCorps'
                    )

                )
            )


            ->add('autreCaracteristiqueCorpsJambeL',
                ChoiceType::class, array(
                    'label' => 'Jambes lourdes: ?',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non'=>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=> array(
                        'class'=>'autreCaracteristiqueCorps'
                    )

                )
            )
            ->add('autreCaracteristiqueCorpsJambS',
                ChoiceType::class, array(
                    'label' => 'Jambes sèches: ?',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=> array(
                        'class'=>'autreCaracteristiqueCorps'
                    )

                )
            )
            ->add('autreCaracteristiqueCorpsOdeur',
                ChoiceType::class, array(
                    'label' => 'Odeur corporelle / transpiration: ?',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=> array(
                        'class'=>'autreCaracteristiqueCorps'
                    )

                )
            )


            ->add('autreCaracteristiqueCorpsRel',
                ChoiceType::class, array(
                    'label' => 'Relâchement cutané',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=> array(
                        'class'=>'autreCaracteristiqueCorps'
                    )

                )
            )
            ->add('autreCaracteristiqueCorpsTache',
                ChoiceType::class, array(
                    'label' => 'Taches pigmentaires corps',
                    'choices' => array(
                        'Oui'=>'1',
                        'Non'=>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=> array(
                        'class'=>'autreCaracteristiqueCorps'
                    )

                )
            )
            ->add('autreCaracteristiqueCorpsVar', ChoiceType::class, array(
                    'label' => 'Varices',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=> array(
                        'class'=>'autreCaracteristiqueCorps'
                    )

                )
            )

            ->add('autreCaracteristiqueCorpsVer',
                ChoiceType::class, array(
                    'label' => 'Vergetures',
                    'choices' => array(
                        'Oui'=>'1',
                        'Non'=>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=> array(
                        'class'=>'autreCaracteristiqueCorps'
                    )

                )
            )


            ->add('deoBille',
                ChoiceType::class, array(
                    'label' => 'Déodorant bille, Roll-on',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non'=>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=>array(
                        'class'=>'deo'
                    )

                )
            )
            ->add('deoCreme',
                ChoiceType::class, array(
                    'label' => 'Déodorant crème ou tube',
                    'choices' => array('Oui' =>'1', 'Non'=>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => true,
                    'attr'=>array(
                        'class'=>'deo'
                    )

                )
            )

            ->add('deoLingette',
                ChoiceType::class, array(
                    'label' => 'Déodorant Pierre d\'alun',
                    'choices' => array('Oui' =>'1', 'Non'=>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=>array(
                        'class'=>'deo'
                    )

                )
            )

            ->add('deoSpray',
                ChoiceType::class, array(
                    'label' => 'Déodorant spray',
                    'choices' => array('Oui' =>'1', 'Non'=>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=>array(
                        'class'=>'deo'
                    )

                )
            )

            ->add('deoStick',
                ChoiceType::class, array(
                    'label' => 'Déodorant stick',
                    'choices' => array('Oui' =>'1', 'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=>array(
                        'class'=>'deo'
                    )

                )
            )

            ->add('anti_t_bille',
                ChoiceType::class, array(
                    'label' => 'Anti-transpirant bille, Roll On',
                    'choices' => array('Oui' =>'1', 'Non'=>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=>array(
                        'class'=>'deo'
                    )

                )
            )

            ->add('anti_t_creme',
                ChoiceType::class, array(
                    'label' => 'Anti-transpirant crème ou tube',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'attr'=>array(
                        'class'=>'false'
                    )

                )
            )

            ->add('anti_t_spray',
                ChoiceType::class, array(
                    'label' => 'Anti-transpirant spray',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=>array(
                        'class'=>'deo'
                    )

                )
            )

            ->add('anti_t_stick',
                ChoiceType::class, array(
                    'label' => 'Déodorant stick',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=>array(
                        'class'=>'deo'
                    )

                )
            )


            ->add('peauVisage',
                ChoiceType::class,[
                    'choices'=> array(
                        'Très sèche : Très rêche au toucher, inconfortable, tiraille, desquame intensément, fissurée, présence de gerçures, dartres. Souvent confondue avec une peau déshydratée, elle a besoin d\'une hydratation importante. Elle est soulagée après l\'application d\'un produit adapté.' =>'32',
                        'Sèche : Rêche au toucher, démange, tiraille après la toilette, desquame. Elle manque de sébum avec peu ou pas de comédons, sujette aux rougeurs. Teint clair et terne, pores serrés.'  =>'33',
                        'Normale-sèche : Peau normale, confortable, lisse, ne tiraille pas mais présente des zones à tendance sèche et des éventuelles zones d\'inconfort (par exemple les joues).'             =>'34',
                        'Normale : Peau normale, lisse, confortable, ne brille pas, ne tiraille pas. Le teint est clair et lumineux, les pores sont serrés. L\'aspect de la peau est mat et le grain de peau est régulier.' =>'35',
                        'Normale-grasse : Peau normale, confortable, lisse, ne tiraille pas mais présente des zones à tendance grasse (exemple les joues). Présence de léger excès de sébum à certaines zones ainsi que des points noirs, pores dilatés...' =>'36',
                        'Grasse : Peau épaisse et brillante (due à l\'excès de sébum). Présence de pores très dilatés, de comédons (points noirs) et de nombreux boutons. Le teint est terne et brouillé.'      =>'37',
                        'Mixte : Peau normale ou sèche sur les joues et grasse sur la zone T (front, nez, menton). Présence de brillance, de points noirs, de pores visibles et dilatés, et de zones sèches inconfortables et légèrement déshydratées. Le grain de peau est irrégulier.' =>'38'

                    ),
                    'placeholder'=>'La peau de votre visage est : ',
                    'label'=>'La peau de votre visage est : *'
                ]
            )


            ->add('peauVisageSinsible',
                ChoiceType::class, array(
                    'label' => false,
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'
                    ),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => true,
                    'attr'=>array(
                        'class'=>'deo'
                    )

                )
            )

            ->add('autreCaracteristiqueCorpsPeau',
                ChoiceType::class, array(
                    'label' => false,
                    'choices' => array('Oui' =>'1', 'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => true,
                    'attr'=> array(
                        'class'=>'autreCaracteristiqueCorps'
                    )

                )
            )

            ->add('visageIntolerante',
                ChoiceType::class, array(
                    'label' => false,
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => true,
                    'attr'=>array(
                        'class'=>'deo'
                    )

                )
            )

            ->add('peauVisageReactive',
                ChoiceType::class, array(
                    'label' => false,
                    'choices' => array(
                        'Oui' => '1',
                        'Non' => '3'
                    ),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => true,
                    'attr'=>array(
                        'class'=>'deo'
                    )

                )
            )

            /*

            ->add('peauVisageReactive',
                ChoiceType::class, array(
                    'label' => false,
                    'choices' => array(1 => 'Oui', 3 => 'Non'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => true,
                    'attr'=>array(
                        'class'=>'deo'
                    )

                )
            )
            */
            ->add('autreCaracteristiqueVRides',
                ChoiceType::class, array(
                    'label' => 'Rides',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=>array(
                        'class'=>'autreCaracteristique'
                    )

                )
            )

            ->add('autreCaracteristiqueVRidules',
                ChoiceType::class, array(
                    'label' => 'Ridules',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=>array(
                        'class'=>'autreCaracteristique'
                    )

                )
            )

            ->add('autreCaracteristiqueVPerte',
                ChoiceType::class, array(
                    'label' => 'Perte de fermeté ',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=>array(
                        'class'=>'autreCaracteristique'
                    )

                )
            )

            ->add('autreCaracteristiqueVTeint',
                ChoiceType::class, array(
                    'label' => 'Teint terne ',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=>array(
                        'class'=>'autreCaracteristique'
                    )

                )
            )

            ->add('autreCaracteristiqueVRougeurs',
                ChoiceType::class, array(
                    'label' => 'Rougeurs',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=>array(
                        'class'=>'autreCaracteristique'
                    )

                )
            )



            ->add('autreCaracteristiqueVTaches',
                ChoiceType::class, array(
                    'label' => 'Taches pigmentaires ',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=>array(
                        'class'=>'autreCaracteristique'
                    )

                )
            )

            ->add('autreCaracteristiqueVAcne',
                ChoiceType::class, array(
                    'label' => 'Acné',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=>array(
                        'class'=>'autreCaracteristique'
                    )

                )
            )

            ->add('autreCaracteristiqueVPoints',
                ChoiceType::class, array(
                    'label' => 'Points noirs ',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=>array(
                        'class'=>'autreCaracteristique'
                    )

                )
            )

            ->add('autreCaracteristiqueVCicatrices',
                ChoiceType::class, array(
                    'label' => 'Cicatrices',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=>array(
                        'class'=>'autreCaracteristique'
                    )

                )
            )

            ->add('autreCaracteristiqueVEczema',
                ChoiceType::class, array(
                    'label' => 'Eczéma',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=>array(
                        'class'=>'autreCaracteristique'
                    )

                )
            )



            ->add('autreCaracteristiqueVPeauF',
                ChoiceType::class, array(
                    'label' => 'Peau fatiguée',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=>array(
                        'class'=>'autreCaracteristique'
                    )

                )
            )

            ->add('autreCaracteristiqueVPeauAbi',
                ChoiceType::class, array(
                    'label' => 'Peau abîmée',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=>array(
                        'class'=>'autreCaracteristique'
                    )

                )
            )



            ->add('autreCaracteristiqueVImperfections',
                ChoiceType::class, array(
                    'label' => 'Imperfections (boutons) ',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=>array(
                        'class'=>'autreCaracteristique'
                    )

                )
            )

            ->add('autreCaracteristiqueVPores',
                ChoiceType::class, array(
                    'label' => 'Pores dilatés ',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=>array(
                        'class'=>'autreCaracteristique'
                    )

                )
            )

            ->add('autreCaracteristiqueVPeauF',
                ChoiceType::class, array(
                    'label' => 'Peau fatiguée ',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=>array(
                        'class'=>'autreCaracteristique'
                    )

                )
            )

            ->add('autreCaracteristiqueVDes',
                ChoiceType::class, array(
                    'label' => 'Peau déshydratée',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=>array(
                        'class'=>'autreCaracteristique'
                    )

                )
            )

            /* ChoiceType::class,[
                 'choices' => InscriptionController::getChoicesAutreCaracteristiquevisage(),
                 /*
               'choices'=> array(
                   'Oui'=>array(
                       'Rides'=>'Rides',
                       'Ridules'=>'Ridules',
                       'Perte de fermeté'=>'Perte de fermeté',
                       'Teint terne'=>'Teint terne',
                       'Rougeurs'=>'Rougeurs',
                       'Couperose'=>'Couperose',
                       'Taches pigmentaires'=>'Taches pigmentaires',
                       'Acné'=>'Acné',
                       'Points noirs'=>'Points noirs',
                       'Cicatrices'=>'Cicatrices',
                       'Eczéma'=>'Eczéma',
                       'Peau abîmée'=>'Peau abîmée',
                       'Pores dilatés'=>'Pores dilatés',
                       'Peau fatiguée'=>'Peau fatiguée',
                       'Taches de rousseur'=>'Taches de rousseur',
                       'Imperfections (boutons)'=>'Imperfections (boutons)',
                       'Peau déshydratée'=>'Peau déshydratée'
                     ),
                   'Non'=>'Non'
                 ),
                 * /
                 'mapped' => true,
                 'expanded' => true,
                 'multiple' => true,
                 'placeholder'=>'Autres caractéristiques du visage ? ',
                 'label'=>'Autres caractéristiques du visage : *',
                 'required'=>false

             ]
         )
*/


            ->add('gelNottyant',
                ChoiceType::class, array(
                    'label' => 'Gel nettoyant',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=> array(
                        'class'=>'classFemme',
                    )

                )
            )


            ->add('gelNottyantSpe',
                ChoiceType::class, array(
                    'label' => 'Gel nettoyant spécifique',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=> array(
                        'class'=>'classFemme',
                    )

                )

            )

            ->add('lotionNettoyant',
                ChoiceType::class, array(
                    'label' => 'Lotion nettoyante',
                    'choices' => array(
                        'Oui' => '1',
                        'Non' => '3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=> array(
                        'class'=>'classFemme',
                    )

                )

            )

            ->add('gelExfoliant',
                ChoiceType::class, array(
                    'label' => 'Gel exfoliant doux nettoyant',
                    'choices' => array(
                        'Oui' => '1',
                        'Non' => '3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=> array(
                        'class'=>'classFemme',
                    )

                )

            )

            ->add('savonDerma',
                ChoiceType::class, array(
                    'label' => 'Savon, pain dermatologique',
                    'choices' => array(
                        'Oui' => '1',
                        'Non' => '3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=> array(
                        'class'=>'classFemme',
                    )

                )

            )

            ->add('ouacheteSoinVisage',
                ChoiceType::class,[
                    'choices'=> array(
                        'En grande, moyenne ou petite surface (Carrefour, Auchan, Lidl...)' =>'460',
                        'En pharmacie, parapharmacie'                                       =>'461',
                        'En parfumerie'                                                     =>'462',
                        'En institut'                                                       =>'463',
                        'Sur internet (haut de gamme)'                                      =>'464',
                        'Sur internet (autre achat)'                                        =>'465',
                        'Autre distribution'                                                =>'466',
                        'N\'utilise pas de soin du visage'=>'N\'utilise pas de soin du visage'

                    ),
                    'required'=> false,
                    'label'=>'Où achetez-vous généralement votre (vos) soin(s) du visage ? ',
                    'placeholder'=>'Où achetez-vous généralement votre (vos) soin(s) du visage ? ',
                    'attr'=> array(
                        'class'=>'ouacheteSoinVisage',
                    )
                ]
            )

            ->add('caracteristiqueYeuxS',
                ChoiceType::class, array(
                    'label' => 'Yeux sensibles ?',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=> array(
                        'class'=>'caracteristiqueYeux',
                    )

                )
            )

            ->add('caracteristiqueYeuxL',
                ChoiceType::class, array(
                    'label' => 'Lentilles ?',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=> array(
                        'class'=>'caracteristiqueYeux',
                    )

                )
            )

            ->add('caracteristiqueYeuxC',
                ChoiceType::class, array(
                    'label' => 'Cernes ?',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=> array(
                        'class'=>'caracteristiqueYeux',
                    )

                )
            )

            ->add('caracteristiqueYeuxPoche',
                ChoiceType::class, array(
                    'label' => 'Poches ?',
                    'choices' => array(
                        'Oui'    => '1',
                        'Non'    => '3'
                    ),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=> array(
                        'class'=>'caracteristiqueYeux',
                    )

                )
            )

            ->add('caracteristiqueYeuxPopiere',
                ChoiceType::class, array(
                    'label' => 'Paupières relâchées ?',
                    'choices' => array(
                        'Oui' =>'1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=> array(
                        'class'=>'caracteristiqueYeux',
                    )

                )
            )

            ->add('caracteristiqueYeuxGonfles',
                ChoiceType::class, array(
                    'label' => 'Yeux gonflés ?',
                    'choices' => array(
                        'Oui' => '1',
                        'Non' =>'3'),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                    'attr'=> array(
                        'class'=>'caracteristiqueYeux',
                    )

                )
            )



            ->add('typeCheveux',
                ChoiceType::class,[
                    'choices'=> array(
                        'Très secs'             =>'257',
                        'Secs'                  =>'145',
                        'Normaux-secs'          =>'144',
                        'Normaux'               =>'143',
                        'Normaux-gras'          =>'142',
                        'Gras'                  =>'141',
                        'Mixtes (racines grasses, pointes sèches)' =>'146',

                    ),
                    'placeholder'=>'Type de cheveux : ',
                    'label'=>'Type de cheveux : *',
                    'required' =>true
                ]
            )
            /*
            ->add('longueurCheveux',
                ChoiceType::class,[
                    'choices'=> array(
                        '130'=>'Très courts (au dessus des oreilles)',
                        '131'=>'Courts (couvrent à peine les oreilles)',
                        '132'=>'Mi-longs (au niveau du menton)',
                        '133'=>'Longs (du menton aux épaules)',
                        '134'=>'Très longs (en dessous des épaules)'
                    ),
                    'label'=>'Longueur des cheveux : *',
                    'placeholder'=>'Longueur des cheveux  ? ',

                ]
            )
            */
            ->add('natureCheveux',
                ChoiceType::class,[
                    'choices'=> array(
                        'Bouclés'                   =>'138',
                        'Crépus'                    =>'140',
                        'Frisés'                    =>'139',
                        'Ondulés/souples'           =>'137',
                        'Raides'                    =>'135'
                    ),
                    'label'=>'La nature de vos cheveux : *',
                    'placeholder'=>'Nature des cheveux : ',
                    'required' => true
                ]
            )
            ->add('alopecie',
                ChoiceType::class,[
                    'choices'=> array(
                        'Oui'   =>'1',
                        'Non'   =>'3'
                    ),
                    'label'=>'Avez-vous un problème d\'alopécie ? *',
                    'placeholder'=>'Avez-vous un problème d\'alopécie (chute temporaire des cheveux ou des poils, partielle ou totale) ? ',
                    'attr'=> array(
                        'class'=>'alopecie'
                    )]
            )

            ///à reprendre
            ->add('epillationVisage',
                ChoiceType::class,[
                    'choices'=> array(
                        'Pas d’épilation du visage'         =>'792',
                        'Epilation permanente / laser'      =>'552',
                        'Epilateur'                         =>'335',
                        'Décolorant duvet'                  =>'334',
                        'Institut'                          =>'337',
                        'Tondeuse'                          =>'566',
                        'Cire au sucre (en pot)'            =>'329',
                        'Cire bandes froides'               =>'331',
                        'Cire résine (en pot)'              =>'332',
                        'Crème dépilatoire'                 =>'333',
                        'Gel dépilatoire'                   =>'336',
                        'Mousse dépilatoire'                =>'338',
                        'Produit de rasage'                 =>'339',
                        'Rasoir'                            =>'340',
                        'Roll-On'                           =>'341',
                        'Pince \à piller'                   =>'780',
                        'Fil d\'épilation'                  =>'781'
                    ),
                    'placeholder'=>'Mode d’épilation principal au niveau du visage : ? ',
                    'label'=>false,
                    'required'=> false,
                    'attr'=> array(
                        'class'=>'classFemme classFemmes',
                    )
                ]

            )

            ->add('modeEpilation',
                ChoiceType::class,[
                    'choices'=> array(
                        'Pas d’épilation des jambes'        =>'791',
                        'Epilation permanente / laser'      =>'551',
                        'Pince à épiler'                    =>'659',
                        'Institut'                          =>'298',
                        'Epilateur'                         =>'296',
                        'Tondeuse'                          =>'565',
                        'Fil d\'épilation'                  =>'656',
                        'Cire au sucre (en pot)'            =>'290',
                        'Cire bandes chaudes'               =>'291',
                        'Cire bandes froides'               =>'292',
                        'Cire résine (en pot)'              =>'293',
                        'Crème dépilatoire'                 =>'294',
                        'Gel dépilatoire'                   =>'297',
                        'Mousse dépilatoire'                =>'299',
                        'Produit de rasage'                 =>'300',
                        'Rasoir'                            =>'301',
                        'Roll-on de cire au sucre chaude'   =>'711',
                        'Roll-on de cire froide'            =>'712',
                        'Roll-on de cire résine'            =>'710'
                    ),
                    'placeholder'=>'Mode d’épilation principal au niveau des jambes : ? ',
                    'label'=>false,
                    'required'=> false,
                    'attr'=> array(
                        'class'=>'classFemme classFemmes modeEpillation',
                    )]
            )

            ->add('epillationMaillot',
                ChoiceType::class,[
                    'choices'=> array(
                        'Pas d’épilation maillot / aisselles'   =>'779',
                        'Epilation permanente / laser'          =>'550',
                        'Pince à épiler'                        =>'874',
                        'Institut'                              =>'250',
                        'Epilateur'                             =>'249',
                        'Tondeuse'                              =>'564',
                        'Cire au sucre (en pot)'                =>'245',
                        'Cire bandes froides'                   =>'279',
                        'Cire bandes chaudes'                   =>'278',
                        'Cire résine (en pot)'                  =>'244',
                        'Crème dépilatoire'                     =>'246',
                        'Gel dépilatoire'                       =>'281',
                        'Mousse dépilatoire'                    =>'247',
                        'Produit de rasage'                     =>'282',
                        'Rasoir'                                =>'248',
                        'Roll-on de cire au sucre chaude'       =>'776',
                        'Roll-on de cire froide'                =>'777',
                        'Roll-on de cire résine'                =>'778'
                    ),
                    'placeholder'=>'Mode d’épilation principal au niveau du maillot / des aisselles : ? ',
                    'label'=>false,
                    'required'=> true,
                    'attr'=>array(
                        'class'=>'classFemme classFemmes',

                    )]

            )

        ->add('etreRappler',
                ChoiceType::class,[
                    'choices'=> array(
                        'Oui'   =>'1',
                        'Non'   =>'3'
                    ),
                    'required' => true,
                    'placeholder'=>'Être contacté(e) par Skype ?',
                    'label'=>false
                ]
            )
            ->add('deplacementRegion',
                ChoiceType::class,[
                    'choices'=> array(
                        'Paris 16ème'                               =>'869',
                        'Paris 13ème'                               =>'787',
                        'Pantin'                                    =>'554',
                        'Neuilly'                                   =>'774',
                        'Chavenay / Saint-Germain-en-Laye'          =>'785',
                        'Pas de déplacement possible, trop loin'     =>'786',
                        'Pontoise'                                  =>'870'
                    ),
                    'label'=>false,
                    'required' => false,
                    'mapped' => true,
                    'expanded' => true,
                    'multiple' => true,
                    'attr'=> array(
                        'class'=>'deplacement'
                    )
                ]
            )

            ->add('checkboxUN')

            /*
            ->add('checkboxUN', CheckboxType::class, [
                'required'=> true,
                'label' => false,
                'attr'=> array(
                    'class'=>'checkboxUN'
                )
            ])*/
            ->add('checkboxDeux'/*, CheckboxType::class, [
                'label'   =>false,
                'required'=> true,
                'attr'=> array(
                    'class'=>'checkboxDeux'
                )
            ]*/)
            ->add('checkboxTrois'/*, CheckboxType::class, [
                'label'   =>false,
                'required'=> true,
                'attr'=> array(
                    'class'=>'checkboxTrois'
                )
            ]*/)
            ->add('checkboxQuatre'/*, CheckboxType::class, [
                'label'   =>false,
                'required'=> true,
                'attr'=> array(
                    'class'=>'checkboxQuatre'
                )
            ]*/)
            ->add('checkboxCinq'/*, CheckboxType::class, [
                'label'   =>false,
                'required'=> true,
                'attr'=> array(
                    'class'=>'checkboxCinq'
                )
            ]*/)

            /*
            ->add('checkboxSix', CheckboxType::class, [
                'label'   =>false,
                'required'=> true,
                'attr'=> array(
                    'class'=>'checkboxSix'
                )
            ])

            */

            ->add('checkboxSept', CheckboxType::class, [
                'label'   =>false,
                'required'=> false,
                'attr'=> array(
                    'class'=>'checkboxSept'
                )
            ])

            ->add('checkboxHuit', CheckboxType::class, [
                'label'   =>false,
                'required'=> false,
                'attr'=> array(
                    'class'=>'checkboxHuit'
                )
            ])
            ->add('checkboxNeuf', CheckboxType::class, [
                'label'   =>false,
                'required'=> false,
                'attr'=> array(
                    'class'=>'checkboxNeuf'
                )
            ])


        ->add('save', SubmitType::class, array(
            'attr' => array('class' => 'save'),
        ));

    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'=> 'App\Entity\Inscription'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return'App_inscription';
    }


}
