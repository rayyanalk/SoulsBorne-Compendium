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
  <title>Father Gascoigne</title>
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
    <h1 class="col-12 mt-4 mb-4" id="titleH">The Beastial: Father Gascoigne</h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6" id="kosbox">
        <p id="kosquote">"Beasts all over the shop...
          You'll be one of them, sooner or later..."</p>
        <p id="kosinfo">Gascoigne was a priest in a foreign land, where he earned the title of "Father". At some point
          in his life, Gascoigne travelled to Yharnam and eventually joined the Healing Church as a hunter. From here,
          Gascoigne was partnered with Henryk, an older hunter. The two made an effective duo, and their partnership led
          to Henryk's 'tragically' long life.
          At some point, Father Gascoigne took a wife by the name of Viola and the pair had children. As Gascoigne
          continued to hunt, he became affected by the bloodlust, forgetting even his family. Viola was known to play a
          Tiny Music Box, a memento of theirs, in order to draw him home when he had been out all night, helping him
          remember her and their children when he began succumbing to the bloodlust. </p>
        <a href="bosses_details.php?idbosses=10" role="button" class="btn btn-secondary" id="bossbutton">Boss
          Statstics</a>
      </div>
      <img src="gascoigne.jpg" alt="gascoigne" class="rounded mx-auto d-block" style="width:50%;">
    </div>
  </div>
</body>