<?php
session_start();
if (isset($_SESSION['AUTH']) && $_SESSION['AUTH'] == 1) {
    print_r($_SESSION);
    echo 'valid';
} else {
    echo 'invalid';
}