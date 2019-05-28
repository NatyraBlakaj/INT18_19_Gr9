<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="UTF-8">
        <title>Memories</title>


        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/portfolio.css">
        <link rel="stylesheet" href="../css/footer.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    </head>
    <style>

input, select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
.far {
  text-align:center;
  cursor:pointer;
}
.far:hover{
  color:red;
}
}
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.main {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

/* The popup (background) */
.popup {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 0; /* Sit on top */
  padding-top: 80px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* popup Content */
.popupContent {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}
thead {
    font-weight: bold;
}

/* The Close Button */
.close {
  color: black;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  text-decoration: none;
  cursor: pointer;
}
.container tr, .container td {
  padding-left: 30px;
  padding-right: 25px;
  padding-top: 10px;
  padding-bottom: 10px;
}

.popup-header {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

.popup-body {padding: 2px 16px;}

.popup-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}
    </style>

<body>

        
  <?php
    include "header.php";
    include 'includes/portfolio.inc.php';
//Connect with databse

    $conn = OpenConn();
    $query = 'SELECT * FROM projects';
    $result = mysqli_query($conn, $query);
    $projects = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);



/*
    if(empty($POST["Name"])){
      $Name_error="name is required";
    }
    else{
      $Name=test_input($_POST["Name"]);
      if(!filter_var($Name,FILTER_VALIDE_NAME)){
        $Name_error="invalid name format";
      }
    }
  */

//Add a record in database POST

    if(isset($_POST['submit'])){

      $emri = mysqli_real_escape_string($conn, $_POST['emrip']);
      $wbp = mysqli_real_escape_string($conn, $_POST['webpagep']);
      $tml = mysqli_real_escape_string($conn, $_POST['timelinep']);
      $wp = mysqli_real_escape_string($conn, $_POST['workersp']);

      $addQuery = "INSERT INTO projects(emriProjektit, webpageProjektit, timelineProjektit, workersProjektit) VALUES('$emri', '$wbp', '$tml', '$wp')"; 

      if(mysqli_query($conn, $addQuery))
      {
        echo "<script>window.onload(); </script>";
      }
      else {
        echo "";
      }
    }
//Delete record from db

    if(isset($_POST['delete'])){

      $emri = mysqli_real_escape_string($conn, $_POST['deletePost']);
    $deleteQuery = "DELETE FROM  projects WHERE emriProjektit = {$emri}"; 

      if(mysqli_query($conn, $deleteQuery))
      {
        echo "<script>window.onload(); </script>";
      }
      else {
        echo "";
      }
    }





		?>
		
        <div class="container">
                <table id="projectsTable">
                        <thead>
                            <td>Emri</td>
                            <td>webpage</td>
                            <td>Koha</td>
                            <td>Nr puntoreve</td>
                            <td> Delete </td>
                            <td> Edit </td>
                        </thead>
                      <?php foreach($projects as $project) : ?>
                          <tr>
                              <td><?php echo $project['emriProjektit']; ?> </td>
                              <td><?php echo $project['webpageProjektit']; ?> </td>
                              <td><?php echo $project['workersProjektit']; ?> </td>
                              <td><?php echo $project['timelineProjektit']; ?> </td>
                              <td>

                              <form action="<?php echo $_server['PHP_SELF']; ?>">
                                <input type="hidden" name='deletePost' value= "<?php echo $project['emriProjektit']; ?>">
                                <input type='submit' name='delete' value='DELETE' >
                              </form>

                              </td>
                              
                              
                              
                              
                              <td><?php echo "<i name='editPost' id='editPost' class='far fa-edit'></i>" ?> </td> 
                          </tr>
                        <?php endforeach; ?>

                      </table>
                <input type="button" id="addProjectBtn" value="ADD PROJECT">
                <!-- The popup -->
<div id="popup" class="popup">

        <!-- popup content -->
        <div class="popupContent">
         <div class="main">
            <span class="close">&times;</span>

                <form method='POST' action=<?php $_SERVER['PHP_SELF']; ?> >
                    Name    <input type="text"      name='emrip'         id="timelineProjektit">    <br />
                    Website <input type="text"      name='webpagep'      id="webpageProjektit">     <br />
                    Time    <input type="number"    name='timelinep'     id="timelineProjektit">    <br />
                    Employes<input type="number"    name='workersp'      id="workersProjektit">     <br />
                            <input type="submit"    name="submit"       value="ADD PROJECT">
                </form>

              
          </div>
        </div>
      
      </div>
        </div>


        <footer>
            <pre>                                                       copyright&copy;2013-All rights Reserved-Domain Name                                                                                                                                                                                                                     Punoi grupi 9</pre>
        </footer>

    <script src="../js/responsive.js"></script>
    <script>
        
            var popup = document.getElementById('popup');
            var btn = document.getElementById("addProjectBtn");
            var span = document.getElementsByClassName("close")[0];

            //When user click button add project then open popup
            btn.onclick = function() {
            popup.style.display = "block";
            }



            //If user click X then close popup
            span.onclick = function() {
            popup.style.display = "none";
            }

            //If user click outside popup close it
            window.onclick = function(event) {
            if (event.target == popup) {
                popup.style.display = "none";
            }
            }
    </script>
</body>
</html>