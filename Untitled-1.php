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



    <?php 
             $picid = "iqNTfzojaPc";
        
            $sql = "SELECT * FROM `category`";
            $result = mysqli_query($conn,$sql);
            while ($row = mysqli_fetch_assoc($result))
            {

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
            ?>
            <!-- Category container starts here -->
            <div class="container my-3">
                <h2 class="text-center">Welcome to Discussions - Categories</h2>
                <div class="row my-3">
                    <!-- Fetching all the categories -->
                    <!--  -->
                   
                  
                    <!-- for loop to iterate categories -->
        
        
                    ALTER TABLE threads ADD FULLTEXT(`thread title`, `thread desc`);
                    
                    select * from threads where match (thread_title, thread_desc) against ('saga');