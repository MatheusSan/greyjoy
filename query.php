<?php
$dados = $_POST['dados'];
//formatata dados para formato JSON
$dadosJson = json_encode($data);

//o nome do arquivo
$arquivo = 'arquivo.json';

//abre ou cria o arquivo
$arquivoAberto = fopen($arquivo,'w+');

//escreve no arquivo aberto
fwrite($arquivoAberto,$formattedData);

//fecha o arquivo aberto
fclose($arquivoAberto);
?>