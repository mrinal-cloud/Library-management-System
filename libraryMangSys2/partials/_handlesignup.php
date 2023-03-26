<?php
$showError = "false";


if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $email = $_POST['signupEmail'];
    $pass = $_POST['signupPassword'];
    $cpass = $_POST['signupcPassword'];


    $existSql="select * from `users` where user_email='email'";
    
    $result = mysqli_query($conn, $existSql);
    $numRows = mysqli_num_rows($result);
    
    if($numRows>0){
        $showError="email already in use";
        // yaha nehi ghus raha hain

    }
    else{
        if($pass==$cpass){
            $hash=password_hash($pass,PASSWORD_DEFAULT);
            $sql= "INSERT INTO `users` (`user_email`, `user_pass`) VALUES ('$email', '$hash')";
            $result = mysqli_query($conn, $sql);
            if($result){
                $showAlert=true;
                header("Location: /projects/librarymangsys2/index.php?signupsucces=true"); 
                exit();
            }
        }
        else{
            $showError="password do not match";
             

        }
    }
    // header("Location: /DiscusZone/index.php");  
    // echo "welcome 2";
    header("Location: /projects/librarymangsys2/index.php?signupsucces=false&error=$showError");
}

?>