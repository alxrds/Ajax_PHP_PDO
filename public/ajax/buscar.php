<?php

    require '../../config.php';
    use app\models\User;

    sleep(3);

    $user = new User;

    $nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);

    $resultado = $user->buscar($nome);

    if(!$resultado || empty($nome)){
        echo 'nouser';
    }else{
        echo json_encode($resultado);
    }

