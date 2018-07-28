<div class="row">
	<div class="col-md-8 py-3">

		<section class="bg-white p-3 shadow-effect">
			<form method="post">
				<div class="form-group">
					<label for="fname">first name</label>
					<input type="text" name="firstname" class="form-control"
					       id="fname" placeholder="Enter your firstname">
				</div>
				<div class="form-group">
					<label for="lname">last name</label>
					<input type="text" name="lastname" class="form-control" id="lname"
					       placeholder="Enter your firstname">
				</div>
				<div class="form-group">
					<div class="form-check">
						Gender : &nbsp; &nbsp; <input type="radio" id="male"
						                              checked value="male" name="gender" >
						<label for="male">
							Male
						</label>
						&nbsp; &nbsp; <input type="radio" id="female" value="female"
						                     name="gender" >
						<label for="female">
							Female
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="email">Email address</label>
					<input type="text" class="form-control" id="email"
					       name="email" placeholder="Enter email">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password"
					       class="form-control" id="password" placeholder="Password">
				</div>
				<button type="submit" name="signup" class="btn btn-primary">
					Sign Up
				</button>

				<div class="my-3">
					<?php

					if(isset($_POST['signup']))
					{
						extract($_POST);


						$stmt = $con->prepare("insert into users values 
                          ('' ,:firstname,:lastname,:gender,:email,
                          :password, 'no' ,CURRENT_TIMESTAMP(),CURRENT_TIMESTAMP())");

						$stmt->bindparam(":firstname",$firstname);
						$stmt->bindparam(":lastname",$lastname);
						$stmt->bindparam(":gender",$gender);
						$stmt->bindparam(":email",$email);
						$stmt->bindparam(":password",$password);

						$stmt->execute();



						echo '<div class="alert alert-success">
								your account has been created successfuly
		  					  </div>';

					}

					?>
				</div>
			</form>
		</section>



	</div>

	<div class="col-md-4 py-3 sidebar">
		<?php include 'includes/sidebar.php' ?>
	</div>
</div>


