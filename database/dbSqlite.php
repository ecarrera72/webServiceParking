<?php
    //namespace app\dbSqlite;

    //use PDO, PDOException;

    echo "Version de sqlite " . __DIR__ . '/config.db'; //. SQLite3::version();

    $db = new SQLite3(__DIR__ . '/config.db');

    //$db = new PDO('sqlite:' . __DIR__ . '/config.db');

    var_dump($db);

    /*class dbSqlite {
        private $connect = null;

        public static function dbConnect() {
            if (empty($this->connect)) {
                try {
                    $this->connect = new PDO('sqlite:config.db');
                    return $this->connect;
                } catch (PDOException $e) {
                    die($e->getMessage());
                }
            }
        }
    }*/
?>