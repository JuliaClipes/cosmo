<html>
    <?php
    include_once 'nav.php';
    include_once 'classes/MateriaBanco.php';

    $materiaBanco = new MateriaBanco();
    $lista_materia = $materiaBanco->select3();
    ?>
    <div id="id02" class="modal">

        <form class="modal-content animate">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id02').style.display = 'none'" class="close" title="Close Modal">&times;</span>
                <img src="assets/img/logo.png" alt="Avatar" class="avatar">
            </div>

            <div class="conteudo-login">
                <p class="p-modal">Deseja receber notificações?</p>
                <label for="uname">Email</label>
                <input class="input-email" type="text" placeholder="Insira seu E-mail" name="uname" required>
                <a> <button type="submit" class="button-login">Receber!</button> </a> 
            </div>
        </form>
    </div>

    <section class="section-icones">
        <div class="conteudo">
            <div class="div-icones">
                <a href="materias.php"> <i class="far fas fa-newspaper icone"/></i></a>
                <a href="artesanatso.php"> <i class="far fas fa-hand-holding-heart icone"></i> </a>
                <a onClick="document.getElementById('id01').style.display = 'block'" style="width:auto;"> <i class="far fas fa-user icone"></i> </a>
            </div>
            <div class="div-icones">
                <h1 class="t-icone">Matérias</h1>
                <h1 class="t-icone">Artesanatos</h1>
                <h1 class="t-icone">Perfil</h1>
            </div>
        </div>
    </section>

    <hr>

    <section class="section">
        <div class="conteudo">
            <h1> Matérias Recentes </h1>
           
            <?php foreach ($lista_materia as $materia): ?>
                <div class="row">
                    <div class="materia-item">
                        <h3> <?php echo $materia->getTituloMateria(); ?> </h3>
                        <img src="admin/assets/img-temporaria/<?php echo $materia->getImgMateria(); ?>" class="img-exibir">
                        <p class="p-t"> <span>&nbsp;&nbsp;</span><?php echo $materia->getTextoMateria(); ?> <a class="c-continuar-lendo" href="materia.php"> Continuar lendo </a> </p> 

                    </div>
                <?php endforeach; ?> 
               
            </div>

    </section>
    <hr>


    <footer class="footer"> 
        <div class="conteudo">

            <div class="div-esquerda-contato"> 
                <article>
                    <p class="p-footer"> (11) 9 8765-4321 </p>
                    <p class="p-footer"> contato@cosmo.com </p>
                    <div class="icones-social">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-google"></a>
                        <a href="#" class="fa fa-instagram"></a>
                    </div>
                </article>

            </div>
            <div class="div-direita-contato">
                <div class="mapa-contato">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.8688845158754!2d-46.63158538497623!3d-23.64486617056659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5adda4c3cb95%3A0x31916ce58f719167!2sS%C3%A3o%20Paulo%20Expo!5e0!3m2!1spt-BR!2sbr!4v1568223053467!5m2!1spt-BR!2sbr" width="500" height="280" frameborder="0" style="border:0;" allowfullscreen=""></iframe>                </div>
            </div>
        </div>
    </footer>
    <div class="div-botao-topo">
        <button id="botao-topo" onclick="topFunction()">Topo</button>
    </div>


    <div class="assinatura">
        <p> JuliaClipes 2019 </p>
    </div>

    <script type="text/javascript" src="assets/js/estilo.js"></script>
    <script type="text/javascript" src="assets/js/jquery-1.11.3.min.js"></script>


