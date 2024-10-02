<?php

namespace App\Vue;

use App\Utilitaire\Vue_Composant;

class Vue_AccueilCaseB extends Vue_Composant
{
    private string $msgErreur;
    public function __construct(string $msgErreur ="")
    {
        $this->msgErreur=$msgErreur;
    }

    function donneTexte(): string
    {
        $str= "

    
    <form action='get' method='post' '>
    <p>
        <label for='temps'>Entrée un temps en seconde</label>
        <input type='text'
        class='form-control'
        id='temps'
        name='temps'
        value=''
        placeholder='Saisir votre temps'
        aria-describedby='emailHelp'>
    </p>
</form>


    
      <form action='index.php' method='post'>
            <input type='hidden' name='case' value='A'>
            <button type='submit' name='action' value='versA'>
                Aller vers le calcul de l'imc
            </button>
    </form>
</div>
        $this->msgErreur
    ";
        return $str ;
    }
}