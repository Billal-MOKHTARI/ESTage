<?php require_once 'common/head.php' ?>

<body class="compReg">
    <?php include('navbar.php')?>
    <main class="mainComReg">
        <form id="compRegForm" action="#" method="POST" class=" form rounded" enctype="multipart/form-data">
            <label for="nomCom" class="pl-5">Nom :</label>
            <div class="input-group mb-1 w-75 mx-auto rounded">
                <div class="input-group-prepend rounded">
                    <img src="./img/icons/user.png" class="icon inputReg p-1 rounded" id=" basic-addon1">
                </div>
                <input type="text" class="form-control" placeholder="Nom de l'entreprise" aria-label="nomCom"
                    aria-describedby="basic-addon1" required id="nomCom" name="nomCom">
            </div>
            <label for="emailCom" class="pl-5">Email :</label>
            <div class="input-group mb-1 w-75 mx-auto rounded">
                <div class="input-group-prepend rounded">
                    <img src="./img/icons/adr.png" class="icon inputReg py-2 p-1 rounded" id=" basic-addon2">
                </div>
                <input type="email" class="form-control" placeholder="Email de l'entreprise" aria-label="emailCom"
                    aria-describedby="basic-addon2" required id="emailCom" name="emailCom">
            </div>
            <label for="mdpCom" class="pl-5">Mot de Passe :</label>
            <div class="input-group mb-1 w-75 mx-auto rounded">
                <div class="input-group-prepend rounded">
                    <img src="./img/icons/lock.png" class="icon inputReg py-2 p-1 rounded" id=" basic-addon3">
                </div>
                <input type="password" class="form-control" placeholder="************" aria-label="mdpCom"
                    aria-describedby="basic-addon3" required id="mdpCom" name="mdpCom">
            </div>
            <label for="adrCom" class="pl-5">Adresse :</label>
            <div class="input-group mb-1 w-75 mx-auto rounded">
                <div class="input-group-prepend rounded">
                    <img src="./img/icons/pin.png" class="icon inputReg py-2 p-1 rounded" id=" basic-addon4">
                </div>
                <input type="text" class="form-control" placeholder="Adresse" aria-label="adrCom"
                    aria-describedby="basic-addon4" required id="adrCom" name="adrCom">
            </div>
            <label for="telCom" class="pl-5">Téléphone :</label>
            <div class="input-group mb-1 w-75 mx-auto rounded">
                <div class="input-group-prepend rounded">
                    <img src="./img/icons/adr.png" class="icon inputReg py-2 p-1 rounded" id=" basic-addon2">
                </div>
                <input type="text" class="form-control" placeholder="Téléphone de l'entreprise" aria-label="telCom"
                    aria-describedby="basic-addon2" required id="emailCom" name="telCom">
            </div>
            <label for="aboutCom" class="pl-5">A propos de l'entreprise :</label>
            <textarea name="aboutCom" id="aboutCom" cols="30" rows="4"
                class="mb-1 rounded border w-75 mx-auto form-control"></textarea>
            <label for="logoCom" class="pl-5">Logo : </label>
            <div class="input-group input-group-sm mb-2">
                <input type="file" accept="image/*" name="logoCom" id="logoCom"
                    class="control-form control-form w-75 mx-auto rounded">
            </div>

            <div class="w-75 mx-auto d-flex justify-content-center my-4">
                <input  type="submit" value="S'inscrire" class="subsBtn mx-auto text-white rounded px-5 btn ">
            </div>
            <?php
            /** @var $pdo \PDO  */
                ini_set('display_errors', 1);
                error_reporting(E_ALL);
                    if(isset($_POST["nomCom"])and isset($_POST["emailCom"]) and isset($_POST["mdpCom"]) and isset($_POST["adrCom"]) and isset($_FILES["logoCom"]) and isset($_POST["telCom"]) and isset($_POST["aboutCom"])){
                        $uploadfile = "logos/". basename($_FILES["logoCom"]["name"]);
                        if(move_uploaded_file($_FILES["logoCom"]["tmp_name"], $uploadfile)){
                            require_once 'common/database.php';
                            $sql = "INSERT INTO companies (nameCompany, aboutCompany, logoCompany, addressCompany, emailCompany, phoneCompany) VALUES (?,?,?,?,?,?)";
                            $stmt= $pdo->prepare($sql);
                            $stmt->execute([$_POST["nomCom"], $_POST["aboutCom"], $uploadfile,$_POST["adrCom"],$_POST["emailCom"],$_POST["telCom"]]);
                            $sql = "INSERT INTO accounts (emailAccount, passwordAccount) VALUES (?,?)";
                            $stmt= $pdo->prepare($sql);
                            $stmt->execute([$_POST["emailCom"],password_hash($_POST["mdpCom"],PASSWORD_DEFAULT)]);
                        }
                    }
            ?>
        </form>
        <img src="./img/back/meuf.png" alt="" class="meuf">
        <img src="./img/back/text.png" alt="" class="text ">
    </main>
    <?php require_once 'common/scripts.php' ?>