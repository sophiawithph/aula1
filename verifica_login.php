<?php
session_start();
if (!isset ($_SESSION['user'])) {
    header('location:login.php?erro2');
    die;
}