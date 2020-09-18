<?php

    $page = $_GET['page'];

    switch ($page) {
        case 'edit':
            include './edit.php';
            break;
        
        default:
            include './registration.php';
            break;
    }