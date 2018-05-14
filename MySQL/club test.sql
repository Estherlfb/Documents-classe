create database matches;
use matches;
set autocommit=1;
set sql_safe_updates=0;

create table joueur (id integer primary key auto_increment, nom varchar (20), age int);
create table poste (id integer primary key auto_increment, intitule varchar (20), numero int, id_joueur varchar (15));
create table equipe (id integer primary key auto_increment, nom varchar (20), id_joueur varchar (15), id_rencontre int);
create table rencontre (id integer primary key auto_increment, date int, score1 int, score2 int);
create table selectionner (id_rencontre int, id_joueur int, id_poste int, primary key (id_rencontre,id_joueur, id_poste));


show tables; 


alter table poste add constraint fk_id_joueur foreign key (id_joueur) references joueur(id);
alter table equipe add constraint fk_id_joueur foreign key (id_joueur) references joueur(id);
alter table equipe add constraint fk_id_rencontre foreign key (id_rencontre) references rencontre(id);
alter table selectionner add constraint fk_id_joueur foreign key (id_joueur) references joueur(id);
alter table selectionner add constraint fk_id_rencontre foreign key (id_rencontre) references rencontre(id);
alter table selectionner add constraint fk_id_poste foreign key (id_poste) references poste(id);
