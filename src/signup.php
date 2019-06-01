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
.signuperror {
	margin-top:15px;
	 text-align:center;
	 color:red;
	 font-size:25px;
 }
 .signupsuccess{
	 margin-top:15px;
	 text-align:center;
	 color:green;
	 font-size:25px;
 }
</style>
</head>
<body>

        
        <?php
		include "header.php";
		?>

        <div class="container">
            <div id="signUp">
                <form method="post" action="includes/signup.inc.php" id="signUpForm"> 
                    <h1>Sign up</h1>
					<?php
					 if(isset($_GET['error'])){
						if($_GET['error']=="emptyfields"){
						echo '<p class="signuperror">Fill in all fields!</p>';
						}
						else if($_GET['error']=="invalidmailuid"){
							echo '<p class="signuperror">Invalid username and e-mail!</p>';
						}
						else if($_GET['error']=="invaliduid"){
							echo '<p class="signuperror">Invalid username!</p>';
						}
						else if($_GET['error']=="invalidmail"){
							echo '<p class="signuperror">Invalide-mail!</p>';
                        }
                        else if($_GET['error']=="invalidusername"){
							echo '<p class="signuperror">Username must start with a letter and cant be just numbers!</p>';
						}
						else if($_GET['error']=="passwordchek"){
							echo '<p class="signuperror">Your passwords do not match!</p>';
                        }
                        else if($_GET['error']=="passwordcheklength"){
							echo '<p class="signuperror">Password must be at least 8 characters!</p>';
						}
						else if($_GET['error']=="usertaken"){
							echo '<p class="signuperror">Username is already taken!</p>';
						}
					}
					else if($_GET['signup']=="success"){
						echo '<p class="signupsuccess">Signup successful!</p>';
						
					}
					?>
                    <i class="fas fa-user-tie" >        </i> <input type="text" name="uid" placeholder="Username"><br>
                    <i class="fas fa-phone">            </i> <input type="text" name="mail" placeholder="Email"><br>
                    <i class="fas fa-key">              </i>   <input type="password" name="pwd" placeholder="Password"><br>
					<i class="fas fa-key">              </i> <input type="password" name="pwd-repeat" placeholder="Repeat password"><br>
                   
                   <button type="submit" name="signup-submit">Signup</button>
                   
                </form>
            </div>

    
        </div>

        <footer>
            <pre>                                                       copyright&copy;2013-All rights Reserved-Domain Name                                                                                                                                                                                                                     Punoi grupi 9</pre>
        </footer>

    <script>


    $("#showLogin>p").click(function(){
        $("#login").show();
        $("#signUp").hide();
    });

    $("#showSignUp>p").click(function(){
        $("#login").hide();
        $("#signUp").show();
    });

    $("#submitSignUp").click(function(){
        if ($('input:text' ).val().length == 0) {
            alert("Please fill all the fields");
            
        }
        else {
            alert("U have been registered succesfully");
        }
    })

    </script>
</body>
</html>