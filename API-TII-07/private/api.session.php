<?php
    session_start();

    header("Content-type: application/json");

    //Verifica se ja existe dados na seção
    if(!isset($_SESSION['data'])){
        // Simulação do banco de dados
        $_SESSION['data'] = [
            ['id' =>1, 'name'=> 'Gustavo', 'age'=> '18'],
            ['id' =>2, 'name'=> 'Kathleen', 'age'=> '18']
        ];
    }

    //Criar variavel para receber o método
    $requestMethod = $_SERVER['REQUEST_METHOD'];

    switch ($requestMethod) {
        case 'GET':
            //retornar os itens
            echo json_encode($_SESSION['data']);
        break;
        case 'POST':
            $input = json_decode(file_get_contents('php://input'),true);

            if(isset($input['name']) && isset($input['age'])) {
                $newData = [
                    'id'=> count($_SESSION['data']) + 1,
                    'name'=> $input['name'],
                    'age'=> $input['age']
                ];
                $_SESSION['data'][] = $newData;

                echo json_encode($_SESSION['data']);
            }
        break;
        
        default:
            //iprimir os erros de codificação
            http_response_code(405);
            echo json_encode('message' => 'Metodo não permitido');
        break;
    }
?>