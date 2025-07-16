<?php

if (!isset($_GET['s']) || $_GET['s'] == '') {
    $_GET['s'] = 'cs_list';
}

if ($_GET['s'] == "cm_list") {
    require_once "views/ui_church_member_list.php";

} elseif ($_GET['s'] == "permission") {
    require_once "views/ui_user_permission.php";

} elseif ($_GET['s'] == "roles") {
    require_once "views/ui_user_roles.php";

} else {
    require_once "views/ui_church_staff_list.php";
}


?>