<?php
        $host = "localhost";
        $dbName = "monshop";
        $psw = "";
        $user = "root";

        try {
                $access = new PDO("mysql:host=$host;dbname=$dbName;",$user,$pwd);
                echo'succes';

        }catch(Eception $e){
                echo 'Erreur : '.$e->getMessage();
        }