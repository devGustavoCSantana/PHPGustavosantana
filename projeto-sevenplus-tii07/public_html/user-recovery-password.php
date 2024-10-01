<?php
    $pageName = "Recuperar senha";
    include("inc/head.inc.php");
?>

<main>
    <h1>Seven Plus - <?=$pageName?></h1>
    <span id="alertMsg"></span>
    <div id="form-user-recovery-password">
        <label>Email:</label><br>
        <input type="text" name="user-email" id="user-email"><br>

        <input type="hidden" name="fxUser" id="fxUser" value="fxUserRecoveryPassword">
        <button type="button" onclick="userRecoveryPassword()">Enviar</button>
    </div>
    <hr>
    <p>
        <a href="index.php">Login</a> | <a href="user-registration.php">Cadastrar usuário</a>
    </p>
</main>

<script>
    function userRecoveryPassword() {
        let userEmail = $("#user-email").val();
        let fxUser = $("#fxUser").val();

        if (!userEmail) {
            $("#alertMsg").text("Por favor, preencha todos os campos!");
            return;
        }

        $.ajax({
            url: "<?=$urlPrivate?>/controller/User.controller.php",
            method: "POST",
            async: true,
            data: {
                userEmail: userEmail,
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