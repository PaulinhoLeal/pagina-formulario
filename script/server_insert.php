<?php
$banco = new PDO('sqlite:db_formulario.db');

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$data_nascimento = $_POST['data_nascimento'];
$rd_genero = $_POST['rd_genero'];
$tipo_inscricao = $_POST['tipo_inscricao'];
$mensagem = $_POST['mensagem'];

$sql = "INSERT INTO inscrito (nome, email, telefone, data_nascimento, rd_genero, tipo_inscricao, mensagem)
        VALUES  (:nome, :email, :telefone, :data_nascimento, :rd_genero, :tipo_inscricao, :mensagem)";

$stmt = $banco->prepare($sql);

$stmt->execute([
    ':nome'=> $nome,
    ':email' => $email,
    ':telefone' =>$telefone, 
    ':data_nascimento' => $data_nascimento,
    ':rd_genero' => $rd_genero, 
    ':tipo_inscricao' => $tipo_inscricao,
    ':mensagem' => $mensagem
]);

echo "dados inseridos com sucesso";
