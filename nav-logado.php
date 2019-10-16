<html>
<?php include_once 'login/login.php'; ?>
    <head>
        <title>Cosmo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
        <link rel='icon' type="image/png" sizes="32x32" href="assets/img/logo-roxo.png">
    </head>

    <section class="section-imagem-topo">
        <!--https://codepen.io/kaast/pen/mdbRezE-->
        <div class="gradiente">
            <img src="assets/img/logop2.png" class="logo"/>



            <nav class="menu sidenav">
                <a href="index.php"><span class="span_um menu">Início</span></a>
                <a href="materias.php"><span class="span menu">Matérias</span></a>
                <a href="artesanatos.php"> <span class="span__dois menu">Artesanatos</span> </a>
                <a href="perfil-usuario.php"> <span class="span__tres menu"> Perfil </span> </a>



            </nav>
            <form id="demo-2">
                <input type="search" placeholder="Search">
            </form>
        </div>

    </section>



    <div id="id01" class="modal">

        <form class="modal-content animate">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display = 'none'" class="close" title="Close Modal">&times;</span>
                <img src="assets/img/logo.png" alt="Avatar" class="avatar">
            </div>

            <div class="conteudo-login">
                <label for="uname">Email</label>
                <input class="input-email" type="text" placeholder="Insira seu E-mail" name="email_usuario" required>
            </div>
            <div class="conteudo-login">
                <label for="psw">Senha</label>
                <input class="input-senha"type="password" placeholder="Insira sua senha" name="senha_usuario" required>
            </div>
            <div class="conteudo-login">
                <p class="p-cadastrar"> Não é cadastrado? Realize seu cadastro <a class="a-cadastrar" href="cadastro-usuario.php"> AQUI </a>
            </div>
            <!--a href="perfil-usuario.html"> <button class="button-login">Login</button></a-->    
            <div class="conteudo-login">
                <button type="button" onclick="document.getElementById('id01').style.display = 'none'" class="cancelbtn button-login">Cancel</button>
                <a href="perfil-usuario.php" class="button-login" onclick='return <?php echo $msg ?>'>Login</a>


            </div>
        </form>
    </div>



    <a onScroll="document.getElementById('id02').style.display = 'block'" style="width:auto;"> </a>
   
  

</html> 