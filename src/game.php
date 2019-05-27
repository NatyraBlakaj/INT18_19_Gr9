<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="UTF-8">
        <title>Memories</title>


        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/footer.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>

    .moveAble {
        position: relative;
    }
    .moveAble {
        overflow: hidden;
        margin-top: 39%;
    }
    .container {
        height: 463px;
    }

    #target {
        height: 50px;
        width: 50px;
        position: absolute;
        top: 300px;
        left: 200px;
        background-color: red;
        cursor: pointer;
    }

    </style>
    
    
    </head>
   <?php
		include "header.php";
		?>
<body>

    
        <div class="container">
                <h1>Time <span id="countdowntimer">20</span> sec</h1>
                <div id="target">

                </div>

                <div class="moveAble">
                    <div class="info"><img src="https://vignette.wikia.nocookie.net/cswikia/images/c/ce/Ak47.png/revision/20150306031622" height="50px" width="70px" alt="info" /></div>
                </div>

        </div>



        <footer>
            <pre>                                                       copyright&copy;2013-All rights Reserved-Domain Name                                                                                                                                                                                                                     Punoi grupi 9</pre>
        </footer>

        <script>
            //Move gun in horizontally
            $(document).ready(function(){
                $(document).mousemove(function(e){
                    var x = e.pageX;
                    $('.moveAble').css('left', x);
                });
            });
            var i = 0;
            //Shoot squares
            $("#target").click(function(){
                var topValue  = Math.floor(Math.random() * (632 - 226 + 1) + 226);
                var leftValue = Math.floor(Math.random() * (1100 - 200 + 1) + 200);
                $(this).hide();
                $("#target").css("left", leftValue);
                $("#target").css("top" , topValue);
                $("#target").fadeIn(1000);
                i++;
                console.log(i);
            });
            //If you miss
            $(document).mouseup(function(e) 
                {
                    var container = $("#target");
                    if (!container.is(e.target) && container.has(e.target).length === 0) 
                    {
                        alert("Ouch u missed!!! Total score " + i);
                        location.reload();
                    }
                });

            //Timer
            var timeleft = 20;
            var downloadTimer = setInterval(function(){
            timeleft--;
            document.getElementById("countdowntimer").textContent = timeleft;
            if(timeleft <= 0)
                var x = confirm("Time over. Your score is:"+ i + " restart ?");
                if (x == true) {
                    location.reload();
                }
            },1000);










        </script>
    
</body>
</html>