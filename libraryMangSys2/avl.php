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
      
    </style>



</head>

<body>
<?php include 'partials/_topbar.php';
  include '_header.php';?>

    <div id="sectionA" class="tab-pane fade in active">
        <table class="table table-bordered">
            <thead>
                <tr class="colouring">
                    <th>Book Name</th>
                    <th>Author(s)</th>
                    <th>Group(s)</th>
                    <th>Type </th>
                </tr>
            </thead>
            <tbody>
                <?php 
                for($x=1;$x<=7;$x++){

                    echo ' <tr>
                    <td>Oaken Park </td>
                    <td>B PURMORT</td>
                    <td>Non Fiction</td>
                    <td>Books</td>
                </tr>
                <tr>
                    <td>Bedford Park</td>
                    <td>Richard Ricardon</td>
                    <td>Fiction</td>
                    <td>Megazines</td>
                </tr>';
                }
                ?>
               
                
            </tbody>
        </table>
    </div>

<body>
<html>