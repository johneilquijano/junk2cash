<?php

require '../connection/dbconnect.php';

//if(isset($_POST['login'])){
	session_start();
// login_user
	$email = $_POST['email'];
	$password = md5($_POST['password']);
sdsd

	$sql = "SELECT id FROM user WHERE email='$email' AND password = '$password'";
	$result = mysqli_query($mysqli,$sql);
    if (mysqli_num_rows($result) > 0) {  
     	$row = mysqli_fetch_assoc($result);	

    	$account_id = $row['id'];
    	//$sql_user = "SELECT firstname,id,user_role, FROM user WHERE id = '$account_id'";
    	$sql_user = "
    	SELECT firstname, email, user.id as userid,user_role.role_id as roleid, role.name as user_role
		FROM user
		INNER JOIN user_role ON user.id = user_role.id
		INNER JOIN role	ON user_role.role_id = role.id
		WHERE user.id = '$account_id'";

    	$result_user = mysqli_query($mysqli,$sql_user);
		$row_user = mysqli_fetch_assoc($result_user);	   	
		
		// var_dump($row_user);
		// die();

		$_SESSION['login_user'] 	= $row_user['firstname'];
		$_SESSION['login_id'] 		= $row_user['userid'];
		$_SESSION['login_role'] 	= $row_user['user_role'];
		$_SESSION['login_email'] 	= $email;
		/*
		$_SESSION['avatar'] 		= $row_user['image_path'];
		$_SESSION['user_sitio']		= $row_user['sitio'];*/
		// var_dump($row_user);
		// die();
			
			if($row_user['roleid'] == 1){
				header('Location: ../admin-pages/admin-dashboard.php');
			}
			/*
			else if ($row_user['user_role'] == 2){//collector
				header('Location: ../user-pages/dashboard.php');*/
			else if($row_user['roleid'] == 3){//resident
				header('Location: ../user-pages/resident-dashboard.php');
			}
			/*else if($row_user['user_role'] == 5){//resident
				header('Location: ../junkShop/dashboard.php');
			}
			*/
			else{// 4 facilitator
				die('failed');
				header('Location: ../pages/login.php');
			}
    } else{
?>
		<div class="card">								
			<div class="card-body">																						
				<div class="alert alert-warning" role="alert">
					Login Failed, please try again!
				</div>
				
			</div>
		</div>	
<?php 
    }
	
	// echo 'check '.$row['id'];



//}
?>