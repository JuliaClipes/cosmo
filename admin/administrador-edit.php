<html>
    <?php include_once 'nav-admin.php'; 
    
    if (isset($_POST['nome-cadastro-admin']) && $_POST['nome-cadastro-admin'] != "" 
        && isset($_POST['senha-cadastro-admin']) && $_POST['senha-cadastro-admin'] != ""
        && isset($_POST['email-cadastro-admin']) && $_POST['email-cadastro-admin'] != "") {

    $admin_novo = new Admin();
    $admin_novo->setNomeAdmin($_POST['nome-cadastro-admin']);
    $admin_novo->setSenhaAdmin($_POST['senha-cadastro-admin']);
    $admin_novo->setEmailAdmin($_POST['email-cadastro-admin']);

    $adminBanco = new AdminBanco();
    $adminBanco->insert($admin_novo);
}
?>
<body>
    <div class="direita">
        <section class="form">
            <form action="" method="POST" enctype="multipart/form-data" class="tableAdmin">
                <div class="tableHeader row">
                    <h2 class="title">Administradores - Adicionar</h2>
                </div>
                <div class="tableBody v02">
                    <!--
                    <p class="successArea">Success</p>
                    <ul class="errorArea">
                        <li>ERROR 01</li>
                        <li>ERROR 02</li>
                    </ul> -->
                    <div class="formGroup row">
                        <p class="label">Nome</p>
                        <input type="text" name="nome-cadastro-administrador" class="input">
                    </div>
                    <div class="formGroup row">
                        <p class="label">E-mail</p>
                        <input type="text" name="email-cadastro-administrador" class="input">
                    </div>
                    <div class="formGroup row">
                        <p class="label">Senha</p>
                        <input type="password" name="senha-cadastro-administrador" class="input">
                    </div>



                    <div class="tableHeader row">

                        <div class="btnArea">
                            <button class="btnCancelar bg-1 text-fff"><a href="administradores-admin.php" class="a-button"> Cancelar</a></button> 
                            <button class="btnSalvar bg-1 text-fff" onclick='return confirm("Administrador adicionado com sucesso! Confira em Administradores")'>Salvar</button>
                        </div>
                    </div>

                </div>

            </form>
        </section>
    </div>
</body>
</html>
