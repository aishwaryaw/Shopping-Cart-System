<?php

session_start();
unset($_SESSION['user_stat']);
unset($_SESSION['user_name']);
session_destroy();
?>