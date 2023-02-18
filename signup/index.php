<?php
include 'autoload.php';
// $db = new Database();
// $db->DBconnection();
$us = new members();
if (isset($_POST['signup'])) {
    if ($_POST['name'] != '' && $_POST['family'] != '') {
        $result = $us->AddUser($_POST['name'], $_POST['family']);
        if ($result) {
            echo "<script>alert('one record added');</script>";
        } else {
            echo "<script>alert('no record was added');</script>";
        }
    }
}
?>
<!DOCTYPE html>

<head>
    <title>sign up form </title>
</head>
<form method="post">
    <tr>
        <th>Name:</th>
        <td>
            <input type="text" name="name">
            </input>
        </td>
    </tr>
    <tr>
        <th>Family:</th>
        <td>
            <input type="text" name="family">
            </input>
        </td>
    </tr>
    <tr>
        <th>&nbsp;</th>
        <td>
            <input type="submit" name="signup" value="signup">
            </input>
        </td>
    </tr>
</form>

<body>
</body>