<?php
    class Database_PDO
    {
        private $host;
        private $dbname;
        private $username;
        private $password;
        private $pdo;

        public function __construct($host, $dbname, $username, $password) {
            $this->host = $host;
            $this->dbname = $dbname;
            $this->username = $username;
            $this->password = $password;
            $this->connect();
        }

        private function connect() {
            $dsn = "mysql:host={$this->host};dbname={$this->dbname}";
            try {
                $this->pdo = new PDO($dsn, $this->username, $this->password);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Connection failed: " . $e->getMessage());
            }
        }

        public function query($sql, $params = []) {
            try {
                $stmt = $this->pdo->prepare($sql);
                $stmt->execute($params);
                return $stmt;
            } catch (PDOException $e) {
                die("Query failed: " . $e->getMessage());
            }
        }

        public function select($sql, $params = []) {
            $stmt = $this->query($sql, $params);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function insert($sql, $params = []) {
            $this->query($sql, $params);
            return $this->pdo->lastInsertId();
        }

        public function update($sql, $params = []) {
            $stmt = $this->query($sql, $params);
            return $stmt->rowCount();
        }

        public function delete($sql, $params = []) {
            $stmt = $this->query($sql, $params);
            return $stmt->rowCount();
        }

        public function close() {
            $this->pdo = null;
        }
    }
?>