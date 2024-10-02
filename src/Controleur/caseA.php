<?php

switch ($action) {
    case "defaut":
        $Vue->addToCorps(new \App\Vue\Vue_AccueilCaseA());
        break;
    case "pageSuivante":
        $Vue->addToCorps(new \App\Vue\Vue_CaseA_PageSuivante());
        break;
    case "pageAccueil":
        $Vue->addToCorps(new \App\Vue\Vue_AccueilCaseA());
        $Vue->addToCorps(new \App\Vue\Vue_AfficherMessage("Calcul de la distance d'un orage"));
        break;
    case "versA":
        $Vue->addToCorps(new \App\Vue\Vue_AccueilCaseA());
        $Vue->addToCorps(new \App\Vue\Vue_AfficherMessage("Calcul de l'imc "));
        break;
}