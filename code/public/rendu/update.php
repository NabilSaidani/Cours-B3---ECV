<?php
require_once 'fonction.ini.php';
$connexion = connexion();

if(isset($_POST)){
    if(isset($_POST['nom']) && !empty($_POST['nom'])
        && isset($_POST['prenom']) && !empty($_POST['prenom'])
        && isset($_POST['age']) && !empty($_POST['age'])
        && isset($_POST['nationalite']) && !empty($_POST['nationalite'])
        && isset($_POST['poste']) && !empty($_POST['poste'])
        && isset($_POST['id']) && !empty($_POST['id'])){
        $id = $_GET['id'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $age = $_POST['age'];
        $nationalite = $_POST['nationalite'];
        $poste = $_POST['poste'];
        

        $sql = "UPDATE  `manchest` SET `nom`=:nom, `prenom`=:prenom, `age`=:age, `nationalite`=:nationalite, `poste`=:poste WHERE `id`=:id;";

        $query = $connexion->prepare($sql);

        $query->bindValue(':nom', $nom, PDO::PARAM_STR);
        $query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $query->bindValue(':age', $age, PDO::PARAM_INT);
        $query->bindValue(':nationalite', $nationalite, PDO::PARAM_STR);
        $query->bindValue(':poste', $poste, PDO::PARAM_STR);
        $query->bindValue(':id', $id, PDO::PARAM_INT);

        $query->execute();

        header('Location: read.php');
        }
    }

    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = strip_tags($_GET['id']);
        $sql = "SELECT * FROM `manchest` WHERE `id`=:id;";
    
        $query = $connexion->prepare($sql);
    
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
    
        $joueur = $query->fetch();
    }
?>
 

 
<h1> Update </h1>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>update</title>
    <link rel="stylesheet" href="update.css">
</head>
<body>
    <form class="formulaire"  method="post">
    <div class="nom">
       <label for="nom">Votre nom</label>
       <input type="text" id="nom" name="nom" placeholder="RASHFORD" required value="<?= $joueur['nom'] ?>"> 
    </div>
    <div class="prenom">
       <label for="prenom">Votre prénom</label>
       <input type="text" id="prenom" name="prenom" placeholder="Kevin" required value="<?= $joueur['prenom'] ?>"
       > 
    </div>
    <div class="age">
        <label for="age">Votre âge</label>
        <input type="number" name="age" placeholder="27" required value="<?= $joueur['age'] ?>">
    </div>
        <div class="nation">
            <label for="nationalite">Votre nationalité</label>
            <input type="text" id="nationalite" name="nationalite" placeholder="Français" value="<?= $joueur['nationalite'] ?>"> 
        </div>
        <div class="poste">
            <label for="poste">Poste</label>
            <select name="poste" id="poste" required value="<?= $joueur['poste'] ?>">
                <option>Selectionner votre poste</option>
                <option>ATTAQUANT</option>
                <option>GARDIEN</option>
                <option>MILEUX</option>
                <option>DEFENSEUR</option>
            </select>
        </div>
        <div>
            <button type="submit">Sauvegarder</button> 
        </div>
        <input type="hidden" name="id" value="<?= $joueur['id'] ?>">    
    </form>
    <p><a href="read.php">Retour</a>
</body>
</html>

//Todo : Récupérer l'id depuis l'url
//TODO : Remplir le forumaire HTML avec les valeur récupérées depuis la requete correspondante
//TODO: Penser a mettre un input hidden pour l'ID
//TODO: mettre a jour le contenu avec une requete correspondante. 
//TODO: Bonus : Gérer les erreurs / Le typages des champs / Messages de succès / Message d'Echec / Redirection
