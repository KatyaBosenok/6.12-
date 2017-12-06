<?php
//.gitignore
$dbParams=require(
	'db.php'
);
$db= new PDO(
	"mysql:host=localhost;dbname=". 
	$dbParams['database'].
	";charset=utf8", 
	$dbParams['username'],
	$dbParams['password']
	
);
//
$students=$db
	->query('SELECT * FROM `STUDENT`')
	->fetchALL(PDO::FETCH_ASSOC);
foreach ($students as $student){
	echo "<p>".
		htmlspecialchars($student['lastName']).
		"</p>";
}