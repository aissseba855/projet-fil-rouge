<?php
require_once("connexion.php");
$id_profil=isset($_POST['idP'])?$_POST['idP']:0;
$nom =isset($_POST['nom'])?$_POST['nom']:"";
$prenom =isset($_POST['prenom'])?$_POST['prenom']:"";
$referentiel =isset($_POST['referentiel'])?$_POST['referentiel']:"";
$email =isset($_POST['email'])?$_POST['email']:"";
$telephone =isset($_POST['number'])?$_POST['number']:"";
$adresse =isset($_POST['adresse'])?$_POST['adresse']:"";
$profil =isset($_POST['profil'])?$_POST['profil']:"";
$req=connexion()->prepare('UPDATE apprenants SET Nom=?,Prenom=?,referentiel=?,email=?,telephone=?,adresse=?,profil=? WHERE id_profil= ?');
$req->execute(array($nom,$prenom,$referentiel,$email,$telephone,$adresse,$profil,$id_profil));
echo "bonjour" + $nom;
header('location:profil.php');
?>