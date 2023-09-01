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
  <title>Demon of Song</title>
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
    <h1 class="col-12 mt-4 mb-4" id="titleH">The Lyrical: Demon of Song</h1>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6" id="kosbox">
        <p id="kosquote">"There is no path. Beyond the scope of light, beyond the reach of Dark... "</p>
        <p id="kosinfo">When the Demon of Song developed a taste for human flesh, it was contained within the Shrine of
          Amana. A line of priestesses was put in place to look after the Shrine and appease the demon by sacred
          rituals, but they have since died off or gone hollow and over time the tradition was lost and the Demon set
          free. The Demon gained knowledge and learned to lure humans into its lair. It is called the Demon of Song
          because it sings with a sonorous voice to lure people close, so that it may devour them. Its song is that of
          the Milfanito. Within close proximity to its lair we find a Milfanito who appears to be hollow, and cannot
          sing. It may be that the Demon of Song somehow stole the voice of this Milfanito.

          What the sacred rituals were that the priestesses performed is unknown. It may be that they sang to the Demon
          like the line of priestesses in Shulva, the Sunken City. This may be the case because the Archdrake Sect, who
          the now hollow Priestesses of Amana fight with almost certainly originated in Shulva and may have therefore
          passed on the rituals of their priestess line. Also, the Demon appears to have been contained prior to the
          Player entering the Shrine of Amana and not gaining in knowledge. Why would it not learn to sing if it had
          that capacity and if it was conscious of its surroundings? However, it may be that the Demon was simply
          confined and had no need to sing to lure humans in because none would be lured.

          The spotted whip that can be created from the Demon of Song's soul is coated in poison. The Demon of Song
          itself does not deal any poison damage, but it is contained within the body of a frog or toad, which in
          reality, can be known for their poisonous qualities.

          The Demon drops the Key to the Embedded. How it came to possess this key is unknown. However, it is
          interesting to note the similarities between the Demon of Song and The Embedded. </p>

        <a href="bosses_details.php?idbosses=2" role="button" class="btn btn-secondary" id="bossbutton">Boss
          Statstics</a>
      </div>
      <img src="song.png" alt="song" class="rounded mx-auto d-block" style="width:50%;">
    </div>
  </div>
</body>