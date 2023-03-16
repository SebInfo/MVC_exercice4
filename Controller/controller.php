<?php
require_once("Model/Pompier.php");

function listePompier()
{
    $pompier = new Pompier();
    if ($pompiers = $pompier->getAllPompiers()){
        require_once("Views/view.php");
    }
    else{
        require_once("Views/erreur.php");
    }
}