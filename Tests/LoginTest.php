<?php
if ($_SERVER["DOCUMENT_ROOT"] == "C:/xampp/htdocs") {

    include($_SERVER["DOCUMENT_ROOT"] . '/cse-216-project/DAO/ItemDAO.php');
    include($_SERVER["DOCUMENT_ROOT"] . '/cse-216-project/Controller/Action.php');
} else if ($_SERVER["DOCUMENT_ROOT"] == "D:\\home\\site\\wwwroot") {
    include($_SERVER["DOCUMENT_ROOT"] . '\\DAO\\ItemDAO.php');
    include($_SERVER["DOCUMENT_ROOT"] . '\\Controller\\Action.php');
}
class LoginTest extends PHPUnit_Framework_TestCase  {
    
    private $username=null;
    private $password=null;
    private $dao= null;
    
    // We want to test for when the user does not enter enough information.
    public function testInsufficientData(){
        $dao = new InventoryDAO();
        $this->assertTrue($dao->checkPasswd($this->username, $this->password) == false);       
    }
    
        // We want to test for when the user enters valid account information.
    public function testValidLogin(){
    $dao = new InventoryDAO();
    $this->username="Bob";
    $this->password="password";
    $this->assertNotNull($this->username);
    $this->assertNotNull($this->password);
    $this->assertTrue($dao->checkPasswd($this->username, $this->password) !== false);
    }
    
     // We want to test for when the user enters invalid account information.
    public function testInvalidLogin(){
    $dao = new InventoryDAO();
    $this->username="12345";
    $this->password="Jchang";
    $this->assertNotNull($this->username);
    $this->assertNotNull($this->password);
    $this->assertTrue($dao->checkPasswd($this->username, $this->password) == false);
   
    
    
    
    }
       
    
}


?>

