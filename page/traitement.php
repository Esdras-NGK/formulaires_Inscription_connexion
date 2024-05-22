<?php
// Récupérer les données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['email'];
$mdp = $_POST['password'];
$Cmdp = $_POST['password_confirm'];

// Vérifier la correspondance des mots de passe
if ($mdp == $Cmdp) {
    // Se connecter à la base de données
    $user = 'root'; // Nom d'utilisateur de la base de données
    $password = 'Root'; // Mot de passe de la base de données
    $db = 'formulaire'; // Nom de la base de données
    $host = 'localhost'; // Hôte de la base de données

    $connexion = mysqli_connect($host, $user, $password, $db); // Établir la connexion

    // Vérifier si la connexion a réussi
    if (!$connexion)  {
        die("La connexion a échoué : " . mysqli_connect_error()); // Afficher un message d'erreur en cas d'échec
    }

    // Traitement du formulaire
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer à nouveau les données du formulaire pour s'assurer qu'elles existent
        $nom= $_POST["nom"];
        $prenom= $_POST["prenom"];
        $mail= $_POST["email"];
        $mdp= $_POST["password"];
        $cmdp= $_POST["password_confirm"];

        // Vérification des champs
        if (!empty($nom) && !empty($prenom) && !empty($mail) && !empty($mdp) && !empty($cmdp)) {
            // Vérification de la correspondance des mots de passe
            if ($mdp == $cmdp) {
                // Enregistrement des données dans la base de données
                $requete = "INSERT INTO user (nom, prenom, mail, mdp, cmdp) VALUES ('$nom', '$prenom', '$mail', '$mdp', '$cmdp')";

                // Exécuter la requête et vérifier si elle a réussi
                if (mysqli_query($connexion, $requete)) {
                    echo "Les données ont bien été enregistrées."; // Message de succès
                } else {
                    echo "Erreur: " . $requete . "<br>" . mysqli_error($connexion); // Message d'erreur en cas d'échec
                }
            } else {
                echo "Les mots de passe ne correspondent pas."; // Message d'erreur si les mots de passe ne correspondent pas
            }
        } else {
            echo "Veuillez remplir tous les champs du formulaire."; // Message d'erreur si des champs sont vides
        }
    }

    // Fermer la connexion à la base de données
    mysqli_close($connexion);
} else {
    echo "Les mots de passe ne correspondent pas."; // Message d'erreur si les mots de passe ne correspondent pas
}
?>
