<?php

include("connexion.php");


if(isset($_POST['envoyer'])) {
    $nom = $_POST['firstname'];
    $prenom = $_POST['lastname'];
    $email = $_POST['email'];
    $numero = $_POST['phone'];
    $msg = $_POST['texte'];

    $inscrire = $base->prepare("INSERT into user (firstname, lastname, email, phone, texte) VALUES (?, ?, ?, ?, ?)");

    $inscrire->execute(
        array(
            "firstname" => $nom, 
            "lastname" =>$prenom, 
            "email" =>$email, 
            "phone" =>$numero, 
            "texte" =>$msg
            )
    );
    $reponse = $inscrire->fetchAll(PDO::FETCH_ASSOC);
    var_dump($reponse);
}
    







/*if(isset($_POST['envoyer'])) {

    $nom = $_POST['firstname'];
    $prenom = $_POST['lastname'];
    $email = $_POST['email'];
    $numero = $_POST['phone'];
    $msg = $_POST['texte'];

    $sql = ("INSERT INTO users(firstname, lastname, email, phone, texte) VALUES (:firstname, :lastname, :email, :phone, :texte)");
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':firstname', $nom);
    $stmt->bindParam(':lastname', $nom);
    $stmt->bindParam(':email', $nom);
    $stmt->bindParam(':phone', $nom);
    $stmt->bindParam(':texte', $nom);
        $stmt->execute();


}*/




        
        

        
    

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   

    <h1 class="titre_contact">Formulaire de contact</h1>

    <div class="formulaire">
      <form action="contact.php" method="POST">
        <label for="text">Nom</label>
        <input type="text" name="firstname" placeholder="Votre nom..">

        <label for="text">Prénom</label>
        <input type="text" name="lastname" placeholder="Votre prénom..">

        <label for="email">Email</label>
        <input type="text" name="email" placeholder="Votre email..">

        <label for="phone">Téléphone</label>
        <input type="text" name="phone" placeholder="Votre numéro..">

        <label for="message">Message</label>
        <input type="text" name="texte" placeholder="Votre message..">
    
        <input type="submit" value="Envoyer">
      </form>
    </div>

</body>
</html>