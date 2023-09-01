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
  <title>One Reborn</title>
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
    <h1 class="col-12 mt-4 mb-4" id="titleH">The Abomination: One Reborn </h1>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6" id="kosbox">
        <p id="kosquote">"Behold! A Paleblood sky!"</p>
        <p id="kosinfo">Born from an unholy Pthumerian ritual which used the bodies of Yharnam's populace, The One
          Reborn is an amalgamate of grotesque misshapen and decayed body parts assembled to form one massive unliving
          creature.
          It has a singular giant humanoid torso attached to the entire mass which controls its entire being, though
          other parts of its body seem just as independently alive as the humanoid on top of the horrific creature. As
          told through the descriptions of the Bell items, we know that the bells originated in the underground
          Pthumerian Labyrinth and were capable of reaching into other worlds and summoning beings from them. Although
          humans require insight to use these bells, it's likely that the bell maidens that summon the One Reborn are
          Pthumerians allied with the church, like the Church Servants and Church Giants. (Even if they aren't, it's
          likely any humans in the service of the School of Mensis and in Yahar'gul during the blood moon have insight
          to spare.)

          It is the point of this theory that the bells used to summon the One Reborn are no different, and that the
          bell maidens in the One Reborn's arena ring their bells repeatedly and simultaneously en masse to bring a mass
          of (presumably human) beings from other worlds simultaneously, coalescing all of them into one horrible
          amalgamation in the process of their summoning. The purpose of this would be to prevent hunters such as the
          player from interfering with Micolash and Mensis' plots involving the Mensis Ritual and the Nightmare of
          Mensis. After all, they are likely unaware that the scholars have undergone the stillbirth of their brains
          and, to the best of their knowledge, are still plumbing the Nightmare for answers from a higher plane. </p>

        <a href="bosses_details.php?idbosses=13" role="button" class="btn btn-secondary" id="bossbutton">Boss
          Statstics</a>
      </div>
      <img src="reborn.jpg" alt="reborn" class="rounded mx-auto d-block" style="width:50%;">
    </div>
  </div>
</body>