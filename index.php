<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/fardin/event/registration.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Form</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="icon" href="icon_path" type="image/icon type">
	<link rel="stylesheet" type="text/css" href="css/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<?php 
	$mess = isset($_REQUEST['mess']) ? $_REQUEST['mess'] : null;
	if($mess == 1) 
	{?>
		<div class="" style="text-align:center; border-color: black">
			<?php echo 'Registration completed successfully!'; ?>
		</div>

	<?php }
	?>

<body class="form-v10">
	<div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="registration.php" method="post" id="myform">
				<div class="form-left">
					<h2>General Infomation</h2>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="first_name" id="first_name" class="input-text" placeholder="First Name" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="last_name" id="last_name" class="input-text" placeholder="Last Name" required>
						</div>
					</div>
					<div class="form-group">
						<div class="form-row form-row-3">
							<select name="gender" required>
							<option value="">--Please Select Gender--</option>
						    <option value="male">Male</option>
						    <option value="female">Female</option>
						    <option value="other">Other</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
						</div>
						<div class="form-row form-row-4">
							<input type="number" name="age" id="age" class="input-text" placeholder="Age" required>
						</div>
					</div>
					<div class="form-row">
						<select name="position" required>
							<option value="">--Please Select Position--</option>
						    <option value="student">Student</option>
						    <option value="jobholder">Job-Holder</option>
						    <option value="businessman">Business Man</option>
						    <option value="unemployee">Un-Employed</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<div class="form-row">
						<input type="text" name="company" class="company" id="company" placeholder="Company/Institution" required>
					</div>
				</div>
				<div class="form-right">
					<h2>Contact Details</h2>
					<div class="form-row">
						<input type="text" name="address" class="street" id="address" placeholder="Address" required>
					</div>
					<div class="form-row">
						<select name="country" required>
						    <option value="">-- Please Select Country --</option>
							  <?php
							  if (count($sql)) {
								  foreach ($sql as $list) {
									  ?>
									  <option value="<?php echo $list['country_name']; ?>"><?php echo $list['country_name']; ?></option>
									  <?php
								  }
							  } ?>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="code" class="code" id="code" placeholder="Code +" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="phone" class="phone" id="phone" placeholder="Phone Number" required>
						</div>
					</div>
					<div class="form-row">
						<input type="email" name="email" id="email" required placeholder="Your Email">
					</div>
					<div class="form-checkbox">
						<label class="container"><p>I do accept the <a href="#" class="text">Terms and Conditions</a> of your site.</p>
						  	<input type="checkbox" name="checkbox">
						  	<span class="checkmark"></span>
						</label>
					</div>
					<div class="form-row-last">
						<input type="submit" name="register" class="register" value="Register">
					</div>
				</div>
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>