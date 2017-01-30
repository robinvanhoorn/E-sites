<?php
$username=
$token = sha1(uniqid($username, true));
$query = $db->prepare(
    "INSERT INTO pending_users (username, token, tstamp) VALUES (?, ?, ?)"
);
$query->execute(
    array(
        $username,
        $token,
        $_SERVER["REQUEST_TIME"]
    )
);
