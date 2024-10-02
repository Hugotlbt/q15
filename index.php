<?php
include_once "vendor/autoload.php";

use App\Utilitaire\Vue;
use App\Utilitaire\ImcController;
use App\Vue\Vue_AccueilCaseA;
use App\Vue\Vue_BienvenueAllerPagePrecedente;
use App\Vue\Vue_BienvenueAllerPageSuivante;

if (isset($_REQUEST["case"]))
    $case = $_REQUEST["case"];
else
    $case = "defaut";

if (isset($_REQUEST["action"]))
    $action = $_REQUEST["action"];
else
    $action = "defaut";

$Vue = new Vue();
switch ($case) {
    case "A":
    case "defaut":
        include ".\src\Controleur\caseA.php";
    $Personne = new \App\Utilitaire\ImcController($_POST["poids"],$_POST["taille"]);
    dump($Personne->calculerImc());
        break;
    case "B":
        include ".\src\Controleur\caseB.php";
        break;
}
$Vue->afficher();