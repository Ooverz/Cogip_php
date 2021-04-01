<?php
declare(strict_types=1);

require_once 'Manager.php';

class CompaniesManager extends Manager
{

  public function getCompany(){

    // NOTE: last 5 company name

    $db = $this->connectDb();

    try {
      $response = $db->prepare("SELECT * from companies JOIN type_of_company ON type_of_company.type_id=companies.type_id ORDER BY company_id DESC limit 5");
      $response->execute();
    } catch (Exception $e) {
      echo $e->getMessage();
      exit;
    }
    return $response;
  }
}
