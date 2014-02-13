<?php 
session_start();
$output_dir = './_files';


var_dump($_FILES);

var_dump($_SESSION);



if(isset($_FILES["file"]))
{
//Filter the file types , if you want.
if ($_FILES["file"]["error"] > 0)
{
echo "Error: " . $_FILES["file"]["error"] . "
";
}
else
{
move_uploaded_file($_FILES["file"]["tmp_name"], $output_dir . $_SESSION['filedir'] . $_FILES["file"]["name"]);
/*
echo $_FILES["file"]["tmp_name"];
echo "\r\n";
echo $output_dir . $_SESSION['filedir'] . $_FILES["file"]["name"];
*/
echo "Uploaded File :".$_FILES["file"]["name"];
}

}
?>