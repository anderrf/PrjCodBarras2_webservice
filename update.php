<?php
    try {
        $conexao = mysqli_connect("localhost","andersonrf","","bd_cdbarras"); 

        $nome = $_POST['nome'];
        $cod = $_POST['cod'];
        $valor = $_POST['valor'];
        $descricao = $_POST['descricao'];
        $processador = $_POST['processador'];
        $sistemaop = $_POST['sistemaop'];
        $tamtela = $_POST['tamtela'];
        $tecwifi = $_POST['tecwifi'];
        $qtcam = $_POST['qtcam'];
        $rescam = $_POST['rescam'];
        $memflash = $_POST['memflash'];
        
        $query = "update celular set 
        nome='$nome',
        cod='$cod',
        valor='$valor',
        descricao='$descricao',
        processador='$processador',
        sistemaop='$sistemaop',
        tamtela='$tamtela',
        tecwifi='$tecwifi',
        qtcam='$qtcam',
        rescam='$rescam',
        memflash='$memflash'
        where id = $id";
        
        mysqli_query($conexao,$query);
        echo "alteração realizado com sucesso";
    } catch (Exception $e ) {
        echo "Erro ao cadastrar: ".$e;
    }