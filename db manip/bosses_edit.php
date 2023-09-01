<?php
if (!isset($_GET["idbosses"]) || empty($_GET["idbosses"])) {
	echo "Invalid Track ID";
	exit();
} else {

}
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

$sql_bosses = "SELECT * FROM bosses
	WHERE idbosses = " . $_GET["idbosses"] . ";";
$results_bosses = $mysqli->query($sql_bosses);
if (!$results_bosses) {
	echo $mysqli->error;
	exit();
}
$row_bosses = $results_bosses->fetch_assoc();


$sql_origin = "SELECT * FROM origin;";
$results_origin = $mysqli->query($sql_origin);
if (!$results_origin) {
	echo $mysqli->error;
	exit();
}

$sql_location = "SELECT * FROM locations;";
$results_location = $mysqli->query($sql_location);
if (!$results_location) {
	echo $mysqli->error;
	exit();
}

$sql_gear = "SELECT * FROM gear;";
$results_gear = $mysqli->query($sql_gear);
if (!$results_gear) {
	echo $mysqli->error;
	exit();
}


$sql_id = "SELECT idbosses FROM bosses;";
$results_id = $mysqli->query($sql_id);
if (!$results_id) {
	echo $mysqli->error;
	exit();
}

$mysqli->close();
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
	<title>Soulsborne Compendium</title>
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
					<a class="nav-link" href="gear_display.php" id="home">Gear Stats</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="row" id="titleH">
		<h1 class="col-12 mt-4">
			Edit Boss Statistics</h1>
	</div>
	<div class="container">

		<div class="col-12 text-danger">
			<?php if (isset($error) && !empty($error)): ?>
				<div class="text-danger">
					<?php echo $error; ?>
				</div>
			<?php endif; ?>
		</div>

		<form action="bosses_confirmation.php" method="POST">

			<div class="form-group row">
				<label for="name-id" class="col-sm-3 col-form-label text-sm-right" style="color:white;">Boss Name: <span
						class="text-danger">*</span></label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="name-id" name="name"
						value="<?php echo $row_bosses['name'] ?>">
				</div>
			</div>

			<div class="form-group row">
				<label for="difficulty-id" class="col-sm-3 col-form-label text-sm-right" style="color:white;">Relative
					Difficulty:</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="difficulty-id" name="difficulty"
						value="<?php echo $row_bosses['difficulty'] ?>">
				</div>
			</div>
			<div class="form-group row">
				<label for="health-id" class="col-sm-3 col-form-label text-sm-right" style="color:white;">Health
					Pool:</label>
				<div class="col-sm-9">
					<input type="number" class="form-control" id="health-id" name="health"
						value="<?php echo $row_bosses['health'] ?>">
				</div>
			</div>
			<div class="form-group row">
				<label for="rec_level-id" class="col-sm-3 col-form-label text-sm-right" style="color:white;">Recommended
					Level:</label>
				<div class="col-sm-9">
					<input type="number" class="form-control" id="level-id" name="rec_level"
						value="<?php echo $row_bosses['rec_level'] ?>">
				</div>
			</div>


			<input type="hidden" id="idbosses" name="idbosses" value="<?php echo $_GET['idbosses'] ?>" />

			<div class="form-group row">
				<div class="col-sm-3"></div>
				<div class="col-sm-9 mt-2">
					<button type="submit" class="btn" style="background-color:#003CBE;">Transform</button>
					<button type="reset" class="btn" style="background-color:black; color:#003CBE;">Rethink</button>
				</div>
			</div>
		</form>

	</div>
	<img src="images/edit.jpg" alt="edit" class="rounded mx-auto d-block" style="width:65%;">
</body>

</html>