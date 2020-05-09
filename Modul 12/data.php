<?php
    class Data{
        private $mysqli;
        public function __construct($conn)
        {
            $this->mysqli = $conn;
        }

        public function tampil($id=null){
            $db = $this->mysqli->connection;
            $sql = "SELECT * FROM data";
            $query = $db->query($sql) or die($db->error);
            return $query;
        }
        public function tampil_urutan($sort,$field){
            $db = $this->mysqli->connection;
            $sql = "SELECT * FROM data ORDER BY $field $sort";
            $query = $db->query($sql) or die($db->error);
            return $query;
        }
        public function tampil_saring($q,$column){
            $db = $this->mysqli->connection;
            $sql = "SELECT * FROM data WHERE $column LIKE '%$q%'";
            $query = $db->query($sql) or die($db->error);
            return $query;
        }
        public function login($user,$pass){
            $db = $this->mysqli->connection;
            $sql = "SELECT * FROM user WHERE username='$user' AND password='$pass'";
            $query = $db->query($sql) or die($db->error);
            return $query;   
        }
    }
?>