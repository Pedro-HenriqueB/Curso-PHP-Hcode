<?php 
require_once("config.php");
/*Carrega um usuario
$root = new usuario();
$root->loadById(4);
echo $root;
*/

/*Carrega um lista de usuarios
$lista = Usuario::getList();
echo json_encode($lista);
*/

/**
* Carrega uma lista de usuarios buscando pelo login
* $search = Usuario::search("jo");
* echo json_encode($search);
*/

/*Carrega um usuario usando login e senha
$usuario = new Usuario();
$usuario->login('root', '!@#$');
echo $usuario;
*/

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

/* 
$aluno = new Usuario("aluno", "@lun0"); //Necessario criar procedure no SQL express
$aluno->insert();
echo $aluno;
*/

/* Alterar um usuario
$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("professor", "!@#$%^&*");
echo $usuario;
*/

$usuario = new Usuario();
$usuario->loadById(9);
$usuario->delete();
echo $usuario;

 ?>