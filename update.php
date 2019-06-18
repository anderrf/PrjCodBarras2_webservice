<?php
    try {
        $conexao = mysqli_connect("localhost","andersonrf","","bd_cdbarras"); 

        $nome = $_POST['nome'];
        $codigo = $_POST['codigo'];
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
        codigo='$codigo',
        valor='$valor',
        descricao='$descricao',
        processador='$processador',
        sistemaop='$sistemaop',
        tamtela='$tamtela',
        tecwifi='$tecwifi',
        qtcam='$qtcam',
        rescam='$rescam',
        memflash='$memflash'
        where codigo = $codigo";
        
        mysqli_query($conexao,$query);
        echo "alteração realizada com sucesso";
    } catch (Exception $e ) {
        echo "Erro ao cadastrar: ".$e;
    }