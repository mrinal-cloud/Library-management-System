<?php
session_start();

echo '
<nav class="navbar navbar-expand-lg navbar-dark fixed-top nav-custom">
  <!-- bg-transparent -->
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    ';


if (isset($_SESSION['reader']) && $_SESSION['reader'] == true && $_SESSION['admin'] == false) {

  echo '<p class="text-light my-0 mx-2"> <b class="cust-reader">Reader</b> </p>
          ';

} elseif (isset($_SESSION['admin']) && $_SESSION['admin'] == true && $_SESSION['reader'] == false) {

  echo '<p class="text-light my-0 mx-2"> <b class="cust-admin">Admin</b> </p>
        ';

} else {
  echo '<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle var" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          View Mode
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="nav-link var3" href="partials/login.php">Reader</a>
        <a class="nav-link var2" href="partials/alogin.php">Admin</a>

        </div>
        </li>
        </ul>
        </div>';
}



?>




<a class="navbar-brand" href="index.php">LIBRARY</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
  aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav">


    <li class="nav-item">
      <a class="nav-link" href="cats.php">groups</a>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        Inventory
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <!-- <a class="dropdown-item" href="threadlist.php?catid=' . $row['discusn_id']"> </a> -->
        <a class="nav-link" href="avl.php">Available Books</a>
        <!-- show tables of all books with authors along with group/catagories that are available for borrow, make it searchable, sort by different columns -->

        <a class="nav-link" href="borowed_books.php">Borrowed books</a>

        <!-- <h5>Returns</h5> -->
        <a class="nav-link" href="#">Arrivings</a>

      </div>
    </li>

    <li class="nav-item">
      <?php 
      if (isset($_SESSION['admin']) && $_SESSION['admin'] == true && $_SESSION['reader'] == false) {
        echo '
        <a class="nav-link" href="partials/admins/ManageBooks.php">ManageBooks</a>

      ';
      }
      else{
        echo '
        <a class="nav-link" href="discussions.php">Discussions</a>

      ';
      }
      ?>
    </li>



    <li class="nav-item">
      <?php
      if (isset($_SESSION['reader']) && $_SESSION['reader'] == true && $_SESSION['admin'] == false) {
        echo '
        <a class="nav-link" href="MyIssues.php">MyISSUES</a>
      ';
      } elseif (isset($_SESSION['admin']) && $_SESSION['admin'] == true && $_SESSION['reader'] == false) {
        echo '
        <a class="nav-link" href="PendingIssues.php">pendingISSUES</a>
      ';
      }
      ?>
    </li>



    <li class="nav-item">
      <a class="nav-link" href="members.php">Members</a>
    </li>

    <?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
      echo '
  <div class="row mx-2">
  <form class="form-inline my-2 my-lg-0" method="get" action="search.php">
    <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-info my-2 my-sm-0" type="submit">Search</button>';

      if (isset($_SESSION['loggedin']) && $_SESSION['reader'] == true) {
        echo '
      <p class="text-light my-0 mx-2"> <b class="cust-reader">' . substr($_SESSION['useremail'], 0, 6) . '</b> </p>
      <a href="partials/logout.php" class="btn btn-outline-success ml-2">Logout</a>
      </form>
      </div>
      ';
      } elseif (isset($_SESSION['loggedin']) && $_SESSION['admin'] == true) {
        echo '
      <p class="text-light my-0 mx-2"> <b class="cust-admin">' . substr($_SESSION['useremail'], 0, 6) . '</b> </p>
      <a href="partials/logout.php" class="btn btn-outline-success ml-2">Logout</a>
      </form>
      </div>
      ';
      }

    } else {
      echo '
  <div class="row mx-2">
  <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-info my-2 my-sm-0" type="submit">Search</button>
    </form>
    <button class="btn btn-outline-warning mx-2 my-2 my-sm-0"><a href="partials/signUp.php">signUp</a></button>
    </div>
    ';
    }

    ?>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        More
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <!-- <a class="dropdown-item" href="threadlist.php?catid=' . $row['discusn_id']"> </a> -->

        <a class="nav-link" href="partials/tempos/features.php">developements</a>
        <a class="nav-link" href="partials/tempos/features.php">feedback & report</a>


        <h5>doc</h5>

      </div>
    </li>
  </ul>
</div>
</nav>