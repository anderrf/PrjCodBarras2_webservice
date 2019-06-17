<?php
    try {
        $conexao = mysqli_connect("localhost", "andersonrf", "", "bd_cdbarras");

        $cod = $_GET['cod'];
        
        $query = "SELECT * FROM celular WHERE codigo = $cod";
        
        
        $resultado = mysqli_query($conexao,$query);
        
        while($linha = mysqli_fetch_assoc($resultado)){
             
        $registro = array(
            'celular'=>array(
                'id' => $linha['id'],
                'nome' => $linha['nome'],
                'codigo' => $linha['codigo'],
                'valor' => $linha['valor'],
                'descricao' => $linha['descricao'],
                'processador' => $linha['processador'],
                'sistemaop' => $linha['sistemaop'],
                'tamtela' => $linha['tamtela'],
                'tecwifi' => $linha['tecwifi'],
                'qtcam' => $linha['qtcam'],
                'rescam' => $linha['rescam'],
                'memflash' => $linha['memflash'],
               
            )
        );
        
            
        }
       
        echo json_encode($registro);
 
    } catch (Exception $e ) {
        echo "Erro ao buscar: ".$e;
    }