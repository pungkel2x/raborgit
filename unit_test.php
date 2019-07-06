<?php
    require("Database.php");
    //CASE#1: Inserting data using valid SQL insert command
    $test = new Database();
    // echo "Test Case#1 result: ".$test->execute("INSERT INTO tbluser(name,email,username,password) VALUES('dhanearl','dhanearl@gmail.com','pungkel2x','pungkel2x')")."</br>";

    //CASE#2: Updating data using valid SQL update command
    //echo "Test Case#2 result: ".$test->execute("UPDATE tbluser SET name = 'earl' where id = 1")."</br>";

    //CASE#3: Extracting data using valid SQL select command.
    //echo "Test Case#3 result: ".$test->execute("SELECT * FROM tbluser")."</br>";

    //CASE#4: Deleting data using valid SQL delete command.
    // echo "Test Case#4 result: ".$test->execute("DELETE FROM tbluser where id = 2")."</br>";

    //CASE#5: Inserting data using invalid SQL insert command
    //echo "Test Case#5 result: ".$test->execute("INSERT INTO tbluser(name,email,user,password) VALUES('dhanearl','dhanearl@gmail.com','pungkel2x','pungkel2x')")."</br>";

    //CASE#6: Updating data using invalid SQL update command
    //echo "Test Case#6 result: ".$test->execute("UPDATE tbluser SET name1 = 'earl' where id = 1")."</br>";

    //CASE#7: Extracting data using valid SQL select command.
    //echo "Test Case#7 result: ".$test->execute("SELECT * FROM tbluse")."</br>";

    //CASE#4: Deleting data using valid SQL delete command.
    echo "Test Case#8 result: ".$test->execute("DELETE FROM tbluse where id = 2")."</br>";
?>