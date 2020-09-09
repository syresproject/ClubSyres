<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200608010001 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE survey CHANGE name name VARCHAR(191) NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE title title VARCHAR(191) NOT NULL, CHANGE firstname firstname VARCHAR(191) NOT NULL, CHANGE lastname lastname VARCHAR(191) NOT NULL');
        $this->addSql('ALTER TABLE link DROP date_deux');
        $this->addSql('ALTER TABLE form_trois CHANGE loisir loisir VARCHAR(191) NOT NULL');
        $this->addSql('ALTER TABLE insc CHANGE prenom prenom VARCHAR(191) NOT NULL');
        $this->addSql('ALTER TABLE pdeux_ins CHANGE domaine_m domaine_m VARCHAR(191) NOT NULL');
        $this->addSql('ALTER TABLE contact CHANGE email email VARCHAR(191) DEFAULT NULL, CHANGE subject subject VARCHAR(191) NOT NULL, CHANGE id_paneliste id_paneliste VARCHAR(191) NOT NULL, CHANGE lastname lastname VARCHAR(191) NOT NULL, CHANGE firstname firstname VARCHAR(191) NOT NULL');
        $this->addSql('ALTER TABLE home_page CHANGE text_welcome text_welcome VARCHAR(191) DEFAULT NULL');
        $this->addSql('ALTER TABLE imagesAccueil ADD image_name_un VARCHAR(255) NOT NULL, ADD image_name_deux VARCHAR(255) NOT NULL, ADD image_name_trois VARCHAR(255) NOT NULL, ADD image_name_quatre VARCHAR(255) NOT NULL, ADD presentation VARCHAR(191) DEFAULT NULL, ADD salutation VARCHAR(191) DEFAULT NULL, ADD text_desc VARCHAR(191) DEFAULT NULL, ADD footer_text_un VARCHAR(191) DEFAULT NULL, ADD footer_text_deux VARCHAR(191) DEFAULT NULL, ADD footer_text_trois VARCHAR(191) DEFAULT NULL, ADD footer_text_quatre VARCHAR(191) DEFAULT NULL, ADD footer_text_cinq VARCHAR(191) DEFAULT NULL, ADD footer_text_six VARCHAR(191) DEFAULT NULL, ADD footer_text_sept VARCHAR(191) DEFAULT NULL, ADD footer_text_huit VARCHAR(191) DEFAULT NULL, CHANGE image_name image_name VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE contact CHANGE email email VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE subject subject VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE id_paneliste id_paneliste VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE lastname lastname VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE firstname firstname VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE form_trois CHANGE loisir loisir VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE home_page CHANGE text_welcome text_welcome VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE insc CHANGE prenom prenom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE link ADD date_deux DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE imagesAccueil DROP image_name_un, DROP image_name_deux, DROP image_name_trois, DROP image_name_quatre, DROP presentation, DROP salutation, DROP text_desc, DROP footer_text_un, DROP footer_text_deux, DROP footer_text_trois, DROP footer_text_quatre, DROP footer_text_cinq, DROP footer_text_six, DROP footer_text_sept, DROP footer_text_huit, CHANGE image_name image_name VARCHAR(191) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE pdeux_ins CHANGE domaine_m domaine_m VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE survey CHANGE name name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user CHANGE title title VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE firstname firstname VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE lastname lastname VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
