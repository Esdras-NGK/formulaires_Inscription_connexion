<?php







// Récupérer les valeurs saisies dans le formulaire de réinitialisation de mot de passe
$mail = $_POST['email'];
$mdp = $_POST['password'];
$Cmdp = $_POST['password_confirm'];

// Vérifier la correspondance des mots de passe
if ($mdp == $Cmdp) {
    // Se connecter à la base de données
    $user = 'root';
    $password = 'root';
    $db = 'formulaires';
    $host = 'localhost';
    $port = 3307;

    $connexion = mysqli_connect($host, $user, $password, $db, $port);

    // Vérifier si la connexion a réussi
    if (!$connexion) {
        die("La connexion a échoué : " . mysqli_connect_error());
    }

    // Vérifier si l'utilisateur avec cette adresse e-mail existe dans la base de données
    $requete = "SELECT * FROM user WHERE mail = '$mail'";
    $resultat = mysqli_query($connexion, $requete);

    if (!$resultat) {
        die("La requête a échoué : " . mysqli_error($connexion));
    }

    if (mysqli_num_rows($resultat) > 0) {
        // L'utilisateur existe, mettre à jour le mot de passe dans la base de données
        $requete = "UPDATE user SET mdp = '$mdp' WHERE mail = '$mail'";
        $resultat = mysqli_query($connexion, $requete);

        if (!$resultat) {
            die("La requête a échoué : " . mysqli_error($connexion));
        }

        echo "Le mot de passe a été réinitialisé avec succès.";
    } else {
        // L'utilisateur n'existe pas
        echo "Aucun utilisateur avec cette adresse e-mail n'a été trouvé.";
    }

    // Fermer la connexion à la base de données
    mysqli_close($connexion);
} else {
    echo "Les mots de passe ne correspondent pas.";
}








?>