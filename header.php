<?php 

function nav_item ($url){
    if ($_SERVER[SCRIPT_NAME] === $url) {
        echo "active";
    } else {
        echo "";
    };
};


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $activePage ?></title>
    <link rel="stylesheet" href="sources/styles/reset.css">
    <link rel="stylesheet" href="sources/styles/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <img src="" alt="LOGO">
            <ul>
                <li> <a class="<?php nav_item("/Hetic/Hetic/index.php");?> " href="index.php">home</a></li>
                <li> <a class="<?php nav_item("/Hetic/Hetic/discovery.php");?> " href="#">discovery</a></li>
                <li> <a class="<?php nav_item("/Hetic/Hetic/photos.php");?> " href="#">photos</a></li>
                <li> <a class="<?php nav_item("/Hetic/Hetic/contact.php");?> " href="contact.php">contact</a></li>
            </ul>
        </nav>
    </header>


