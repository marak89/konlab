<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220531053523 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE language (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, international VARCHAR(255) NOT NULL, alfa2 VARCHAR(2) NOT NULL, alfa3 VARCHAR(3) NOT NULL, num INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql("INSERT INTO `language` (`id`, `name`, `international`, `alfa2`, `alfa3`, `num`) VALUES (NULL, 'polska', 'Poland', 'PL', 'POL', '616');");
        $this->addSql("INSERT INTO `language` (`id`, `name`, `international`, `alfa2`, `alfa3`, `num`) VALUES (NULL, 'Україна', 'Ukraine', 'UA', 'UKR', '804');");
        $this->addSql("INSERT INTO `language` (`id`, `name`, `international`, `alfa2`, `alfa3`, `num`) VALUES (NULL, 'United Kingdom', 'English language', 'GB', '', '0');");
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE language');
    }
}
