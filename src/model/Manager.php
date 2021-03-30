<?php 
declare(strict_types=1);

class Manager 
{
    protected function connectDb()
    {
        try{
            $db = new PDO("mysql:host=remotemysql.com;dbname=dtBgVDs3Pl;port=3306","dtBgVDs3Pl","gemKW5z2we");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;

        } catch (Exception $e){
            die('Error :' .$e->getMessage());
        }
    }
}