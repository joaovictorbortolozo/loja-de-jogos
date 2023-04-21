<?php
include "menu.php";
include "cabecalho.php";
?>

<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3000">
            <img src="img/forza.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <img src="img/forzam.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <img src="img/halo-infinite.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <img src="img/as.png" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="container mt-5">
    <div class="col-12 text-center">
        <h1>Jogos em destaque</h1>
    </div>
    <div class="col-12 text-center">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid esse suscipit fugit dignissimos, perspiciatis sit eveniet veniam, consectetur reiciendis doloremque sunt, officia distinctio? Corporis eos ad quam, optio impedit nostrum?</p>
    </div>
    <div class="row mt-5">


        <?php
        for ($i = 0; $i < 2; $i++) :
        ?>
            <div class="col-md-3 text-center">
                <img src="img/forzam.png" class="img-fluid">
                <h2 class="mb-1">Forza Motorsport</h2>
                <a href="nomedojogo.php" class="btn btn-primary mb-2">VER MAIS</a>
            </div>
            <div class="col-md-3 text-center">
                <img src="img/forza.png" class="img-fluid">
                <h2 class="mb-1">Forza horizon 5</h2>
                <a href="nomedojogo.php" class="btn btn-primary mb-2">VER MAIS</a>
            </div>

            <div class="col-md-3 text-center">
                <img src="img/as.png" class="img-fluid">
                <h2 class="mb-1">Assanssin's Creed</h2>
                <a href="nomedojogo.php" class="btn btn-primary mb-2">VER MAIS</a>
            </div>

            <div class="col-md-3 text-center">
                <img src="img/halo.png" class="img-fluid">
                <h2 class="mb-1">Halo 4 </h2>
                <a href="nomedojogo.php" class="btn btn-primary mb-5">VER MAIS</a>
            </div>
        <?php
        endfor;
        ?>
    </div>
</div>
<div class="col-12 text-center mb-3">
    <h2>Entre em contato</h2>
</div>
<div class="col-12 text-center">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente aliquid ipsa quos iure distinctio excepturi facilis nisi nemo. Expedita ipsam pariatur, harum dolorum corporis voluptas qui ipsum rerum suscipit officia!</p>
</div>
<div class="row">
    <form action="inserir-contato.php" method="post">
        <div class="col">
            <div class="mb-2">
                <input type="text" class="form-control" Name="nome" placeholder="Nome">
            </div>
            <div class="mb-3">
                <input type="tel" class="form-control" Name="telefone" placeholder="Telefone">
            </div>
            <div class="mb-2">
                <textarea class="form-control" name="duvidas" placeholder="Dúvida" rows="4"></textarea>
            </div>
            <div class="mb-2">
                <button type="submit" class="btn btn-sucesses w-25">
            </div>
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>