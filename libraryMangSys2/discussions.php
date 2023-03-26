<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link href="css/style.css" rel="stylesheet">
    <link href="css/style_nav.css" rel="stylesheet">


    <title>discussions</title>

    <style>
        .pad {
            padding: 5px;
        }

        /* .cust{
            background-color: black;
            padding: 7px;
            padding-left: 15px;
            padding-right: 15px;
            color: goldenrod;
        }

        .text-light{
            background-color: orange;
            padding: 7px;
            text color: red;
        } */
    </style>
</head>

<body>
    <?php include 'partials/_dbconnect.php'; ?>
    <?php include '_header.php'; ?>



    <!-- Slider starts here -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active d-block w-10"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img src="img/slider-1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="saaIta col-md-6">
                        <h5>The most readed Novel</h5>
                        <p>[[The most readed Novel]]</p>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img src="img/slider-2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="saaIta col-md-6">
                        <h5>Most loved by readers</h5>
                        <p>[[This is a paragraph of text that will be displayed on the first slide.]]</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img src="img/slider-3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="saaIta col-md-6">
                        <h5>Very short to read</h5>
                        <p>[[This is a paragraph of text that will be displayed on the first slide.]]</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- discusn container starts here -->
    <div class="container my-4" id="ques">
        <h2 class="text-center my-4">books discussed</h2>
        <div class="row my-4">

        

            <!-- Fetch all the discussions and use a loop to iterate through discussions -->
            <?php
        
            
                $sql = "SELECT * FROM `books` where discussed='1'";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)){
                    $book_id= $row['book_id'];
                    $book_name= $row['book_name'];

                echo
                '<div class="col-md-3 mx-0 my-2">

                    <div class="card pad" style="width: 18rem;">
                    <a href="discussions2.php?bookId=' . $book_id . '">
                        <img src="img/slider-1.jpg" class="card-img-top" alt="image for this book"> </a>
                        <div class="card-body">
                            <h5 class="card-title"><a href="discussions2.php?bookId=' . $book_id . '">' . substr($book_name, 0, 45) . '..</a></h5>
                            <p class="card-text">' . substr($book_name, 0, 120) . '... </p>
                            <a href="discussions2.php?bookId=' . $book_id . '" class="btn btn-primary">View Discussions</a>
                        </div>
                    </div>
                    </a>
                    </div>';
            
        
                }


            ?>



        </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
        </script>
</body>

</html>