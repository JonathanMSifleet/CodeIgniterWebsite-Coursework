<html>
<head>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- Material Design Bootstrap -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/css/mdb.min.css">

	<!-- CSS -->
	<link id="pagestyle" rel="stylesheet" href="<?php echo base_url() . 'application/css/DarkStyle.css'; ?>">

	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>

	<!-- change theme script -->
	<script type="text/javascript" src="<?php echo base_url() . 'application/scripts/ChangeTheme.js'; ?>"></script>


	<title><?php echo $title ?></title>
</head>

<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark rounded" id="navbar">
	<span class="navbar-brand">1CKW50</span>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
	        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link rounded" href='<?php echo base_url(); ?>'>Home <span class="sr-only">(current)</span></a>
			</li>
		</ul>
	</div>

	<div class="my-2 my-lg-0">
		<button class="btn btn-outline-success my-2 my-sm-0" type="button" name="theme" id="changeStyleButton">
			Change theme
		</button>
	</div>

</nav>

<body>

<?php

if (isset($loginSuccessful)) {
	if ($loginSuccessful) {
		echo "Sign in successful";
	}
} else {
	echo <<<_END
<form method="post" action="AttemptSignIn">
	<div class="form-group">
		<label for="inputUsername">Username</label>
		<input type="text" name="usernameInput" class="form-control" id="inputUsername" placeholder="Enter username">
	</div>
	<div class="form-group">
		<label for="inputPassword">Password</label>
		<input type="password" name="passwordInput" class="form-control" id="inputPassword" placeholder="Password">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
_END;

}

?>


<footer class="footerContainer rounded">
	<div class="footerContent rounded">
		<div class="footerImageContainer">
			<img id="mmuLogo" src="<?php echo base_url() . 'application/images/mmuDark.jpg'; ?>" alt="MMU Logo">
		</div>
		<div class="gitHubContainer rounded">
			<a id="gitHubLink" href="https://github.com/JonathanMSifleet">© Jonathan Sifleet (18014017)</a>
		</div>
	</div>
</footer>

</body>

</html>