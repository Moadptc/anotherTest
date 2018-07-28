<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0,
           maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="public/css/fontawesome-all.css">
	<link rel="stylesheet" href="public/css/bootstrap.css">
	<link rel="stylesheet" href="public/css/style.css">

	<title>Proj</title>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5 fixed-top">
	<div class="container">
		<a class="navbar-brand" href="#">Proj</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.php?page=home">
                        Home
                    </a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="index.php?page=articles">
                        articles
                    </a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="index.php?page=about">
                        about
                    </a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="index.php?page=contact">
                        contact
                    </a>
				</li>


			</ul>
            <ul class="navbar-nav ml-auto">

                <?php
                    if(isset($_SESSION['id'])) {
                ?>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i>
                        <?= $_SESSION['firstname']; ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="index.php?page=profile">
                            <i class="fas fa-cog"></i> Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php?page=logout">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </div>
                </li>
                <?php } else
                    {
                        echo '<a class="nav-link btn btn-success px-4 text-white mx-3" 
                                href="index.php?page=login">Login</a>';
                        echo '<a class="nav-link btn btn-primary px-4 text-white" 
                                href="index.php?page=sign-up">Sign Up</a>';
                    }
                ?>
            </ul>
		</div>
	</div>

</nav>