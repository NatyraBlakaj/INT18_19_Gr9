<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="UTF-8">
        <title>Memories</title>


        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/contact.css">
        <link rel="stylesheet" href="../css/footer.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
    </head>

<body>

        
         <?php
		include "header.php";
		?>


        <div class="container">


    

            <form>
                    <fieldset>
                    <legend><h2>Contact us:</h2></legend>
                        <form action="mailto:shkelqimimaxharraj@gmail.com"
                         name="contactForm" method="post" enctype="text/plain" >
                            <table>
                                <tr>
                                    <td><label>Emri:</label></td>
                                    <td><input type="text" name="name"required></td>
                                </tr>
                                <tr>
                                    <td><label>Tel:</label></td>
                                    <td><input type="tel" name="tel"required></td>
                                </tr>
                                <tr>
                                    <td><label>Email:</label></td>
                                    <td><input type="email" name="email" required></td>
                                </tr>
                                <tr>
                                    <td><label>Qyteti:</label></td>
                                    <td><input type="text" name="city"required></td>
                                </tr>
                                <tr>
                                    <td><label>Mesazhi:</label></td>
                                    <td><textarea name="message" id="" cols="32" rows="5" required></textarea></td>
                                </tr>
                                <tr>
                                    
                                    <td></td><td><button id="sendMessage"><a href="mailto:someone@example.com?Subject=Hello%20again" target="_top">Send Mail</a></button></td>
                                </tr>
                            </table>
                        </form>
                    </fieldset>
            </form>

            <div id="map">
                <img src="../fotot/Map.png" width="100%" height="400px;" alt="">
            </div>
 
        </div>


        <footer>
            <pre>                                                       copyright&copy;2013-All rights Reserved-Domain Name                                                                                                                                                                                                                     Punoi grupi 9</pre>
        </footer>

        <script>
            document.getElementById("map").onclick = function () {
                location.href = "https://www.google.com/maps/search/Fakulteti+Teknik,+Prishtina+/@42.6492903,21.1673145,15.75z", '_blank';
            };

            

        </script>
                
        
</body>
</html>