<?php

namespace App\Vue;

require_once __DIR__.'/../../vendor/autoload.php';

use App\Utilitaire\Vue_Composant;
use App\Utilitaire\ImcController;


$poids= "";
$taille= "";

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $poids = $_GET['poids'];
    $taille = $_GET['taille'];

class Vue_AccueilCaseA extends Vue_Composant
{


    private string $msgErreur;

    public function __construct(string $msgErreur = "")
    {
        $this->msgErreur = $msgErreur;
    }

    function donneTexte(): string
    {


        $str = "

    <form action='get' method='post' '>
    <p>
        <label for='poids'>Votre taille en cm:</label>
        <input type='text'
        class='form-control'
        id='taille'
        name='taille'
        value=''
        placeholder='Saisir votre taille'
        aria-describedby='emailHelp'>
    </p>
</form>

    <form action='get' method='post' '>
    <p>
        <label for='poids'>Votre poids en Kg:</label>
        <input type='text'
        class='form-control'
        id='poids'
        name='poids'
        value=''
        placeholder='Saisir votre poids'
        aria-describedby='emailHelp'>
    </p>
</form>
    
    <form action='index.php' method='post'>
            <input type='hidden' name='case' value='B'>
            <button type='submit' name='action' value='versB'>
                Aller vers le calcul de la distance d'un orage 
            </button>
    </form>
</div>
        $this->msgErreur
    ";


        return $str;

    }
}
}