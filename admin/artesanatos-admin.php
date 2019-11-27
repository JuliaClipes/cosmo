<?php
include_once 'nav-admin.php';
include_once '../classes/ArtesanatoBanco.php';
// include_once '../login/Verifica.php';
session_start();
$artesanatoBanco = new ArtesanatoBanco();
$lista_artesanato = $artesanatoBanco->select();
?>
<div class="direita">
    <section class="form">
        <form action="" method="GET" class="tableAdmin ">
            <div class="tableHeader row">
                <h2 class="title">Lista de Artesanatos</h2>
                <div class="btnArea">
                    <button class="btnAdicionar bg-1 text-fff"><a href="artesanato-cadastro.php" class="a-button">Novo Artesanato</a></button> 
                </div>
            </div>
            <div class="tableBody">
                <div class="row bg-1">
                    <div class="cell2 cell-50 text-center text-fff">ID</div>
                    <div class="cell2 cell-100 text-center text-fff">Título</div> 
                    <div class="cell2 cell-100p text-center text-fff">Texto</div>
                    <div class="cell2 cell-100  text-fff">Imagem</div>


                    <div class="cell2 cell-100 text-center text-fff">Ações</div>
                </div>
                <?php foreach ($lista_artesanato as $artesanato): ?>
                    <ul class="list lv01">
                        <li class="row">
                            <div class="cell cell-50"> <?php echo  $_SESSION['id_artesanato_edita']=$artesanato->getIdArtesanato(); ?></div>
                            <div class="cell cell-100 text-center"><?php echo $artesanato->getTituloArtesanato(); ?></div>
                            <div class="cell cell-100p text-center"><?php echo substr($artesanato->getTextoArtesanato(),0,70)."..."; ?></div>
                            <div class="cell cell-100"><img src="assets/img-temporaria/<?php echo $artesanato->getImgArtesanato(); ?>" class="img-lista"></div>

                            <div class="cell cell-100 text-center">
                                <a onclick="window.location = 'artesanato-editar.php?id=<?php echo $artesanato->getIdArtesanato(); ?>';" class="text editar-botao"> <i class="far fas fa-edit icone-acoes-admin"/></i></a>
                                <a onclick="confirm('Deseja exclir este registro?') ? window.location = '../classes/deleta-artesanato-c.php?id=<?php echo $artesanato->getIdArtesanato(); ?>' : stop = false;" > <i class="far fas fa-trash icone-acoes-admin"/></i></a>
                            </div>

                        </li>
                    </ul>
                <?php endforeach; ?> 
            </div>
        </form>



    </section>
</div>

