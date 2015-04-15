<?php
	function insertUser($name, $email, $birthday, $password){
        $m = new MongoClient();
        $db = $m->Test_fisrt;
        $collection = $db->Users;
        $document = array(
                          'username' => $name,
                          'email' => $email,
                          'birthday'=> $birthday,
                          'password'=>$password
                    );
        $collection->insert($document);
        return 0;
	}
  function updateInfoUser($id, $name, $email, $birthday, $password){
        $m = new MongoClient();
        $db = $m->Test_fisrt;
        $collection = $db->Users;
        echo "string";
        $collection->update(array('_id' => $id), array('$set' => array(
                          'username' => $name,
                          'email' => $email,
                          'birthday'=> $birthday,
                          'password'=>$password
                    )));
        echo "string";
        return 0;
  }

  function signin($username, $password){
      $m = new MongoClient();
      $db = $m->Test_fisrt;
      $collection = $db->Users;
      $cusor = $collection->find(array('username' =>$username, 'password' =>$password));
      $i=0;
      foreach ($cusor as $value) {
        $i++;
      }
      if ($i == 0) {
        return false;
      }
      return ture;
  }

  function takeIdObject($username){
    $m = new MongoClient();
      $db = $m->Test_fisrt;
      $collection = $db->Users;

      $cusor = $collection->find(array('username' =>$username));
      foreach ($cusor as $value) {
        return $value["_id"];
      }

    return 0;
  }

  function takeInfoUser($id){
      $m = new MongoClient();
      $db = $m->Test_fisrt;
      $collection = $db->Users;
      $info;
      $cusor = $collection->find(array('_id' =>$id));

      foreach ($cusor as $value) {
          $info['username']=$value["username"];
          $info['email']=$value["email"];
          $info['birthday']=$value["birthday"];
          $info['password']=$value["password"];

          return $info;
      }
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