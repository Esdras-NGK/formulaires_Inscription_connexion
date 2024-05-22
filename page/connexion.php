
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Définit le jeu de caractères utilisé par le document -->
    <meta charset="UTF-8">
    <!-- Assure la compatibilité avec Internet Explorer -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Permet une mise en page responsive sur les appareils mobiles -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Lien vers le fichier CSS externe -->
    <link rel="stylesheet" href="../css/style2.css">
    <!-- Titre de la page affiché dans l'onglet du navigateur -->
    <title>connexion</title>
</head>
<body>
    <!-- Vérifie si la variable $error est définie et affiche son contenu -->
    <?php if (isset($error)) { ?>
        <div><?php echo $error; ?></div>
    <?php } ?>
    
    <!-- Section de fond vidéo -->
    <div class="video-background">
        <video autoplay loop muted>
            <!-- Source de la vidéo en arrière-plan -->
            <source src="../video/mylivewallpapers.com-Evening-Sun-and-Star.mp4" type="video/mp4">
        </video>
        <!-- Conteneur du formulaire de connexion -->
        <div class="form-container">
            <!-- Formulaire de connexion -->
            <form action="con2.php" method="POST">
                <!-- Légende du formulaire -->
                <legend>Connectez-vous</legend>
                <!-- Champ de saisie pour l'email -->
                <label>Email</label>
                <input type="email" name="email" placeholder="Votre mail" required><br>
                <!-- Champ de saisie pour le mot de passe -->
                <label>mot de passe</label>
                <input type="password" id="password" name="password" placeholder="mot de passe" required minlength="8"><br>
                <!-- Bouton de soumission du formulaire -->
                <input type="submit" value="valider">
                <!-- Lien vers la page de récupération de mot de passe -->
                <p>Vous avez oubliez votre mot de passe <a href="mdpoublier.php">mot de passe oublié</a> <br></p>
                <!-- Section pour les utilisateurs sans compte -->
                <div class="mot">
                    <p>Vous n'avez pas de compte ? <a href="../login.php">Inscrivez-vous ici</a></p>       
                </div>
            </form>
        </div>
    </div>
</body>
</html>
