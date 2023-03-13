<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221215114835 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE proposer (id INT AUTO_INCREMENT NOT NULL, id_bateau_id INT NOT NULL, id_equipement_id INT NOT NULL, quantite INT NOT NULL, INDEX IDX_21866C152945D92E (id_bateau_id), INDEX IDX_21866C153E47DE39 (id_equipement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE proposer ADD CONSTRAINT FK_21866C152945D92E FOREIGN KEY (id_bateau_id) REFERENCES bateau (id)');
        $this->addSql('ALTER TABLE proposer ADD CONSTRAINT FK_21866C153E47DE39 FOREIGN KEY (id_equipement_id) REFERENCES equipement (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE proposer DROP FOREIGN KEY FK_21866C152945D92E');
        $this->addSql('ALTER TABLE proposer DROP FOREIGN KEY FK_21866C153E47DE39');
        $this->addSql('DROP TABLE proposer');
    }
}
