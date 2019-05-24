<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="UTF-8">
        <title>Memories</title>


        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/team.css">
        <link rel="stylesheet" href="../css/footer.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    </head>

<body>

                <?php
		include "header.php";
		?>

        <div class="container">
                <div class="employer" id="employer1">
                    <div id="cf">
                                    <img class="bottom" src="../fotot/maleavatar.jpg" height="150px" width="150px" />
                                    <img class="top" src="../fotot/femaleavatar.jpg" height="150px" width="150px" />
                    </div>
                    <div id="emp1">
                            <p id="emp1Text"> Lorem ipsum dolor sit amet consecte  <br />
                                adipisicing elit. A, incidunt amet.  <br />
                                Cupiditate exercitationem culpa enim <br />
                                quidem saepe, modi repellendus earum <br />
                                expedita libero fuga ea. Sunt exerci <br />
                                et dolor rerum animi.</p>   <br />
                        </div>
                </div>

                <div class="employer" id="employer2">
                    <div id="cf">
                                    <img class="bottom" src="../fotot/femaleavatar.jpg" height="150px" width="150px" />
                                    <img class="top" src="../fotot/maleavatar.jpg" height="150px" width="150px" />
                    </div>

                    <div id="em1">
                        <p id="emp2Text"> Lorem ipsum dolor sit amet consecte  <br />
                            adipisicing elit. A, incidunt amet.  <br />
                            Cupiditate exercitationem culpa enim <br />
                            quidem saepe, modi repellendus earum <br />
                            expedita libero fuga ea. Sunt exerci <br />
                            et dolor rerum animi.</p>   <br />
                    </div>
                </div>
        </div>


        <footer>
            <pre>                                                       copyright&copy;2013-All rights Reserved-Domain Name                                                                                                                                                                                                                     Punoi grupi 9</pre>
        </footer>

        <script>

$(document).ready(function() {
  var degrees = 0;
  $('.devAvatar1').click(function rotateMe(e) {
    degrees += 180;
    $('.devAvatar1').css({
      'transform': 'rotate(' + degrees + 'deg)',
      '-webkit-transform': 'rotate(' + degrees + 'deg)',
    });
  })
});

        </script>
</body>
</html>