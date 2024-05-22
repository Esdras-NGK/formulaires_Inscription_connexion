<?php









$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['email'];
$mdp = $_POST['password'];
$Cmdp = $_POST['password_confirm'];




  

// Vérifier la correspondance des mots de passe
if ($mdp == $Cmdp) {
    // Se connecter à la base de données
    $user = 'root';
    $password = '';
    $db = 'formulaire';
    $host = 'localhost';
    // $port = 3307;

    $connexion = mysqli_connect($host, $user, $password, $db);

    // Vérifier si la connexion a réussi
    if (!$connexion)  {
        die("La connexion a échoué : " . mysqli_connect_error());
    }

    





          // Traitement du formulaire
      if ($_SERVER["REQUEST_METHOD"] == "POST") {

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
            $requete = "INSERT INTO user (nom, prenom, mail, mdp, cmdp) VALUES ('$nom', '$prenom', '$mail', '$mdp', '$cmdp' )";

            if (mysqli_query($connexion, $requete)) {
              echo "Les données ont bien été enregistrées.";
            } else {
              echo "Erreur: " . $requete . "<br>" . mysqli_error($connexion);
            }
          } else {
            echo "Les mots de passe ne correspondent pas.";
          }
        } else {
          echo "Veuillez remplir tous les champs du formulaire.";
        }
      }









    // Fermer la connexion à la base de données
    mysqli_close($connexion);
} else {
    echo "Les mots de passe ne correspondent pas.";
}





?>








