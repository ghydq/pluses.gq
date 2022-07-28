<form action="test1.php" method="post">

Subject name : <br> <input type="text" name="SubName"> <br>
Subject text : <br> <textarea name="SubText" rows="5" cols="20"></textarea> <br>
page name : <br> <input type="text" name="PagName"> <br><br>
<input type="submit" name="submit" value="Create">

</form>

<?php
// if the user click on the submit button 
if(isset($_POST['submit'])) {

	$SubName = $_POST['SubName'];
	$SubText = $_POST['SubText'];
	$PagName = $_POST['PagName'];
	// connect to db 
$connect = mysqli_connect("localhost","root","","test") or die("Problem to connect to db ");

$query = mysqli_query
($connect,"INSERT INTO subject_detail (name,message,page_name)
                     VALUES ('$SubName','$SubText','$PagName')");

// check if the data insert into db 

	if($query) {
		
	$create_file = fopen("$PagName.php","w");
	if ($create_file) {
$write_to_file = fwrite($create_file,"<?php copy('index.php','$PagName.php') ?>");
			if($write_to_file) {
				echo "file created";
			}
		}

	}
	else {
		echo "Sorry, there's problem to create this file";
	}
}// close $_POST['submit]



?>