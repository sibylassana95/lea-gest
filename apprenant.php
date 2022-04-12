<?php 

if (!empty($_POST))
{

  if (!empty($_POST['matricule']) && !empty($_POST['password'])&& !empty($_POST['dates']) ) {
    if($_POST['matricule']!== "411-19") {
      $errorMessage1='login incorrect';
      echo "$errorMessage1";
    }
    elseif ($_POST['password'] !=="6728") {
      $errorMessage='password incorrect';
      echo "$errorMessage";
    }
      elseif ($_POST['dates'] !=="2020-2021"&& $_POST['dates'] !=="2019-2020" && $_POST['dates'] !=="2018-2019") {
      $errorMessage='format date incorrect';
      echo "$errorMessage";
    }
    else {
     header('Location:profil.html');
      exit();
    }
  }
}
   ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Formulaire d'inscription</title>
</head>

<body>
    <div class="conteneur">
        <header>
        
       <div class="titre">
          <h1><img src="logo.png" alt="">Identifiez-vous</h1>  
  
            </div>
        </header>
        <div class="bloc">
            <div class="form">
           
          <form method="post" class="box">
            <p>Identification</p>
            <p ><input type="text" name="matricule" class="box-input"placeholder="Entrez votre marticule" required> </p>
            <p ><input type="text" name="password" class="box-input"placeholder="Mot de passe" required></p>
            <p class="annee"> Année académique <input type="text" placeholder="Ex fotmat 2019-2020" class="anneeinput" name="dates" required></p>
            <p ><input class="box-button" type="submit" value="Se connecter"> </p>
           
      </form>
      
      </div>

    </div>
</body></html>
