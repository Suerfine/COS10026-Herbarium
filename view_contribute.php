<?php
  session_start();
  if(!isset($_SESSION['level']) || $_SESSION['level']!="ADMIN"){
    echo<<<HTML
      <p>
        Please login with a Admin account.
      </p>
      <a href="login.php?origin=view_contribute.php">LogIn</a>
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
		  <h1 id="view-contribute-h1" class="text-center">Contribute Table</h1>
      <ul class="view-links">
        <li><a href="user_management.php">User Management</a></li>
        <li><a href="view_contribute.php">Contribute Table</a></li>
        <li><a href="view_enquiry.php">Enquiry Table</a></li>
      </ul>
      <!-- SEARCH FILTERING -->
      <form action="view_contribute.php" class="mt-3 mb-3 filter-form" method="GET">
        <div class="d-flex w-100">
          <input type="search" class="form-control w-100" name="search" placeholder="Search by Plant Name" value="<?php echo $_GET['search']??""?>">
					<label for="family" class="form-label">Plant Family:</label>
					<select name="family" id="family" class="form-control">
            <?php
              foreach(["All","Dipterocarpaceae","Lauraceae","Burseraceae"] as $option){
                echo"<option value='{$option}'".(($option==($_GET['family']??"All"))?"selected":"").">".ucfirst($option)."</option>";
              }
            ?>
					</select>
          <label for="genus" class="form-label">Plant Genus:</label>
					<select id="genus" name="genus" class="form-control">
            <?php
              foreach(["All","Vatica","Dipterocarpus","Hopea","Actinodaphne","Endiandra","Beilschmiedia","Canarium","Dacryodes","Santiria"] as $option){
                echo"<option value='{$option}'".(($option==($_GET['genus']??"All"))?"selected":"").">".ucfirst($option)."</option>";
              }
            ?>
					</select>
          <label for="species" class="form-label">Plant Species:</label>
					<select id="species" name="species" class="form-control" required>
            <?php
              foreach(["All","Vatica adenanii","Vatica sarawakensis","Vatica cauliflora","Hopea celebica","Hopea discolor","Hopea gregaria","Endiandra baillonii","Endiandra brassii","Endiandra cuneata"] as $option){
                echo"<option value='{$option}'".(($option==($_GET['species']??"All"))?"selected":"").">".ucfirst($option)."</option>";
              }
            ?>
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
          if(isset($_GET['family']) && $_GET['family']!="All")$sql.="AND `plant_family`=\"".mysqli_real_escape_string($conn,$_GET['family'])."\" ";
          if(isset($_GET['genus']) && $_GET['genus']!="All")$sql.="AND `plant_genus`=\"".mysqli_real_escape_string($conn,$_GET['genus'])."\"";
          if(isset($_GET['species']) && $_GET['species']!="All")$sql.="AND `plant_species`=\"".mysqli_real_escape_string($conn,$_GET['species'])."\" ";
          $query = mysqli_query($conn,$sql);

          if(!$query){
            die('error found'.mysqli_error($conn));
          }
          echo<<<HTML
          <div class="mb-30">
            <table class='table-default'>
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Plant Name</th>
                  <th>Plant Family</th>
                  <th>Plant Genus</th>
                  <th>Plant Species</th>
                  <th>Herbarium Image</th>
                  <th>Fresh Leaf Image</th>
                </tr>
              </thead>
              <tbody>
          HTML;
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
          echo<<<HTML
              </tbody>
            </table>
          </div>
          HTML;
        }
      ?>
    </main>
    <?php
      $sources=[
        ["url"=>"https://fonts.google.com/icons?selected=Material+Symbols+Outlined:close:FILL@0;wght@400;GRAD@0;opsz@24&icon.size=24&icon.color=%23e8eaed","label"=>"Nav X Icon"],
        ["url"=>"https://youtu.be/EgqwdlY9iaQ?si=o7AitaXCotQ07HXe","label"=>"Responsive Navbar"],
        ["url"=>"https://cdnjs.com/libraries/font-awesome","label"=>"Nav Bar Icon"],
        ["url"=>"https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:321711-1","label"=>"Vatica sarawakensis Image"],
        ["url"=>"https://www.gbif.org/occurrence/gallery?taxon_key=5669254","label"=>"Hopea celebica Burck Image"],
        ["url"=>"https://www.gbif.org/occurrence/gallery?taxon_key=5669192","label"=>"Hopea discolor Thwaites Image"],
      ];
      include('./footer.inc'); 
    ?>
  </body>
</html>
