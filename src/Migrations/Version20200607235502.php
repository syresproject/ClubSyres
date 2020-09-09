<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200607235502 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE form_trois (id INT AUTO_INCREMENT NOT NULL, id_insc_id INT DEFAULT NULL, loisir VARCHAR(191) NOT NULL, UNIQUE INDEX UNIQ_B6B901B361C0CFC2 (id_insc_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE name (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE insc (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, prenom VARCHAR(191) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE test_migration (id INT AUTO_INCREMENT NOT NULL, albert VARCHAR(191) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pdeux_ins (id INT AUTO_INCREMENT NOT NULL, id_insc_id INT NOT NULL, domaine_m VARCHAR(191) NOT NULL, UNIQUE INDEX UNIQ_EFD2A4F061C0CFC2 (id_insc_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE form_trois ADD CONSTRAINT FK_B6B901B361C0CFC2 FOREIGN KEY (id_insc_id) REFERENCES insc (id)');
        $this->addSql('ALTER TABLE pdeux_ins ADD CONSTRAINT FK_EFD2A4F061C0CFC2 FOREIGN KEY (id_insc_id) REFERENCES insc (id)');
        $this->addSql('ALTER TABLE contact CHANGE email email VARCHAR(191) DEFAULT NULL, CHANGE subject subject VARCHAR(191) NOT NULL, CHANGE id_paneliste id_paneliste VARCHAR(191) NOT NULL, CHANGE lastname lastname VARCHAR(191) NOT NULL, CHANGE firstname firstname VARCHAR(191) NOT NULL');
        $this->addSql('ALTER TABLE home_page CHANGE text_welcome text_welcome VARCHAR(191) DEFAULT NULL, CHANGE image_name image_name VARCHAR(191) NOT NULL, CHANGE image_name_un image_name_un VARCHAR(191) NOT NULL');
        $this->addSql('ALTER TABLE link DROP date_deux, CHANGE token token VARCHAR(191) NOT NULL');
        $this->addSql('ALTER TABLE header_habit CHANGE name name VARCHAR(191) NOT NULL');
        $this->addSql('ALTER TABLE habit CHANGE name name VARCHAR(191) NOT NULL');
        $this->addSql('ALTER TABLE club_subject CHANGE title title VARCHAR(191) NOT NULL');
        $this->addSql('ALTER TABLE roles CHANGE libelle libelle VARCHAR(191) NOT NULL');
        $this->addSql('ALTER TABLE club_article CHANGE title title VARCHAR(191) NOT NULL, CHANGE location location VARCHAR(191) NOT NULL, CHANGE location_brand location_brand VARCHAR(191) NOT NULL, CHANGE category category VARCHAR(191) DEFAULT NULL, CHANGE product product VARCHAR(191) NOT NULL, CHANGE product_name product_name VARCHAR(191) DEFAULT NULL, CHANGE product_brand product_brand VARCHAR(191) DEFAULT NULL');
        $this->addSql('ALTER TABLE link_log CHANGE url url VARCHAR(191) NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE title title VARCHAR(191) NOT NULL, CHANGE firstname firstname VARCHAR(191) NOT NULL, CHANGE lastname lastname VARCHAR(191) NOT NULL, CHANGE statut statut VARCHAR(191) NOT NULL, CHANGE password password VARCHAR(191) DEFAULT NULL');
        $this->addSql('ALTER TABLE survey CHANGE name name VARCHAR(191) NOT NULL, CHANGE external_type external_type VARCHAR(191) DEFAULT NULL, CHANGE image_name image_name VARCHAR(191) NOT NULL');
        $this->addSql('ALTER TABLE paneliste_group CHANGE name name VARCHAR(191) NOT NULL');
        $this->addSql('ALTER TABLE imagesAccueil ADD image_name_un VARCHAR(191) NOT NULL, ADD image_name_deux VARCHAR(191) NOT NULL, ADD image_name_trois VARCHAR(191) NOT NULL, ADD image_name_quatre VARCHAR(191) NOT NULL, ADD presentation VARCHAR(191) DEFAULT NULL, ADD salutation VARCHAR(191) DEFAULT NULL, ADD text_desc VARCHAR(191) DEFAULT NULL, ADD footer_text_un VARCHAR(191) DEFAULT NULL, ADD footer_text_deux VARCHAR(191) DEFAULT NULL, ADD footer_text_trois VARCHAR(191) DEFAULT NULL, ADD footer_text_quatre VARCHAR(191) DEFAULT NULL, ADD footer_text_cinq VARCHAR(191) DEFAULT NULL, ADD footer_text_six VARCHAR(191) DEFAULT NULL, ADD footer_text_sept VARCHAR(191) DEFAULT NULL, ADD footer_text_huit VARCHAR(191) DEFAULT NULL, CHANGE image_name image_name VARCHAR(191) NOT NULL');
        $this->addSql('ALTER TABLE configuration CHANGE name name VARCHAR(191) NOT NULL, CHANGE value value VARCHAR(191) DEFAULT NULL');
        $this->addSql('ALTER TABLE static_page CHANGE title title VARCHAR(191) NOT NULL, CHANGE alias alias VARCHAR(191) NOT NULL');
        $this->addSql('ALTER TABLE category_item CHANGE title title VARCHAR(191) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE form_trois DROP FOREIGN KEY FK_B6B901B361C0CFC2');
        $this->addSql('ALTER TABLE pdeux_ins DROP FOREIGN KEY FK_EFD2A4F061C0CFC2');
        $this->addSql('DROP TABLE form_trois');
        $this->addSql('DROP TABLE name');
        $this->addSql('DROP TABLE insc');
        $this->addSql('DROP TABLE test_migration');
        $this->addSql('DROP TABLE pdeux_ins');
        $this->addSql('ALTER TABLE category_item CHANGE title title VARCHAR(191) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE club_article CHANGE title title VARCHAR(191) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE location location VARCHAR(191) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE location_brand location_brand VARCHAR(191) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE category category VARCHAR(191) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE product product VARCHAR(191) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE product_name product_name VARCHAR(191) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE product_brand product_brand VARCHAR(191) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE club_subject CHANGE title title VARCHAR(191) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE configuration CHANGE name name VARCHAR(191) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE value value VARCHAR(191) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE contact CHANGE email email VARCHAR(191) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE subject subject VARCHAR(191) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE id_paneliste id_paneliste VARCHAR(191) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE lastname lastname VARCHAR(191) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE firstname firstname VARCHAR(191) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE habit CHANGE name name VARCHAR(191) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE header_habit CHANGE name name VARCHAR(191) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE home_page CHANGE text_welcome text_welcome VARCHAR(191) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE image_name image_name VARCHAR(191) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE image_name_un image_name_un VARCHAR(191) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE link ADD date_deux DATETIME DEFAULT NULL, CHANGE token token VARCHAR(191) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE link_log CHANGE url url VARCHAR(191) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE imagesAccueil DROP image_name_un, DROP image_name_deux, DROP image_name_trois, DROP image_name_quatre, DROP presentation, DROP salutation, DROP text_desc, DROP footer_text_un, DROP footer_text_deux, DROP footer_text_trois, DROP footer_text_quatre, DROP footer_text_cinq, DROP footer_text_six, DROP footer_text_sept, DROP footer_text_huit, CHANGE image_name image_name VARCHAR(191) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE paneliste_group CHANGE name name VARCHAR(191) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE roles CHANGE libelle libelle VARCHAR(191) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE static_page CHANGE title title VARCHAR(191) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE alias alias VARCHAR(191) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE survey CHANGE name name VARCHAR(191) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE external_type external_type VARCHAR(191) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE image_name image_name VARCHAR(191) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user CHANGE title title VARCHAR(191) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE firstname firstname VARCHAR(191) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE lastname lastname VARCHAR(191) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE statut statut VARCHAR(191) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(191) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
