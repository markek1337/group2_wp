<?php

include 'connection.php';

if (isset($_POST["submit"])) {
    $First_name = mysqli_real_escape_string($db, $_POST["First_name"]);
    $Last_name = mysqli_real_escape_string($db, $_POST["Last_name"]);
    $Phone_number = mysqli_real_escape_string($db, $_POST["Phone_number"]);
    $Country = mysqli_real_escape_string($db, $_POST["Country"]);
    $Email = mysqli_real_escape_string($db, $_POST["Email"]);
    $ENTERpassword = mysqli_real_escape_string($db, md5($_POST["ENTERpassword"]));
    $cpassword = mysqli_real_escape_string($db, md5($_POST["cpassword"]));

    if ($ENTERpassword === $cpassword) {
        $photo_name = mysqli_real_escape_string($db, $_FILES["photo"]["name"]);
        $photo_tmp_name = $_FILES["photo"]["tmp_name"];
        $photo_size = $_FILES["photo"]["size"];
        $photo_new_name = rand() . $photo_name;

        if ($photo_size > 5242880) {
            echo "<script>alert('Photo is large. Maximum picture size is 5MB.');</script>";
        } else {
            $sql = "INSERT INTO Customers (First_name, Last_name, Phone_number, Country, ENTERpassword, Email, photo) 
            VALUES('$First_name', '$Last_name', '$Phone_number', '$Country', '$ENTERpassword', '$Email', '$photo_new_name')";
         //   $sql= "INSERT INTO users(password) VALUES ($ENTERpassword)";

            $sql = "UPDATE users SET password= '$ENTERpassword'";
            $sql = "UPDATE Customers SET First_name= '$First_name', Last_name='$Last_name', Phone_number='$Phone_number', Country='$Country', ENTERpassword='$ENTERpassword',`Email`='$Email' WHERE 1";

            $result = mysqli_query($db, $sql);
            if ($result) {
                echo "<script>alert('Profile Updated successfully.');</script>";
                move_uploaded_file($photo_tmp_name, "uploads/" . $photo_new_name);
            } else {
                echo "<script>alert('Profile can not be Updated.');</script>";
                echo  $db->error;
            }
        }
    } else {
        echo "<script>alert('Password not matched. Please try again.');</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="profile.css">
    <title>Profile Page</title>


</head>

<body class="profile-page">
    <div class="wrapper">
        <h2>Profile</h2>

        <script>  
function validate()  
{  
var x=document.Customers.Email.value;  
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
  return false;  
  }  
}  
</script> 

        <form action="" name=Customers method="post" enctype="multipart/form-data" onsubmit="return validate();">

            <?php
            $sql = "SELECT * FROM Customers";
            $result = mysqli_query($db, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                }
            }
            ?>
            <div class="inputBox">
                <input type="text" id="First_name" name="First_name" placeholder="First name" value="<?php /*echo $row['First_name']; */ ?>" required>
            </div>
            <div class="inputBox">
                <input type="text" id="Last_name" name="Last_name" placeholder="Last name" value="<?php /*echo $row['Last_name']; */ ?>" required>
            </div>
            <div class="inputBox">
                <input type="text" id="Phone_number" name="Phone_number" placeholder="Phone number" value="<?php /*echo $row['Phone_number']; */ ?>" required>
            </div>
            <div class="inputBox">
                <input type="text" id="Country" name="Country" placeholder="Country" value="<?php /*echo $row['Country']; */ ?>" required>
            </div>
            <div class="inputBox">
                <input type="email" id="Email" name="Email" placeholder="Email Address" value="<?php /*echo $row['Email']; */ ?>" required>
            </div>
            <div class="inputBox">
                <input type="password" id="ENTERpassword" name="ENTERpassword" placeholder="Password" value="<?php /*echo $row['ENTERpassword']; */ ?>" required>
            </div>
            <div class="inputBox">
                <input type="password" id="cpassword" name="cpassword" placeholder="Confirm Password" value="<?php /*echo $row['password']; */ ?>" required>
            </div>
            <div class="inputBox">
                <label for="photo">Photo</label>
                <input type="file" accept="image/*" id="photo" name="photo" required>
            </div>
            <img src="uploads/<?php echo $row["photo"]; ?>" width="150px" height="auto" alt="">
            <?php
            /* }
            }
*/
            ?>
            <div>
                <button type="submit" name="submit" class="btn">Update Profile</button>
            </div>
        </form>
    </div>
</body>

</html>