#   ovo je SQL skripta 


#   C:\xampp\mysql\bin\mysql -uroot < C:\Users\anteb\OneDrive\Radna površina\pp25 vježba 1\vjezba-koja-valja\alter-insert\alter-insertpublic\samostan.sql
# 
    drop database if exists edunovapp25;
    create database edunovapp25;
    use edunovapp25;

    create table taxivozac (
        sifra int not null primary key auto_increment,
       ime varchar(50) not null,
        prezime  varchar(50)not null,
        oib char(11)
        
    );

 create table vozilo (
     
     marka varchar(50),
   motor varchar(50),
     boja varchar (50)

 ) ;   

  create table putnik (
      sifra int not null primary key auto_increment,
     ime varchar(50)not null,
 prezime varchar(50)not null,
  oib char (11)
  );   

  alter table taxivozac add foreign key(putnik) references putnik(sifra);
  alter table putnik add foreign key (taxivozac) references taxivozac(sifra);
    
