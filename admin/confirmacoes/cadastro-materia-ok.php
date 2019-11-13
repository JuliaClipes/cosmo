<?php include_once 'nav-admin-c.php';
//include_once '../login/Verifica.php';?>

<div class="direita">
    <section class="form">
        <form action="../classes/cadastro-materia-c.php" method="POST" enctype="multipart/form-data" class="tableAdmin">
            <div class="tableHeader row">
                <h2 class="title">Matérias - Adicionar</h2>
            </div>
            <div class="tableBody v02">
                <!--
                <p class="successArea">Success</p>
                <ul class="errorArea">
                    <li>ERROR 01</li>
                    <li>ERROR 02</li>
                </ul> -->
                <div class="cadastro-ok"> Cadastrado com sucesso! Veja a lista de Matérias em "Matérias" no menu lateral. </div>
                <div class="formGroup row">
                    <p class="label">Título:</p>
                    <input type="text" name="titulo-cadastro-materia" class="input">
                </div>
                <div class="formGroup row">
                    <p class="label">Texto: </p>
                    <textarea name="texto-cadastro-materia" class="input"></textarea>
                </div>
                <div class="formGroup row">
                    <input type="file" name="img-cadastro-materia" class="input">
                </div>



                <div class="tableHeader row">

                    <div class="btnArea">
                        <a href="index.php">  <button class="btnCancelar bg-1 text-fff">Cancelar </button> </a>
                        <button class="btnSalvar bg-1 text-fff"  >Cadastrar</button>
                    </div>
                </div>

            </div>

        </form>
    </section>
</div>
</body>

<?php include_once '../footer-admin.php'; ?>