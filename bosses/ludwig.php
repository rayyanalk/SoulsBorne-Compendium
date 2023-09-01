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
  <title>Ludwig the Holy Blade</title>
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
    <h1 class="col-12 mt-4 mb-4" id="titleH">The Accursed: Ludwig the Holy Blade</h1>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6" id="kosbox">
        <p id="kosquote">"Aah, you were at my side all along.
          My true mentor... My guiding moonlight..."</p>
        <p id="kosinfo">Ludwig was the first hunter of the Church, known as the 'Holy Blade', and a man emulating the
          heroes from an age of honor and chivalry.

          We do not know of Ludwig prior to his role as the first hunter of the Healing Church. It may be that he was a
          scholar at Byrgenwerth, or perhaps a hunter under Gehrman. Gehrman certainly knows of Ludwig, mentioning him
          by name in his dialogue. Ludwig's appearance in the history of Yharnam and the Church marks a departure in the
          way the Church dealt with the Scourge of the Beast. The first hunter's under Gehrman focused on engaging
          beasts with speed, based upon the fighting style of their instructor. This focus on speed and dexterity meant
          that weapons like the Burial Blade, Blades of Mercy and Rakuyo were favoured by those who engaged in the hunt.
          Each of these weapons requires great skill from the wielder and would have required extensive training in
          order to utilize them effectively against the beastly threat. But while these methods were effective, it would
          only take one beast, with one lucky hit, to end the life of these hunters who had poured so much of their time
          into honing their skill. Not only was this a very real threat, but as the scourge of the beast got worse and
          the beasts became larger, the Healing Church had to change their strategy to match the conditions. To enable
          them to work and forge weapons capable of countering the larger beasts, the Healing Church created a unique
          workshop; a massive circular tower adjunct to the old workshop, Oedon Chapel and the Upper Cathedral Ward. In
          the time of Ludwig the Church supported the role of the hunter, forging their weaponry and attire, perhaps
          providing training and a safe haven in which to rest. </p>

        <a href="bosses_details.php?idbosses=18" role="button" class="btn btn-secondary" id="bossbutton">Boss
          Statstics</a>
      </div>
      <img src="ludwig.jpg" alt="ludwig" class="rounded mx-auto d-block" style="width:50%;">
    </div>
  </div>
</body>