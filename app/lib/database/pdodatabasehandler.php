<?php
namespace PHPMVC\Lib\Database;

class PDODatabaseHandler extends DatabaseHandler
{

    private static $_instance;
    private static $_handler;

    private function __construct(){
        self::init();
    }

    public function __call($name, $arguments)
    {
        // echo '<pre>', var_dump(array(&self::$_handler, $name)), '</pre>';
        // echo '<pre>', var_dump($arguments), '</pre>';
        // exit;
        return call_user_func_array(array(&self::$_handler, $name), $arguments);
    }

    protected static function init()
    {
        try {
            self::$_handler = new \PDO(
                'mysql:hostname=' . DATABASE_HOST_NAME . ';dbname=' . DATABASE_DB_NAME,
                DATABASE_USER_NAME, DATABASE_PASSWORD, array(
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_WARNING,
                    \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
                )
            );

            // echo '<pre>', var_dump(self::$_handler), '</pre>';
            // exit;

        } catch (\PDOException $e) {
            echo 'Error in pdodatabasehandler.php<br>';
        }
    }

    public static function getInstance()
    {
        if(self::$_instance === null) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
}