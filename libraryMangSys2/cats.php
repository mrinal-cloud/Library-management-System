<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">

  <title>catagories</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <!-- <meta charset="utf-8" /> -->

        <!-- Title -->
        <!-- <title>..:: LIBRARIA ::..</title> -->

        <!-- Favicon -->
        <!-- <link href="img/favicon.ico" rel="icon" type="image/x-icon" /> -->

  <!-- Fonts -->
  <!-- <link href="css/2/1.css" rel="stylesheet" /> -->
  <!-- <link href="css/2/font-awesome.min.css" rel="stylesheet" type="text/css" /> -->

  <!-- Mobile Menu -->
  <!-- <link href="css/2/mmenu.css" rel="stylesheet" type="text/css" /> -->
  <!-- <link href="css/2/mmenu.positioning.css" rel="stylesheet" type="text/css" /> -->

  <!-- Responsive Table -->
  <!-- <link rel="stylesheet" type="text/css" href="css/2/responsivetable.css" /> -->

  <!-- Accordion Stylesheet -->
  <!-- <link rel="stylesheet" type="text/css" href="css/2/jquery.accordion.css"> -->



  <!-- <link rel="stylesheet" href="css/2/stylex.css"> -->
  <link rel="stylesheet" href="css/style.css">





  <style>
    body {
      /* background-color: white; */
      padding-top: 120px;
      /* color:red; */
      padding-left: 50px;
      padding-right: 50px;
    }


    .book {
    display: inline-block;
    /* margin-right: 15px; */
}
  </style>


</head>

<body>
  <?php 
  include 'partials/_dbconnect.php';
  include 'partials/_topbar.php';
  include '_header.php';

  

// $bookNums=0;


$sql = "SELECT * FROM `books` GROUP BY(book_group)";
$result = mysqli_query($conn, $sql);





            
while ($row = mysqli_fetch_assoc($result)){
    $group = $row['book_group'];
    // $group_desc = $row['book_group_desc'];
  echo '
  <div class="container mt-3 mb-5 ">
  <!-- <h3>Recommended</h3> -->


    <div class="scrollbar">
      <div class="scrollmenu mt-3 ">


          <div class="booksmedia-fullwidth booksmedia-popular-list">
            <h2 class="section-title text-center" style="position: absolute;">'.$group.'</h2>
            <p class="lead text-center">here book group descriptions</p>
            <ul class="popular-items-detail-v1">';

            $sql1 = "SELECT * FROM books WHERE book_group = '$group';";
            $result1 = mysqli_query($conn, $sql1);
            
              while ($row = mysqli_fetch_assoc($result1)) {
                
                $id = $row['book_id'];
                $name = $row['book_name'];
                $author = $row['book_author'];
                $descr = $row['book_description'];




                // echo '<div class="book">
                //   <img src="img/test3.jpg" alt="Book cover" height="300">
                //   <p class="text-center mt-2">Book Title' . $x . '</p>
                // </div>';
              
                echo '
            
                                            
            <li>
                <div class="book-list-icon blue-icon"></div>
                <figure>
                    <img src="img/'.$id.'.jpg" alt="Book">
                    <figcaption>
                        <header>
                            <h4><a href="borrow.php?bookId='.$id.' ">'.$name.'</a></h4>
                            <p><strong>Author:</strong>  '.$author.'</p>
                            <p><strong>book-id:</strong>  '.$id.'</p>
                        </header>
                        <p>'.$descr.'.</p>
                        <div class="actions">
                            <ul>
                            <li>
                            <a href="borrow.php?bookId='.$id.' " class="btn btn-primary">Borrow</a>
                            </li>
                            <li>
                            <li>
                            <a href="discussions2.php?bookId=' . $id . '" class="btn btn-primary">Reviews</a>
                            </li>
                            </ul>
                        </div>
                    </figcaption>
                </figure>                                                
            </li>
           ';
              }
              
echo '
            </ul>
          </div>

        </div>
    </div>
  ';

  }
  echo '</div>';
  ?>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
            </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
            </script>
</body>

</html>