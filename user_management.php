<?php
	session_start();
	if(!isset($_SESSION['level']) || $_SESSION['level']!="ADMIN"){
		echo<<<HTML
			<p>Please login with a Admin account.</p>
			<a href="login.php?origin=user_management.php">LogIn</a>
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
		<meta name="keywords" content="PHP, HTML, CSS">
		<meta name="author" content="Herbivore">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--Stylesheets-->
		<link rel="stylesheet" type="text/css" href="styles/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer">
		<link rel="icon" href="images/icon.png" type="image/x-icon">
		<title>User Management</title>
  	</head>
	<?php include("header.inc");?>
	<body>
		<main class="mb-30">
			<h1 id="view-enquiry-h1" class="text-center">User Management</h1>
			<ul class="view-links">
				<li><a href="user_management.php">User Management</a></li>
				<li><a href="view_contribute.php">Contribute Table</a></li>
				<li><a href="view_enquiry.php">Enquiry Table</a></li>
			</ul>
			<form action="user_management.php" class="mt-3 mb-3 filter-form" method="GET">
				<div class="d-flex w-100">
					<input type="search" class="form-control w-100" name="search" placeholder="Search by UserName / FirstName / LastName / Email" value="<?php echo $_GET['search']??""?>">
					<label for="level" class="form-label">Level:</label>
					<select name="level" id="level" class="form-control w-30">
						<?php
						foreach(["All","ADMIN","USER"] as $option){
							echo"<option value='{$option}'".(($option==($_GET['level']??"All"))?"selected":"").">".ucfirst($option)."</option>";
						}
						?>
					</select>
				</div>
				<div class="w-100 mt-3 mb-3 text-right">
					<a class="btn-info" href="registration.php">REGISTER USER</a>
					<button class="btn-info" type="submit">SEARCH</button>
				</div>
			</form>
			<table class="table-default">
				<thead>
					<tr>
						<th>Id</th>
						<th>Username</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Level</th>
						<th>Email</th>
						<td></td>
					</tr>
				</thead>
				<tbody>
				<?php
					include_once("conn.php");
					$search="\"%".mysqli_real_escape_string($conn,$_GET['search']??"")."%\"";
					$sql="SELECT `id`, `user_name`, `first_name`, `last_name`, `level`, `email`, `password` 
						FROM `users` WHERE (`user_name` LIKE $search OR `first_name` LIKE $search OR `last_name`LIKE $search OR email LIKE $search)";
					if(isset($_GET['level']) && $_GET['level']!="All")$sql.="AND `level`=\"".mysqli_real_escape_string($conn,$_GET['level'])."\" ";
					$res=mysqli_query($conn,$sql);
					foreach($res as $row){
						echo<<<HTML
						<tr>
							<td>{$row['id']}</td>
							<td>{$row['user_name']}</td>
							<td>{$row['first_name']}</td>
							<td>{$row['last_name']}</td>
							<td>{$row['level']}</td>
							<td><a href="mailto:{$row['email']}">{$row['email']}</a></td>
							<td>
								<a class="btn-info" href="user_update.php?id={$row['id']}">UPDATE</a>
								<a class="btn-danger" href="user_delete.php?id={$row['id']}">DELETE</a>
							</td>
						</tr>
						HTML;
					}
				?>
				</tbody>
			</table>
		</main>
	</body>
	<?php
		$sources=[
			["url"=>"https://fonts.google.com/icons?selected=Material+Symbols+Outlined:close:FILL@0;wght@400;GRAD@0;opsz@24&icon.size=24&icon.color=%23e8eaed","label"=>"Nav X Icon"],
			["url"=>"https://youtu.be/EgqwdlY9iaQ?si=o7AitaXCotQ07HXe","label"=>"Responsive Navbar"],
			["url"=>"https://cdnjs.com/libraries/font-awesome","label"=>"Nav Bar Icon"],
		];
		include('./footer.inc'); 
	?>
</html>