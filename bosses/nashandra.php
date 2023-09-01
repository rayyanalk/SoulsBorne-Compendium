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
  <title>Nashandra</title>
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
    <h1 class="col-12 mt-4 mb-4" id="titleH">The Queen: Nashandra</h1>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6" id="kosbox">
        <p id="kosquote">"Brave Undead, you have proven yourself to me. Now, be one, with the Dark..."</p>
        <p id="kosinfo">Nashandra began her life as a small fragment of Manus, Father of the Abyss. When Manus was
          defeated, he was reborn as many fragments varying in sizes. Nashandra was the smallest fragment, and because
          of this, it was the first to become conscious and started to want what it did not have: power.

          Nashandra traveled to the land of Drangleic, and set her sights on it’s powerful ruler, King Vendrick.
          Deciding to seduce Vendrick, Nashandra assumed a human form of unparalleled beauty and warned him of a
          supposed looming threat beyond the sea: the Giants. She convinced him to invade the land of the giants to
          claim their power, which Vendrick did successfully. Vendrick then made Nashandra his queen, and under their
          leadership, Drangleic went into a Dark-like peace. The rulership of Drangleic however, was not enough to quell
          Nashandra’s want, and she desired an even greater power: the First Flame, which she intended to claim for
          herself by using Vendrick and the Throne of Want.

          When Drangleig was ravaged by the second war with the giants and the spread of the Undead Curse, Vendrick came
          to realize the true nature and identity of Nashandra, and what she coveted all along. Knowing that his time
          was short and that his queen had to be stopped, Vendrick created several impasses that would prevent Nashandra
          from seizing the throne, and sealed himself away in the Undead Crypt. This left Nashandra the sole ruler of
          Drangleic, albeit without much left to rule at all.

          Left without a king and with no means to claim the Throne of Want, Nashandra’s plans go back into fruition by
          the arrival of the Bearer of the Curse, whom she manipulates into opening the way to the Throne of Want by
          pretending to help them link the First Flame. She directs the Bearer of the Curse toward the Undead Crypt,
          suggesting that they put an end to the now-hollowed King Vendrick and claim his ring. She then directs the
          Bearer of the Curse to journey to Aldia's Keep to acquire the Ashen Mist Heart, and warns them that the
          Ancient Dragon there is no more than a prop and a false deity. At last, she directs the Bearer of the Curse
          toward the Forest of Fallen Giants to visit the memories of the Giants and obtain the last key to the Throne:
          the Giant's Kinship.</p>

        <a href="bosses_details.php?idbosses=8" role="button" class="btn btn-secondary" id="bossbutton">Boss
          Statstics</a>
      </div>
      <img src="nashandra.jpg" alt="nashandra" class="rounded mx-auto d-block" style="width:50%;">
    </div>
  </div>
</body>