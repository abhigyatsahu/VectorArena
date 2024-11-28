<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User login - Vector's Arena</title>
    <link rel="stylesheet" href="register.css">

</head>

<body>

<?php
   include 'dbcon.php';  
   if(isset($_POST['submit'])){
   
    $first = mysqli_real_escape_string($con, $_POST['first']);
    $last = mysqli_real_escape_string($con, $_POST['last']);
    $emailaddress = mysqli_real_escape_string($con, $_POST['emailaddress']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirmpassword  = mysqli_real_escape_string($con, $_POST['confirmpassword']);

    // $con=mysqli_connect('$localhost','$root',' ','$form');

    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($confirmpassword, PASSWORD_BCRYPT);

    $emailaddressquery = "select * from registration where emailaddress='$emailaddress'";
    $query = mysqli_query($con,$emailaddressquery);

    $emailaddresscount = mysqli_num_rows($query);
    
    if($emailaddresscount>0){
        
        echo '<script type ="text/JavaScript">';  
        echo 'alert("email already exists")';  
        echo '</script>';
 

              // echo "email already exists";
        
    }else{
        if($password === $confirmpassword){

            $insertquery = "INSERT INTO `registration`(`first`, `last`, `emailaddress`, `password`, `confirmpassword`) 
            VALUES ('$first','$last','$emailaddress','$pass','$cpass')";

            $query = mysqli_query($con, $insertquery);

            if($query){
                ?> 
                   <script>
                     alert("Inserted sussesful");
                   </script>
                <?php
                }else    
                ?>
                   <script>
                      alert("No Inserted");
                  </script>
                <?php
            }
        else{
               ?>
                   <script>
                       alert("password are not matching");
                   </script>
               <?php
            }
    }
     }


?>
    
    <div class="container">
        
            <div class="head">Signup</div>
        

        <div class="details">

            <div class="txt">

                <form action="#" method="POST" class="signup">
                   
                    <div class="fill">
                        <input type="text" name="first" placeholder="First Name" required>
                    </div>
                    <div class="fill">
                        <input type="text" name="last" placeholder="Last Name" required>
                    </div>
                    <div class="fill">
                        <input type="text" name="emailaddress" placeholder="Email Address" required>
                    </div>
                    <div class="fill">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="fill">
                        <input type="password" name="confirmpassword" placeholder="Confirm password" required>
                    </div>
                    <div class="fill btn">
                        <div class="btn-box"></div>
                        <input type="submit" name="submit" value="Signup">
                    </div>
                    <div class="signup-link">Already a customer?<a href="a.php">Login</a></div>
                    
                </form>
            </div>
        </div>

    </div>

</body>

</html>