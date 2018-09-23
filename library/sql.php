<?php
//Connect to SQL Database
$host = "localhost";
$user = "root";
$pass = "";
$db = "database";
$connection = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8', ''.$user.'', ''.$pass.'');

function sqlQuery($connection,$query,$args = array()){
	$stmt = $connection->prepare($query);
	$stmt->execute($args);
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	//print_r($connection->errorInfo());
	return $results;
}

//Example Use:
//$return = sqlQuery($connection, "SELECT * FROM prepared;");
//$returntwo = sqlQuery($connection, "SELECT * FROM prepared WHERE name =?;", array("nick"));
//sqlQuery($connection, "INSERT INTO prepared (name,age) VALUES (?,?)", array("Jane", 18));
?>