#   ovo je SQL skripta 


#   C:\xampp\mysql\bin\mysql -uroot < C:\Users\abikic\Documents\GitHub\EdunovaPP25\SQL\edunovapp25.sql

    drop database if exists edunovapp25;
    create database edunovapp25;
    use edunovapp25;

    create table urar (
        sifra int not null primary key auto_increment,
       ime varchar(50)not null,
        prezime  varchar(50)not null,
        oib char(11)
        
    );

 create table sat (
     vrsta varchar(50),
   materijal varchar(50),
     marka varchar (50)

 ) ;   

  create table segrt (
      sifra int not null primary key auto_increment,
     ime varchar(50) not null,
 prezime varchar(50) not null,
  oib char(11)
  );   
    
alter table urar add foreign key (segrt) references segrt(sifra);
alter table segrt add foreign key (urar) references urar(sifra);