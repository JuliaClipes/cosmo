<?php
include_once 'nav-admin.php';
include_once '../classes/ArtesanatoBanco.php';
// include_once '../login/Verifica.php';
session_start();
$id_artesanato = $_SESSION['id_artesanato_edita'];
$artesanatoBanco = new ArtesanatoBanco();
$lista_artesanato = $artesanatoBanco->selectById($id_artesanato);
?>


<div class="direita">
    <section class="form">
        <form action="../classes/edita-artesanato-c.php" method="POST" enctype="multipart/form-data" class="tableAdmin">
            <div class="tableHeader row">
                <h2 class="title">Artesanato - Editar</h2>
            </div>

            <div class="tableBody v02">
                <?php foreach ($lista_artesanato as $artesanato): ?>
                    <div class="formGroup row">
                        <input type="hidden" name="id-edita-artesanato" class="input" value="<?php echo $artesanato['id_artesanato_banco'] ?>">
                        <p class="label">Título:</p>
                        <input type="text" name="titulo-edita-artesanato" class="input" value="<?php echo $artesanato['titulo_artesanato_banco']; ?>">
                    </div>
                    <div class="formGroup row">
                        <p class="label">Texto: </p>
                        <textarea name="texto-edita-artesanato" class="input"><?php echo $artesanato['texto_artesanato_banco']; ?></textarea>
                    </div>

                    <div class="formGroup row">
                        <p class="label">Imagem Atual:</p>
                        <img src="assets/img-temporaria/<?php echo $artesanato['img_artesanatto_banco']; ?>" name="img-edita-artesanato-antiga" value="<?php echo  $artesanato['img_artesanatto_banco']; ?>" class="img-lista">
                        <input type="hidden" name="img-edita-artesanato-antiga" value="<?php echo  $artesanato['img_artesanatto_banco']; ?>">
                    </div>
                    <p class="label">Nova Imagem:</p>
                    <div class="formGroup row">
                        <input type="file" name="img-edita-artesanato" class="input">
                    </div>
                <?php endforeach; ?> 
            </div>




            <div class="tableHeader row">

                <div class="btnArea">
                    <a href="artesanatos-admin.php">  <button class="btnCancelar bg-1 text-fff">Cancelar </button> </a>
                    <button class="btnSalvar bg-1 text-fff"  >Alterar</button>
                </div>
            </div>

            </div>

        </form>
    </section>
</div>
</body>

<?php include_once 'footer-admin.php'; ?>