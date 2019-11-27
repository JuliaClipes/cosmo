<html>
    <?php
    include_once 'nav.php';
    include_once 'classes/ArtesanatoBanco.php';
    
    session_start();
    $id_artesanato = $_SESSION['id_artesanato_usuario'];
    $artesanatoBanco = new ArtesanatoBanco();
    $lista_artesanato = $artesanatoBanco->selectById($id_artesanato);
    
    
    
    ?>
    <body>

        <section class="section">
            <div class="conteudo">
                 <?php foreach ($lista_artesanato as $artesanato): ?>
                <div class="materia-especifica">
                    <h2><?php echo $artesanato['titulo_artesanato_banco']; ?></h2>
                    <img src="assets/img/<?php echo $artesanato['img_artesanato_banco']; ?>">

                    <p class="p-t"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span><?php echo $artesanato['texto_artesanato_banco']; ?></p>
                    
                    <button class="botao-favoritar"  onclick='return confirm("Item adicionado com sucesso! Confira no seu perfil.")'> Favoritar <i class="far fas fa-star icone-editar-user"/></i> </button>

                </div>
                 <?php endforeach; ?> 

            </div>


        </section>
        <div class="div-botao-topo">

            <button onclick="topFunction()" id="botao-topo">Topo</button>
        </div>

        <div class="assinatura">
            <p> JuliaClipes 2019 </p>
        </div>


    </body>

    <script type="text/javascript" src="assets/js/estilo.js"></script>
    <script type="text/javascript" src="assets/js/jquery-1.11.3.js"></script>

</html>
