<html>
     <?php
    include_once 'nav-admin.php';
    include_once '../classes/MateriaBanco.php';

    $materiaBanco = new MateriaBanco();
    $lista_materia = $materiaBanco->select();
    ?>
<body>
    <div class="direita">
        <section class="form">
            <form action="" method="GET" class="tableAdmin ">
                <div class="tableHeader row">
                    <h2 class="title">Lista de Matérias</h2>
                    <div class="btnArea">
                        <button class="btnSalvar bg-1 text-fff">Salvar</button>
                        <button class="btnAdicionar bg-1 text-fff"><a href="materia-cadastro.php" class="a-button">Nova Matéria</a></button> 
                    </div>
                </div>
                <div class="tableBody">
                    <div class="row bg-1">
                        <div class="cell2 cell-50 text-center text-fff">ID</div>
                        <div class="cell2 cell-100 text-center text-fff">Imagem</div>
                        <div class="cell2 cell-100 text-center text-fff">Título</div> 
                        <div class="cell2 cell-100p text-center text-fff">Texto</div>


                        <div class="cell2 cell-100 text-center text-fff">Ações</div>
                    </div>
                    <!--   BEGIN LOOP -->
                    <ul class="list lv01">
                        <li class="row">
                            <div class="cell cell-50 text-center">1</div>
                            <div class="cell cell-100 text-center">
                                <a href=""><img src="assets/img/materia-ilustra.png" alt="" class="cell-100p"></a>
                            </div>
                            <div class="cell cell-100">Matéria 1</div>
                            <div class="cell cell-100 text-center">
                            </div>
                            <div class="cell cell-100p">texto texto texto texto texto texto</div>
                            <div class="cell cell-100">
                            </div>

                            <div class="cell cell-100 text-center">
                                <a href="materias-edit.php" class="text editar-botao"> <i class="far fas fa-edit icone-acoes-admin"/></i></a>
                                <a href=""  onclick='return confirm("Tem certeza que quer remover este item?")'> <i class="far fas fa-trash icone-acoes-admin"/></i></a>
                            </div>

                        </li>
                    </ul>
                    <!--   END LOOP -->
                </div>
            </form>



        </section>
    </div>

</body>
</html>
