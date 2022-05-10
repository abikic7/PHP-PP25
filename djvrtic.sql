#   ovo je SQL skripta 


#   C:\xampp\mysql\bin\mysql -uroot < C:\Users\abikic\Documents\GitHub\EdunovaPP25\SQL\edunovapp25.sql

    drop database if exists edunovapp25;
    create database edunovapp25;
    use edunovapp25;

    create table vrticodgojiteljica (
        ime   varchar(50) not null,
        prezime   varchar(50) not null,
        oib char(11)
        
    );

 create table dijete (
     ime varchar(50)not null,
   prezime varchar(50)not null,
     oib char (11)

 ) ;    

    
