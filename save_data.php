<!doctype html>
<html>	
	<head>
                <link href="styles.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
            <p>
<?php
include_once "database.php";

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$age = $_POST["age"];
$weight = $_POST["weight"];

$sql = "INSERT INTO members (fname, lname, age, weight) VALUES ('$fname', '$lname', $age, $weight);";


$database = new Database();
$result = $database->run($sql);

if ($result===true){
    echo "Info Saved";
} else{
    echo "There was an issue saving the info";
}
?>
   
            </p>
            <a href="index.html">Return To Homepage</a>
        </body>
</html>
