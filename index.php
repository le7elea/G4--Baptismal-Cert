<?php

// print "<pre>"; print_r($_GET); exit;


if (!isset($_GET['m']) || $_GET['m'] == '') {
    $_GET['m'] = 'dashboard';
}

if ($_GET['m'] == 'users') {
    require_once "controllers/users.php";

} elseif ($_GET['m'] == 'baptismal') {
    require_once "controllers/baptismal.php";

} elseif ($_GET['m'] == 'reports') {
    require_once "controllers/reports.php";

} elseif ($_GET['m'] == 'logs') {
    require_once "controllers/logs.php";

} elseif ($_GET['m'] == 'certificate') {
    require_once "controllers/certificate.php";

} else {
    # Default menu
    require_once "views/ui_dashboard.php";
}


?>