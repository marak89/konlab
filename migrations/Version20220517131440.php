<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220517131440 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cert_wlasn_chem DROP FOREIGN KEY FK_392C671F2E4FC166');
        $this->addSql('ALTER TABLE cert_wlasn_chem DROP FOREIGN KEY FK_392C671F81448FA9');
        $this->addSql('ALTER TABLE cert_wlasn_chem ADD CONSTRAINT FK_392C671F2E4FC166 FOREIGN KEY (wlasn_chem_id) REFERENCES wlasn_chem (id)');
        $this->addSql('ALTER TABLE cert_wlasn_chem ADD CONSTRAINT FK_392C671F81448FA9 FOREIGN KEY (cert_id) REFERENCES cert (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cert_wlasn_chem DROP FOREIGN KEY FK_392C671F81448FA9');
        $this->addSql('ALTER TABLE cert_wlasn_chem DROP FOREIGN KEY FK_392C671F2E4FC166');
        $this->addSql('ALTER TABLE cert_wlasn_chem ADD CONSTRAINT FK_392C671F81448FA9 FOREIGN KEY (cert_id) REFERENCES cert (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cert_wlasn_chem ADD CONSTRAINT FK_392C671F2E4FC166 FOREIGN KEY (wlasn_chem_id) REFERENCES wlasn_chem (id) ON UPDATE NO ACTION ON DELETE CASCADE');
    }
}
