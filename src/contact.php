
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
    
        <style>
        .container{
            height:400px;
        }
        table {
            margin:auto;
        }
        input[type=submit] {
            border-radius:10px;
            background-color:green;
            color:white;
            font-size:1.3em;
            cursor:pointer;
        }

        input[type=submit]:hover {
            background-color:red;
        }
        
        </style>
    </head>

<body>

        
         <?php
        include "header.php";
   
        if(filter_has_var(INPUT_POST,'submit')){
           $name=   $_POST['name'];
           $email=  $_POST['email'];
           $message=$_POST['message'];
        
           if(empty($email) || empty($name) ||  empty($message)){
            echo "<script>alert('Ju lutem mbushini te gjitha rubrikat e dhena!');</script>";
           }
           else{
                echo "<script>window.open('mailto:ilaziendrit@gmail.com')</script>";
           }
        
        }
        
        ?>
        

?>
        <div class="container">


    

            
        <form method ="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <table>
            <tr>
                <td><label>Name</label></td>
                <td><input type="text" name="name"   value=""></td>
            </tr>
            <tr>
                <td><label>Email</label></td>
                <td><input type="text"name ="email"class="from-control"value=""></td>
            </tr>
            
            <tr>
                <td><label>Message</label></td>
                <td><textarea name="message"   ></textarea></td>
            </tr>
            <tr><td>
            <button type="submit"name="submit" class="btn-primary">Submit</button>
            </tr></td>
        </table>
            
        </form>
</div>

                    </fieldset>
            

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