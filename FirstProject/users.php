<?php
	function insertUsers($name, $email, $birthday, $password){
        $m = new MongoClient();
        $db = $m->Test_fisrt;
        $collection = $db->Users;
        $document = array(
                          'usename' => $name,
                          'email' => $email,
                          'birthday'=> $birthday,
                          'password'=>$password
                    );
        $collection->insert($document);
        return 0;
	}

   function Redirect($url, $permanent = false){
      header('Location: ' . $url, true, $permanent ? 301 : 302);
      exit();
   }

    function checkValue($str1, $str2){
        return preg_match($str2,$str1);
    }

    function checkName($name){
        $letters= "/^[a-zA-Z ]*$/";

        if (strlen($name) == 0) {
          return false;
        }
        return checkValue($name, $letters);
    }

    function checkEmail($email){
        $mailformat = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
        if (strlen($email) == 0){
          return false;
        }
        return checkValue($email, $mailformat);
    }

    function checkBirthday($birthday){
        if (strlen($birthday) == 0){
          return false;
        }
        list($month, $day, $year) = split('[/.-]', $birthday);
        if (!checkdate($month, $day, $year)) return false;

        $yy = intval($year);
        if ($yy < 1900) {
            return false;
        }
        return ture;
    }
    function checkPassword($password){
        $passwordformat = "/^[0-9A-Za-z]+$/";
        if (strlen($password) == 0) {
          return false;
        }
        return checkValue($password, $passwordformat);
    }

 
?>