<?php
    try{
        
        $conexao = mysqli_connect("localhost", "andersonrf", "", "bd_cdbarras");

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
        
        $query = "INSERT INTO celular VALUES (NULL, '$nome', '$cod', '$valor', '$descricao', '$processador', '$sistemaop', '$tamtela', '$tecwifi', '$qtcam', '$rescam', '$memflash');";
        mysqli_query($conexao, $query);
        
        echo "Cadastro realizado com sucesso.";
        
        
    }catch (Exception $e) {
        echo "Falha: " . $e;
    }