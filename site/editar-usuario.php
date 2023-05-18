<?php
include "cabecalho.php";
include "menu-sistema.php";

$id = $_GET["id"];
$id = $nome = $email = "";
include "conexao.php";

$sql_buscar = "select * from jogo where id = id";
$todos_os_usuarios = mysqli_query($conexao, $sql_buscar);
while ($um_usuario = mysqli_fetch_assoc($todos_os_usuarios)) :
    $id = $um_usuario["id"];
    $nome = $um_usuario["nome"];
    $email = $um_usuario["email"];
endwhile;
mysqli_close($conexao);
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h6>editar do usuario Cód.: <?php echo $id; ?></h6>
        </div>
    </div>
    <div class='col-12'>
        <form action="salvar-jogo-editado.php?id=<?php echo $id; ?>" method="post">
        Título: <input name="titulo" value="<?php echo $titulo;?>">
        Foto: <input name="foto" value="<?php echo $foto;?>">
        Categoria: <input name="categoria" value="<?php echo $categoria;?>">
        Video: <input name="video" value="<?php echo $video;?>">
        <button type="submit">Salvar</button>
        </form> 
    </div>
</div>