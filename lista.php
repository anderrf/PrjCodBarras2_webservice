<?php
    try {
        $conexao = mysqli_connect("localhost", "andersonrf", "", "bd_cdbarras");

        
        $query = "select * from celular order by cd asc";
        
        
        $resultado = mysqli_query($conexao,$query);
        
        $registro = array(
            'celular'=>array()
        );
        
        $i =0;
        
        while($linha = mysqli_fetch_assoc($resultado)){
            $registro['celular'][$i] = array(
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
                
            );
            $i++;
        }
      
       echo json_encode($registro);
 
    } catch (Exception $e ) {
        echo "Erro ao buscar: ".$e;
    }