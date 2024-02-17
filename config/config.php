<?php

define('REGEX_NO_NUMBER',"^[A-Za-z-éèêëàâäôöûüç' ]+$");
define('REGEX_PHONENUMB','^(0|\\+33|0033)[1-9][0-9]{8}$');
define('REGEX_ZIPCODE','^[0-9]{5}$');
define('TIME',`^([01]\d|2[0-3]):([0-5]\d):([0-5]\d)$`);
// define('REGEX_DATE','^([0-9]{4})[\/\-]?([0-9]{2})[\/\-]?([0-9]{2})$');
define('DATE', '^(?:\d{4}-\d{2}-\d{2})$');
define('REGEX_TEXTAREA','^[a-zA-Z\n\r]*$');
define('STYLE', '^[a-zA-Z0-9\-]*$');
define('MAX_FILESIZE', 2*1024*1024);
define('AUTHORIZED_IMAGE_FORMAT', ['image/jpeg', 'image/png']);
define('DSN', 'mysql:host=localhost;dbname=lb');
define('USER', 'webmas');
define('PASS', 'k2PC4u24^&FE6A7%YYqJ');