<?php
include "header.php";
?>
    <script src= "myJS.js"> </script>

      <div class="row">
        <div class="col-12">
            <main>
          <img width="100%" height="647px" src="https://res.cloudinary.com/anora/image/upload/f_auto,q_auto/v1612346750/common/other/northern-lights.jpg" alt="main image" >
           </div>
      </div>
      <div class="grid-container" style="padding: 20px;">
      <button type="button" style="float: left;  width: 200px; padding-right: 20px; margin-bottom: 40px; margin-left: 450px; margin-right: 20px;" class="btn btn-dark" onclick="document.getElementById('header_image').style.display='none'">"Image not working? Click me to hide it!"</button>
      <button type="button" style="float: right;  width: 200px; padding-left: 20px; margin-bottom: 40px; margin-right: 450px; margin-left: 20px;" class="btn btn-dark" onclick="document.getElementById('header_image').style.display='inline-flex'">"Show the image again!"</button>
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
        <div class="grid-item" onmouseover="style.color='green'" onmouseout="style.color='black'"><b>Location </b></div>
        <div class="grid-item" onmouseover="style.color='green'" onmouseout="style.color='black'"><b>Phone number</b></div>
        <div class="grid-item" onmouseover="style.color='green'" onmouseout="style.color='black'"><b>E-mail</b></div>  
        <div class="grid-item" onmouseover="style.color='green'" onmouseout="style.color='black'">Pohjoisesplanadi<br>
            11-13 00170<br>
            Helsinki</div>
        <div id="phone_num" class="grid-item" onmousedown="mousedownevent()" onmouseover="style.color='green', style.fontSize ='40px'" onmouseout="style.color='grey',style.fontSize ='30px'">+35825657316</div>
        <div class="grid-item" onmouseover="style.color='green', style.fontSize ='40px'" onmouseout="style.color='grey',style.fontSize ='30px'" >northtravel@gmail.com</div> 
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