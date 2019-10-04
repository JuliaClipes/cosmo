<?php
session_start();

class Login extends ConexaoBanco {
    static function checkAuth(){        
        if(!isset($_SESSION['login'])){
            header("Location:login.php");
        }
    }    
    
    function verificaLogin($usuario){        
           
        $stmt = $this->conexao->prepare("SELECT * FROM usuario "
                . "WHERE senha_usuario_banco = :senha_usuario AND email_usuario_banco = :email_usuario");
 
        $stmt->bindValue(':senha_usuario', $usuario->getSenhaUsuario());
        $stmt->bindValue(':email_usuario', $usuario->getEmailUsuario());
        $stmt->execute();
    
        $linha = $stmt->fetch();
        
        if($linha){
            $usuario = new Usuario();
            $usuario->setNomeUsuario($linha['nome_usuario']);
            $usuario->setSenhaUsuario($linha['senha_usuario']);
            $usuario->setEmailUsuario($linha['email_usuario']);
            $usuario->setIdUsuario($linha['id_usuario']);
            
            $_SESSION['login'] = $usuario;
            
            return $usuario;
        }else {
            return false;
        }

    }
}

