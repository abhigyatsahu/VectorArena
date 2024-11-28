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
    <link rel="stylesheet" href="login.css">
</head>

<body>
<?php
   include 'dbcon.php';  
   if(isset($_POST['submit'])){

       $emailaddress = $_POST['emailaddress'];
       $password = $_POST['password'];
  
       $emailaddress_search = "select * from registration where emailaddress = '$emailaddress'";
       $query = mysqli_query($con,$emailaddress_search);
 
       
       $emailaddress_count = mysqli_num_rows($query);

       if($emailaddress_count){

         $emailaddress_pass = mysqli_fetch_assoc($query);

         $db_pass = $emailaddress_pass['password'];

        //  $_SESSION['username'] = $emailaddress_pass['username'];

         $pass_decode = password_verify($password, $db_pass);

         if($pass_decode){
            echo "login successful";
            ?>
            <script>
                location.replace("index.php")
            </script>
            <?php
         }else{
            
        echo '<script type ="text/JavaScript">';  
        echo 'alert("password incorrect")';  
        echo '</script>';
                // echo "password incorrect";
              }

       }else{
             echo "Invalid Email";
       }
     }


?>

    <div class="container">

        <div class="head">Login</div>

        <div class="details">

            <div class="txt">
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" class="login">

                    <div class="fill">
                        <input type="text" name="emailaddress" placeholder="Email-Id" required>
                    </div>

                    <div class="fill">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>

                    <div class="forgot"><a href="">Forgot password?</a></div>

                    <div class="btn">
                        <div class="btn-box btn-outline-primary"></div>
                        <input type="submit" name="submit" value="Login">
                    </div>

                    <div class="signup-link">New to Vector's Arena? <a href="b.php">Signup now</a></div>

                </form>


            </div>
        </div>
    </div>

</body>

</html>