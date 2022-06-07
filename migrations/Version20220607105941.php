<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220607105941 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cert_ind_naz_rys (cert_id INT NOT NULL, ind_naz_rys_id INT NOT NULL, INDEX IDX_83BFD2A981448FA9 (cert_id), INDEX IDX_83BFD2A9F9AE29D3 (ind_naz_rys_id), PRIMARY KEY(cert_id, ind_naz_rys_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cert_ind_naz_rys ADD CONSTRAINT FK_83BFD2A981448FA9 FOREIGN KEY (cert_id) REFERENCES cert (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cert_ind_naz_rys ADD CONSTRAINT FK_83BFD2A9F9AE29D3 FOREIGN KEY (ind_naz_rys_id) REFERENCES ind_naz_rys (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cert ADD norm_id INT DEFAULT NULL, ADD gatunek_id INT DEFAULT NULL, ADD obr_cieplna_id INT DEFAULT NULL, ADD customer_order_id INT DEFAULT NULL, ADD number INT DEFAULT NULL, ADD creation_date DATE NOT NULL DEFAULT (CURRENT_DATE), ADD date_of_signature DATE DEFAULT NULL, ADD print_date DATE DEFAULT NULL, ADD amount VARCHAR(255) DEFAULT NULL, ADD weight VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE cert ADD CONSTRAINT FK_CAA206B6C19D51A FOREIGN KEY (norm_id) REFERENCES norm (id)');
        $this->addSql('ALTER TABLE cert ADD CONSTRAINT FK_CAA206B1BE87849 FOREIGN KEY (gatunek_id) REFERENCES gatunek (id)');
        $this->addSql('ALTER TABLE cert ADD CONSTRAINT FK_CAA206BBBB767B5 FOREIGN KEY (obr_cieplna_id) REFERENCES obr_cieplna (id)');
        $this->addSql('ALTER TABLE cert ADD CONSTRAINT FK_CAA206BA15A2E17 FOREIGN KEY (customer_order_id) REFERENCES `order` (id)');
        $this->addSql('CREATE INDEX IDX_CAA206B6C19D51A ON cert (norm_id)');
        $this->addSql('CREATE INDEX IDX_CAA206B1BE87849 ON cert (gatunek_id)');
        $this->addSql('CREATE INDEX IDX_CAA206BBBB767B5 ON cert (obr_cieplna_id)');
        $this->addSql('CREATE INDEX IDX_CAA206BA15A2E17 ON cert (customer_order_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE cert_ind_naz_rys');
        $this->addSql('ALTER TABLE cert DROP FOREIGN KEY FK_CAA206B6C19D51A');
        $this->addSql('ALTER TABLE cert DROP FOREIGN KEY FK_CAA206B1BE87849');
        $this->addSql('ALTER TABLE cert DROP FOREIGN KEY FK_CAA206BBBB767B5');
        $this->addSql('ALTER TABLE cert DROP FOREIGN KEY FK_CAA206BA15A2E17');
        $this->addSql('DROP INDEX IDX_CAA206B6C19D51A ON cert');
        $this->addSql('DROP INDEX IDX_CAA206B1BE87849 ON cert');
        $this->addSql('DROP INDEX IDX_CAA206BBBB767B5 ON cert');
        $this->addSql('DROP INDEX IDX_CAA206BA15A2E17 ON cert');
        $this->addSql('ALTER TABLE cert DROP norm_id, DROP gatunek_id, DROP obr_cieplna_id, DROP customer_order_id, DROP number, DROP creation_date, DROP date_of_signature, DROP print_date, DROP amount, DROP weight');
    }
}
