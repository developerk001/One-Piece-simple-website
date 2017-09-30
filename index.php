<?php
	$pageTitle = 'Home';
	include 'inc/nav.php';
?>
<section id="intro">
	<div class="jumbotron">
		<div class="row">
			<div class="col-lg-6">
				<h1>One <span class="tomato">Piece</span></h1>
				<h2 class="tomato">KaijoKu Ninaro</h2>
				<br /><br /><p>Most Sold Anime entire Japan which deals the Adventure of Pirates to get the Tressure hidden in a Iland.</p>
			</div>
			<div class="col-lg-6">
				<img src="http://www.pngmart.com/files/2/Monkey-D-Luffy-PNG-Free-Download.png" alt="Luffy Image">
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
				<div class="col-lg-3">
					<img class="img-thumbnail" src="http://ll-c.ooyala.com/e1/dpOGNxYjE6HYtCaIOzY7F-CNW_4ieZna/promo322861364" alt="Episode" data-toggle="modal" data-target="#myModal">
					<div id="myModal" class="modal fade" role="dialog">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					        <h2 class="modal-title text-center">Modal Header</h2>
					      </div>
					      <div class="modal-body">
					        <iframe width="560" height="315" src="https://www.youtube.com/embed/NAWsHFcWkF0?rel=0" frameborder="0" allowfullscreen></iframe>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
	include 'inc/foot.php';
?>
