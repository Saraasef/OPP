<?php
class Database
{
    private $servername = 'localhost:'; //27.0.0.1
    private $dbname = 'opp';
    private $username = 'root';
    private $password = '';
    private $dbtype = 'mysql';
    private $dsn;
    public $connect;

    public function DBconnect()
    {
        try {
            $this->dsn = "{$this->dbtype}: host={$this->servername}; dbname={$this->dbname}";
            $this->connect = new PDO(
                $this->dsn,
                $this->username,
                $this->password
            );
            $this->connect->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );
            $this->connect->exec('SET CHARACTER SET utf8');
            $this->connect->exec('set names utf8');
            return $this->connect;
            if ($this->connect) {
                echo 'Connected to the database successfully!';
            }
        } catch (PDOException $error) {
            echo 'error:', $error->__toString();
        }
    }
}

?>