<?php
$uti = UserManager::findByMail($_POST['mailUser']);
if ($uti != false)
{
    if (crypter($_POST['mdpUser']) == $uti->getMdpUser())
    {
        $_SESSION['VTC_utilisateur']=$uti;
        header("location:?page=PageConnexion");
    }
    else
    {
        echo 'le mot de passe est incorrect';
        header("refresh:1;url=?page=FormConnexion");
    }
}else
{
    echo "L'adresse mail n'existe pas.";
    header("refresh:1;url=?page=FormConnexion");
}