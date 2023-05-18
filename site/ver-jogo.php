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
            <h6>Detalhes do jogo Cód.: <?php echo $_GET["id"]; ?></h6>
        </div>
    </div>
    <div class='col-12'>
        <h3>Título <?php echo $titulo; ?> </h3>
        <p><img src="<?php echo $foto; ?>" width="300"></p>
        <p>Categoria:<?php echo $categoria; ?></p>
        <p><a href="<?php echo $video; ?>">Ver o vídeo</p>
    </div>
</div>