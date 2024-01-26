<?php
$showerror =  "false";
if($_SERVER['REQUEST_METHOD']=="POST")
{
    include 'connect.php';
    $email = $_POST['loginemail'];
    $password = $_POST['loginpassword'];
    $sql = "select * from users WHERE useremail = '$email'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);
    if($numRows == 1)
    {
        $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row['userpassword']))
            {
                    $showloginalert = true;
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['useremail'] = $email;
                    $_SESSION['sno'] = $row['sno'];
                    $_SESSION['username'] = $row['username'];
                    // $_SESSION['username'] = $username;
                    echo "Logged in successfull".$email;

            }
                header("Location:/forum/index.php");
                
            
        }
        header("Location:/forum/index.php");
    }





?>