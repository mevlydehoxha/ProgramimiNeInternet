<html>
<head>
<title>Delete clients</title>
<meta charset="utf-8"/>
<link rel="stylesheet" href="style.css"/>
</head>
   <body>
      <?php
         $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
          echo "<a href='$url'></a>"; 
         if(isset($_POST['delete'])) {
            $localhost = "localhost:3307";
            $root = "root";
            $pass = '';
			$db="guests";
            $conn = mysqli_connect($localhost,$root,$pass,$db);
            
            if(! $conn ) {
               die('LIDHJA DESHTOI ' . mysqli_error());
            }
				
            $id = $_POST['id'];
            
            $sql = "DELETE FROM guests WHERE id = $id" ;
            
            $query = mysqli_query( $conn,$sql );
            
            if(!$query ) {
               die('NUK ESHTE E MUNDUR FSHIRJA E TE DHENAVE' . mysqli_error());
            }
            
            echo " <input type='button' value='GO BACK' class='button' style='width:15%' onclick='history.back(-1)'/> <p class='form' style='text-align:center;color:black;'>FSHIRJA U KRYE ME SUKSES<p>";
            
            mysqli_close($conn);
         }else {
            ?>
			 <input type="button" value="GO BACK" class="button" style="width:15%" onclick="history.back(-1)" />
               <form method = "post"  class="form" action = "<?php $_PHP_SELF ?>">
			   <h1 class="title">ENTER HERE THE ID</h1>
                        <input name = "id" type = "text" class="input" placeholder="ID" style="text-align:center"></td>
                           <input name = "delete" type = "submit" class="button" value = "Delete">
               </form>
            <?php
         }
      ?>
      
   </body>
</html>
