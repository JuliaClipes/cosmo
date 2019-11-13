
<html>
    <?php include_once 'nav.php';
    include_once 'login/Verifica.php';
    ?>
    <body>
        <section class="section">
            <div class="conteudo">
                <form action="" method="POST" enctype="multipart/form-data" class="tableAdmin">
                    <div class="tableHeader row">
                        <h2 class="title">Usuário Perfil - Editar</h2>
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
                                <a href="perfil-usuario.php">  <button class="btnCancelar bg-1 text-fff">Cancelar </button> </a>
                                <button class="btnSalvar bg-1 text-fff">Salvar</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </section>

        <div class="div-botao-topo">

            <button onclick="topFunction()" id="botao-topo">Topo</button>
        </div>

        <div class="assinatura">
            <p> JuliaClipes 2019 </p>
        </div>

    </body>
    <script type="text/javascript" src="assets/js/estilo.js"></script>
    <script src="assets/js/jquery-1.11.3.min.js" type="text/javascript"></script>


</html>

