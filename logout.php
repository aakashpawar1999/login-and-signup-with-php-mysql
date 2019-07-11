<?php

require_once 'source/session.php';

session_destroy();
header('location: index.html');

?>
