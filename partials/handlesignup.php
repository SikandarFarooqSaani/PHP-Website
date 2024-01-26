
<?php
$showerror =  "false";
if($_SERVER['REQUEST_METHOD']=="POST")
{
    include 'connect.php';
    $useremail = $_POST['signupemail'];
    $pass = $_POST['signuppassword'];
    $cpass = $_POST['signupcpassword'];
    $phoneNumber = $_POST['signupphonenumber'];
    $gender = $_POST['gender'];
    $username = $_POST['signupusername'];

    $existsql = "select * FROM `users` WHERE useremail = '$useremail'";
    $result = mysqli_query($conn, $existsql);
    $numRows = mysqli_num_rows($result);
    if($numRows >0)
    {
        $showerror = "Email already Taken";
    }
    else
    {
            if($pass == $cpass)
            {
                    $hash = password_hash($pass, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO `users` (`useremail`, `userpassword`, `mobilenumber`, `gender`, `timestamp`, `username`)
                     VALUES ( '$useremail', '$hash', '$phoneNumber', '$gender', current_timestamp(),'$username' )";
                     $result = mysqli_query($conn, $sql);
                     if($result)
                     {
                        $showalert = true;
                        header("Location:/forum/index.php?signupsuccess=true");
                        exit();
                     }
            }
            else
            {
                $showerror = "Password Do Not Match ";
                
            }
    }
    header("Location:/forum/index.php?signupsuccess=false&error=$showerror");
}


?>