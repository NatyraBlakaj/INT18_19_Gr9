<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="UTF-8">
        <title>Memories</title>


        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/login.css">
		<link rel="stylesheet" href="../css/gallery.css">
        <link rel="stylesheet" href="../css/footer.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>

<body>

        <?php
		include "header.php";
		?>

    <section class="gallery-links">
   <div class="wrapper">
         
   <div class="gallery-container">
    <h2>Gallery</h2>
 <?php
   if (isset($_SESSION['IDperdoruesit'])){     
   include_once 'includes/dbh.inc.php';

   
   $sql="select * from gallery order by orderGallery DESC;";
   $stmt=mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($stmt,$sql)){
	   echo "SQl statement failes!";
   }else{
	   mysqli_stmt_execute($stmt);
	   $result=mysqli_stmt_get_result($stmt);
	   
	   while($row=mysqli_fetch_assoc($result)){
		   echo '
	
		   <div class="foto">
     <a href="#">
	 <div style="background-image:url(img/gallery/'.$row["imgFullNameGallery"].');"></div>
	   <h3>* '.$row["titleGallery"].' *</h3>
	 <p>'.$row["descGallery"].'</p>
	 </a>
	 </div>';
	   }
   }
   
   echo'
   <div class="gallery-upload">
   <h1>Uploadfile</h1>
   <form action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data" >				
   <input type="text" name="filename" placeholder="File name...">
   <input type="text" name="filetitle" placeholder="Image title...">
   <input type="text" name="filedesc" placeholder="Image desctription...">
   <input type="file" name="file">
   <button type="submit" name="submit">Upload</button>
   </form>
   </div>
   </div>';
  

   
   
   }

     else {
	   echo '
 
   </div>
      </div>
   </section>
  
    <div class="container">
  
            <article class="landscape">
                <img src="../fotot/memory1.jpg" alt="Foto nuk eshte loaduar" height="200px" width="300px">
                <h1>Memory 1</h1>
                <p>A trip to cyprus</p>
            </article>
            <article clas="landscape">
                <img src="../fotot/memory2.jpg" alt="Foto nuk eshte loaduar" height="200px" width="300px">
                <h1>Memory 2</h1>
                <p>A trip to cyprus</p>
            </article>
            <article class="landscape">
                <img src="../fotot/memory4.jpg" alt="Foto nuk eshte loaduar" height="200px" width="300px">
                <h1>Memory 3</h1>
                <p>A trip to cyprus</p>
            </article>
            <article class="landscape">
                <img src="../fotot/memory7.jpg" alt="Foto nuk eshte loaduar" height="200px" width="300px">
                <h1>Memory 4</h1>
                <p>A trip to cyprus</p>
            </article>
            <article class="city">
                <img src="../fotot/memory3.jpg" alt="Foto nuk eshte loaduar" height="200px" width="300px">
                <h1>Memory 5</h1>
                <p>A trip to cyprus</p>
            </article>
            <article class="arch">
                <img src="../fotot/memory5.jpg" alt="Foto nuk eshte loaduar" height="200px" width="300px">
                <h1>Memory 6</h1>
                <p>A trip to cyprus</p>
            </article>
            <article class="arch">
                <img src="../fotot/memory6.jpg" alt="Foto nuk eshte loaduar" height="200px" width="300px">
                <h1>Memory 7</h1>
                <p>A trip to cyprus</p>
            </article>
            <article class="other">
                <img src="../fotot/memory8.jpg" alt="Foto nuk eshte loaduar" height="200px" width="300px">
                <h1>Memory 8</h1>
                <p>A trip to cyprus</p>
            </article>
            <article class="other">
                <img src="../fotot/memory9.jpg" alt="Foto nuk eshte loaduar" height="200px" width="300px">
                <h1>Memory 9</h1>
                <p>A trip to cyprus</p>
            </article>
        </div>';
	 }
		?>
	
		
		
        <footer>
            <pre>                                                       copyright&copy;2013-All rights Reserved-Domain Name                                                                                                                                                                                                                     Punoi grupi 9</pre>
        </footer>

</body>
</html>