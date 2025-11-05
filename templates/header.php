<?php include __DIR__ . '/../includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? $siteName ?></title>
    <!-- Base -->
    <link rel="stylesheet" href="<?= $baseUrl ?>/assets/css/style.css">
    <!-- Nav -->
    <link rel="stylesheet" href="<?= $baseUrl ?>/assets/css/nav.css">
</head>

<body>
    <?php include __DIR__ . '/../includes/nav.php'; ?>
    <!-- <header>
        <h1><?= $siteName ?></h1>
    </header> -->
