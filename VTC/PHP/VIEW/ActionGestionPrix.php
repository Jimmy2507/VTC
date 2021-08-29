<?php
var_dump($_POST);
$p = new tarif($_POST);
var_dump($p);
tarifManager::update($p);
header("location:?page=GestionAdmin");