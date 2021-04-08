<?php

require_once('Manager.php');

class LoginManager extends Manager{

public function signUp($userName,$password){
      $db=$this->connectDb();

      try{
            $response=$db->prepare(
            "INSERT INTO login (username, password)
            VALUES(:userName, :passWord)");
            $response->execute([
                  'userName'=> $userName,
                  'passWord'=>$password
            ]);
            return $response;
      }catch(Exception $e){
            echo $e->getMessage();
             exit();       
      }
}

public function signIn(){
      $db=$this->connectDb();
      try{
            $response=$db->prepare("
            ");
            $response->execute();
            return $response;
      }catch(Exception $e){
            echo $e->getMessage();
            exit();
      }
}

}

