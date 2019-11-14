<html>
   <?php include_once 'nav.php'; 
?>
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
                    <div class="cadastro-not"> Erro ao cadastrar. Verifique os dados informados e tente novamente.</div>
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
               <div class="formGroup row">
                            <div class="g-recaptcha" data-sitekey="6LdCxMIUAAAAALQY61bDGdpPMJMjrWEp-ZA3O28p" id="g-recaptcha-response"></div>
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




        <script>
            <script type="text/jav                          ascript">
                var onloadCallback =                               func tion
                        () {                     a                                  lert ("gr
                        ecaptcha is ready!                                        ");
                        };
 
                </script>
                    <script          >
         
                            window.onload = function()           {
                        var recaptcha = document.forms["cadastro"]["g-recaptcha-response"];
                recaptcha.required = true;
                recaptcha.oninvalid = function(e)           {
                // fazer algo, no caso to dando um aler        
                        t
                alert("Por favor complete o reCaptcha");
               }
                            }
                            </script>
        </script        >
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>