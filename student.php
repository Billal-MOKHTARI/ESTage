<?php
require_once 'common/head.php'
?>

<body>
    <header class="full-bg container-fluid d-flex flex-column justify-content-center">
        <div class="row  d-flex flex-column justify-content-center align-items-center">
            <h1 class="h1 display-4 text-white">Parcourir les emplois avec ESTage</h1>
            <p class="text-white">Trouver une Opportunités de stage</p>
            <form method="get" class="p-2 w-75 d-flex justify-content-around dark-bg">
                <input type="text" class=" form-control col-4" placeholder="Domaine" name="domain">
                <input type="text" name="company" class="form-control col-4" placeholder="Entreprise">
                <button class="text-white btn btn-primary">Rechercher</button>
            </form>
            <div class="mt-3 tags d-flex justify-content-around w-75">
                <span class="text-success align-self-center justify-self-start">domaines : </span>
                <button class="btn btn-outline-light">Data Science</button>
                <button class="btn btn-outline-light">Cyber Security</button>
                <button class="btn btn-outline-light">Web Dev</button>
                <button class="btn btn-outline-light ">Dev Logiciel</button>
                <button class="btn btn-outline-light ">Internet of things</button>
                <button class="btn btn-outline-light ">Artificial Intelligence</button>

            </div>
        </div>

    </header>
    <main class="my-5 container px-0">
        <h2 class="mt-5 h2 text-center">Offres de Stages</h2>
        <section class="row pt-3 d-flex justify-content-around">
            <div class="post px-0">
                <h3 class="text-center title h3 text-white">
                    <strong>Artificial Intelligence</strong>
                    <p></p>
                </h3>
            </div>
            <div class="post px-0">
                <h3 class="text-center title h3 text-white">
                    <strong>Cyber Security</strong>
                    <p></p>
                </h3>
            </div>
            <div class="post d-flex flex-column  px-0 text-left">
                <h3 class="text-center title h3 text-white">
                    <strong>Network Admin</strong>
                </h3>
                <div class="d-flex justify-content-between px-2">
                    <p class="h6 text-white col-8">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo
                        quibusdam voluptates cupiditate.</p>
                    <a href=""><img src="./img/logo/ooredoo-logo.png" alt="" class='w-100'></a>
                </div>
                <div class="align-self-center linePost"></div>
                <span class=" pl-3 text-white">Nombre de places :<span class="mx-4 text-white text-danger h4"> 2
                    </span></span>
                <button class="btn btn-success rounded-pill my-3 px-4 align-self-center"
                    onclick="postuler(3)">Postuler</button>
            </div>
        </section>
        <section id="postForm" class="postForm d-none flex-column">
            <div class="nav w-100 d-flex justify-content-end"><img class="icon" id="close" src="/img/icons/x.png"
                    alt=""></div>
            <form action="" id="formCandidature"
                class=" w-75 align-self-center rounded d-flex flex-column justify-content-center align-items-center">
                <input type="hidden" name="idPost">
                <input type="text" pattern="[a-zA-Z ]*" class="my-2 form-control bg-transparent"
                    placeholder="Nom et Prenom" required>
                <input type="email" class="my-2 form-control bg-transparent " placeholder="email" required>
                <input type="tel" class="my-2 form-control bg-transparent" placeholder="telephone" required>
                <label for="CVFile" class="text-white align-self-start">Votre CV : </label>
                <input type="file" accept="application/pdf" id="CVFile" class=" my-2 form-control bg-transparent"
                    placeholder="votre CV">
                <label for="CLFile" class="text-white align-self-start">Votre lettre de motivation : </label>
                <input type="file" accept="application/pdf" id="CLFile" class="p-2 my-2 form-control bg-transparent"
                    placeholder="votre lettre de motivation">
                <button class="my-2 btn btn-success px-4 rounded-pill">Soumettre</button>
            </form>
        </section>
    </main>


    <?php require_once 'common/scripts.php' ?>