#   ovo je SQL skripta 


#   C:\xampp\mysql\bin\mysql -uroot < C:\Users\abikic\Documents\GitHub\EdunovaPP25\SQL\edunovapp25.sql

    drop database if exists edunovapp25;
    create database edunovapp25;
    use edunovapp25;

    create table uzzzdjelatnik (
        ime   varchar(50) not null,
        prezime   varchar(50)not null,
        sprema char(11)
        
    );

 create table sticenik (
     pas varchar(50),
    macka varchar(50),
     riba varchar (50)

 ) ;    

     create table kavez (
    pseci  varchar(50),
    macji varchar(50),
    pticji varchar (50)
   
);

