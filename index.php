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
    <link rel="icon" href="images/revv-10-removebg.png">
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
                  <li><a class="dropdown-item" href="lens&acc.php">Camera Lenses & Accesories</a></li>
                  <li><a class="dropdown-item" href="softwares.php">Software & Editing</a></li>
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
                <div class="dropdown ms-auto ">
                    <button  class="btn btn-outline-dark bg-secondary dropdown-toggle" type="button"      data-bs-toggle="dropdown" aria-expanded="false" style="margin:auto;">
                     Account
                    </button>
                    
                    
                    <ul class="dropdown-menu bg-secondary">
                        <li><a class="dropdown-item" href="a.php">login</a></li>
                        <li><a class="dropdown-item" href="b.php">register</a></li>
                    </ul> 
                    <!-- <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="logut.php">logout</a></li>
                        
                    </ul> -->
                </div>
    </div>
    
    <a href="mycart.php"  class="btn btn-outline-success" style="margin-left:10px;">My Cart(0)</a>
</div>
   
    
      </nav>

      <!-- CAROUSEL BODY -->
      <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <div class="carousel-caption d-md-block">
              <h3>DJI Phantom Pro & Drones</h3>
              <p>For Cinematic Vloggers.</p>
            </div>
            <img src="images/ginkgo-3758236.jpg" width="1280" height="720" class="d-block w-100 h-auto" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="10000">
            <div class="carousel-caption d-md-block">
              <h3>DSLR & Mirrorless Cameras with Lenses</h3>
              <p>For Everyone.</p>
            </div>
            <img src="images/lens-490806_1920.jpg" width="1280" height="720" class="d-block w-100 h-auto" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="10000">
            <div class="carousel-caption d-md-block">
              <h3>Editing Softwares</h3>
              <p>For this kind of editings.</p>
            </div>
            <img src="images/dear-2309801.jpg" width="1280" height="720" class="d-block w-100 h-auto" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner mt-3">
          <div class="carousel-item active">
            <div class="carousel-caption d-md-block">
              <h3>All the things you need for your Cinematography Career.</h3>
              <p>Just explore whatever you need.</p>
            </div>
            <img src="images/drone-3202860.jpg" class="d-block w-100" alt="...">
          </div>
          
        </div>
      </div>
      
      <!-- PRODUCTS -->
      <div class="products">
        <h3 class="products-heading mt-4">Products</h3>
        <div class="container text-center">
          <div class="row">
            <div class="col img-l1">
              <h3><a href="drone.php" class="img-text">Drones</a></h3>
              <p></p>
              <img src="images/dawn-1868870.jpg" class="img" alt="">
            </div>
            <div class="col-md-auto img-l1">
              <h3><a href="camera.php" class="img-text2">Mirrorless Cameras</a></h3>
              <p></p>
              <img src="images/pexels-fox-225157.jpg" class="img" alt="">
            </div>
          </div>
          <div class="row">
            <div class="col img-l1">
              <h3><a href="lens&acc.php" class="img-text2">Lenses & Accessories</a></h3>
              <p></p>
              <img src="images/pexels-hemakumar-j-10346738.jpg" class="img" alt="">
            </div>
            <div class="col-md-auto img-l1">
              <h3><a href="softwares.php" class="img-text">Softwares</a></h3>
              <p></p>
              <img src="images/pexels-ron-lach-8100067.jpg" class="img" alt="">
            </div>
            
          </div>
        </div>   
          
      </div>

      <!-- SHOTS BY DRONES -->
      <div class="shots">
        <h3 class="shots-heading mt-4 ">Shots by DJI</h3>
      </div>
      <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active mt-3">
            <div class="carousel-caption d-md-block">
              <h5>Shot on DJI Phantom</h5>
              <p>Waterfalls always make you feel relief and think of something.</p>
            </div>
            <video class="d-block w-100 h-auto" autoplay muted loop>
              <source src="images/Aerial Drone - 85373.mp4" type="video/mp4">
              <source src="images/Aerial Drone - 85373.ogg" type="video/ogg">
            </video>
          </div>
          <div class="carousel-item mt-3">
            <div class="carousel-caption d-md-block">
              <h5>Shot on DJI Phantom Pro</h5>
              <p>Beach side is always made for chill and having fun.</p>
            </div>
            <video class="d-block w-100 h-auto" autoplay muted loop>
              <source src="images/Beach - 15528.mp4" type="video/mp4">
              <source src="images/Beach - 15528.ogg" type="video/ogg">
            </video>
          </div>
          <div class="carousel-item mt-3">
            <div class="carousel-caption d-md-block">
              <h5>Shot on DJI Mavic 3</h5>
              <p>People felt like they are on Heaven when they are on a long drive.</p>
            </div>
            <video class="d-block w-100 h-auto" autoplay muted loop>
              <source src="images/Car - 11490.mp4" type="video/mp4">
              <source src="images/Car - 11490.mp4" type="video/ogg">
            </video>
          </div>
          <div class="carousel-item mt-3">
            <div class="carousel-caption d-md-block">
              <h5>Shot on DJI Phantom Pro</h5>
              <p>Awesome fogginess in winters of Amazon.</p>
            </div>
            <img src="images/fog-6122490.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item mt-3">
            <div class="carousel-caption d-md-block">
              <h5>Shot on DJI Mavic 3</h5>
              <p>Forests are the life of our blue planet.</p>
            </div>
            <video class="d-block w-100 h-auto" autoplay muted loop>
              <source src="images/Forest - 9797.mp4" type="video/mp4">
              <source src="images/Forest - 9797.ogg" type="video/ogg">
            </video>
          </div>
          <div class="carousel-item mt-3">
            <div class="carousel-caption d-md-block">
              <h5>Shot on DJI Phantom Pro</h5>
              <p>Chicago.</p>
            </div>
            <img src="images/riga-2935039.jpg" class="d-block w-100 h-auto" alt="...">
          </div>
          <div class="carousel-item mt-3">
            <div class="carousel-caption d-md-block">
              <h5>Shot on DJI Phantom Pro</h5>
              <p>San-fransisco.</p>
            </div>
            <img src="images/san-francisco-1258848.jpg" class="d-block w-100 h-auto" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="cam-shots">
        <h3 class="cam-shots-heading mt-4 mb-4 ">Shots by sony</h3>
      </div>
      <div class="row">
        <div class="column">
          <img src="images/cam-shots/pexels-aarti-vijay-2693529.jpg" class="d-block w-100 img-fluid" alt="...">
          <img src="images/cam-shots/pexels-alex-montes-1820563.jpg" class="d-block w-100 img-fluid" alt="...">
          <img src="images/cam-shots/pexels-artem-saranin-1547813.jpg" class="d-block w-100 img-fluid" alt="...">
          <img src="images/cam-shots/pexels-eberhard-grossgasteiger-1366909.jpg" class="d-block w-100 img-fluid" alt="...">
          <img src="images/cam-shots/pexels-eberhard-grossgasteiger-2098427.jpg" class="d-block w-100 img-fluid" alt="...">
          <img src="images/cam-shots/pexels-eberhard-grossgasteiger-2223082.jpg" class="d-block w-100 img-fluid" alt="...">
          
        </div>
        <div class="column">
          <img src="images/cam-shots/pexels-hristo-fidanov-1252869.jpg" class="d-block w-100 img-fluid" alt="...">
          <img src="images/cam-shots/pexels-jack-krzysik-7753054.jpg" class="d-block w-100 img-fluid" alt="...">
          <img src="images/cam-shots/pexels-jacob-colvin-1761279.jpg" class="d-block w-100 img-fluid" alt="...">
          <img src="images/cam-shots/pexels-johannes-plenio-1996042.jpg" class="d-block w-100 img-fluid" alt="...">
          <img src="images/cam-shots/pexels-kammeran-gonzalezkeola-7925859.jpg" class="d-block w-100 img-fluid" alt="...">
          <img src="images/cam-shots/pexels-luis-dalvan-1770809.jpg" class="d-block w-100 img-fluid" alt="...">
          <img src="images/cam-shots/pexels-emre-can-acer-2189696.jpg" class="d-block w-100 img-fluid" alt="...">
          <img src="images/cam-shots/pexels-pixabay-302831.jpg" class="d-block w-100 img-fluid" alt="...">
          <img src="images/cam-shots/pexels-bao-dang-3700369.jpg" class="d-block w-100 img-fluid" alt="...">

        </div>
        <div class="column">
          <img src="images/cam-shots/pexels-martin-péchy-1028225.jpg" class="d-block w-100 img-fluid" alt="...">
          <img src="images/cam-shots/pexels-matheus-bertelli-573302.jpg" class="d-block w-100 img-fluid" alt="...">
          <img src="images/cam-shots/pexels-oleksandr-pidvalnyi-2088019.jpg" class="d-block w-100 img-fluid" alt="...">
          <img src="images/cam-shots/pexels-oziel-gómez-925263.jpg" class="d-block w-100 img-fluid" alt="...">
          <img src="images/cam-shots/pexels-pixabay-268694.jpg" class="d-block w-100 img-fluid" alt="...">
          
          <img src="images/cam-shots/pexels-pixabay-315938.jpg" class="d-block w-100 img-fluid" alt="...">
          <img src="images/cam-shots/pexels-artem-saranin-1213997.jpg" class="d-block w-100 img-fluid" alt="...">
        </div>
        <div class="column">
          <img src="images/cam-shots/pexels-riccardo-228095.jpg" class="d-block w-100 img-fluid" alt="...">
          <img src="images/cam-shots/pexels-todd-trapani-1198817.jpg" class="d-block w-100 img-fluid" alt="...">
          <img src="images/cam-shots/pexels-vlad-bagacian-1368382.jpg" class="d-block w-100 img-fluid" alt="...">
          <img src="images/cam-shots/pexels-eberhard-grossgasteiger-2098428.jpg" class="d-block w-100 img-fluid" alt="...">
          <img src="images/cam-shots/pexels-egil-sjøholt-1906658.jpg" class="d-block w-100 img-fluid" alt="...">
          <img src="images/cam-shots/pexels-guilherme-rossi-1668928.jpg" class="d-block w-100 img-fluid" alt="...">
          <img src="images/cam-shots/pexels-aron-visuals-1646870.jpg" class="d-block w-100 img-fluid" alt="...">
        </div>
      </div>
      <div class="buttons mt-4"><button onclick="one()">1</button>
        <button onclick="two()">2</button>
        <button onclick="four()">4</button>
      </div>
      <hr>
      

<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a "loop" variable
var i;

// Full-width images
function one() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.flex = "100%";
  }
}

// Two images side by side
function two() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.flex = "50%";
  }
}

// Four images side by side
function four() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.flex = "25%";
  }
}
</script>
      

      <footer class="footer">
     
          <span class="footer-icons"><i class="fa-brands fa-facebook fa-2xl fa-shake"></i></span>
          <span class="footer-icons"><i class="fa-brands fa-twitter fa-2xl fa-shake"></i></span>
          <span class="footer-icons"><i class="fa-brands fa-youtube fa-2xl fa-shake"></i></span>
          <span class="footer-icons"><i class="fa-brands fa-instagram fa-2xl fa-shake"></i></span>
          <span class="footer-icons"><i class="fa-brands fa-linkedin-in fa-2xl fa-shake"></i></span>
          <p class="social">Social</p>
        </footer>
          <!-- <div class="footer-bottom">
            <div class="col-1">
              <h5 class="footer-h5">Vector's Arena</h5>
              <p><a href="#" class="footer-links">News</a></p>
              <p><a href="#" class="footer-links">Partners</a></p>
              <p><a href="#" class="footer-links">Contact Us</a></p>
              <p><a href="#" class="footer-links">Terms of Use</a></p>
              <p><a href="#" class="footer-links">About Us</a></p>
            </div>
            <div class="col-2">
            <div class="col-3"></div>
          </div> -->
          <div class="footer-bottom">
            <div class="row">
              <div class="col col-1">
                <h5 class="footer-h5">Vector's Arena</h5>
              <p><a href="#" class="footer-links">News</a></p>
              <p><a href="#" class="footer-links">Partners</a></p>
              <p><a href="#" class="footer-links">Contact Us</a></p>
              <p><a href="#" class="footer-links">Terms of Use</a></p>
              <p><a href="#" class="footer-links">About Us</a></p>
              </div>
              <div class="col col-1">
                <h5 class="footer-h6">Social</h5>
                <p><a href="" class="footer-links">Facebook</a></p>
                <p><a href="" class="footer-links">Instagram</a></p>
                <p><a href="" class="footer-links">Twitter</a></p>
              </div>
              <div class="col col-1">
                <h5 class="footer-h6">Service</h5>
                <p><a href="" class="footer-links">Compare</a></p>
                <p><a href="" class="footer-links">Feedback</a></p>
                <p><a href="" class="footer-links">Bug Report</a></p>
              </div>
              <div class="col col-1">
                <h5 class="footer-h6">Activity</h5>
                <p><a href="" class="footer-links">Influencers</a></p>
                <p><a href="" class="footer-links">Affiliate</a></p>
                <p><a href="" class="footer-links">Co-branding</a></p>
                <p><a href="" class="footer-links">Honor</a></p>
                <p><a href="" class="footer-links">Giveaway</a></p>
              </div>
              <div class="col col-2">
                <h5 class="footer-h6">Newsletter Subscription</h5>
                  <form action="">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Your Email" aria-label="Recipient's username" aria-describedby="button-addon2">
                      <button class="btn btn-dark" type="button" id="button-addon2">Submit</button>
                    </div>
              </form>
              </div>
            </div>
            <div class="row mt-5 credits">
              <p>Copyright<i class="fa fa-copyright" aria-hidden="true"></i> 2022 VECTOR'S ARENA.All rights reserved.</p>
            </div>
          </div>
     

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>