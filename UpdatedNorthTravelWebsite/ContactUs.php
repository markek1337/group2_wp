<?php
include "header.php";
?>

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
      <script language="Javascript" type="text/Javascript">    
      function mouseoverevent()  
      {  
          alert("Our phone is unavailable at this time due to technical issues");  
      }  
      </script>
        <div id="phone_num" class="grid-item" onmouseover="mouseoverevent()">+35825657316</div>
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
        

          <script src= "myJS.js"> </script>
          <button type="button" id="demo" onclick="myjsfunction()">Submit</button>
          
          

        
        <noscript>You need to enable JS to see this content.</noscript>
        </form>
      </div>
    </aside>
    
    
</body>

  <!--Footer-->
<?php
include "footer.php";
?>

</html>