<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'truth');

try {
   $db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
} catch (Exception $e) {
   echo "المعذرة حدث خطأ ما, الرجاء المحاولة لاحقاً";
}
