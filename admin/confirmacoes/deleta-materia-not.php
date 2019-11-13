 <?php
    include_once 'nav-admin-c.php';
    include_once '../../classes/MateriaBanco.php';
    //include_once '../login/Verifica.php';

    $materiaBanco = new MateriaBanco();
    $lista_materia = $materiaBanco->select();
    ?>
    <div class="direita">
        <section class="form">
            <form action="" method="GET" class="tableAdmin ">
                <div class="tableHeader row">
                    <h2 class="title">Lista de Matérias</h2>
                    <div class="btnArea">
                        <button class="btnAdicionar bg-1 text-fff"><a href="../materia-cadastro.php" class="a-button">Nova Matéria</a></button> 
                    </div>
                     
                </div>
                <div class="cadastro-not"> Não foi possível deletar essa matéria :( </div>
                <div class="tableBody">
                    <div class="row bg-1">
                        
                        <div class="cell2 cell-50 text-center text-fff">ID</div>
                        <div class="cell2 cell-100 text-center text-fff">Título</div> 
                        <div class="cell2 cell-100p text-center text-fff">Texto</div>
                         <div class="cell2 cell-100  text-fff">Imagem</div>


                        <div class="cell2 cell-100 text-center text-fff">Ações</div>
                    </div>
                    <?php foreach ($lista_materia as $materia): ?>
                    <ul class="list lv01">
                        <li class="row">
                            <div class="cell cell-50" name="id_materia_lista"> <?php echo $materia->getIdMateria(); ?></div>
                            <div class="cell cell-100 text-center"><?php echo $materia->getTituloMateria(); ?></div>
                            <div class="cell cell-100p text-center"><?php echo $materia->getTextoMateria(); ?></div>
                            <div class="cell cell-100"><img src="assets/img-temporaria/<?php echo $materia->getImgMateria(); ?>" class="img-lista"></div>

                            <div class="cell cell-100 text-center">
                                <a onclick="window.location='materia-editar.php?id=<?php echo $materia->getIdMateria(); ?>';"class="text editar-botao"> <i class="far fas fa-edit icone-acoes-admin"/></i></a>
                                <a href=""  onclick="confirm('Deseja exclir este registro?') ? window.location='../classes/deleta-materia-c.php?id=<?php echo $produto->getId(); ?>' : stop = false;" > <i class="far fas fa-trash icone-acoes-admin"/></i></a>
                            </div>

                        </li>
                    </ul>
                       <?php endforeach; ?> 
                </div>
            </form>



        </section>
    </div>




