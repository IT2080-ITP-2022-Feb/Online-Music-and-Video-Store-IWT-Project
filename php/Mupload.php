<?php 

include 'database.php';

if (isset($_POST['upload'])) {
	// $name = $_FILES['file'];
	// echo "<pre>";
	// print_r($name);
	// exit();
	$title = $_POST["title"];
    $discription = $_POST["discription"];
    $price = $_POST["price"];
    $discount = $_POST["discount"];
	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];	
	$temp_name = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	
	$file_destination = "upload/".$file_name;

	if (move_uploaded_file($temp_name,$file_destination)) { 
	
		$q = "INSERT INTO music  (title,discription,price,discount,mname) VALUES ('$title','$discription','$price',' $discount','$file_name');";


	if(mysqli_query($conn,$q)) {

		$success = "Music uploaded successfully.";
	}
	else {
		
		$failed = "Something went wrong??";
	}
}
else {

	$msz = "Please select a Music to upload..!";
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Upload Music </title>

	<!-- <script src="assets/js/jquery.min.js"></script> -->
	<style >
		video{
	position: fixed;
	z-index: -1;
	right:0;
	bottom: 0;
}

.container {
	width: 300px;
	height: 625px;
	margin:7% auto;
	border-radius: 25px;
	background-color: rgba(0,0,0,0.1);
	box-shadow: 0 0 17px #fff;
}

.header {
	text-align: center;
 	padding-top: 75px;
  	
}

.header h1 {
	color: #fff;
	font-size: 45px;
	margin-bottom: 80px;
}

.main {
	text-align: center;
}

.main input, button {
	width: 270px;
	height: 45px;
	border-radius: 25px;
	background-color: rgba(0,0,0,0.1);
	border:none;
	outline: none;
	padding-left: 38px;
	box-sizing: border-box;
	font-size: 15px;
	margin-bottom: 20px;
}

.main button {
	padding-left: 0;
	border-radius: 25px;
	background-color: rgba(0,0,0,0.1);
	letter-spacing: 1px;
	font-weight: bold;
	margin-bottom: 70px;
}

.main button:hover {
	box-shadow: 2px 2px 5px #fff;
	border-radius: 25px;
	color:#fff ;
	cursor: pointer;
	background-color: rgba(0, 0, 0, 0.1);
	}
.main input:hover {
	box-shadow: 2px 2px 5px #fff;
	border-radius: 25px;
	background-color: rgba(252, 251, 255, 0.938);
	}

.main span {
	position: relative;
}

.main i {
	position: absolute;
	left: 15px;
	color: #fff;
	font-size: 16px;
	top: 2px;
}
.col{
	color: #fff;
}
.btn_success {
	background-color: rgba(0, 0, 0, 0.1);
	color:rgba(252, 251, 255, 0.938);
}
.alert_success,.alert_danger,.alert_alert {
	color:rgba(252, 251, 255, 0.938);
}

	</style>
</head>
<body>
<?php include('../php/navigation.php');?>
<br><br><br><br><br><br>
	<div class="container mt-3">
		
				
				<div class="col-lg-8 m-auto">
				<form action="Mupload.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						
						
						<div class="container">
 	<div class="header">
 		<h1>Upload Music</h1>
 	</div>
 	<div class="main">
 		<form>
 			<span>
 				
 				<input type="text" placeholder="Song Title" name="title">
 			</span><br>
 			<span>
 				
             <span>
 				
                 <input type="text" placeholder="Description" name="discription">
             </span><br>

             <span>
 				
                <input type="text" placeholder="Price" name="price">
            </span><br>

            <span>
 				
                <input type="text" placeholder="Discount" name="discount">
            </span><br>

						 <input type="file" name="file" class="form-control">
					</div><center>
					<?php if(isset($success)) { ?>
					<div class="alert_success">

						

							<?php echo $success;?>

					</div>
					<?php } ?>
					<?php if(isset($failed)) { ?>
					<div class="alert_danger">

						

							<?php echo $failed;?>

					</div>
					<?php } ?>

					<?php if(isset($msz)) { ?>
					<div class="alert_alert">

						

							<?php echo $msz;?>

					</div>
					<?php } ?>
					<input type="submit" name="upload" value="Upload" class="btn_success "></center>
				</form>
				</div>
	</div>
	<video autoplay muted loop>
 	<source src="../image/a.mp4" >
 </video>
</body>
</html>