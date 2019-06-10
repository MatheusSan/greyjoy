<?php
$data = $_POST['dados'];

$dadoFormatado = json_encode($data);

//define o nome do arquivo como data atual YYYY-MM-DD.json
$arquivo = date('Y-m-d').'.json';

//abre ou cria o arquivo
$arquivoAberto = fopen($arquivo,'w+');

//escreve no arquivo aberto
fwrite($arquivoAberto,$dadoFormatado);

//fecha o arquivo aberto
fclose($arquivoAberto);
?>