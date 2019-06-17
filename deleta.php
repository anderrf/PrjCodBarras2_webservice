<?php
    try {
        $conexao = mysqli_connect("localhost","andersonrf","","bd_cdbarras"); 
        
        $id = $_GET['id'];
        
        $query = "delete from celular where id = $id";
        
        mysqli_query($conexao,$query);
        echo "registro removido com sucesso";
    } catch (Exception $e ) {
        echo "Erro ao deletar: ".$e;
    }