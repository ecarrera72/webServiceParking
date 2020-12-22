<?php
    class dbSqlite {
        
        public function dbConnect() {
            $db = new SQLite3(__DIR__ . '/config.db', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);
            return $db;    
        }

        public function runQuery($db, $query) {
            $result = null;
            $query = $db->query($query);

            if (strpos($query, 'SELECT') == false) {
                $result = $query->fetchArray(SQLITE3_ASSOC);
            }else {
                $result = $db->lastInsertRowID();
            }

            return $result;
        }

        public function dbClose($db) {
            $db->close();
        }
    }
?>