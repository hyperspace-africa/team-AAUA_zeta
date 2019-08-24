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

		.textBlue{
			color: rgb(77, 200, 244);
			font-weight: bold;
		}

		.cap{
			width: 700px auto;
		}
	</style>
</head>
<body>
<?php require_once "inc/header.php"; ?>

<section>
 	<div class="container row">
	  <div class="col-md-3 col-sm-12"></div>
	  <div class="col-md-8 col-sm-12 text-center">
 		<div style="margin-top: 8em;">
 			<div class="">
 				<form method="POST" class="text-center" id="formSubmit">
 					<div class="p-2 cap" id="personalInfo">
 						<div class="card w-100" style="background-color: rgba(245, 245, 245, .1);border-radius: 20px;"  data-toggle="modal" data-target="#lunchInfo">
 							<h4 class="m-2 textBlue">Personal Info <img src="img/arrow.svg" class="float-right img-fluid" style="width: 40px;" class="float-right"></h4>
 						</div>

						<!-- Modal -->
						<div class="modal fade" id="lunchInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered" role="document">
						    <div class="modal-content p-3">
						      <div class="modal-heade text-center">
						        <h5 class="modal-title textBlue" id="exampleModalCenterTitle">Patients Personal Info</h5>
						      </div>
						      <div class="modal-body">
						        <div class="form-group">
						        	 <input type="text" class="form-control curve" placeholder="First Name" name="fname">
						        </div>
						        <div class="form-group">
						        	<input type="text" class="form-control curve" placeholder="Last Name" name="lname">
						        </div>
						        <div class="form-group">
						        	<input type="text" class="form-control curve" placeholder="Other Name" name="oname">
						        </div>
						        <div class="form-group">
						        	<input type="text" class="form-control curve" placeholder="Date Of Birth" name="dob">
						        </div>
								<div class="form-group">
									<select class="form-control curve" name="gender">
										<option selected disabled>Gender</option>
										<option>Male</option>
										<option>Female</option>
									</select>
								</div>						        
						        <div class="form-group">
						        	<input type="text" class="form-control curve" placeholder="Next Of Kin" name="nok">
						            <button type="button" class="btn float-right" data-dismiss="modal"><img src="img/down.svg" width="20px"></button>
						        </div>
						      </div>
						    </div>
						  </div>
						</div>
 					</div>
 					<div class="p-2 cap" id="contactInof">
 						<div class="card w-100" style="background-color: rgba(245, 245, 245, .1);border-radius: 20px;"  data-toggle="modal" data-target="#lunchContact">
 							<h4 class="m-2 textBlue">Contact Info <img src="img/arrow.svg" class="float-right img-fluid" style="width: 40px;" class="float-right"></h4>
 						</div>

						<!-- Modal -->
						<div class="modal fade" id="lunchContact" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered" role="document">
						    <div class="modal-content p-3">
						      <div class="modal-heade text-center">
						        <h5 class="modal-title textBlue" id="exampleModalCenterTitle">Patients Contact Info </h5>
						      </div>
						      <div class="modal-body">
						        <div class="form-group">
						        	 <input type="number" class="form-control curve" placeholder="Mobile Number" name="mobile">
						        </div>
						        <div class="form-group">
						        	<input type="email" class="form-control curve" placeholder="Email-Address" name="mail">
						        </div>
						        <div class="form-group">
						        	<input type="text" class="form-control curve" placeholder="Home Address" name="haddress">
						        </div>
						        <div class="form-group">
						        	<input type="text" class="form-control curve" placeholder="Office Address" name="oaddress">
						        </div>						        
						        <div class="form-group">
						        	<input type="text" class="form-control curve" placeholder="Next Of Kin Mobile Number" name="nokmobile">
						            <button type="button" class="btn float-right" data-dismiss="modal"><img src="img/down.svg" width="20px"></button>
						        </div>
						      </div>
						    </div>
						  </div>
						</div>
 					</div>
 					<div class="p-2 cap" id="GuardianInfo">
 						<div class="card w-100" style="background-color: rgba(245, 245, 245, .1);border-radius: 20px;"  data-toggle="modal" data-target="#lunchGuardian">
 							<h4 class="m-2 textBlue">Guardian Information <img src="img/arrow.svg" class="float-right img-fluid" style="width: 40px;" class="float-right"></h4>
 						</div>
						<!-- Modal -->
						<div class="modal fade" id="lunchGuardian" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered" role="document">
						    <div class="modal-content p-3">
						      <div class="modal-heade text-center">
						        <h5 class="modal-title textBlue" id="exampleModalCenterTitle">Patients Guardian Information</h5>
						      </div>
						      <div class="modal-body">
						        <div class="form-group">
						        	 <input type="number" class="form-control curve" placeholder="Full Name" name="Gfname">
						        </div>
						        <div class="form-group">
						        	<input type="email" class="form-control curve" placeholder="Mobile Number" name="Gmobile">
						        </div>
						        <div class="form-group">
						        	<input type="text" class="form-control curve" placeholder="Address" name="Gaddress">
						        </div>
						        <div class="form-group">
						        	<input type="text" class="form-control curve" placeholder="Relationship" name="relationship">
						        </div>						        
						        <div class="form-group">
						        	<input type="text" class="form-control curve" placeholder="Relationship" name="Relationship">
						            <button type="button" class="btn float-right" data-dismiss="modal"><img src="img/down.svg" width="20px"></button>
						        </div>
						      </div>
						    </div>
						  </div>
						</div>
 					</div>
 					<div class="p-2 cap" id="diagnosisInfo">
 						<div class="card w-100" style="background-color: rgba(245, 245, 245, .1);border-radius: 20px;"  data-toggle="modal" data-target="#lunchDiagnosis">
 							<h4 class="m-2 textBlue">Patient's Diagnosis <img src="img/arrow.svg" class="float-right img-fluid" style="width: 40px;" class="float-right"></h4>
 						</div>
						<!-- Modal -->
						<div class="modal fade" id="lunchDiagnosis" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered" role="document">
						    <div class="modal-content p-3">
						      <div class="modal-heade text-center">
						        <h5 class="modal-title textBlue" id="exampleModalCenterTitle">Patient's Diagnosis</h5>
						      </div>
						      <div class="modal-body">
						        <div class="form-group">
						        	 <input type="number" class="form-control curve" name="diagnosis" placeholder="Enter the Patient Diagnosis" name="Gfname">
						        </div>					        
						        <div class="form-group">
						        	<textarea class="form-control curve" placeholder="Remark"></textarea>
						        <button type="button" class="btn float-right" data-dismiss="modal"><img src="img/down.svg" width="20px"></button>
						        </div>
						      </div>
						    </div>
						  </div>
						</div>
 					</div>
 					<div class="p-2 cap" id="TreatmentInfo">
 						<div class="card w-100" style="background-color: rgba(245, 245, 245, .1);border-radius: 20px;"  data-toggle="modal" data-target="#lunchTreatment">
 							<h4 class="m-2 textBlue">Treatment Information <img src="img/arrow.svg" class="float-right img-fluid" style="width: 40px;" class="float-right"></h4>
 						</div>
						<!-- Modal -->
						<div class="modal fade" id="lunchTreatment" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered" role="document">
						    <div class="modal-content p-3">
						      <div class="modal-heade text-center">
						        <h5 class="modal-title textBlue" id="exampleModalCenterTitle">Treatment Information</h5>
						      </div>
						      <div class="modal-body">
						        <div class="form-group">
						        	 <input type="text" class="form-control curve" name="StartDate" placeholder="Admission Date" name="Gfname">
						        </div>
						        <div class="form-group">
						        	<input type="text" class="form-control curve" name="stopDate" placeholder="Discharge Date" name="Gmobile">
						        </div>
						        <div class="form-group">
						        	<input type="text" class="form-control curve" name="aard" placeholder="Ward" name="Gaddress">
						        </div>
						        <div class="form-group">
						        	<input type="text" class="form-control curve" name="bed" placeholder="Bed Number" name="relationship">
						        </div>	
						        <div class="form-group">
						        	<input type="text" class="form-control curve" name="type" placeholder="Type of Treatment" name="relationship">
						        </div>						        
						        <div class="form-group">
						        	<input type="text" class="form-control curve" name="disp" placeholder="Description (please specify in details)" name="relationship">
						        </div>	

						        <div class="form-group">
						        	<textarea placeholder="Report" class="form-control curve" name="report"></textarea>
						        </div>

						        <div class="form-group">
						             <input type="text" placeholder="Total" class="form-control curve" name="totalMoney" name="Gfname">
						        </div>
						        <div class="form-group">
						        	<input type="text" placeholder="Paid" class="form-control curve" name="totalPaid" name="Gmobile">
						        </div>
						        <div class="form-group">
						        	<input type="text" placeholder="Total Due" class="form-control curve" name="totalDue"  name="relationship">
						        <button type="button" class="btn float-right" data-dismiss="modal"><img src="img/down.svg" width="20px"></button>
						        </div>
						      </div>
						    </div>
						  </div>
						</div>
 					</div>
 					<div class="form-group">
 					   <button class="btn btn-lg btn-block btn-primary">Send Record</button>
 					</div>
 				</form>
 			</div>
 		</div>
	  </div>	
    </div>
</section>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript">
	$(document).ready(function(){

		$('#formSubmit').submit(function(e){
			e.preventDefault();
			var datas = new FormData(this);

			$.ajax({
				url: '',
				method: 'POST',
				data: datas,
				success: function(data){
					alert(data);
				},
		        cache: false,
		        contentType: false,
		        processData: false
			})
		})
	})
</script>
</body>
</html>