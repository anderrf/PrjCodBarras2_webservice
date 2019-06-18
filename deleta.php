<?php
    try {
        $conexao = mysqli_connect("localhost","andersonrf","","bd_cdbarras"); 
        
        $cd = $_GET['cd'];
        
        $query = "delete from celular where cd = $cd";
        
        mysqli_query($conexao,$query);
        echo "registro removido com sucesso";
    } catch (Exception $e ) {
        echo "Erro ao deletar: ".$e;
    }