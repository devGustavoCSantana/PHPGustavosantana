<?php
    //Inicia a sessão 
    session_start();
    // Verifica se o usuário esta logado
    if((!isset($_SESSION['loggedin']) || (!$_SESSION['loggedin']))){
        // Redireciona para a página de login se não estiver logado 
        header("location: index.php");
        exit();
    }

    // Configura a duração da sessão para 2 minutos
        $session_lifetime = 1 * 60;
        $session_start_time = isset($_SESSION['start_time']) ? $_SESSION['start_time'] : time();

        //Calcula o tempo restante da sessão
        $time_remaining = max(0, $session_lifetime - (time() - $session_start_time));

        //Atuializa o tempo de inicio da sessão 
        $_SESSION['start_time'] = time();

        // Se estiver logado, exibe o conteudo do Dashboard


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Cliente</title>

    <script>
        // Definir o tempo maximo da sessão
        // $session_start_time  $session_lifetime $time_remaining
        const sessionLifeTime = <?=$session_lifetime?>;
        // Obtém o tempo restante da sessão
        let timeRemaining = <?=$time_remaining?>;

        //Função para atualizar o contador de tempo restante
        function updateTimeCount() {
            if  (timeRemaining <= 0) {
                document.getElementById('time-count').innerHTML = '<p>Sua sessão expirou</p>';

                //Opcional - Redirecionar para a página de login
                window.location.href = 'index.php';
                return;
            }
            let minutes = Math.floor(timeRemaining / 60);
            let seconds = timeRemaining % 60;

            minutes = minutes < 10 ? '0' + minutes: minutes;
            seconds = seconds < 10 ? '0' + seconds: seconds;

            document.getElementById('time-count').innerHTML = `<p>Tempo restante: ${minutes}:${seconds}</p>`;

        // Diminui o tempo a cada segundo 
        timeRemaining--;
        }
        // Atualiza o contador a cada segundo 
        setInterval(updateTimeCount, 1000);
        // Atualiza o contador imediatamente ao carregar a página
        window.onload = updateTimeCount;
    </script>
</head>
<body>
    <h1>Bem Vindo a Seven Plus </h1>
    <p>Você esta logado como: <?php
        echo htmlspecialchars($_SESSION['userEmail']);
        ?></p>
    <div id="time-count">
        <p>Seu tempo restant é:</p>
        <?php
        // Variaveis dp PHP - $session_start_time  $session_lifetime $time_remaining
        echo sprintf('%02d:%02d', floor($time_remaining / 60), $time_remaining % 60);
        ?>
    </div>
    <hr>
    <a href="logout.php">SAIR</a>
</body>
</html>