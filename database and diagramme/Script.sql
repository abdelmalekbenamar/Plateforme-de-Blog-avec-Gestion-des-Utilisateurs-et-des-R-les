
use Blog;


create table Rules (
id int primary key auto_increment,
rule varchar(30) not null
);

create table Users(
id int primary key auto_increment,
username varchar(30) not null,
mail varchar(30) not null, 
pass varchar(30),
idRule int,
foreign key (idRule) references Rules(id)

);

create table Articles(
id int primary key auto_increment,
title varchar(100) not null,
image varchar(100) not null,
article varchar(5000) not null,
idUser int,
foreign key (idUser) references Users(id)

);

create table Likes(
id int primary key auto_increment,
idUser int,
idArticle int,
foreign key (idUser) references Users(id),
foreign key (idArticle) references Articles(id)
);

create table Comments(
id int primary key auto_increment,
comment varchar(500) not null,
idUser int,
idArticle int,
foreign key (idUser) references Users(id),
foreign key (idArticle) references Articles(id)
);

create table Tags(
id int primary key auto_increment,
name varchar(50) not null
);

create table toRepresent(
id int primary key auto_increment,
idTag int,
idArticle int,
foreign key (idTag) references Tags(id),
foreign key (idArticle) references Articles(id)
);