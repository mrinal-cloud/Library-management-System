<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/2/stylex.css">
    <link rel="stylesheet" href="css/style.css">



    <style>
 
        .tab-pane{
            background-color: lightgray;
        }
        .colouring{
            background-color: yellow;
        }


       
        .sabiar-actions{
          background-color: lightblue;
          color: black;
          font-size: small;
          margin-left: 40px;
          margin-top: 10px;
          height: 30px;
          width: 50px;

        }

        

.table-bordered > thead > tr > th, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > tbody > tr > td, .table-bordered > tfoot > tr > td {
    border: 1px solid #d94d4d;
}
      
    </style>



</head>

<body>
    <?php 
    include 'partials/_dbconnect.php';
include 'partials/_topbar.php';
  include '_header.php';?>

    <div id="sectionA" class="tab-pane fade in active">
        <table class="table table-bordered">
            <thead>
                <tr class="colouring">
                    <th  class="col-md-3">Book Name</th>
                    <th class="col-md-2">Author(s)</th>
                    <th class="col-md-2">Group(s)</th>
                    <th class="col-md-1">Type </th>
                    <th class="col-md-1">Quantity-Avl</th>
                    <th class="col-md-3">Action </th>

                </tr>
            </thead>
            <tbody>
                <?php 
                $sql = "SELECT * FROM `books` where Quantity >= '1'";
                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($result)){

                    $bookName= $row['book_name'];
                    $authorName= $row['book_author'];
                    $group = $row['book_group'];
                    $qty = $row['Quantity'];


                

                    echo ' <tr>
                    <td>'.$bookName.' </td>
                    <td>'.$authorName.'</td>
                    <td>'.$group.'</td>
                    <td>Books</td>
                    <td>'.$qty.'</td>

                    <td class="col-md-3"><a class="btn-info btn sabiar-actions" href="#">View Book</a>  <a class="btn-info btn sabiar-actions" href="#">Borrow</a> <a class="btn-info btn sabiar-actions" href="#">Download</a>  <a class="btn-info btn sabiar-actions" href="#">Review</a>  </td>
                </tr>
                ';
                }
                ?>
               
                
            </tbody>
        </table>
    </div>

<body>
<html>