<div class="row">
	<div class="col-md-8 py-3">

		<div class="bg-white p-3 shadow-effect">
			<form method="post">
				<div class="form-group">
					<label for="email">Email address</label>
					<input type="email" class="form-control" id="email"
					       name="email" placeholder="Enter email">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control"
					       name="password" id="password" placeholder="Password">
				</div>
				<button type="submit" name="login" class="btn btn-primary">
					Login
				</button>
			</form>
		</div>

	</div>

	<div class="col-md-4 py-3 sidebar">
		<?php include 'includes/sidebar.php' ?>
	</div>
</div>

<?php

if (isset($_POST['login']))
{
	extract($_POST);

	$stmt = $con -> prepare("SELECT * FROM users where 
                                      email = :email AND
                                      password = :password");

	$stmt -> bindParam(':email',$email);
    $stmt -> bindParam(':password',$password);

    $stmt->execute();

    $row = $stmt -> fetch();

    $row_count = $stmt -> rowCount();

    if($row_count > 0)
    {
	    $_SESSION['id'] = $row['id'];
	    $_SESSION['firstname'] = $row['firstname'];
	    $_SESSION['lastname'] = $row['lastname'];
	    $_SESSION['gender'] = $row['gender'];
	    $_SESSION['email'] = $row['email'];
	    $_SESSION['password'] = $row['password'];
	    header('Location:index.php?page=articles');

    }else echo '<div class="alert alert-danger">email or password incorrect !!</div>';
}


?>

