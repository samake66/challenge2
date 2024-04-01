<?php

function messageCodePourStevenson($chaine){
    $chiffre_cle = (strlen($chaine) / 2);
    $sous_chaine = substr($chaine, 6, $chiffre_cle);
    echo $sous_chaine;
    echo "<br>";
    $new_chaine = str_replace( '@#?', ' ', $sous_chaine);
    echo $new_chaine;
    echo "<br>";
    echo strrev($new_chaine);

}
