<?php
  session_start();
  if(!isset($_SESSION['level']) || $_SESSION['level']!="ADMIN"){
    echo<<<HTML
      <p>
        Please login with a Admin account.
      </p>
      <a href="login.php?origin=view_enquiry.php">LogIn</a>
      <a href="logout.php">LogOut</a>
    HTML;
    die();
  }
?>
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
	<link rel="icon" href="images/icon.png" type="image/x-icon">
	<title>Contribute table</title>
  </head>
  <body>    
    <?php include('header.inc'); ?>
    <main>
		  <h1 id="view-contribute-h1">Contribute Table</h1>
      <ul class="view-links">
        <li><a href="admin_panel.php">Admin Panel</a></li>
        <li><a href="view_contribute.php">Contribute Table</a></li>
        <li><a href="view_enquiry.php">Enquiry Table</a></li>
      </ul>
      <!-- SEARCH FILTERING -->
      <form action="view_contribute.php" class="mt-3 mb-3 filter-form" method="GET">
        <div class="d-flex w-100">
          <input type="search" class="form-control w-100" name="search" placeholder="Search by Plant Name" value="<?php echo $_GET['search']??""?>">
					<label for="family" class="form-label">Plant Family:</label>
					<select name="family" id="family" class="form-control">
						<option value="ALL" selected>All</option>
						<option value="Dipterocarpaceae">Dipterocarpaceae</option>
						<option value="Lauraceae">Lauraceae</option>
						<option value="Burseraceae">Burseraceae</option>
					</select>
          <label for="genus" class="form-label">Plant Genus:</label>
					<select id="genus" name="genus" class="form-control">
						<option value="ALL">All</option>
						<option value="Vatica">Vatica</option>
						<option value="Dipterocarpus">Dipterocarpus</option>
						<option value="Hopea">Hopea</option>
						<option value="Actinodaphne">Actinodaphne</option>
						<option value="Endiandra">Endiandra</option>
						<option value="Beilschmiedia">Beilschmiedia</option>
						<option value="Canarium">Canarium</option>
						<option value="Dacryodes">Dacryodes</option>
						<option value="Santiria">Santiria</option>
					</select>
          <label for="species" class="form-label">Plant Species:</label>
					<select id="species" name="species" class="form-control" required>
						<option value="ALL">All</option>
						<option value="Vatica adenanii">Vatica adenanii </option>
						<option value="Vatica sarawakensis">Vatica affinis</option>
						<option value="Vatica cauliflora">Vatica cauliflora</option>
						<option value="Hopea celebica">Hopea celebica</option>
						<option value="Hopea discolor">Hopea discolor</option>
						<option value="Hopea gregaria">Hopea gregaria</option>
						<option value="Endiandra baillonii">Endiandra baillonii</option>
						<option value="Endiandra brassii">Endiandra brassii</option>
						<option value="Endiandra cuneata">Endiandra cuneata</option>
					</select>
        </div>
        <div class="w-100 mt-3 mb-3 text-right">
          <button class="button-primary" type="submit">Search</button>
        </div>
      </form>
      <?php
        include("conn.php");

        if(!$conn){
          die('failed to connect to db'.mysqli_connect_error());
        }
        else{
          $sql = "SELECT * FROM contribution";
          $search="\"%".mysqli_real_escape_string($conn,$_GET['search']??"")."%\"";
          $sql.=" WHERE `plant_name` LIKE $search ";
          if(isset($_GET['family']) && $_GET['family']!="ALL")$sql.="AND `plant_family`=\"".mysqli_real_escape_string($conn,$_GET['family'])."\" ";
          if(isset($_GET['genus']) && $_GET['genus']!="ALL")$sql.="AND `plant_genus`=\"".mysqli_real_escape_string($conn,$_GET['genus'])."\"";
          if(isset($_GET['species']) && $_GET['species']!="ALL")$sql.="AND `plant_species`=\"".mysqli_real_escape_string($conn,$_GET['species'])."\" ";
          $query = mysqli_query($conn,$sql);

          if(!$query){
            die('error found'.mysqli_error($conn));
          }

          echo "
            <div class='view-contribute-table'><table class='table-bordered'>
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
              <td><a href="'.$row['herbarium_img'].'"><img src="'.$row['herbarium_img'].'" width="100" height="100" alt="'.basename($row['herbarium_img']).'"/></a></td>
              <td><a href="'.$row['fresh_leaf_img'].'"><img src="'.$row['fresh_leaf_img'].'" width="100" height="100" alt="'.basename($row['fresh_leaf_img']).'"/></a></td>
            </tr>';
          }

          echo "</table></div>";
        }
      ?>
    </main>
  </body>
</html>
