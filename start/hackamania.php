<?php 

if(isset($_POST["submit"])) {
	$ano=$_POST['id'];
	$target_dir = "uploads/";
if(!$_FILES["fileToUpload"]["name"]) header("Location :index.php");

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    


// Check file size

// Allow certain file formats

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
	
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"uploads/".$ano.".".$imageFileType)) {
			
			$add= basename( $_FILES["fileToUpload"]["name"]);
			
			
        echo '<script> alert("The file '. basename( $_FILES["fileToUpload"]["name"]).' has been uploaded.");</script>';
    }


}}

?>
<!DOCTYPE html>
<head>
<style>
*{margin:0px;}</style>
</head>
<body>
<img src="back.jpg" style="width:100%; height:100%; position:absolute;z-index:-1000;"/>
<img src="advi.png" style="margin:4%;width:25%;"/>
<br>
<h1 style="color:white;float:right;margin-top:-10%;margin-right:10%;">HACKAMANIA</h1>

<br>
<h4 style="margin:3% 10%;color:white;">The quick brown fox jumps over the lazy dog</h4>


<form action="hackamania.php" method="post" enctype="multipart/form-data" style="width:30%;margin:20% 50% 0%;color:black;">
						<textarea required placeholder="Your Unique Id" style="width:95%; height:20px;margin:10px;" name="id"></textarea><h5 style="color:white;">
							<input required type="file" name="fileToUpload" id="fileToUpload"><input type="submit" value="Submit" name="submit" align="center" style="width:30%;background-color:grey;color:black;"><br><br></h5>
						</form>
</body>
</html>