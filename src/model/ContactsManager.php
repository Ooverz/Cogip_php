<?php
declare(strict_types=1);

require_once 'Manager.php';

class ContactsManager extends Manager{

  // NOTE:display last 5 contact

  public function getContacts(){
    $db = $this->connectDb();

    try{
      $response = $db->prepare('SELECT * FROM employees JOIN companies on employees.employee_id=companies.company_id ORDER by employee_id DESC limit 5');
      $response->execute();
    }catch (Exception $e){
      echo $e->getMessage();
      exit();
    }
    return $response;
  }
}
