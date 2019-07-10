<?php
  class EncapsuleClass
  {
    private  $host = "localhost";
    private  $userName = "root";
    private  $password = "password";
    private  $db_Name = "ExpenseTracker";
    private  $insertQuery = "insert into Registeration values(null,?,?,?,?,?)";
    private  $loginQuery = "select emailId, password,userName from Registeration where emailId = ?";
    function getHost(){
      return $this->host;
    }
    function getUserName(){
      return $this->userName;
    }

    function getPassword(){
      return $this->password;
    }

    function getDBName(){
      return $this->db_Name;
    }
   function getInsertQuery(){
      return $this->insertQuery;
   }
   function getLoginQuery(){
      return $this->loginQuery;
 }
}

 ?>
