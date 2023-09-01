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
  <title>Artorias the Abysswalker</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
  <script src="jquery.js"></script>
  <script>
    $(window).on("load", function () {
      $(".loader-wrapper").fadeOut(2000);
    });
    $(document).ready(function () {
      $("#bossbutton").hover(function () {
        $(this).css("background-color", "black", "color", "orangered");
      }, function () {
        $(this).css("color", "orangered");
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
  <div class="loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
  </div>

  <div class="row">
    <h1 class="col-12 mt-4 mb-4" id="titleH">The Lost Hero: Artorias, the Abysswalker</h1>
  </div>

  <div class="container" id="content">
    <div class="row">
      <div class="col-12 col-md-6" id="kosbox">
        <p id="kosquote">"Soon... I will be consumed... by them, by the Dark"</p>
        <p id="kosinfo">Knight Artorias was one of the four Knights of Gwyn, the commanding knights of Lord Gwyn's army.
          Artorias had an unbendable will of steel, which both helped and fed his hatred for servants of the Dark,
          particularly the Darkwraiths of Kaathe. Lord Gwyn bequeathed him with a custom-made ring, the Wolf Ring, to
          assist in his already unmatched ability to wield a greatsword. When in New Londo Artorias discovered the
          ability of abysswalking; earning him his title: Artorias the Abysswalker. This allowed him to enter The Abyss,
          the home of the Darkwraiths and the Four Kings themselves. At some unspecified time in the past, when Oolacile
          was attacked by the Abyss, Artorias traveled to Oolacile to rescue Princess Dusk of Oolacile. Defeated by
          Manus and the Abyss, Artorias sacrificed his great shield to protect his loyal companion, a young Sif, from
          the myriad Humanity Sprites that littered the deepest reaches of Oolacile. With his left arm shattered
          following his confrontation with Manus, he had no use for the shield and chose to wield his greatsword in his
          one good hand. With time, Artorias became fully-corrupted by the Abyss (though, in hunting the corrupted
          denizens of Oolacile, it is clear he didn't wholly forget his mission). </p>

        <a href="bosses_details.php?idbosses=5" role="button" class="btn btn-secondary" id="bossbutton">Boss
          Statstics</a>
      </div>
      <img src="artorias.jpg" alt="artorias" class="rounded mx-auto d-block" style="width:50%;">
    </div>
  </div>
</body>