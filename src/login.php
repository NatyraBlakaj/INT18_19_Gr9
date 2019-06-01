<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="UTF-8">
        <title>Memories</title>


        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/login.css">
        <link rel="stylesheet" href="../css/footer.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<style>
		
		#logout{
			margin-right:350px;
			margin-top:30px;
		}
		</style>
	</head>

<body>

        
      <?php
		include "header.php";
		?>

        <div class="container">
           
					<?php
					 if(isset($_GET['error'])){
						if($_GET['error']=="emptyfields"){
						echo '<p class="signuperror">Fill in all fields!</p>';
						}
					
						else if($_GET['error']=="nouser"){
							echo '<p class="signuperror">Invalid username!</p>';
						}
					
						else if($_GET['error']=="wrongpassword"){
							echo '<p class="signuperror">Your passwords do not match!</p>';
						}
						else if($_GET['error']=="usertaken"){
							echo '<p class="signuperror">Username is already taken!</p>';
						}
					}
	
					?>
            <div >
			<?php
			if (isset($_SESSION['IDperdoruesit'])){
				echo '
				<div id="logout">
				<form method="post" action="includes/logout.inc.php" id="signUpForm"> 
				<button type="submit" name="logout-submit">Logout</button>
				</form>
				</div>';
			}
			else{
				echo ' <form  action="includes/login.inc.php" method="post" id="signUpForm">
                    <h1 id="loginform">Log in</h1>
                    <i class="fas fa-user-tie" >       </i>   <input type="text" name="mailuid" placeholder="Username.."><br>
                    <i class="fas fa-key">            </i>   <input type="password" name="pwd" placeholder="Password.."><br>
                    <button type="submit" name="login-submit">Login</button>
				</form>';
			}
			?>
               
               
            </div>
        </div>

        <footer>
            <pre>                                                       copyright&copy;2013-All rights Reserved-Domain Name                                                                                                                                                                                                                     Punoi grupi 9</pre>
        </footer>



  
</body>
</html>