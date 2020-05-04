<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200410210352 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE systeme_surveillance ADD personnel_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE systeme_surveillance ADD CONSTRAINT FK_9C631E48E83069C3 FOREIGN KEY (typeprobleme_id) REFERENCES type_probleme (id)');
        $this->addSql('ALTER TABLE systeme_surveillance ADD CONSTRAINT FK_9C631E4833834869 FOREIGN KEY (criteresurveille_id) REFERENCES critere_surveille (id)');
        $this->addSql('ALTER TABLE systeme_surveillance ADD CONSTRAINT FK_9C631E484A8CA2AD FOREIGN KEY (etape_id) REFERENCES etape (id)');
        $this->addSql('ALTER TABLE systeme_surveillance ADD CONSTRAINT FK_9C631E4853C59D72 FOREIGN KEY (responsable_id) REFERENCES personnel (id)');
        $this->addSql('ALTER TABLE systeme_surveillance ADD CONSTRAINT FK_9C631E481C109075 FOREIGN KEY (personnel_id) REFERENCES personnel (id)');
        $this->addSql('CREATE INDEX IDX_9C631E4853C59D72 ON systeme_surveillance (responsable_id)');
        $this->addSql('CREATE INDEX IDX_9C631E481C109075 ON systeme_surveillance (personnel_id)');
        $this->addSql('ALTER TABLE equipe ADD personnel_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE equipe ADD CONSTRAINT FK_2449BA151C109075 FOREIGN KEY (personnel_id) REFERENCES personnel (id)');
        $this->addSql('CREATE INDEX IDX_2449BA151C109075 ON equipe (personnel_id)');
        $this->addSql('ALTER TABLE travailler_personnel ADD CONSTRAINT FK_C68872451C109075 FOREIGN KEY (personnel_id) REFERENCES personnel (id)');
        $this->addSql('ALTER TABLE travailler_personnel ADD CONSTRAINT FK_C68872456D861B89 FOREIGN KEY (equipe_id) REFERENCES equipe (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE equipe DROP FOREIGN KEY FK_2449BA151C109075');
        $this->addSql('DROP INDEX IDX_2449BA151C109075 ON equipe');
        $this->addSql('ALTER TABLE equipe DROP personnel_id');
        $this->addSql('ALTER TABLE systeme_surveillance DROP FOREIGN KEY FK_9C631E48E83069C3');
        $this->addSql('ALTER TABLE systeme_surveillance DROP FOREIGN KEY FK_9C631E4833834869');
        $this->addSql('ALTER TABLE systeme_surveillance DROP FOREIGN KEY FK_9C631E484A8CA2AD');
        $this->addSql('ALTER TABLE systeme_surveillance DROP FOREIGN KEY FK_9C631E4853C59D72');
        $this->addSql('ALTER TABLE systeme_surveillance DROP FOREIGN KEY FK_9C631E481C109075');
        $this->addSql('DROP INDEX IDX_9C631E4853C59D72 ON systeme_surveillance');
        $this->addSql('DROP INDEX IDX_9C631E481C109075 ON systeme_surveillance');
        $this->addSql('ALTER TABLE systeme_surveillance DROP personnel_id');
        $this->addSql('ALTER TABLE travailler_personnel DROP FOREIGN KEY FK_C68872451C109075');
        $this->addSql('ALTER TABLE travailler_personnel DROP FOREIGN KEY FK_C68872456D861B89');
    }
}
