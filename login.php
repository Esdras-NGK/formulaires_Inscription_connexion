<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Définit le jeu de caractères utilisé par le document -->
    <meta charset="UTF-8">
    <!-- Assure la compatibilité avec Internet Explorer -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Permet une mise en page responsive sur les appareils mobiles -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Lien vers le fichier CSS externe pour le style du site -->
    <link rel="stylesheet" href="css/style2.css">
    <!-- Titre de la page affiché dans l'onglet du navigateur -->
    <title>Login</title>
    <!-- Lien vers la bibliothèque de polices et d'icônes FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <!-- Section de fond vidéo -->
    <div class="video-background">
        <!-- Vidéo en arrière-plan avec lecture automatique, boucle et sans son -->
        <video autoplay loop muted>
            <!-- Source de la vidéo en arrière-plan -->
            <source src="video/lac-91562.mp4" type="video/mp4">
        </video>
        <!-- Conteneur du formulaire d'inscription -->
        <div class="form-container">
            <!-- Formulaire d'inscription -->
            <form action="page/traitement.php" method="POST">
                <!-- Légende du formulaire -->
                <legend>Inscrivez-vous</legend>
                <!-- Champ de saisie pour l'email -->
                <label>Email</label>
                <input type="email" name="email" placeholder="Votre mail" required><br>
                
                <!-- Champ de saisie pour le nom -->
                <label>Nom</label>
                <input type="text" name="nom" placeholder="Votre nom" required><br>
                <!-- Champ de saisie pour le prénom -->
                <label>Prénom</label><br>
                <input type="text" name="prenom" placeholder="Votre prénom" required><br>
                
                <!-- Champ de saisie pour le mot de passe -->
                <label>Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Mot de passe" required minlength="8"><br>
                
                <!-- Champ de saisie pour la confirmation du mot de passe -->
                <label>Confirmer votre mot de passe</label>
                <input type="password" id="password_confirm" name="password_confirm" placeholder="Confirmer votre mot de passe" required minlength="8"><br>
                
                <!-- Bouton de soumission du formulaire -->
                <input type="submit" value="s'inscrire">
                
                <!-- Lien vers la page de connexion pour les utilisateurs déjà inscrits -->
                <div class="mot">
                    <p>Vous avez déjà un compte ? <a href="page/connexion.php">Connectez-vous ici</a></p>       
                </div>
            </form>
        </div>
    </div>

</body>
</html>
