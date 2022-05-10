#   ovo je SQL skripta 

# C:\Users\anteb\OneDrive\Radna površina\pp25 vježba 1\vjezba-koja-valja\muzej.sql
#   C:\xampp\mysql\bin\mysql  C:\Users\anteb\OneDrive\Radna površina\pp25 vježba 1\vjezba-koja-valja\muzej.sql
    drop database if exists edunovapp25;
    create database edunovapp25;
    use edunovapp25;

    create table svecenik (
        sifra int not null primary key auto_increment,
       ime varchar(50) not null,
        prezime  varchar(50)not null,
        oib char(11)
        
    );

 create table nadredjeni (
    sifra int not null primary key auto_increment,
     ime varchar(50)not null,
   prezime varchar(50)not null,
     titula varchar (50)

 ) ;   

  create table posao (
     misa varchar(50),
  krstenje varchar(50),
  vjencanje varchar (50)
  );   
    
alter table svecenik add foreign key (nadredjeni) references svecenik(sifra);
alter table nadredjeni add foreign key (svecenik) references nadredjeni(sifra);