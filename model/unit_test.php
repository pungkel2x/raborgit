<?php
    require("UserModel.php");
    $test2 = new UserModel();
    $test2->name = "jeytil";
    $test2->email = "jeytil@gmail.com";
    $test2->username = "langga";
    $test2->password = "gwapamaldita";
    
    //CASE#1: Inserting record
    echo "Test Case#1 result: ";
    var_dump($test2->insert());

    //CASE#2: Updating record
    echo "Test Case#2 result: ";
    var_dump($test2->update(23));
    

    //CASE#3: Read All record
     echo "Test Case#3 result: ";
     var_dump($test2->readAll());

    //CASE#4: Delete record
    echo "Test Case#4 result: ";
    var_dump($test2->delete(22));

    //CASE#5: EXEMPTED Controller division

    //CASE#6: Updating record
    echo "Test Case#6 result: ";
    var_dump($test2->update('b'));

    //CASE#7: Delete record
    echo "Test Case#7 result: ";
    var_dump($test2->delete('a'));
?>