<?php

    session_start();

    include_once "./model/Conexao.class.php";
    include_once "./model/Entity.class.php";
    include_once "./view/includes/header.php";

    $vagaEntity = new Entity();
?>

<div class="first-section_index">
    <header class="header_index">
        <img src="" alt="logo">
        <div style="display: flex; align-items: center; gap: 35px; color: #000;">
            <a class="link-header_index" href="#">Home</a>
            <a class="link-header_index" href="#">Vídeos</a>
            <?php
                if(isset($_SESSION["user"])){
                    echo '<a class="link-header_index" href="./view/user/logout.php">Sair</a>';
                } else {
                    echo '<a class="link-header_index" href="./view/user/login.php">Login</a>';
                }
            ?>
        </div>
    </header>
    <div class="hero">
        <img src="" alt="">
        <div style="color: #fff;">
            <h2 style="font-size: 85px; font-weight: bold;">Tineco</h2>
            <p style="font-size: 21px;">Plantando seu futuro</p>
        </div>
    </div>
</div>
<div class="second-section_index">
    <img src="./assets/img/IMG_3049.JPG" style="max-height: 500px; border-radius: 10px;" alt="árvore">
    <p style="text-align: center; width: 400px;">Cada árvore plantada é um passo para a sustentabilidade, o futuro está nas nossas mãos... e nas raízes das árvores que plantamos</p>
</div>
<div class="third-section_index">
    <div class="card_index">
        <img src="./assets/img/IMG_3045.JPG" alt="">
        <h3>Provisão de Oxigênio e Purificação do Ar</h3>
        <p>As árvores desempenham um papel vital na produção de oxigênio e na purificação do ar. Através do processo de fotossíntese, as árvores absorvem dióxido de carbono e liberam oxigênio, essencial para a respiração de todos os seres vivos. Além disso, elas filtram poluentes do ar, como partículas de poeira, monóxido de carbono e dióxido de enxofre, melhorando a qualidade do ar e contribuindo para a saúde pública.</p>
    </div>
    <div class="card_index">
        <img src="./assets/img/IMG_3048.JPG" alt="">
        <h3>Preservação da Biodiversidade</h3>
        <p>As árvores são habitats indispensáveis para uma vasta gama de espécies. Elas fornecem abrigo e alimento para aves, mamíferos, insetos e muitas outras formas de vida, promovendo a biodiversidade. Florestas e áreas arborizadas são ecossistemas complexos onde diversas espécies coexistem, interagem e dependem umas das outras, formando uma teia de vida que sustenta a saúde ecológica do planeta.</p>
    </div>
    <div class="card_index">
        <img src="./assets/img/IMG_3052.JPG" alt="">
        <h3>Regulação do Clima e Conservação da Água</h3>
        <p>As árvores têm um impacto significativo na regulação do clima e na conservação da água. Elas ajudam a moderar a temperatura, fornecendo sombra e reduzindo o efeito de ilhas de calor urbano. Além disso, as raízes das árvores estabilizam o solo e aumentam a infiltração de água, reduzindo a erosão e o escoamento superficial. Isso contribui para a recarga dos aquíferos e para a manutenção dos fluxos de água em rios e lagos, fundamentais para a sustentabilidade dos recursos hídricos.</p>
    </div>
</div>

<?php

include_once "./view/includes/footer.php";
