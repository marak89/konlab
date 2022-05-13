<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220510132221 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE wlasn_chem (id INT AUTO_INCREMENT NOT NULL, numer_wytopu INT NOT NULL, koncowa_proba VARCHAR(255) NOT NULL, date DATE NOT NULL, time TIME NOT NULL, gatunek VARCHAR(255) NOT NULL, value_c DOUBLE PRECISION DEFAULT NULL, value_si DOUBLE PRECISION DEFAULT NULL, value_mn DOUBLE PRECISION DEFAULT NULL, value_p DOUBLE PRECISION DEFAULT NULL, val_s DOUBLE PRECISION DEFAULT NULL, value_cr DOUBLE PRECISION DEFAULT NULL, value_ni DOUBLE PRECISION DEFAULT NULL, value_mo DOUBLE PRECISION DEFAULT NULL, value_cu DOUBLE PRECISION DEFAULT NULL, value_al DOUBLE PRECISION DEFAULT NULL, value_v DOUBLE PRECISION DEFAULT NULL, value_ce DOUBLE PRECISION DEFAULT NULL, value_sn DOUBLE PRECISION DEFAULT NULL, value_ti DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE wlasn_chem');
    }
}
