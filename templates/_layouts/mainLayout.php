<?php

use App\Core\{Auth, ErrorHandler};
use App\View\Helper\HTML;
/* @var $this App\View\View */

/** @var string $title */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <ul class="menu">
        <li>
            <a href="?a=home">Home</a>
        </li>
        <li>
            <a href="?a=about">about</a>
        </li>
    </ul>

    <div id="maincontent">
        <?php $this->body(); ?>
    </div>

</body>

</html>