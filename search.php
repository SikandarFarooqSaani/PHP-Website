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

    










    <div class="container my-3">
    <h1>Search Results for <em>"<?php echo $_GET['search']?>"</em></h1>

    <?php
        $noresults = true;
        $query = $_GET['search'];
        $sql = "select * from threads where match (thread_title, thread_desc) against ('$query')";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $title = $row['thread_title'];
            $desc = $row['thread_desc'];
            $thread_id = $row['thread_id'];
            $noresults = false;
            $url = "thread.php?threadid=". $thread_id;
                    echo '   <div class="result py-2">
                    <h4><a href="'.$url.'" class="text-dark"> '.$title.' </a> </h4>
                   
                    <p>'.$desc.'</p>
        </div>
                </div>

   ';

        }
        if($noresults)
        {
           echo '<div class="jumbotron jumbotron-fluid">
            <div class="container">
            <h1 class="display-4">No Results Found</h1>
            <p class="lead"> <ul><h4>Suggestions: </h4>

            <li> Make sure that all words are spelled correctly.</li>
            <li> Try different keywords.</li>
            <li> Try more general keywords.</li>
            </p>
            </ul>
            </div>
          </div>';
        }

    ?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
<?php include 'partials/footer.php';?>