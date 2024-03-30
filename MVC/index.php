<?php
require 'ctrl.class.php';
$action = isset($_GET['action']) ? $_GET['action'] : 'allEmployes'; // Default to allEmployes if action is not specified
echo "Action: " . $action;
$ctrl = new ctrl();
$ctrl->action($action);
?>
