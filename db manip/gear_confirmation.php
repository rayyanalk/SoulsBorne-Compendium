<?php

if (
	!isset($_POST['armor']) ||
	empty($_POST['armor'])
) {
	$error = "Please input the desired armor set";
}
if (
	!isset($_POST['weapon']) ||
	empty($_POST['weapon'])
) {
	$error = "Please input the desired Primary weapon";
}
if (
	(!isset($_POST['weapon']) ||
		empty($_POST['weapon'])) && (!isset($_POST['armor']) ||
		empty($_POST['armor']))
) {
	$error = "Gives me conniptions... armor set AND weapon required!";
} else {
	$host = "303.itpwebdev.com";
	$user = "rayyanib_db_soulsborne";
	$pass = "Psxbgamer2.";
	$db = "rayyanib_soulsborne_db";
	$mysqli = new mysqli($host, $user, $pass, $db);
	if ($mysqli->errno) {
		echo $mysqli->error;
		exit();
	}
	$mysqli->set_charset('utf8');
	if (isset($_POST['weapon']) && !empty($_POST['weapon'])) {
		$weapon = $_POST['weapon'];
	} else {

		$weapon = "null";
	}
	if (isset($_POST['armor']) && !empty($_POST['armor'])) {
		$armor = $_POST['armor'];
	} else {

		$armor = "null";
	}
	if (isset($_POST['game_id']) && !empty($_POST['game_id'])) {
		$game = $_POST['game_id'];
	} else {

		$game = "null";
	}

	$sql = "INSERT INTO gear(armor, weapons, origin_idorigin) VALUES ('"
		. $armor
		. "', '"
		. $weapon
		. "', '"
		. $game
		. "');";

	$results = $mysqli->query($sql);
	if (!$results) {
		echo $mysqli->error;
		exit();
	}

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
			</ul>
		</div>
	</nav>
	<div class="row">
		<h1 class="col-12 mt-4" id="titleH">Gear Confirmation</h1>
	</div>
	<div class="container">
		<div class="row mt-4">
			<div class="col-12">
				<div class="text-danger font-italic">
					<?php if (isset($error) && !empty($error)): ?>
						<div class="text" style="color:white;"><span><strong>
									<?php echo $error; ?>
								</strong></span>
						</div>
					<?php else: ?>
					</div>

					<div class="text" style="color:orangered;">
						<?php echo "Victory Achieved. " . $_POST['armor'] . " and " . $_POST['weapon']; ?>
						were successfully added.
					</div>

				<?php endif; ?>
			</div>

		</div>
	</div>
	<div class="row mt-4 mb-4">
		<div class="col-12">
			<a href="add_gear.php" role="button" class="btn" style="background-color:black; color:red;">Add more
				Gear</a>
			<a href="gear_display.php" role="button" class="btn" style="background-color:red; color:black;">View full
				Gear Display</a>
		</div>
	</div>
	</div>
</body>

</html>