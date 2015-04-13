<?php
	include "uses.php";
	
	$m = new MongoClient();
   echo "Connection to database successfully "."<br>";
    //select a database
   $db = $m->Test_fisrt;
   echo "Database mydb selected"."<br>";
   $collection =$db->mycol;
   echo "Collection selectied successfully"."<br>";
   // $document = array(
   // 		"title" => "MongoBD",
   // 		"description" => "database",
   // 		"likes" =>"100",
   // 		"url" => "http://www.tutorialspoint.com/mongodb/",
   // 		"by" =>"tutorials point"
   // );

   // $collection->insert($document);

   // echo "Ducment inserted successfully"."<br>";

   $cursor = $collection->find();

   // Show database

   foreach ($cursor as $document) {
   		echo $document["_id"]."<br>";
		//$document->update(array('$set' => array('title' => "Thao khau")));
		$document['title'] =" Thao ham";
   }

   // Edit document
   //$collection->update(array('title' =>"MongoBD"), array('$set' => array('title' => "Thao khau")));

   //Delete document
   $collection->remove(array('title' =>"Thao khau"));
   echo "Delete successfully";

?>