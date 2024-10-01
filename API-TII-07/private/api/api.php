<?php
    header("Content-type: application/json");

    //Simulaçao de um banco de dados
    $data =[
        ['id'=>1, 'name'=> 'Gustavo'],
        ['id'=>2, 'name'=> 'Kathleen']
    ];

    echo json_encode($data);
?>