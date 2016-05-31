<?php

require_once('usuarios_model.php');
require_once('aulas_model.php');
# Traer los datos de un usuario. Retrieve, get, select
$usuario1 = new Usuario();
$usuario1->get('user@email.com');
print $usuario1->nombre . ' ' . $usuario1->apellido . ' existe<br>';

# Crear un nuevo usuario. Alta, insert.
$new_user_data = array(
	'nombre'=>'Alberto',
	'apellido'=>'Jacinto',
	'email'=>'albert2000@mail.com',
	'clave'=>'jacaranda'
);
$usuario2 = new Usuario();
$usuario2->set($new_user_data);
$usuario2->get($new_user_data['email']);
print $usuario2->nombre . ' ' . $usuario2->apellido . ' ha sido creado<br>';

# Editar los datos de un usuario existente. Update, modificar.
$edit_user_data = array(
	'nombre'=>'Gabriel',
	'apellido'=>'Lopez',
	'email'=>'dperez@gmail.com',
	'clave'=>'69274'
);
$usuario3 = new Usuario();
$usuario3->edit($edit_user_data);
$usuario3->get($edit_user_data['email']);
print $usuario3->nombre . ' ' . $usuario3->apellido . ' ha sido editado<br>';

# Eliminar un usuario
$usuario4 = new Usuario();
$usuario4->get('lei@mail.com');
$usuario4->delete('lei@mail.com');
print $usuario4->nombre.' ' . $usuario4->apellido.' ha sido eliminado';
echo "<br>AULAS";
$aula = new Aulas();
$aula->get(1);
print $aula->id . ' ' . $aula->num . "-" .$aula->superficie .'m2 ha sido recuperado<br>';
?>