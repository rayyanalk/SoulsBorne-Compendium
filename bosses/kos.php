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
$mysqli->set_charset('utf8');


$sql = "SELECT  bosses.name, bosses.difficulty, bosses.rec_level, bosses.health, locations.location, gear.armor, gear.weapons, origin.game
FROM bosses
LEFT JOIN locations
ON bosses.locations_idlocations = locations.idlocations
LEFT JOIN gear
ON bosses.gear_idgear = gear.idgear
LEFT JOIN origin
ON bosses.origin_idorigin = origin.idorigin
WHERE 1=1
AND bosses.idbosses=15";

if (isset($_GET["level"]) && !empty($_GET["level"])) {
  $sql = $sql . " AND bosses.rec_level <=" . $_GET["level"];
}

if (isset($_GET["location"]) && !empty($_GET["location"])) {
  $sql = $sql . " AND locations.idlocations =" . $_GET["location"];
}

if (isset($_GET["game"]) && !empty($_GET["game"])) {
  $sql = $sql . " AND origin.idorigin =" . $_GET["game"];
}
$sql = $sql . ";";

//send off the query
$results = $mysqli->query($sql);
if (!$results) {
  echo $mysqli->error;
  exit();
}

$mysqli->close();

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
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
  <title>Orphan of Kos</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
  <script src="jquery.js"></script>
  <script>
    $(window).on("load", function () {
      $(".loader-wrapper-bb").fadeOut(2000);
    });
    $(document).ready(function () {
      $("#bossbutton").hover(function () {
        $(this).css("background-color", "#003CBE", "color", "white");
      }, function () {
        $(this).css("color", "white");
      });
    });
  </script>
</head>

<body>
  <nav class="navbar navbar-expand-lg" style="background-color: black">
    <a class="navbar-brand" href="home.php" id="home">
      <i class="fas fa-adjust"></i>
    </a>
    <button class="navbar-toggler custom-togglerH" type="button" data-toggle="collapse" data-target="#navbarToggler"
      aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-iconH">
        <i class="fas fa-bars"></i>
      </span>
    </button>

    <div class="collapse navbar-collapse" id="navbarToggler">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="challenge.php" style="color: white">Challenge</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="soulsboss.php" style="color: orangered">Dark Souls</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="bloodboss.php" style="color: #003CBE">Bloodborne</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="loader-wrapper-bb">
    <span class="loader"><span class="loader-inner"></span></span>
  </div>

  <div class="row">
    <h1 class="col-12 mt-4 mb-4" id="titleH">The Sorrowed: Orphan of Kos</h1>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6" id="kosbox">
        <p id="kosquote">"Ah, sweet Child of Kos, returned to the ocean... A bottomless curse, a bottomless sea.
          Accepting of all that there is, and can be."</p>
        <p id="kosinfo">The orphan appears to be a Human/Great One offspring of the deceased Kos; the Orphan is a tall,
          skeletal humanoid. Its mouth is permanently fixed in a rictus grin and it constantly screams throughout the
          fight. A thin membrane is draped across its back like a cape, this transforms into a pair of wings when the
          Orphan enters its second form. The Orphan wields its placenta in combat akin to a club or flail, and it can
          tear pieces off to use as explosive projectiles. After it transforms, the placenta mutates into a weapon
          resembling a gigantic axe or glaive. Upon encountering the Orphan, it will initially ignore the player and
          stare up at the sky mournfully. However, once the player approaches, it will fly into a fit of rage and begin
          the final battle. </p>
        <p id="kosinfo">Mentioned as the "poor wizened child" of the being Kos, it can be theorized that the desecration
          of Kos by the old hunters lead to the death of this infant Great One, causing it to fade into a plane similar
          to limbo. In retaliation for that saddening fate, the devoted mother Kos laid the curse of blood upon the old
          hunters responsible for their earthly deaths, and upon those who followed in their blood-lusting footsteps.
          Drunk with blood, the later hunters would join the old hunters in the limbo of the Orphan of Kos, referred to
          as the Hunter's Nightmare. Once it has died, the spirit will linger with the corpse of the mother until slain,
          which pleases Kos to the point of her lifting the hunters' blood curse of the Nightmare. Why she does this is
          uncertain, but a voice declares with relief that the child has returned to the ocean, implying either the
          child has returned to life on earth or that killing it within limbo now frees it to traverse the cosmos
          unhindered by the limbo inflicted on it.</p>
        <a href="bosses_details.php?idbosses=19" role="button" class="btn btn-secondary" id="bossbutton">Boss
          Statstics</a>
      </div>
      <img src="kos.png" alt="kos" class="rounded mx-auto d-block" style="width:50%;">
    </div>
  </div>
</body>
