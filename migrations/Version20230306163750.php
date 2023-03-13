<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230306163750 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie_bateau DROP FOREIGN KEY FK_20421A631BD125E3');
        $this->addSql('ALTER TABLE categorie_bateau DROP FOREIGN KEY FK_20421A632945D92E');
        $this->addSql('DROP INDEX IDX_20421A632945D92E ON categorie_bateau');
        $this->addSql('DROP INDEX IDX_20421A631BD125E3 ON categorie_bateau');
        $this->addSql('ALTER TABLE categorie_bateau ADD bateau_id INT NOT NULL, ADD type_id INT NOT NULL, DROP id_bateau_id, DROP id_type_id');
        $this->addSql('ALTER TABLE categorie_bateau ADD CONSTRAINT FK_20421A63A9706509 FOREIGN KEY (bateau_id) REFERENCES bateau (id)');
        $this->addSql('ALTER TABLE categorie_bateau ADD CONSTRAINT FK_20421A63C54C8C93 FOREIGN KEY (type_id) REFERENCES type (id)');
        $this->addSql('CREATE INDEX IDX_20421A63A9706509 ON categorie_bateau (bateau_id)');
        $this->addSql('CREATE INDEX IDX_20421A63C54C8C93 ON categorie_bateau (type_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie_bateau DROP FOREIGN KEY FK_20421A63A9706509');
        $this->addSql('ALTER TABLE categorie_bateau DROP FOREIGN KEY FK_20421A63C54C8C93');
        $this->addSql('DROP INDEX IDX_20421A63A9706509 ON categorie_bateau');
        $this->addSql('DROP INDEX IDX_20421A63C54C8C93 ON categorie_bateau');
        $this->addSql('ALTER TABLE categorie_bateau ADD id_bateau_id INT NOT NULL, ADD id_type_id INT NOT NULL, DROP bateau_id, DROP type_id');
        $this->addSql('ALTER TABLE categorie_bateau ADD CONSTRAINT FK_20421A631BD125E3 FOREIGN KEY (id_type_id) REFERENCES type (id)');
        $this->addSql('ALTER TABLE categorie_bateau ADD CONSTRAINT FK_20421A632945D92E FOREIGN KEY (id_bateau_id) REFERENCES bateau (id)');
        $this->addSql('CREATE INDEX IDX_20421A632945D92E ON categorie_bateau (id_bateau_id)');
        $this->addSql('CREATE INDEX IDX_20421A631BD125E3 ON categorie_bateau (id_type_id)');
    }
}
