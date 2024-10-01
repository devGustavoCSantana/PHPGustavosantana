<?php
    $pageName = "Cadastro de filmes";
    include("inc/head.inc.php");
?>

<main>
    <h1>Cadastro De Filme</h1>
    <span id="alertMsg"></span>
    <div id="form-user-registration">
    <label>Titulo Do filme :</label><br>
        <input type="text" name="titlle-filme" id="titlle-filme"><br>
        <label>Subtitulo:</label><br>
        <input type="text" name="sub-tittle" id="sub-tittle"><br>
        <label>Sinopse:</label><br>
        <input type="text" name="sinopse" id="sinopse"><br>
        <label>Duração:</label><br>
        <input type="text" name="time-lapse" id="time-lapse"><br>
        <label>Ranking:</label><br>
        <input type="text" name="ranking" id="ranking"><br>
        <label>URL :</label><br>
        <input type="text" name="uniform-resource-locato" id="uniform-resource-locato"><br>

        <input type="hidden" name="fxUser" id="fxUser" value="fxUserRegistration">
        <button type="button" onclick="userRegistration()">Cadastrar</button>
    </div>
    <hr>
    <p>
        <a href="index.php">Login</a> | <a href="user-recovery-password.php">Recuperar senha</a>
    </p>
</main>

<script>
    function userRegistration() {
        let tittleFilme = $("#titlle-filme").val();
        let subTitlle = $("#sub-tittle").val();
        let sinopse = $("#sinopse").val();
        let duracao = $("#time-lapse").val();
        let ranking = $("#ranking").val();
        let url = $("#uniform-resource-locato").val();

        $.ajax({
            url: "<?=$urlPrivate?>/controller/User.controller.php",
            method: "POST",
            async: true,
            data: {
                tittleFilme: tittleFilme,
                subTitlle: subTitlle,
                sinopse: sinopse,
                duracao: duracao,
                ranking: ranking,
                url: url


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