<?php

    include "./PHP/outils.php";

    spl_autoload_register("chargerClasse");

    $mode=(isset($_GET['mode']))?$_GET['mode']:"";
    $routes=[
            'default'=>['PHP/VIEW/','Accueil','Accueil'],

            //Listes

            //Formulaires

            //Action

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

