<?php include_once 'nav-admin-c.php'; ?>
        <div class="direita">
            <section class="form">
                <form action="classes/cadastro-admin-c.php" method="POST" enctype="multipart/form-data" class="tableAdmin">
                    <div class="tableHeader row">
                        <h2 class="title">Administrador - Cadastrar</h2>
                    </div>
                    <div class="tableBody v02">
                        <!--
                        <p class="successArea">Success</p>
                        <ul class="errorArea">
                            <li>ERROR 01</li>
                            <li>ERROR 02</li>
                        </ul> -->
                        <div class="cadastro-not"> Erro ao cadastrar. Verifique os dados informados e tente novamente.</div>
                        <div class="formGroup row">
                            <p class="label">Nome:</p>
                            <input type="text" name="nome-cadastro-admin" class="input">
                        </div>
                        <div class="formGroup row">
                            <p class="label">E-mail:</p>
                            <input type="text" name="email-cadastro-admin" class="input">
                        </div>
                        <div class="formGroup row">
                            <p class="label">Senha:</p>
                            <input type="password" name="senha-cadastro-admin" class="input">
                        </div>
                        <div class="tableHeader row">
                            <div class="btnArea">
                                <a href="index.php">  <button class="btnCancelar bg-1 text-fff">Cancelar </button> </a>
                                <button class="btnSalvar bg-1 text-fff"  >Cadastrar</button>

                            </div>
                        </div>

                </form>
            </section>
        </div>
  
<?php include_once '../footer-admin.php'; ?>