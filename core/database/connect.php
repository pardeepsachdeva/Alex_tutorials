<?php

//$connect_error = "sorry, we\'re experiening connection problems.";

//mysql_connect('xxxxxxxxxx', 'xxxxxxxxxxxx', 'xxxxxxxxxxxx') or die($connect_error);
//mysql_select_db('loginandregister') or die($connect_error);




try{
	$db=new PDO('mysql:host=127.0.0.1;dbname=lr','root','');
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
	echo $e->getMessage();
}

//$sql = 'SELECT username, country from people';
//foreach( $db->query($sql) as $row ) {
//   echo $row['username']." - ".$row['country']."<br>";
//}
//$db = null;



?>

