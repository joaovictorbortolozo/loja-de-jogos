<?php
include "cabecalho.php";
include "menu-sistema.php";

$id = $_GET["id"];
$titulo = $categoria = $foto = $video = "";
include "conexao.php";

$sql_buscar = "select * from jogo where id = id";
$todos_os_jogos = mysqli_query($conexao, $sql_buscar);
while ($um_jogo = mysqli_fetch_assoc($todos_os_jogos)) :
    $titulo = $um_jogo["titulo"];
    $categoria = $um_jogo["Categoria"];
    $video = $um_jogo["video"];
    $foto = $um_jogo["foto"];
endwhile;
mysqli_close($conexao);
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h6>editar do Produto Cód.: <?php echo $id; ?></h6>
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