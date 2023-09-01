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
  <title>Moon Presence</title>
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
    <h1 class="col-12 mt-4 mb-4" id="titleH">The Pale: Moon Presence</h1>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6" id="kosbox">
        <p id="kosquote">"O flora, of the moon, of the dream."</p>
        <p id="kosinfo">One of the Great Ones in Bloodborne, the Moon Presence controls and manipulates all that resides
          within the Hunter's Dream. The Moon Presence's origin is largely unknown, but its first known appearance to
          humanity was to Laurence, who summoned it for unknown reasons. Evidenced by the note located on the upper
          floor of the Lecture Building, the Moon Presence also has a connection to Paleblood.

          "The nameless moon presence beckoned by Laurence and his associates. Paleblood." The Moon Presence is
          absolutely synonymous with the blood moon. Whether it actually is the blood moon or whether it resides on the
          blood moon is unclear. When it is seen descending in the Hunter's Dream, it appears at the same time that the
          Blood Moon becomes visible, indicating that when the Blood Moon descends, so does the Moon Presence. However,
          its physical form actually descends from the moon, indicating it is a separate entity, that the moon is simply
          a place in which it lives which it seems to exercise control over. Interestingly, the moon in Bloodborne does
          not appear to be in space as it is in our reality, but rather the moon seen in the sky is actually within the
          atmosphere, so low to the ground that clouds are able to pass in front of and behind it. The Moon Presence is
          perhaps then, a manifestation of the moon, a physical form for an abstract idea.

          The Blood Moon and therefore the Moon Presence have appeared multiple times in the history of Bloodborne. We
          know from the artefacts and descriptions found concerning the Pthumerian civilization under Queen Yharnam that
          long ago the Blood Moon was seen in the land of Loran. Its appearance, mixed with the use of Old (Great One)
          Blood, triggered the scourge of beasthood. </p>

        <a href="bosses_details.php?idbosses=20" role="button" class="btn btn-secondary" id="bossbutton">Boss
          Statstics</a>
      </div>
      <img src="presence.jpg" alt="presence" class="rounded mx-auto d-block" style="width:50%;">
    </div>
  </div>
</body>