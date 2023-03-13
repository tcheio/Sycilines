<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230313145150 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE liaison DROP FOREIGN KEY FK_225AC37FD406D8E');
        $this->addSql('ALTER TABLE liaison DROP FOREIGN KEY FK_225AC373AF4C4D2');
        $this->addSql('ALTER TABLE liaison DROP FOREIGN KEY FK_225AC37A9AF71D5');
        $this->addSql('DROP INDEX IDX_225AC37FD406D8E ON liaison');
        $this->addSql('DROP INDEX IDX_225AC373AF4C4D2 ON liaison');
        $this->addSql('DROP INDEX IDX_225AC37A9AF71D5 ON liaison');
        $this->addSql('ALTER TABLE liaison ADD secteur_id INT NOT NULL, ADD port_depart_id INT NOT NULL, ADD port_arrivee_id INT NOT NULL, DROP id_secteur_id, DROP id_port_depart_id, DROP id_port_arrivee_id');
        $this->addSql('ALTER TABLE liaison ADD CONSTRAINT FK_225AC379F7E4405 FOREIGN KEY (secteur_id) REFERENCES secteur (id)');
        $this->addSql('ALTER TABLE liaison ADD CONSTRAINT FK_225AC3794C9CCD3 FOREIGN KEY (port_depart_id) REFERENCES port (id)');
        $this->addSql('ALTER TABLE liaison ADD CONSTRAINT FK_225AC37141EAE06 FOREIGN KEY (port_arrivee_id) REFERENCES port (id)');
        $this->addSql('CREATE INDEX IDX_225AC379F7E4405 ON liaison (secteur_id)');
        $this->addSql('CREATE INDEX IDX_225AC3794C9CCD3 ON liaison (port_depart_id)');
        $this->addSql('CREATE INDEX IDX_225AC37141EAE06 ON liaison (port_arrivee_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE liaison DROP FOREIGN KEY FK_225AC379F7E4405');
        $this->addSql('ALTER TABLE liaison DROP FOREIGN KEY FK_225AC3794C9CCD3');
        $this->addSql('ALTER TABLE liaison DROP FOREIGN KEY FK_225AC37141EAE06');
        $this->addSql('DROP INDEX IDX_225AC379F7E4405 ON liaison');
        $this->addSql('DROP INDEX IDX_225AC3794C9CCD3 ON liaison');
        $this->addSql('DROP INDEX IDX_225AC37141EAE06 ON liaison');
        $this->addSql('ALTER TABLE liaison ADD id_secteur_id INT NOT NULL, ADD id_port_depart_id INT NOT NULL, ADD id_port_arrivee_id INT NOT NULL, DROP secteur_id, DROP port_depart_id, DROP port_arrivee_id');
        $this->addSql('ALTER TABLE liaison ADD CONSTRAINT FK_225AC37FD406D8E FOREIGN KEY (id_port_arrivee_id) REFERENCES port (id)');
        $this->addSql('ALTER TABLE liaison ADD CONSTRAINT FK_225AC373AF4C4D2 FOREIGN KEY (id_secteur_id) REFERENCES secteur (id)');
        $this->addSql('ALTER TABLE liaison ADD CONSTRAINT FK_225AC37A9AF71D5 FOREIGN KEY (id_port_depart_id) REFERENCES port (id)');
        $this->addSql('CREATE INDEX IDX_225AC37FD406D8E ON liaison (id_port_arrivee_id)');
        $this->addSql('CREATE INDEX IDX_225AC373AF4C4D2 ON liaison (id_secteur_id)');
        $this->addSql('CREATE INDEX IDX_225AC37A9AF71D5 ON liaison (id_port_depart_id)');
    }
}
