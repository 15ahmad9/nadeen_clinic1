<?php

require "../config/database.php";


$username = "admin";

$password = password_hash(
    "Admin@12345",
    PASSWORD_DEFAULT
);


$stmt = $pdo->prepare(
"INSERT INTO admin(username,password)
VALUES(?,?)"
);


$stmt->execute([
    $username,
    $password
]);


echo "Admin Created";

?>