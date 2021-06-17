<?php


// Create a new connection to the MySQL database using PDO, $my_Db_Connection is an object
try {
    /* CONEXION CON EL SERVIDOR LOCAL PRODUCCION */
    $conexion = mysqli_connect("bwrpooh9uko2urw6f6ib-mysql.services.clever-cloud.com","ue7zx8vzzbatsdq1","bT0GWjW9ta0FeDA7dORm","bwrpooh9uko2urw6f6ib");
} catch (PDOException $error) {
    echo 'Connection error: ' . $error->getMessage();
}