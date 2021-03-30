<?php 
declare(strict_types=1);

require 'environment.php';

class Manager 
{
    protected function connectDb()
    {
        try{
            $test = "test";
            $db = new PDO("mysql:host=remotemysql.com;dbname=dtBgVDs3Pl;port=3306", $_ENV["USER"], $_ENV["PASSWORD"]);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (Exception $e){
            die('Error :' .$e->getMessage());
        }
    }
}
