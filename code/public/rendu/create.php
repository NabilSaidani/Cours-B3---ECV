<?php
require_once 'fonction.ini.php';
$connexion = connexion();

if(isset($_POST)){
    if(isset($_POST['nom']) && !empty($_POST['nom'])
        && isset($_POST['prenom']) && !empty($_POST['prenom'])
        && isset($_POST['age']) && !empty($_POST['age'])
        && isset($_POST['nationalite']) && !empty($_POST['nationalite'])
        && isset($_POST['poste']) && !empty($_POST['poste'])){

            $sql = "INSERT INTO `manchest` (`nom`, `prenom`, `age`, `nationalite`, `poste`) VALUES (:nom, :prenom, :age, :nationalite, :poste);";
            $query = $connexion->prepare($sql);
            $query->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
            $query->bindValue(':prenom', $_POST ['prenom'], PDO::PARAM_STR);
            $query->bindValue(':age', $_POST ['age'], PDO::PARAM_INT);
            $query->bindValue(':nationalite', $_POST ['nationalite'], PDO::PARAM_STR);
            $query->bindValue(':poste', $_POST ['poste'], PDO::PARAM_STR);
            $query->execute();
            $_SESSION['message'] = "Vous avez été ajouté avec succés dans le club";
            header('Location: read.php');
        }
    }
?>

<h1> Create </h1>

//TODO: Créer le formulaire HTML
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout de joueur</title>
    <link rel="stylesheet" href="create.css">
</head>
<body>
<form class="formulaire"  method="post">
    <div class="nom">
       <label for="nom">Nom</label>
       <input type="text" name="nom" placeholder="RASHFORD" required> 
    </div>
    <div class="prenom">
       <label for="prenom">Prénom</label>
       <input type="text" name="prenom" placeholder="Kevin" required
       > 
    </div>
    <div class="age">
        <label for="age">Age</label>
        <input type="number" name="age" placeholder="27 " required>
    </div>
    <div class="nation">
       <label for="nationalite">nationalité</label>
       <input type="text" name="nationalite" placeholder="Français" required> 
    </div>
    <div class="poste">
        <label for="poste">Poste</label>
        <select name="poste" id="poste" required>
            <option value="selectionnez">Sélectionnez votre poste</option>
            <option value="ATTAQUANT">ATTAQUANT</option>
            <option value="MILIEUX">MILEUX</option>
            <option value="DEFENSEUR">DEFENSEUR</option>
            <option value="GARDIEN">GARDIEN</option>
        </select>
    </div>   
    <button class="btn" type="submit">Soumettre</button>
</form>
<p><a href="read.php">Retour</a>
</body>
</html>
//TODO: Si formulaire soumi, alors faire la requete d'insertion
//TODO: Bonus : Gérer les erreurs / Le typages des champs / Messages de succès / Message d'Echec / Redirection

<?php
