<?php

require_once dirname(__DIR__) . '../core/Mail.php';

if(isset($_POST['contact'])){
    $fname = $_POST["first_name"];
    $lname = $_POST["last_name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
}