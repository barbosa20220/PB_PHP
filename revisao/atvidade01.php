<?php
    session_start();

    class Alunos{
        private $nome;
        private $Sobrenome;
        private $nota;
        private $dataNacimento;

        public function __construct($nome, $Sobrenome, $nota,$dataNacimento){

            $this -> nome = $nome;
            $this -> Sobrenome= $Sobrenome;
            $this -> nota= $nota;
            $this -> dataNacimento = $dataNacimento;
        }

        public function salvar(){
            if(!isset($_SESSION['Alunos'])){
                $_SESSION['Alunos'] = [];
 
            }

            $_SESSION['Alunos'][] = [
                'nome' => $this -> nome,
                'Sobrenome' => $this -> Sobrenome,
                'nota' => $this -> nota,
                'dataNacimento' => $this -> dataNacimento,
            ];
        }

    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST['nome'];
        $Sobrenome = $_POST['Sobrenome'];
        $nota = $_POST['nota'];
        $dataNacimento = $_POST['dataNacimento'];

        $Alunos =  new Alunos($nome, $Sobrenome, $nota, $dataNacimento);
        $Alunos -> salvar ();
        
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
        <title>Cadastro de Alunos</title>
    </head>
    <body>
        <h2 style= "color:darkblue; font-family:Arial"> Cadastro de Alunos</h2>
        <form action="" method="POST" style="background: #f2f2f2; padding:15px
        border-radius:8px; width: 300px">
        Nome: <br>
        <input type="text" name="nome" valeu="" style="width:100%;
            margi-bottom:10px"><br>
        Sobrenome: <br>
        <input type="text" name="Sobrenome" valeu="" style="width:100%;
            margi-bottom:10px"><br>
        nota: <br>
        <input type="number" name="nota" valeu="" style="width:100%;
            margi-bottom:10px"><br>
        dataNacimento: <br>
         <input type="date" name="dataNacimento" valeu="" style="width:100%;
            margi-bottom:10px"><br>
        <button type="submit" style="background:green;
            color:white; padding: 5px 10px;">cadastrar</button>
        <button type="reset" style="background:green;
            color:white; padding: 5px 10px;">limpar</button>
        </form>

        
        <?php if(isset($_SESSION['Alunos'])):?>
        <table border="1">
            <thead>
                    <tr>
                        <th>nome</th>
                        <th>Sobrenome</th>
                        <th>Nota</th>
                        <th>dataNacimento</th>
                    </tr>
            </thead>
            <tbody>
                <?php foreach($_SESSION['Alunos'] as $Alunos): ?>
                <tr>                   
                    <td> <?=$Alunos['nome'] ?></td>
                    <td> <?=$Alunos['Sobrenome'] ?></td>
                    <td> <?=$Alunos['nota'] ?></td>
                    <td> <?=$Alunos['dataNacimento'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php endif; ?>
    </body>
</html>