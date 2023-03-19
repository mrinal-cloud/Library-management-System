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

<?php include 'partials/_topbar.php'; ?>

  <?php include '_header.php'; ?>

<!--   
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon">hiiiiiiihiiiiiiihiiiiiiihiiiiiiihiiiiiii</span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">hiiiiiii</button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav> -->




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


  <?php include 'partials/_topbar.php';
  include '_header.php';

  



for ($y = 1; $y <= 5; $y++){
  echo '
  <div class="container mt-3 mb-5 ">
  <!-- <h3>Recommended</h3> -->


    <div class="scrollbar">
      <div class="scrollmenu mt-3 ">


          <div class="booksmedia-fullwidth booksmedia-popular-list">
            <h2 class="section-title text-center" style="position: absolute;">Popular Items</h2>
            <div class="container"> <p class="text-center style="position: absolute;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div>
            <ul class="popular-items-detail-v1">';

             
              for ($x = 1; $x <= 100; $x++) {
                // echo '<div class="book">
                //   <img src="img/test3.jpg" alt="Book cover" height="300">
                //   <p class="text-center mt-2">Book Title' . $x . '</p>
                // </div>';
              
                echo '
            
                                            
            <li>
                <div class="book-list-icon blue-icon"></div>
                <figure>
                    <img src="img/testi2.jpg" alt="Book">
                    <figcaption>
                        <header>
                            <h4><a href="#.">The Great Gatsby</a></h4>
                            <p><strong>Author:</strong>  F. Scott Fitzgerald</p>
                            <p><strong>ISBN:</strong>  9781581573268</p>
                        </header>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                        <div class="actions">
                            <ul>
                                <li>
                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add To Cart">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                        <i class="fa fa-print"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                        <i class="fa fa-share-alt"></i>
                                    </a>
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