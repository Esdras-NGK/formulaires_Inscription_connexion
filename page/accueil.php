<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style2.css">
    <title>Login</title>
</head>
<body>

  <?php if (isset($error)) { ?>
        <div><?php echo $error; ?></div>
    <?php } 
  ?>

    <div class="video-background">
      <video autoplay loop muted>
        <source src="../video/lac-91562.mp4" type="video/mp4">
      </video>
      <div class="form-container">
        <form action="page/traitement.php" method="GET">
                <legend>Connexion reussi</legend>
        </form>
      </div>
    </div>

  
    
</body>
</html>