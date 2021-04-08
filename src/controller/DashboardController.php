<?php


require_once('./Model/CompaniesManager.php');
require_once('./Model/InvoicesManager.php');
require_once('./Model/ContactsManager.php');

class DashboardController
{

  public function render()
  { 

    $invoices = new InvoicesManager();
    if (isset($_POST['invoice'])) {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $invoices->addInvoice(
          $_POST['invoice_number'],
          $_POST['invoice_date'],
          $_POST['employee_id'],
          $_POST['company_id']
        );
      }
    }
    $contacts = new ContactsManager();
    if (isset($_POST['contact'])) {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $contacts->addContact(
          $_POST['first_name'],
          $_POST['last_name'],
          $_POST['email'],
          $_POST['company_id']
        );
      }
    }
    
    $companies = new CompaniesManager();
    if(isset($_POST['company'])){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $companies->addCompany(
          $_POST['company_name'],
          $_POST['country'],
          $_POST['type_id'],
          $_POST['VAT_number']
        );
      }
    }
    



    require_once('./view/Dashboard.php');
  }
}
