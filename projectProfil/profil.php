<?php
 require_once('connect.php');
$idP = isset($_GET['id_profil'])?$_GET['id_profil']:0;
 $req=$db->query("SELECT * FROM apprenants ORDER BY id_profil DESC LIMIT 1");
 $req->execute();
 $donnees=$req->fetch(PDO::FETCH_ASSOC);
 //return($donnees);
?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Mon profil </title>
    <link rel="stylesheet" href="inscription.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href="image/logoODC.png">
</head>

<body>
    <div class="logo">

    </div>
    <div class="showProfil" style="width: 50%; height: 90%;  background-color: rgb(255,255, 255);">
        <h2 style="color:  rgb(0,0, 0); text-align: center;">Informations profil</h2>
        <div class="showProfil" style="width: 85%; height: 85%; ">
            <div>
                <img src="/image/avatar.png" alt="Avatar" class="avatar">
            </div><br><br><br><br><br>
            <div>

            </div>
            <h3>Nom: <?php echo $donnees['Nom'] ?></h3>
            <h3>Prenom: <?php echo $donnees['Prenom'] ?></h3>
            <h3>Referentiel : <?php echo $donnees['referentiel'] ?></h3>
            <h3>Email : <?php echo $donnees['email'] ?></h3>
            <h3>Téléphone : <?php echo $donnees['telephone'] ?></h3>
            <h3>Adresse : <?php echo $donnees['adresse'] ?></h3>
            <h3>Profil : <?php echo $donnees['profil'] ?></h3>
            <div class="container">
                <a href="editProfile.php?idP=<?php echo $donnees['id_profil']?>" class="btn">Editer</a>
            </div>
        </div>
    </div>
    </div>
    </div>

    </div>

</body>

</html>