<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <?php include 'partials/header.php';?>


    <?php include 'partials/footer.php';?>

    <div class="container" id="container">
        <img src="img/PP.jpg" class=" rounded img-thumbnail"" alt=" ...">


    </div>

    <div class="top-right" id=top-right>
        <H1>Introduction</H1>
        <p>Hey there!
            My name is Sikandar Farooq Saani and i am from Mansehra kpk. I have done my O'levels and then FSC from a
            renowned Army institute in
            Abbottabad known as Army Burn Hall College for Boys.
            <hr>
            I applied for Medical colleges via NMDCAT in 2021 but i failed it and then in
            the state of depression without any obvious reasons i applied at UMT Lahore and got admission in Fall 2021.
            <hr>
            My specialities till now are
        <ul class="list">
            <li> Adobe Illustrator</li>
            <li> Adobe Photoshop</li>
            <li> Figma</li>
            <li> Front End Development</li>
            <li> Python</li>
            <li> C++</li>
            <li> JavaScript </li>
            <li>Typing (60wpm)</li>
            <li>PHP</li>
        </ul>
        <hr>
        

    </div>
   
    <div class = "purpose">
        <h1>Purpose of the Website</h1>
        <p>Main purpose for which this website is made is to introduce a forum where people can discuss cars, cars related issues , ask 
            qustions and get answers to them . We have tried to make this website as user friendly as possible so that our users may Not
            encounter any type of problem during surrfing. 
            <br>
            We have introduced 4 categories intially 
            <ul>
                <li>New Car Discussion</li>
                <li>Used Car Discussion</li>
                <li>Auto parts Discussion</li>
                <li>Bike Discussion</li>
            </ul>
            <p>In future we plan to launch 2 new categories of discussion one of which is Bus discussion and another one is truck discussion so 
                stay tuned for them as they will also be live soon 
            </p>
        </p>
        </div>

           
 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>
<style>
#container {
    position: relative;
}

#container img {
    position: absolute;
    top: 30px;
    left: 0px;
    height: 300px;
    width: 300px;

}

.list {
    column-count: 3;
}

.top-right {
    position: absolute;
    top: 80px;
    right: 200px;
    left: 400px;
}
.purpose {
    position: absolute;
    top: 420px;
    left: 50px;
    right:0px
}
</style>

</html>