<?php

if (!isset($_GET['s']) || $_GET['s'] == '') {
    $_GET['s'] = 'request';
}

if ($_GET['s'] == 'track') {
    require_once "views/ui_track_request.php";

} else {
    require_once "views/ui_request_certificate.php";
}


?>