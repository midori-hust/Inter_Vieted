<?php 
    include "users.php";
    session_start();
 ?>
<html>
<head>
    <title> Signup </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/view.css">
    <link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap-theme.min.css">

    <script language="javascript" src="JqueryUI/js/jquery.js" type="text/javascript"></script>
    <script language="javascript" src="js/jquery.validate.js" type="text/javascript"></script>  
    <script language="javascript" src="Bootstrap/js/bootstrap.min.js" type="text/javascript"></script>  
    
    <script language="javascript" src="js/main.js" type="text/javascript"></script>     
</head>
<body>
   <div id="container">
    <div id ="header">
        <h2> MyProject</h2>
    </div>
    <div id="content">
        <div id ="nav">
            <?php if ($_SESSION['id'] == null) { ?>
                <button type="button" class="btn btn-block btn-Info" id="btn1">Signin </button> 
                <button type="button" class="btn btn-block btn-Info" id="btn2">Signup </button>
            <?php }else{?>
                <button type="button" class="btn btn-block btn-Info" id="btn3">Signout</button>
                <button type="button" class="btn btn-block btn-Info" id="btn4">Edit Profile</button>
            <?php }; ?>
                <button type="button" class="btn btn-block btn-Info" id="btn5">Datetime </button>
        </div>
        
        <div id ="main">
            <form id='input_form' method='POST' action="signin.php" name="check">

                <h2> SignIn </h2> 

                <div class ="form-group">
                    <label for="username"> Name </label>       
                    <input type ="text" id="name" name="username" class="form-control required" placeholder="Enter username" minlength='4'>
                </div>
                <div class ="form-group">
                    <label for="password"> Password </label>
                    <input type="password" id="password" name="password" class="form-control required" minlength='6'>
                </div>

                <input type ="submit" class="btn form-control btn-primary" name="submit" value="Signin">

            </form> 
        </div>
    </div>
    <div id="footer">
            @Copyright!
    </div> 
    </div> 
    <script type="text/javascript">
        $(document).ready(function(){
            $("#input_form").validate();
        });
    </script>
   
    <?php
        if (isset($_POST["submit"])) {
            print_r($_POST);
            $username = $_POST['username'];
            $password = $_POST['password'];

            if (checkName($username) && checkPassword($password)) {
                if (signin($username, $password)) {
                    $_SESSION['id'] = takeIdObject($username);
                    Redirect("http://localhost/Inter_Vieted/FirstProject/index.php", false);
                }                
            }

        }
    ?>

</body>
</html>