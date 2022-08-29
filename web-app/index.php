<?php
$user='root';
// passed as env variable for sql container
$password='root_password';

$database='mock_db';

// using mysql container's name as host name
// run the containers in same docker network
$db_host = 'sql_container:3306';

$connection = new mysqli($db_host, $user, $password, $database);

if(!$connection){
    echo ("DB connection failed");
}else {
    $result = $connection->query('select * from Quotes');
    while ($quote = $result->fetch_assoc()) {
        echo "<h3>".$quote['quote']."</h3>";
    }
}

$connection->close();
?>