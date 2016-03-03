<?php

class DBConn {

private $db_username = 'root';
private $db_password = '';
private $db_host = '127.0.0.1';
private $db_name = 'hotel';

private $conn = null;

public function __construct() {

$dsn = $dsn = 'mysql:dbname=' . $this->db_name . ';';
$dsn = $dsn . 'host=' . $this->db_host;

try {
$this->conn = new PDO($dsn, $this->db_username, $this->db_password);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
exit;
}
}

public function select($sql, $params = array()) {

try {

$stmt = $this->conn->prepare($sql);

if (!empty($params)) {
foreach ($params as $param) {
$stmt->bindValue($param['placeholder'], $param['value'], $param['type']);
}
}

$stmt->execute();

return $stmt->fetchAll(PDO::FETCH_OBJ);

} catch (PDOException $e) {
return false;
}
}

public function insert($sql, $params) {

}

public function __destruct() {

$this->conn = null;
}

}

$dbConn = new DBConn();

$result = $dbConn->select('SELECT * FROM users WHERE id = :id AND name = :name;',
[
[
'placeholder' => ':id',
'value' => 1234,
'type' => PDO::PARAM_INT
],
[
'placeholder' => ':name',
'value' => 'Pierce',
'type' => PDO::PARAM_STR
]
]
);