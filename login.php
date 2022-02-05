<?php
require('./header.php');
?>


<?php
$error = [];
if ($_SERVER['REQUEST_METHOD'] == "POST") {

	// ======================================= Validation =======================================
	if (isset($_POST['username']) && $_POST['username'] == '') {
		$error['username'] = 'username is required';
	}

	if (isset($_POST['password'])) {
		if ($_POST['password'] == "") {
			$error['password']['empty'] = "password is empty";
		}
		if (strlen($_POST['password']) < 6) {
			$error['password']['length'] = "password is too short";
		}
	} else {
		$error['password']['required'] = "password is required";
	}

	// ======================================= Register Logic =======================================
	if (!count($error)) {
		require('./connection.php');
		$username = $_POST['username'];
		$password = $_POST['password'];
		// echo 'SELECT COUNT(*) FROM users where username = "'.$username.'"';
		$exists = $database->dbCon->query('SELECT COUNT(*) as x FROM users where username = "' . $username . '"')->fetch_assoc();
		if (intval($exists['x'])) {
			$error["exist"] = "username is taken";
		} else {
			$insert_query = "INSERT INTO users (username, password,admin, status ) VALUES ('$username', '$password', 0 , 1)";
			if ($database->dbCon->query($insert_query) === TRUE) {
				header('Location: ./login.php');
			}
		}
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
						if (count($error) > 0) {
							if (isset($error['exist'])) {
								echo $error['exist'];
							}
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
								if (count($error) > 0) {
									if (isset($error['username'])) {
										echo $error['username'];
									}
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
							if (count($error) > 0) {
								if (isset($error['password']))
									// $arr1 = ["1",2,3,"v"];
									// $arr2 = [
									// 	"name"=>"shayan",
									// 	"age"=>26,
									// 	3 => "xxx"
									// ];

									// print_r($arr1);
									// echo "<br>";
									// print_r($arr2);
									// for($i=0; $i<count($error['password']); $i++){
									// 	echo $error['password'][$i];
									// }
									foreach ($error['password'] as $error) {
										echo $error . "<br>";
									}
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