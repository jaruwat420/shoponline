<?php
require_once 'config.php';

try {
    $conn = new PDO("mysql:host=$dbHost;dbname=shoponline", $dbUser, $dbPass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}



// function dbQuery($sql)
// {
//     $result = mysqli_query($sql) or die(mysqli_error());

//     return $result;
// }

// function dbAffectedRows()
// {
//     global $dbConn;

//     return mysqli_affected_rows($dbConn);
// }

// function dbFetchArray($result, $resultType = MYSQLI_NUM)
// {
//     return mysqli_fetch_array($result, $resultType);
// }

// function dbFetchAssoc($result)
// {
//     return mysqli_fetch_assoc($result);
// }

// function dbFetchRow($result)
// {
//     return mysqli_fetch_row($result);
// }

// function dbFreeResult($result)
// {
//     return mysqli_free_result($result);
// }

// function dbNumRows($result)
// {
//     return mysqli_num_rows($result);
// }

// function dbSelect($dbName)
// {
//     return mysqli_select_db($dbName);
// }

// function dbInsertId()
// {
//     return mysqli_insert_id();
// }
