#   ovo je SQL skripta 


#   C:\xampp\mysql\bin\mysql -uroot < C:\Users\abikic\Documents\GitHub\EdunovaPP25\SQL\edunovapp25.sql

    drop database if exists edunovapp25;
    create database edunovapp25;
    use edunovapp25;

    create table muzejizlozba (
      sifra int not null primary key auto_increment,
        djelo   varchar(50),
        umjetnik   varchar(50),
        godina int
        
    );

 create table kustos (
   sifra int not null primary key auto_increment,
     ime varchar(50) not null,
   prezime varchar(50),
     oib char (11)

 ) ;   

  create table sponzor (
    sifra int not null primary key auto_increment,
     ime varchar(50)not null,
   cijena decimal(18,2)
  ) ;

  alter table kustos add foreign key (sponzor) references sponzor(sifra);
  alter sponzor add foreign key (kustos) references kustos(sifra);


     
    
