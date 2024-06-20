<?php

session_start();
session_unset(); 
session_destroy();


header('Location: /lb/controllers/main-ctrl.php'); 

exit;