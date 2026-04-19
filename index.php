<?php
class Database
{

    private $conniction;
    private $stmt;


    public function __construct()
    {
        $host = "db";
        $user = "root";
        $password = "root";
        $db = "test_db";
        try {
            $this->conniction = new PDO("mysql:host={$host};dbname={$db};charset=utf8mb4", $user, $password, [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
            echo "database connected successfully";
        } catch (PDOException $e) {
            echo "datbase connection faild " . $e->getMessage();
        }
    }
    public function query($sql, $arr = [])
    {
        $this->stmt = $this->conniction->prepare($sql);
        $this->stmt->execute($arr);
        return $this;
    }
    public function fetch()
    {
        return $this->stmt->fetch();
    }
    public function fetchall()
    {
        return $this->stmt->fetchAll();
    }
}

$obj = new Database();
var_dump($obj->query("select * from userTable")->fetch());
