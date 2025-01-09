<?php
require_once 'database.php';

function cadastrarUsuario($nome, $email, $senha) {
    global $conn;
    
    // Verificar se o e-mail já existe ou validacao
    $stmt = $conn->prepare("SELECT id FROM usuarios WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    
    if ($stmt->rowCount() > 0) {
        return false; // E-mail já existe ou validação inicial ou falsa
    }
    
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha_hash);
    return $stmt->execute();
}

function listarUsuarios() {
    global $conn;
    $stmt = $conn->query("SELECT id, nome, email FROM usuarios");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}



function editarUsuario($id, $nome, $email) {
    global $conn;
    $stmt = $conn->prepare("UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    return $stmt->execute();
}

function excluirUsuario($id) {
    global $conn;
    $stmt = $conn->prepare("DELETE FROM usuarios WHERE id = :id");
    $stmt->bindParam(':id', $id);
    return $stmt->execute();
}
?>