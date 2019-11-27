<?php
include_once 'nav-admin.php';
include_once '../classes/MateriaBanco.php';
include_once '../classes/Materia.php';
//include_once '../login/Verifica.php';

session_start();
$id_materia = $_SESSION['id_materia_edita'];
$materiaBanco = new MateriaBanco();
$lista_materia = $materiaBanco->selectById($id_materia);
?>


<div class="direita">
    <section class="form">
        <form action="../classes/edita-materia-c.php" method="POST" enctype="multipart/form-data" class="tableAdmin">
            <div class="tableHeader row">
                <h2 class="title">Matérias - Editar</h2>
            </div>

            <div class="tableBody v02">
                <?php foreach ($lista_materia as $materia): ?>
                    <div class="formGroup row">

                        <input type="hidden" name="id-edita-materia" class="input" value="<?php echo $materia['id_materia_banco'] ?>">
                        <p class="label">Título:</p>
                        <input type="text" name="titulo-edita-materia" class="input" value="<?php echo $materia['titulo_materia_banco'] ?>">
                    </div>
                    <div class="formGroup row">
                        <p class="label">Texto: </p>
                        <textarea name="texto-edita-materia" class="input"><?php echo $materia['texto_materia_banco'] ?></textarea>
                    </div>

                    <div class="formGroup row">
                        <p class="label">Imagem Atual:</p>
                        <img src="assets/img-temporaria/<?php echo $materia->getImgMateria(); ?>" name="img-edita-materia-antiga" value="<?php echo $materia->getImgMateria(); ?>" class="img-lista">
                        <input type="hidden" name="img-edita-materia-antiga" value="<?php echo $materia->getImgMateria(); ?>">
                    </div>
                    <p class="label">Nova Imagem:</p>
                    <div class="formGroup row">
                        <input type="file" name="img-edita-materia" class="input">
                    </div>
                </div>
            
            <?php endforeach; ?> 



            <div class="tableHeader row">

                <div class="btnArea">
                    <a href="materias-admin.php">  <button class="btnCancelar bg-1 text-fff">Cancelar </button> </a>
                    <button class="btnSalvar bg-1 text-fff"  >Alterar</button>
                </div>
            </div>

            </div>

        </form>
    </section>
</div>
</body>

<?php include_once 'footer-admin.php'; ?>