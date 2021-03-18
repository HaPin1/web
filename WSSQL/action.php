<?php

$username= $_POST['user'];
$password= $_POST['pass'];

try{
    $db = new PDO('mysql:host=localhost;dbname=test',"root","");
}
catch(PDOException $e){
    print"erreur:" . $e->getMessage() . "<br/>";
    die;
}

$recherche=$db->prepare("SELECT pseudo,motDePasse FROM utilisateurs WHERE pseudo ='$username' AND motDePasse='$password'");
$recherche->execute();
$resultat=$recherche->fetch();
if($resultat["pseudo"]==$username && $resultat["motDePasse"]==$password){
    echo "success";
}
else{
    echo"mauvais mdp";
}





