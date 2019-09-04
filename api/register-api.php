<?php

require '../connection/dbconnect.php';
include 'functions.php'; 

$application_no 	= $_POST['application_no'];
$precinct_no 		= $_POST['precinct_no'];
$lastname 			= $_POST['lastname'];
$firstname 			= $_POST['firstname'];
$middlename 		= $_POST['middlename'];
$email 				= $_POST['email'];
$password 			= $_POST['password'];
$illiterate 		= $_POST['illiterate'];
$indigent 			= $_POST['indigent'];
$pwd 				= $_POST['pwd'];
$assisted_by		= $_POST['assisted_by'];
$sex 				= $_POST['sex'];
$birthday 			= $_POST['birthday'];
$placebirth_city 	= $_POST['placebirth_city'];
$placebirth_province = $_POST['placebirth_province'];
$civil				= $_POST['civil'];
$spouse 			= $_POST['spouse'];
$province 			= $_POST['province'];
$city 				= $_POST['city'];
$barangay 			= $_POST['barangay'];
$street 			= $_POST['street'];
$sitio				= $_POST['sitio'];
$citizenship 		= $_POST['citizenship'];
$citizenship_acquired = $_POST['citizenship_acquired'];
$natural_reacquire_date = $_POST['natural_reacquire_date'];
$certificate_no 	= $_POST['certificate_no'];
$period_city_yr		= $_POST['period_city_yr'];
$period_city_mos 	= $_POST['period_city_mos'];
$period_phil_yr	 	= $_POST['period_phil_yr'];
$profession 		= $_POST['profession'];
$tin 				= $_POST['tin'];
//$account_id			= 0;
$verified 			= 0; 




echo '<br/> application no: '.$application_no;
echo '<br/> precinct no: '.$precinct_no;
echo '<br/> firstname: '.$firstname;
echo '<br/> lastname: '.$lastname;
echo '<br/> middlename: '.$middlename;
echo '<br/> email: '.$email;
echo '<br/> illiterate: '.$illiterate;
echo '<br/> indigent: '.$indigent;
echo '<br/> pwd: '.$pwd;
echo '<br/> assisted by: '.$assisted_by;
echo '<br/> sex: '.$sex;
echo '<br/> birthday: '.$birthday;
echo '<br/> placebirth_city: '.$placebirth_city;
echo '<br/> placebirth_province'.$placebirth_province;
echo '<br/> civil: '.$civil;
echo '<br/> spouse: '.$spouse;
echo '<br/> province: '.$province;
echo '<br/> city: '.$city;
echo '<br/> barangay'.$barangay;
echo '<br/> street: '.$street;
echo '<br/> sitio: '.$sitio;
echo '<br/> citizenship: '.$citizenship;
echo '<br/> citizenship acquired: '.$citizenship_acquired;
echo '<br/> natural reacquired date: '.$natural_reacquire_date;
echo '<br/> certificate_no: '.$certificate_no;
echo '<br/> period_city_yr: '.$period_city_yr;
echo '<br/> period_city_mos'.$period_city_mos;
echo '<br/> period_phil_yr'.$period_city_yr;
echo '<br/> profession: '.$profession;
echo '<br/> tin: '.$tin;

if(isset($_POST['register'])){

	$result = $mysqli->query("SELECT id FROM user WHERE email = '$email'");
	if($result->num_rows == 0) {
	    
	//save accounts
	//$sql = "INSERT INTO user (email,password) VALUES ('$email','$password')";

		//$account_id = maxId($mysqli,'user');
		//save user
		$sql = "INSERT INTO user 
							(app_no,
							precint_no,
							firstname,
							lastname,
							middlename,
							email,
							password,
							illiterate,
							indigent,
							pwd,
							assisted_by,
							sex,
							dob,
							pob_city,
							pob_province,
							civil_status,
							name_of_spouse,
							address_province,
							address_city,
							address_barangay,
							address_street,
							address_sitio,
							citizenship,
							citizenship_acquired,
							date_of_naturalization,
							cert_no,
							por_years,
							por_month,
							por_in_ph,
							occupation,
							tin,
							verified)
							VALUES
							(
							'$application_no',
							'$precinct_no',
							'$firstname',
							'$lastname',
							'$middlename',
							'$email',
							'".md5($password)."',
							'$illiterate',
							'$indigent',
							'$pwd',							
							'$assisted_by',
							'$sex',
							'$birthday',
							'$placebirth_city',
							'$placebirth_province',
							'$civil',
							'$spouse',							
							'$province',
							'$city',
							'$barangay',
							'$street',							
							'$sitio',
							'$citizenship',
							'$citizenship_acquired',
							'$natural_reacquire_date',
							'$certificate_no',
							'$period_city_yr',
							'$period_city_mos',
							'$period_phil_yr',
							'$profession',
							'$tin',
							'$verified')";

		if (mysqli_query($mysqli,$sql)) {			
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		}else{
			// printf("Error: %s\n", $mysqli->error);
			echo 'Something Went Wrong!';exit;
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		}

	
	    
	} else {
	   echo 'Email already exist!';exit;
	}

}

?>