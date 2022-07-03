<!DOCTYPE html>
<html>
  <head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Site Metas -->
    <link rel="icon" href="images/fevicon/fevicon.png" type="image/gif" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>HandTime</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap"
      rel="stylesheet"
    />

    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
  </head>

  <body>
    <div class="hero_area">
      <!-- header section strats -->
      <header class="header_section">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.html">
              <span> HandTime </span>
            </a>

            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html"
                    >Home <span class="sr-only">(current)</span></a
                  >
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="product.php">Products</a>
                </li>
               
                <li class="nav-item">
                  <a class="nav-link" href="admin/index.php">Admin</a>
                </li>
              </ul>
              <div class="user_optio_box">
                <a href="">
                  <i class="fa fa-user" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </nav>
        </div>
      </header>

      <!-- end header section -->
      <!-- slider section -->
      
      <section class="slider_section">
        <div class="slider_bg_box">
          <img src="images/slider_bg2.jpg" alt="" />
        </div>
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <h1>Stylish Watches</h1>
                      <p>
                        Style for Men
                      </p>
                      <div class="btn-box">
                        <a href="" class="btn1"> Contact Us </a>
                        <a href="" class="btn2"> About Us </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <h1>Best Price</h1>
                      <p>
                        Wear best, pay less
                      </p>
                      <div class="btn-box">
                        <a href="" class="btn1"> Contact Us </a>
                        <a href="" class="btn2"> About Us </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <h1>Premium Quality</h1>
                      <p>
                        Best Quality
                      </p>
                      <div class="btn-box">
                        <a href="" class="btn1"> Contact Us </a>
                        <a href="" class="btn2"> About Us </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <h1>Feel Luxury</h1>
                      <p>
                        Luxury Design
                      </p>
                      <div class="btn-box">
                        <a href="" class="btn1"> Contact Us </a>
                        <a href="" class="btn2"> About Us </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <h1>20% off on all products</h1>
                      <p>
                        Buy now and get straight 20% off
                      </p>
                      <div class="btn-box">
                        <a href="" class="btn1"> Contact Us </a>
                        <a href="" class="btn2"> About Us </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <ol class="carousel-indicators">
            <li
              data-target="#customCarousel1"
              data-slide-to="0"
              class="active"
            ></li>
            <li data-target="#customCarousel1" data-slide-to="1"></li>
            <li data-target="#customCarousel1" data-slide-to="2"></li>
            <li data-target="#customCarousel1" data-slide-to="3"></li>
            <li data-target="#customCarousel1" data-slide-to="4"></li>
          </ol>
        </div>
      </section>
      <!-- end slider section -->
    </div>

    <section class="product_section">
      <div class="container">

        <div class="product_heading">
          <h2>Top Sale Watches</h2>
        </div>
        <?php
            $conn = mysqli_connect('localhost','root','','cart_db');
            $query = 'SELECT * FROM products';
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result)>0){
              while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $name = $row['name'];
                $image = $row['image'];
                $price = $row['price'];
            ?>
        <div class="product_container">
          <div class="box">
            <div class="box-content">
              <div class="img-box">
                <img src="admin/uploaded_img/<?php echo $image; ?>" alt="" />
              </div>
              <div class="detail-box">
                <div class="text">
                  <h6><?php echo $name; ?></h6>
                  <h5><span>$</span> <?php echo $price; ?></h5>
                </div>
                <div class="like">
                  <h6>Like</h6>
                  <div class="star_container">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="btn-box">
              <a href=""> Add To Cart </a>
            </div>
          </div>
          <?php
              }
            }
          ?>

      </div>
    </section>
    
   

    <!-- info section -->
    <section class="info_section layout_padding2">
      <div class="container">
        <div class="info_logo">
          <h2>HandTime</h2>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="info_contact">
              <h5>About Shop</h5>
              <div>
                <div class="img-box">
                  <img src="images/location-white.png" width="18px" alt="" />
                </div>
                <p>Islamia University of Bahawalpur</p>
              </div>
              <div>
                <div class="img-box">
                  <img src="images/telephone-white.png" width="12px" alt="" />
                </div>
                <p>+01 1234567890</p>
              </div>
              <div>
                <div class="img-box">
                  <img src="images/envelope-white.png" width="18px" alt="" />
                </div>
                <p>fa19m2ba092@gmail.com</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_info">
              <h5>Informations</h5>
              <p>
                This Website is made and hosted by Shoaib Iqbal Khan.
              </p>
            </div>
          </div>

          <div class="col-md-3">
            <div class="info_insta">
              <h5>Instagram</h5>
              <div class="insta_container">
                <div class="row m-0">
                  <div class="col-4 px-0">
                    <a href="">
                      <div class="insta-box b-1">
                        <img src="images/w1.png" alt="" />
                      </div>
                    </a>
                  </div>
                  <div class="col-4 px-0">
                    <a href="">
                      <div class="insta-box b-1">
                        <img src="images/w2.png" alt="" />
                      </div>
                    </a>
                  </div>
                  <div class="col-4 px-0">
                    <a href="">
                      <div class="insta-box b-1">
                        <img src="images/w3.png" alt="" />
                      </div>
                    </a>
                  </div>
                  <div class="col-4 px-0">
                    <a href="">
                      <div class="insta-box b-1">
                        <img src="images/w4.png" alt="" />
                      </div>
                    </a>
                  </div>
                  <div class="col-4 px-0">
                    <a href="">
                      <div class="insta-box b-1">
                        <img src="images/w5.png" alt="" />
                      </div>
                    </a>
                  </div>
                  <div class="col-4 px-0">
                    <a href="">
                      <div class="insta-box b-1">
                        <img src="images/w6.png" alt="" />
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="info_form">
              <h5>Newsletter</h5>
              <form action="">
                <input type="email" placeholder="Enter your email" />
                <button>Subscribe</button>
              </form>
              <div class="social_box">
                <a href="">
                  <img src="images/fb.png" alt="" />
                </a>
                <a href="">
                  <img src="images/twitter.png" alt="" />
                </a>
                <a href="">
                  <img src="images/linkedin.png" alt="" />
                </a>
                <a href="">
                  <img src="images/youtube.png" alt="" />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end info_section -->

    <!-- footer section -->
    <!-- <section class="footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Free Html Templates</a>
        </p>
      </div>
    </section> -->
    <!-- footer section -->

    <!-- jQery -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <!-- bootstrap js -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="js/custom.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
    <!-- End Google Map -->
  </body>
</html>
