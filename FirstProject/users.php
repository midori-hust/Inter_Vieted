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


?>