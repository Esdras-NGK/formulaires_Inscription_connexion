<?php
// Récupération des valeurs saisies dans le formulaire de connexion
$mail = $_POST['email'];
$mdp = $_POST['password'];

// Informations de connexion à la base de données
$user = 'root';
$password = 'Root';
$db = 'formulaires';
$host = 'localhost';

// Connexion à la base de données
$connexion = mysqli_connect($host, $user, $password, $db);

// Vérification de la réussite de la connexion
if (!$connexion) {
    // Affichage d'un message d'erreur en cas d'échec de connexion
    die("La connexion a échoué : " . mysqli_connect_error());
}

// Requête pour vérifier les informations d'identification saisies dans le formulaire de connexion
$requete = "SELECT * FROM user WHERE mail = '$mail' AND mdp = '$mdp'";
$resultat = mysqli_query($connexion, $requete);

// Vérification de la réussite de la requête
if (!$resultat) {
    // Affichage d'un message d'erreur en cas d'échec de la requête
    die("La requête a échoué : " . mysqli_error($connexion));
}

// Si la requête renvoie un résultat, cela signifie que les informations d'identification sont valides
if (mysqli_num_rows($resultat) > 0) {
    // Affichage d'un message de succès et redirection vers la page d'accueil après un délai de 5 secondes
    echo "Connexion réussie. Vous allez être redirigé vers la page d'accueil dans 5 secondes...";
    header("refresh:5;url=accueil.php");
    exit();
} else {
    // Sinon, affichage d'un message d'erreur indiquant que les informations d'identification sont invalides
    echo "Les informations d'identification saisies sont invalides.";
}

// Fermeture de la connexion à la base de données
mysqli_close($connexion);
?>
