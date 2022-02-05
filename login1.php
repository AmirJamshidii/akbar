<?php
require('./header.php');

$error1 = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (isset($_post['username']) and $_post['username'] - '') {
		$error1['username'] = "username not found";
	}
	if (isset($_post['password']) and $_post['password'] = '') {
		$error1['password'] = "password not found";
	}
	if (strlen($_post['password'] < 8)) {
		$error1['passwordshort'] = "password is too short";
	}
}
	// -----------------------------------

	if(count($error1) <1){
		$username=$_post['username'];
		$password=$_post['password'];
		require('connection.php');
		// $exists='SELECT COUNT(*) AS X FROM USERS WHERE USERNAME=;
	$exists = $database->dbCon->query('SELECT COUNT(*) as x FROM users where username = "' . $username . '"')->fetch_assoc();
	if(intval($exist['X'] >1)){
		$error1['usernametaken'] = "username has taken";
	} else{
		$insert_query="INSERT INTO users (username, password, admin, status) VALUES ('$username', '$password', 0, 1)";
		if($database->$dbcon->query($inser_query) == true){
			header('Location: ./login.php');
		}
	}




?>

<div id="pageContent">
	<div class="container offset-14">
		<h1 class="block-title large">Login to Account</h1>
		<div class="row">
			<div class="col-sm-8 col-sm-push-2 col-lg-6 col-lg-push-3">
				<div class="login-form-box">
					<div style="color:red;padding-left:5px;">
						<?php
						if($error1['usernametaken']==true){
							echo $$error1['usernametaken'];
						}
						?>


					</div>
					<h2 class="text-uppercase">Personal Information</h2>
					<form action="#" method="POST">
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon">
									<span class="icon icon-person_outline"></span>
								</span>
								<input type="text" name="username" id="LoginFormName1" class="form-control" placeholder="Name" value="amir">
							</div>
							<div style="color:red;padding-left:5px;">
								
<?php
						if ($error1['username'] == true) {
							echo $error1['username'];
						}
						?>

							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon">
									<span class="icon icon-lock_outline"></span>
								</span>
								<input type="password" name="password" id="LoginFormPass1" class="form-control" placeholder="Password" value="12344321">
							</div>
						</div>
						<div style="color:red;padding-left:5px;">
						<?php
								if ($error1['password'] == true) {
									echo $error1['password'];
								}
								?>

						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="button-block">
									<button type="submit" class="btn">Register</button>
								</div>
							</div>
							<div class="col-md-12">
								<span>already a member?</span>
								<div class="additional-links-01"><a href="#">Login</a></div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
require('./footer.php');
?>