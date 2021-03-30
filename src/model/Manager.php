<?php 
declare(strict_types=1);

class Manager 
{
    private function connectDb()
    {
        try{
            $test = "test";
            $db = new PDO("mysql:host=remotemysql.com;dbname=dtBgVDs3Pl;port=3306","dtBgVDs3Pl","gemKW5z2we");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (Exception $e){
            die('Error :' .$e->getMessage());
        }
    }
}
