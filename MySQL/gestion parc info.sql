### STRUCTURE ###
create database gestion_parc;
use gestion_parc;

create table marque (id integer primary key auto_increment, nomMarque varchar (20));

create table modele (id integer primary key auto_increment, nomModele varchar (20), id_marque int);

create table type (id integer primary key auto_increment, nomType varchar (20));

create table equipement (id integer primary key auto_increment, caractéristiques_techniques char (20));

create table fonction (id integer primary key auto_increment, nomFonction varchar (20));

create table service (id integer primary key auto_increment, nomService varchar (20));

create table utilisateur (id integer primary key auto_increment, nomUtil varchar (20), prénom varchar (20), âge int, fonction varchar (20), id_fonction int, id_service int);

create table admin (id integer primary key auto_increment, nomAdmin varchar (20), prenomAdmin varchar (20));

create table logiciel (id integer primary key auto_increment, nomLogiciel varchar (20), version int);

create table intervention (id integer primary key auto_increment, type varchar (20), temps_passé int, travail_a_faire varchar (20), solution_apportee varchar (20), suivi varchar (20), installation_logiciel bool, id_equipement int, id_logiciel int, id_admin int);

create table motif (id integer primary key auto_increment, type_immersion varchar (20));

create table subir (id_intervention int, id_motif int, primary key (id_intervention, id_motif));



alter table modele add constraint fk_id_marque foreign key (id_marque) references marque(id);
alter table equipement add constraint fk_id_type foreign key (id_type) references type(id);
alter table equipement add constraint fk_id_modele foreign key (id_modele) references modele(id);
alter table equipement add constraint fk_id_utilisateur foreign key (id_utilisateur) references utilisateur(id);
alter table utilisateur add constraint fk_id_fonction foreign key (id_fonction) references fonction(id);
alter table utilisateur add constraint fk_id_service foreign key (id_service) references service(id);
alter table intervention add constraint fk_id_equipement foreign key (id_equipement) references equipement(id);
alter table intervention add constraint fk_id_logiciel foreign key (id_logiciel) references logiciel(id);
alter table intervention add constraint fk_id_admin foreign key (id_admin) references admin(id);
alter table subir add constraint fk_id_intervention foreign key (id_intervention) references intervention(id);
alter table subir add constraint fk_id_motif foreign key (id_motif) references motif(id);

## j'ai rein exécuté + vérifier les clés étrangères dans l'ordre d'éxécution ##
