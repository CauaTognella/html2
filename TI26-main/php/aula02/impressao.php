
<?php
include './tamplete/header.php';
?>
    <?php
        // $nomeFormulario = $_POST['txtNome'];
        // $telefoneForm = $_POST['txtTelefone'];
        // $usuarioForm = $_POST['txtUsuario'];
        // $senhaForm = $_POST['txtSenha'];
        // $senhaConfirmarForm = $_POST['txtConfirmarSenha'];

        $id= $_GET['idConsulta'];
        $DSN = 'mysql:dbname=db_cadastro;host=127.0.0.1';
        $usuario = 'root';
        $senha = '';
        $conexao = new PDO ($DSN, $usuario, $senha);

        $script = "SELECT * FROM tb_usuarios WHERE id = $id";
        $resultadoc = $conexao->query($script)->fetch();

    ?>
    <main class="conteudo-principal container d-flex justify-content-center align-items-center">
        <section class="formulario d-flex flex-column justify-content-center bg-white p-4">
            <h1 class="fs-2 text-center mb-3">Impressão</h1>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <h3 class="fs-6 text-dark">Nome</h3>
                    <span class="text-dark-emphasis fs-5"><?= $resultadoc['nome'] ?></span>
                </div>
                <div class="col-md-6">
                    <h3 class="fs-6 text-dark">Telefone</h3>
                    <span class="text-dark-emphasis fs-5"><?= $resultadoc['telefone'] ?></span>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <h3 class="fs-6 text-dark">Usuário</h3>
                    <span class="text-dark-emphasis fs-5"><?= $resultadoc['usuario'] ?></span>
                </div>
                
            </div>

            <hr>

           
            <div class="grouo-btn d-flex justify-content-end">
                <button class="btn btn-primary">Enviar</button>
            </div>
        </section>
    </main>
</body>

</html>
<?php
include './tamplete/footer.php';
?>
