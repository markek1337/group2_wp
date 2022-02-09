<?php
include "header.php";?>

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
