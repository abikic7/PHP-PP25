#  C:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8 < C:\Users\Bikan\Documents\obitelj\obitelj.sql

drop database if exists obitelj;
create database obitelj character set utf8;
use obitelj;

create table sestra (
    sifra int not null primary key auto_increment,
    intorvertno bit,
    haljina varchar (46),
    maraka decimal(18,2),
    hlace varchar (50),
    narukvica int

);

create table punac (
    sifra int not null primary key auto_increment,
    ogrlica int not null,
    gustoca decimal (14,9),
    hlace varchar(50) 
);

create table cura (
    sifra int not null primary key auto_increment,
    novcica decimal (16,5),
    gustoca decimal (14,9),
    lipa decimal (13,10),
    ogrlica int not null,
    boja_kose varchar(50),
    suknja varchar (50),
    punac int not null 
);

create table zena (
    sifra int not null primary key auto_increment,
    treci_puta datetime,
    hlace varchar (50),
    kratka_majica varchar(50),
    jmbag char(11),
    boja_ociju varchar(50),
    haljina varchar(50),
    sestra int not null 

);

create table sestra_svekar (
    sifra int not null primary key auto_increment,
    sestra int not null,
    svekar int not null
);

create table muskarac (
   sifra int not null primary key auto_increment,
    boja_ociju varchar(50),
    hlace varchar (50),
    model_naocala varchar(50),
    maraka decimal(14,5),
    zena int
);

create table mladic (
    sifra int not null primary key auto_increment,
    suknja varchar(50),
    kuna decimal(16,8),
    drugi_puta datetime,
    asocijalno bit,
    ekstroventno bit,
    dukserica varchar (50),
    muskarac int
);

create table svekar(
    sifra int not null primary key auto_increment,
    boja_ociju varchar(50),
    prstena int not null,
    dukserica varchar(50),
    lipa decimal (13,8),
    eura decimal (12,9),
    majica varchar(36)
);

alter table cura add foreign key (punac) references punac(sifra);
alter table zena add foreign key (sestra) references sestra(sifra);
alter table sestra_svekar add foreign key (sestra) references sestra(sifra);
alter table sestra_svekar add foreign key (svekar) references svekar(sifra);
alter table muskarac add foreign key (zena) references zena(sifra);
alter table mladic add foreign key (muskarac) references muskarac(sifra);

insert into muskarac (sifra,boja_ociju,hlace,model_naocala)
values (null,'zelena','kratke','polarizirane');
insert into muskarac (sifra,boja_ociju,hlace,model_naocala)
values (null,'plava','rifle','polarizirane');
insert into muskarac (sifra,boja_ociju,hlace,model_naocala)
values (null,'smeđa','šorc','polarizirane');

insert into sestra (sifra,intorvertno,haljina,narukvica)
values (null,null,'kratka',3);
insert into sestra (sifra,intorvertno,haljina,narukvica)
values (null,null,'kratka',2);
insert into sestra (sifra,intorvertno,haljina,narukvica)
values (null,null,'do_koljena',1);

insert into zena (sifra,sestra,boja_ociju,kratka_majica)
values (null,1,'plava','nike');
insert into zena (sifra,sestra,boja_ociju,kratka_majica)
values (null,3,'plava','lacoste');
insert into zena (sifra,sestra,boja_ociju,kratka_majica)
values (null,2,'smeđa','adidas');

insert into svekar (sifra,dukserica,boja_ociju)
values(null,'adidas','plava');
insert into svekar (sifra,dukserica,boja_ociju)
values(null,'nike','zelena');
insert into svekar (sifra,dukserica,boja_ociju)
values(null,'alpha','smeđa');

insert into sestra_svekar(sifra,sestra,svekar)
values(null,1,1);
insert into sestra_svekar(sifra,sestra,svekar)
values(null,2,2);
insert into sestra_svekar(sifra,sestra,svekar)
values(null,3,3);

insert into cura(sifra,gustoca,boja_kose,ogrlica)
values (null,13.65,'plava',16);
insert into cura(sifra,gustoca,boja_kose,17)
values(null,14.22,'crvena');
insert into cura(sifra,gustoca,boja_kose,18)
values(null,11.12,'crna');

update cura set gustoca=15.77 where sifra in(1,2,3);

