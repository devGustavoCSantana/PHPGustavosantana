<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <main>
        <section class="formulario_geral">
            <form action="" method="post" id="form_login">
                <h1>Cadastro</h1>
                <div class="form_grupo">
                     <label for="nome">Nome:</label>
                     <input type="text" name="nome" id="nome">
                </div>
                <div class="form_grupo">
                     <label for="email">email:</label>
                     <input type="text" name="email" id="email">
                </div>
                <div class="form_grupo">
                     <label for="senha">Senha:</label>
                     <input type="text" name="senha" id="senha">
                </div>
                <div class="form_grupo">
                        <button type="submit" class="form_btn">Entrar</button>
                    </div>
            </form>
            <dialog id="avisos"></dialog>
        </section>
    </main>
    <script>
        const form = document.getElementById('form_login');
        const dialog = document.getElementById('avisos');
        form.addEventListener('submit', (evento) =>{
            event.preventDefault()
            let data = new FormData(form)
            fetch("cadastrar.php", {
                method:'POST',
                body: data,
            })
            .then((resposta) => {
                if(resposta.ok){
                    return resposta.text()
                }
            })
            .then((msg) => {
                dialog.innerHTML = msg;
                dialog.open = true;
                setTimeout(()=>{
                    dialog.open = false;
                }, 3000)
            })
        });
    </script>
</body>
</html>