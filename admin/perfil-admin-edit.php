<html>
    <?php include_once 'nav-admin.php'; ?>
<body>
    <div class="direita">
        <section class="form">
            <form action="" method="POST" enctype="multipart/form-data" class="tableAdmin">
                <div class="tableHeader row">
                    <h2 class="title">Administrador Perfil - Editar</h2>
                </div>
                <div class="tableBody v02">
                    <!--
                    <p class="successArea">Success</p>
                    <ul class="errorArea">
                        <li>ERROR 01</li>
                        <li>ERROR 02</li>
                    </ul> -->
                    <div class="formGroup row">
                        <p class="label">Nome:</p>
                        <input type="text" name="name" class="input">
                    </div>
                    <div class="formGroup row">
                        <p class="label">E-mail:</p>
                        <input type="text" name="name" class="input">
                    </div>
                    <div class="formGroup row">
                        <p class="label">Senha:</p>
                        <input type="password" name="name" class="input">
                    </div>



                    <div class="tableHeader row">

                        <div class="btnArea">
                            <button class="btnCancelar bg-1 text-fff"><a href="administradores-admin.php" class="a-button"> Cancelar</a></button> 
                            <button class="btnSalvar bg-1 text-fff" onclick='return confirm("Ddos alterados com sucesso! Confira no seu perfil.")'>Salvar</button>
                        </div>
                    </div>

                </div>

            </form>
        </section>
    </div>
</body>
</html>
