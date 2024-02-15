<?php

session_start();
session_unset(); 
session_destroy();


header('Location: /controllers/main-ctrl.php'); 

exit;