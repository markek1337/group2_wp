<?php
$target_dir = "pricelist/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadSuccess = 1;
$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadSuccess = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadSuccess = 0;
}

// Allow certain file formats
if($fileType != "docx" && $fileType != "txt") {
  echo "You need to upload a .docx or .txt file";
  $uploadSuccess = 0;
}

if ($uploadSuccess == 0) {
  echo "File was not uploaded.";
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "File was not uploaded.";
  }
}
?>