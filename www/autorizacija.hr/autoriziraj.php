<?php

if(!isset($_POST['email']) 
    || !isset($_POST['password'])){
        header('location: index.php');
        exit;
    }


if(
    
    ($_POST['email']==='edunova@edunova.hr' && 
    $_POST['password']==='e')
    
    || 

    ($_POST['email']==='edunova1@edunova.hr' && 
    $_POST['password']==='e')
    
    || 

    ($_POST['email']==='edunova2@edunova.hr' && 
    $_POST['password']==='e')
    
    || 

    ($_POST['email']==='edunova3@edunova.hr' && 
    $_POST['password']==='e')
    
    ||
    
    ($_POST['email']==='edunova4@edunova.hr' && 
    $_POST['password']==='e')
    
    ){
        session_start();
        $_SESSION['autoriziran']=$_POST['email'];
        header('location: zasticeno.php');
    }else{
        header('location: index.php?neuspjelo&email=' . $_POST['email']);
    }