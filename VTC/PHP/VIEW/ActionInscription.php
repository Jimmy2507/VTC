<?php
$_POST["idRole"] = 2;
var_dump($_POST);
    //recherche si l'adresse mail existe deja
    $uti =userManager::findByMail($_POST['mailUser']);
    if ($uti == false)
    { 
        $u = new User($_POST);
        var_dump($u);
        //encodage du mot de passe
        $u->setMdpUser(crypter($u->getMdpUser()));
       userManager::add($u);
    }else{
        echo "Le pseudo existe deja";
    }
// header("location:?page=FormConnexion");