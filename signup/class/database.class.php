<?php
class database
{
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'OPP';
    private $dbtype = 'mysql';
    private $dsn;
    public $connect;
    public function DBconnection()
    {
        try {
            $this->dsn = "{$this->dbtype}: host={$this->servername}; dbname={$this->dbname}";
            $this->connect = new PDO(
                $this->dsn,
                $this->username,
                $this->password
            );
            $this->connect->exec('SET CHARACTER SET utf8');
            $this->connect->exec('set names utf8');
            return $this->connect;
            if ($this->connect) {
                echo 'Sign up Connected to the database successfully!';
            }
        } catch (PDOException $error) {
            echo 'error:', $error->__toString('sign up has a problem');
        }
    }
}

?>
