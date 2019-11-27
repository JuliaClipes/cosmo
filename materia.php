<html>
    <?php
    include_once 'nav.php';
    include_once 'classes/MateriaBanco.php';
    
    session_start();
    $id_materia = $_SESSION['id_materia_usuario'];
    $materiaBanco = new MateriaBanco();
    $lista_materia = $materiaBanco->selectById($id_materia);
    
    
    
    ?>
    <body>

        <section class="section">
            <div class="conteudo">
                 <?php foreach ($lista_materia as $materia): ?>
                <div class="materia-especifica">
                    <h2><?php echo $materia['titulo_materia_banco']; ?></h2>
                    <img src="assets/img/<?php echo $materia['img_materia_banco']; ?>">

                    <p class="p-t"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span><?php echo $materia['texto_materia_banco']; ?></p>
                    
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
