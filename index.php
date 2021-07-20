<?php
include 'conexao.php';

if ($_POST) {
    if ($_POST['nomePessoa'] != null && $_POST['cpf'] != null) {
        $nome = $_POST['nomePessoa'];
        $cpf = $_POST['cpf'];
        $insercao = "INSERT pessoa(nome, cpf) VALUES ('$nome' , '$cpf')";
        $ins = $mysqli->query($insercao) or die($mysqli->error);
    } else {
        echo "Dados inválidos!";
        $nome = "";
        $cpf = "";
    }
}


$consulta = "SELECT * FROM pessoa";
$con = $mysqli->query($consulta) or die($mysqli->error);

?>
<!doctype html>
<html lang="pt-BR">

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="./css/style.css">
        <title>Novo Título!</title>
    </head>

    <body>
        <div id="contanier">
            <div id="box">
                <h1>Cadastro de Usuário</h1>
                <table id="tabela1" border="1">
                    <h2>Usuários Cadastrados</h2>
                    <tr>
                        <th>Nome</th>
                        <th>CPF</th>
                    </tr>
                    <?php
                    while ($dado = $con->fetch_array()) {
                    ?>
                        <tr>
                            <td> <?php echo $dado["nome"]; ?> </td>
                            <td> <?php echo $dado["cpf"]; ?> </td>
                        </tr>
                    <?php }
                    ?>
                </table>
                <br>
                <form action="index.php" method="POST">
                    <label id="labelNome" for="nome">Nome: </label>
                    <input type="text" id="nome" name="nomePessoa" id="et_nome">
                    <br>
                    <label id="labelCpf" for="cpf">CPF:</label>
                    <input type="number" max="99999999999" maxlength="11" name="cpf" id="et_cpf">
                    <br>
                    <button id="enviar" onclick="clicar()" type="submit">Cadasrar!</button>
                </form>
            </div>
        </div>
    </body>

</html>