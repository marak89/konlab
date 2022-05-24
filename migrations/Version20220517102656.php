<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220517102656 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cert (id INT AUTO_INCREMENT NOT NULL, ready_to_print TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cert_wlasn_chem (cert_id INT NOT NULL, wlasn_chem_id INT NOT NULL, INDEX IDX_392C671F81448FA9 (cert_id), INDEX IDX_392C671F2E4FC166 (wlasn_chem_id), PRIMARY KEY(cert_id, wlasn_chem_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cert_wlasn_mech (cert_id INT NOT NULL, wlasn_mech_id INT NOT NULL, INDEX IDX_F71BD07681448FA9 (cert_id), INDEX IDX_F71BD0767A70AC77 (wlasn_mech_id), PRIMARY KEY(cert_id, wlasn_mech_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cert_wlasn_chem ADD CONSTRAINT FK_392C671F81448FA9 FOREIGN KEY (cert_id) REFERENCES cert (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cert_wlasn_chem ADD CONSTRAINT FK_392C671F2E4FC166 FOREIGN KEY (wlasn_chem_id) REFERENCES wlasn_chem (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cert_wlasn_mech ADD CONSTRAINT FK_F71BD07681448FA9 FOREIGN KEY (cert_id) REFERENCES cert (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cert_wlasn_mech ADD CONSTRAINT FK_F71BD0767A70AC77 FOREIGN KEY (wlasn_mech_id) REFERENCES wlasn_mech (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cert_wlasn_chem DROP FOREIGN KEY FK_392C671F81448FA9');
        $this->addSql('ALTER TABLE cert_wlasn_mech DROP FOREIGN KEY FK_F71BD07681448FA9');
        $this->addSql('DROP TABLE cert');
        $this->addSql('DROP TABLE cert_wlasn_chem');
        $this->addSql('DROP TABLE cert_wlasn_mech');
    }
}
