<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="common/index.css">

  </head>
  <body>
    <?php
      include('navbar.php');
    ?>
    <div class="jombotron">
      <div class="black-rect"></div>
      <h1>Bien<span class="jomb-span">venue</span></h1>
      <p>
        Sur la première plateforme Algerienne dédiée à la recherche de stages
      </p>
    </div>
    <div class="login-section">
      <div class="login">
        <form class="form-login" action="post.php">
          <!-- username -->
          <label class="sr-only" for="username">Nom d'utilisateur :</label>
          <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
              <div style="font-size:20px; background-color: black; color: white;" class="input-group-text">@</div>
            </div>
            <input
              type="email"
              required
              class="form-control"
              id="username"
              name="username"
              placeholder="example@example.com"
            />
          </div>
          <!----------------------------------------->
          <!-- password -->
          <label class="sr-only" for="password">Mot de passe :</label>
          <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
              <div class="input-group-text" style="background-color: black"><img style="width: 20px; height:27px;" src="img/icons/lock.png"></img></div>
            </div>
            <input
              type="password"
              required
              class="form-control"
              id="password"
              name="password"
              placeholder="********"
            />
          </div>
          <!----------------------------------------->
          <a class="link" href="">Mot de passe oublié ?</a>
          <button class="submit-btn" type="submit">Se connecter</button>
        </form>
      </div>
      <div class="illustration">
        <object
          data="/assets/img/man-working-remotely-and-drinking-coffee.svg"
          type=""
        ></object>
      </div>
    </div>
  </body>
</html>
