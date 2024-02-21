<?php

require_once __DIR__ . '/../config/config.php';

class Database
{
    private static $pdo;

    public static function connect()
    {
        if(is_null(self::$pdo)) {
            self::$pdo = new PDO(DSN, USER, PASS);
            self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        }
        return self::$pdo;
    }
}