<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vector's Arena</title>
    <link rel="icon" href="images/vectors.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cinzel:wght@400;500;600;700;800;900&family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Quicksand:wght@300;400;500;600;700&family=Zilla+Slab:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">

<script src="https://kit.fontawesome.com/9282b81956.js" crossorigin="anonymous"></script>
</head>
<body>
        <!-- HEADER -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark h-75 sticky-top">
        <div class="container-fluid">
          <a class="navbar-brand ms-5" href="#">
            <img src="images/vectors.png" width="23" height="23">
            Vector's Arena
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-4 ">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="features.html">Features</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Products
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="drone.php">Drones</a></li>
                  <li><a class="dropdown-item" href="camera.php">Cameras</a></li>
                  <li><a class="dropdown-item" href="lens&acc.php ">Camera Lenses & Accesories</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="softwares.html">Software & Editing</a></li>
                </ul>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="#">Products</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="support.html">Support</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact-us.html">Contact Us</a>
              </li>
            </ul>
            <!-- <form class="d-flex ms-5 ps-5">
              <input class="form-control me-2" type="text" placeholder="Search">
              <button class="btn btn-dark" type="button">Search</button>
            </form> -->
            <!-- <button type="button" class="btn btn-light ms-auto rounded-circle"><i class="fa-solid fa-user"></i></button> -->
            <div class="dropdown ms-auto">
              <button class="btn btn-outline-dark bg-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="margin:auto;">
                Account
              </button>
              <?php
              $count=0;
                if(isset($_SESSION['cart']))
                {
                  $count=count($_SESSION['cart']);
                }
              ?>
              <a href="mycart.php"  class="btn btn-outline-success" style="margin-left:10px;" >My Cart (<?php echo $count; ?>)</a>
              <!-- <ul class="dropdown-menu bg-secondary">
                <li><a class="dropdown-item" href="a.php">login</a></li>
                <li><a class="dropdown-item" href="b.php">register</a></li>
              </ul> -->

                  <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="logut.php">logout</a></li>
                        
                    </ul>
            </div>
          </div>
        </div>
      </nav>

      <!-- My Cart --------------------------------------------------------------------- -->

      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center border rounded bg-light my-4">
            <h1>My cart</h1>
          </div>
          <div class="col-lg-9">
              <table class="table">
                      <thead class="text-center">
                        <tr>
                          <th scope="col">Serial No.</th>
                          <th scope="col">Item Name</th>
                          <th scope="col">Item Price</th>
                          <th scope="col">Quantity</th>
                          <th scope="col">REMOVE</th>
                        </tr>
                      </thead>
                      <tbody class="text-center">
                        <?php
                            $total=0;
                            if(isset($_SESSION['cart']))
                            {

                              foreach($_SESSION['cart'] as $key => $value)
                              {
                                $total = $total + $value['Price'];
                                echo" 
                                    <tr>
                                      <td>1</td>
                                      <td>$value[Item_name]</td>
                                      <td>$value[Price]</td>
                                      <td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='50'</td>
                                      <td>
                                        <form action='manage_cart.php' method='post'>
                                              <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                                              <input type='hidden' name='Item_name' value='$value[Item_name]'>
                                        </form>
                                      </td>
                                    </tr>
                                ";
                              } 
                            }
                        ?>
                     
                      </tbody>
              </table>

          </div>
          <div class="col-lg-3">
            <div class="border bg-light rounded p-4">
              <h4>Total:</h4>
              <h5 class="text-right">Rs. <?php echo $total ?></h5>
              
              <form action="payment.php">
                  
                <button type="submit" class="btn btn-block btn-primary" >Purchase</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- footer -->
   
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>