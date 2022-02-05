<?php
require('./header.php');
?>
<!-- ---------------- Validation --------------- -->
<?php
$error=[];
if($_server['server_methode']== "POST"){
    if(isset($_post['username']) && $_post['username']== ''){
        $error['usename'] = "username is empty";
    }
    if(isset($_post['password']) && $_post['password']== ''){
         $error['password']['empty']= "password is empty";
     }
     if(count($_post['password']) <8 ){
        $error['password']['short']= "password is too short";
     }
}

?>
<!-- ---------------- Login Logic -------------------- -->
<?php
if(!count($error)){
    require('./connection.php');
    $username=$_post['username'];
    $password=$_post['password'];
    $exist=$database->dbcon->query('SELECT COUNT(*) AS X FROM users WHERE username="'. $username . '"');
    if(intval($exist['X'])){
        $exist=$database->$dbcon->query('SELECT password AS Y FROM users WHERE username="' . $username . '"');
            if($password === $exist['Y']){
                echo "welcome back";
                header('location: ./index');
            } else{
                $error['server']['password']= "password is wrong";
            }
    } else{
        $error['server']['username']= "username not found";
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
                                if(count($error) >0){
                                    if(isset($error['server'])){
                                        foreach ($error['server'] as $error){
                                            echo $error ."<br>";
                                        }
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
                                if (count($error) > 0) {
									if (isset($error['username'])) {
										echo $error['username'];
									}
								}
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