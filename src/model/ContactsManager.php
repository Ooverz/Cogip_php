 <?php


require_once('Manager.php');

class ContactsManager extends Manager{

  // NOTE:display last 5 contact

  public function getContacts(){
    $db = $this->connectDb();

    try{
      $response = $db->prepare('SELECT * FROM employees
        JOIN companies on
        employees.employee_id=companies.company_id
        ORDER by employee_id DESC limit 5');
      $response->execute();
    }catch (Exception $e){
      echo $e->getMessage();
      exit();
    }
    return $response;
  }

// NOTE:display contact details

  public function displayContacts(){
    $db = $this->connectDb();

    try{
      $response = $db->prepare('SELECT first_name, last_name,
        email, company_name
        FROM employees JOIN companies
         on employees.employee_id=companies.company_id');

      $response->execute();
    }catch (Exception $e){
      echo $e->getMessage();
      exit();
    }
    return $response;
  }

  public function invoiceDetails(){
    $db = $this->connectDb();

    try{
      $response = $db->prepare("SELECT *
        FROM invoices INNER JOIN companies
        ON companies.company_id = invoices.company_id
        INNER JOIN type_of_company
        ON type_of_company.type_id=companies.type_id");
      $response->execute();
    }catch (Exception $e){
      echo $e->getMessage();
      exit();
    }
    return $response;
  }

}
