<?php

    include "./PHP/outils.php";

    spl_autoload_register("chargerClasse");

    $mode=(isset($_GET['mode']))?$_GET['mode']:"";
    $routes=[
            'default'=>['PHP/VIEW/','Accueil','Accueil'],
            'PageConnexion'=>['PHP/VIEW/','PageUser','Page Connexion'],
            //Listes

            //Formulaires
            'FormConnexion'=>['PHP/VIEW/','FormConnexion','Connexion'],
            'FormInscription'=>['PHP/VIEW/','Forminscription','Connexion'],
            //Action
            'ActionConnexion'=>['PHP/VIEW/','ActionConnexion',''],
            'ActionInscription'=>['PHP/VIEW/','ActionInscription',''],

    ];    

    Parametres::init();
    DbConnect::init();

    session_start();

    if (isset($_GET['page'])){
        if(isset($routes[$_GET['page']])){
            chargerPage($routes[$_GET['page']]);
        }else{
            chargerPage($routes["404"]);

        }
    }else{
        chargerPage($routes["default"]);
    }

