<?php
    $pageName = "Recuperar senha";
    include("inc/head.inc.php");

    $idRec = $_GET["idRec"];
?>

<main>
    <h1>Seven Plus - <?=$pageName?></h1>
    <span id="alertMsg"></span>
    <div id="form-insert-new-password">
        <label>Email:</label><br>
        <input type="text" name="user-email" id="user-email"><br>
        <label>Nova Senha:</label><br>
        <input type="text" name="user-new-password" id="user-new-password"><br>
        <label>Confirma Nova Senha:</label><br>
        <input type="text" name="user-conf-new-password" id="user-conf-new-password"><br>

        <input type="hidden" name="idRec" id="idRec" value="<?=$idRec?>">
        <input type="hidden" name="fxUser" id="fxUser" value="fxInsertNewPassword">
        <button type="button" onclick="insertNewPassword()">Alterar</button>
    </div>
    <hr>
    <p>
        <a href="index.php">Login</a> | <a href="user-registration.php">Cadastrar usuário</a>
    </p>
</main>

<script>
    function insertNewPassword() {
        let userEmail = $("#user-email").val();
        let userNewPassword = $("#user-new-password").val();
        let userConfNewPassword = $("#user-conf-new-password").val();
        let idRec = $("#idRec").val();
        let fxUser = $("#fxUser").val();

        if (!userEmail || !userNewPassword || !userConfNewPassword) {
            $("#alertMsg").text("Por favor, preencha todos os campos!");
            return;
        }

        if (userNewPassword !== userConfNewPassword) {
            $("#alertMsg").text("As senhas são diferentes!");
            return;
        }

        if (!idRec || idRec === "") {
            $("#alertMsg").text("ERRO - idRec vazio!");
            return;
        }

        $.ajax({
            url: "<?=$urlPrivate?>/controller/User.controller.php",
            method: "POST",
            async: true,
            data: {
                userEmail: userEmail,
                userNewPassword: userNewPassword,
                userConfNewPassword: userConfNewPassword,
                idRec: idRec,
                fxUser: fxUser
            }
        })

        .done(function (result) {
            if (result["status"]) {
                $("#alertMsg").html(result.msg);
            } else {
                $("#alertMsg").html(result.msg);
            }
        })
    }
</script>

<?php
        include("inc/footer.inc.php");
?>