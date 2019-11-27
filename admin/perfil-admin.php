
<html>
    <?php
    include_once 'nav-admin.php';
    //include_once '../login/Verifica.php';
    include_once '../classes/Admin.php';
    include_once '../classes/AdminBanco.php';


    error_reporting(E_ERROR | E_PARSE);


    session_start();
    $id_admin_login = $_SESSION['id_admin'];

    //var_dump($id_admin_login);die;

    $admin = new AdminBanco();
    $nome = $admin->selectById($id_admin_login);

    //var_dump($nome);die;

    foreach($nome as $b){

    ?>

    <body>
        <div class="direita-index">

            <h1 class="h1-user"> Olá, <?php echo $b['nome_admin_banco']; ?> </h1>
            <i class="far fas fa-user icone-perfil-admin"></i>
            <div class="box-perfil-user">
                <p class="p-user"> <?php echo $b['email_admin_banco']; ?>  <a href="perfil-admin-edit.php" class="button-edit-user"><i class="far fas fa-edit icone-editar-user"/></i></a> </p>
                <p class="p-user">  **********<a href="perfil-admin-edit.php" class="button-edit-user"><i class="far fas fa-edit icone-editar-user"/></i></a> </p>

                <a class="button-sair-user"> <i class="far fas fa-power-off button-sair-user"></i>Sair</a>
                <?php }?>
            </div>
        </div>
    </body>


    <script type="text/javascript" src="assets/js/estilo-admin.js"></script>
</html>
