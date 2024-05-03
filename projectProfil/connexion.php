<?php
 

    //   Tentative de connexion a la base de donnees

    function connexion() {
      
        try{
            $connect=new PDO('mysql:host=mysql8;dbname=demo','root','root');
           // echo 'connexion etabli';
        }catch(Exception $e){
        die('Am na fou dokhoul d'.$e->getMessage());
        }
       // echo 'Mach\'Allah connexion bi diar na yone!!!';
        return $connect;
    }
   //  connexion();
?>
