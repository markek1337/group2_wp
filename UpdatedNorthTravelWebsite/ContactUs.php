<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">

    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="leftnav container-md mb-0 pb-0 col-md-5 col-lg-5 col-sm-12">
              <a class="navbar-brand" href="index.html">
                  <img src="images/logo.png" alt="logo North Travel" class="logo-image">
              </a>
              <span class="navbar-brand navbar-text">North Travel - Explore the Nordics</span>
          </div>
        <div class="midnav navbar-brand container-md" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">Home</a>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="C:\Users\PC1\Pictures\destinations.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Destinations</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="destination.html">Our selection</a></li>
                <li><a class="dropdown-item" href="swedenpage.html">Sweden</a></li>
                <li><a class="dropdown-item" href="icelandpage.html">Iceland</a></li>
                <li><a class="dropdown-item" href="norwaypage.html">Norway</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ContactUs.html">Contact Us</a>
            </li>
          </ul>
        </div>
        <div class="rightnav container-md" id="navbarSupportedContent">
          <form class="d-flex">
              <div class="form"> <i class="fa fa-search"></i> <input type="text" class="form-control form-input" placeholder="Search..."> <span class="left-pan"><i class="fa fa-microphone"></i></span> </div>
          </form>
        </div>
      </div>
    </nav>

      <div class="row">
        <div class="col-12">
            <main>
          <img width="100%" height="647px" src="https://res.cloudinary.com/anora/image/upload/f_auto,q_auto/v1612346750/common/other/northern-lights.jpg" alt="main image" >
           </div>
      </div>

      

      <div class="grid-container">
        <div class="grid-item"> </div>
        <div class="grid-item"><h1><strong>Contact Us</strong></h1> </div>
        <div class="grid-item"> </div>

        <div class="grid-item"> 
           <img width="100px" height="100px" alt="location" src="https://img.icons8.com/ios/344/place-marker--v1.png">
        </div>
        <div class="grid-item">
           <img width="100px" height="100px" alt="phone" src="https://img.icons8.com/ios/344/phone.png">
        </div>
        <div class="grid-item">
            <img width="100px" height="100px" alt="email" src="https://img.icons8.com/ios/344/email-open.png">
        </div>
        <div class="grid-item"><b>Location</b></div>
        <div class="grid-item"><b>Phone number</b></div>
        <div class="grid-item"><b>E-mail</b></div>  
        <div class="grid-item">Pohjoisesplanadi<br>
            11-13 00170<br>
            Helsinki</div>
        <div class="grid-item">+35825657316</div>
        <div class="grid-item">northtravel@gmail.com</div> 
      </div>
      
    </main>
    </div>

    <aside>
    <div id=forms>
        <form action="/action_page.php">
          <label for="fname">First Name</label>
          <input type="information" id="fname" name="firstname" placeholder="Your name..">
      
          <label for="lname">Last Name</label>
          <input type="information" id="lname" name="lastname" placeholder="Your last name..">
      
          <label for="sbj">Subject</label>
          <input type="information" id="sbj" name="subject" placeholder="Write your request..">
        
          <input type="submit" value="Submit">
        </form>
      </div>
    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>

  <!--Footer-->
  <footer>
    <div class="footer-top">
        <div class="container fot-cont">
            <div class="row my-row-4">
                <div class="col-md-4 col-sm-6 col-xs-12 segment-one">
                    <img src="images/newlogo.png" class="img footer-logo" alt="" width="127" height="106">
                    <h2>NORTH TRAVEL</h2>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12 segment-two">
                    <img src="images/social media icons.png" class="img social-media" alt="" width="257" height="70">
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12 segment-three">
                    <h2>SIGN UP FOR NEWSLETTER</h2>
                    <form class="input-group">
                        <input type="text" class="form-control form-control-sm" placeholder="Your email"
                          aria-label="Your email" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-sm btn-outline-white my-0" type="button">Sign Up</button>
                        </div>
                      </form>
                  </div>
                </div>
            </div>
            <div class="row my-row-4">
                <div class="col-md-12 segment-four">
                    <p>&copy; North Travel 2022 All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>

</html>