<?php
$page_title = 'COMP1006 Web Application | User Registeration';
require_once('header_main.php');
?>
		<!-- Registeration Form Starts -->
		<div class="row">
			<div class="col-lg-12">					
				<form method="post" action="save-registration.php" class="form-horizontal">
				<h1>User Registration</h1>
					<div class="form-group">
						<label for="inputEmail" class="control-label col-xs-2">Email</label>
						<div class="col-sm-4">
							<input type="email" class="form-control" id="inputEmail" name="user_email" placeholder="Email">
						</div>
					</div>

					<div class="form-group">
						<label for="inputPassword" class="control-label col-xs-2">Password</label>
						<div class="col-sm-4">
							<input type="password" class="form-control" id="inputPassword" name="user_password" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword" class="control-label col-xs-2">Confirm Password</label>
						<div class="col-sm-4">
							<input type="password" class="form-control" id="inputPassword" name="confirm_user_password" placeholder="Password">
						</div>
					</div>

					<div class="form-group">
						<div class="col-xs-offset-2 col-sm-4">
							<button type="submit" class="btn btn-primary">Register</button>
						</div>
					</div>
				</form>
			</div>               
		</div> 
		<!-- Registeration Form Ends -->
<?php
require_once('footer.php');
?>
