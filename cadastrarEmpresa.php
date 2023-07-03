
<?php
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $dadosRecebido = $_REQUEST;
    $valores = [];
    $colunas= []; 
    foreach($dadosRecebido as $key => $value)
    {
        $colunas[]= $key;
        $valores[] ="'" . $value . "'";
    }

    $colunas = implode(',',$colunas);
    $valores = implode(',',$valores);

    $query="INSERT INTO colaboradores ($colunas) VALUES ($valores)";
    
    if ($conexao->query($query) == TRUE) {
        echo "cadastrado com sucesso";
    } else {
        echo "erro ao cadastrar" . $conexao->error;
    }

    $conexao->close();

}



?>