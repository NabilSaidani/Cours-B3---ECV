<?php
session_start();
require_once 'fonction.ini.php';
$connexion = connexion();

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = strip_tags($_GET['id']);
    $sql = "DELETE FROM `manchest` WHERE `id`=:id;";

    $query = $connexion->prepare($sql);

    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
    header('location : read.php');

    if(!$joueur){
        $_SESSION['message'] = 'Le joueur '.$id.' a bien été supprimé !';
        header('Location: read.php');
    }else{
        $_SESSION['message'] = 'invalide ';
        header('Location: read.php');
    }
}        

?>



<h1>delete</h1>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>delete</title>
    <link rel="stylesheet" href="delete.css">
    
</head>
<body>



</body>
</html>

<!-- //todo: Recuperer l'id de l'url 
//todo: Faire la requete SQL correspondante
//todo: Bonus: mettre une confirmation de suppression avant d'exécuter la requete
//TODO: Bonus : Gérer les erreurs / Le typages des champs / Messages de succès / Message d'Echec / Redirection -->