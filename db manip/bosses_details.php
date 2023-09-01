<?php
if (!isset($_GET["idbosses"]) || empty($_GET["idbosses"])) {

	$error = "Invalid Boss ID";
} else {
	$host = "303.itpwebdev.com";
	$user = "rayyanib_db_soulsborne";
	$password = "Psxbgamer2.";
	$db = "rayyanib_soulsborne_db";

	$mysqli = new mysqli($host, $user, $password, $db);

	if ($mysqli->connect_errno) {
		echo $mysqli->connect_error;
		exit();
	}
	$mysqli->set_charset('utf8');


	$sql = "SELECT  bosses.name, bosses.difficulty, bosses.rec_level, bosses.health, locations.location, gear.armor, gear.weapons, origin.game, locations.origin_idorigin as location_origin,  bosses.origin_idorigin  as bosses_origin
FROM bosses
LEFT JOIN locations
ON bosses.locations_idlocations = locations.idlocations
LEFT JOIN gear
ON bosses.gear_idgear = gear.idgear
LEFT JOIN origin
ON bosses.origin_idorigin = origin.idorigin
WHERE idbosses =" . $_GET["idbosses"] . ";";
	$results = $mysqli->query($sql);
	if (!$results) {
		echo $mysqli->error;
		exit();
	}
	$row = $results->fetch_assoc();


	$mysqli->close();
}
?>

<!DOCTYPE html>
<html>

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
	<title>Challenger Approaches</title>
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
				<i class="fas fa-bars" style="color:#; font-size:28px;"></i>
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
			</ul>
		</div>
	</nav>

	<body>
		<div class="row" id="titleH">
			<h1 class="col-12 mt-4">
				<?php echo $row["name"] . " Details"; ?>
			</h1>
		</div>


		<div class="container">

			<div class="row mt-4">
				<div class="col-12">

					<?php if (isset($error) && !empty($error)): ?>

						<div class="text-danger">
							<?php echo $error; ?>
						</div>

					<?php else: ?>

						<table class="table table-dark">

							<tr>
								<th class="text-right">Boss Name:</th>
								<td>
									<?php echo $row["name"]; ?>
								</td>
							</tr>

							<tr>
								<th class="text-right">Relative Difficulty:</th>
								<td>
									<?php echo $row["difficulty"]; ?>
								</td>
							</tr>

							<tr>
								<th class="text-right">Health Pool:</th>
								<td>
									<?php echo $row["health"]; ?>
								</td>
							</tr>

							<tr>
								<th class="text-right">Location:</th>
								<td>
									<?php echo $row["location"]; ?>
								</td>
							</tr>

							<tr>
								<th class="text-right">Recommended Armor Set:</th>
								<td>
									<?php echo $row["armor"]; ?>
								</td>
							</tr>

							<tr>
								<th class="text-right">Recommended Level:</th>
								<td>
									<?php echo $row["rec_level"]; ?>
								</td>
							</tr>

							<tr>
								<th class="text-right">Recommended Primary Weapon:</th>
								<td>
									<?php echo $row["weapons"]; ?>
								</td>
							</tr>

						</table>

					<?php endif; ?>

				</div>
			</div>
			<div class="row mt-4 mb-4">
				<div class="col-12">
					<a href="challenge_results.php" role="button" class="btn"
						style="background-color:orangered; color:black;">To Challenge Results</a>
					<a href="bosses_edit.php?idbosses=<?php echo $_GET['idbosses'] ?>" class="btn"
						style="background-color:black; color:orangered;">Edit Boss Info</a>
				</div>

			</div>

		</div>
	</body>

</html>