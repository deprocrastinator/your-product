<?php
    class Submit {
        
    
        
    public function push(){
        if(isset($_POST['submit'])) {
            $connection = mysqli_connect('localhost', 'root', '', 'loginapp');  
    if(!$connection) {
        die("Database connection failed");
    }
            
            //$id = $_POST['id'];
            $quantity = $_POST['quantity'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
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
    }
    }
?>