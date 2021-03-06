<?php
require 'ControllerAction.php';

function routeRequest() {
    define("DEFAULT_ACTION", "allMessages");
    $action = isset($_GET['action']) ? $_GET['action'] : DEFAULT_ACTION;
    try {
        if (function_exists($action)) {
            $action();
        } else {
            require "ViewError.php";    
        }
    } catch (Exception $e) {
        require "ViewError.php";
    }
}