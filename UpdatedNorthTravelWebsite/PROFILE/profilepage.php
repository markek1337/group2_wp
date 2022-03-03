<?php

include 'connection.php';

if (isset($_POST["submit"])) {
    $First_name = mysqli_real_escape_string($con, $_POST["First_name"]);
    $Last_name = mysqli_real_escape_string($con, $_POST["Last_name"]);
    $Phone_number = mysqli_real_escape_string($con, $_POST["Phone_number"]);
    $Country = mysqli_real_escape_string($con, $_POST["Country"]);
    $Email = mysqli_real_escape_string($con, $_POST["Email"]);
    $ENTERpassword = mysqli_real_escape_string($con, md5($_POST["ENTERpassword"]));
    $cpassword = mysqli_real_escape_string($con, md5($_POST["cpassword"]));
  /*  $sql = "INSERT INTO `Customers`(`Customer_ID`, `First_name`, `Last_name`, `Phone_number`, `Country`, `ENTERpassword`, `photo`, `Email`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')"; 
      $sql = "INSERT INTO `Customers`(`First_name`, `Last_name`, `Phone_number`, `Country`, `ENTERpassword`, `photo`, `Email`) VALUES ('[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')"; 
*/


    if ($ENTERpassword === $cpassword) {
        $photo_name = mysqli_real_escape_string($con, $_FILES["photo"]["name"]);
        $photo_tmp_name = $_FILES["photo"]["tmp_name"];
        $photo_size = $_FILES["photo"]["size"];
        $photo_new_name = rand() . $photo_name;

        if ($photo_size > 5242880) {
            echo "<script>alert('Photo is large. Maximum picture size is 5MB.');</script>";
        } else {
            $sql = "UPDATE `Customers` SET `Customer_ID`='[value-1]',`First_name`='[value-2]',`Last_name`='[value-3]',`Phone_number`='[value-4]',`Country`='[value-5]',`ENTERpassword`='[value-6]',`photo`='[value-7]',`Email`='[value-8]' WHERE 1";
            $result = mysqli_query($con, $sql);
            if ($result) {
                echo "<script>alert('Profile Updated successfully.');</script>";
                move_uploaded_file($photo_tmp_name, "uploads/" . $photo_new_name);
            } else {
                echo "<script>alert('Profile can not be Updated.');</script>";
                echo  $con->error;
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

    <link rel="stylesheet" href="Styles.css">
    <title>Profile Page</title>


</head>

<body class="profile-page">
    <div class="wrapper">
        <h2>Profile</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <?php

            $sql = "SELECT * FROM Customers";
            $result = mysqli_query($con, $sql);
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