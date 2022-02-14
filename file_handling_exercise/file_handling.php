<? 
/*
//You are required to work as a team and complete the following task during the online session
// we will check your implementation on 16.02.2022 and the team repo must contain the following task
// Each one of you will first do it in your own repo (or branch) and then the final version in the team repo. 
// This task is not graded however will have some impact on the final grade
// It also will help you to practice utlizing GitHub in project work

# 1. Create/read a text file by using approprite php functions 
    # Step 1: check if file exists or not
    # Step 2: Open the file using appropriate mode. (each member opens the file in different mode)
    # Step 3: Use fwrite/fread function to write/read on the file your team name and members name. 
    # Step 4: Close the file */

if (unlink('groupwork_handlingfiles/handling_files.txt'))
{
    echo "The file was deleted";
}
else {echo "The file was not deleted";}

echo "<h3>Does the file exist?</h3>";
if (file_exists("groupwork_handlingfiles/handling_files.txt")){
    echo "The file does exist";
}
else 
    echo "The file does not exist";

echo "<hr><h3>Creating a file handling_files.txt: </h3>";

$createdfile = fopen('groupwork_handlingfiles/handling_files.txt','w') or die ("File not created");
$txt = "Group: 2 <br> Members: Mark Petrov, Mona Achaud, Jarmila Škodová <br>";
fwrite($createdfile, $txt);
fclose($createdfile);
echo "<h3>Does the file exist?</h3>";
if (file_exists("groupwork_handlingfiles/handling_files.txt")){
    echo "The file does exist <hr>";
}
else 
    echo "The file does not exist <hr>";

echo "<h3>Reading the file:</h3>";
$file_name = "groupwork_handlingfiles/handling_files.txt";
$handle = fopen($file_name, "r");
$contents = fread($handle, filesize($file_name));
echo $contents;
fclose($handle);

/* #2. Uploaing files 
     # Step 1: Create a simple html form to upload a file. 
     # Step 2: You are required to limit the upload file size to 2 MB. 
     # Step 3: Make sure that users can submit only images. 
     # Step 4: Upon successful upload, you print a message "File uploaded successfully" and also 
     # provide the link to the directory where files are uploaded.*/

?>
<p><hr>Please upload an image file:</p>

<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>