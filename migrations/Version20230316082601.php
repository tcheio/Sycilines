<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230316082601 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE traversee DROP FOREIGN KEY FK_B688F5012945D92E');
        $this->addSql('DROP INDEX IDX_B688F5012945D92E ON traversee');
        $this->addSql('ALTER TABLE traversee CHANGE id_bateau_id bateau_id INT NOT NULL');
        $this->addSql('ALTER TABLE traversee ADD CONSTRAINT FK_B688F501A9706509 FOREIGN KEY (bateau_id) REFERENCES bateau (id)');
        $this->addSql('CREATE INDEX IDX_B688F501A9706509 ON traversee (bateau_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE traversee DROP FOREIGN KEY FK_B688F501A9706509');
        $this->addSql('DROP INDEX IDX_B688F501A9706509 ON traversee');
        $this->addSql('ALTER TABLE traversee CHANGE bateau_id id_bateau_id INT NOT NULL');
        $this->addSql('ALTER TABLE traversee ADD CONSTRAINT FK_B688F5012945D92E FOREIGN KEY (id_bateau_id) REFERENCES bateau (id)');
        $this->addSql('CREATE INDEX IDX_B688F5012945D92E ON traversee (id_bateau_id)');
    }
}
