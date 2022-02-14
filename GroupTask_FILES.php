<? 
//You are required to work as a team and complete the following task during the online session
// we will check your implementation on 16.02.2022 and the team repo must contain the following task
// Each one of you will first do it in your own repo (or branch) and then the final version in the team repo. 
// This task is not graded however will have some impact on the final grade
// It also will help you to practice utlizing GitHub in project work

# 1. Create/read a text file by using approprite php functions https://youtu.be/DEc5Qi_goH0
    # Step 1: check if file exists or not
    # Step 2: Open the file using appropriate mode. (each member opens the file in different mode)
    # Step 3: Use fwrite/fread function to write/read on the file your team name and members name. 
    # Step 4: Close the file 

/*Moving your php site with database to hamk servers.
 https://youtu.be/k5dHX-wEJ8I
 */ 

echo "<hr><h3>Creating the following file: Createfile.txt </h3>";
 
$newfile = fopen('Createfile.txt','w') or die ("File not created");
$txt = "Team: 2, Members: Mark Petrov, Mona Achaaoud, Jarmila Škodová <br>";
fwrite($newfile, $txt);
fclose($newfile);
echo "<h3>Does the file exist?</h3>";
if (file_exists("Createfile.txt")){
    echo "The file does exist <hr>";
}
else 
    echo "The file does not exist <hr>";
 
echo "<h3>Reading the file:</h3>";
$file_name = "Createfile.txt";
$handle = fopen($file_name, "r");
$contents = fread($handle, filesize($file_name));
echo $contents;
fclose($handle);


 #2. Uploaing files 
     # Step 1: Create a simple html form to upload a file. 
     # Step 2: You are required to limit the upload file size to 2 MB. 
     # Step 3: Make sure that users can submit only images. 
     # Step 4: Upon successful upload, you print a message "File uploaded successfully" and also 
     # provide the link to the directory where files are uploaded.

     ?>
     <hr><h2>Upload form </h2>
     
     <form enctype="multipart/form-data" action="upload1.php" method="POST">
         Select image to upload: 
         <input name="userfile" type="file" required><br>
         <input type="submit" value="Upload image" />
     </form>

   <?php  

?>