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
      $response = $db->prepare("SELECT * FROM employees
        INNER JOIN companies on
        employees.employee_id=companies.company_id
        INNER JOIN invoices ON
        invoices.invoice_id=employees.employee_id");

      $response->execute();
    }catch (Exception $e){
      echo $e->getMessage();
      exit();
    }
    return $response;
  }

  public function invoiceDetails($invoiceId){
    $db = $this->connectDb();

    try{
      $response = $db->prepare("SELECT *
        FROM invoices INNER JOIN companies
        ON companies.company_id = invoices.company_id
        INNER JOIN type_of_company
        ON type_of_company.type_id=companies.type_id
        INNER JOIN employees ON employees.employee_id=
        invoices.invoice_id
        WHERE invoice_id = :invoice_id");
      $response->execute(['invoice_id' => $invoiceId]);
    }catch (Exception $e){
      echo $e->getMessage();
      exit();
    }
    return $response;
  }

  // NOTE: set company for the contact person which it will be in the controller
  public function addContact($firstName, $lastName, $email, $companyId){
    $db=$this->connectDb();

    try{
      $response = $db->prepare("INSERT INTO employees 
      (first_name, last_name, email, company_id) 
      VALUES (:firstName, :lastName, :email, :companyId) ");
      $response->execute(
        [ 'firstName'=>$firstName,
          'lastName'=>$lastName,
          'email'=>$email,
          'companyId'=>$companyId
        ]
      );
    }catch(Exception $e){
      echo $e->getMessage();
      exit();
    }
  }

  public function getAllOfCompanies(){
    $db=$this->connectDb();

    try{
      $response=$db->prepare("SELECT * from companies c INNER JOIN 
      employees e ON  c.company_id=e.company_id");
      $response->execute();
      return $response;
    }catch(Exception $e){
      echo $e->getMessage();
      exit();
    }
  }

    # delete contacts
public function deleteContact()
{
$db = $this->connectDb();
try{
      $id=$_POST['deleteId'];
        $response = $db->prepare("DELETE FROM employees
          where employee_id= $id");
        $response->execute();
    } catch (Exception $e){
        echo $e->getMessage();
        exit();
    }
    return $response;
  }

}
