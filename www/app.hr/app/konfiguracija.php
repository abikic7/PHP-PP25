<?php

$dev=$_SERVER['SERVER_ADDR']=='127.0.0.1';

if($dev){
    return [
        'dev'=>$dev,
        'url'=>'http://app.hr/',
        'nazivApp'=>'DEV Edunova App',
        'baza'=>[
            'server'=>'localhost',
            'baza'=>'edunovapp25',
            'korisnik'=>'edunova',
            'lozinka'=>'edunova'
        ]
    ];
}else{
    // PRODUKCIJA
    return [
        'dev'=>$dev,
        'url'=>'https://predavac01.edunova.hr/',
        'nazivApp'=>'Edunova App',
        'baza'=>[
            'server'=>'localhost',
            'baza'=>'cesar_edunovapp25',
            'korisnik'=>'cesar_edunova',
            'lozinka'=>'LY)eY&MMUPS%'
        ]
    ];
}

