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
  die;
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
    <?php include('header.inc');?>
    <main>
		  <h1 id="view-enquiry-h1">Enquiry Table</h1>
      <ul class="view-links">
        <li><a href="admin_panel.php">Admin Panel</a></li>
        <li><a href="view_contribute.php">Contribute Table</a></li>
        <li><a href="view_enquiry.php">Enquiry Table</a></li>
      </ul>
      <!-- SEARCH FILTERING -->
      <form action="view_enquiry.php" class="mt-3 mb-3 filter-form" method="GET">
        <div class="d-flex w-100">
          <input type="search" class="form-control w-70" name="search" placeholder="Search by FirstName/LastName/Email">
          <label for="tutorial" class="form-label">Tutorial:</label>
          <select id="tutorial" class="form-control w-30" name="tutorial" required>
            <option value="ALL" disabled selected hidden>All</option>
            <option value="tutorial">Tutorial</option>
            <option value="tools">Tools</option>
            <option value="care">Care</option>
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
          $sql="SELECT * FROM enquiry ";
          /*ENHANCEMENT SEARCH PARAMETER*/
          $search="\"%".mysqli_real_escape_string($conn,$_GET['search']??"")."%\"";
          $sql.="WHERE (`first_name` LIKE $search OR `last_name` LIKE $search OR `email` LIKE $search)";
          if(isset($_GET['tutorial']) && $_GET['tutorial'] !="ALL"){
            $sql.=" AND `tutorial`='".mysqli_real_escape_string($conn,$_GET['tutorial'])."'";
          }
          /*ENHANCEMENT SEARCH PARAMETER*/
          $query = mysqli_query($conn,$sql);
          if(!$query){
            die('error found'.mysqli_error($conn));
          }

          echo "
              <div class='view-contribute-table'><table>
              <tr>
              <th>Id</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Street Address</th>
              <th>City/Town</th>
              <th>State</th>
              <th>Postcode</th>
              <th>Phone No.</th>
              <th>Tutorial</th>
              <th>Enquired On</th>
              </tr>";

            while ($row = mysqli_fetch_array($query))
            {
              echo ' <tr>
                <td>'.$row['id'].'</td>
                <td>'.$row['first_name'].'</td>
                <td>'.$row['last_name'].'</td>
                <td>'.$row['email'].'</td>
                <td>'.$row['street_address'].'</td>
                <td>'.$row['city/town'].'</td>
                <td>'.$row['state'].'</td>
                <td>'.$row['postcode'].'</td>
                <td>'.$row['phone_no'].'</td>
                <td>'.$row['tutorial'].'</td>
                <td>'.date("d/m/y H:i",strtotime($row['dt_create'])).'</td>
                </tr>';
            }

            echo "</table></div>";
          }
      ?>
    </main>
  </body>
</html>
