<!doctype html>
<html>	
	<head>
                <link href="styles.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
            <h1>Existing Members</h1> 
            <br>
            <br>
            <table class="tbl">
                
<?php
include_once "database.php";

$database = new Database();
$results = $database->fetch("SELECT * FROM members;");

echo "<thead>
                <th>User Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Weight</th>
            </thead>";

foreach ($results as $row){
    
    echo "<tr>";
    echo "<td>$row->id</td>";
    echo "<td>$row->fname</td>";
    echo "<td>$row->lname</td>";
    echo "<td>$row->age</td>";
    echo "<td>$row->weight</td>";
    echo "</tr>";
}

?>
                </table>
                
        </body>
        <br> 
        <br>
        <a href="index.html">Return To Homepage</a>
</html>
