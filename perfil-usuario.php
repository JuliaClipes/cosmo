<html>
    <?php
    include_once 'nav-logado.php';
    include_once 'login/Verifica.php';
    include_once 'classes/Usuario.php';
    include_once 'classes/UsuarioBanco.php';

    session_start();
    $id_usuario_login = $_SESSION['id_user'];

    $usuario = new UsuarioBanco();
    $nome = $usuario->selectById($id_usuario_login);

    //var_dump($nome);

    $novo_array = array();
    array_walk_recursive($nome, function ($item, $key) {
        global $novo_array;
        $novo_array[] = $item;
    });
    ?>
    <body>
        <section class="section">
            <div class="conteudo">
                <div> <h1 class="h1-perfil"> Perfil </h1></div>
                <div class="esquerda">
                    <h1 class="h1-user"> Olá, <?php echo $novo_array[3]; ?> </h1>
                    <img class="img-user-perfil" src="assets/img/user-perfil.png">
                    <div class="box-perfil-user">
                        <p class="p-user"> <?php echo $novo_array[3]; ?> <a href="perfil-usuario-edit.php" class="button-edit-user" href="perfil-usuario-edit.php"><i class="far fas fa-edit icone-editar-user"/></i></a> </p>
                        <p class="p-user"> <?php echo $novo_array[6]; ?><a href="perfil-usuario-edit.php" class="button-edit-user"><i class="far fas fa-edit icone-editar-user"/></i></a> </p>
                        <a href="index.php" class="button-sair-user"> <i class="far fas fa-power-off button-sair-user"></i>Sair</a>
                    </div>
                </div>
                <div class="direita">
                    <h1 class="h1-user-tabela"> Conteúdo Salvo </h1>
                    <table id="customers">
                        <tr>
                            <th>Título</th>
                            <th>Data</th>
                            <th>Ações</th>
                        </tr>
                        <tr>
                            <td>Teste Título</td>
                            <td>00/00/0000</td>
                            <td><a style="text-decoration: none;" href="materia.php"> 
                                    <i class="far fas fa-eye icone-perfil"/></i>
                                </a>
                                <a href="" class="text excluir-botao" onclick='return confirm("Tem certeza que quer remover este item?")'> 
                                    <i class="far fas fa-trash icone-perfil"/></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Teste Título</td>
                            <td>00/00/0000</td>
                            <td><a style="text-decoration: none;" href="materia.php"> 
                                    <i class="far fas fa-eye icone-perfil"/></i>
                                </a>
                                <a href="" class="text excluir-botao" onclick='return confirm("Tem certeza que quer remover este item?")'> 
                                    <i class="far fas fa-trash icone-perfil"/></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Teste Título</td>
                            <td>00/00/0000</td>
                            <td><a style="text-decoration: none;" href="materia.php"> 
                                    <i class="far fas fa-eye icone-perfil"/></i>
                                </a>
                                <a href="" class="text excluir-botao" onclick='return confirm("Tem certeza que quer remover este item?")'> 
                                    <i class="far fas fa-trash icone-perfil"/></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Teste Título</td>
                            <td>00/00/0000</td>
                            <td><a style="text-decoration: none;" href="materia.php"> 
                                    <i class="far fas fa-eye icone-perfil"/></i>
                                </a>
                                <a href="" class="text excluir-botao" onclick='return confirm("Tem certeza que quer remover este item?")'> 
                                    <i class="far fas fa-trash icone-perfil"/></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Teste Título</td>
                            <td>00/00/0000</td>
                            <td><a style="text-decoration: none;" href="materia.php"> 
                                    <i class="far fas fa-eye icone-perfil"/></i>
                                </a>
                                <a href="" class="text excluir-botao" onclick='return confirm("Tem certeza que quer remover este item?")'> 
                                    <i class="far fas fa-trash icone-perfil"/></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Teste Título</td>
                            <td>00/00/0000</td>
                            <td><a style="text-decoration: none;" href="materia.php"> 
                                    <i class="far fas fa-eye icone-perfil"/></i>
                                </a>
                                <a href="" class="text excluir-botao" onclick='return confirm("Tem certeza que quer remover este item?")'> 
                                    <i class="far fas fa-trash icone-perfil"/></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Teste Título</td>
                            <td>00/00/0000</td>
                            <td><a style="text-decoration: none;" href="materia.php"> 
                                    <i class="far fas fa-eye icone-perfil"/></i>
                                </a>
                                <a href="" class="text excluir-botao" onclick='return confirm("Tem certeza que quer remover este item?")'> 
                                    <i class="far fas fa-trash icone-perfil"/></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Teste Título</td>
                            <td>00/00/0000</td>
                            <td><a style="text-decoration: none;" href="materia.php"> 
                                    <i class="far fas fa-eye icone-perfil"/></i>
                                </a>
                                <a href="" class="text excluir-botao" onclick='return confirm("Tem certeza que quer remover este item?")'> 
                                    <i class="far fas fa-trash icone-perfil"/></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Teste Título</td>
                            <td>00/00/0000</td>
                            <td><a style="text-decoration: none;" href="materia.php"> 
                                    <i class="far fas fa-eye icone-perfil"/></i>
                                </a>
                                <a href="" class="text excluir-botao" onclick='return confirm("Tem certeza que quer remover este item?")'> 
                                    <i class="far fas fa-trash icone-perfil"/></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Teste Título</td>
                            <td>00/00/0000</td>
                            <td><a style="text-decoration: none;" href="materia.php"> 
                                    <i class="far fas fa-eye icone-perfil"/></i>
                                </a>
                                <a href="" class="text excluir-botao" onclick='return confirm("Tem certeza que quer remover este item?")'> 
                                    <i class="far fas fa-trash icone-perfil"/></i>
                                </a>
                            </td>
                        </tr>
                    </table>

                </div>



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
