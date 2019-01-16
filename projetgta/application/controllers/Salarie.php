<?php

if (isset($_POST['action']) && $_POST['action'] == 'Déconnection') {
    $_SESSION['login'];
    session_destroy();
}
