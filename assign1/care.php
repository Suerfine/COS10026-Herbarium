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
		<title>Care</title>
	</head>
	<body>
        <?php include('./assign1/header.php'); ?>
		<main class="care-container">
			<h1 class="care-h1">Care</h1>
			<section id="care-intro" class="care-intro">
				<h2 class="care-h2">Caring for your herbarium</h2>
				<!--ASIDE contains warning on potential agents that mat damage your herbarium.-->
				<aside class="care-aside">
					<h2 class="care-h2">Agents of deterioration</h2>
					<p>Over time, herbarium specimens may become damaged due to:</p>
					<ul>
						<li>A major disaster such as fire of flood.</li>
						<li>Insect damage.</li>
						<li>Poor storage environment.</li>
						<li>Careless handling.</li>
						<li>Breakdown of the materials used to prepare them.</li>	
					</ul>
					<div class="care-figure-wrapper">
						<figure class="care-figure">
							<!-- Each figure element is an image of a destroyed herbarium. In each figure theres a hidden checkbox
							and labels to the checkbox of the next figure element. These are used to control which image
							is shown without the use of JavaScript. -->
							<input id="care-figure-1" type="radio" name="care-figure-chk" checked>
							<img src="images/tutorial/care/1bm-bomb-damaged-specimen.webp" alt="Major disaster bombed">
							<figcaption>
								Major disater - bomb damaged
								<label for="care-figure-2" class="care-aside-images-next">&#10095;</label>
							</figcaption>
						</figure>
						<figure class="care-figure">
							<input id="care-figure-2" type="radio" name="care-figure-chk">
							<img src="images/tutorial/care/poorStorage_stacked.webp" alt="Poor Storage stacked specimens">
							<figcaption>
								<label for="care-figure-1" class="care-aside-images-prev">&#10094;</label>
								Poor storage - stacked specimens
								<label for="care-figure-3" class="care-aside-images-next">&#10095;</label>
							</figcaption>
						</figure>
						<figure class="care-figure">
							<input id="care-figure-3" type="radio" name="care-figure-chk">
							<img src="images/tutorial/care/poorStorage_plastic.webp" alt="Poor Storage - plastic plastic packing">
							<figcaption>
								<label for="care-figure-2" class="care-aside-images-prev">&#10094;</label>
								Poor storage - plastic bag
								<label for="care-figure-4" class="care-aside-images-next">&#10095;</label>
							</figcaption>
						</figure>
						<figure class="care-figure">
							<input id="care-figure-4" type="radio" name="care-figure-chk">
							<img src="images/tutorial/care/carelessHandling-tornLabel.webp" alt="Careless Handling - torn label">
							<figcaption>
								<label for="care-figure-3" class="care-aside-images-prev">&#10094;</label>
								Careless Handling - torn label
								<label for="care-figure-5" class="care-aside-images-next">&#10095;</label>
							</figcaption>
						</figure>
						<figure class="care-figure">
							<input id="care-figure-5" type="radio" name="care-figure-chk">
							<img src="images/tutorial/care/carelessHandling_crushedSpecimen.webp" alt="Careless Handling - crushed Specimen">
							<figcaption>
								<label for="care-figure-4" class="care-aside-images-prev">&#10094;</label>
								Careless Handling - crushed specimen
								<label for="care-figure-6" class="care-aside-images-next">&#10095;</label>
							</figcaption>
						</figure>
						<figure class="care-figure">
							<input id="care-figure-6" type="radio" name="care-figure-chk">
							<img src="images/tutorial/care/breakdownOfMounting_detachedTape.webp" alt="Breakdown of mounting material - detached tape">
							<figcaption>
								Breakdown of mounting material - detached tape
								<label for="care-figure-5" class="care-aside-images-prev">&#10094;</label>
							</figcaption>
							
						</figure>
					</div>
				</aside>
				<p>
					A Herbarium specimens will last for hundreds of years if properly cared for. By following our guideline youll protect your 
					herbarium specimens from loss or damage:
				</p>
				<ol class="care-list">
					<li><a href="#care-tip-1">Safe storage environment</a></li>
					<li><a href="#care-tip-2">Specimen handling</a></li>
					<li><a href="#care-tip-3">Mounting materials</a></li>
					<li><a href="#care-tip-4">Repair techniques</a></li>
				</ol>
			</section>
			<section id="care-tip-1" class="care-tip">
				<h2 class="care-h2 care-first-h2"><a href="#care-intro">1. Safe storage environment</a></h2>
				<p>The herbarium must be stored in an environment that has a <strong>stable 20°C temperature</strong> and <strong>50% relative humidity</strong>. 
					The storage container also must have rubber seals to protect the specimens from light, dust and insects.</p>
				<div class="care-tip-figure-wrapper">
					<figure class="care-img-figure">
						<img src="images/tutorial/care/herbarium_cabinet.jpg" alt="Image of herbarium storage cabinet">
						<figcaption><a href="https://eeb.utoronto.ca/research/facilities-centres/green-plant-herbarium/?highlight=green%20herbarium">
							Universiti of Torronto green plant herbarium
						</a></figcaption>
					</figure>
				</div>
			</section>
			<section id="care-tip-2" class="care-tip">
				<h2 class="care-h2"><a href="#care-intro">2. Specimen handling</a></h2>
				<p>Careful handling of specimens will minimize the risk of physical damage to them:</p>
				<ul>
					<li>
						Specimens should always be kept horizontal and flat and must never be bent; hold both sides of the sheet when handling specimens; when 
						carrying specimens, place them on a sheet of cardboard.</li>
					<li>Never shuffle specimens as the edges of sheets may cut underlying specimens.</li>
					<li>Look through specimens by stacking and unstacking each specimen individually with the plant facing up. Do not page through specimens 
						like pages in a book, or stack specimens with the plant facing downwards.</li>
					<li>Never rest  an object on a specimen.</li>
					<li>Specimens can be damaged by sunlight, dust, wind, and moisture, and should always be protected when not in use. If specimensare left out 
						of a cupboard, they must be covered with a cardboard sheet.</li>
					<li>When storing specimens, do not pack them tightly onto one shelf; do not overfill genus and species covers.</li>
					<li>When replcaing specimens in the cupboard, make sure the sheets are all aligned, as protruding edges may be damaged.</li>
				</ul>
			</section>
			<section id="care-tip-3" class="care-tip">
				<h2 class="care-h2"><a href="#care-intro">3. Mounting material</a></h2>
				<p>If the materials use to prepare Herbarium speciemens are not of archival quality they may deteriorate over time. Materials used should be:</p>
				<dl class="care-dl">
					<dt>Acid-free paper</dt>
					<dd>Acid-free paper, marked with the symbol ♾, us paper that is infused in water yielding a neutral or basic pH. The natural deterioration of 
						Lignin causes normal paper to become acidic (which is why paper turns yellow as they age) and breakdown potentially damaging the item 
						stored in it. Acid free archival papers can last nroe than 1000 years suitable to be used in archival situations.
					</dd>
					<dt>Mounting board:</dt>
					<dd>Mounting board should be strong enough to support the weight of the plant specimen. If the boards are to be cut from a larger sheet ensure 
						the grain direction
						is parallel to the long dimension to assure ease in handling after specimens have been mounted.
					</dd>
					<dt>Adhesives:</dt>
					<dd>
						If at all possible, use an archival quality gummed paper tape for `strapping`. Exanples include:
						<ul>
							<li><a href="https://www.preservationequipment.com/Catalogue/Conservation-Materials/Adhesives/Belgian-Rice-Starch#:~:text=Rice%20Starch%20is%20similar%20to,pH%20neutral.">
								Belgian Rice</a>
							</li>
							<li><a href="https://www.preservationequipment.com/Catalogue/Conservation-Materials/Adhesives/Wheat-Starch">Wheat Starch</a></li>
							<li><a href="https://www.lineco.com/framing-products/adhesives">Lineco adhesives</a></li>
							<li><a href="https://www.lineco.com/books-by-hand-ph-neutral-pva-adhesive.php#:~:text=Books%20by%20Hand%20acid%2Dfree,extend%20drying%20time%20if%20desired.">
								Books by Hand adhesives</a>
							</li>
						</ul> 
					</dd>
				</dl>
				<p>Do not use sellotape! If there is no suitable glue and/ or tape, it may be better to stitch specimens.</p>
				<div class="care-tip-figure-wrapper">
					<figure class="care-img-figure">
						<img src="images/tutorial/care/adhesive-riceGlue.jpg" alt="Image of adhesive rice glue">
						<figcaption><a href="https://www.lineco.com/belgian-rice-starch.php">
							Belgian rice starch
						</a></figcaption>
					</figure>
					<figure class="care-img-figure">
						<img src="images/tutorial/care/adhesives_lineco.jpg" alt="Lineco neutral ph adhesive">
						<figcaption><a href="https://www.dickblick.com/products/lineco-neutral-ph-adhesive/">
							Lineco neutrla ph adhesive
						</a></figcaption>
					</figure>
					<figure class="care-img-figure">
						<img src="images/tutorial/care/adhesives-stitch.jpg" alt="Stich mounted specimen">
						<figcaption><a href="https://www.floridamuseum.ufl.edu/herbarium/methods/specimen-preparation-guide/">
							Stitched mounting
						</a></figcaption>
					</figure>
				</div>
			</section>
			<section id="care-tip-4" class="care-tip">
				<h2 class="care-h2"><a href="#care-intro">4. Repair Tecniques</a></h2>
				<p>Repairs to specimens, particularly if they are types or importanthistorical collections, should aim to interfere with the specimen aslittle 
					as possible, and use archival materials and methods which areeasily reversible. </p>
				<p>A simple but effective solution for fragile or damaged specimens is to use a large capsule with a sheet of mounting board inside it to 
					protect and support the fragile plant material. </p>
				<p>If necessary get advice on how to treat damaged specimens from a professional conservator, particularly for type specimens, and thoseof 
					particular historical or cultural significance. <a href="https://www.icon.org.uk/">ICON (Institute ofConservation)</a> provides ethical 
					guidelines and professional standardsfor conservation, and list qualified conservators. Alternatively, youcould approach conservation staff 
					eg at a local museum.</p>
				<table class="table-bordered table-striped">
					<thead>
						<tr>
							<th>Damage/problem</th>
							<th>Conservation Treatment</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><strong>Cellophane</strong> covering part of a specimen or as a bag containing seed will deteriorate rapidly and make it difficult 
								to get a good digital image of the specimen.</td>
							<td>Remove the cellophane and replace with an archival tissue flap or protective white paper four-flap folder or grey archival 
								four-flap box.</td>
						</tr>
						<tr>
							<td><strong>Polythene</strong> covers make it difficult to image the specimen and can contain plasticisers which deteriorate. The bags 
								with rigid plastic closures can damage the specimen when it’s taken out for study</td>
							<td>Remove the polythene and replace with archival tissue flap or protective white paper four-flap folder or grey archival 
								four-flap box.</td>
						</tr>
						<tr>
							<td><strong>Sellotape</strong> either dries out leaving the specimen loose, or leaves a sticky residue which attracts dirt and can 
								damage other specimens.</td>
							<td>Remove sellotape if this is possible without damaging specimen. Crepe rubber can be used to remove sticky tape residue. (Get 
								professional advice before using solvents.) Resecure the specimen with water-activated gummed archival tape.</td>
						</tr>
						<tr>
							<td><strong>Dust or soot</strong> can obscure label information and surface details on a specimen. It is also abrasive and can speed 
								deterioration of the mount.</td>
							<td>Use ‘smoke sponge’ or soft cleaning brushes to remove as much dirt as possible without damaging the specimen. </td>
						</tr>
						<tr>
							<td><strong>Torn herbarium sheets or labels</strong> can result in damage to the specimen or loss of label information.</td>
							<td>Repair with Japanese tissue and suitable adhesive eg methyl cellulose.</td>
						</tr>
						<tr>
							<td><strong>Plant material which is not attached securely to the herbarium sheet</strong> (glue dries out or tapes/stitches come undone) 
								is easily lost. This may seriously
								reduce the taxonomic value of the specimen. Very fragile flowers may be damaged when other herbarium sheets are placed on top.</td>
							<td>Resecure loose pieces with methyl cellulose, or water activated archival gummed tape if it’s clear where the loose piece(s) came
								from. Otherwise put the pieces in the capsule (attach a new one if necessary). Use a four-flap white archival paper folder with
								backing board for eg fragmenting seed heads (Compositae). Cover fragile flowers with an archival tissue flap. </td>
						</tr>
						<tr>
							<td><strong>Signs of insect damage</strong> include grazed flowers, insect droppings or larvae skins. Unchecked, herbarium beetles can 
								destroy plant specimens.</td>
							<td>Freeze all affected specimens at -30°C for 5 days. Record cabinet location for future monitoring. Use a museum vac to remove droppings and damaged plant material. Restitch or tape badly affected specimens as necessary. Protect very fragile specimens with a white archival four-flap folder with backing board.</td>
						</tr>
					</tbody>
				</table>
			</section>
		</main>
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
                        <li><a href="group.php">Group</a></li>
                    </ul>
                </div>
                <div class="footercol">
					<h4>Sources</h4>
					<ul class="enquiry-footerlink">
						<li><a href="https://youtu.be/EgqwdlY9iaQ?si=o7AitaXCotQ07HXe">Navbar</a></li>
						<li><a href="https://cdnjs.com/libraries/font-awesome">Nav Icon</a></li>
						<li><a href="https://www.rbge.org.uk/science-and-conservation/herbarium/specimen-preparation-care/care-and-conservation-of-herbarium-specimens/">
							Care and conservation of specimens & deterioration images
						</a></li>
						<li><a href="https://eeb.utoronto.ca/research/facilities-centres/green-plant-herbarium/?highlight=green%20herbarium">
							Image of herbarium storage at universiti of Torronto
                        </a></li>
						<li><a href="https://www.lineco.com/belgian-rice-starch.php">
							Belgian Rice starch image
                        </a></li>
						<li><a href="https://www.dickblick.com/products/lineco-neutral-ph-adhesive/">
							Lineco neutral pH adhesive image
                        </a></li>
						<li><a href="https://www.rbge.org.uk/media/9027/preparation-care-and-art-of-herbarium-specimens-revised-25-oct-2023-ke.pdf">
							RBGE Collections Care:preparation and care of herbarium specimens
						</a></li>
						<li><a href="https://www.icon.org.uk/">
							The institute of Conservation, ICON
						</a></li>
						<li><a href="https://www.floridamuseum.ufl.edu/herbarium/methods/specimen-preparation-guide/">
							Example of stitching to mount specimen
                        </a></li>
					</ul>
				</div>
			</div>
		</footer>
	</body>
</html>