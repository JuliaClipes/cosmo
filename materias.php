<html>
    <?php
    include_once 'nav.php';

    include_once 'classes/MateriaBanco.php';
    session_start();
    $materiaBanco = new MateriaBanco();
    $lista_materia = $materiaBanco->select();
    ?>
    <body>

        <section class="section">
            <div class="conteudo per-materia">
                <h1 class="h1-m"> Matérias</h1>
                <div class="row">
                    <?php foreach ($lista_materia as $materia): ?>

                        <div class="materia-item-m">
                            <h3> <?php echo $materia->getTituloMateria(); ?> </h3>
                            <p class="p-t"> <span>&nbsp;&nbsp;</span><?php echo substr($materia->getTextoMateria(), 0, 300) . "..."; ?> <a class="c-continuar-lendo" href="materia.php"> Continuar lendo </a></p> 
                            <button class="botao-favoritar" value="<?php echo $_SESSION['id_materia_usuario'] = $materia->getIdMateria(); ?>"> Favoritar <i class="far fas fa-star icone-editar-user"/></i> </button>
                        </div> 
                    <?php endforeach; ?>
                </div>
            </div>





        </section>
        <div>

            <button onclick="topFunction()" id="botao-topo">Topo</button>
        </div>
        <div class="centralizar-paginacao">
            <div class="pagination">
                <a href="#">&laquo;</a>
                <a href="#" class="active">1</a>
                <a href="#" >2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">6</a>
                <a href="#">&raquo;</a>
            </div>
        </div>


        <div class="assinatura">
            <p> JuliaClipes 2019 </p>
        </div>


    </body>

    <script src="assets/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/js/estilo.js"></script>

</html>
