<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Samrat Dzns</title>

  <link rel="shortcut icon" type="x-icon" href="images/icon.jpg">

  <!-- font awesome cdn -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"
    integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
  <!-- font awesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- bootstrap cdn  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- aos cdn  -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- custom cdn  -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand d-flex justify-content-between align-items-center order-lg-0" href="index.html">
        <span class="text-uppercase fw-lighter ms-2">Samrat</span>
      </a>

      <div class="order-lg-2 nav-btns">
        <button type="button" class="btn position-relative">
        <span style="color: rgb(7 255 49);">Welcome: <?php echo $_SESSION['username'];?></span>
          <a href="logout.php" class="btn btn-outline-light m-2">Logout</a>
          <a href="cart.html" class="text-light"><i class="fa fa-shopping-cart m-2"></i></a>
        </button>
      </div>

      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-lg-1" id="navMenu">
        <ul class="navbar-nav mx-auto text-center">
          <li class="nav-item px-2 py-2 ">
            <a class="nav-link text-uppercase text-light" href="welcome.php">home</a>
          </li>
          <li class="nav-item px-2 py-2">
            <a class="nav-link text-uppercase text-light" href="shop.html">shop</a>
          </li>
          <li class="nav-item px-2 py-2">
            <a class="nav-link text-uppercase text-light" href="about.html">about</a>
          </li>
          <li class="nav-item px-2 py-2 border-0">
            <a class="nav-link text-uppercase text-light" href="contact.html">contact</a>
          </li>
          <li class="nav-item px-2 py-2 border-0">
            <a class="nav-link text-uppercase text-light" href="portfolio.html">portfolio</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- end of navbar -->
  <div class="b-example-divider"></div>
  <div class="b-example-divider"></div>
  <div class="b-example-divider"></div>

  <!-- header -->
  <header>
    <div class="back">
      <div class="container ">
        <div class="row ">
          <div class="col-lg-6 animation-container">
            <div class="p-4">
              <img class="col-9  img-fluid mx-auto d-block"  src="images/3D (91).png" />
            
            </div>
          </div>
          <div class="col-lg-6 d-flex justify-content-center align-items-center ">
            <div class="abc">
              <h1 class="display-4 text-light webname ">Samrat<span class=" webname2"> Dzns</span></h1>
              <p class=" text-light"><span class="uniq">Exceptional designs </span> for you! </p>
              <a href="shop.html" class="btn btn-outline-light">Shop Now</a>
            </div>
          </div>
        </div>
      </div>
  </header>

  <div class="b-example-divider"></div>
  <!-- end of header -->
  <!-- about samrat dzns -->
  <div class="aboutsd ">
    <div class="container my-5  ">
      <div class="row ">
        <div class="col-lg-7 " data-aos="fade-right">
          <div class="mt-4 ">
            <h1 class="display-6 text-center webname3">What is <span class="webname2">Samrat Dzns?</span></h1>
            <div class="mt-4">
              <p class=" text-secondary">Samrat Dzns is the ultimate resource for GFX Artists who want to take their
                work to
                the next level. With a
                vast collection of high-quality Renders and Models for Free Fire and other popular games, this website
                provides everything you need to create stunning graphics and visual effects. Whether you're a seasoned
                professional or just starting out, Samrat Dzns makes it easy and affordable to access the best assets
                for
                your work. With a user-friendly interface, powerful search functions, and quick and easy downloads,
                Samrat Dzns is the go-to destination for all your GFX needs. Visit us today and see for yourself what
                makes
                Samrat Dzns the best choice for GFX Artists everywhere. </p>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="p-4" data-aos="fade-right">
            <img class="col-9  img-fluid rounded-circle  mx-auto d-block " src="images/icon.jpg" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end of about samrat dzns -->
  <div class="b-example-divider"></div>
  <!-- favorite 3D Renders -->
  <div class="container">
    <h1 class="text-light text-center " data-aos="fade-down">MOST <span >FAVORITE 3D </span><span class="persnol">RENDERS</span></h1>
    <div class="items d-flex mt-5 flex-wrap">
      <div class="card mx-auto d-block product  hover-zoomin flex-items m-4" data-aos="fade-up" style="width: 18rem;">
        <a href="product1.html"><img src="images/3D (175) (1).png" class="card-img-top" alt="..."></a>
        <div class="card-body">
          <h5 class="card-title text-center text-light">RENDER ID : 001</h5>
          <p class="card-text text-center text-secondary">Free Fire 3D Render</p>
        </div>
        <ul class="list-group list-group-flush d-flex align-items-center">
          <li class="list-group-item rate text-light"><span class="discount">₹ 149.00</span> ₹ 99.00</li>
        </ul>
        <div class="card-body text-center">
          <a href="cart.html" class="btn btn-outline-light" onclick="addToCart('RENDER ID : 001', 99.00,'images/3D (175) (1).png')">ADD TO CART</a>
        </div>
      </div>
      <div class="card mx-auto d-block  product hover-zoomin flex-items m-4" data-aos="fade-up" style="width: 18rem;">
        <a href="product2.html"><img src="images/untitled10 (1).png" class="card-img-top" alt="..."></a>
        <div class="card-body">
          <h5 class="card-title text-center text-light">RENDER ID : 002</h5>
          <p class="card-text text-center text-secondary">Free Fire 3D Render</p>
        </div>
        <ul class="list-group list-group-flush d-flex align-items-center">
          <li class="list-group-item rate text-light"><span class="discount">₹ 69.00</span> ₹ 29.00</li>
        </ul>

        <div class="card-body text-center">
          <a href="cart.html" class="btn btn-outline-light" onclick="addToCart('RENDER ID : 002', 29.00,'images/untitled10 (1).png')">ADD TO CART</a>
        </div>
      </div>
      <div class="card mx-auto d-block product  hover-zoomin flex-items m-4" data-aos="fade-up" style="width: 18rem;">
        <a href="product3.html"> <img src="images/3D (97) (1).png" class="card-img-top" alt="..."></a>
        <div class="card-body">
          <h5 class="card-title text-center text-light">RENDER ID : 003</h5>
          <p class="card-text text-center text-secondary">Free Fire 3D Render</p>
        </div>
        <ul class="list-group list-group-flush d-flex align-items-center">
          <li class="list-group-item rate text-light"><span class="discount ">₹ 99.00</span> ₹ 69.00</li>
        </ul>
        <div class="card-body text-center">
          <a href="cart.html" class="btn btn-outline-light" onclick="addToCart('RENDER ID : 003', 69.00,'images/3D (97) (1).png')">ADD TO CART</a>
        </div>
      </div>
    </div>
  </div>
  <!-- end of FAVORITE items -->
  <div class="b-example-divider"></div>
  <!-- about me -->

  <div class="aboutsd">
    <div class="container my-5" data-aos="fade-right">
      <div class="row">
        <div class="col-lg-7">
          <div class="p-5">
            <h1 class="display-6 text-center webname3 mb-4">Ab<span class="newstyle">out </span><span class="webname2">US</span></h1>
            <p class=" text-secondary">This website includes graphic designing , 3d models & renders.The main purpose of this website is to provide materials of graphic designing and 3d render
              or models at affordable price.Because all editors don't have laptops or comuters. So , we are giving this
              platform to buy them at affordable price. This platform gives us user friendly enviornment and easy to
              purchaing items and if anyone want our persnol 3d render and models so this platform give
              this opportunity also.</p>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="p-5 mt-2 ">
            <div class="col-lg-6 order-3 pl-lg-5 order-lg-2">
              <div class="mb-5">
                <strong class="text-light">Designer : </strong> <span class="percent">89%</span>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                    style="width: 89%;">
                  </div>
                </div>
              </div>
              <div class="mb-5">
                <strong class="text-light">Developer : </strong><span class="percent"> 75%</span>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                    style="width: 75%;">
                  </div>
                </div>
              </div>
              <div class="mb-5">
                <strong class="text-light">3D Artist : </strong><span class="percent"> 94%</span>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                    style="width: 94%;">
                  </div>
                </div>
              </div>
              <div class="mb-5">
                <strong class="text-light">Freelancer : </strong><span class="percent"> 94%</span>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                    style="width: 94%;">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end of about me -->
  <div class="b-example-divider"></div>

  <!-- my Recent portfolio -->
  <div class="container">
    <h1 class="fw-light text-light text-center text-lg-start mt-4 mb-0" data-aos="fade-right"><span
        class="persnol">Thumbnail </span>Designs</h1>
    <hr class="mt-2 mb-5  text-light ">
    <div class="row text-center text-lg-start " data-aos="fade-up">
      <div class="col-lg-3 col-md-4 col-6 hover-zoomin">
        <a href="#" class="d-block mb-4 h-100 ">
          <img class="img-fluid img-thumbnail " src="images/Untitled27.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6 hover-zoomin">
        <a href="#" class="d-block mb-4 h-100 ">
          <img class="img-fluid img-thumbnail " src="images/Untitled28.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6 hover-zoomin">
        <a href="#" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="images/Untitled32.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6 hover-zoomin">
        <a href="#" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="images/Untitled34.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6 hover-zoomin">
        <a href="#" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="images/Untitled35.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6 hover-zoomin">
        <a href="#" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="images/osm.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6 hover-zoomin">
        <a href="#" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="images/Untitled38.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6 hover-zoomin">
        <a href="#" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="images/mst.jpg" alt="">
        </a>
      </div>
      </div>
    <a href="portfolio.html" class=" btn btn-outline-light d-block" data-aos="fade-right">See More</a>
  </div>
  <!-- end of my Recent portfolio -->

  <!-- quotes -->
  <div class="db ">
    <div class="container">
      <h1 class="title text-center py-4" data-aos="fade-down"> <span class="persnol">Qu<span class="newstyle">o</span>tes</span></h1>
      <div class="row">
        <div class="col md-6 d-flex justify-content-center" data-aos="fade-right">
          <div class="card m-2 cb1 text-center">
            <div class="card-body cb2">
              <h2 class="card-title mb-4">Editor</h2>
              <p class="card-text">Editing yourself is like an irksome coin toss. You've got to strip yourself of super
                ego and operate from the id. Maybe I've got my Freud mixed up. It's just hard to trade a beauty shot for
                the performance with truth and a brightly lit zit.</p>
              <span class="text-warning">-Vera Farmiga</span>
            </div>
          </div>
        </div>
        <div class="col md-6 d-flex justify-content-center" data-aos="fade-right">
          <div class="card m-2 cb1 text-center">
            <div class="card-body cb2">
              <h2 class="card-title mb-4">Developer</h2>
              <p class="card-text">Sometimes it pays to stay in bed on Monday, rather than spending the rest of the week
                debugging Monday’s code.</p>
              <span class="text-warning"> – Dan Salomon</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end of quotes -->
  <!-- footer -->
  <div class="container ">
    <footer class="py-5">
      <div class="row">
        <div class="col-6 col-md-2 mb-3">
          <h5 class="text-light">Pages</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2 "><a href="#" class="nav-link p-0 text-secondary">Home</a></li>
            <li class="nav-item mb-2"><a href="shop.html" class="nav-link p-0 text-secondary">Shop</a></li>
            <li class="nav-item mb-2"><a href="about.html" class="nav-link p-0 text-secondary">About</a></li>
            <li class="nav-item mb-2"><a href="contact.html" class="nav-link p-0 text-secondary">Contact</a></li>
            <li class="nav-item mb-2"><a href="portfolio.html" class="nav-link p-0 text-secondary">Portfolio</a>
            </li>
          </ul>
        </div>
        <div class="col-6 col-md-2 mb-3">
          <h5 class="text-light">Products</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2 "><a href="shop.html" class="nav-link p-0 text-secondary">3D Renders</a></li>
            <li class="nav-item mb-2"><a href="shop.html" class="nav-link p-0 text-secondary">3D Models</a></li>
            <li class="nav-item mb-2"><a href="shop.html" class="nav-link p-0 text-secondary">GFX Materials</a></li>

          </ul>
        </div>

        <div class="col-6 col-md-2 mb-3 ">
          <h5 class="text-light">Social Handles</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="https://www.instagram.com/samrat_dzns/" target="_blank"
                class="nav-link p-0 text-secondary">Instagram</a></li>
            <li class="nav-item mb-2"><a href="https://www.youtube.com/@samratvfx" target="_blank"
                class="nav-link p-0 text-secondary">Youtube</a></li>
            <li class="nav-item mb-2"><a href="https://discord.gg/MYjGqPhNx4" target="_blank"
                class="nav-link p-0 text-secondary">Discord</a></li>
          </ul>
        </div>

        <div class="col-md-5 offset-md-1 mb-3">
          <form action="email_entry.php" method="post">
            <h5 class="text-light">Subscribe to our newsletter</h5>
            <p class="text-secondary">Monthly digest of what's new and exciting from us.</p>
            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
              <input id="newsletter1" type="text" class="form-control" placeholder="Email address" name="email3">
              <button class="btn btn-outline-light" type="submit">Subscribe</button>
          </form>
        </div>
        </div>
      </div>

      <div class="d-flex flex-column flex-sm-row justify-content-between py-3 border-top" data-aos="fade-up">
        <p class="text-light">Made By - Samrat Dzns</p>
        <a href="https://forms.gle/8cs7m9AVuney29W39" class="text-light text-decoration-none btt">JOIN US</a>
        <a href="https://linktr.ee/samrat_dzns" class="text-light text-decoration-none btt">OUR SOCIALS</a>
        <p class="text-light">© 2023 Company, Inc. All rights reserved by Samrat Dzns.</p>
        <ul class="list-unstyled d-flex">
          <li class="ms-3 "><a class="btn btn-outline-light " href="https://www.instagram.com/samrat_dzns/"
              target="_blank" role="button"><i class="fab fa-instagram"></i></a></li>
          <li class="ms-3"><a class="btn btn-outline-light" href="https://www.youtube.com/@samratvfx" target="_blank"
              role="button"><i class="fab fa-youtube"></i></a>
          </li>
          <li class="ms-3"><a class="btn btn-outline-light " href="https://discord.gg/MYjGqPhNx4" target="_blank"
              role="button"><i class="fab fa-discord"></i></a>
          </li>
        </ul>
      </div>
    </footer>
  </div>

  <!-- end of footer -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script> AOS.init();</script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
    <script src="script.js"></script>

</body>
</html>