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
  <title>Slave Knight Gael</title>
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
    <h1 class="col-12 mt-4 mb-4" id="titleH">The Dutiful: Slave Knight Gael</h1>
  </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6" id="kosbox">
        <p id="kosquote">"The painting of Ariandel. Well, rotten scrap of it, that is. Go on, take it, touch it..."</p>
        <p id="kosinfo">Believed to reside in the painting, he acted as some parental figure to The Painter, who calls
          him her uncle. It is believed that he departed the painting after she was locked away, taking the rotted
          remains of the physical portal with him, attempting to find another Ashen One to complete the prophecy that
          would burn away the rotted world so that the Painter could replace it.

          Unable to find one, he travels to the Cathedral of the Deep, praying for divine aid in his mission. When he
          encounters the Champion, he is overjoyed to have completed his search, and requests the Ashen One to free The
          Painter and show her the flame that would burn the rot. Once they come into contact with the piece of the
          painting, the Ashen One is pulled into the painted world.

          In the fight with Ariandel and Friede, the flame is reignited, and The Painter comments that she will wait
          until she can see it before beginning the painting. To do that, she needs the pigment she intends to use,
          which she reveals to be the Dark Soul itself, discovered by the Furtive Pygmy and used to create all of
          humankind[2]. She also mentions that Gael intended to get it for her, for he has set out on a new mission to
          find it, and she wonders whether or not he has found it already.

          Gael's mission to find the Dark Soul leads him to the Ringed City where he finally meets the Pygmy Lords whose
          blood would apparently serve as a suitable pigment. However to his shock, their blood has dried out over the
          ages and is therefore useless to him. Driven mad by this revelation and determined to complete his mission,
          Gael slaughters the Pygmies, cutting their throats and drinking their dried blood, in a desperate attempt to
          take the Dark Soul for himself. But even he realized that the Dark Soul was too powerful for him to handle,
          and it mutated his body, causing him to grow in size and warp his mind.</p>

        <a href="bosses_details.php?idbosses=7" role="button" class="btn btn-secondary" id="bossbutton">Boss
          Statstics</a>
      </div>
      <img src="gael.jpg" class="rounded mx-auto d-block" width=50%>
    </div>
  </div>
</body>