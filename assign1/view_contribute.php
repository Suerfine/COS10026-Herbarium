<!DOCTYPE html>
<html lang="en">
  <head>
	<!--Metadata-->
	<meta charset="UTF-8">
	<meta name="description" content="Herbarium">
	<meta name="keywords" content="HTML, CSS">
	<meta name="author" content="Herbivore">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Stylesheets-->
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer">
	<link rel="icon" href="images/logo2.png" type="image/x-icon">
	<title>Contribute table</title>
  </head>
  <body>    
    <main>
		  <h1>Contribute Table</h1>
      <?php
        include("conn.php");

        if(!$conn){
          die('failed to connect to db'.mysqli_connect_error());
        }
        else{
          $sql = 'select * from contribution';
          $query = mysqli_query($conn,$sql);

          if(!$query){
            die('error found'.mysqli_error($conn));
          }

          echo "
            <table class='table' border='1px'>
            <tr>
            <th>Id</th>
            <th>Plant Name</th>
            <th>Plant Family</th>
            <th>Plant Genus</th>
            <th>Plant Species</th>
            <th>Herbarium Image</th>
            <th>Fresh Leaf Image</th>
            </tr>";

          while ($row = mysqli_fetch_array($query))
          {
            echo ' <tr>
              <td>'.$row['id'].'</td>
              <td>'.$row['plant_name'].'</td>
              <td>'.$row['plant_family'].'</td>
              <td>'.$row['plant_genus'].'</td>
              <td>'.$row['plant_species'].'</td>
              <td><img src="data:image/jpeg;base64,'. base64_encode($row['herbarium_img']).'" width="100" height="100" /></td>
              <td><img src="data:image/jpeg;base64,'. base64_encode($row['fresh_leaf_img']).'" width="100" height="100" /></td>
              </tr>';
          }

          echo "</table>";
        }
      ?>
    </main>
  </body>
</html>
