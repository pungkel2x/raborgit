<?php
require("../Database.php");
class UserModel{
    public $name;
    public $email;
    public $username;
    public $password;
    public $id;
    private $dbObj;
    private $tablename = "tbluser";

    public function __construct(){
        $this->dbObj = new Database();
    }
    public function insert(){
        $sql = "INSERT INTO $this->tablename (name, email,username,password) VALUES('$this->name','$this->email','$this->username', '$this->password')";
        $this->dbObj->execute($sql);

       
    }
    public function update($id){
        $sql = "UPDATE $this->tablename SET name = '$this->name', email = '$this->email', username = '$this->username', password = '$this->password' where id = $id";
        $this->dbObj->execute($sql);

    }
    public function delete($id){
        $sql = "DELETE FROM $this->tablename where id = $id";
        $this->dbObj->execute($sql);
  
    }
    public function readAll(){
        $sql = "SELECT * FROM $this->tablename";
        return $this->dbObj->execute($sql);
    }
    public function __destruct(){
        unset($this->dbObj);
    }
}
// $userModel = new UserModel();
// $userModel->name = "Art";
// $userModel->email = "a@y.ocm";
// $userModel->username = "art123";
// $userModel->password = "testpassword";
// $userModel->insert();
?>