<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Déclaration de l'encodage de la page en UTF-8 -->
    <meta charset="UTF-8">
    <!-- Compatible avec les dernières versions d'Internet Explorer -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Permet une adaptation de la page selon la taille de l'écran -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Lien vers la feuille de style personnalisée -->
    <link rel="stylesheet" href="../css/style2.css">
    <!-- Titre de la page -->
    <title>connexion</title>
    <!-- Lien vers la bibliothèque d'icônes Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Bloc PHP pour afficher une éventuelle erreur -->
    <?php if (isset($error)) { ?>
        <div><?php echo $error; ?></div>
    <?php } ?>
    
    <!-- Conteneur de la vidéo en arrière-plan -->
    <div class="video-background">
        <!-- Vidéo en boucle, autoplay et muette -->
        <video autoplay loop muted>
            <!-- Source de la vidéo -->
            <source src="../video/mylivewallpapers.com-Evening-Sun-and-Star.mp4" type="video/mp4">
        </video>
        
        <!-- Conteneur du formulaire -->
        <div class="form-container">
            <!-- Formulaire pour récupérer le mot de passe -->
            <form action="recuperermdep.php" method="POST">
                <!-- Légende du formulaire -->
                <legend>recuperer_mot_de_passe-vous</legend>
                <!-- Champ pour saisir l'email -->
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Votre mail" required><br>
                
                <!-- Champ pour saisir le mot de passe -->
                <label>Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Mot de passe" required minlength="8">
                
                <!-- Champ pour confirmer le mot de passe -->
                <label>Confirmer votre mot de passe</label>
                <input type="password" id="password_confirm" name="password_confirm" placeholder="Confirmer votre mot de passe" required minlength="8">
                
                <!-- Bouton de soumission du formulaire -->
                <input type="submit" value="valider">

                <!-- Lien vers la page de récupération de mot de passe oublié -->
                <p>Vous avez oublié votre mot de passe <a href="mdpoublier.php">mot de passe oublié</a></p>
                
                <!-- Section pour les utilisateurs n'ayant pas de compte -->
                <div class="mot">
                    <p>Vous n'avez pas de compte ? <a href="../login.php">Inscrivez-vous ici</a></p>       
                </div>
            </form>
        </div>
    </div>
</body>
</html>
