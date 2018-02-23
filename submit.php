<?php
    //include "models/sumbit.php";
    //$submits = Submit::push();

    $connection = mysqli_connect('us-cdbr-iron-east-05.cleardb.net', 'ba39226bd59afa', '69ccb870', 'heroku_43d912ec9eab9c4');  
    if(!$connection) die("Database connection failed");

    if(isset($_POST['submit'])) {
            
            
            //$id = $_POST['id'];
            $quantity = $_POST['quantity'];
            $firstname = $_POST['firstName'];
            $lastname = $_POST['lastName'];
            $email = $_POST['email'];
            
            $quantity = mysqli_real_escape_string($connection, $quantity );   
            $firstname = mysqli_real_escape_string($connection, $firstname );
            $lastname = mysqli_real_escape_string($connection, $lastname );
            $email = mysqli_real_escape_string($connection, $email );
            
            $query = "INSERT INTO userorders(quantity, firstname, lastname, email) ";
            $query .= "VALUES ('$quantity', '$firstname', '$lastname', '$email')";
    
            $result = mysqli_query($connection, $query);
            if(!$result) die('Query FAILED' . mysqli_error());
            //if(!in_array($username,$name)) echo " Sorry you are not allowed";
            //else echo "Welcome";


        }
?>