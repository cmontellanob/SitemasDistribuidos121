<?php
require_once 'vendor/autoload.php';

use Firebase\JWT\JWT;

$time = time();
$key = 'Laversecreta';

$usuario = $_POST['usuario'];
$password = $_POST['password'];

if ($usuario=='SIS-258' and $password=='distribuidos')
{
$token = array(
    'iat' => $time, // Tiempo que inició el token
    'exp' => $time + (120*60), // Tiempo que expirará el token (+1 hora)
    'data' => [ // información del usuario
        'id' => 1,
        'name' => 'Eduardo'
    ] 

);

$jwt = JWT::encode($token, $key);
echo $jwt;
$data = JWT::decode($jwt, $key, array('HS256'));
}
echo "error";

