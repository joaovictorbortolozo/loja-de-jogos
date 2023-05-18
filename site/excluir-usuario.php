<?php
$id = $_GET["id"];
include "conexao.php";
        
        $sql_excluir_usuario = "delete from jogo where id=$id";

        $jogo_excluido = mysqli_query($conexao, $sql_excluir_usuario);

        mysqli_close($conexao);
 
        header("location:listar-usuarios.php?msg=excluido");

?>