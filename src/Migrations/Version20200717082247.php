<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200717082247 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE survey (id INT AUTO_INCREMENT NOT NULL, category_id INT NOT NULL, paneliste_group_id INT DEFAULT NULL, id_survey INT NOT NULL, name VARCHAR(191) NOT NULL, type SMALLINT NOT NULL, external_type VARCHAR(255) DEFAULT NULL, status SMALLINT NOT NULL, visible TINYINT(1) NOT NULL, description LONGTEXT DEFAULT NULL, image_name VARCHAR(255) DEFAULT NULL, updated_at DATETIME NOT NULL, UNIQUE INDEX UNIQ_AD5F9BFC8B682E11 (id_survey), INDEX IDX_AD5F9BFC12469DE2 (category_id), INDEX IDX_AD5F9BFC178BC76 (paneliste_group_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE focus_groups (id INT AUTO_INCREMENT NOT NULL, survey_id INT DEFAULT NULL, article LONGTEXT DEFAULT NULL, UNIQUE INDEX UNIQ_499FC36EB3FE509D (survey_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorylist (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(155) NOT NULL, UNIQUE INDEX UNIQ_2C614CB82B36786B (title), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category_item (id INT AUTO_INCREMENT NOT NULL, categorylist_id INT DEFAULT NULL, title VARCHAR(191) NOT NULL, position INT NOT NULL, INDEX IDX_94805F59CB753B73 (categorylist_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE focus_access (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, focus_group_id INT DEFAULT NULL, access SMALLINT NOT NULL, INDEX IDX_BF9BD14AA76ED395 (user_id), INDEX IDX_BF9BD14A777D4468 (focus_group_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE focus_accesss (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, focus_group_id INT DEFAULT NULL, access SMALLINT NOT NULL, INDEX IDX_8DB8FC54A76ED395 (user_id), INDEX IDX_8DB8FC54777D4468 (focus_group_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pdeux_ins (id INT AUTO_INCREMENT NOT NULL, id_insc_id INT NOT NULL, domaine_m VARCHAR(191) NOT NULL, UNIQUE INDEX UNIQ_EFD2A4F061C0CFC2 (id_insc_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(191) DEFAULT NULL, subject VARCHAR(191) NOT NULL, content LONGTEXT NOT NULL, id_paneliste VARCHAR(191) NOT NULL, lastname VARCHAR(191) NOT NULL, firstname VARCHAR(191) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE link_log (id INT AUTO_INCREMENT NOT NULL, link_id INT DEFAULT NULL, user_id INT DEFAULT NULL, url VARCHAR(191) NOT NULL, type SMALLINT NOT NULL, horodateur DATETIME DEFAULT NULL, INDEX IDX_C344E5FEADA40271 (link_id), INDEX IDX_C344E5FEA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE name (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE home_page (id INT AUTO_INCREMENT NOT NULL, text_welcome VARCHAR(191) DEFAULT NULL, image_name VARCHAR(255) NOT NULL, image_name_un VARCHAR(255) DEFAULT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE link (id INT AUTO_INCREMENT NOT NULL, survey_id INT DEFAULT NULL, numero_lien INT NOT NULL, name VARCHAR(191) NOT NULL, link VARCHAR(191) NOT NULL, date_un DATETIME DEFAULT NULL, token VARCHAR(191) NOT NULL, type SMALLINT NOT NULL, UNIQUE INDEX UNIQ_36AC99F15F37A13B (token), INDEX IDX_36AC99F1B3FE509D (survey_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE configuration (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(191) NOT NULL, value VARCHAR(191) DEFAULT NULL, UNIQUE INDEX UNIQ_A5E2A5D75E237E06 (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE brand (id INT AUTO_INCREMENT NOT NULL, category_habit_id INT DEFAULT NULL, name VARCHAR(155) NOT NULL, visible TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_1C52F9585E237E06 (name), INDEX IDX_1C52F95850D437C9 (category_habit_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category_habit (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(155) NOT NULL, visible TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_ACCD6E3B5E237E06 (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE insc (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, prenom VARCHAR(191) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE habit (id INT AUTO_INCREMENT NOT NULL, header_habit_id INT NOT NULL, name VARCHAR(191) NOT NULL, visible TINYINT(1) NOT NULL, INDEX IDX_44FE21725673B2C8 (header_habit_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE club_subject (id INT AUTO_INCREMENT NOT NULL, parent_id INT DEFAULT NULL, categorylist_id INT DEFAULT NULL, title VARCHAR(191) NOT NULL, INDEX IDX_F6869BF8727ACA70 (parent_id), INDEX IDX_F6869BF8CB753B73 (categorylist_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE form_trois (id INT AUTO_INCREMENT NOT NULL, id_insc_id INT DEFAULT NULL, loisir VARCHAR(191) NOT NULL, UNIQUE INDEX UNIQ_B6B901B361C0CFC2 (id_insc_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE club_article (id INT AUTO_INCREMENT NOT NULL, clubitem_id INT DEFAULT NULL, club_subject_id INT DEFAULT NULL, category_habit_id INT DEFAULT NULL, header_habit_id INT DEFAULT NULL, habit_id INT DEFAULT NULL, brand_id INT DEFAULT NULL, user_id INT DEFAULT NULL, title VARCHAR(191) NOT NULL, test_date DATE NOT NULL, location VARCHAR(191) NOT NULL, location_brand VARCHAR(191) NOT NULL, category VARCHAR(191) DEFAULT NULL, product VARCHAR(191) NOT NULL, comment LONGTEXT NOT NULL, note INT NOT NULL, visible TINYINT(1) NOT NULL, websearch TINYINT(1) NOT NULL, plane TINYINT(1) NOT NULL, waiting_status TINYINT(1) NOT NULL, product_name VARCHAR(191) DEFAULT NULL, product_brand VARCHAR(191) DEFAULT NULL, suggestion LONGTEXT DEFAULT NULL, satisfaction INT DEFAULT NULL, satisfaction_details INT DEFAULT NULL, INDEX IDX_F72ABE4CE930957 (clubitem_id), INDEX IDX_F72ABE44BF8926A (club_subject_id), INDEX IDX_F72ABE450D437C9 (category_habit_id), INDEX IDX_F72ABE45673B2C8 (header_habit_id), INDEX IDX_F72ABE4E7AEB3B2 (habit_id), INDEX IDX_F72ABE444F5D008 (brand_id), INDEX IDX_F72ABE4A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE focus_message (id INT AUTO_INCREMENT NOT NULL, focus_group_id INT DEFAULT NULL, user_id INT DEFAULT NULL, parent_id INT DEFAULT NULL, content LONGTEXT NOT NULL, visible TINYINT(1) NOT NULL, INDEX IDX_4C0BFFE6777D4468 (focus_group_id), INDEX IDX_4C0BFFE6A76ED395 (user_id), INDEX IDX_4C0BFFE6727ACA70 (parent_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(155) NOT NULL, UNIQUE INDEX UNIQ_64C19C15E237E06 (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE invitation (id INT AUTO_INCREMENT NOT NULL, mail VARCHAR(150) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, id_paneliste INT NOT NULL, title VARCHAR(191) NOT NULL, firstname VARCHAR(191) NOT NULL, lastname VARCHAR(191) NOT NULL, email VARCHAR(180) DEFAULT NULL, birthdate DATETIME DEFAULT NULL, enabled TINYINT(1) NOT NULL, phone VARCHAR(20) DEFAULT NULL, statut VARCHAR(255) NOT NULL, date_creation DATE DEFAULT NULL, password VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D64933BEBFC1 (id_paneliste), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE paneliste_groups (user_id INT NOT NULL, paneliste_group_id INT NOT NULL, INDEX IDX_264B5F87A76ED395 (user_id), INDEX IDX_264B5F87178BC76 (paneliste_group_id), PRIMARY KEY(user_id, paneliste_group_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE id_survey (user_id INT NOT NULL, survey_id INT NOT NULL, INDEX IDX_8B682E11A76ED395 (user_id), INDEX IDX_8B682E11B3FE509D (survey_id), PRIMARY KEY(user_id, survey_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_roles (user_id INT NOT NULL, roles_id INT NOT NULL, INDEX IDX_54FCD59FA76ED395 (user_id), INDEX IDX_54FCD59F38C751C4 (roles_id), PRIMARY KEY(user_id, roles_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE static_page (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(191) NOT NULL, content LONGTEXT DEFAULT NULL, alias VARCHAR(191) NOT NULL, UNIQUE INDEX UNIQ_8FA4EF95E16C6B94 (alias), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE paneliste_group (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(191) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE roles (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(191) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE inscription (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(100) DEFAULT NULL, prenom VARCHAR(100) DEFAULT NULL, date_de_naissance DATETIME DEFAULT NULL, mail VARCHAR(150) DEFAULT NULL, mobile_smartPhone VARCHAR(150) DEFAULT NULL, tablette VARCHAR(150) DEFAULT NULL, Tel_portable VARCHAR(255) DEFAULT NULL, Tel_Bureau VARCHAR(255) DEFAULT NULL, Tel_dom VARCHAR(255) DEFAULT NULL, connecterSurReseauxS VARCHAR(150) DEFAULT NULL, ad_rue_avenue VARCHAR(150) DEFAULT NULL, ad_appt_etage_couloir VARCHAR(100) DEFAULT NULL, ad_batiment VARCHAR(50) DEFAULT NULL, ad_lieu_dit VARCHAR(155) DEFAULT NULL, ville_adresse VARCHAR(155) DEFAULT NULL, CP VARCHAR(5) DEFAULT NULL, profession VARCHAR(155) DEFAULT NULL, domaine_activite VARCHAR(155) DEFAULT NULL, allergie VARCHAR(2) DEFAULT NULL, desc_allergie VARCHAR(191) DEFAULT NULL, connaissance_condition_test VARCHAR(155) DEFAULT NULL, politique_de_confidentialité VARCHAR(191) DEFAULT NULL, autorise_syres_traiter_donnees VARCHAR(10) DEFAULT NULL, autorise_syres_traiter_donnees_p_sensibles VARCHAR(10) DEFAULT NULL, dedommagement_deplacement VARCHAR(10) DEFAULT NULL, conscient_que_produits_confidentiels VARCHAR(10) DEFAULT NULL, contacter_etude_consommateur VARCHAR(155) DEFAULT NULL, contacter_reunion_consommateur VARCHAR(155) DEFAULT NULL, contacter_interview VARCHAR(155) DEFAULT NULL, societe_inscrit VARCHAR(155) DEFAULT NULL, fumez_vous VARCHAR(155) DEFAULT NULL, vapotez_vous VARCHAR(155) DEFAULT NULL, zone_pollue VARCHAR(155) DEFAULT NULL, sex_premier_enfant VARCHAR(100) DEFAULT NULL, age_premier_enfant DATETIME DEFAULT NULL, sex_deuxieme_enfant VARCHAR(100) DEFAULT NULL, age_deuxieme_enfant DATETIME DEFAULT NULL, enfantsMineur VARCHAR(155) DEFAULT NULL, sex_troisieme_enfant VARCHAR(155) DEFAULT NULL, age_troisieme_enfant DATETIME DEFAULT NULL, sex_quatrieme_enfant VARCHAR(155) DEFAULT NULL, age_quatrieme_enfant DATETIME DEFAULT NULL, langueParle VARCHAR(155) DEFAULT NULL, titre VARCHAR(55) DEFAULT NULL, utilisez_produit_bio VARCHAR(155) DEFAULT NULL, carnation VARCHAR(191) DEFAULT NULL, couleur_peau VARCHAR(191) DEFAULT NULL, couleur_cheveux VARCHAR(191) DEFAULT NULL, corps_soleil VARCHAR(191) DEFAULT NULL, type_s_antichute VARCHAR(1) DEFAULT NULL, type_s_antipelliculaire VARCHAR(1) DEFAULT NULL, type_s_huile VARCHAR(1) DEFAULT NULL, type_s_cheveux_colore VARCHAR(1) DEFAULT NULL, type_s_cheveux_gras VARCHAR(1) DEFAULT NULL, type_s_shampooing_sec VARCHAR(1) DEFAULT NULL, autres_p_capillaires_apre_shamp VARCHAR(191) DEFAULT NULL, autres_produits_capillaires_baume VARCHAR(191) DEFAULT NULL, autres_produits_capillaires_creme VARCHAR(191) DEFAULT NULL, autres_produits_capillaires_masque VARCHAR(191) DEFAULT NULL, autres_produits_capillaires_lotion VARCHAR(191) DEFAULT NULL, autres_produits_capillaires_mousse VARCHAR(191) DEFAULT NULL, autres_produits_capillaires_capsule VARCHAR(191) DEFAULT NULL, maquillage_teint VARCHAR(191) DEFAULT NULL, ou_achete_maquillage VARCHAR(191) DEFAULT NULL, maquillage_levre VARCHAR(191) DEFAULT NULL, maquillage_yeux VARCHAR(191) DEFAULT NULL, dermatologie_esthetique_Acide_hyaluronique VARCHAR(191) DEFAULT NULL, dermatologie_esthetique_Botox VARCHAR(191) DEFAULT NULL, dermatologie_esthetique_Laser VARCHAR(191) DEFAULT NULL, dermatologie_esthetique_Peeling VARCHAR(191) DEFAULT NULL, dermatologie_esthetique_Mesotherapie VARCHAR(191) DEFAULT NULL, dermatologie_esthetique_Autre VARCHAR(191) DEFAULT NULL, frequence_rasage VARCHAR(191) DEFAULT NULL, longue_barbe VARCHAR(191) DEFAULT NULL, type_rasage_electrique VARCHAR(191) DEFAULT NULL, type_rasage_rasoir_mecanique_jetable VARCHAR(191) DEFAULT NULL, type_rasage_rasoir_mecanique_rechargeable VARCHAR(191) DEFAULT NULL, type_rasage_rasoir_tondeuse VARCHAR(191) DEFAULT NULL, calvitie VARCHAR(191) DEFAULT NULL, type_peau_corps VARCHAR(191) DEFAULT NULL, autre_c_corps_sensible VARCHAR(191) DEFAULT NULL, autre_c_corps_bouton VARCHAR(191) DEFAULT NULL, autre_c_corps_jambe_l VARCHAR(191) DEFAULT NULL, autre_c_corps_jamb_s VARCHAR(191) DEFAULT NULL, autre_caracteristique_corps_odeur VARCHAR(191) DEFAULT NULL, autre_c_corps_rel VARCHAR(191) DEFAULT NULL, autre_c_corps_tache VARCHAR(191) DEFAULT NULL, autre_c_corps_varice VARCHAR(191) DEFAULT NULL, autre_c_corps_vergeture VARCHAR(191) DEFAULT NULL, deo_bille VARCHAR(1) DEFAULT NULL, deo_creme VARCHAR(1) DEFAULT NULL, deo_pierre_d_alun VARCHAR(1) DEFAULT NULL, deo_spray VARCHAR(1) DEFAULT NULL, deo_stick VARCHAR(1) DEFAULT NULL, anti_t_bille_roll_on VARCHAR(1) DEFAULT NULL, anti_t_bille_creme_tube VARCHAR(1) DEFAULT NULL, anti_t_spray VARCHAR(1) DEFAULT NULL, anti_t_stick VARCHAR(1) DEFAULT NULL, type_peau_visage VARCHAR(191) DEFAULT NULL, peau_visage_sensible VARCHAR(191) DEFAULT NULL, visage_intolerante VARCHAR(191) DEFAULT NULL, peau_visage_reactive VARCHAR(191) DEFAULT NULL, autre_caracteristique_v_rides VARCHAR(1) DEFAULT NULL, autre_caracteristique_v_ridules VARCHAR(1) DEFAULT NULL, autre_caracteristique_v_perte VARCHAR(1) DEFAULT NULL, autre_caracteristique_v_teint VARCHAR(1) DEFAULT NULL, autre_caracteristique_v_rougeurs VARCHAR(1) DEFAULT NULL, autre_caracteristique_v_taches_pig VARCHAR(1) DEFAULT NULL, autre_caracteristique_v_acne VARCHAR(1) DEFAULT NULL, autre_caracteristique_v_points VARCHAR(1) DEFAULT NULL, autre_caracteristique_v_cicatrices VARCHAR(1) DEFAULT NULL, autre_caracteristique_v_eczema VARCHAR(1) DEFAULT NULL, autre_caracteristique_v_peau VARCHAR(1) DEFAULT NULL, autre_caracteristique_v_pores VARCHAR(1) DEFAULT NULL, autre_caracteristique_v_peau_abime VARCHAR(1) DEFAULT NULL, autre_caracteristique_v_imperfections VARCHAR(1) DEFAULT NULL, autre_caracteristique_v_peau_fatique VARCHAR(1) DEFAULT NULL, autre_caracteristique_v_deshydratee VARCHAR(1) DEFAULT NULL, gel_nettoyant VARCHAR(1) DEFAULT NULL, gel_nettoyant_specifique VARCHAR(1) DEFAULT NULL, lotion_nettoyant VARCHAR(1) DEFAULT NULL, gel_exfoliant VARCHAR(1) DEFAULT NULL, savon_pain_derma VARCHAR(1) DEFAULT NULL, ouachete_soin_visage VARCHAR(191) DEFAULT NULL, caracteristique_yeux_sensible VARCHAR(1) DEFAULT NULL, caracteristique_yeux_lentille VARCHAR(1) DEFAULT NULL, caracteristique_yeux_cernes VARCHAR(1) DEFAULT NULL, caracteristique_yeux_poche VARCHAR(1) DEFAULT NULL, caracteristique_yeux_paupieres VARCHAR(1) DEFAULT NULL, caracteristique_yeux_gonfles VARCHAR(1) DEFAULT NULL, type_cheveux VARCHAR(191) DEFAULT NULL, mode_epilation_jambe VARCHAR(191) DEFAULT NULL, epillation_maillot VARCHAR(191) DEFAULT NULL, epillation_visage VARCHAR(191) DEFAULT NULL, etre_rappler_skype VARCHAR(191) DEFAULT NULL, deplacement_region VARCHAR(191) DEFAULT NULL, nature_cheveux VARCHAR(191) DEFAULT NULL, alopecie VARCHAR(191) DEFAULT NULL, probleme_peau_poil_incarne VARCHAR(191) DEFAULT NULL, probleme_peau_sensible VARCHAR(191) DEFAULT NULL, probleme_peau_barbe_dure VARCHAR(191) DEFAULT NULL, votre_origine VARCHAR(191) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE newsletter (id INT AUTO_INCREMENT NOT NULL, image_name VARCHAR(255) DEFAULT NULL, image_name_un VARCHAR(255) DEFAULT NULL, image_name_deux VARCHAR(255) DEFAULT NULL, image_name_trois VARCHAR(255) DEFAULT NULL, image_name_quatre VARCHAR(255) DEFAULT NULL, updated_at DATETIME NOT NULL, presentation VARCHAR(191) DEFAULT NULL, salutation VARCHAR(191) DEFAULT NULL, text_desc VARCHAR(191) DEFAULT NULL, footer_text_un VARCHAR(191) DEFAULT NULL, footer_text_deux VARCHAR(191) DEFAULT NULL, footer_text_trois VARCHAR(191) DEFAULT NULL, footer_text_quatre VARCHAR(191) DEFAULT NULL, footer_text_cinq VARCHAR(191) DEFAULT NULL, footer_text_six VARCHAR(191) DEFAULT NULL, footer_text_sept VARCHAR(191) DEFAULT NULL, footer_text_huit VARCHAR(191) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE header_habit (id INT AUTO_INCREMENT NOT NULL, category_habit_id INT NOT NULL, name VARCHAR(191) NOT NULL, visible TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_D75A5A955E237E06 (name), INDEX IDX_D75A5A9550D437C9 (category_habit_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE test_migration (id INT AUTO_INCREMENT NOT NULL, albert VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE survey ADD CONSTRAINT FK_AD5F9BFC12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE survey ADD CONSTRAINT FK_AD5F9BFC178BC76 FOREIGN KEY (paneliste_group_id) REFERENCES paneliste_group (id)');
        $this->addSql('ALTER TABLE focus_groups ADD CONSTRAINT FK_499FC36EB3FE509D FOREIGN KEY (survey_id) REFERENCES survey (id)');
        $this->addSql('ALTER TABLE category_item ADD CONSTRAINT FK_94805F59CB753B73 FOREIGN KEY (categorylist_id) REFERENCES categorylist (id)');
        $this->addSql('ALTER TABLE focus_access ADD CONSTRAINT FK_BF9BD14AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE focus_access ADD CONSTRAINT FK_BF9BD14A777D4468 FOREIGN KEY (focus_group_id) REFERENCES focus_groups (id)');
        $this->addSql('ALTER TABLE focus_accesss ADD CONSTRAINT FK_8DB8FC54A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE focus_accesss ADD CONSTRAINT FK_8DB8FC54777D4468 FOREIGN KEY (focus_group_id) REFERENCES focus_groups (id)');
        $this->addSql('ALTER TABLE pdeux_ins ADD CONSTRAINT FK_EFD2A4F061C0CFC2 FOREIGN KEY (id_insc_id) REFERENCES insc (id)');
        $this->addSql('ALTER TABLE link_log ADD CONSTRAINT FK_C344E5FEADA40271 FOREIGN KEY (link_id) REFERENCES link (id)');
        $this->addSql('ALTER TABLE link_log ADD CONSTRAINT FK_C344E5FEA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE link ADD CONSTRAINT FK_36AC99F1B3FE509D FOREIGN KEY (survey_id) REFERENCES survey (id)');
        $this->addSql('ALTER TABLE brand ADD CONSTRAINT FK_1C52F95850D437C9 FOREIGN KEY (category_habit_id) REFERENCES category_habit (id)');
        $this->addSql('ALTER TABLE habit ADD CONSTRAINT FK_44FE21725673B2C8 FOREIGN KEY (header_habit_id) REFERENCES header_habit (id)');
        $this->addSql('ALTER TABLE club_subject ADD CONSTRAINT FK_F6869BF8727ACA70 FOREIGN KEY (parent_id) REFERENCES club_subject (id)');
        $this->addSql('ALTER TABLE club_subject ADD CONSTRAINT FK_F6869BF8CB753B73 FOREIGN KEY (categorylist_id) REFERENCES categorylist (id)');
        $this->addSql('ALTER TABLE form_trois ADD CONSTRAINT FK_B6B901B361C0CFC2 FOREIGN KEY (id_insc_id) REFERENCES insc (id)');
        $this->addSql('ALTER TABLE club_article ADD CONSTRAINT FK_F72ABE4CE930957 FOREIGN KEY (clubitem_id) REFERENCES category_item (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE club_article ADD CONSTRAINT FK_F72ABE44BF8926A FOREIGN KEY (club_subject_id) REFERENCES club_subject (id)');
        $this->addSql('ALTER TABLE club_article ADD CONSTRAINT FK_F72ABE450D437C9 FOREIGN KEY (category_habit_id) REFERENCES category_habit (id)');
        $this->addSql('ALTER TABLE club_article ADD CONSTRAINT FK_F72ABE45673B2C8 FOREIGN KEY (header_habit_id) REFERENCES header_habit (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE club_article ADD CONSTRAINT FK_F72ABE4E7AEB3B2 FOREIGN KEY (habit_id) REFERENCES habit (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE club_article ADD CONSTRAINT FK_F72ABE444F5D008 FOREIGN KEY (brand_id) REFERENCES brand (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE club_article ADD CONSTRAINT FK_F72ABE4A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE focus_message ADD CONSTRAINT FK_4C0BFFE6777D4468 FOREIGN KEY (focus_group_id) REFERENCES focus_groups (id)');
        $this->addSql('ALTER TABLE focus_message ADD CONSTRAINT FK_4C0BFFE6A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE focus_message ADD CONSTRAINT FK_4C0BFFE6727ACA70 FOREIGN KEY (parent_id) REFERENCES focus_message (id)');
        $this->addSql('ALTER TABLE paneliste_groups ADD CONSTRAINT FK_264B5F87A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE paneliste_groups ADD CONSTRAINT FK_264B5F87178BC76 FOREIGN KEY (paneliste_group_id) REFERENCES paneliste_group (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE id_survey ADD CONSTRAINT FK_8B682E11A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE id_survey ADD CONSTRAINT FK_8B682E11B3FE509D FOREIGN KEY (survey_id) REFERENCES survey (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_roles ADD CONSTRAINT FK_54FCD59FA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_roles ADD CONSTRAINT FK_54FCD59F38C751C4 FOREIGN KEY (roles_id) REFERENCES roles (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE header_habit ADD CONSTRAINT FK_D75A5A9550D437C9 FOREIGN KEY (category_habit_id) REFERENCES category_habit (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE focus_groups DROP FOREIGN KEY FK_499FC36EB3FE509D');
        $this->addSql('ALTER TABLE link DROP FOREIGN KEY FK_36AC99F1B3FE509D');
        $this->addSql('ALTER TABLE id_survey DROP FOREIGN KEY FK_8B682E11B3FE509D');
        $this->addSql('ALTER TABLE focus_access DROP FOREIGN KEY FK_BF9BD14A777D4468');
        $this->addSql('ALTER TABLE focus_accesss DROP FOREIGN KEY FK_8DB8FC54777D4468');
        $this->addSql('ALTER TABLE focus_message DROP FOREIGN KEY FK_4C0BFFE6777D4468');
        $this->addSql('ALTER TABLE category_item DROP FOREIGN KEY FK_94805F59CB753B73');
        $this->addSql('ALTER TABLE club_subject DROP FOREIGN KEY FK_F6869BF8CB753B73');
        $this->addSql('ALTER TABLE club_article DROP FOREIGN KEY FK_F72ABE4CE930957');
        $this->addSql('ALTER TABLE link_log DROP FOREIGN KEY FK_C344E5FEADA40271');
        $this->addSql('ALTER TABLE club_article DROP FOREIGN KEY FK_F72ABE444F5D008');
        $this->addSql('ALTER TABLE brand DROP FOREIGN KEY FK_1C52F95850D437C9');
        $this->addSql('ALTER TABLE club_article DROP FOREIGN KEY FK_F72ABE450D437C9');
        $this->addSql('ALTER TABLE header_habit DROP FOREIGN KEY FK_D75A5A9550D437C9');
        $this->addSql('ALTER TABLE pdeux_ins DROP FOREIGN KEY FK_EFD2A4F061C0CFC2');
        $this->addSql('ALTER TABLE form_trois DROP FOREIGN KEY FK_B6B901B361C0CFC2');
        $this->addSql('ALTER TABLE club_article DROP FOREIGN KEY FK_F72ABE4E7AEB3B2');
        $this->addSql('ALTER TABLE club_subject DROP FOREIGN KEY FK_F6869BF8727ACA70');
        $this->addSql('ALTER TABLE club_article DROP FOREIGN KEY FK_F72ABE44BF8926A');
        $this->addSql('ALTER TABLE focus_message DROP FOREIGN KEY FK_4C0BFFE6727ACA70');
        $this->addSql('ALTER TABLE survey DROP FOREIGN KEY FK_AD5F9BFC12469DE2');
        $this->addSql('ALTER TABLE focus_access DROP FOREIGN KEY FK_BF9BD14AA76ED395');
        $this->addSql('ALTER TABLE focus_accesss DROP FOREIGN KEY FK_8DB8FC54A76ED395');
        $this->addSql('ALTER TABLE link_log DROP FOREIGN KEY FK_C344E5FEA76ED395');
        $this->addSql('ALTER TABLE club_article DROP FOREIGN KEY FK_F72ABE4A76ED395');
        $this->addSql('ALTER TABLE focus_message DROP FOREIGN KEY FK_4C0BFFE6A76ED395');
        $this->addSql('ALTER TABLE paneliste_groups DROP FOREIGN KEY FK_264B5F87A76ED395');
        $this->addSql('ALTER TABLE id_survey DROP FOREIGN KEY FK_8B682E11A76ED395');
        $this->addSql('ALTER TABLE user_roles DROP FOREIGN KEY FK_54FCD59FA76ED395');
        $this->addSql('ALTER TABLE survey DROP FOREIGN KEY FK_AD5F9BFC178BC76');
        $this->addSql('ALTER TABLE paneliste_groups DROP FOREIGN KEY FK_264B5F87178BC76');
        $this->addSql('ALTER TABLE user_roles DROP FOREIGN KEY FK_54FCD59F38C751C4');
        $this->addSql('ALTER TABLE habit DROP FOREIGN KEY FK_44FE21725673B2C8');
        $this->addSql('ALTER TABLE club_article DROP FOREIGN KEY FK_F72ABE45673B2C8');
        $this->addSql('DROP TABLE survey');
        $this->addSql('DROP TABLE focus_groups');
        $this->addSql('DROP TABLE categorylist');
        $this->addSql('DROP TABLE category_item');
        $this->addSql('DROP TABLE focus_access');
        $this->addSql('DROP TABLE focus_accesss');
        $this->addSql('DROP TABLE pdeux_ins');
        $this->addSql('DROP TABLE contact');
        $this->addSql('DROP TABLE link_log');
        $this->addSql('DROP TABLE name');
        $this->addSql('DROP TABLE home_page');
        $this->addSql('DROP TABLE link');
        $this->addSql('DROP TABLE configuration');
        $this->addSql('DROP TABLE brand');
        $this->addSql('DROP TABLE category_habit');
        $this->addSql('DROP TABLE insc');
        $this->addSql('DROP TABLE habit');
        $this->addSql('DROP TABLE club_subject');
        $this->addSql('DROP TABLE form_trois');
        $this->addSql('DROP TABLE club_article');
        $this->addSql('DROP TABLE focus_message');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE invitation');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE paneliste_groups');
        $this->addSql('DROP TABLE id_survey');
        $this->addSql('DROP TABLE user_roles');
        $this->addSql('DROP TABLE static_page');
        $this->addSql('DROP TABLE paneliste_group');
        $this->addSql('DROP TABLE roles');
        $this->addSql('DROP TABLE inscription');
        $this->addSql('DROP TABLE newsletter');
        $this->addSql('DROP TABLE header_habit');
        $this->addSql('DROP TABLE test_migration');
    }
}
