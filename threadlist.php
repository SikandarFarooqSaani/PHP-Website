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
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `category` WHERE category_id=$id";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $catname = $row['category name'];
        $catdesc = $row['category description'];
    }


    ?>
    <!-- slider -->

    <?php
            $showalert = false;
            $method = $_SERVER['REQUEST_METHOD'];
            if($method=='POST')
            {
                $thtitle = $_POST['title'];
                $thdesc = $_POST['desc'];

                $thtitle = str_replace("<", "&lt;", $thtitle,);
                $thtitle = str_replace(">", "&gt;", $thtitle,);

                $thdesc = str_replace("<", "&lt;", $thdesc,);
                $thdesc = str_replace(">", "&gt;", $thdesc,);

                $sno = $_POST['sno'];
                $sql = "INSERT INTO `threads` (`thread_title`, `thread_desc`, `thread_cat_id`, `thread user id`, `time_stamp`) 
                VALUES ('$thtitle', '$thdesc', '$id', '$sno', current_timestamp())";
                $result = mysqli_query($conn, $sql);
                $showalert = true;
                if($showalert)
                {
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>SUCCESS!</strong> Your Thoughts have been shared.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
     
                    ';
                }
    
            }
          

?>

    <!-- Category container starts here -->
    <div class="container my-3">
        <div style="background-color:#C0C0C0;" class="jumbotron">
            <h1 class="display-4">Welcome to <?php echo $catname;?></h1>
            <p class="lead"><?php echo $catdesc;?></p>
            <hr class="my-4">
            <p>This Forum is for Sharing your thoughts, views about New cars being lauched around globe
                Keep it friendly.
                Be courteous and respectful. Appreciate that others may have an opinion different from yours.
                Share your knowledge.


            </p>
            <a class="btn btn-success btn-lg" href="#" role="button">Learn more</a>
        </div>
    </div>
    <?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
    {

    
    echo '<div class="container">
        <h1 class="py-3 px-3">Ask a Question</h1>
        <form action="'.$_SERVER["REQUEST_URI"].' "method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter Title">
        <small id="title" class="form-text text-muted">Make your Title Grabby.</small>
    </div>
    <input type="hidden" name="sno" value = '.$_SESSION["sno"].'>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Share Your Views Regarding the Topic</label>
        <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
    </form>
    </div>';
    }
    else{
    echo '<div class="container">
    <div class="container">
        <p class = "lead">You are Not Logged In . Login to start a conversation or post comment</p>
    </div>';
    }
    ?>




    <?php 
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `threads` WHERE thread_cat_id=$id";
    $result = mysqli_query($conn, $sql);
    $noresult = true;
    while ($row = mysqli_fetch_assoc($result)) {
        $noresult = false;
        $id = $row['thread_id'];
        $title = $row['thread_title'];
        $description = $row['thread_desc'];
        $timestamp = $row['time_stamp'];
        $userid = $row['thread user id'];
        $sql2 = "SELECT username FROM `users` WHERE sno= '$userid'";
        $result2 = mysqli_query($conn, $sql2);
       $row2 =  mysqli_fetch_assoc($result2);
       

        echo '<hr>
        <div class="media my-3">
            <img class="mr-3" src="img/user.png" width="54px" alt="Generic placeholder image">
            <div class="media-body my-3">'.
            '<h5 class="mt-0"><a href="thread.php?threadid=' .$id. ' ">'.$title.'</a></h5>
                '.$description.'
            </div>'.'<p class="font-weight-bold my-0"><b> Commented by : '.$row2['username'].' at '.$timestamp.'</b></p>'.
       '</div>';
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


    <!-- <div class="media my-3">
            <img class="mr-3" src="img/user.png" width="54px" alt="Generic placeholder image">
            <div class="media-body my-3">
                <h5 class="mt-0">New Gen Toyota Prius Lauched</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                fringilla. Donec lacinia congue felis in faucibus.
            </div>
     -->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
<?php include 'partials/footer.php';?>