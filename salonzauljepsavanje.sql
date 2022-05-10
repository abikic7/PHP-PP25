#   ovo je SQL skripta 


#   C:\xampp\mysql\bin\mysql -uroot < C:\Users\abikic\Documents\GitHub\EdunovaPP25\SQL\edunovapp25.sql

    drop database if exists edunovapp25;
    create database edunovapp25;
    use edunovapp25;

    create table salondjelatnica (
        sifra int not null primary key auto_increment,
        ime   varchar(50)not null,not null
        prezime   varchar(50),
        oib varchar(char 11)
        
    );

 create table salonkorisnik (
     sifra int not null primary key auto_increment,
     ime varchar(50),not null
     prezime varchar(50)not null,
     oib char (11)

 ) ;    

     create table usluga (
         sifra int not null primary key auto_increment,
    sminkanje  varchar(50),
    pedikura varchar(50),
   
);

alter table salondjelatnica add foreign key (salonkorisnik) references salonkorisnik(sifra);
alter table salonkorisnik add foreign key (salondjelatnica) references salondjelatnica(sifra);


