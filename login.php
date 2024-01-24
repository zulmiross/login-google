<?php 


require __DIR__. '/vendor/autoload.php';

use Google\Client as Google_Client;
use App\Session\User as SessionUser;

if(!isset($_POST['credential']) || !isset($_POST['g_csrf_token']))
{
    header('location: index.php');
    exit;
}


$cookie = $_COOKIE['g_csrf_token'];

if($_POST['g_csrf_token'] != $cookie)
{
    header('location: index.php');
    exit;
}

$client = new Google_Client(['client_id' => '236295201578-qs1vobvpg0eb349j0jnarosihr9btcig.apps.googleusercontent.com']);  
$payload = $client->verifyIdToken($_POST['credential']);

if($payload) 
{
    SessionUser::login($payload['name'], $payload['email']); 
    header('location: index.php');
    exit;
}

die('Problemas com a API Google');



?>