<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241112041631 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE classe ADD etudiant_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE classe ADD CONSTRAINT FK_8F87BF96DDEAB1A3 FOREIGN KEY (etudiant_id) REFERENCES etudiant (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_8F87BF96DDEAB1A3 ON classe (etudiant_id)');
        $this->addSql('ALTER TABLE etudiant ADD classe_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE etudiant ADD CONSTRAINT FK_717E22E38F5EA509 FOREIGN KEY (classe_id) REFERENCES classe (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_717E22E38F5EA509 ON etudiant (classe_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE classe DROP CONSTRAINT FK_8F87BF96DDEAB1A3');
        $this->addSql('DROP INDEX IDX_8F87BF96DDEAB1A3');
        $this->addSql('ALTER TABLE classe DROP etudiant_id');
        $this->addSql('ALTER TABLE etudiant DROP CONSTRAINT FK_717E22E38F5EA509');
        $this->addSql('DROP INDEX UNIQ_717E22E38F5EA509');
        $this->addSql('ALTER TABLE etudiant DROP classe_id');
    }
}