<?php

session_start();

$_SESSION['nome'] = '';

header('location: login.php');