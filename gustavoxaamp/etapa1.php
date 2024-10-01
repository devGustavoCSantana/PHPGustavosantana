<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro</title>
</head>
<body>

<!-- Crie um sistema em etapas usando formulario de HTML com PHP;
 
 1º etapa
     Captura os seguintes dados:
         Nome, email, senha
         porem a senha com confirmação logo os dois campos deve conter a mesma senha;
 2º etapa
     Captura os dados bancario do cartão de credito:
         nome do cartao, numero, codigo de validação, mes e ano de vencimento, cpf, plano selecionado
 3º etapa
     Perfil do usuario master capitura os seguinte:
         Estilo de categorias que o usuario gosta para criar uma lista de opções no futuro, nome do perfil
 4º etapa
     Com todos os dados acima organiza em uma matriz multidimensional

 5ª etapa
     imprime em uma tabela em HTML toda a matriz. -->

     <form action="" method="post" id="formulario">

        <label for="nome">nome:</label>
        <input type="text" name="nome" id="nome"><br>

        <label for="email">email:</label>
        <input type="text" id="Email" name="Email"><br><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha1" name="senha1"><br><br>

        <label for="Confirmaçãoo de senha">Confirmação de senha:</label>
        <input type="password" id="senha2" name="senha2"><br><br>
 
        <button type="submit" onclick="validar()">Proximo</button>
    </form>
    <script>
       function validar(){
        let senha1 =  document.getElementById('senha1').value;
        let senha2 =  document.getElementById('senha2').value;


        if(senha1 != senha2){
            alert("senhas não coincidem");
            return false;
        }else{
            document.getElementById('formulario').setAttribute('action', 'etapa2.php');
        }
       }
    </script>


</body>
</html>