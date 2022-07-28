<?php
$base_de_dados='id19338447_caol';
$usuario='id19338447_pacote_avaliacao';
$senha='Hermankaba07_';
$host = 'localhost';
$conexao = new mysqli($host, $usuario, $senha, $base_de_dados);
if ($conexao->connect_error) {
  die("Erro ao conectar com Base de Dados: " . $conn->connect_error);
}
return $conexao;
?>