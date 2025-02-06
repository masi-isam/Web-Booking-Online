<?php


$hostname =  "localhost";
$username = 'root';
$password = '';
$databasename = "fitshotel";

$conn = mysqli_connect($hostname, $username, $password, $databasename);

if (!$conn) {
    die(mysqli_connect_error());
}


function Filteration($data) {
    foreach ($data as $key => $value) {
        $data[$key] = trim($value);
        $data[$key] = stripcslashes($value);
        $data[$key] = htmlspecialchars($value);
        $data[$key] = strip_tags($value);
    }
    return $data;
}

function Select($sql, $values, $datatypes) {

    $conn = $GLOBALS['conn'];
    if ($statment = mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($statment, $datatypes,...$values);
        if (mysqli_stmt_execute($statment)) {
            $res = mysqli_stmt_reset($statment);
            mysqli_stmt_close($statment);
            return $res;
        }
        else {
            mysqli_stmt_close($statment);
            die("Query cannot be executed - Select");

        }
    }
    else {
        die("Query cannot be executed - Select");
    }
}

?>