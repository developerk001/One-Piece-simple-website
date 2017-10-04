<?php
	$pageTitle = 'Home';
	include 'inc/data.php';
	include 'inc/func.php';
	include 'inc/nav.php';
?>
<section id="intro">
	<div class="jumbotron">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<h1>One <span class="tomato">Piece</span></h1>
					<h2 class="tomato">KaijoKu Ninaro</h2>
					<br /><br /><p>Most Sold Anime entire Japan which deals the Adventure of Pirates to get the Tressure hidden in a Iland.</p>
				</div>
				<div class="col-lg-6 col-md-6">
					<img src="http://www.pngmart.com/files/2/Monkey-D-Luffy-PNG-Free-Download.png" alt="Luffy Image">
				</div>
			</div>
		</div>
		<br /><br /><br />
		<a href="index.php#videos"><center><span class="fa fa-arrow-down fa-3x animated fadeInDown infinite tomato"></span></center></a>
	</div>
</section>
<section id="videos">
	<div class="jumbotron">
		<div class="container-fluid">
			<h2 class="page-header text-center tomato">Video Gallery</h2>
			<div class="row">
				<?php 
					foreach ($videos as $key => $value) {
						echo getVideo( $value ); 
					}
				?>
			</div><br />
			<center><a href="https://ww3.gogoanime.io/category/one-piece" target="_blank"><button class="btn btn-success">See More</button></a></center>
		</div>
	</div>
</section>
<section id="features">
	<div class="jumbotron">
		<div class="container-fluid">
			<div class="row box">
				<div class="col-lg-6 col-md-6 col-sm-6">
					<h2 class="tomato">Our Features</h2>
					<ul>
						<li><span class="tomato fa fa-check"></span> New Episodes Every Week.</li>
						<li><span class="tomato fa fa-check"></span> Trimmed Videos.</li>
						<li><span class="tomato fa fa-check"></span> High Qualitiy Vidoes.</li>
						<li><span class="tomato fa fa-check"></span> Downloadable Videos.</li>
						<li><span class="tomato fa fa-check"></span> Suggession Form.</li>
						<li><span class="tomato fa fa-check"></span> Response to the form within 24 hours.</li>
						<li><span class="tomato fa fa-check"></span> High Quality Audio.</li>
					</ul>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<img src="http://www.pngmart.com/files/3/One-Piece-Luffy-PNG-Image.png" alt="Luffy Image" width="100%">
				</div>
			</div>
		</div>
	</div>
</section>
<?php
	include 'inc/foot.php';
?>
