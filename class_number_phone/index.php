<?php
include_once "classify_phonenumber.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$phoneNumber = $_POST["number"];
classifyPhoneNumber($phoneNumber);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <table>
        <tr>
            <td> Number phone:</td>
            <td>
                <input type="text" name="number">
            </td>
            <td>
                <input type="submit" value="Classify">
            </td>
        </tr>
    </table>
</form>
</body>
</html>

