<?php include_once 'nav-admin-c.php'; ?>

<div class="direita">
    <section class="form">
        <form action="../classes/cadastro-artesanato-c.php" method="POST" enctype="multipart/form-data" class="tableAdmin">
            <div class="tableHeader row">
                <h2 class="title">Artesanato - Editar</h2>
            </div>
            <div class="tableBody v02">
                <!--
                <p class="successArea">Success</p>
                <ul class="errorArea">
                    <li>ERROR 01</li>
                    <li>ERROR 02</li>
                </ul> -->
                <div class="cadastro-ok"> Editado com sucesso! Confira a alteração do Artesanato em "Artesanatos" no menu lateral. </div>
                <div class="formGroup row">
                    <p class="label">Título:</p>
                    <input type="text" name="titulo-cadastro-artesanato" class="input">
                </div>
                <div class="formGroup row">
                    <p class="label">Texto: </p>
                    <textarea name="texto-cadastro-artesanato" class="input"></textarea>
                </div>
                <div class="formGroup row">
                    <input type="file" name="img-cadastro-artesanato" class="input">
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