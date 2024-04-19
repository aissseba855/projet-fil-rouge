<?php
 

    //   Tentative de connexion a la base de donnees

    function connexion() {
      
        try{
            $connect=new PDO('mysql:host=localhost;dbname=profil_infos','root','');
           // echo 'connexion etabli';
        }catch(Exception $e){
        die('Am na fou dokhoul d'.$e->getMessage());
        }
       // echo 'Mach\'Allah connexion bi diar na yone!!!';
        return $connect;
    }
   //  connexion();
?>
