<?php
    session_start();

    class Usuario{
        private $nome;
        private $email;
        private $senha;

        public function __construct($nome, $email, $senha){
            $this -> nome = $nome;
            $this -> email = $email;
            $this -> senha = $senha;
        }

        public function salvar(){
            if(!isset($_SESSION['usuarios'])){
                $_SESSION['usuarios'] = [];

            }

            $_SESSION['usuarios'][] = [
                'nome' => $this -> nome,
                'email' => $this -> email,
                'senha' => $this -> senha
            ];
        }

    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $usuario =  new Usuario($nome, $email, $senha);
        $usuario -> salvar ();
        
    }

    if(isset($_GET['reset'])){
        session_destroy();
    }


    echo "<pre>";
    print_r ($_SESSION);
    echo "</pre>";
?>

<!DOCTYPE html>
<html lang= "pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Formulario</title>
    </head>
    <body>
        <h2 style= "color:darkblue; font-family:Arial"> Cadastro Usuario</h2>
        <form action="" method="POST" style="background: #f2f2f2; padding:15px
        border-radius:8px; width: 300px">
        Nome: <br>
        <input type="text" name="nome" valeu="" style="width:100%;
            margi-bottom:10px"><br>
        email: <br>
        <input type="text" name="email" valeu="" style="width:100%;
            margi-bottom:10px"><br>
        senha: <br>
        <input type="text" name="senha" valeu="" style="width:100%;
            margi-bottom:10px"><br>
        <button type="submit" style="background:green;
            color:white; padding: 5px 10px;">cadastrar</button>
        <button type="reset" style="background:green;
            color:white; padding: 5px 10px;">limpar</button>
        </form>
        <?php if(isset($_SESSION['usuarios'])):?>
        <table border="1">
            <thead>
                    <tr>
                        <th>nome</th>
                        <th>email</th>
                        <th>senha</th>
                    </tr>
            </thead>
            <tbody>
                <?php // foreach($_SESSION['usuarios'] as $usuario): ?>
                <tr>                   
                    <td> Leo </td>
                    <td> Leo@leo.com </td>
                    <td> 123 </td>
                </tr>
                <?php // endforeach; ?>
            </tbody>
        </table>
        <?php endif; ?>
    </body>
</html>