<?php
$serveur="localhost";
$dbname="jerry.nicolas";
$user="root";
$pass="";

$nom=$_POST["nom"];
$email=$_POST["email"];
$telephone=$_POST["telephone"];
$message=$_POST["message"];

$emailTo = "jerry.nicolas1@gmail.com";

try{
    // CONNEXION A LA BASE DE DONNEES //
    $dbconnect= new PDO("mysql:host=localhost;dbname=jerry.nicolas",$user,$pass);
    $dbconnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //ON INSERE LES DONNEES RECUES //
    $sth = $dbconnect->prepare("
    INSERT INTO contact(nom, email, telephone, message)
    VALUES(:nom, :email, :telephone, :message)");
    $sth->bindParam(':nom',$nom);
    $sth->bindParam(':email',$email);
    $sth->bindParam(':telephone',$telephone);
    $sth->bindParam(':message',$message);
    
    $sth->execute();

    // ON ENVOI L'UTILISATEUR VERS LA PAGE DE CONFIRMATION //

    header("Location:form-merci.html");
    $headers = "From: $nom $email <$email>\r\nReply-To: $email";
    mail($emailTo, "Un message de votre site", $message, $headers);

}

catch(PDOException $e){
    echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
}

?>