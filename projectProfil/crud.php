<?php
    require_once('connect.php');
    $nom=isset($_POST['nom'])?$_POST['nom']:"";
    $prenom=isset($_POST['prenom'])?$_POST['prenom']:"";
    $referentiel=isset($_POST['referentiel'])?$_POST['referentiel']:"";
    $email=isset($_POST['email'])?$_POST['email']:"";
    $telephone=isset($_POST['number'])?$_POST['number']:"";
    $adresse=isset($_POST['adresse'])?$_POST['adresse']:"";
    $profil = isset($_POST['photo'])?$_POST['photo']:"";
   // $connect=connexion();
    $req=$db->prepare('INSERT into apprenants (Nom,Prenom,referentiel,email,telephone,adresse,profil) VALUES(?,?,?,?,?,?,?)');
    $req->execute(array($nom,$prenom,$referentiel,$email,$telephone,$adresse,$profil));
    header('location:profil.php');
    
    ?>