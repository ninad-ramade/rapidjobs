<?php 
ini_set('display_errors', 1);
class Database {
    
    private $connection = null;
    
    public function __construct() {
        $this->connect();
    }
    
    public function connect() {
        if($this->connection === null) {
            $this->connection = new mysqli(servername, username, password, dbname);
        }
        return $this->connection;
    }

    public function close() {
        $this->connection->close();
    }
    
    public function fetchOne($query) {
        $result = $this->connection->query($query);
        $response = $result->num_rows > 0 ? mysqli_fetch_assoc($result) : [];
        return $response;
    }
    
    public function insert($query) {
        $updateResult = $this->connection->query($query);
        return $updateResult;
    }
    
    public function update($query) {
        $updateResult = $this->connection->query($query);
        return $updateResult;
    }
    
    public function fetchAll($query) {
        $result = $this->connection->query($query);
        $response = [];
        if ($result->num_rows < 1) {
            return $response;
        }
        while($row = $result->fetch_assoc()) {
            $response[] = $row;
        }
        return $response;
    }
    
}
?>