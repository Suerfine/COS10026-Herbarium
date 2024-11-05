<footer>
	<div class="footerrow">
		<div class="footercol">
			<h4>Herbarium</h4>
			<ul class="footerlinks">
				<li><a href="classify.php">Plants Classification</a></li>
				<li><a href="identify.php">Identify</a></li>
				<li><a href="tutorial.php">Tutorial</a></li>
				<li><a href="tools.php">Tools</a></li>
				<li><a href="care.php">Care</a></li>
			</ul>
		</div>
		<div class="footercol">
			<h4>Other</h4>
			<ul class="footerhelp">
				<li><a href="contribute.php">Contribution</a></li>
				<li><a href="tutorial.php">Enquiry</a></li>
			</ul>
		</div>
		<div class="footercol">
			<h4>Sources</h4>
			<ul class="enquiry-footerlink">
				<?php 
					foreach ($sources as $source) {
						echo "<li><a href=\"{$source['url']}\">{$source['label']}</a></li>";
					}
				?>
			</ul>
		</div>
	</div>
</footer>