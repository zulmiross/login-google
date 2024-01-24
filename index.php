<?php

require __DIR__.'/vendor/autoload.php';

use App\Session\User as SessionUser;



require __DIR__.'/includes/header.php';

include SessionUser::isLogged() ? __DIR__.'/includes/admin.php' : __DIR__.'/includes/login.php' ;

require __DIR__.'/includes/footer.php';

