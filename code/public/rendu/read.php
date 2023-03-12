<?php
require_once 'fonction.ini.php';
$connexion = connexion();

$sql = 'SELECT * FROM `manchest`';

$query = $connexion->prepare($sql);

$query->execute();

$result = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<h1>je suis connecter</h1>

//TODO : Faire la requete Select pour avoir les bonnes données
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>read</title>
    <link rel="stylesheet" href="read.css">
</head>
<body>
<h1>Liste des joueurs :</h1>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Age</th>
            <th>Nationalité</th>
            <th>Poste</th>
        </thead>
        <tbody>
        <?php
            foreach($result as $joueur){
        ?>
                <tr>
                    <td>
                        <?= $joueur['id'] ?>
                    </td>
                    <td>
                        <?= $joueur['nom'] ?>
                    </td>
                    <td>
                        <?= $joueur['prenom'] ?>
                    </td>
                    <td>
                        <?= $joueur['age'] ?>
                    </td>
                    <td>
                        <?= $joueur['nationalite'] ?>
                    </td>
                    <td>
                        <?= $joueur['poste'] ?>
                    </td>
                    <td class="link-a">
                        <a href="details.php?id=<?= $joueur['id'] ?>">Voir</a>
                        <a href="update.php?id=<?= $joueur['id'] ?>">Modifier</a>
                        <a href="delete.php?id=<?= $joueur['id'] ?>">Supprimer</a>
                    </td>
                </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
    <a class="a" href="create.php">Ajouter</a>       
</body>
</html>

<!-- //TODO : Faire le HTML avec  la boucle d'affichage des données -->

