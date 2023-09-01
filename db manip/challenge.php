<?php
$host = "303.itpwebdev.com";
$user = "rayyanib_db_soulsborne";
$password = "Psxbgamer2.";
$db = "rayyanib_soulsborne_db";

$mysqli = new mysqli($host, $user, $password, $db);

if ($mysqli->connect_errno) {
  echo $mysqli->connect_error;
  exit();
}

$sql = "SELECT * FROM gear;";
$results = $mysqli->query($sql);
if (!$results) {
  echo $mysqli->error;
  exit();
}
$sql_locations = "SELECT * FROM locations;";
$locations_ratings = $mysqli->query($sql_locations);
if (!$locations_ratings) {
  echo $mysqli->error;
  exit();
}
$sql_origin = "SELECT * FROM origin;";
$results_origin = $mysqli->query($sql_origin);
if (!$results_origin) {
  echo $mysqli->error;
  exit();
}
$sql_bosses = "SELECT * FROM bosses;";
$results_bosses = $mysqli->query($sql_bosses);
if (!$results_bosses) {
  echo $mysqli->error;
  exit();
}


$mysqli->close();

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

<body id="challenge">
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
    <h1 class="col-12 mt-4 mb-4" id="titleH">Who will you face?</h1>
  </div>
  <div class="container">
    <form action="challenge_results.php" method="GET">
      <h3 class="col-12 mt-4 mb-4" id="query"><strong>Select a Game:</strong></h3>
      <div class="form-group row">
        <div class="col-sm-9">
          <select name="game" id="game-id" class="form-control">
            <option value="" selected>-- All --</option>
            <?php while ($row = $results_origin->fetch_assoc()): ?>
              <option value="<?php echo $row["idorigin"] ?>">
                <?php echo $row["game"]; ?>
              </option>
            <?php endwhile; ?>

          </select>
        </div>
      </div>
      <h3 class="col-12 mt-4 mb-4" id="query"><strong>Select a location:</strong></h3>
      <div class="form-group row">
        <div class="col-sm-9">
          <select name="location" id="location-id" class="form-control">
            <option value="" selected>-- All --</option>
            <?php while ($row = $locations_ratings->fetch_assoc()): ?>
              <option value="<?php echo $row["idlocations"] ?>">
                <?php echo $row["location"]; ?>
              </option>
            <?php endwhile; ?>

          </select>
        </div>
      </div>
      <h3 class="col-12 mt-4 mb-4" id="query"><strong>Enter your character level:</strong></h3>
      <div class="form-group row">
        <div class="col-sm-9">
          <input type="number" class="form-control" id="level-id" name="level">
        </div>
      </div>
      <div class="form-group row">
        <button type="submit" class="btn"
          style="background-color: black; color:orangered; margin-right:10px;">Challenge</button>
        <button type="reset" class="btn" style="background-color:#003CBE; color:white">Rethink</button>
      </div>
  </div>
  </div>

  </div>
</body>