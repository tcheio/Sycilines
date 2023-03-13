<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230313150143 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C8495599DED506');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955CEEAC429');
        $this->addSql('DROP INDEX IDX_42C8495599DED506 ON reservation');
        $this->addSql('DROP INDEX IDX_42C84955CEEAC429 ON reservation');
        $this->addSql('ALTER TABLE reservation ADD client_id INT NOT NULL, ADD traversee_id INT NOT NULL, DROP id_client_id, DROP id_traversee_id');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C8495519EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955ED2BB15B FOREIGN KEY (traversee_id) REFERENCES traversee (id)');
        $this->addSql('CREATE INDEX IDX_42C8495519EB6921 ON reservation (client_id)');
        $this->addSql('CREATE INDEX IDX_42C84955ED2BB15B ON reservation (traversee_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C8495519EB6921');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955ED2BB15B');
        $this->addSql('DROP INDEX IDX_42C8495519EB6921 ON reservation');
        $this->addSql('DROP INDEX IDX_42C84955ED2BB15B ON reservation');
        $this->addSql('ALTER TABLE reservation ADD id_client_id INT NOT NULL, ADD id_traversee_id INT NOT NULL, DROP client_id, DROP traversee_id');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C8495599DED506 FOREIGN KEY (id_client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955CEEAC429 FOREIGN KEY (id_traversee_id) REFERENCES traversee (id)');
        $this->addSql('CREATE INDEX IDX_42C8495599DED506 ON reservation (id_client_id)');
        $this->addSql('CREATE INDEX IDX_42C84955CEEAC429 ON reservation (id_traversee_id)');
    }
}
