
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

    $colunas = implode(',',$colunas); //, virgyula nos finais do arary
    $valores = implode(',',$valores);

      //query para inserir dentro do banco de dados
      $query="INSERT INTO clientes ($colunas) VALUES ($valores)";
  
    if ($conexao->query($query) == TRUE) {
        echo "cadastrado com sucesso";
    } else {
        echo "erro ao cadastrar" . $conexao->error;
    }

    $conexao->close();

}



?>