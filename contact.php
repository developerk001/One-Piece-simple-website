<?php 
	$pageTitle = 'Contact';
	include 'inc/nav.php';
?>
<section id="contact">
	<div class="jumbotron">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<?php
					if (isset($_GET['success']) AND $_GET['success'] == true) {
						echo '<p class="thanks tomato text-center" style="margin: 6.5em 0em;">Thanks for submitting the form we will reply as soon as possible.</p>';
					} else {
					?>
					<br /><br />
					<h2 class="text-center tomato">Suggession</h2>
					<form class="form-group" action="" method="POST">
						<label for="name">Full Name :</label>
						<input class="form-control" type="text" name="name" required><br>
						<label for="email">Email :</label>
						<input class="form-control" type="email" name="email" required><br>
						<label for="address">Address :</label>
						<input class="form-control" type="text" name="address" required><br>
						<label for="comment">Suggession:</label>
 						<textarea class="form-control" rows="5" id="comment" required></textarea><br />
 						<button type="submit" class="btn btn-success" name="submit">Submit</button>
 						<?php 
 							if (isset($_POST['submit'])) {
 								header ('location:contact.php?success=true');
 							}
 						?>
					</form>
					<?php 
					}
					?>
				</div>
				<div class="col-lg-4" style="margin-top: 5em;">
					<h2>Working Hours</h2>
					<p>
						Monday - Friday<br>
						10:00 AM - 5:00 PM
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<?php 
	include 'inc/foot.php';
?>