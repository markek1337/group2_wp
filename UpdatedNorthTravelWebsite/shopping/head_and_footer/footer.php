<?php include '../connection.php'; 
include '../connection.php'; 
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $sql="INSERT INTO Newsletter (Email) values ('$email')";
    $result = mysqli_query($con,$sql);
    if($result){
        echo "You are now subscribed";
    
    }else{
        die(mysqli_error($con));
    }
    
    }
    
?>
<footer>
            <div class="footer-top">
                <div class="container fot-cont">
                    <div class="row my-row-4">
                        <div class="col-md-4 col-sm-6 col-xs-12 segment-one">
                            <img src="../images/newlogo.png" class="img footer-logo" alt="" width="127" height="106">
                            <h2 class="footer-text">NORTH TRAVEL</h2>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12 segment-two">
                            <img src="../images/social media icons.png" class="img social-media" alt="" width="257" height="70">
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12 segment-three">

                        <script>  
function validateemail()  
{  
var x=document.Newsletter.email.value;  
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
  return false;  
  }  
}  
</script> 
                            <h2>SIGN UP FOR NEWSLETTER</h2>
                            <form class="input-group" name= Newsletter method = "post" action="#" onsubmit="return validateemail();">
                            <label >Email</label>
                          <input type="email" class="form-control form-control-sm" placeholder="Enter your email..." name="email" aria-label="Your email" aria-describedby="basic-addon2">

                                <div class="input-group-append">
                                  <button class="btn btn-sm btn-outline-white my-0" type="submit" name="submit">Sign Up</button>
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