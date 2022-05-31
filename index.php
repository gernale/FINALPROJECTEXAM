<?php include('server.php');
if (isset($_SESSION["UserEmail"])) {
  $user_email = $_SESSION["UserEmail"];
  if ($_SESSION["Usertype"] == 1) {
    $linkPro = "employeeProfile.php";
    $linkEditPro = "editEmployee1.php";
    $linkBtn = "applyJob.php";
    $textBtn = "Apply for this job";
    $Postjb = "Yes";
  }
} else {
  $user_email = "";
  //header("location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Google Font Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" href="fontawesome-free-6.1.1-web/css/all.css" />
  <title>Final - Gmail Clone</title>
  <style>
    .button {
      background-color: none;
      /* Green */
      border: none;
      color: white;
      padding: 5px 5px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
    }
  </style>
</head>

<body>
  <!-- Header Starts -->
  <div class="header">
    <div class="header__left">
      <span class="material-icons"> menu </span>
      <img src="image/Picture1.jpg" alt="" />
    </div>

    <div class="header__middle">
      <span class="material-icons"> search </span>
      <input type="text" placeholder="Search mail" />
      <span class="material-icons"> arrow_drop_down </span>
    </div>

    <div class="header__right">
      <span class="material-icons"> apps </span>
      <span class="material-icons"> notifications </span>
      <span class="material-icons"> account_circle </span>
      <a class="btn fa fa-sign-out" name="pindot" style="text-decoration: none; color: gray; padding-top: 15px;" href="logout.php"></a>
      
    </div>
  </div>
  <!-- Header Ends -->

  <!-- Main Body Starts -->
  <div class="main__body">
    <!-- Sidebar Starts -->
    <div class="sidebar">
      <button class="sidebar__compose"><span class="material-icons"> add </span>Compose</button>
      <div class="sidebarOption sidebarOption__active">
        <span class="material-icons"> inbox </span>
        <h3>Inbox</h3>
      </div>

      <div class="sidebarOption">
        <span class="material-icons"> star </span>
        <h3>Starred</h3>
      </div>

      <div class="sidebarOption">
        <span class="material-icons"> access_time </span>
        <h3>Snoozed</h3>
      </div>

      <div class="sidebarOption">
        <span class="material-icons"> label_important </span>
        <h3>Important</h3>
      </div>

      <div class="sidebarOption">
        <span class="material-icons"> near_me </span>
        <h3>Sent</h3>
      </div>

      <div class="sidebarOption">
        <span class="material-icons"> note </span>
        <h3>Drafts</h3>
      </div>

      <!-- <div class="sidebarOption">
        <span class="material-icons"> expand_more </span>
        <h3>More</h3>
      </div>

      <div class="sidebar__footer">
        <div class="sidebar__footerIcons">
          <span class="material-icons"> person </span>
          <span class="material-icons"> duo </span>
          <span class="material-icons"> phone </span>
        </div>
      </div> -->
    </div>
    <!-- Sidebar Ends -->

    <!-- Email List Starts -->
    <div class="emailList">
      <!-- Settings Starts -->
      <div class="emailList__settings">
        <div class="emailList__settingsLeft">
          <input type="checkbox" />
          <span class="material-icons"> arrow_drop_down </span>
          <span class="material-icons"> redo </span>
          <span class="material-icons"> more_vert </span>
        </div>
        <div class="emailList__settingsRight">
          <span class="material-icons"> chevron_left </span>
          <span class="material-icons"> chevron_right </span>
          <span class="material-icons"> keyboard_hide </span>
          <span class="material-icons"> settings </span>
        </div>
      </div>
      <!-- Settings Ends -->

     
     

<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="page-header" style="background-color: gray">
                    <h2>Write Message</h2>
                </div>

                <form id="registrationForm" method="post" class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-4 control-label">To<input type="text" class="form-control" name="msgTo" /></label>
                    
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Message Body</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" rows="20" cols="200" name="msgBody"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <!-- Do NOT use name="submit" or id="submit" for the Submit button -->
                        <button type="submit" name="send" class="btn btn-info btn-lg">Send Message</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>







          </div>
          <!-- Email List rows Ends -->
        </div>
        <!-- Email List Ends -->
      </div>
      <!-- Main Body Ends -->
</body>

</html>