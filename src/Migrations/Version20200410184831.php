<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200410184831 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE type_probleme (id INT AUTO_INCREMENT NOT NULL, probleme VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE equipe ADD responsable_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE equipe ADD CONSTRAINT FK_2449BA15A4AEAFEA FOREIGN KEY (entreprise_id) REFERENCES entreprise (id)');
        $this->addSql('ALTER TABLE equipe ADD CONSTRAINT FK_2449BA1553C59D72 FOREIGN KEY (responsable_id) REFERENCES personnel (id)');
        $this->addSql('CREATE INDEX IDX_2449BA1553C59D72 ON equipe (responsable_id)');
        $this->addSql('ALTER TABLE etape ADD CONSTRAINT FK_285F75DDF347EFB FOREIGN KEY (produit_id) REFERENCES produit (id)');
        $this->addSql('ALTER TABLE identificationccp_danger ADD CONSTRAINT FK_B183DF4D4A8CA2AD FOREIGN KEY (etape_id) REFERENCES etape (id)');
        $this->addSql('ALTER TABLE matiere_utiliser ADD CONSTRAINT FK_E8FC09B1DB7D838E FOREIGN KEY (matierepremiere_id) REFERENCES matiere_premiere (id)');
        $this->addSql('ALTER TABLE matiere_utiliser ADD CONSTRAINT FK_E8FC09B14A8CA2AD FOREIGN KEY (etape_id) REFERENCES etape (id)');
        $this->addSql('ALTER TABLE personnel ADD CONSTRAINT FK_A6BCF3DEA0905086 FOREIGN KEY (poste_id) REFERENCES poste (id)');
        $this->addSql('ALTER TABLE personnel ADD CONSTRAINT FK_A6BCF3DEA4AEAFEA FOREIGN KEY (entreprise_id) REFERENCES entreprise (id)');
        $this->addSql('ALTER TABLE produir ADD CONSTRAINT FK_C0C649126D861B89 FOREIGN KEY (equipe_id) REFERENCES equipe (id)');
        $this->addSql('ALTER TABLE produir ADD CONSTRAINT FK_C0C64912F347EFB FOREIGN KEY (produit_id) REFERENCES produit (id)');
        $this->addSql('ALTER TABLE systeme_surveillance ADD responsable_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE systeme_surveillance ADD CONSTRAINT FK_9C631E48E83069C3 FOREIGN KEY (typeprobleme_id) REFERENCES type_probleme (id)');
        $this->addSql('ALTER TABLE systeme_surveillance ADD CONSTRAINT FK_9C631E4833834869 FOREIGN KEY (criteresurveille_id) REFERENCES critere_surveille (id)');
        $this->addSql('ALTER TABLE systeme_surveillance ADD CONSTRAINT FK_9C631E484A8CA2AD FOREIGN KEY (etape_id) REFERENCES etape (id)');
        $this->addSql('ALTER TABLE systeme_surveillance ADD CONSTRAINT FK_9C631E4853C59D72 FOREIGN KEY (responsable_id) REFERENCES personnel (id)');
        $this->addSql('CREATE INDEX IDX_9C631E4853C59D72 ON systeme_surveillance (responsable_id)');
        $this->addSql('ALTER TABLE travailler_personnel ADD CONSTRAINT FK_C68872451C109075 FOREIGN KEY (personnel_id) REFERENCES personnel (id)');
        $this->addSql('ALTER TABLE travailler_personnel ADD CONSTRAINT FK_C68872456D861B89 FOREIGN KEY (equipe_id) REFERENCES equipe (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE systeme_surveillance DROP FOREIGN KEY FK_9C631E48E83069C3');
        $this->addSql('DROP TABLE type_probleme');
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE equipe DROP FOREIGN KEY FK_2449BA15A4AEAFEA');
        $this->addSql('ALTER TABLE equipe DROP FOREIGN KEY FK_2449BA1553C59D72');
        $this->addSql('DROP INDEX IDX_2449BA1553C59D72 ON equipe');
        $this->addSql('ALTER TABLE equipe DROP responsable_id');
        $this->addSql('ALTER TABLE etape DROP FOREIGN KEY FK_285F75DDF347EFB');
        $this->addSql('ALTER TABLE identificationccp_danger DROP FOREIGN KEY FK_B183DF4D4A8CA2AD');
        $this->addSql('ALTER TABLE matiere_utiliser DROP FOREIGN KEY FK_E8FC09B1DB7D838E');
        $this->addSql('ALTER TABLE matiere_utiliser DROP FOREIGN KEY FK_E8FC09B14A8CA2AD');
        $this->addSql('ALTER TABLE personnel DROP FOREIGN KEY FK_A6BCF3DEA0905086');
        $this->addSql('ALTER TABLE personnel DROP FOREIGN KEY FK_A6BCF3DEA4AEAFEA');
        $this->addSql('ALTER TABLE produir DROP FOREIGN KEY FK_C0C649126D861B89');
        $this->addSql('ALTER TABLE produir DROP FOREIGN KEY FK_C0C64912F347EFB');
        $this->addSql('ALTER TABLE systeme_surveillance DROP FOREIGN KEY FK_9C631E4833834869');
        $this->addSql('ALTER TABLE systeme_surveillance DROP FOREIGN KEY FK_9C631E484A8CA2AD');
        $this->addSql('ALTER TABLE systeme_surveillance DROP FOREIGN KEY FK_9C631E4853C59D72');
        $this->addSql('DROP INDEX IDX_9C631E4853C59D72 ON systeme_surveillance');
        $this->addSql('ALTER TABLE systeme_surveillance DROP responsable_id');
        $this->addSql('ALTER TABLE travailler_personnel DROP FOREIGN KEY FK_C68872451C109075');
        $this->addSql('ALTER TABLE travailler_personnel DROP FOREIGN KEY FK_C68872456D861B89');
    }
}
