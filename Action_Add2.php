<!--Created the Action DISPLAY class. - Wellesley Arreza-->


<?php
session_start();

include 'Action.php';
include 'InventoryDAO.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Action_Add2 implements Action {

    public function execute($request) {
        
        
        $dao = new InventoryDAO();
        //check if login is valid
           
        $idList = $_SESSION['idList'];
        $quantityList = $_SESSION['quantityList'];
        
        $dao->update($idList,$quantityList);  
         
        $_SESSION['items'] = $dao->getList();

        header("Location: Inventory.php");   
    }

}


?>
