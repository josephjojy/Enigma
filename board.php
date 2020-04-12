<!DOCTYPE html>
<html>
<head>
    <title>Leadership Board</title>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
	<style>
table {
border-collapse: collapse;
margin:0 auto;
color: whitesmoke;
font-family: monospace;
font-size: 25px;


}
th {
   
color: orange;
}

p{
    font-weight: bolder;
    font-size: 30px;
}

tr:nth-child(even) {color: lightgrey}


</style>
</head>
<body><center>
    <div class="center-box">

	<p>Leadership Board</p>
<table>
    		<tr>
    		<th>Name</th>
    		<th>Level</th>
    		</tr>
<?php



require('./sql_connect.php');

$sql="select * from Users order by count DESC, uptime ASC LIMIT 10";

$query = mysqli_query($con,$sql);


if ($query->num_rows > 0) {
    // output data of each row
    	while($row = $query->fetch_assoc()) {
    		echo "<tr><td>".$row["name"]."</td><td>".$row["count"]."</td></tr>"	;
        	
    	}
	}
	echo "</table>";

?>
</center>
</div>
<div id="copy" align="center">
    <a href="https://josephjojy.codes/main.html" >&copy;Joseph Jojy Chirayath</a>
</div>
</body>
</html>