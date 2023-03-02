<?php
session_start();

require_once 'fonction.ini.php';
$connexion = connexion();

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = strip_tags($_GET['id']);
    // On écrit notre requête
    $sql = 'SELECT * FROM `manchest` WHERE `id`=:id';

    // On prépare la requête
    $query = $connexion->prepare($sql);

    // On attache les valeurs
    $query->bindValue(':id', $id, PDO::PARAM_INT);

    // On exécute la requête
    $query->execute();

    // On stocke le résultat dans un tableau associatif
    $joueur = $query->fetch();
}
//     if(!$joueur){
//         header('Location: read.php');
//     }
// }else{
//     header('Location: read.php');
// }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La liste des joueurs</title>

</head>
<body>
    <h1>Détails du joueur qui est nommé :  <?= $joueur['prenom'] ?></h1>
    <p>ID : <?= $joueur['id'] ?></p>
    <p>nom : <?= $joueur['nom'] ?></p>
    <p>prenom : <?= $joueur['prenom'] ?></p>
    <p>nationalite : <?= $joueur['nationalite'] ?></p>
    <p>poste : <?= $joueur['poste'] ?></p>
    <p><a href="read.php?id=<?= $joueur['id'] ?>">Retour</a>  <a href="update.php?id=<?= $joueur['id'] ?>">Modifier</a>  <a href="delete.php?id=<?= $joueur['id'] ?>">Supprimer</a></p>
</body>
</html>