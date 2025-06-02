<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionario - Home</title>
    <?php
    include_once __DIR__ . '/../../config.php';
    
    $imgPath = '/img/';
    $cssPath = '/css/';
    $jsPath = '/js/';
    $includePath = ROOT_PATH . '/pages/funcionario/include/';
    ?>
    
    <link rel="stylesheet" href="<?= $cssPath ?>color-palette.css">
    <link rel="stylesheet" href="<?= $cssPath ?>dashboard_style.css">
    <link rel="stylesheet" href="<?= $cssPath ?>aside.css">
    <link rel="stylesheet" href="<?= $cssPath ?>header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="<?= $jsPath ?>accordion.js" defer></script>
</head>
<body>
    <?php print $cssPath?>color-palette.css
    <?php include $includePath . 'aside.php'; ?>
    <div class="content">
        <?php 
            $nome_pagina = "Home";
            include $includePath . 'header.php';
        ?>
        <main>
        </main>
    </div>
</body>
</html>