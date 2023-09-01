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
  <title>Lady Maria of the Astral Clocktower</title>
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
    <h1 class="col-12 mt-4 mb-4" id="titleH">The Regretful: Lady Maria of the Astral Clocktower</h1>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6" id="kosbox">
        <p id="kosquote">"Only an honest death will cure you now."</p>
        <p id="kosinfo">Maria was among the first hunters, all students of Gehrman. She came from Cainhurst and was a
          distant relative to Annalise, the queen of Cainhurst. Maria was a skilled warrior. Wielding her beloved Rakuyo
          ('Lucky' in Japanese) a trick sword forged in her home of Cainhurst, Maria fought with great dexterity,
          relying on skill rather than the blood blades of the Cainhurst nobles. Maria frowned upon blood blades and
          their use, standing in contrast to those around her. Perhaps this was because the blood blades eat away at the
          wielder's very essence, or perhaps for other reasons unknown, Maria honed her skill over the blood arts of the
          Cainhurst nobles. This pursuit of skill may have been what drew her to Gehrman in the first place. Maria had
          great admiration for Gehrman, a man who worked alongside Provost Willem and his associates at Byrgenwerth.
          Gehrman's combat style emphasized speed and must have struck a chord with Maria. Despite her noble heritage,
          Maria became a student of Gehrman, and one of the first hunters. Her gear was crafted in Cainhurst, but her
          battle prowess grew alongside Gehrman's.

          Working under Provost Willem, Gehrman, Maria and the other hunters received an assignment. In a small Fishing
          Hamlet near the coast, it was rumored the body of a Great One the villagers called Kos had washed up on shore.
          The villagers themselves worshiped this Great One calling it "mother" and "dear", and indeed the villagers
          themselves had grown grotesque and powerful in their worship. This was a valuable and unprecedented find for
          the Byrgenwerth scholars, the body of a real life Great One was within their grasp, but not only this - there
          were rumors that the Great One was with child, and a Great One's child means a Great One's Umbilical Cord.
          Provost Willem sought the Cord in order to elevate his being and thoughts to those of a Great One, by lining
          his brain with eyes. He believed this was the only way for man to ever match the greatness of the Great Ones.
          An enfeebled old man, Willem sent his hunters and scholars to the Fishing Hamlet to retrieve the Cord for him.
          The village was raided and ransacked, its occupants murdered and ruthlessly examined, their skulls drilled
          into in search of eyes. </p>


      </div>
      <img src="maria.jpg" alt="maria" class="rounded mx-auto d-block" style="width:50%;">
    </div>
  </div>
</body>