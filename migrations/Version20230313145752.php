<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230313145752 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE liaison_periode_type DROP FOREIGN KEY FK_EB2108731BD125E3');
        $this->addSql('DROP INDEX IDX_EB2108731BD125E3 ON liaison_periode_type');
        $this->addSql('ALTER TABLE liaison_periode_type CHANGE id_type_id type_id INT NOT NULL');
        $this->addSql('ALTER TABLE liaison_periode_type ADD CONSTRAINT FK_EB210873C54C8C93 FOREIGN KEY (type_id) REFERENCES type (id)');
        $this->addSql('CREATE INDEX IDX_EB210873C54C8C93 ON liaison_periode_type (type_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE liaison_periode_type DROP FOREIGN KEY FK_EB210873C54C8C93');
        $this->addSql('DROP INDEX IDX_EB210873C54C8C93 ON liaison_periode_type');
        $this->addSql('ALTER TABLE liaison_periode_type CHANGE type_id id_type_id INT NOT NULL');
        $this->addSql('ALTER TABLE liaison_periode_type ADD CONSTRAINT FK_EB2108731BD125E3 FOREIGN KEY (id_type_id) REFERENCES type (id)');
        $this->addSql('CREATE INDEX IDX_EB2108731BD125E3 ON liaison_periode_type (id_type_id)');
    }
}
