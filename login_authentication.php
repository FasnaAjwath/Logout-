<?php
    session_start();

    $servername = "localhost";
    $username = "root";
    $password= "";
    $dbname = "web_technoogies";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn){
        echo "Connection failed";
    }


    if(isset($_POST['login_authentication'])){
        $user = $_POST['username'];
        $pass = $_POST['password'];
    }

    
   
    $query = "SELECT username, password FROM login where username = '$user' AND password = '$pass'"; 
    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result) == 1){
        header("Location: welcome.php");
    }
    else{
        echo "Invalid details!! please enter correct details";
    }
?>