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

  <link rel="stylesheet" href="css/style.css">


  <style>
    .nav-custom {

      margin-top: 40px;


    }

  .custom {
  max-height: 100px;
  /* max-width: 100%; */
  overflow: hidden;
  /* text-overflow: ellipsis; */
  /* white-space: nowrap; */
  /* display: inline-block; */
  /* margin-top: 10px; */
  cursor: pointer;
  /* color: red; */
}
.read-more {
  display: inline-block;
  margin-top: 10px;
  cursor: pointer;
}
  </style>
  <!-- <script>
  $(document).ready(function () {
    $('[data-bs-toggle="offcanvas"]').on('click', function () {
      $('.offcanvas-header').toggleClass('open');
    });
  });
</script> -->


</head>

<body>

  <?php 
include 'partials/_dbconnect.php';
  
  include 'partials/_topbar.php'; ?>

  <?php include '_header.php'; ?>




  <div class="container mt-4">
    <div class="row">
      <div class="col-md-7">
        <h1>Welcome to Library Management System</h1>
        <p>This is a web-based library management system that allows you to manage your library's collections, members,
          and borrowing and returning of books.</p>
        <p>To get started, use the navigation links above to access the different features of the system.</p>
      </div>
      <div class="col-md-5">
        <img src="img/testi2.jpg" alt="Library Image" class="img-fluid">
      </div>
    </div>
  </div>




<?php



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
            
              while ($row1 = mysqli_fetch_assoc($result1)) {
                
                $id = $row1['book_id'];
                $name = $row1['book_name'];
                $author = $row1['book_author'];
                $descr = $row1['book_description'];




                // echo '<div class="book">
                //   <img src="img/test3.jpg" alt="Book cover" height="300">
                //   <p class="text-center mt-2">Book Title' . $x . '</p>
                // </div>';
              
                echo '
            
                                            
            <li>
                <div class="book-list-icon blue-icon custom"></div>
                <figure>
                    <img src="img/test.jpg" alt="Book">
                    <figcaption>
                        <header>
                            <h4><a href="borrow.php?bookId='.$id.' ">'.$name.'</a></h4>
                            <p><strong>Author:</strong>  '.$author.'</p>
                            <p><strong>book-id:</strong>  '.$id.'</p>
                        </header>
                        <div>
                        <p style="white-space: pre-wrap;">'.$descr.'.</p>
                        <div class="actions">
                            <ul>
                            <li>
                            <a href="borrow.php?bookId='.$id.' " class="btn btn-primary custom custom-borrow">Borrow</a>
                            </li>
                            <li>
                            <li>
                            <a href="discussions2.php?bookId=' . $id . '" class="btn btn-primary custom">Reviews</a>
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

<!-- ' . $id . ' -->

  <!-- <script>
    // Select the scrollbar and buttons
    const scrollbar = document.querySelector('.scrollbar');
    const prevButton = document.querySelector('#prev-button');
    const nextButton = document.querySelector('#next-button');

    // Set the amount of pixels to move per button click
    const scrollAmount = 300;

    // Add event listeners to the buttons
    prevButton.addEventListener('click', () => {
      scrollbar.scrollLeft -= scrollAmount;
    });

    nextButton.addEventListener('click', () => {
      scrollbar.scrollLeft += scrollAmount;
    });
  </script> -->







  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
            </script> -->

  <!-- <script>
  var scrollpos = window.scrollX;
  var delta = 10;
  
  window.addEventListener('wheel', function(e) {
    if (e.deltaY < 0)
      scrollpos -= delta;
    else
      scrollpos += delta;
    
    document.querySelector('.scrollmenu').scrollLeft = scrollpos;
  });
</script>
-->
</body>

</html>