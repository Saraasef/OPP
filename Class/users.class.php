<?php
class users
{
    public function fetchNameById($id)
    {
        $db = new Database();
        $connect = $db->DBconnect();
        $id = (int) $id;
        $sql = 'SELECT * FROM `form` WHERE `id`=?';
        $result = $connect->prepare($sql);
        $result->bindValue(1, $id);
        $result->execute();
        $row = $result->fetch(PDO::FETCH_ASSOC);
        return $row['Name'];
    }
}
?>
