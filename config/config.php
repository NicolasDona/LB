<?php

define('REGEX_NO_NUMBER',"^[A-Za-z-éèêëàâäôöûüç' ]+$");
define('REGEX_PHONENUMB','^(0|\\+33|0033)[1-9][0-9]{8}$');
define('REGEX_ZIPCODE','^[0-9]{5}$');
define('REGEX_DATE','^([0-9]{4})[\/\-]?([0-9]{2})[\/\-]?([0-9]{2})$');
define('REGEX_TEXTAREA','^[a-zA-Z\n\r]*$');