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
create table resultat (id integer primary key auto_increment, nom varchar (20), score int, id_rencontre varchar);
create table jouer (id_rencontre int, id_joueur int, primary key (id_rencontre,id_joueur));


alter table joueur add constraint fk_id_equipe foreign key (id_equipe) references equipe(id);
alter table joueur add constraint fk_id_poste foreign key (id_poste) references poste(id);
alter table poste add constraint fk_id_categorie foreign key (id_categorie) references categorie(id);
alter table jouer add constraint fk_id_joueur foreign key (id_joueur) references joueur(id);
alter table jouer add constraint fk_id_rencontre foreign key (id_rencontre) references rencontre(id);


### DONNEES

insert into joueur values (null, "Michel", 1, centre);
insert into joueur values (null, "Michel", 1, centre);
insert into joueur values (null, "Michel", 1, centre);
insert into joueur values (null, "Michel", 1, centre);
insert into joueur values (null, "Michel", 1, centre);
insert into joueur values (null, "Michel", 1, centre);
insert into joueur values (null, "Michel", 1, centre);
insert into joueur values (null, "Michel", 1, centre);
insert into joueur values (null, "Michel", 1, centre);
insert into joueur values (null, "Michel", 1, centre);
insert into joueur values (null, "Michel", 1, centre);
insert into joueur values (null, "Michel", 1, centre);
insert into joueur values (null, "Michel", 1, centre);
insert into joueur values (null, "Michel", 1, centre);