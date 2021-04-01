<?php
declare(strict_types=1);

require_once 'Manager.php';

class InvoicesManager extends Manager{

  public function getInvoice()
  {
    $db = $this->connectDb();

    // NOTE: last 5 invoices
    try{

      $response = $db->prepare('SELECT * FROM invoices INNER JOIN companies ON companies.company_id = invoices.company_id ORDER BY invoice_id DESC LIMIT 5');
      $response->execute();

  } catch (Exception $e){
      echo $e->getMessage();
      exit();
  }
  return $response;
  
  }
}


