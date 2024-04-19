<!DOCTYPE HTML>
<html>
<header>
     <meta charset  = "utf-8" >
     <title> Profil </title>     
    <link rel = "stylesheet" type = "text/css" href="css/style.css">
</header>
<body>
    <div class="formInscription">
        <div class="form-text"> Create Profil </div>
  <div class= "form-saisie">
    <form method="POST"  action = "crud.php" enctype="multipart/form-data">
            <span>Nom </span>
            <input type="text" name="nom" placeholder="nom"/>
            <span>Prenom </span>
            <input type="text" name="prenom" placeholder="prenom"/>
            <span>Email </span>
            <input type="text" name="email" placeholder="email"/>
            <span>Référentiel </span>
            <input type="text" name="referentiel" placeholder="referentiel"/>
            <span>Téléphone </span>
            <input type="text" name="number" placeholder="téléphone"/>
            <span>Adresse </span>
            <input type="text" name="adresse" placeholder="adresse"/>
            
          <!--  <span>Photo </span>
            <input type="file" name="photo" />
            <input type = "submit"  value="create" class="btncreate">-->
      
</form>
</div>
    </div>
</body>    
</html>


