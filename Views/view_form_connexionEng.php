<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>ConnexionEng</title>
  <link rel="stylesheet" href="css/connexion.css">
  <link href="https://fonts.cdnfonts.com/css/rancho" rel="stylesheet">
</head>

<body>
    


  <header> <div class="head"> <img src="img/LoupNoir.png" alt="Logo BDE" class="loupBde"></div> </header>
  
   <!--FORMULAIRE-->

   <div class="formulaire"> 

    <div class ="container">
    <form method="post" action='?controller=connexion&action=login'id="form">
         
        <p class="titre"> BDE Connexion  </p>
        <input class="inpId" type='text'  name='idf' placeholder="Enter your Student ID" id="inpNumeroEtudiant"> <br>
        <input class="inpMdp" type='password' name = 'mdp' placeholder=" Enter your Password "> <br>
        <input class="seConnecter"  type="submit" value="Log in"><br>
        <p>You don't have an account ?</p>
        <a href="#" class="creeCompte"> Create an account </a><br>
        <br><p>You forget your password ?</p>
        <a href="#" class="mtpOublie"> Reset password </a><br>
        <br><a href="#" class="inviter">Log in as guest</a><br>
        <a href="?controller=connexion&action=seconnecter"><img src="img/FR.png" class="uk" alt="French Flag"></a>
        <p id="erreur"></p>
    </form>
    <?php if ($erreur) {echo "</br></br><div style=\"color:red; display: flex; justify-content: center;align-items: flex end;\"'>Identifiant et/ou mot de passe incorrect</div>";}?>

    <!-- OMBRES -->

<div class=" carre ombre1"></div>
<div class=" carre ombre2"></div>
<div class=" carre ombre3"></div>

</div>
</div>

<footer><img src="img/IUT.png" alt="LOGO IUT" class="iut"></footer>


<script src="js/connexion.js"> </script>
  </body>
</html>