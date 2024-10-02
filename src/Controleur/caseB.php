<?php

switch ($action) {
    case "defaut":
        $Vue->addToCorps(new \App\Vue\Vue_AccueilCaseB());
        break;
    case "pageSuivante":
        $Vue->addToCorps(new \App\Vue\Vue_CaseB_PageSuivante());
        break;
    case "pageAccueil":
        $Vue->addToCorps(new \App\Vue\Vue_AccueilCaseB());
        $Vue->addToCorps(new \App\Vue\Vue_AfficherMessage(""));
        break;
    case "versB":
        $Vue->addToCorps(new \App\Vue\Vue_AccueilCaseB());
        $Vue->addToCorps(new \App\Vue\Vue_AfficherMessage("Calcul de la distance d'un orage"));
        break;

}