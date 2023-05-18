<?php
include "cabecalho.php";
include "menu-sistema.php";
?>
<div class="container">
    <div class="row">
        <div class="col text-center mt-3 mb-3">
            <h1>Lista de Jogos</h1>
            <table class="table table-dark table-borderless">
                <td>Código</td>
                <td>Título</td>
                <td>Categoria</td>
                <td>Ações</td>

                <?php
                include "conexao.php";
                $sql_buscar = "select * from jogo";

                $todos_os_jogos = mysqli_query($conexao, $sql_buscar);
                while ($um_jogo = mysqli_fetch_assoc($todos_os_jogos)) :
                ?>
                    <tr>
                        <td> <?php echo $um_jogo["id"]; ?> </td>
                        <td> <?php echo $um_jogo["titulo"]; ?> </td>
                        <td> <?php echo $um_jogo["Categoria"]; ?> </td>
                        <td>
                            <a href="excluir-jogos.php?id= <?php echo $um_jogo["id"]; ?>">
                                <img src="img/lixo.png" width="50">
                            </a>
                            <a href="ver-jogo.php?id=<?php echo $um_jogo["id"]; ?>">
                                <img src="img/lupa.jpg" width="50">
                            </a>

                            <a href="editar-jogo.php?id=<?php echo $um_jogo["id"]; ?>">
                                <img src="img/lapis.png" width="50">
                            </a>
                        </td>
                    </tr>
                <?php
                endwhile;
                mysqli_close($conexao);
                ?>
            </table>
        </div>
    </div>
</div>