create database magasin;
use magasin;
create table articles (id integer primary key auto_increment, Quantite varchar (20), Disponibilite varchar (20), Prix integer);
desc articles;
drop table articles;

create table article
	(id integer primary key auto_increment,
    nom varchar (20), id_categorie int) ;
    
alter table article add constraint 
fk_id_categorie  foreign key (id_categorie)
references categorie (id);

show tables;
desc article;
select*from categorie;
insert into article values (null, "gant", 1);
insert into article values (null, "ballon", 1);
insert into article values (null, "casquette", 3);
insert into article values (null, "chaussette",2);
insert into article values (null, "chaussure",2);
insert into article values (null, "short",3);
insert into article values (null, "t shirt",1);
insert into article values (null,"pantalon",3);
desc article;

drop table article;

create table categorie
(id integer primary key auto_increment,
nom varchar (30));

desc categorie;

insert into categorie values (null, "foot");
desc categorie;
insert into categorie values (null, "rugby");
insert into categorie values (null, "tennis");
desc categorie;

select*from article where id=2;

update article set nom="ballon ovale" where nom="ballon";
