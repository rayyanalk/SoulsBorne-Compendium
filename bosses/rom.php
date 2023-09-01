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
  <title>Rom the Vaccuous Spider</title>
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
    <h1 class="col-12 mt-4 mb-4" id="titleH">The Failure: Rom, the Vaccuous Spider</h1>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6" id="kosbox">
        <p id="kosquote">"The Byrgenwerth spider hides all manner of rituals, and keeps our lost master from us."</p>
        <p id="kosinfo">Despite her title, Rom resembles a gigantic pillbug rather than an arachnid. She has a
          silverfish-like tail and a bulbous body from which plant-like appendages appear to be growing, resembling
          Coldblood Flowers. Her face resembles a chunk of pumice and is covered in eyes, suggesting its connection to
          the Great Ones. Rom is initially non-hostile until provoked, at which point she will use powerful Arcane
          attacks to defend herself.

          Rom is accompanied by creatures known as the Children of Rom. They resemble actual spiders, but with the same
          shaped head and appear to have bladed legs. These spiders are possibly either the literal spawn of Rom or were
          created in order to defend the creature. The One Third of Umbilical Cord, or Cord of the Eye, is a relic that
          comes from an infant Great One. In Bloodborne, the Cord of the Eye is used to make contact with Great Ones.

          What about the Cord that Imposter Iosefka possessed? The Cord that we retrieve from her says that "Provost
          Willem sought the Cord in order to elevate his being and thoughts…". If the Cord was used by Willem, and the
          Cords grant audience with the infant Great One to whom it belongs, then this Cord very likely belongs to Rom.
          Rom was possibly one of the "special children" that Miyazaki talks about in the Future Press game guide, who
          was chosen by a Great One to ascend and become their child. Whether this occurred with the help of Willem, or
          occurred in Ancient Pthumeru, there is evidence to suggest that Rom is the child of Ebrietas. </p>

        <a href="bosses_details.php?idbosses=15" role="button" class="btn btn-secondary" id="bossbutton">Boss
          Statstics</a>
      </div>
      <img src="rom.jpg" alt="rom" class="rounded mx-auto d-block" style="width:50%;">
    </div>
  </div>
</body>