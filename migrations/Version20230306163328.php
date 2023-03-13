<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230306163328 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bateau_equipement DROP FOREIGN KEY FK_A2B506B12945D92E');
        $this->addSql('ALTER TABLE bateau_equipement DROP FOREIGN KEY FK_A2B506B13E47DE39');
        $this->addSql('DROP INDEX IDX_A2B506B12945D92E ON bateau_equipement');
        $this->addSql('DROP INDEX IDX_A2B506B13E47DE39 ON bateau_equipement');
        $this->addSql('ALTER TABLE bateau_equipement ADD bateau_id INT NOT NULL, ADD equipement_id INT NOT NULL, DROP id_bateau_id, DROP id_equipement_id');
        $this->addSql('ALTER TABLE bateau_equipement ADD CONSTRAINT FK_A2B506B1A9706509 FOREIGN KEY (bateau_id) REFERENCES bateau (id)');
        $this->addSql('ALTER TABLE bateau_equipement ADD CONSTRAINT FK_A2B506B1806F0F5C FOREIGN KEY (equipement_id) REFERENCES equipement (id)');
        $this->addSql('CREATE INDEX IDX_A2B506B1A9706509 ON bateau_equipement (bateau_id)');
        $this->addSql('CREATE INDEX IDX_A2B506B1806F0F5C ON bateau_equipement (equipement_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bateau_equipement DROP FOREIGN KEY FK_A2B506B1A9706509');
        $this->addSql('ALTER TABLE bateau_equipement DROP FOREIGN KEY FK_A2B506B1806F0F5C');
        $this->addSql('DROP INDEX IDX_A2B506B1A9706509 ON bateau_equipement');
        $this->addSql('DROP INDEX IDX_A2B506B1806F0F5C ON bateau_equipement');
        $this->addSql('ALTER TABLE bateau_equipement ADD id_bateau_id INT NOT NULL, ADD id_equipement_id INT NOT NULL, DROP bateau_id, DROP equipement_id');
        $this->addSql('ALTER TABLE bateau_equipement ADD CONSTRAINT FK_A2B506B12945D92E FOREIGN KEY (id_bateau_id) REFERENCES bateau (id)');
        $this->addSql('ALTER TABLE bateau_equipement ADD CONSTRAINT FK_A2B506B13E47DE39 FOREIGN KEY (id_equipement_id) REFERENCES equipement (id)');
        $this->addSql('CREATE INDEX IDX_A2B506B12945D92E ON bateau_equipement (id_bateau_id)');
        $this->addSql('CREATE INDEX IDX_A2B506B13E47DE39 ON bateau_equipement (id_equipement_id)');
    }
}
