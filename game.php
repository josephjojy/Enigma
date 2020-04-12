<!DOCTYPE html>
<html>
<head>
    <title>Game</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <style>
            .center-box img{
            height:300px;
		    display: block;
  		    margin-left: auto;
  		    margin-right: auto;
        }
        .ans{
            border-radius: 5px;
            margin: 10px;
        }
        .sub,#bt,#hint{
            border-radius: 5px;
            padding: 2px 5px;
            border: none;
            background-color: orange;
            font-weight: bolder;
            margin:2px;
        }
        #bt{
            background-color:rebeccapurple;
            color:black;
        }
        .qn{
            color:white;
            font-weight:bold;
        }
        #hint{
            margin-right:0;
            background-color:green;
        }
        </style>
</head>
<body>

    <div class="center-box">

<?php

require('./sql_connect.php');



  //$u_name="qaz";
  $cnt=0;
  $a="a";  

  

if (isset($_POST['submitgam'])) {

	$ans=($_POST['ans']);
	$cnt=$_POST['count'];

$u_name=$_COOKIE["name"];
	

	$sql = "select ans from answers where qno =($cnt-1)";

	//cho "$sql";
    $query = mysqli_query($con,$sql);

    if ($query->num_rows > 0) {
    // output data of each row
    	while($row = $query->fetch_assoc()) {
        	$a=$row["ans"];
    	}
	}
	if($ans==$a){

		$sql = "update Users set count=$cnt,uptime=now() where username='$u_name'";

		mysqli_query($con, $sql);


	}
	else{
		echo "It was a Wrong Answer<br>";
	}

}

if(isset($_COOKIE["name"])){
  	//echo "hello";
$u_name=$_COOKIE["name"];
  


  $sql = "select count from Users where username ='$u_name'";

	//cho "$sql";
    $query = mysqli_query($con,$sql);

    if ($query->num_rows > 0) {
    // output data of each row
    	while($row = $query->fetch_assoc()) {
        	$cnt=$row["count"];
    	}
	}
	//echo "count=$cnt";
	switch ($cnt) {
		case '0':
				echo '
				<img src="./Q/Q1.jpg ">
                <h5 class="qn">Cipher Cipher everywhere, O mighty Cipher of Caesar  how art thou three.</h5>
				<form action="./game.php" method="post">
				Answer<input type="text" class="ans" name="ans"><p style="margin=0;">(answer should be in lowercase)</p>
				<input type="hidden" name="count" value="1">
				<input type="submit" class="sub" name="submitgam" value="Submit">
				</form>
				';
			break;
        case '1':
				echo '

				<h4 class="qn">If NASA could name something in space after me, then imagine how much I am adored in my own country.</h4>
				<form action="./game.php" method="post">
				Answer<input type="text" class="ans" name="ans"><p style="margin=0;">(answer should be in lowercase)</p>
				<input type="hidden" name="count" value="2">
				<input type="submit" class="sub" name="submitgam" value="Submit">
				</form>
				';
			break;   
		case '2':
				echo '
				<img src="./Q/Q3.jpeg ">
                <h5 class="qn">We made a huge profit out of an epidemic that threatened the whole of mankind.</h5>
				<form action="./game.php" method="post">
				Answer<input type="text" class="ans" name="ans"><p style="margin=0;">(answer should be in lowercase)</p>
				<input type="hidden" name="count" value="3">
				<input type="submit" class="sub" name="submitgam" value="Submit">
				</form>
				';
			break;    
        case '3':
				echo '
                <h4 class="qn"> We dug trenches for the soldiers and also provided all of you with the tools to defeat yourselves. Who are we?</h4>
				<form action="./game.php" method="post">
				Answer<input type="text" class="ans" name="ans"><p style="margin=0;">(answer should be in lowercase)</p>
				<input type="hidden" name="count" value="4">
				<input type="submit" class="sub" name="submitgam" value="Submit">
				</form>
				';
			break;
        case '4':
				echo '
                <h5 class="qn"> 
				&bull;&bull;&bull;&bull;-   &bull;&bull;&bull;--   .   ---&bull;&bull;   &bull;&bull;&bull;&bull;&bull;   --&bull;&bull;&bull;   --&bull;&bull;&bull; &deg;   -&bull;,
&bull;----   ---&bull;&bull;  .     &bull;&bull;&bull;&bull;-   &bull;&bull;---   ---&bull;&bull;   ----&bull; &deg;  &bull;<br>
I led the world to one of it&apos;s worst times in history by my hand.</h5>
				<form action="./game.php" method="post">
				Answer<input type="text" class="ans" name="ans"><p style="margin=0;">(answer should be in lowercase)</p>
				<input type="hidden" name="count" value="5">
				<input type="submit" class="sub" name="submitgam" value="Submit">
				</form>
				';
			break;
        case '5':
				echo '
                <img src="./Q/Q6.jpeg">
                <h5 class="qn">My hand is the righteous hand. Unification or death is nothing to me.</h5>
				<form action="./game.php" method="post">
				Answer<input type="text" class="ans" name="ans"><p style="margin=0;">(answer should be in lowercase)</p>
				<input type="hidden" name="count" value="6">
				<input type="submit" class="sub" name="submitgam" value="Submit">
				</form>
				';
			break;     
        case '6':
				echo '
                <img src="./Q/Q7.png">
                <h5 class="qn">We were brutally slaughtered by an angel of death yet some were saved from its treacherous daggers.</h5>
				<form action="./game.php" method="post">
				Answer<input type="text" class="ans" name="ans"><p style="margin=0;">(answer should be in lowercase)</p>
				<input type="hidden" name="count" value="7">
				<input type="submit" class="sub" name="submitgam" value="Submit">
				</form>
				';
			break;
        case '7':
				echo '
                <h5 class="qn">I designed buildings and cities, and my creator drew paintings.<br><br>EUVSRR MSIMMO PYPNFV IYKJUE PGIAKE JNBKZR<br><br>
I am the key to my ENIGMA.</h5>
				<form action="./game.php" method="post">
				Answer<input type="text" class="ans" name="ans"><p style="margin=0;">(answer should be in lowercase)</p>
				<input type="hidden" name="count" value="8">
				<input type="submit" class="sub" name="submitgam" value="Submit">
				</form>
				';
			break;
        case '8':
				echo '
                <h3 class="qn">CONGRATS!!!<br>You have beaten Enigma.</h3>
                ';
                break;                              
		default:
			echo "No more questions available now";
			break;
	}
}

?>
 <a href="https://instagram.com/electronauts.rset?igshid=9cu6v1xuqt2o" target="_blank"><button type="button" id="hint" >Hint</button></a>
<a href="./board.php"><button type="button" id="bt">Leadership Board</button>

</div>
</body>
</html>