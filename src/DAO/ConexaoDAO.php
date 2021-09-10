<?php


class ConexaoDAO {
   
    
    public function abrirConexao (){
         $vConn = NULL; 
        try{
            $server = "mysql:host=mysql.esrc.com.br; dbname=esrc10";
            $user = "esrc10";
            $pass = "projeto10";
            $vConn = new PDO($server, $user, $pass);
            $vConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $vConn->exec("set names utf8");
        } catch (Exception $ex) {
            echo "ERRO: Falha na conexão ao Banco de dados.<br>";
            echo "Descrição: " . $ex->getMessage();

        }
        return $vConn;
    }
    
    
}

?>
