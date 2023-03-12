<?php
require_once 'fonction.ini.php';
$connexion = connexion();

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = strip_tags($_GET['id']);
    $sql = "DELETE FROM `manchest` WHERE `id`=:id;";

    $query = $connexion->prepare($sql);

    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();

    header('Location: read.php');
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
    <form class="form" action="delete.php" method="poste">
        <input type="hidden" name="id" value="<?php echo $id;?>"/>
                      
        Are you sure to delete ?
                      
        <br />
        <div class="form-actions">
            <button type="submit" class="btn btn-danger">Yes</button>
            <a class="btn" href="index.php">No</a>
        </div>
    </form>
</body>
</html>

<!-- //todo: Recuperer l'id de l'url 
//todo: Faire la requete SQL correspondante
//todo: Bonus: mettre une confirmation de suppression avant d'exécuter la requete
//TODO: Bonus : Gérer les erreurs / Le typages des champs / Messages de succès / Message d'Echec / Redirection -->