<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230306162038 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE liaison_periode_type (id INT AUTO_INCREMENT NOT NULL, id_periode_id INT NOT NULL, id_liaison_id INT NOT NULL, id_type_id INT NOT NULL, tarif INT NOT NULL, INDEX IDX_EB210873560E4118 (id_periode_id), INDEX IDX_EB210873AB599152 (id_liaison_id), INDEX IDX_EB2108731BD125E3 (id_type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE liaison_periode_type ADD CONSTRAINT FK_EB210873560E4118 FOREIGN KEY (id_periode_id) REFERENCES periode (id)');
        $this->addSql('ALTER TABLE liaison_periode_type ADD CONSTRAINT FK_EB210873AB599152 FOREIGN KEY (id_liaison_id) REFERENCES liaison (id)');
        $this->addSql('ALTER TABLE liaison_periode_type ADD CONSTRAINT FK_EB2108731BD125E3 FOREIGN KEY (id_type_id) REFERENCES type (id)');
        $this->addSql('ALTER TABLE tarifier DROP FOREIGN KEY FK_4DFB69261BD125E3');
        $this->addSql('ALTER TABLE tarifier DROP FOREIGN KEY FK_4DFB6926560E4118');
        $this->addSql('ALTER TABLE tarifier DROP FOREIGN KEY FK_4DFB6926AB599152');
        $this->addSql('DROP TABLE tarifier');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE tarifier (id INT AUTO_INCREMENT NOT NULL, id_periode_id INT NOT NULL, id_liaison_id INT NOT NULL, id_type_id INT NOT NULL, tarif INT NOT NULL, INDEX IDX_4DFB69261BD125E3 (id_type_id), INDEX IDX_4DFB6926560E4118 (id_periode_id), INDEX IDX_4DFB6926AB599152 (id_liaison_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE tarifier ADD CONSTRAINT FK_4DFB69261BD125E3 FOREIGN KEY (id_type_id) REFERENCES type (id)');
        $this->addSql('ALTER TABLE tarifier ADD CONSTRAINT FK_4DFB6926560E4118 FOREIGN KEY (id_periode_id) REFERENCES periode (id)');
        $this->addSql('ALTER TABLE tarifier ADD CONSTRAINT FK_4DFB6926AB599152 FOREIGN KEY (id_liaison_id) REFERENCES liaison (id)');
        $this->addSql('ALTER TABLE liaison_periode_type DROP FOREIGN KEY FK_EB210873560E4118');
        $this->addSql('ALTER TABLE liaison_periode_type DROP FOREIGN KEY FK_EB210873AB599152');
        $this->addSql('ALTER TABLE liaison_periode_type DROP FOREIGN KEY FK_EB2108731BD125E3');
        $this->addSql('DROP TABLE liaison_periode_type');
    }
}
