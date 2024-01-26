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
    <!-- slider -->






    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>

        <style>
            .center {
  display: block;
  margin-left: 25%;
  margin-right: auto;
  width: 50%;
}
        </style>



        <div class="carousel-inner center">
            <div class="carousel-item active">
                <img src="img/1.jpg"  width="800px" height = "400px" 
                    alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/2.jpg" width="800px" height = "400px"
                    alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/3.jpg" width="800px" height = "400px"
                    alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Category container starts here -->
    <div class="container my-3">
        <h2 class="text-center">Welcome to Discussions - Categories</h2>
        <div class="row my-3">
            <!-- Fetching all the categories -->
            <!--  -->
           
            <?php 
             $picid = "iqNTfzojaPc";
        
            $sql = "SELECT * FROM `category`";
            $result = mysqli_query($conn,$sql);
            while ($row = mysqli_fetch_assoc($result))
            {
               // echo $row['category_id'];
               // echo $row['category name'];
                $id = $row['category_id'];
                $cat = $row['category name'];
                $desc = $row['category description'];
                echo '<div class="col-md-4 my-2">
                        <div class="card" style="width: 18rem;">
                         <img src="img/card-'.$id.'.jpg "class="card-img-top" alt="image for this category">
                            <div class="card-body">
                                <h5 class="card-title"><a href="threadlist.php?catid=' . $id . '">' . $cat . '</a></h5>
                                <p class="card-text">' . substr($desc, 0, 90). '... </p>
                                <a href="threadlist.php?catid=' . $id . '" class="btn btn-primary">View Threads</a>
                            </div>
                        </div>
                      </div>';
               } 
            // {
            //     $id = $row['category_id'];
            //     $cat = $row['category name']; 
            //     $desc = $row['category description'];
            //     echo '<div class="col-md-4 my-2">
            //     <div class="card" style="width: 18rem;">
            //         <img src="https://source.unsplash.com/'.$picid.'" alt="crypto"" class=" card-img-top" alt="...">
            //         <div class="card-body">


            //             <h5 class="card-title"><a href= "threads.php?$catid = '.$id.'">'.$cat.'</a></h5>

            //             <p class="card-text">'.substr($desc, 0 , 90).'...</p>


            //             <a href="threads.php?$catid = '.$id.'" class="btn btn-primary">View Threads</a>
            //         </div>
            //     </div>
            // </div>';





            //     // echo $row['category id'];
            //     // echo $row['category name'];
            // }
            
            
            
            ?>
            <!-- for loop to iterate categories -->


            



        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
<?php include 'partials/footer.php';?>