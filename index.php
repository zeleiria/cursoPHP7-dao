<?php

require_once("config.php");

// $sql = new Sql();
// $usuarios = $sql->select("SELECT * FROM tb_usuarios");
// echo json_encode($usuarios);

// Carrega um determinado usuário de determinado id
// $root = new Usuario();
// $root->loadbyId(12);
// echo $root;

// Carrega todos os usuários que existem no BD
// $lista = usuario::getList();
// echo json_encode($lista);

// Carrega uma lista de usuários, buscando pelo login
// $search = Usuario::search("jo");
// echo json_encode($search);

// Carrega um usuário utilizando o login e a senha
// $usuario = new Usuario();
// $usuario->login("margarida", "margarida");
// echo $usuario;

// Insere um novo usuário no banco de dados
// $aluno = new Usuario();
// $results = $aluno->inserirNovoUsuario("aluna7", "@aluna7");
// echo $results;

$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("professor2", "@professor2");
echo $usuario;

?>