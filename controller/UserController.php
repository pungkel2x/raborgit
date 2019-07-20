<?php
require("../model/UserModel.php");
class UserController{
    private $usermodelObj;

    public function __construct(){
        $this->usermodelObj = new UserModel();
    }
    public function addUser($name, $email,$username, $password){
        //perform data validation
        $this->usermodelObj->name = $name;
        $this->usermodelObj->email = $email;
        $this->usermodelObj->username = $username;
        $this->usermodelObj->password = $password;
        if(!empty($name)&&!empty($email)&&!empty($username)&&!empty($password)){
            if(preg_match('~[0-9]~' ,$name)){
                echo("ERROR: Name contains Number");
                exit();
            }elseif (filter_var($email, FILTER_VALIDATE_EMAIL)){
                $this->usermodelObj->insert();
                return true;
                exit();
                
            }else{
                  echo("ERROR: Invalid Email");
                  exit();  
            }
        }else
            echo("ERROR: Please Fill up required fields!");
    }

    public function updateUser($id,$name, $email,$username, $password){
        // $this->usermodelObj->id = $id;
        $this->usermodelObj->name = $name;
        $this->usermodelObj->email = $email;
        $this->usermodelObj->username = $username;
        $this->usermodelObj->password = $password;
        if(!empty($name)&&!empty($email)&&!empty($username)&&!empty($password)){
            if(preg_match('~[0-9]~' ,$name)){
                echo("ERROR: Name contains Number");
                exit();
            }elseif (filter_var($email, FILTER_VALIDATE_EMAIL)){
                $usermodelObj = new UserController();
                $return = $usermodelObj->getAllUser();
                while($data = mysqli_fetch_assoc($return)){
                    if($data["id"] == $id){
                        $this->usermodelObj->update($id);
                        return true;
                        exit();
                    }
                }
                echo("ERROR: Cannot UPDATE! User does not exist");   
            }else{
                  echo("ERROR: Invalid Email");
                  exit();  
            }
        }else 
            echo("ERROR: Cannot UPDATE with empty value"); 
    }

    public function deleteUser($id){
        $usermodelObj = new UserController();
        $return = $usermodelObj->getAllUser();
        while($data = mysqli_fetch_assoc($return)){
            if($data["id"] == $id){
                $this->usermodelObj->delete($id);
                return true;
                exit();
            }
        }
        echo("ERROR: Cannot delete! User does not exist");
        // exit();        
    }

    public function getAllUser(){
        return $this->usermodelObj->readAll();
    }
    public function __destruct(){
        unset($this->usermodelObj);
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