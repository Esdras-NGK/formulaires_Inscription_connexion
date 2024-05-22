<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style2.css">
    <title>connexion</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <?php if (isset($error)) { ?>
        <div><?php echo $error; ?></div>
    <?php } 
    ?>
    <div class="video-background">
      <video autoplay loop muted>
        <source src="../video/mylivewallpapers.com-Evening-Sun-and-Star.mp4" type="video/mp4">
      </video>
      <div class="form-container">
        <form action="recuperermdep.php" method="POST">
                <legend>recuperer_mot_de_passe-vous</legend>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Votre mail" required><br>
                




                <label>Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Mot de passe" required minlength="8">
                <button type="button" id="toggle-password" aria-label="Afficher le mot de passe en clair">
                  <i class="fa fa-eye"></i>
                </button>

                <label>Confirmer votre mot de passe</label>
                <input type="password" id="password_confirm" name="password_confirm" placeholder="Confirmer votre mot de passe" required minlength="8">
                <button type="button" id="toggle-password-confirm" aria-label="Afficher le mot de passe en clair">
                  <i class="fa fa-eye"></i>
                </button>

                <script>
                const togglePasswordBtn = document.querySelector('#toggle-password');
                const togglePasswordConfirmBtn = document.querySelector('#toggle-password-confirm');
                const passwordField = document.querySelector('#password');
                const passwordConfirmField = document.querySelector('#password_confirm');

                togglePasswordBtn.addEventListener('click', () => {
                  const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
                  passwordField.setAttribute('type', type);
                  togglePasswordBtn.querySelector('i.fa').classList.toggle('fa-eye-slash');
                });

                togglePasswordConfirmBtn.addEventListener('click', () => {
                  const type = passwordConfirmField.getAttribute('type') === 'password' ? 'text' : 'password';
                  passwordConfirmField.setAttribute('type', type);
                  togglePasswordConfirmBtn.querySelector('i.fa').classList.toggle('fa-eye-slash');
                });
                </script>



















                    
                
                
                
                <!-- <label>Nom</label><input type="number" name="phone" placeholder="Votre numero de telephone"> -->
                <input type="submit" value="valider">


                <p>Vous avez oubliez votre mote de passe <a href="mdpoublier.php">mot de passe oublié</a> <br> 
                </p>
                
                
                
            <div class="mot">
                <p>Vous n'avez pas de compte ? <a href="../login.php">Inscrivez-vous ici</a></p>       
            </div>
                  <!-- les champs de votre formulaire ici -->
        </form>
      </div>
    </div>

  
    
</body>
</html>