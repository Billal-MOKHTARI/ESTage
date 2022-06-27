<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="common/index.css" />
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
    <?php include("navbar.php")?>
    <h1 class="offre-title">Nos offres</h1>
    <div class="card-container">
      <div class="row">
        <img src="./img/logo/ooredoo-logo.png" alt="">
      </div>
      <div class="card">
        <h2>Title</h2>
        <p>sur la première plateforme Algerienne dédiée à la recherche de stages </p>
        <hr class="card-line"/>
        <p style='font-size:16px;' class="card-nbr">Nombre de dcandidats : 76</p>
      </div>

      <div class="card">
        <h2>Title</h2>
        <p>sur la première plateforme Algerienne dédiée à la recherche de stages </p>
        <hr class="card-line"/>
        <p style='font-size:16px;' class="card-nbr">Nombre de dcandidats : 76</p>
      </div>

      <div class="card">
        <h2>Title</h2>
        <p>sur la première plateforme Algerienne dédiée à la recherche de stages </p>
        <hr class="card-line"/>
        <p style='font-size:16px;' class="card-nbr">Nombre de dcandidats : 76</p>
      </div>
    </div>

    <div class="card-form">
      <h2 class="ajout-offre">Ajouter une offre</h2>
      <div class="glob-cont">
        <div style='width:66%;'>

          <form class="card-form2" action="">
            <!--  -->
            <div class="div-cont1">
              <!--  Titre-->
              <div class="div-form1">
                <label class="sr-only" for="titre">Titre :</label>
                <div class="input-group mb-2 mr-sm-2">
                  <div class="input-group-prepend">
                    <div style="font-size:20px; background-color: white; color: black; font-weight: 900;" class="input-group-text">T</div>
                  </div>
                  <input
                    type="text"
                    required
                    class="form-control"
                    id="titre"
                    name="titre"
                    placeholder="Titre"
                  />
                </div>
              </div>
              <!-- Nombre de candidats -->
              <div class="div-form1">
                <label class="sr-only" for="nbrCandidats">Nombre de candidats :</label>
                <div class="input-group mb-2 mr-sm-2">
                  <div class="input-group-prepend">
                    <div style="font-size:20px; background-color: white; color: black;" class="input-group-text">@</div>
                  </div>
                  <input
                    type="number"
                    required
                    class="form-control"
                    id="nbrCandidats"
                    name="nbrCandidats"
                    placeholder="Nombre de candidats"
                  />
                </div>
              </div>

              <!------------------------->
            </div>
            <div class="div-cont2">
              <label class="sr-only" for="description">Description :</label>
                <div class="input-group mb-2 mr-sm-2">
                  <textarea style="border-radius: 15px; background-color: #000000e7; color:white; padding:6px;" id="description" name="description" cols="30" rows="5"></textarea>
                </div>
              <button id="ajout-btn" style="
              
              background-color:white;
              color : black;
              border-radius: 7px;
              border : none;
              width: 182px;
              height : 42px;
              margin-left: 13%; 
              font-weight : bold;
              " type="submit">Ajouter</button>
            </div>
    
            <!--  -->
          </form>
        </div>
        <div>
          <object data="img/desk.svg" type=""></object>
        </div>
      </div>
    </div>
  
  </body>
</html>
