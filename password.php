<?php include('server.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>New Gmail Style Login Form with Material CSS and jQuery - Demo</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="LogReg/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="LogReg/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="LogReg/css/loginStyle.css">
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

                    <img src="LogReg/images/Googlelogo.png" class="logoImage" />
                    <h5 class="center-align mar-top mar-bottom formTitle">Sign password In</h5>
                    <p class="center-align pad-no mar-no">to continue to application</p>

                    <div class="clearfix mar-all pad-all"></div>

                    <div id="formContainer" class="goRight">

                        <form method="post" class="loginForm">
                            <div class="input-fields-div autoMargin">
                                <div class="input-field">
                                    <input id="user_name" name="user_email" type="text" class="validate"> 
                                    <label for="user_name">Email or Phone</label>
                                </div>
                                <!-- <div id="passwordDiv" class="input-field scale-transition scale-out">
                                    <input id="pass_word" name="user_password" type="password" class="validate">
                                    <label for="pass_word">Password</label>
                                    <a href="javascript:void(0)" class="showPassword" onclick="showPassword()"><i class="material-icons md-18">visibility</i></a>
                                </div> -->
                               
                                <a href="#hasPassword" class="passwordOrOTP" data-PassOTP="Password" onClick="passwordOrOTP(this)">I have password</a>
                                <p>You can join us now by<br /><a href="#createAccountNow" class="createAccountNow">Creating a account</a></p>
                            </div>
                            <div class="input-fields-div autoMargin right-align">
                                <button type="submit" onclick="login()" class="loginBtn waves-effect waves-light btn hide">Login</button>
                            </div>
                        </form>

                        <!-- <form class="signUpForm">
                            <div class="input-fields-div autoMargin">
                                <div class="row input-inline-field">
                                    <div class="input-field col s6">
                                        <input id="first_name" type="text" class="validate">
                                        <label for="first_name">First Name</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="last_name" type="text" class="validate">
                                        <label for="last_name">Last Name</label>
                                    </div>
                                </div>
                                <div class="input-field">
                                    <input id="reg_user_name" type="text" class="validate">
                                    <label for="reg_user_name">Username</label>
                                    <span class="helper-text" data-error="wrong" data-success="right">You can pick your <strong>Email</strong> or <strong>Mobile</strong> numer as Username</span>
                                </div>
                                <div class="row input-inline-field">
                                    <div id="reg_passwordDiv" class="input-field col s6">
                                        <input id="reg_pass_word" type="password" class="validate">
                                        <label for="reg_pass_word">Password</label>
                                        <a href="javascript:void(0)" class="showPassword" onclick="showPassword()"><i class="material-icons md-18">visibility</i></a>
                                    </div>
                                    <div id="rePasswordDiv" class="input-field col s6">
                                        <input id="re_pass_word" type="password" class="validate">
                                        <label for="re_pass_word">Confirm</label>
                                    </div>
                                    <div class="input-field col s12 mar-no">
                                        <span class="helper-text" data-error="wrong" data-success="right">Use 8 or more characters with a mix of letters, numbers & symbols</span>
                                    </div>
                                </div>
                                <p>I have an account <a href="#" class="backToLogin">Login Now</a></p>
                            </div>
                            <div class="input-fields-div autoMargin right-align">
                                <button type="submit" onclick="register()" class="registerBtn waves-effect waves-light btn">Register</button>
                            </div>
                        </form> -->



                        <div class="clearfix"></div>
                    </div>


                    <div class="clearfix mar-all pad-all"></div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="LogReg/js/materialize.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="LogReg/js/routie.min.js"></script>
    <script type="text/javascript" src="LogReg/js/loginScript.js"></script>
</body>

</html>