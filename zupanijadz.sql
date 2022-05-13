/*# C:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8 < C:\Users\anteb\OneDrive\Radna površina\New folder\zupanijadz.sql\EdunovaPP25-6e5664ee896ba3cdc64f2eff4ddcf263b244ecdb\SQL\zupanija.sql
# C:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8 < C:\Users\anteb\OneDrive\Radna površina\New folder\zupanijadz.sql
# C:\Users\anteb\OneDrive\Radna površina\New folder\zupanijaopcinafirma\EdunovaPP25-6e5664ee896ba3cdc64f2eff4ddcf263b244ecdb\SQL\zupanijadz.sql


*/

drop database if exists regionalna_samouprava;
create database regionalna_samouprava default charset utf8mb4;
use regionalna_samouprava;

create table zupanija (
    sifra int not null primary key auto_increment,
    naziv varchar(50),
    zupan varchar(50)
);

create table opcina(
    sifra int not null primary key auto_increment,
    zupanija int not null,
    naziv varchar (30),
);

create table mjesto(
    sifra int not null primary key auto_increment,
    zupanija int not null,
    naziv varchar(30)
);

alter table opcina add foreign key (zupanija) references zupanija(sifra);

insert into zupanija (naziv)
values ('Osječko-baranjska ');

insert into zupanija(naziv)
values ('Splitsko-dalmatinska');

insert into zupanija (naziv,zupan)
values ('Zagrebačka','Željko Jukić');
insert into zupanija (naziv,zupan)
values ('Splitsko-dalmatinska','Blaženko Boban');
insert into zupanija (naziv,zupan)
values ('Osječko-baranjska','Ivan Anušić')

insert into opcina(zupanija,naziv)
values (1,'Općina Viškovci');
insert into opcina(zupanija,naziv)
values (1,'Općina Semeljci');
insert into opcina(zupanija,naziv)
values (1,'Općina Vuka');
insert into opcina(zupanija,naziv)
values (1,'Općina Tenja');
insert into opcina(zupanija,naziv)
values (1,'Općina Đakovo');
insert into opcina(zupanija,naziv)
values (1,'Općina Osijek');

alter table opcina add foreign key (mjesto) references mjesto(sifra);
insert into mjesto(opcina,naziv)
values(1,'Vučevci','Forkuševci');
insert into mjesto(opcina,naziv)
values(1,'Koritna','Semeljci');
insert into mjesto(opcina,naziv)
values(1,'Vuka','Hrastovac');
insert into mjesto(opcina,naziv)
values(1,'Tenja');
insert into mjesto(opcina,naziv)
values(1,'Đakovo','Kuševac');
insert into mjesto(opcina,naziv)
values(1,'Osijek','Brijest');


insert into opcina(zupanija,naziv)
values (2,'Stobreč');


insert into opcina(zupanija,naziv)
values (3,'Maksimir');
insert into opcina(zupanija,naziv)
values (3,'Trešnjevka');



