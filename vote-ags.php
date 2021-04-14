<?php
    // always start session and verify before and html code
    // this prevents user from going directly to url without login
    session_start();
    if(empty($_SESSION["name"]) || empty($_SESSION["usn"])){
        header("Location: index.php");
    }
    
    // verify that user has voted for deputy governor then store in session
    if(!isset($_POST["pro"])){
        header("Location: vote-pro.php");
    }else{
        $_SESSION["vote-pro"] = $_POST["pro"];
    }
?>

<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://sourcecodester.com">Avento</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<center><h3 class="text-primary"> FACULTY OF LIFE SCIENCE ELECTION</h3>
        <h3 style='color:blue;'>VOTE AGS</h3></center>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-3"></div>
		<div class="col-md-6">
        
	 		
		
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Voting System</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
</head>
<body>
<center>
    <form action="summary.php" method="post">
        <div>
            <label for="ags-1"><input type="radio"  required name="ags" id="ags-1" value="optimum">Sulaiman Hamzat(Ambrose)</label>
        </div>
        <div>
            <label for="ags-2"><input type="radio"  required name="ags" id="ags-2" value="noble">Nurudeen Ibrahim(Unique)</label>
        </div>
        <div>
            <label for="ags-3"><input type="radio"  required name="ags" id="ags-3" value="focus">Inioluwa moyosore(Focus)</label>
        </div>
        <div>
            <label for="ags-4"><input type="radio"  required name="ags" id="ags-4" value="jago">Iremide babatope(Jago)</label>
        </div>
        <div>
            <input type="submit" value="NEXT">
        </div>
    </form>
    </center>
    <h3>Voter:</h3>
			<?php
				require'connect.php';
			
				
				$query = mysqli_query($conn, "SELECT * FROM `criminology` WHERE `matric_number`='$_SESSION[usn]'") or die(mysqli_error());
				$fetch = mysqli_fetch_array($query);
				
				echo "<h5 class='text-success'>".$fetch['name']."</h5>";
				
			?>
    </div>
	</div>
</body>
</html>