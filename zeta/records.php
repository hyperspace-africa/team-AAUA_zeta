<!DOCTYPE html>
<html>
<head>
	<title>EHR</title>
     <!-- Mobile specific metas  -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
	<style type="text/css">
		body{
			background: url('img/docfade.png');
			background-size: cover;
			background-repeat: no-repeat;
		}

		*{
			font-family: Montserrat;
			font-weight: bolder;
		}
		.blueColor{
			background: rgb(77,200,244);
			color: white;
		}
		.textBlue{
			color: rgb(77,200,244);
		}

		.blueColor:hover{
			background: rgb(77,200,244);
			color: white;
		}
		.curve{
			border-radius: 40px;
		}

		.formText{
			font-weight: bold;
		}
	</style>
</head>
<body>
 <?php require_once "inc/header.php" ?>

 <section>
 	<div class="container row">
 		<div class="col-12 col-md-12 text-center p-4">
 			<h4 class="textBlue">Patient #123 Record</h4>
 		</div>
	  <div class="col-12 col-md-4">
	  	<div class="container p-5">
	  		<div class="card p-1"  style="width: 100%; height: 100%; border-radius: 100%;background: blue;align-content: center;">
	  			<img src="img/bg1.png" class="img-fluid"  style="width: 100%; height: 100%; border-radius: 100%;float: right;">
	  		</div>
	  	</div>
	  </div>
	  <div class="col-12 col-md-8">
  		<div class="card p-2">
  			<div class="formText">Full Name: </div>
  			<div class="formText">DOB: </div>
  			<div class="formText">Gender: </div>
  			<div class="formText">Next Of Kin: </div>
  			<div class="formText">Address: </div>
  			<div class="formText">Phone no: </div>
  			<div class="formText">Email: </div>
  			<div class="formText">Addmission Date: </div>
  			<div class="formText">Discharge Date: </div>
  			<div class="formText">Bed No: </div>
  			<div class="formText">Disgnosis: </div>
  			<div class="formText">Treament: </div>
  			<div class="formText">Price: </div>
  		</div>
	  </div>
 	</div>

 </section>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>