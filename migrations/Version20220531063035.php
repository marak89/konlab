<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220531063035 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE norm (id INT AUTO_INCREMENT NOT NULL, language_id INT DEFAULT NULL, type VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, content VARCHAR(255) NOT NULL, confirms VARCHAR(255) NOT NULL, norm VARCHAR(255) NOT NULL, INDEX IDX_973CD5A082F1BAF4 (language_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE norm ADD CONSTRAINT FK_973CD5A082F1BAF4 FOREIGN KEY (language_id) REFERENCES language (id)');
        $this->addSql("INSERT INTO `norm` (`id`, `language_id`, `type`, `name`, `content`, `confirms`, `norm`) VALUES (NULL, '1', '3.1', 'Świadectwo odbioru', 'Deklaracja zgodności przy zamówieniu z podaniem specyficznych rezultatów badań', 'Niezależny od wydziału produkcyjnego specjalista odbiorów producenta', 'EN 10204:2004');");
        $this->addSql("INSERT INTO `norm` (`id`, `language_id`, `type`, `name`, `content`, `confirms`, `norm`) VALUES (NULL, '1', '3.2', 'Świadectwo odbioru', 'Deklaracja zgodności przy zamówieniu z podaniem specyficznych rezultatów badań', 'Niezależny od wydziału produkcyjnego specjalista odbiorów i określony przez zamawiającego specjalista odbioru określony przepisami urzędowymi', 'EN 10204:2004');");
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE norm');
    }
}
