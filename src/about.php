<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="UTF-8">
        <title>Memories</title>


        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href ="../css/about.css">
        <link rel="stylesheet" href="../css/footer.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

<body>

        
         <?php
		include "header.php";
		?>
 
 <div class="container">
            <h1>About us</h1>
            <h2>What do we provide</h2>


                    <table>
                        <tr>
                            <td><span><img src="../fotot/memory4.jpg" height="100px" width="100px" alt=""></span></td>
                            <td> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus debitis repellendus similique distinctio? Unde harum eveniet aspernatur quam aperiam iusto animi maxime vitae! Ipsam esse quae neque mollitia similique earum?</td>
                        </tr>
                        <br />
                        <tr>
                            <td><span><img src="../fotot/memory4.jpg" height="100px" width="100px" alt=""></span></td>
                            <td> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus debitis repellendus similique distinctio? Unde harum eveniet aspernatur quam aperiam iusto animi maxime vitae! Ipsam esse quae neque mollitia similique earum?</td>
                        </tr>
                        <tr>
                            <td><span><img src="../fotot/memory4.jpg" height="100px" width="100px" alt=""></span></td>
                            <td> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus debitis repellendus similique distinctio? Unde harum eveniet aspernatur quam aperiam iusto animi maxime vitae! Ipsam esse quae neque mollitia similique earum?</td>
                        </tr>
                    </table>


                    <video width="500" height="300" controls>
                        <source src="../fotot/video1.mp4" type="video/mp4">
                        <source src="../fotot/video1.ogg" type="video/ogg">
                            
                        
                     </video>

                     <audio controls>
                        <source src="../fotot/audio1.ogg" type="audio/ogg">
                        <source src="../fotot/audio1.mp3" type="audio/mpeg">
                        
                      </audio>
                      
            
            
        </div>

        

        <footer>
            <pre>                                                       copyright&copy;2013-All rights Reserved-Domain Name                                                                                                                                                                                                                     Punoi grupi 9</pre>
        </footer>

        <script type="text/javascript">
 
 function updateBackground() {
  var 
    ora = (new Date()).getHours(),
    body = document.body,
    bstyle = body.style,    
    hello = document.querySelector(".hello");    
  if (ora < 10) {
    bstyle.backgroundColor = "rgb(162, 79, 79)";
    bstyle.color = "white";
  } else if (ora < 20) {
    bstyle.backgroundColor = "maroon";
    bstyle.color = "white";
  } else {
    bstyle.backgroundColor = "black";
    bstyle.color = "white";
  } 
}

setInterval(updateBackground, 1000 * 60);
updateBackground();
        </script>
        
</body>
</html>