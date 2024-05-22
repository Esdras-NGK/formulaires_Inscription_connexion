<?php
// Récupération des valeurs saisies dans le formulaire de réinitialisation de mot de passe
$mail = $_POST['email'];
$mdp = $_POST['password'];
$Cmdp = $_POST['password_confirm'];

// Vérification de la correspondance des mots de passe
if ($mdp == $Cmdp) {
    // Connexion à la base de données
    $user = 'root';
    $password = 'Root';
    $db = 'formulaires';
    $host = 'localhost';

    $connexion = mysqli_connect($host, $user, $password, $db);

    // Vérification de la réussite de la connexion
    if (!$connexion) {
        // Affichage d'un message d'erreur en cas d'échec de connexion
        die("La connexion a échoué : " . mysqli_connect_error());
    }

    // Vérification de l'existence de l'utilisateur avec cette adresse e-mail dans la base de données
    $requete = "SELECT * FROM user WHERE mail = '$mail'";
    $resultat = mysqli_query($connexion, $requete);

    // Vérification de la réussite de la requête
    if (!$resultat) {
        // Affichage d'un message d'erreur en cas d'échec de la requête
        die("La requête a échoué : " . mysqli_error($connexion));
    }

    // Si l'utilisateur existe dans la base de données, mettre à jour son mot de passe
    if (mysqli_num_rows($resultat) > 0) {
        // Mise à jour du mot de passe dans la base de données
        $requete = "UPDATE user SET mdp = '$mdp' WHERE mail = '$mail'";
        $resultat = mysqli_query($connexion, $requete);

        // Vérification de la réussite de la mise à jour
        if (!$resultat) {
            // Affichage d'un message d'erreur en cas d'échec de la mise à jour
            die("La requête a échoué : " . mysqli_error($connexion));
        }

        // Affichage d'un message de succès
        echo "Le mot de passe a été réinitialisé avec succès.";
    } else {
        // L'utilisateur n'existe pas dans la base de données
        echo "Aucun utilisateur avec cette adresse e-mail n'a été trouvé.";
    }

    // Fermeture de la connexion à la base de données
    mysqli_close($connexion);
} else {
    // Les mots de passe ne correspondent pas
    echo "Les mots de passe ne correspondent pas.";
}
?>
