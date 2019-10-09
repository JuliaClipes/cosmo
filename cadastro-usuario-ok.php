<html>
   <?php include_once 'nav.php'; 
?>
<body>
    <section class="section">
        <div class="conteudo">
            <form action="" method="POST" enctype="multipart/form-data" class="tableAdmin">
                <div class="tableHeader row">
                    <h2 class="title">Cadastro de Usuário</h2>
                </div>
                <div class="tableBody v02">
                    <!--
                    <p class="successArea">Success</p>
                    <ul class="errorArea">
                        <li>ERROR 01</li>
                        <li>ERROR 02</li>
                    </ul> -->
                    <div class="cadastro-ok"> Cadastrado com sucesso! Faça login em "Entrar" no menu superior. </div>
                    <div class="formGroup row">
                        <p class="label">Nome:</p>
                        <input type="text" name="nome-cadastro-usuario" class="input">
                    </div>
                    <div class="formGroup row">
                        <p class="label">E-mail:</p>
                        <input type="text" name="email-cadastro-usuario" class="input">
                    </div>
                    <div class="formGroup row">
                        <p class="label">Senha:</p>
                        <input type="password" name="senha-cadastro-usuario" class="input">
                    </div>
                    <div class="tableHeader row">
                        <div class="btnArea">
                            <a href="index.php">  <button class="btnCancelar bg-1 text-fff">Cancelar </button> </a>
                            <button class="btnSalvar bg-1 text-fff" onclick='return confirm("Cadastrado com sucesso!")' >Cadastrar</button>
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

