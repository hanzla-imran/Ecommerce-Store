<?php

unset($_SESSION["users"]);
session_destroy();
header("Location: /login");

?>