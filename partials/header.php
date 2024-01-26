<?php
session_start();

echo '
<nav class="navbar navbar-expand-lg bg-light py-3">
<div class="container-fluid">
  <a class="navbar-brand" href="/forum">Discussion</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/forum">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Categories
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="threadlist.php?catid=1">New Car Discussion</a></li>
          <li><a class="dropdown-item" href="threadlist.php?catid=2">Used Car Discussion</a></li>
          <li><a class="dropdown-item" href="threadlist.php?catid=3">Auto Parts Discussion</a></li>
          <li><a class="dropdown-item" href="threadlist.php?catid=4">Bikes Discussion</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link " href= "contact.php">Contact</a>
      </li>
    </ul>
    <div class="mx-2">';
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
{
    echo '

    <form class="d-flex" role="search" action = "search.php">
    <input class="form-control me-2"  type="search" placeholder="Search" method = "get" action = "search.php" aria-label="Search" name = "search">
    <button class="btn btn-outline-success" type="submit">Search</button>


   <p class="mx-2 my-0"> Welcome '.$_SESSION['username'].'</p>
   <a href="/forum/partials/logout.php" class="btn btn-outline-success ml-2">Logout</a>
  </form>';
}
else 
{
    echo ' 
    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#loginmodal">Login</button>
    <button class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#signupmodal">Signup</button>
    </div>


    <form class="d-flex" role="search" action = "search.php">
      <input class="form-control me-2"  type="search" placeholder="Search" aria-label="Search" method = "get"  name = "search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>'
    
    ;
}
      echo '</div>


</div>
</nav>
';
include 'partials/loginmodal.php';
include 'partials/signupmodal.php';


if(isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == true)
{
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Sign Up Successfull!</strong>Login to Your Account to be a Member.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
}

// if(isset($_GET['loginsuccess']) && $_GET['loginsuccess'] == true)
// {
//   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
//           <strong>Login Successfull!</strong>Now you can Add and comment blog.
//           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//             <span aria-hidden="true">&times;</span>
//           </button>
//         </div>';
// }

// else(isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == false)
// {
//   echo '<div class="alert alert-danger" role="alert">
//             This is a danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
//           </div>
//           ';
//         }



?>