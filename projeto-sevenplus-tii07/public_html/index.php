<?php
    $pageName = "Entre e Curta";
    include("inc/head.inc.php");
?>

<main>
    <h1>Seven Plus - <?=$pageName?></h1>
    <span id="alertMsg"></span>
    <div id="form-user-login">
        <label>Login/Email:</label><br>
        <input type="text" name="user-email" id="user-email"><br>
        <label>Senha:</label><br>
        <input type="text" name="user-password" id="user-password"><br>
        
        <!-- <input type="submit" value="Entre e Curta" onclick="actUser()"> -->

        <input type="hidden" name="fxUser" id="fxUser" value="fxLogin">
        <button type="button" onclick="userLogin()">Entre e Curta</button>
    </div>
    <hr>
    <p>
        <a href="user-recovery-password.php">Recuperar senha</a> | <a href="user-registration.php">Cadastro de usuário</a>
    </p>
</main>

<script>
    function userLogin() {
        let userEmail = $("#user-email").val();
        let userPassword = $("#user-password").val();
        let fxUser = $("#fxUser").val();

        if (!userEmail || !userPassword) {
            $("#alertMsg").text("Por favor, preencha todos os campos!");
            return;
        }

        // Ajax
        $.ajax({
            url: "<?=$urlPrivate?>/controller/User.controller.php",
            method: "POST",
            async: true,
            data: {
                fxUser: fxUser,
                userEmail: userEmail,
                userPassword: userPassword
            }
        })

        .done(function (result) {
            if (result["status"]) {
                // document.getElementById("alertMsg").innerHTML = result.msg;
                $("#alertMsg").html(result.msg);
                window.location.href = result.dashboardClient;
            } else {
                document.getElementByid("alertMsg").innerHTML = result.msg;
                // $("#alertMsg").html(result.msg);
            }
        })
    }
</script>

<?php
    include("inc/footer.inc.php");
?>