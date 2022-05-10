#   ovo je SQL skripta 

# C:\Users\anteb\OneDrive\Radna povrsina\pp25 vjezba 1\ordinacija.sql
#   C:\xampp\mysql\bin\mysql -uroot < C:\Users\abikic\Documents\GitHub\EdunovaPP25\SQL\edunovapp25.sql

    drop database if exists edunovapp25;
    create database edunovapp25;
    use edunovapp25;

    create table doktor (
        sifra int not null primary key auto_increment,
       ime varchar(50) not null,
        prezime  varchar(50) not null,
        sprema varchar(50)
        
    );

 create table pacijent (
     sifra int not null primary key auto_increment,
     ime varchar(50)not null,
   prezime varchar(50)not null,
     bolest varchar (50)

 ) ;   

  create table medsestra (
      sifra int not null primary key auto_increment,
     ime varchar(50)not null,
 prezime varchar(50)not null,
  oib char (11)
  );   
   
alter table doktor add foreign key (pacijent) references pacijent(sifra);
alter table doktor add foreign key (medsestra) references medsestra(sifra);

alter table pacijent add foreign key (doktor) references doktor(sifra);
alter table pacijent add foreign key (medsestra) references medsestra(sifra);

alter table medsestra add foreign key (doktor) references doktor(sifra);
alter table medsestra add foreign key (pacijent) references pacijent(sifra);
    
