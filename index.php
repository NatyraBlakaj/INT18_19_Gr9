<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" manifest="offline.appcache">
    <head>
        <meta charset="UTF-8">
        <title>Memories</title>

        <link rel="stylesheet" href="css/slider.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/footer.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
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
                <a href="../index.html"   class="active">HOMEPAGE</a>
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
                        <span class="fadingLine"></span>
                    </div>
                    <?php
                        $name = "user";
                        $value = "Grupi 24";
                        setcookie($name, $value, time() + (86400 * 30), "/");



                        if(!isset($_COOKIE[$name])) {
                            echo "<p>alert('Cookies are not set');</p>";
                        } else {
                            echo "<p>Cookies are set, your name is $value</p>";
                        }
                        ?>
                    <br />
                    <button>Click here to change cookies name</button>
                    <div>
                        <span class="fadingLine"></span>
                    </div>
                </div>

            </div>
        
            <div id="articles">
                <article id="article1">
                    <img src="fotot/spring.jpg" height="180px" width="225px" alt="Pa foto...">
                    <h3>Lorem ipsum</h3>
                    <br />
                    <p> Fugit aliquid quisquam totam aliquam nobis,
                        reprehenderit autem natus provident atqu</p>
                    <br />
                    <a href="src/gallery.html">VIEW THIS CATEGORY >></a>
                </article>

                <article id="article2">
                        <img src="fotot/summer.jpg" height="180px" width="225px" alt="Pa foto...">
                        <h3>Lorem ipsum</h3>
                        <br />
                        <p> Fugit aliquid quisquam totam aliquam nobis,
                            reprehenderit autem natus provident atqu</p>
                        <br />
                        <a href="src/gallery.html">VIEW THIS CATEGORY >></a>
                </article>
                
                <article id="article3">
                            <img src="fotot/autumn.jpg" height="180px" width="225px" alt="Pa foto...">
                            <h3>Lorem ipsum</h3>
                            <br />
                            <p> Fugit aliquid quisquam totam aliquam nobis,
                                reprehenderit autem natus provident atqu</p>
                            <br />
                            <a href="src/gallery.html">VIEW THIS CATEGORY >></a>
                </article>
                    
                <article id="article4">
                                <img src="fotot/winter.jpg" height="180px" width="225px" alt="Pa foto...">
                                <h3>Lorem ipsum</h3>
                                <br />
                                <p> Fugit aliquid quisquam totam aliquam nobis,
                                    reprehenderit autem natus provident atqu</p>
                                <br />
                                <a href="src/gallery.html">VIEW THIS CATEGORY >></a>
                </article>

            </div>
        </div>
        <div  id="moreInfo">
                <div id="developers">
                    <h2>Punuan</h2>
                    <div class="developer">
                            <table>
                                    <tr>
                                    <td rowspan="3" colspan="5"><img class="devAvatar" height="95px" width="95px" src="fotot/maleavatar.jpg"></td>
                                    </tr>
                                    <tr>
                                      <td><b>Shkelqim Maxharraj</b></td>
                                    </tr>
                                    <tr>
                                      <td>disa tekst rreth ketij puntori te zellsisa tekst rreth disa tekst rreth ketij puntori te zellsisa tekst r ketij puntori te zellsh</td>
                                    </tr>
                            </table>
                            <table>
                                    <tr>
                                    <td rowspan="3"><img class="devAvatar" height="95px" width="95px" src="fotot/femaleavatar.jpg"></td>
                                    </tr>
                                    <tr>
                                      <td><b>Natyra Blakaj</b></td>
                                      
                                    </tr>
                                    <tr>
                                      <td>disa tekst rreth ketij disa tekst rreth ketij puntori te zellsisa tekst puntori te zellsisa tekst rreth ketij puntori te zellsh</td>
                                    </tr>
                            </table>
                    </div>

                </div>
                <div id="aboutProject">
                    <h3>One quarter</h3>
                    <br />
                    <p><b>Post title</b> <br /> <small><a href="#">Admin</a>domain.com<br />
                    Thursday, 22nd November, 2018
                    </small>
                    <br /><br />
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Consequuntur aperiam at tempore officiis esse quod<br />
                     <a href="src/team.html" class="readMore">Read more</a>
                    </p>
                        <br />
                    <p><b>Post title</b> <br /> <small><a href="#">Admin</a>domain.com<br />
                        Thursday, 22nd November, 2018
                        </small>
                        <br /><br />
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Consequuntur aperiam at tempore officiis esse quod<br />
                         <a href="src/team.html" class="readMore">Read more</a>
                    </p>
                    <br />
                </div>
                <div id="submitForm">
                    <h3>One quarter</h3>
                        <br />
                
                    <form action="">
                        <input size="27" placeholder="Name" type="text">
                        <input size="27" placeholder="Email" type="email">
                        <textarea rows="7" placeholder="Message" cols="28"></textarea>
                        <button type="submit">Submit</button>
                    </form>
                    <br />
                </div>
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