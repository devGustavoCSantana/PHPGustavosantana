<?php
    include("../model/User.model.php");
    // Inicia uma sessão
    session_start();

    // Configurando a duração da sessão para 2 min
    $session_lifetime = 2*60;
    $session_start_time = isset($_SESSION['start_time']) ? $_SESSION
    ['start_time'] : time(); 

    // Verfica se a sessão expirou
    if(time() - $session_start_time > $session_lifetime){
        // Se a sessão expirou, encerra a sessão 
        session_unset();
        session_destroy();
        // Redefine a variavel de inicio de sessão
        $session_start_time = time();

    }

    $_SESSION['start_time'] = time();

    // Configuração do "Header" para transmitir em JSON para o View
    header("Content-Type: Application/json");

    $fxUser = $_POST["fxUser"];

    $User = new User();

    switch($fxUser) {
        case "fxLogin":
            $userEmail    = $_POST["userEmail"];
            $userPassword = $_POST["userPassword"];
            $User->setUserEmail($userEmail);
            $User->setUserPassword($userPassword);     
            
            $result = $User->validatedLogin($fxUser);

            if($result['status']){

            // Criação da sessão após login bem-sucedido
            $_SESSION['userEmail'] = $userEmail;
            $_SESSION['loggedin'] = true;

            // Atualiza o tempo da sessão após login bem-sucedido
            $_SESSION['start_time'] = time();
            



            // Redirecionamento de paginas 
            // Devido o retorno do Json terá que ser passado pelo model 
            // o redirecionamento e o JS cuidara disso;
            // header("http://localhost/projeto-sevenplus-tii07/públic_html/dashboard-client.php") 
            // header("Location: ../../public_html/dashboard-Client.php");
            }

            
        break;

        case "fxUserRegistration":
            $userName     = $_POST["userName"];
            $userEmail    = $_POST["userEmail"];
            $userPassword = $_POST["userPassword"];
            $userConfPassword = $_POST["userConfPassword"];

            if ($userPassword === $userConfPassword) {
                $User->setUserName($userName);
                $User->setUserEmail($userEmail);
                $User->setUserPassword($userPassword);
    
                $result = $User->validatedRegister($fxUser);
            } else {
                $result = [
                    "status" => false,
                    "msg"    => "<p>As senhas são diferentes!</p>"
                ];
            }
        break;

        case "fxUserRecoveryPassword":
            $userEmail = $_POST["userEmail"];

            $User->setUserEmail($userEmail);

            $result = $User->validatedEmail($fxUser);
        break;

        case "fxInsertNewPassword":
            $userEmail           = $_POST["userEmail"];
            $userPassword        = $_POST["userNewPassword"];
            $userConfPassword    = $_POST["userConfNewPassword"];
            $idRec               = $_POST["idRec"];
 
            if ($userPassword === $userConfPassword && $idRec !== "") {
                $User->setUserEmail($userEmail);
                $User->setUserPassword($userPassword);
                $User->setIdRec($idRec);
   
                $result = $User->updateNewPassword($fxUser);

                
            } else {
                $result = [
                    "status" => false,
                    "msg"    => "<p>As senhas são diferentes!</p>"
                ];
            }
        break;

        default:
            $result = [
                "status" => false,
                "msg"    => "<p>Sistema indisponível :(<br>Tente mais tarde...</p>"
            ];
        break;
    }

    // Retorno em JSON para a View
    echo json_encode($result);

/*
    echo "<pre>";
    var_dump($User);
    echo "</pre>";
    echo "<pre>";
    var_dump($result);
    echo "</pre>";
*/
?>