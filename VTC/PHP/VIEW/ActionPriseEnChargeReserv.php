<?php
var_dump($_POST);
$r = new reservation($_POST);
var_dump($r);
reservationManager::update($r);
header("location:?page=Profil");
