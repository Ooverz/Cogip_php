<?php


class Manager {

  protected function connectDb(){
    try{
      $db = new POD("mysql:host=remotemysql;dbname=dtBgVDs3Pl;port=3306","dtBgVDs3Pl","gemKW5z2we");
      $db->setAttribute(POD::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){
      die('Error : '.$e->getMessage());
    }

  }
}



 ?>
