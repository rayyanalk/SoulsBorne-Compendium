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
  <title>Bloodborne Bosses</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
  <script src="jquery.js"></script>
</head>

<body id="moon">
  <nav class="navbar navbar-expand-lg" style="background-color: black">
    <a class="navbar-brand" href="home.php" id="blood">
      <i class="fas fa-adjust"></i>
    </a>
    <button class="navbar-toggler custom-togglerB" type="button" data-toggle="collapse" data-target="#navbarToggler"
      aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-iconB">
        <i class="fas fa-bars" style="color:#; font-size:28px;"></i>
      </span>
    </button>

    <div class="collapse navbar-collapse" id="navbarToggler">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="challenge.php" id="blood">Challenge</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="soulsboss.php" style="color: orangered">Dark Souls</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gear_display.php" id="blood">Gear List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="add_gear.php" id="blood">Add Gear</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="row">
    <h1 class="col-12 mt-4 mb-4" id="titleH">Bloodborne Bosses</h1>
    <div class="col-4" id="bosslist">
      <div class="list-group" id="list-tab" role="tablist">
        <a class="btn" style="background-color:#003CBE; color:white" href="gascoigne.php">Father Gascoigne</a>
        <br>
        <a class="btn" style="background-color:#003CBE; color:white" href="amelia.php">Vicar Amelia</a>
        <br>
        <a class="btn" style="background-color:#003CBE; color:white" href="reborn.php">One Reborn</a>
        <br>
        <a class="btn" style="background-color:#003CBE; color:white" href="logarius.php">Martyr Logarius</a>
        <br>
        <a class="btn" style="background-color:#003CBE; color:white" href="rom.php">Rom, the Vaccuous Spider</a>
        <br>
        <a class="btn" style="background-color:#003CBE; color:white" href="ebrietas.php">Ebrietas, Daughter of the
          Cosmos</a>
        <br>
        <a class="btn" style="background-color:#003CBE; color:white" href="maria.php">Lady Maria of the Astral
          Clocktower</a>
        <br>
        <a class="btn" style="background-color:#003CBE; color:white" href="ludwig.php">Ludiwg, the Holy Blade</a>
        <br>
        <a class="btn" style="background-color:#003CBE; color:white" href="kos.php">Orphan of Kos</a>
        <br>
        <a class="btn" style="background-color:#003CBE; color:white" href="presence.php">Moon Presence</a>
      </div>
    </div>
  </div>
</body>

</html>