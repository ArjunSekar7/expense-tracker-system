<?php
  class EncapsuleClass
  {
    private  $host = "localhost";
    private  $userName = "root";
    private  $password = "password";
    private  $db_Name = "ExpenseTracker";
    private  $insertQuery = "insert into Registeration values(null,?,?,?,?,?)";
    private  $loginQuery = "select emailId,password,userName,userId from Registeration where emailId = ?";
    private  $forgotQuery = "select emailId from Registeration where emailId = ?";
    private  $changePassQuery = "update Registeration set password =? where emailId=?";
    private  $incomeQuery = "insert into incomeDetails values(?,?,?,?,?)";
    private  $expenseQuery = "insert into expenseDetails values(?,?,?,?,?)";
    private  $getIncome = "select incomeType,amount from incomeDetails where YEAR(getDate) = ? and MONTH(getDate) = ? and userId = ?";
    private  $incomeConfig = "select incomeType from incomeConfiguration where incomeTypeId = ? ";
    
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
   function getForgotQuery(){
      return $this->forgotQuery;
   }
   function getChangePassQuery(){
      return $this->changePassQuery;
   }
   function getIncomeQuery(){
     return $this->incomeQuery;
   }
   function getExpenseQuery(){
     return $this->expenseQuery;
   }
   function getIncome(){
     return $this->getIncome;
   }
   function getIncomeConfig(){
     return $this->incomeConfig;
   }
}

 ?>
