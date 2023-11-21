<?php

    require '../../config.php';
    use app\models\User;

    $nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);

    $user = new User;

    $cadastrado = $user->create($nome, $email);

    if($cadastrado){
        echo 1;
    }else{
        echo 2;
    }