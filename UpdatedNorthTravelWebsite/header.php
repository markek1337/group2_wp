
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Business Frontpage - Start Bootstrap Template</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="myJS.js"></script>
        
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light" style="padding:5px !important;">
          <div class="container-fluid d-flex align-items-center justify-content-between">
              <div class="leftnav container-md mb-0 pb-0 col-md-5 col-lg-5 col-sm-12">
                  <a class="navbar-brand" href="index.php">
                      <img style="width:60px !important;" src="images/logo.png" alt="logo North Travel" class="logo-image">
                  </a>
                  <span class="navbar-brand navbar-text">North Travel - Explore the Nordics</span>
              </div>
            <div class="midnav navbar-brand container-md" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="C:\Users\PC1\Pictures\destination.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Destinations</a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="destination.php">Our selection</a></li>
                    <li><a class="dropdown-item" href="swedenpage.php">Sweden</a></li>
                    <li><a class="dropdown-item" href="icelandpage.php">Iceland</a></li>
                    <li><a class="dropdown-item" href="norwaypage.php">Norway</a></li>
                    <li><a class="dropdown-item" href="Login/register/admin/pricelist/pricelist.docx">Download our pricelist</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="ContactUs.php">Contact Us</a>
                </li>
                <!-- Themes-->
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="C:\Users\PC1\Pictures\destination.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Theme</a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <form action="">
                      <label>
                        Background color:  
                        <input type="color" name="background" size="10"
                        onchange="setColor('background', this.value)" />
                      </label>
                      <br />
                      <label>
                        Font color: 
                        <input type="color" name="foreground" size="10"
                        onchange="setColor('foreground', this.value)" />
                      </label>
                    </form>
                  </ul>
                </li>
                <!-- Themes-->
                <li>
                <?php  if (isset($_SESSION['user'])) : ?>
                  <a class="btn btn-primary nav-btn" href="Login/register/profile.php" role="button" style="background-color:#1cb49a; margin-left: 30%; border:none; padding:10px; margin-top:5px;">Profile</a>
                  <a class="btn btn-primary nav-btn" href="shopping/products.php" role="button" style="background-color:#4f7fa3; border:none; padding:10px; margin-top:5px;">Cart</a>
                  <a class="btn btn-primary nav-btn" href="Login/filter/filter.php" role="button" style="background-color:#4f7fa3; border:none; padding:10px; margin-top:5px;">Filter Search</a>
                  <a class="btn btn-primary nav-btn" href="index.php?logout='1'" role="button" style="background-color:#4f7fa3; border:none; padding:10px; margin-top:5px;">Log out</a>


                <?php else : ?>
                  <a class="btn btn-primary nav-btn" href="Login/register/register.php" role="button" style="background-color:#1cb49a; margin-left: 100%; border:none; padding:10px; margin-top:5px;">Register</a>
                  <a class="btn btn-primary nav-btn" href="Login/filter/filter.php" role="button" style="background-color:#4f7fa3; border:none; padding:10px; margin-top:5px;">Filter Search</a>
                 <?php endif ?>
                </li>
              </ul>
            </div>
          </div>
        </nav>
