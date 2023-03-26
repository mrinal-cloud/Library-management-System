<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link href="css/style.css" rel="stylesheet">



    <style>
        #ques {
            min-height: 433px;
        }

        .navbar {
            background-color: royalblue;
            color: yellow;
        }

        body {
            background-color: lightblue;
        }

        .jumbotron {
            background-color: black;
        }
    </style>
    <title>discussions</title>
</head>

<body>

    <?php
    include 'partials/_dbconnect.php';
    include '_header.php';

    $id = $_GET['bookId'];
    $showAlert = false;

    $method = $_SERVER['REQUEST_METHOD'];

    if ($method == 'POST') {
        // Insert into thread db
        $disc_title = $_POST['title'];
        $disc_desc = $_POST['desc'];


        $us_id = $_POST['user_id'];
        $sql = "INSERT INTO `books_reviews` (`book_id`, `user_id`, `discussion_title`, `discussion_desc`, `timestamp`) VALUES ('$id', '$us_id', '$disc_title', '$disc_desc', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        $showAlert = true;

        if ($showAlert) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> Your review has been submitted. Thankyou
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                  </div>';
        }
    }


    $sql = "SELECT * FROM `books_reviews` WHERE book_id=$id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);


    $sql1 = "SELECT * FROM `books` WHERE book_id='$id'";
    $result1 = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_assoc($result1);

    $book_name = $row1['book_name'];
    $book_desc = $row1['book_description'];
    ?>

    <!-- Category container starts here -->
    <div class="container my-4">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to "
                <?php echo $book_name; ?>" discussions
            </h1>
            <p class="lead">
                <?php echo $book_desc; ?>
            </p>
            <hr class="my-4">

        </div>
    </div>


    <?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        echo '<div class="container">
            <h1 class="py-2">Start a Discussion</h1> 
            <form action="' . $_SERVER["REQUEST_URI"] . '" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Review Title</label>
                    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">Keep your title as short and crisp as
                        possible</small>
                </div>
                <input type="hidden" name="user_id" value="' . $_SESSION["user_id"] . '">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Ellaborate Your Concern</label>
                    <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>';
    } else {
        echo '
        <div class="container">
        <h1 class="py-2">Start a Discussion</h1> 
           <p class="lead">You are not logged in. Please login to be able to start a Discussion</p>
        </div>
        ';
    }

    ?>

    <div class="container mb-5" id="ques">
        <h1 class="py-2">Browse discussions</h1>
        <?php
        $id = $_GET['bookId'];
        $sql = "SELECT * FROM `books_reviews` WHERE book_id=$id";
        $result = mysqli_query($conn, $sql);
        $noResult = true;
        while ($row = mysqli_fetch_assoc($result)) {
            $noResult = false;
            $id = $row['discussion_id'];
            $title = $row['discussion_title'];
            $desc = $row['discussion_desc'];
            $discussions_time = $row['timestamp'];
            $discussions_user_id = $row['user_id'];
            $discussions_book_id = $row['book_id'];

            // $sql2 = "SELECT user_email FROM `users` WHERE sno='$discussions_user_id'";
            // $result2 = mysqli_query($conn, $sql2);
            // $row2 = mysqli_fetch_assoc($result2);
        

            $sql2 = "SELECT * FROM `users` WHERE user_id='$discussions_user_id'";
            $result2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_assoc($result2);




            echo '<div class="media my-3">
            <img src="img/userdefault.png" width="54px" class="mr-3" alt="...">
            <div class="media-body">' .
                '<h5 class="mt-0"> <a class="text-dark" href="discussions2.php?threadid=' . $id . '">' . $title . ' </a></h5>
                ' . $desc . ' </div>' . '<div class="font-weight-bold my-0"> By: ' . $row2['user_email'] . ' at ' . $discussions_time . '
                </div>' .
                '</div>';

        }
        // echo var_dump($noResult);
        if ($noResult) {
            echo '<div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <p class="display-4">No Discussions Found</p>
                        <p class="lead"> Be the first person to give a review for this book</p>
                    </div>
                 </div> ';
        }
        ?>

    </div>

    <?php include 'partials/_footer.php'; ?>
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

    <!-- <input type="hidden" name="sno" value="'. $_SESSION["sno"]. '">
        to put the input as and at user_id.. line 88 -->
</body>

</html>