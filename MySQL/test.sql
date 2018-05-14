show engines;
create database restaurant;
use restaurant;
create table serveur ( nom varchar(20), capacite integer);
desc serveur;
drop table serveur;
desc serveur;

create table serveur (id integer primary key auto_increment);
drop table serveur;
create table serveur (id integer primary key auto_increment, nom varchar(20), capacite integer);
insert into serveur values (null, "nom", 12);
insert into serveur values (null, "pierre", 20);
select*from serveur;

select* from serveur where serveur=2;
select count(*);
select nom from serveur;
select count(*) from serveur where capacite<10;
drop table ID;
select* from serveur where capacite>10;

update serveur set capacite=8;







