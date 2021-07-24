<?php
    

    session_start();
    $conn = mysqli_connect("localhost","root","","masuk");




   function registrasi($data){
       global $conn;

       $email = strtolower(stripslashes($data["email"]));
       $password = mysqli_real_escape_string($conn,$data["password"]);
       $password2 = mysqli_real_escape_string($conn,$data["password2"]);

       mysqli_query($conn,"INSERT INTO login VALUES('','$email','$password')");
       return mysqli_affected_rows($conn);

   }

?>



