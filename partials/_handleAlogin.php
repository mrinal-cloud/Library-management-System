<?php
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $email = $_POST['loginEmail'];
    $pass = $_POST['loginPass'];

    $sql = "Select * from `admins` where admin_email='$email'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);
    if($numRows==1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($pass, $row['admin_pass'])){
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['admin'] = true;
            $_SESSION['reader'] = false;


            $_SESSION['user_id'] = $row['admin_id'];
            $_SESSION['useremail'] = $email;
            echo "logged in". $email;
        } 
        header("Location: /projects/librarymangsys2/index.php");  
        // echo "welcome";
    }
    header("Location: /projects/librarymangsys2/index.php");  
    // echo "welcome 2";
}

?>