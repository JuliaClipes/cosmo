<html>
    <?php
    include_once 'nav-admin.php';
    include_once '../classes/AdminBanco.php';

    $adminBanco = new AdminBanco();
    $lista_admin = $adminBanco->select();
    ?>

    <body>
        <div class="direita">
            <section class="form">
                <form action="" method="GET" class="tableAdmin ">
                    <div class="tableHeader row">
                        <h2 class="title">Lista de Administradores</h2>
                        <div class="btnArea">
                            <button class="btnAdicionar bg-1 text-fff"><a href="administrador-cadastro.php" class="a-button">Novo Administrador</a></button> 
                        </div>
                    </div>
                    <div class="tableBody">
                        <div class="row bg-1">
                            <div class="cell2 cell-50 text-center text-fff">ID</div>
                            <div class="cell2 cell-100 text-center text-fff">Nome</div> 
                            <div class="cell2 cell-100p text-center text-fff">E-mail</div>


                            <div class="cell2 cell-100 text-center text-fff">Ação</div>
                        </div>
                        <!--   BEGIN LOOP -->
                        <?php foreach ($lista_admin as $admin): ?>
                            <ul class="list lv01">
                                <li class="row">
                                    <div class="cell cell-50 text-center"><?php echo $admin->getIdAdmin(); ?></div>
                                    <div class="cell cell-100"><?php echo $admin->getNomeAdmin(); ?></div>
                                    <div class="cell cell-100p  text-center"><?php echo $admin->getEmailAdmin(); ?></div>
                                    <div class="cell cell-100 text-center">
                                        <a onclick="window.location = 'administrador-cadastro.php?id=<?php echo $admin->getIdAdmin(); ?>';"> <i class="far fas fa-plus icone-acoes-admin"/></i></a>
                                    </div>
                                </li>
                            </ul>
                        <?php endforeach; ?> 
                        <!--   END LOOP -->
                    </div>
                </form>



            </section>
        </div>

    </body>
</html>
