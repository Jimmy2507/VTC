<?php
if(isset($_SESSION["AMVTC_utilisateur"])){
    $reserv = new Reservation($_POST);
    $reserv->setIdUser($_SESSION["AMVTC_utilisateur"]->getIdUser());
    $reserv->setTerminer(0);
    var_dump($_POST);
    var_dump($reserv);
    reservationManager::add($reserv);
    header("location:?page=default");    
}
