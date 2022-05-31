<?php include('server.php');

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>New Gmail Style Login Form with Material CSS and jQuery - Demo</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="logReg/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="logReg/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="logReg/css/loginStyle.css">
</head>

<body>
	<div class="row gmailStyle">
		<div class="container-fluid">
			<div class="valign-wrapper screenHeight">
				<div class="col card s12 m8 l6 xl4 autoMargin setMaxWidth overflowHidden">
					<div class="row hidden" id="progress-bar">
						<div class="progress mar-no">
							<div class="indeterminate"></div>
						</div>
					</div>
					<div class="clearfix mar-all pad-all"></div>

					<img src="image/Picture2.jpg" class="logoImage" />
					<h5 class="center-align mar-top mar-bottom formTitle">Sign In</h5>
					<p class="center-align pad-no mar-no">to continue to application</p>
					<div style="color:red;">
						<p><?php echo $errorMsg2; ?></p>
					</div>

					<div class="clearfix mar-all pad-all"></div>

					<div id="formContainer" class="goRight">

						<form action="" method="post" class="loginForm">
							<div class="input-fields-div autoMargin">
								<div class="row input-inline-field">
									<div class="input-field col s6">
										<input id="first_name" name="user_fname" type="text" class="validate" required="require">
										<label for="first_name">First Name</label>
									</div>
									<div class="input-field col s6">
										<input id="last_name" name="user_lname" type="text" class="validate" required="require">
										<label for="last_name">Last Name</label>
									</div>
								</div>
								<div class="input-field">
									<!-- <input id="reg_user_name" name="user_email" type="text" class="validate" required="require"> -->
									<input type="email" class="reg_user_name" name="user_email" placeholder="User Email" required="require" pattern=".+@[w][m][a][i][l][.][c][o][m]" title="Only @wmail.com accounts are allowed " value="<?php echo $user_email; ?>">
									<label for="reg_user_name">Username</label>
									<!-- <span class="helper-text" data-error="wrong" data-success="right">You can pick your <strong>Email</strong> or <strong>Mobile</strong> numer as Username</span> -->
								</div>
								<div class="row input-inline-field">
									<div id="" class="input-field col s6">
										<input id="reg_pass_word" name="user_password" type="password" class="validate" required="require">
										<label for="reg_pass_word">Password</label>
										<a href="javascript:void(0)" class="showPassword" onclick="showPassword()"><i class="material-icons md-18">visibility</i></a>
									</div>
									
									<div class="input-field col s12 mar-no">
										<span class="helper-text" data-error="wrong" data-success="right">Use 8 or more characters with a mix of letters, numbers & symbols</span>
									</div>
								</div>
								<p>I have an account <a href="Login.php" class="">Login Now</a></p>
							</div>


							<div class="input-fields-div autoMargin right-align">
								<button type="submit" name="register" class="btn waves-effect waves-light btn-register">Sign Up</button>
							</div>


							<div class="form-group " style="display: none">
								<label class="col-sm-4 control-label">Usertype</label>
								<div class="col-sm-5">
									<div class="radio">
										<label>
											<input type="radio" name="usertype" value="loggin" checked /> loggin
										</label>
									</div>
								</div>
							</div>

						</form>


						<div class="clearfix"></div>
					</div>


					<div class="clearfix mar-all pad-all"></div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="logReg/js/materialize.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="logReg/js/routie.min.js"></script>
	<script type="text/javascript" src="logReg/js/loginScript.js"></script>
</body>

</html>