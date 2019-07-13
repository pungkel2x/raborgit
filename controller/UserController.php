<?php
require("../model/UserModel.php");
class UserController{
    private $userModel;

    public function __construct(){
        $this->userModel = new UserModel();
    }
    public function addUser($name, $email,$username, $password){
        //perform data validation
        $this->userModel->name = $name;
        $this->userModel->email = $email;
        $this->userModel->username = $username;
        $this->userModel->password = $password;
        // if(empty($name)||empty($email)||empty($username)||empty($password)){
        //     header("Location: ../view/index.php?signup=empty");
        //     exit()
        // }else {
        //     if(!preg_match("/^[a-zA-Z]*$/",$name));
                
        //     }
        if(!empty($name)||!empty($email)||!empty($username)||!empty($password)){
        $this->userModel->insert();
        header("Location: ../view/index.php?signup-success");
        echo "Success";
        }
    }

    public function updateUser(){
        if($this->userModel->update()) {
            return true;
        }else
            return false;
    }

    public function deleteUser(){
        return $this->userModel->delete();
    }

    public function getAllUser(){
        return $this->userModel->readAll();
    }
    public function __destruct(){
        unset($this->userModel);
    }
}
// $userCont = new UserController();
// $return = $userCont->getAllUser();
// while($data = mysqli_fetch_assoc($return)){
//     echo "name: ".$data["name"]."<br/>";
//     echo "email: ".$data["email"]."<br/>";
//     echo "username: ".$data["username"]."<br/>";
//     echo "password: ".$data["password"]."<br/>";
//     echo "------------------------------------------<br/>";
//}
?>