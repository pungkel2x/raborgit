<?php
require("Database.php");
class UserModel{
    public $name;
    public $email;
    public $username;
    public $password;
    public $id;
    private $db;
    private $tablename = "tbluser";

    public function __construct(){
        $this->db = new Database();
    }
    public function insert(){
        $sql = "INSERT INTO $this->tablename (name, email,username,password) VALUES('$this->name','$this->email','$this->username', '$this->password')";
        if($this->db->execute($sql)){
            return true;
        }else
            return false;
       
    }
    public function update($id){
        $sql = "UPDATE $this->tablename SET name = 'jeytil' where id = $id";
        if($this->db->execute($sql)){
            return true;
        }else
            return false;
    }
    public function delete($id){
        $sql = "DELETE FROM $this->tablename where id = $id";
        if($this->db->execute($sql)){
            return true;
        }else
            return false;
    }
    public function readAll(){
        $sql = "SELECT * FROM $this->tablename";
        return $this->db->execute($sql);
    }
    public function __destruct(){
        unset($this->db);
    }
}
// $userModel = new UserModel();
// $userModel->name = "Art";
// $userModel->email = "a@y.ocm";
// $userModel->username = "art123";
// $userModel->password = "testpassword";
// $userModel->insert();
?>