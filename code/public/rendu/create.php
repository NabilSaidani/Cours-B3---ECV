<?php
session_start();
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
            $_SESSION['message'] = 'Bonjour '.$_POST['nom'].' '.$_POST['prenom'].'Vous avez été ajouté avec succés dans le club';

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
    
    <h1 class="title">Veulliez completer les champs en ecrivant en majuscule</h1>
    <form class="formulaire" method="post">
        <div class="nom">
            <label for="nom">Votre nom</label>
            <input type="text" id="nom" name="nom" placeholder="RASHFORD" required> 
        </div>
        <div class="prenom">
           <label for="prenom">Votre prénom</label>
           <input type="text" id="prenom" name="prenom" placeholder="Kevin" required>  
        </div>
        <div class="age">
            <label for="age">Votre âge</label>
            <input type="number" name="age" placeholder="27" required>
        </div>
        <div class="nationalite">
            <label for="nationalite">Votre nationalité</label>
            <input type="text" id="nationalite" name="nationalite" placeholder="Français" required>
        </div>   
        <div class="poste">
            <label for="poste">Poste</label>
            <select name="poste" id="poste" required>
                <option value="selectionnez">Sélectionnez votre poste</option>
                <option value="ATTAQUANT">ATTAQUANT</option>
                <option value="MILIEUX">MILEUX</option>
                <option value="DEFENSEUR">DEFENSEUR</option>
                <option value="GARDIEN">GARDIEN</option>
                <option value="ENTRAINEUR">ENTRAINEUR</option>
            </select>
        </div>
        <div class="submit">
            <button type="submit">Soumettre</button> 
        </div>     
    </form>
    <div class="retour">
       <p><a href="read.php">Retour</a> 
    </div>    
</body>
</html>
<!-- //TODO: Si formulaire soumi, alors faire la requete d'insertion
//TODO: Bonus : Gérer les erreurs / Le typages des champs / Messages de succès / Message d'Echec / Redirection -->

<?php
