<?php
ob_start();
session_start();
require_once 'configuration.php';
$user_obj = new Cl_User();
$data = $user_obj->logout();