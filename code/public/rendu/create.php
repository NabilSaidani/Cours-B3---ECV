<?php
require_once 'fonction.ini.php';
$connexion = connexion();

if(isset($_POST)){
    if(isset($_POST['nom']) && !empty($_POST['nom'])
        && isset($_POST['prenom']) && !empty($_POST['prenom'])
        && isset($_POST['age']) && !empty($_POST['age'])
        && isset($_POST['nationalite']) && !empty($_POST['nationalité'])
        && isset($_POST['poste']) && !empty($_POST['poste'])){
            $sql = "INSERT INTO `manchest` (`nom`, `prenom`, `age`, 'nationalite', 'poste') VALUES (:nom, :prenom, :age, :nationalite,:poste);";



$query = $connexion->prepare($sql);

$query->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
$query->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
$query->bindValue(':age', $_POST['age'], PDO::PARAM_INT);
$query->bindValue(':nationalite', $_POST['nationalite'], PDO::PARAM_STR);
$query->bindValue(':poste', $_POST['poste'], PDO::PARAM_STR);

$query->execute();
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
</head>
<body>
<form method="post">
    <div>
       <label for="nom">Nom</label>
       <input type="text" name="nom"> 
    </div>
    <div>
       <label for="prenom">Prénom</label>
       <input type="text" name="prenom"> 
    </div>
    <div>
        <label for="age">Age</label>
        <input type="number" name="age" id="age">
    </div>
    <div>
       <label for="nationalite">nationalité</label>
       <input type="text" name="nationalite" id="nationalite"> 
    </div>
    <div>
        <label for="poste">Poste</label>
        <select name="poste" id="poste">
            <option value="attaquant">Attaquant</option>
            <option value="milieux">milieux</option>
            <option value="défenseurs">Défenseurs</option>
            <option value="gardien">Gardien</option>
        </select>
    </div>   
    <button type="submit">Soumettre</button>
</form>
</body>
</html>
//TODO: Si formulaire soumi, alors faire la requete d'insertion
//TODO: Bonus : Gérer les erreurs / Le typages des champs / Messages de succès / Message d'Echec / Redirection

<?php
