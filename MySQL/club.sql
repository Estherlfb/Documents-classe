### STRUCTURE
create database matche;
use matche;
set autocommit=1;
set sql_safe_updates=0;

create table joueur (id integer primary key auto_increment, nom varchar (20), id_equipe int, id_poste varchar(15));
create table poste (id integer primary key auto_increment, nom varchar (20), id_categorie varchar (15));
create table categorie (id integer primary key auto_increment, nom varchar (20));
create table equipe (id integer primary key auto_increment, nom varchar (20));
create table rencontre (id integer primary key auto_increment, nom varchar (20), dates int, id_resultat int);
create table resultat (id integer primary key auto_increment, nom varchar (20), score int, id_rencontre int);
create table jouer (id_rencontre int, id_joueur int, id_poste int, primary key (id_rencontre,id_joueur,id_poste));
create table remplacer (id_rencontre int, id_joueur int, id_poste int, primary key (id_rencontre,id_joueur,id_poste));
create table execute (id_rencontre int, id_equipe int, primary key (id_rencontre,id_equipe));


alter table joueur add constraint fk_id_equipe foreign key (id_equipe) references equipe(id);
alter table joueur add constraint fk_id_poste foreign key (id_poste) references poste(id);
alter table poste add constraint fk_id_categorie foreign key (id_categorie) references categorie(id);
alter table rencontre add constraint fk_resultat foreign key (id_resultat) references resultat(id);
alter table resultat add constraint fk_rencontre foreign key (id_rencontre) references rencontre(id);
alter table jouer add constraint fk_id_joueur foreign key (id_joueur) references joueur(id);
alter table jouer add constraint fk_id_rencontre foreign key (id_rencontre) references rencontre(id);
alter table jouer add constraint fk_id_poste foreign key (id_poste) references poste(id);
alter table remplacer add constraint fk_id_joueur foreign key (id_joueur) references joueur(id);
alter table remplacer add constraint fk_id_rencontre foreign key (id_rencontre) references rencontre(id);
alter table remplacer add constraint fk_id_poste foreign key (id_poste) references poste(id);
alter table execute add constraint fk_id_equipe foreign key (id_equipe) references equipe(id);
alter table execute add constraint fk_id_rencontre foreign key (id_rencontre) references rencontre(id);


### DONNEES

insert into joueur values (null, "Colline", 1, 1);
insert into joueur values (null, "Jean", 1, 2);
insert into joueur values (null, "Jacques", 1, 3);
insert into joueur values (null, "Goldman", 1, 4);
insert into joueur values (null, "Max", 1, 5);
insert into joueur values (null, "Hervé", 1, 6);
insert into joueur values (null, "Julien", 1, 7);
insert into joueur values (null, "Michel", 2, 2);
insert into joueur values (null, "Thomas", 2, 5);
insert into joueur values (null, "Pierre", 2, 3);
insert into joueur values (null, "Elisa", 2, 4);
insert into joueur values (null, "Charles", 2, 1);
insert into joueur values (null, "Mael", 2, 7);
insert into joueur values (null, "Lucas", 2, 6);

insert into poste values (null, centre_attaquant, null);
insert into poste values (null, droit_attaquant, null);
insert into poste values (null, gauche_attaquant, null);
insert into poste values (null, centre_defense, null);
insert into poste values (null, droit_defense, null);
insert into poste values (null, gauche_defense, null);
insert into poste values (null, goal, null);

insert into equipe

insert into categorie

insert into resultat

insert into rencontre


