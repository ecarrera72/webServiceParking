<?php
    //require_once('dbSqlite.php');

    class dbMysql {

        public function dbConnect($data) {
            $db = new mysqli($host = $data['host'], $username = $data['user'], $passwd = $data['passwd'], 
                            $dbname = $data['db'], $port = $data['port']);
            return $db;    
        }

        public function runQuery($db, $query) {
            $result = null;

            if (!$db->ping()) { die("Error al intentar connectar a la base"); }

            $query = $db->query($query);

            if (strpos($query, 'SELECT') == false) {
                $result = $query->fetch_all(MYSQLI_ASSOC);
            }else {
                $result = $db->insert_id();
            }

            return $result;
        }

        public function dbClose($db) {
            $db->close();
        }
    }

    /*$sqlite = new dbSqlite();
    $dbSqlite = $sqlite->dbConnect();
    $result = $sqlite->runQuery($dbSqlite, 'SELECT * FROM dbConfiguration');
    echo "<pre>";
    print_r($result);

    $mysql = new dbMysql();
    $dbMysql = $mysql->dbConnect($result);
    $result2 = $mysql->runQuery($dbMysql, 'SELECT * FROM cat_estacionamiento');
    print_r($result2);*/

?>