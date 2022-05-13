<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220510134940 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE wlasn_mech (id INT AUTO_INCREMENT NOT NULL, wyt_new INT NOT NULL, value_re_rp DOUBLE PRECISION DEFAULT NULL, value_rm DOUBLE PRECISION DEFAULT NULL, value_a5 DOUBLE PRECISION DEFAULT NULL, value_z DOUBLE PRECISION DEFAULT NULL, value_tmp DOUBLE PRECISION DEFAULT NULL, value_kv1 DOUBLE PRECISION DEFAULT NULL, value_kv2 DOUBLE PRECISION DEFAULT NULL, value_kv3 DOUBLE PRECISION DEFAULT NULL, value_kcu160 DOUBLE PRECISION DEFAULT NULL, value_kcu260 DOUBLE PRECISION DEFAULT NULL, value_kcu360 DOUBLE PRECISION DEFAULT NULL, value_kcv VARCHAR(255) DEFAULT NULL, value_kcv2 VARCHAR(255) DEFAULT NULL, value_kcv3 VARCHAR(255) DEFAULT NULL, value_kcu20st1 VARCHAR(255) DEFAULT NULL, value_kcu20st2 VARCHAR(255) DEFAULT NULL, value_kcu20st3 VARCHAR(255) DEFAULT NULL, value_twardosc VARCHAR(255) DEFAULT NULL, data_otrzymania DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE wlasn_mech');
    }
}
