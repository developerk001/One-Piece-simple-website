<?php 
	$pageTitle = 'Contact';
	include 'inc/nav.php';
?>
<section id="contact">
	<div class="jumbotron">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-8">
					<?php
					if (isset($_GET['success']) AND $_GET['success']) {
						echo '<p>Thanks for submitting the form we will reply as soon as possible.</p>';
					} else {
					?>
					<br /><br />
					<h2 class="text-center tomato">Suggession</h2>
					<form class="form-group" accept="contact.php?success=true" method="POST">
						<label for="name">Full Name :</label>
						<input class="form-control" type="text" name="name" required><br>
						<label for="email">Email :</label>
						<input class="form-control" type="email" name="email" required><br>
						<label for="address">Address :</label>
						<input class="form-control" type="text" name="address" required><br>
						<label for="comment">Suggession:</label>
 						<textarea class="form-control" rows="5" id="comment" required></textarea><br />
 						<button type="submit" class="btn btn-success">Submit</button>
					</form>
					<?php 
					}
					?>
				</div>
				<div class="col-lg-4">
					<br /><br /><br /><br /><br />
					<h3>Working days:</h3>
					<h4>Monday to Friday<br>
					10:00 AM to  05:00 PM</h4>
				</div>
			</div>
		</div>
	</div>
</section>
<?php 
	include 'inc/foot.php';
?>