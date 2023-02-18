<?php
class members
{
    public function AddUser($name, $family)
    {
        $db = new Database();
        $connection = $db->DBconnection();
        $Name = addslashes(htmlentities($name));
        $Family = addslashes(htmlentities($family));
        $sql = 'INSERT `mysql` SET `name`=?,`family`=?';
        $result = $connection->prepare($sql);
        $result->bindValue(1, $name);
        $result->bindValue(2, $family);
        if ($result->execute()) {
            echo 'is true';
        } else {
            echo 'is false';
        }
    }
}

?>
