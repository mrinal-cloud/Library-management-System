<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Library Management System</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link href="css/portfolio.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">


  <title>Welcome to iDiscuss - Coding Forums</title>
</head>

<body>

  <?php include '_header.php'; ?>

  <div class="wrapper row2 col-md-12">
    <div id="container" class="clear col-md-12">
      <!-- ####################################################################################################### -->
      <!-- ####################################################################################################### -->
      <!-- ####################################################################################################### -->
      <!-- ####################################################################################################### -->
      <section id="portfolio" class="clear col-md-12">
        <ul>

        <h3> OverDues </h3>
          <!-- <div class="scrollbar">
            <div class="scrollmenu mt-3 "> -->

              <?php
              for ($x = 1; $x <= 30; $x++) {
                echo '<li class="col-md-3">
            <article>
              <figure><a href="#"><img src="img/spacer.gif" alt=""></a>
                <figcaption>
                  <header>Metridiculis conseque quis</header>
                  <p>Nonve nean justo partur odio phasellus consectetuer sem ac id nam risuspend consec tetuerant sapien urna fuscetuer et.</p>
                  <p class="more"><a href="#">View Full Details &raquo;</a></p>
                </figcaption>
              </figure>
            </article>';
            if($x%4==0){

              echo' <h3 class="hello"> hello </h3>';
            }
            echo'
          </li>';
              }
              ?>

<!-- 
            </div>
          </div> -->

        </ul>
      </section>
      <!-- ####################################################################################################### -->
      <!-- ####################################################################################################### -->
      <!-- ####################################################################################################### -->
      <!-- ####################################################################################################### -->
      <div class="pagination pad">ADD PAGINATION HERE IF NEEDED, yes i needs</div>
      <!-- ####################################################################################################### -->




    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
</body>

</html>