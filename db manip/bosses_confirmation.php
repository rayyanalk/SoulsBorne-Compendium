<?php
$isInserted = false;
if (!isset($_POST['name']) || empty($_POST['name'])) {
	$error = "You've been found unworthy, for you lack the title of the boss you seek...";

} else {

	$host = "303.itpwebdev.com";
	$user = "rayyanib_db_soulsborne";
	$pass = "Psxbgamer2.";
	$db = "rayyanib_soulsborne_db";

	$mysqli = new mysqli($host, $user, $pass, $db);
	if ($mysqli->connect_errno) {
		echo $mysqli->connect_error;
		exit();
	}

	$mysqli->set_charset('utf8');
	if (isset($_POST['difficulty']) && !empty($_POST['difficulty'])) {
		$difficulty = $_POST['difficulty'];


	} else {

		$difficulty = null;
	}

	if (isset($_POST['health']) && !empty($_POST['health'])) {
		$health = $_POST['health'];

	} else {

		$health = null;
	}

	if (isset($_POST['rec_level']) && !empty($_POST['rec_level'])) {
		$rec_level = $_POST['rec_level'];


	} else {
		$rec_level = null;
	}

	$statement = $mysqli->prepare("UPDATE bosses SET bosses.name = ?, difficulty = ?, health = ?, rec_level = ? WHERE idbosses = ?");

	$statement->bind_param("ssiii", $_POST["name"], $_POST['difficulty'], $_POST['health'], $_POST['rec_level'], $_POST["idbosses"]);

	$executed = $statement->execute();
	if (!$executed) {
		echo $mysqli->error;
		exit();
	}
	if ($statement->affected_rows == 1) {
		$isInserted = true;
	}

	$statement->close();
	$mysqli->close();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/6af72dc784.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@500&family=MonteCarlo&family=WindSong:wght@500&display=swap"
		rel="stylesheet">
	<title>Boss Confirmation Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles.css">
	<script src="jquery.js"></script>
</head>

<body>
	<nav class="navbar navbar-expand-lg" style="background-color: black">
		<a class="navbar-brand" href="home.php" id="home">
			<i class="fas fa-adjust"></i>
		</a>
		<button class="navbar-toggler custom-togglerH" type="button" data-toggle="collapse" data-target="#navbarToggler"
			aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-iconH">
				<i class="fas fa-bars" style="color:#;"></i>
			</span>
		</button>

		<div class="collapse navbar-collapse" id="navbarToggler">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item">
					<a class="nav-link" href="challenge.php" id="home">Challenge</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="bloodboss.php" style="color: #003CBE">Bloodborne</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="soulsboss.php" style="color: orangered">Dark Souls</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="gear_display.php" id="home">Gear List</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="add_gear.php" id="home">Add Gear</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="row">
		<h1 class="col-12 mt-4" id="titleH">Edit Boss Stats</h1>
	</div>
	<div class="container">
		<div class="row mt-4">
			<div class="col-12">

				<?php if (isset($error) && !empty($error)): ?>
					<div class="text" style="color:white;"><span><strong>
								<?php echo $error; ?>
							</strong></span>
					</div>
				<?php endif; ?>

				<?php if ($isInserted): ?>
					<div class="text" style="color:orangered;">
						<?php echo $_POST['name']; ?> was successfully edited. May you find your worth within the guiding
						flames...
					</div>
				<?php endif; ?>
			</div>
		</div>
		<div class="row mt-4 mb-4">
			<div class="col-12">
				<a href="bosses_details.php?idbosses=<?php echo $_POST['idbosses'] ?>" role="button" class="btn"
					style="background-color:black; color:red;">Return to Boss Info</a>
				<a href="bosses_edit.php?idbosses=<?php echo $_POST['idbosses'] ?>" role="button" class="btn"
					style="background-color:red; color:black;">Return to Boss Edit Form</a>
			</div>
		</div>
	</div>
</body>

</html>