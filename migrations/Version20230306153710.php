<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230306153710 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie_bateau (id INT AUTO_INCREMENT NOT NULL, id_bateau_id INT NOT NULL, id_type_id INT NOT NULL, nombre_max INT NOT NULL, INDEX IDX_20421A632945D92E (id_bateau_id), INDEX IDX_20421A631BD125E3 (id_type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE categorie_bateau ADD CONSTRAINT FK_20421A632945D92E FOREIGN KEY (id_bateau_id) REFERENCES bateau (id)');
        $this->addSql('ALTER TABLE categorie_bateau ADD CONSTRAINT FK_20421A631BD125E3 FOREIGN KEY (id_type_id) REFERENCES type (id)');
        $this->addSql('ALTER TABLE contenir DROP FOREIGN KEY FK_3C914DFD1BD125E3');
        $this->addSql('ALTER TABLE contenir DROP FOREIGN KEY FK_3C914DFD2945D92E');
        $this->addSql('DROP TABLE contenir');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE contenir (id INT AUTO_INCREMENT NOT NULL, id_bateau_id INT NOT NULL, id_type_id INT NOT NULL, nombre_max INT NOT NULL, INDEX IDX_3C914DFD2945D92E (id_bateau_id), INDEX IDX_3C914DFD1BD125E3 (id_type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE contenir ADD CONSTRAINT FK_3C914DFD1BD125E3 FOREIGN KEY (id_type_id) REFERENCES type (id)');
        $this->addSql('ALTER TABLE contenir ADD CONSTRAINT FK_3C914DFD2945D92E FOREIGN KEY (id_bateau_id) REFERENCES bateau (id)');
        $this->addSql('ALTER TABLE categorie_bateau DROP FOREIGN KEY FK_20421A632945D92E');
        $this->addSql('ALTER TABLE categorie_bateau DROP FOREIGN KEY FK_20421A631BD125E3');
        $this->addSql('DROP TABLE categorie_bateau');
    }
}
