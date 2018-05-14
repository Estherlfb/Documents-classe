create database vol;
use vol;

### STRUCTURE
create table passager (id integer primary key auto_increment, nom varchar (20), email varchar (20), numéro int, id_billet int, id_avion int);
create table destination (id integer primary key auto_increment, nom varchar (20));
create table billet (id integer primary key auto_increment, nom varchar (20), numéro int, place int);
create table personnel (id integer primary key auto_increment, nom varchar (20));
create table avion (id integer primary key auto_increment, nom varchar (20), numéro int, horaire int, id_personnel int, id_destination int);
create table appartient (id_avion int, id_billet int, primary key (id_avion,id_billet));


show tables;


alter table appartient add constraint fk_id_avion foreign key (id_avion) references avion(id);
alter table appartient add constraint fk_id_billet foreign key (id_billet) references billet(id);
alter table passager add constraint fk_id_billet1 foreign key (id_billet) references billet(id);
alter table passager add constraint fk_id_avion1 foreign key (id_avion) references avion(id);
alter table avion add constraint fk_id_personnel foreign key (id_personnel) references personnel(id);
alter table avion add constraint fk_id_destination foreign key (id_destination) references destination(id);

