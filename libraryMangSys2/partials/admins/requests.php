<?php
$showError = "false";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '_dbconnect.php';
    $bk_id = $_POST['book_id'];
    $us_id = $_POST['user_id'];

    $sql = "Select * from `books` where book_id='$bk_id'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);

    $row = mysqli_fetch_assoc($result);
    $avl_status= $row['Quantity'];
    if ($avl_status >=1) {
        $sql1 = "Select * from `users` where user_id='$us_id'";
        $result1 = mysqli_query($conn, $sql);
        $row1 = mysqli_fetch_assoc($result1);

        $issues_status= $row['issues_status'];
        if(! $issues_status){
            //
        }
        


       
    }
    else{
        echo '
        <h3> Sorry! the book you want to borrow is not available in the inventory';
    }
    header("Location: /projects/librarymangsys2/index.php");
    // echo "welcome";

    header("Location: /projects/librarymangsys2/index.php");
    // echo "welcome 2";
}

?>