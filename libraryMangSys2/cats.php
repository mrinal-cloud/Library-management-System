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
            <p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
            </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
            </script>
</body>

</html>