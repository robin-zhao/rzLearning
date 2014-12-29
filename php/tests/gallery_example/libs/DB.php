<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DB
 *
 * @author robin
 */
class DB
{

    static $pdo = null;

    public static function getInstance()
    {
        if (is_null(static::$pdo)) {
            $dsn = "mysql:host=%s;dbname=%s";
            $dsn = sprintf($dsn, DB_HOST, DB_NAME);
            static::$pdo = new PDO($dsn, DB_USER, DB_PASS);
        }
        return static::$pdo;
    }
}