<?php
abstract class Funcoes
{
	
	static function Consultores(){
		try {
			$conexao = include 'configs/conexao.php';//conexao com bd  
            $sql = "SELECT CAO_USUARIO.NO_USUARIO FROM CAO_USUARIO
            INNER JOIN PERMISSAO_SISTEMA ON CAO_USUARIO.CO_USUARIO = PERMISSAO_SISTEMA.CO_USUARIO
            AND PERMISSAO_SISTEMA.CO_SISTEMA = 1 AND PERMISSAO_SISTEMA.IN_ATIVO = 'S'
            AND (PERMISSAO_SISTEMA.CO_TIPO_USUARIO = 0
            OR PERMISSAO_SISTEMA.CO_TIPO_USUARIO = 1
            OR PERMISSAO_SISTEMA.CO_TIPO_USUARIO = 2)";
            return $conexao->query($sql);
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage();
		}
	}
	static function Clientes(){
		try {
			$conexao = include 'configs/conexao.php';//conexao com bd  
			$sql = "SELECT CAO_CLIENTE.no_fantasia FROM CAO_CLIENTE WHERE CAO_CLIENTE.tp_cliente='A';";
			return $conexao->query($sql);
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage();
		}
	}

}

?>