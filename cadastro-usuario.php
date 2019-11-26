<html>
    <?php include_once 'nav.php'; ?>
    <body>
        <section class="section">
            <div class="conteudo">
                <form action="classes/cadastro-usuario-c.php" method="POST" enctype="multipart/form-data" class="tableAdmin" name="cadastro">
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
                            <div class="g-recaptcha" class="g-recaptcha" id="rcaptcha" style="margin-left: 90px;"  data-sitekey="6LdCxMIUAAAAALQY61bDGdpPMJMjrWEp-ZA3O28p"></div>
                       <span id="captcha" style="margin-left:100px;color:red" />
                        </div>

                        <div class="tableHeader row">
                            <div class="btnArea">
                                <a href="index.php">  <button class="btnCancelar bg-1 text-fff">Cancelar </button> </a>
                                <button class="btnSalvar bg-1 text-fff" id="cadastrar" >Cadastrar</button>
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
           function get_action(cadastro) 
{
    var v = grecaptcha.getResponse();
    if(v.length === 0)
    {
        document.getElementById('captcha').innerHTML="You can't leave Captcha Code empty";
        return false;
    }
    else
    {
        document.getElementById('captcha').innerHTML="Captcha completed";
        return true; 
    }
}

        </script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>