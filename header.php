<!doctype html>
<html lang="en">
  <head>
    <title>MOBILE SHOPPEE</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
    <!--OWLCAROUSEL-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    
    <!--FONTAWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
     
    <!--CUSTOM CSS-->
    <link rel="stylesheet" href="style.css">
    <?php
      require('functions.php');
    
    ?>

   </head>
  <body>

    <!-----------------------------HEADER-------------------->
    <header id="header">
      <!----PRIMARY NAVIGATION--------------->
      <nav class="navbar navbar-expand-lg navbar-light color-secondary-bg ">
        <a class="navbar-brand font-castoro font-size-20" href="#">Mobile Shoppee</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav m-auto font-play">
            <li class="nav-item active">
              <a class="nav-link" href="#">On Sale</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Category</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Products<i class="fas fa-chevron-down"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Coming soon</a>
            </li>
          </ul>
          <form action="#" class="font-size-14 font-play">
              <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                  <span class="font-size-16 px-2 text-white"> 
                    <i class="fas fa-shopping-cart"></i>
                  </span>
                  <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart'));?></span>
              </a>

          </form>
        </div>
      </nav>
      <!--X--PRIMARY NAVIGATION-------X-------->
    </header>
    <!--------------X---------------HEADER----------X---------->
    <!-----------------------------MAIN-------------------->
    <main id="main-site">