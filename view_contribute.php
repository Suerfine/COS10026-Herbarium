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
    <?php include('/xampp/htdocs/assign1/header.inc'); ?>
    <main>
		  <h1 id="view-contribute-h1">Contribute Table</h1>
      <ul class="view-links">
        <li><a href="view_contribute.php">Contribute Table</a></li>
        <li><a href="view_enquiry.php">Enquiry Table</a></li>
      </ul>
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
            <div class='view-contribute-table'><table>
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

          echo "</table></div>";
        }
      ?>
    </main>
  <?php 
	$sources=[
	["url"=>"https://fonts.google.com/icons?selected=Material+Symbols+Outlined:close:FILL@0;wght@400;GRAD@0;opsz@24&icon.size=24&icon.color=%23e8eaed","label"=>"Nav X Icon"],
	["url"=>"https://youtu.be/EgqwdlY9iaQ?si=o7AitaXCotQ07HXe","label"=>"Responsive Navbar"],
	["url"=>"https://cdnjs.com/libraries/font-awesome","label"=>"Nav Bar Icon"],
	];
	
	include('./footer.inc'); 
  ?>
  </body>
</html>
