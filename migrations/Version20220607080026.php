<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220607080026 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ind_naz_rys (id INT AUTO_INCREMENT NOT NULL, sys_id INT DEFAULT NULL, value_index VARCHAR(255) NOT NULL, index_cm VARCHAR(255) DEFAULT NULL, rysunek VARCHAR(255) DEFAULT NULL, nazwa_odlewu VARCHAR(255) NOT NULL, value_re VARCHAR(255) DEFAULT NULL, value_rm VARCHAR(255) DEFAULT NULL, value_a VARCHAR(255) DEFAULT NULL, value_z VARCHAR(255) DEFAULT NULL, udarnosc VARCHAR(255) DEFAULT NULL, udarnosc2 VARCHAR(255) DEFAULT NULL, twardosc VARCHAR(255) DEFAULT NULL, twardosc_max VARCHAR(255) DEFAULT NULL, twardosc_min VARCHAR(255) DEFAULT NULL, id_dt_karta VARCHAR(255) DEFAULT NULL, id_gatunek VARCHAR(255) DEFAULT NULL, id_norma_materialowa VARCHAR(255) DEFAULT NULL, jakosc_wewnetrzna VARCHAR(255) DEFAULT NULL, chropowatosc VARCHAR(255) DEFAULT NULL, jakosc_powierzchni VARCHAR(255) DEFAULT NULL, dokladnosc_wykonania VARCHAR(255) DEFAULT NULL, value_oc VARCHAR(255) DEFAULT NULL, ogolne_warunki VARCHAR(255) DEFAULT NULL, value_c VARCHAR(255) DEFAULT NULL, value_mn VARCHAR(255) DEFAULT NULL, value_si VARCHAR(255) DEFAULT NULL, value_p VARCHAR(255) DEFAULT NULL, val_s VARCHAR(255) DEFAULT NULL, value_cr VARCHAR(255) DEFAULT NULL, value_ni VARCHAR(255) DEFAULT NULL, value_mo VARCHAR(255) DEFAULT NULL, value_cu VARCHAR(255) DEFAULT NULL, value_al VARCHAR(255) DEFAULT NULL, value_v VARCHAR(255) DEFAULT NULL, odbior_jakosciowy VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE ind_naz_rys');
    }
}
