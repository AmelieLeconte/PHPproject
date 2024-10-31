<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241014152823 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE chemin_de_traverse (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, numero INTEGER NOT NULL)');
        $this->addSql('CREATE TABLE chemin_de_traverse_member (chemin_de_traverse_id INTEGER NOT NULL, member_id INTEGER NOT NULL, PRIMARY KEY(chemin_de_traverse_id, member_id), CONSTRAINT FK_271C6B039AC70D21 FOREIGN KEY (chemin_de_traverse_id) REFERENCES chemin_de_traverse (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_271C6B037597D3FE FOREIGN KEY (member_id) REFERENCES member (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_271C6B039AC70D21 ON chemin_de_traverse_member (chemin_de_traverse_id)');
        $this->addSql('CREATE INDEX IDX_271C6B037597D3FE ON chemin_de_traverse_member (member_id)');
        $this->addSql('CREATE TABLE chemin_de_traverse_coin (chemin_de_traverse_id INTEGER NOT NULL, coin_id INTEGER NOT NULL, PRIMARY KEY(chemin_de_traverse_id, coin_id), CONSTRAINT FK_CE2A72529AC70D21 FOREIGN KEY (chemin_de_traverse_id) REFERENCES chemin_de_traverse (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_CE2A725284BBDA7 FOREIGN KEY (coin_id) REFERENCES coin (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_CE2A72529AC70D21 ON chemin_de_traverse_coin (chemin_de_traverse_id)');
        $this->addSql('CREATE INDEX IDX_CE2A725284BBDA7 ON chemin_de_traverse_coin (coin_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE chemin_de_traverse');
        $this->addSql('DROP TABLE chemin_de_traverse_member');
        $this->addSql('DROP TABLE chemin_de_traverse_coin');
    }
}
