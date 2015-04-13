<?php include "users.php"; ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> Signup </title>
    <script src="JqueryUI/js/jquery.js"></script>
    <script src="js/signup1.js"></script>
    <style type="text/css">
    li{
        color: red;
    }
    </style>
    <link rel="stylesheet" type="text/css" href="css/view.css">

</head>

<body>
    <div class="container">
        <div class="content">
            <div >
                <form id="check" action="signup.php" method="POST" name="check">
                    <ul>
                     <label> Name </label><br>        
                     <input type ="text" id="name" name= "name"><br>
                     <div id="name_input"> </div>

                     <label> Email </label> <br>
                     <input type="text" id="email" name="email"><br>
                     <div id="email_input"></div>

                     <label> Birth day </label><br>
                     <input type="text" id="birthday" value ="dd/mm/yyyy" name="birthday"><br>
                     <div id="birthday_input"></div> 

                     <label> Password </label><br>        
                     <input type ="password" id="password" name="password"><br>
                     <div id="password_input"> </div>

                     <label> Password confirm </label> <br>       
                     <input type="password" id="pwconfirm" name="pwconfig"><br>
                     <div id="pwconfirm_input"></div><br>

                     <input type="submit" value="Signin" name="submit">

                    </ul>
                </form>
            </div>
        </div>
    </div>

    <?php
      function Redirect($url, $permanent = false)
      {
        header('Location: ' . $url, true, $permanent ? 301 : 302);
        exit();
      }

      if (isset($_POST["submit"])) {
         insertUsers($_POST["name"], $_POST["email"], $_POST["birthday"], $_POST["password"]);
         Redirect("http://localhost/Inter_Vieted/FirstProject/index.html", false);
      }
        
    ?> 
    
</body>
</html>