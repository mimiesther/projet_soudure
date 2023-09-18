<?php

try {
    // il fait quelques chose
    $base = new PDO("mysql:host=localhost;dbname=projet_soudure", "root", "");

} catch (Exception $e) {
    // s'il y a erreur, affiche moi le messsage d'erreur
    die('Connexion réussie : ' . $e->getMessage());
}

if ($base) {
    //echo "Connexion réussie";
} else{
    //echo "Connexion non réussie";
}

?>