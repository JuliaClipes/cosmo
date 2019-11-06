 <?php
    include_once 'nav-admin.php';
    include_once '../classes/ArtesanatoBanco.php';

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
                            <div class="cell cell-50"> <?php echo $artesanato->getIdArtesanato(); ?></div>
                            <div class="cell cell-100 text-center"><?php echo $artesanato->getTituloArtesanato(); ?></div>
                            <div class="cell cell-100p text-center"><?php echo $artesanato->getTextoArtesanato(); ?></div>
                            <div class="cell cell-100"><img src="assets/img-temporaria/<?php echo $artesanato->getImgArtesanato(); ?>" class="img-lista"></div>

                            <div class="cell cell-100 text-center">
                                <a href="artesanatos-edit.php" class="text editar-botao"> <i class="far fas fa-edit icone-acoes-admin"/></i></a>
                                <a href=""  onclick='return confirm("Tem certeza que quer remover este item?")'> <i class="far fas fa-trash icone-acoes-admin"/></i></a>
                            </div>

                        </li>
                    </ul>
                       <?php endforeach; ?> 
                </div>
            </form>



        </section>
    </div>

</body>
</html>
