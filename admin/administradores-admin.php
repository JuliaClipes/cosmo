<html>
    <?php include_once 'nav-admin.php'; ?>
<body>
    <div class="direita">
        <section class="form">
            <form action="" method="GET" class="tableAdmin ">
                <div class="tableHeader row">
                    <h2 class="title">Lista de Administradores</h2>
                    <div class="btnArea">
                        <button class="btnSalvar bg-1 text-fff">Salvar</button>
                        <button class="btnAdicionar bg-1 text-fff"><a href="administrador-edit.php" class="a-button">Novo Administrador</a></button> 
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
                    <ul class="list lv01">
                        <li class="row">
                            <div class="cell cell-50 text-center">1</div>
                            <div class="cell cell-100">Admin 1</div>
                            <div class="cell cell-100 text-center">
                            </div>
                            <div class="cell cell-100p">adminum@cosmo.com</div>
                            <div class="cell cell-100">
                            </div>

                            <div class="cell cell-100 text-center">
                                <a href="administrador-edit.php"> <i class="far fas fa-plus icone-acoes-admin"/></i></a>
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