<?php
$dbhost = $_ENV["MYSQL_SERVICE_HOST"];
$dbport = $_ENV["MYSQL_SERVICE_PORT"];
$dbuser = $_ENV["DATABASE_USER"];
$dbname = $_ENV["DATABASE_NAME"];
$dbpwd = $_ENV["DATABASE_PASSWORD"];



$connection = mysqli_connect($dbhost.":".$dbport, $dbuser, $dbpwd, $dbname) or die("Error " . mysqli_error($connection));


//$query = "SELECT * from users" or die("Error in the consult.." . mysqli_error($connection));


 $query = "SELECT count(*) FROM users";
 $result = $connection->query($query);
    if (!$result) {
        http_response_code (500);
        error_log ("SQL error: " . mysqli_error($connection) . "\n");
        die();
    }



    $row = mysqli_fetch_array($result);
    mysqli_free_result($result);

    $id = rand(1,$row[0]);

    $query = "SELECT username FROM users WHERE user_id = " . $id;
    $result = $connection->query($query);
    if (!$result) {
        http_response_code (500);
        error_log ("SQL error: " . mysqli_error($connection) . "\n");
        die();
    }

    $row = mysqli_fetch_array($result);
    mysqli_free_result($result);

    print $row[0] . "\n";


mysqli_close($connection);

?>

