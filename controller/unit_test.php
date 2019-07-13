<?php
    require("UserController.php");
    $usermodelObj = new UserController();
    $usermodelObj->name = "jeytil";
    $usermodelObj->email = "jeytil@gmail.com";
    $usermodelObj->username = "langga";
    $usermodelObj->password = "gwapamaldita";
    
    //CASE#1: Inserting record
    echo "Test Case#1 result: ";
    var_dump($usermodelObj->addUser($name, $email,$username, $password));

    // //CASE#2: Updating record
    // echo "Test Case#2 result: ";
    // var_dump($usermodelObj->update(23));
    

    // //CASE#3: Read All record
    //  echo "Test Case#3 result: ";
    //  var_dump($usermodelObj->readAll());

    // //CASE#4: Delete record
    // echo "Test Case#4 result: ";
    // var_dump($usermodelObj->delete(22));

    // //CASE#5: EXEMPTED Controller division

    // //CASE#6: Updating record
    // echo "Test Case#6 result: ";
    // var_dump($usermodelObj->update('b'));

    // //CASE#7: Delete record
    // echo "Test Case#7 result: ";
    // var_dump($usermodelObj->delete('a'));
?>