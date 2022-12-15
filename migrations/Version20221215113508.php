<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221215113508 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tarifier ADD id_liaison_id INT NOT NULL');
        $this->addSql('ALTER TABLE tarifier ADD CONSTRAINT FK_4DFB6926AB599152 FOREIGN KEY (id_liaison_id) REFERENCES liaison (id)');
        $this->addSql('CREATE INDEX IDX_4DFB6926AB599152 ON tarifier (id_liaison_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tarifier DROP FOREIGN KEY FK_4DFB6926AB599152');
        $this->addSql('DROP INDEX IDX_4DFB6926AB599152 ON tarifier');
        $this->addSql('ALTER TABLE tarifier DROP id_liaison_id');
    }
}
