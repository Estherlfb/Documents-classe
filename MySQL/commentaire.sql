create database Blog;
use Blog;

create table utilisateur (id integer primary key auto_increment, nom varchar (20), id_utilisateur int);

create table article (id integer primary key auto_increment, texte varchar(50), id_article int);

create table commentaire (id integer primary key auto_increment, texte varchar (50), id_commentaire int);
 show tables;

 
 alter table commentaire add constraint fk_id_commentaire foreign key (id_commentaire) references commentaire(id);
 alter table utilisateur add constraint fk_id_commentaire foreign key (id_commentaire) references commentaire(id);
 alter table utilisateur add constraint fk_id_article foreign key (id_article) references article(id);