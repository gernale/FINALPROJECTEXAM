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

                    <img src="image/Picture2.jpg" class="logoImage" />
                    <h5 class="center-align mar-top mar-bottom formTitle">Sign In</h5>
                    <p class="center-align pad-no mar-no">to continue to application</p>

                    <div class="clearfix mar-all pad-all"></div>

                    <div id="formContainer" class="goRight">

                        <form method="post" class="loginForm">
                            <div class="input-fields-div autoMargin">
                                <div class="input-field">
                                    <input id="user_name" name="user_email" type="text" required="require" class="validate">
                                    <label for="user_name">Email or Phone</label>
                                </div>
                                <!-- id="box" style="display: none" -->
                                <div class="input-field scale-transition ">
                                    <input  id="pass_word" name="user_password" type="password" required="require" class="validate">
                                    <label for="pass_word">Password</label>
                                    <a href="javascript:void(0)" class="showPassword" onclick="showPassword()"><i class="material-icons md-18">visibility</i></a>
                                </div>

                                <!-- <a href="#hasPassword" class="passwordOrOTP" data-PassOTP="Password" onClick="passwordOrOTP(this)">I have password</a> -->
                                <p>You can join us now by<br /><a href="Register.php" class="createAccountNow">Creating a account</a></p>

                            </div>
                            <div class="input-fields-div autoMargin right-align">
                                <button type="submit" name="login" class=" waves-effect waves-light btn">Login</button>

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
    <!-- <script>
        const btn = document.getElementById('btn');

        btn.addEventListener('click', () => {
            // ??????? hide button
            btn.style.display = 'none';

            // ??????? show div
            const box = document.getElementById('box');
            box.style.display = 'block';

            // const box1 = document.getElementById('box1');
            // box.style.display = 'none';

            

        });
    </script> -->
    <script type="text/javascript" src="LogReg/js/materialize.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="LogReg/js/routie.min.js"></script>
    <script type="text/javascript" src="LogReg/js/loginScript.js"></script>
</body>

</html>