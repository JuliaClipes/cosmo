<html>
<?php include_once 'nav.php'; ?>
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
                            <button class="btnSalvar bg-1 text-fff"  >Cadastrar</button>
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

   <?php 
        include_once 'classes/Usuario.php';
        include_once 'classes/UsuarioBanco.php';

   error_reporting(E_ERROR | E_PARSE);
   
//Verifica se veio tudo preenchido do formulário
if (isset($_POST['nome-cadastro-usuario']) && $_POST['nome-cadastro-usuario'] != "" 
        && isset($_POST['senha-cadastro-usuario']) && $_POST['senha-cadastro-usuario'] != ""
        && isset($_POST['email-cadastro-usuario']) && $_POST['email-cadastro-usuario'] != "") {
    
   

    $usuario_novo = new Usuario();
    $usuario_novo->setNomeUsuario($_POST['nome-cadastro-usuario']);
    $usuario_novo->setSenhaUsuario($_POST['senha-cadastro-usuario']);
    $usuario_novo->setEmailUsuario($_POST['email-cadastro-usuario']);

    $usuarioBanco = new UsuarioBanco();
    $retorno = $usuarioBanco->insert($usuario_novo);

    if($retorno==true){
        
        header('location:cadastro-usuario-ok.php');
    } else {
        header('location:cadastro-usuario-not.php');
    }
} else {
        header('location:cadastro-usuario-not.php');
    }
?>
</html>

