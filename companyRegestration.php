<?php require_once 'common/head.php' ?>

<body>
    <nav class="py-2 px-5 w-100 d-flex justify-content-between">
        <div class="logoEstage">ESTAGE</div>
        <button class="btn btnHomeComReg btn-sm px-4">Accueil</button>
    </nav>
    <main class="mainComReg">
        <form id="compRegForm" action="" class=" form rounded">
            <label for="nomCom" class="pl-5">Nom :</label>
            <div class="input-group mb-1 w-75 mx-auto rounded">
                <div class="input-group-prepend rounded">
                    <img src="./img/icons/user.png" class="icon inputReg p-1 rounded" id=" basic-addon1">
                </div>
                <input type="text" class="form-control" placeholder="Nom de l'entreprise" aria-label="nomCom"
                    aria-describedby="basic-addon1" required>
            </div>
            <label for="emailCom" class="pl-5">Email :</label>
            <div class="input-group mb-1 w-75 mx-auto rounded">
                <div class="input-group-prepend rounded">
                    <img src="./img/icons/adr.png" class="icon inputReg py-2 p-1 rounded" id=" basic-addon2">
                </div>
                <input type="email" class="form-control" placeholder="Email de l'entreprise" aria-label="emailCom"
                    aria-describedby="basic-addon2" required>
            </div>
            <label for="mdpCom" class="pl-5">Mot de Passe :</label>
            <div class="input-group mb-1 w-75 mx-auto rounded">
                <div class="input-group-prepend rounded">
                    <img src="./img/icons/lock.png" class="icon inputReg py-2 p-1 rounded" id=" basic-addon3">
                </div>
                <input type="password" class="form-control" placeholder="************" aria-label="mdpCom"
                    aria-describedby="basic-addon3" required>
            </div>
            <label for="adrCom" class="pl-5">Adresse :</label>
            <div class="input-group mb-1 w-75 mx-auto rounded">
                <div class="input-group-prepend rounded">
                    <img src="./img/icons/pin.png" class="icon inputReg py-2 p-1 rounded" id=" basic-addon4">
                </div>
                <input type="text" class="form-control" placeholder="Adresse" aria-label="adrCom"
                    aria-describedby="basic-addon4" required>
            </div>
            <label for="aboutCom" class="pl-5">A propos de l'entreprise :</label>
            <textarea name="aboutcom" id="aboutCom" cols="30" rows="4"
                class="mb-1 rounded border w-75 mx-auto form-control"></textarea>
            <label for="logoCom" class="pl-5">Logo : </label>
            <div class="input-group input-group-sm mb-2">
                <input type="file" accept="image/*" name="logoCom" id="logoCom"
                    class="control-form control-form w-75 mx-auto rounded">
            </div>

            <div class="w-75 mx-auto d-flex justify-content-center my-4">
                <button class="subsBtn mx-auto text-white rounded px-5 btn ">s'inscrire</button>
            </div>

        </form>
        <img src="./img/back/meuf.png" alt="" class="meuf">
        <img src="./img/back/text.png" alt="" class="text ">
    </main>
    <?php require_once './common/scripts.php' ?>