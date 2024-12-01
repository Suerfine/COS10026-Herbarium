<header>
	<nav>
		<input type="checkbox" id="check" name="check" value="">
		<label for="check" id="checkbtn">
			<i class="fa fa-bars"></i>
		</label>
		<label class="logo"><a href="index.php"><img src="images/logo1.png" alt="logo"></a></label>
		<ul>
			<li>
				<label for="check" id="close-menu">
					<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
				</label>
			</li>
			<li>
				<a href="classify.php">Plants Classification</a>
			</li>
			<li class="tutli">
				<a class="tut" href="tutorial.php">Guide</a>
				<ul class="drop">
					<li><a href="tutorial.php">Tutorial</a></li>
					<li><a href="tools.php">Tools</a></li>
					<li><a href="care.php">Care</a></li>
				</ul>
			</li>
			<li>
				<a href="identify.php">Identify</a>
			</li>
			<li>
				<a href="enquiry.php">Enquiry</a>
			</li>
			<li>
				<a href="contribute.php">Contribute</a>
			</li>
			<li>
				<a href="group.php">Group</a>
			</li>
			<li>
				<a href="enhancement1.php">Enhancement</a>
			</li>
			<li class="tutli">
				<a class="tut" href="login.php">User</a>
				<ul class="drop">
					<?php
					if(!isset($_SESSION)){session_start();}
					if(isset($_SESSION['user_id'])){
						echo "<li><a href='logout.php'>Logout</a></li>";
					}else{
						echo "<li><a href='login.php'>Login</a></li>";
					}
					?>
					<li><a href="registration.php">Register</a></li>
					<li><a href="update.php">Update</a></li>
				</ul>
			</li>
		</ul>
	</nav>
</header>
