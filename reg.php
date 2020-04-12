<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
      .center-box{
          color: blanchedalmond;
          padding: 5px;
      }
      #rules td{
          text-align: left;
      }

      #input th,td{
          padding: 5px;
          color: orange;
      }
      input{
          border-radius: 10px;
          padding: 2px;
      }
      #sb{
        padding: 2px 5px;
        margin: 5px;
        background-color: tomato;
        border: none;
      }
     @media only screen and (max-width: 600px) {
    body{height: 800px;}
    .center-box {margin-top:10px;height:750px;width: 90%;}
}
    </style>
</head>
<body>

    <div class="center-box">
     <img src="./enigma1.png" style="position: relative;height: 50px; width: 100px; ">   
<table id="rules">
	<th>
		Rules and Regulations
	</th>
	<tr><td>1.Open exclusively to RSET</td></tr>
	<tr><td>2.Students/Faculty from RSET can participate irrespective of branch</td></tr>
	<tr><td>3.Any form of cheating will lead to immediate disqualification of participant</td></tr>
	<tr><td>4.Any form of online/offline research can be made use of to solve the questions</td></tr>
	<tr><td>5.Decisions of the coordinators will be final and binding</td></tr>
</table>

<?php

if (isset($_POST['submitreg'])) {

	$name=($_POST['name']);
	$dept=($_POST['dept']);
	$u_name=($_POST['username']);
	$paswd=$_POST['password'];
	$cnt=0;	
	require('./sql_connect.php');

	$sql = "select username from Users where username ='$u_name'";

	//cho "$sql";
    $query = mysqli_query($con,$sql);

    $row=mysqli_num_rows($query);

    if($row){
      
    	echo "Username already exsits";

    } else {
    
    		$query='INSERT INTO Users(username,password,count,name,department) VALUES(?,?,?,?,?)';
			$stmt=mysqli_prepare($con,$query);


			mysqli_stmt_bind_param($stmt,"ssiss",$u_name,$paswd,$cnt,$name,$dept);

			mysqli_stmt_execute($stmt);

			if(mysqli_stmt_affected_rows($stmt)==1)
			{
				//echo "Updated";
				mysqli_stmt_close($stmt);
				mysqli_close($con);
				echo "Registered";
				header('Location: ./login.php');
			}
			

    }
}    

?>



<h3>Registration Form</h3>
<p>Note:If you are a <b>Student</b> input for Department will be <b>Sem_Dept_Sec (Ex:S6_ECE_A)</b>.<br>For a <b>Faculty</b> it will be Department itself <b>(Ex:ECE)</b>.</p>  
<form action="./reg.php" method="post">
    <center>
	<table id="input" >
	<tr><td>Name</td><td><input type="text" name="name" size="18" maxlength="12" placeholder="upto 12 characters" required></td></tr>
	<tr><td>Department</td><td><input type="text" name="dept" size="18" placeholder="Sem_Dept_Sec or Dept" required><br></td></tr>
	<tr><td>Username</td><td><input type="text" name="username" size="18" maxlength="18" placeholder="upto 18 characters" required><br></td></tr>
	<tr><td>Password</td><td><input type="password" name="password" size="18" maxlength="18" placeholder="upto 18 characters" required><br></td></tr>
	</table>
	<input type="submit" id="sb" name="submitreg" value="Register"><br>
    </center>
	</form>
</div>
<div id="copy" align="center">
    <a href="https://josephjojy.codes/main.html" target="_blank">&copy;Joseph Jojy Chirayath</a>
</div>
</body>
</html>






