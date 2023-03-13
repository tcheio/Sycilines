<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230306160934 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reservation_categorie (id INT AUTO_INCREMENT NOT NULL, categorie_id INT NOT NULL, reservation_id INT NOT NULL, nombre INT NOT NULL, INDEX IDX_533AB7ABBCF5E72D (categorie_id), INDEX IDX_533AB7ABB83297E7 (reservation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reservation_categorie ADD CONSTRAINT FK_533AB7ABBCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE reservation_categorie ADD CONSTRAINT FK_533AB7ABB83297E7 FOREIGN KEY (reservation_id) REFERENCES reservation (id)');
        $this->addSql('ALTER TABLE reservation_type DROP FOREIGN KEY FK_9AE79A4185542AE1');
        $this->addSql('ALTER TABLE reservation_type DROP FOREIGN KEY FK_9AE79A411BD125E3');
        $this->addSql('DROP TABLE reservation_type');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reservation_type (id INT AUTO_INCREMENT NOT NULL, id_type_id INT NOT NULL, id_reservation_id INT NOT NULL, nombre INT NOT NULL, INDEX IDX_9AE79A411BD125E3 (id_type_id), INDEX IDX_9AE79A4185542AE1 (id_reservation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE reservation_type ADD CONSTRAINT FK_9AE79A4185542AE1 FOREIGN KEY (id_reservation_id) REFERENCES reservation (id)');
        $this->addSql('ALTER TABLE reservation_type ADD CONSTRAINT FK_9AE79A411BD125E3 FOREIGN KEY (id_type_id) REFERENCES type (id)');
        $this->addSql('ALTER TABLE reservation_categorie DROP FOREIGN KEY FK_533AB7ABBCF5E72D');
        $this->addSql('ALTER TABLE reservation_categorie DROP FOREIGN KEY FK_533AB7ABB83297E7');
        $this->addSql('DROP TABLE reservation_categorie');
    }
}
