<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230313145534 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE liaison_periode_type DROP FOREIGN KEY FK_EB210873AB599152');
        $this->addSql('ALTER TABLE liaison_periode_type DROP FOREIGN KEY FK_EB210873560E4118');
        $this->addSql('DROP INDEX IDX_EB210873560E4118 ON liaison_periode_type');
        $this->addSql('DROP INDEX IDX_EB210873AB599152 ON liaison_periode_type');
        $this->addSql('ALTER TABLE liaison_periode_type ADD periode_id INT NOT NULL, ADD liaison_id INT NOT NULL, DROP id_periode_id, DROP id_liaison_id');
        $this->addSql('ALTER TABLE liaison_periode_type ADD CONSTRAINT FK_EB210873F384C1CF FOREIGN KEY (periode_id) REFERENCES periode (id)');
        $this->addSql('ALTER TABLE liaison_periode_type ADD CONSTRAINT FK_EB210873ED31185 FOREIGN KEY (liaison_id) REFERENCES liaison (id)');
        $this->addSql('CREATE INDEX IDX_EB210873F384C1CF ON liaison_periode_type (periode_id)');
        $this->addSql('CREATE INDEX IDX_EB210873ED31185 ON liaison_periode_type (liaison_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE liaison_periode_type DROP FOREIGN KEY FK_EB210873F384C1CF');
        $this->addSql('ALTER TABLE liaison_periode_type DROP FOREIGN KEY FK_EB210873ED31185');
        $this->addSql('DROP INDEX IDX_EB210873F384C1CF ON liaison_periode_type');
        $this->addSql('DROP INDEX IDX_EB210873ED31185 ON liaison_periode_type');
        $this->addSql('ALTER TABLE liaison_periode_type ADD id_periode_id INT NOT NULL, ADD id_liaison_id INT NOT NULL, DROP periode_id, DROP liaison_id');
        $this->addSql('ALTER TABLE liaison_periode_type ADD CONSTRAINT FK_EB210873AB599152 FOREIGN KEY (id_liaison_id) REFERENCES liaison (id)');
        $this->addSql('ALTER TABLE liaison_periode_type ADD CONSTRAINT FK_EB210873560E4118 FOREIGN KEY (id_periode_id) REFERENCES periode (id)');
        $this->addSql('CREATE INDEX IDX_EB210873560E4118 ON liaison_periode_type (id_periode_id)');
        $this->addSql('CREATE INDEX IDX_EB210873AB599152 ON liaison_periode_type (id_liaison_id)');
    }
}
