<?php 
    

    if(isset($_POST['submit'])){

        $username   = $_POST['username'];
        $email      = $_POST['password'];
        $password   = $_POST['email'];

        if($username != ""){
            if($password != ""){
                if($email !=""){


                    $con = mysqli_connect('localhost', 'root', '', 'webtech');
                    $sql = "insert into gameseller values ('', '{$username}', '{$password}', '{$email}','gameseller')";

                    if (mysqli_query($con, $sql))
                    {
                        header('location: ../views/login.html');
                    }
                    else
                    {
                        echo "Error! Try again.";
                    }
                    
                }else{
                    echo "invalid username....";
                }
            }else{
                echo "invalid password....";
            }
        }else{
            echo "invalid email....";
        }
    }
    
?>