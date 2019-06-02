<?php
session_start([
    'cookie_lifetime' => 86400,
    'read_and_close'  => true,
]);
 $_SESSION['dev1'] = 'Natyra';
$_SESSION['dev2']   = 'Fitore';
$_SESSION['dev3'] = 'Blerta';

$cookie_name = "grupi";
$cookie_value = "Grupi 24";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" manifest="offline.appcache">
    <head>
        <meta charset="UTF-8">
        <title>Memories</title>

        <link rel="stylesheet" href="css/slider.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
		  <link rel="stylesheet" href="css/gallery.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
.gallery-container{
width:950px;
	    margin-left:280px;
		margin-bottom:5px;
	border:1px solid black;

}
.gallery-container h1{

	   text-align:center;

	 border:1px groove black;
	 margin-bottom:5px;
	


}

#bottom-section{
	height:120px;
	background-color:rgba(0,0,0,0.1);
	 border:1px groove black;
	 text-align:center;
	

}

#bottom-section a{
	text-decoration:underline;
	color:black;
	

}

</style>
    </head>


<body>

        
        
       <header>
            <table id="logoArea">
                <td id="logo">
                    <img src="fotot/logo.png" height="100px" width="300px" alt="Logo">
                </td>
                <td id="moreOptions">
                    <a href="src/login.html">Sign up</a> |
                    <a href="src/login.html">Login</a> |
                    <a href="src/gallery.html">Archives</a> |
                    <a href="src/contact.html">Contact</a>
                </td>
                
            </table>

            <div class="mainMenu">
                <a href="index.php"   class="active">HOMEPAGE</a>
                <a href="src/gallery.php"  >GALLERY</a>
                <a href="src/about.php">ABOUT</a>
                <a href="src/portfolio.php">PORTFOLIO</a>
                <a href="src/team.php"  >TEAM</a>

                <a href="src/contact.php"  >CONTACT</a>
                <a href="src/login.php" target="blank" >Login</a>
                <a href="src/signup.php"> SIGN UP</a>
            </div>
        </header>
	
    


        <div id="container">
            <div id="homePageInfo">
                <div id="slideShow">
                        <div class="slideshow-container">

                                <div class="mySlides fade">

                                  <img src="fotot/articlefoto1.jpg" >
                                  <div class="caption"><h1>Slide 1</h1><p> slide 1 caption</p></div>
                                </div>
                                
                                <div class="mySlides fade">
                                  <img src="fotot/articlefoto2.jpg">
                                  <div class="caption">
                                  <h1>Slide 2</h1>
                                  <p>
                                  just some text 
                                  </p>
                                  </div>
                                </div>
                                
                                <div class="mySlides fade">
                                  <img src="fotot/articlefoto3.jpg">
                                  <div class="caption"><H1>Slide 3</H1><P>this is slide 3 caption</P></div>
                                </div>
                                
                                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                                
                                </div>
                                <br>
                                
                                


                </div>
               
                <div id="slideShowText">
                    <div>
                        <span class="fadingLine">
                        </span>
                    </div>
                    <?php
                    if(!isset($_COOKIE[$cookie_name])) {
                            echo "Cookie named '" . $cookie_name . "' is not set!";
                        } else {
                            echo "Cookie '" . $cookie_name . "' is set!<br>";
                            echo "Value is: " . $_COOKIE[$cookie_name];
                        }       
                    ?>
                    <br />
                    <div>
                        <span class="fadingLine"></span>
                    </div>
                </div>

            </div>
        
            <div class="gallery-container" >
			

 <?php

   if (isset($_SESSION['IDperdoruesit'])){     
echo ' <h1>Your Last uploaded pictures</h1>';
   include_once 'src/includes/dbh.inc.php';
   
   $sql="select * from gallery order by orderGallery DESC limit 3;";
   $stmt=mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($stmt,$sql)){
	   echo "SQl statement failes!";
   }else{
	   mysqli_stmt_execute($stmt);
	   $result=mysqli_stmt_get_result($stmt);
	   
	   while($row=mysqli_fetch_assoc($result)){
		   echo '
		   <div class="foto" >
     <a href="src/gallery.php">
	 <div style="background-image:url(src/img/gallery/'.$row["imgFullNameGallery"].');"></div>
	   <h3>* '.$row["titleGallery"].' *</h3>
	 <p>'.$row["descGallery"].'</p>
	 </a>
	 </div>';
	   }
	 
   }

   
   
   }
     else {
	   echo '
 

  
            <article class="landscape">
                <img src="fotot/memory1.jpg" alt="Foto nuk eshte loaduar" height="200px" width="300px">
                <h2 style="color:black;">Memory 1</h1>
                <p style="color:black;">A trip to cyprus</p>
            </article>
            <article clas="landscape">
                <img src="fotot/memory2.jpg" alt="Foto nuk eshte loaduar" height="200px" width="300px">
                <h2 style="color:black;">Memory 2</h1>
                <p style="color:black;">A trip to cyprus</p>
            </article>
            <article class="landscape">
                <img src="fotot/memory4.jpg" alt="Foto nuk eshte loaduar" height="200px" width="300px">
                <h2 style="color:black;">Memory 3</h1>
                <p style="color:black;">A trip to cyprus</p>
            </article>
            
';
	 }
		?>
				

	</div>	

		
        <div  id="bottom-section">
		     <table id="logoArea">
			  <td id="logo">
                    <img src="fotot/Welcome.png" alt="person" width=130px height=100px>
                </td>
			          <td><p style="color:black; font-size:15px;">
                     <?php
if(isset($_SESSION['IDperdoruesit'])){
	echo"Welcome ".$_SESSION['EMRIperdoruesit']." enjoy your time at our website ^-^<br/>";
	echo "<a href='src/login.php'>Logout</a>";
}
else{
	echo "You dont have an account - <a href='src/signup.php'>Signup</a></br>";
echo "You have an account - <a href='src/login.php'>Login</a>";
}

?> 
     </p>           </td>
                <td id="moreOptions">
				<a href="index.php">Home</a> |
                    <a href="src/game.php">Game</a> |
                    <a href="src/gallery.php">Gallery</a>|
                    <a href="src/portfolio.php">Portfolio</a>|
                    <a href="src/team.php">Team</a>
                </td>
            </table>
                
        
</div>
				
                
      <footer>
            <pre>                                                       copyright&copy;2013-All rights Reserved-Domain Name                                                                                                                                                                                                                     Punoi grupi 9</pre>
        </footer>

    <script src="js/responsive.js"></script>
    <script>




            document.getElementById('coo')
            var x = 1;
            showSlides(x);

            function plusSlides(n) {
            showSlides(x += n);
            }


            function currentSlide(n) {
            showSlides(x = n);
            }

            function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {x = 1}    
            if (n < 1) {x = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[x-1].style.display = "block";  
            dots[x-1].className += " active";
            }


            
    
    </script>
</body>
</html>