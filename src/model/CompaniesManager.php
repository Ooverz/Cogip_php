<?php


require_once('Manager.php');

class CompaniesManager extends Manager
{

  public function getCompany(){

    // NOTE: last 5 company name

    $db = $this->connectDb();

    try {
      $response = $db->prepare("SELECT * from companies
        JOIN type_of_company
        ON type_of_company.type_id=companies.type_id
        ORDER BY company_id DESC limit 5");
      $response->execute();
    } catch (Exception $e) {
      echo $e->getMessage();
      exit;
    }
    return $response;
  }

  public function getClients(){

    // NOTE: last 5 company name

    $db = $this->connectDb();

    try {
      $response = $db->prepare("SELECT * from companies
        JOIN type_of_company ON
         type_of_company.type_id=companies.type_id
         WHERE company_type = 'client'");
      $response->execute();
    } catch (Exception $e) {
      echo $e->getMessage();
      exit;
    }
    return $response;
  }

  public function getProviders(){

    // NOTE: last 5 company name

    $db = $this->connectDb();

    try {
      $response = $db->prepare("SELECT * from companies
        JOIN type_of_company ON
         type_of_company.type_id=companies.type_id
         WHERE company_type = 'provider'");
      $response->execute();
    } catch (Exception $e) {
      echo $e->getMessage();
      exit;
    }
    return $response;
  }

  public function contactDetails(){

    // NOTE: last 5 company name

    $db = $this->connectDb();

    try {
      $response = $db->prepare("SELECT * FROM employees
        INNER JOIN invoices
        ON employees.employee_id=invoices.invoice_id");
      $response->execute();
    } catch (Exception $e) {
      echo $e->getMessage();
      exit;
    }
    return $response;
  }

  public function invoiceDetails(){

    // NOTE: last 5 company name

    $db = $this->connectDb();

    try {
      $response = $db->prepare("SELECT * FROM employees
        INNER JOIN invoices
        ON employees.employee_id=invoices.invoice_id");
      $response->execute();
    } catch (Exception $e) {
      echo $e->getMessage();
      exit;
    }
    return $response;
  }

}
