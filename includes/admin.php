<h1>Login Google</h1>

<?php

    $user = \App\Session\User::getUser();  
 
?>

<p>Seja bem vindo(a) <b class="text-info"><?= $user['name']?></b>, ao nosso Sistema</p>
<button onclick="window.location.href='logout.php'" class="btn btn-sm bg-warning text-dark">Sair</button>