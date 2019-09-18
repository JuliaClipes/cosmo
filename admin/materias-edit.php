
<html>
    <?php include_once 'nav-admin.php'; ?>
<body>
    <style>
        
    </style>
    <div class="direita">
        <section class="form">
            <form action="" method="POST" enctype="multipart/form-data" class="tableAdmin">
                <div class="tableHeader row">
                    <h2 class="title">Matéria - Adicionar e Editar</h2>
                </div>
                <div class="tableBody v02">
                    <!--
                    <p class="successArea">Success</p>
                    <ul class="errorArea">
                        <li>ERROR 01</li>
                        <li>ERROR 02</li>
                    </ul> -->

                    <section id="editor">
                        <div id='edit' style="margin-top: 30px;">
                            <h1>Matéria 1</h1>

                            <p>Texto texto Texto texto Texto texto Texto texto Texto texto Texto texto Texto texto Texto texto </p>

                            <p>Texto texto Texto texto Texto texto Texto texto Texto texto Texto texto Texto texto Texto texto Texto texto Texto texto Texto texto Texto texto 
                               Texto texto Texto texto Texto texto Texto texto Texto texto Texto texto Texto texto Texto texto Texto texto Texto texto Texto texto 
                            </p>

                            <p>Texto final</p>

                          
                        </div>
                    </section>
                    <div class="tableHeader row">

                        <div class="btnArea">
                            <button class="btnCancelar bg-1 text-fff"><a href="materias-admin.php" class="a-button"> Cancelar</a></button> 
                            <button class="btnSalvar bg-1 text-fff"> <a href="materias-admin.php" class="a-button">Salvar</a></button>
                        </div>
                    </div>

                </div>

            </form>
        </section>
    </div>
</body>
<script type="text/javascript" src="assets/js/plugins/froala_editor.min.js"></script>
<script type="text/javascript" src="assets/js/plugins/quick_insert.min.js"></script>
<script type="text/javascript" src="assets/js/plugins/image.min.js"></script>
<script type="text/javascript" src="assets/js/plugins/image_manager.min.js"></script>
<script type="text/javascript" src="assets/js/plugins/lists.min.js"></script>
<script type="text/javascript" src="assets/js/plugins/table.min.js"></script>

<script>
    (function () {
        new FroalaEditor("#edit")
    })()
</script>
</html>
