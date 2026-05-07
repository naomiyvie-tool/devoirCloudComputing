<?php
$host = "localhost";
$user = "yvie";
$password = "yvie@1234";
$dbname = "naomi";

// connexion avec mysql
$conn= new mysqli($host, $user, $password, $dbname);

// verification de la connexion 
if ($conn->connect_error){
    die("Erreur : " . $conn->error);
}
echo "CONNEXION A LA BASE DE DONNEE REUSSIE<br>";

// verification si le formulaire est envoyé
if ($_SERVER["REQUEST_METHOD"] == "POST") {

// on recupère les données avec $_POST['name']
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$date = $_POST['date'];
$email = $_POST['email'];
$password = $_POST['password'];
}

// recupération des données par la base

$sql = "INSERT INTO tsyn (nom, prenom, date, email, password) VALUES (?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql)
$stmt->bind_param(
    "sssss",
    $nom
    $prenom
    $date
    $email
    $password
);

$stmt->execute();
  // j'affiche ce que je veux
echo "enregistrement réussi<br>";
 echo "Nom : $nom <br>";
 echo "Prénom : $prenom <br>";
 echo "date de naissance : $date <br>";
 echo "Email : $email <br>";
 echo "Mot de passe : $password <br>";
 
?>