<?php

    include "./PHP/outils.php";

    spl_autoload_register("chargerClasse");

    $mode=(isset($_GET['mode']))?$_GET['mode']:"";
    $routes=[
            'default'=>['PHP/VIEW/','Accueil','Accueil'],
            'Profil'=>['PHP/VIEW/','Profil','Profil'],
            'PaiementReservation'=>['PHP/VIEW/','PaiementReservation','Paiement de la reservation'],
            'GestionAdmin'=>['PHP/VIEW/','GestionAdmin','Gestion Administrateur'],
            //Listes
            'ListeReservation'=>['PHP/VIEW/','ListeReservation','AMVTC/Reservation En Attente'],
            'ListeHistorique'=>['PHP/VIEW/','ListeHistoriqueReservation','Historique De Vos Reservations'],
            //Formulaires
            'FormConnexion'=>['PHP/VIEW/','FormConnexion','Connexion'],
            'FormInscription'=>['PHP/VIEW/','Forminscription','Connexion'],
            'FormCompte'=>['PHP/VIEW/','FormCompte','informations personnelles'],
            'FormGestionPrix'=>['PHP/VIEW/','FormGestionPrix','Gestion des prix'],
            //Action
            'ActionConnexion'=>['PHP/VIEW/','ActionConnexion',''],
            'ActionInscription'=>['PHP/VIEW/','ActionInscription',''],
            'ActionDeconnexion'=>['PHP/VIEW/','ActionDeconnexion',''],
            'ActionReservation'=>['PHP/VIEW/','ActionReservation',''],
            'ActionPriseEnChargeReserv'=>['PHP/VIEW/','ActionPriseEnChargeReserv',''],
            'ActionGestionPrix'=>['PHP/VIEW/','ActionGestionPrix',''],

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

