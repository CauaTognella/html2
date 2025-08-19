<?php
echo '<h1>form-cadastro.php</h1>';

var_dump($_POST);
$formaNome          = $_POST['txtNome'];
$fortelefone        = $_POST['txtTelefone'];
$formsenha          = $_POST['txtSenha'];
$formconfirmarSenha = $_POST['txtConfirmarSenha'];


$dsn = 'mysql:dbname=db_formulario;host=127.0.0.1';

$usuario = 'root';
$senha = '';

$conn = new PDO($dsn, $usuario, $senha);


$scriptCadastro = "INSERT INTO tb_cadastro (nome, telefone, senha )
VALUES (:nome, :telefone, :senha)";

if ($formsenha != $formconfirmarSenha) {
    echo "As senhas não conferem.";
    header('Location: form-cadastro.php?erro=sim');
}

    else {
        echo "Cadastro realizado com sucesso!";
     
    

$scriptPreparado = $conn->prepare($scriptCadastro);
$scriptPreparado->execute(
    [
        'nome' => $formaNome,
        'telefone' => $fortelefone,
        'senha' => $formsenha,
        
    ]
);
header('Location: tabela.php');
    }


