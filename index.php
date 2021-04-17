<?php
$servername = "remotemysql.com";
$username = "1XvT2tXL2V";
$password = "XbaKFbxQ98";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn, '1XvT2tXL2V');

// print_r($conn); die;

$sql = mysqli_query($conn, "SELECT * FROM tbl_countries");
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
<body>
	
	<div class="form-row">
						<select name="country" required>
						    <option value="">-- Please Select Country --</option>
							  <?php
							  $servername = "remotemysql.com";
$username = "1XvT2tXL2V";
$password = "XbaKFbxQ98";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn, '1XvT2tXL2V');

// print_r($conn); die;

$sql = mysqli_query($conn, "SELECT * FROM tbl_countries");
print_r($sql); die;

							  if (count($sql)) {
								  foreach ($sql as $list) {
									  ?>
									  <option value="<?php echo $list['country_name']; ?>"><?php echo $list['country_name']; ?></option>
									  <?php
								  }
							  } ?>
						</select>
					</div>

</body>


</html>
