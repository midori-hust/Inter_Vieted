<?php include "users.php"; ?>
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
                <button type="button" class="btn btn-block btn-Info" id="btn1">Signin </button> 
                <button type="button" class="btn btn-block btn-Info" id="btn2">Signup </button>
                <button type="button" class="btn btn-block btn-Info" id="btn3">Datetime </button>
        </div>
        <div id ="main">
            <form id='input_form' method='POST' action="signuppluginjquery.php" name="check">

                <h2> Form Register </h2> 

                <div class ="form-group">
                    <label for="username"> Name </label>       
                    <input type ="text" id="name" name="username" class="form-control required" placeholder="Enter username" data-minlength='4'>
                </div>
                
                <div class = "form-group">
                    <label for="email"> Email </label>
                    <input type="email" id="email" name="email" class="form-control required" placeholder="example@gmail.com" ><br>
                    <div id="email_input"></div>   
                </div>
                 
                <div class="form-group">
                    <label for="birthday"> Birthday </label>
                    <input type="date" id="birthday" name= "birthday" class="form-control required" placeholder="dd/mm/yyyy"><br>
                </div>

                <div class ="form-group">
                    <label for="password"> Password </label>
                    <input type="password" id="password" name="password" class="form-control required" data-minlength='6'>
                </div>
                
                <div class="form-group">
                    <label for="cpassword"> Password confirm </label>
                    <input type="password" id="cpassword" name="cpassword" class="form-control required" equalTo="#password">
                </div>

                <input type ="submit" class="btn form-control btn-primary" name="submit" value="Signup">

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
            
            $name = $_POST['username'];
            $email = $_POST['email'];
            $birthday = $_POST['birthday'];
            $password = $_POST['password'];
            if ((checkName($name)) && (checkEmail($email)) && (checkBirthday($birthday)) && (checkPassword($password))) {
                insertUsers($name, $email, $birthday, $password);
                Redirect("http://localhost/Inter_Vieted/FirstProject/index.html", false);
            }
        }
    ?>

</body>
</html>