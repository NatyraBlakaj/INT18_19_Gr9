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


    <style>
    .developer {
        text-align:center;
        border-radius:30px;
        opacity: 0.9;
        width:30%;
        display:inline-block;
        border:1px solid lightblue;
        margin:6%;
        background-color: #a5b08e;
    }
    .developer:hover {
        opacity:1;
        border:1px solid  lightblue;
        cursor:pointer;
    }
    .developer img {
        height:100px;
        width:100px;
    } 
    
    
    </style>
    </head>

<body>
<div class="container">
<?php
		include "header.php";
	

class developer
{
    public $name;
    public $id;
    public $avatar;
    public $aboutMe;
}

$Shkelqimi = new developer();

$Shkelqimi->name = 'Shkelqim Maxharraj';
$Shkelqimi->id = '160714100079';
$Shkelqimi->avatar = '../fotot/photo1.jpg';
$Shkelqimi->aboutMe = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';

$Natyra = new developer();
$Natyra->name = 'Natyra Blakaj';
$Natyra->id = '160714100080';
$Natyra->avatar = '../fotot/photo2.jpg';
$Natyra->aboutMe = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';

$Blerta = new developer();
$Blerta->name = 'Blerta Jashari';
$Blerta->id = '160714100079';
$Blerta->avatar = '../fotot/photo3.jpg';
$Blerta->aboutMe = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';

$Fitorja = new developer();
$Fitorja->name = 'Fitore Hyseni';
$Fitorja->id = '160714100080';
$Fitorja->avatar = '../fotot/photo4.jpg';
$Fitorja->aboutMe = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';





$developers = array($Shkelqimi, $Natyra, $Blerta, $Fitorja);

foreach ($developers as $dev){
    echo "<div class='developer'> <h2> $dev->name </h2>";
    echo "<br> </br><img src=$dev->avatar height:100px width:100px >";
    echo "<br> </br><h3>$dev->id</h3> ";
    echo "<p>$dev->aboutMe </p>";
    echo "</div>";

}

?>
</div>







<footer>
            <pre>                                                       copyright&copy;2013-All rights Reserved-Domain Name                                                                                                                                                                                                                     Punoi grupi 9</pre>
</footer>

    
</body>
</html>
