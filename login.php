<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <style>
            .center-box img{
            height:15em;

        }
        </style>
</head>
<body>

<?php

if (isset($_POST['submitlog'])) {

	$u_name=trim($_POST['username']);
	$paswd=$_POST['password'];
	//$cnt=0;

	
	   //header('Location: http://stackoverflow.com');

	
	require('./sql_connect.php');



	//echo "$u_name";

	$sql = "select username from Users where username ='$u_name' and password='$paswd'";

	//cho "$sql";
    $query = mysqli_query($con,$sql);

    //echo "$query";

    $row=mysqli_num_rows($query);


    if($row){

    	setcookie("name",$u_name,time()+80000);
		

      
    	header('Location: ./game.php');
    	//echo "valid";

    }
    echo "username or password is incorrrect<br>"; 
}

?>
    <div class="center-box">
        <img src="./enigma1.png">
        <h1>LOGIN</h1>
        <form action="./login.php" method="post">
            <div class="container">
                <label>Username:</label><input class="form-control" name="username" type="text" required><br/>
                <label>Password:</label><input class="form-control" name="password" type="password" required><br/>
                <input type="submit" id="login" class="btn btn-danger" name="submitlog" value="Login"/>
            </div>
        </form>
    </div>
</div>
<div id="copy" align="center">
    <a href="https://josephjojy.codes/main.html" target="_blank" >&copy;Joseph Jojy Chirayath</a>
</div>
</body>
</html>




