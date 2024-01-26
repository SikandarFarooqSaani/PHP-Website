<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Discussion </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <?php include 'partials/header.php';?>
    <?php include 'partials/connect.php';?>

    <?php 
    $id = $_GET['threadid'];
    $sql = "SELECT * FROM `threads` WHERE thread_id=$id";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $title = $row['thread_title'];
        $desc = $row['thread_desc'];
        $commented = $row['thread user id'];
        $sql2 = "SELECT username FROM `users` WHERE sno= '$commented'";
        $result2 = mysqli_query($conn, $sql2);
       $row2 =  mysqli_fetch_assoc($result2);
       $postedby = $row2['username'];
    }


    ?>

<?php
            $showalert = false;
            $method = $_SERVER['REQUEST_METHOD'];
            if($method=='POST')
            {
                $comment = $_POST['comment'];
                $comment = str_replace("<", "&lt;", $comment,);
                $comment = str_replace(">", "&gt;", $comment,);
                $sno = $_POST['sno'];
                $sql = "INSERT INTO `comments` (`commentby`, `commentdesc`, `thread_id`, `currenttime`) 
                VALUES ($sno, '$comment', '$id', current_timestamp())";
                $result = mysqli_query($conn, $sql);
                $showalert = true;
                if($showalert)
                {
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>SUCCESS!</strong> Your comment have been shared.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
     
                    ';
                }
            }

?>

    <!-- slider -->



    <!-- Category container starts here -->
    <div class="container my-3">
        <div class="jumbotron">
            <h1 class="display-4"> <?php echo $title;?></h1>
            <p class="lead"><?php echo $desc;?></p>
            <hr class="my-4">
            <p>This Forum is for Sharing your thoughts, views about New cars being lauched around globe
            Keep it friendly.
Be courteous and respectful. Appreciate that others may have an opinion different from yours.
Share your knowledge.


            </p>
            <p><b>POSTED BY: <?php echo $postedby ?></b></p>

        </div>
    </div>
    
   <div class="container">
   <?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
    {

    
    echo'
   <div class="container">
        <h1 class="py-3 px-3">Add Your Views</h1>
        <form action="'.$_SERVER['REQUEST_URI'].'" method="POST">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Comment about this Blog</label>
                <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                <input type="hidden" name="sno" value = '.$_SESSION["sno"].'>
            </div>
            <button type="submit" class="btn btn-success">Post Comment</button>
        </form>
    </div>';
    }
    else{
        echo '<div class="container">
    <div class="container">
        <p class = "lead">You are Not Logged In . Login to post comment</p>
    </div>';
    }
    ?>


   </div>

        <?php 
    $id = $_GET['threadid'];
    $sql = "SELECT * FROM `comments` WHERE thread_id=$id";
    $noresult = true;
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $noresult = false;
        $iid = $row['commentid'];
        $commentdesc = $row['commentdesc'];
        $commenttime = $row['currenttime'];
        $userid = $row['commentby'];
        $sql2 = "SELECT username FROM `users` WHERE sno= '$userid'";
        $result2 = mysqli_query($conn, $sql2);
       $row2 =  mysqli_fetch_assoc($result2);




        echo '<hr>
        <div class="media my-3">
            <img class="mr-3" src="img/user.png" width="54px" class = "mr-3" alt="Generic placeholder image">
            <div class="media-body ">
            <p class="font-weight-bold my-0"><b> '.$row2['username'].' at '.$commenttime.'</b></p>
                '.$commentdesc.'
            </div>
        </div>';
}
if($noresult)
{
    echo '
    
    <div style="background-color:#C0C0C0;" class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">No Results Found</h1>
    <p class="lead">Be The First One to Post a Question.</p>
  </div>
</div>
';
}
?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
<?php include 'partials/footer.php';?>