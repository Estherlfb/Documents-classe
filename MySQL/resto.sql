#### STRUCTURE ####
create database restaurant;
use restaurant;
set autocommit=1;
set sql_safe_updates=0;

create table plat (id integer primary key auto_increment, intitule varchar (20), prix int, quantite int);

create table client(id integer primary key auto_increment, nom varchar (20), id_place int);

create table place (id integer primary key auto_increment, nom varchar (20), taille int, id_serveur int);

create table serveur (id integer primary key auto_increment, nom varchar (20), capacite int);

create table commande (id_plat int, id_client int, primary key (id_plat,id_client));



alter table commande add constraint fk_id_plat foreign key (id_plat) references plat(id);
alter table commande add constraint fk_id_client foreign key (id_client) references client (id);
alter table client add constraint fk_id_place foreign key (id_place) references place(id);
alter table place add constraint fk_id_serveur foreign key (id_serveur) references serveur (id);

### DONNEES ###

show tables;

insert into plat values (null, "patate", 10,1);
insert into plat values (null, "fraise", 5,3);
insert into plat values (null, "pommes", 5, 10);
insert into plat values (null, "poire", 5, 11);
select * from plat;

insert into client values (null, "jean mi", 1);
insert into client values (null, "michel", 2);
select * from client;

insert into serveur values (null, "ben", 2);
insert into serveur values (null, "jean", 5);
insert into serveur values (null, "paul", 10);
select * from serveur;

insert into place values (null, "marcel", 10, 1);
insert into place values (null, "damien", 5,2);
insert into place values (null, "table 3", 6,null);
insert into place values (null, "table 4", 8,4);
insert into place values (null, "table 5", 9,5);
select * from place;

insert into commande values (1,2);

select * from commande;



select count(*)from place, serveur;
select * from place, serveur where place.id=2 and serveur.id=2;
select * from place, serveur where place.id=2 and id_serveur=serveur.id;
select serveur.nom from place, serveur where place.id=2 and serveur.id=2;


select place.nom,serveur.nom from place, serveur
where id_serveur=serveur.id;


# La liste des noms des serveurs s'occupant d'au moins une table
select serveur.nom, place.nom from serveur
where serveur.id in (select place.id_serveur from place 
where id.serveur = place.id);

### Exercice 1 ###
select serveur.nom, place.nom from place
inner join serveur
on place.id_serveur=place.id;

select * from place inner join serveur on place.id_serveur=serveur.id;
select * from serveur left join place on place.id_serveur=serveur.id; #yay#

### Exercice difficile###
select serveur.nom, place.nom 
from serveur
left join place
on place.id_serveur=place.id where place.id_serveur is null;

### Exercice 2 ###
select client.nom,place.nom  from client 
inner join place
on id_place=place.id;   #yay#

select client.nom,place.nom from client,place
where id_place=place.id;

### Exercice 3 ###
select serveur.id, serveur.nom, client.nom from client 
inner join serveur
on id_place=serveur.id; #yay#

select serveur.id, serveur.nom, client.nom from client, serveur
where id_place=serveur.id;

### Exercie 4 ###
select plat.intitule, client.id, client.nom from commande 
inner join client ON commande.id_client = client.id 
inner join plat on commande.id_plat = plat.id
where id.client = 2;


### Exercice 5 ###
select client.nom, serveur.nom from client 
inner join place on client.id_place = place.id
inner join serveur on place.id_serveur = serveur.id;

### Exercice 6 ###
select plat.intitule, client.id, client.nom from commande 
inner join client ON commande.id_client = client.id 
inner join plat on commande.id_plat = plat.id
where plat.id = "patate";

### Exercice 7 ###


### Exercice 8 ###
select plat.nom, serveur.nom from commande
inner join plat on commande.id_plat = plat.id
inner join serveur on commande.id_serveur = serveur.id;


### Exercie 9 ###
select serveur.nom from serveur
where serveur.id 
not in (1,1,2,3);

select client.nom from client
where client.id 
not in (select plat.id_client from plat);


(select place.id_serveur from place);

