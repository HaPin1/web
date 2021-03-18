<?php  

$user='root';
$pass='';
$nom = 'Gandalf';

try{
    $db = new PDO('mysql:host=localhost;dbname=test',$user,$pass);
    echo "Connecxion successful<br/>";
}
catch(PDOException $e){
    print"erreur:" . $e->getMessage() . "<br/>";
    die;
}

$recherche=$db->prepare("SELECT pseudo FROM utilisateurs WHERE pseudo ='$nom'");
$recherche->execute();
if($donnees =$recherche->fetch()){
    echo 'le client existe<br/>';
    $rechercheentier=$db->prepare("SELECT id, pseudo, motDePasse, statutAdmin FROM utilisateurs WHERE pseudo ='$nom'");
    $rechercheentier->execute();
    $affiche= $rechercheentier->fetch();

    echo "id = ".$affiche["id"]." pseudo = ".$affiche["pseudo"]." Mot de Passe = ".$affiche["motDePasse"]." Statut admin = ".$affiche["statutAdmin"]."<br/>";

}
else{
    echo'cheh';
}

$alluser=$db->prepare("SELECT pseudo FROM utilisateurs ");
$alluser->execute();
$afficheall=$alluser->fetchAll();
foreach($afficheall as $afficheall){
    echo $afficheall["pseudo"]."<br/>";
}



?>