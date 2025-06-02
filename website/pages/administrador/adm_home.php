
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <?php
    include_once __DIR__ . '/../../config.php';
    
    $imgPath = '/img/';
    $cssPath = '/css/';
    $jsPath = '/js/';
    $includePath = ROOT_PATH . '/pages/funcionario/include/';

    $section = $_GET['section'] ?? 'default';
    $page = $_GET['page'] ?? 'home';

    $allowedPages = ['home', 'cadastro', 'consulta', 'atualizacao'];
    $allowedSections = ['default','atendimentos','estoque','residentes'];
    if (!in_array($page, $allowedPages) || !in_array(needle:$section, haystack:$allowedSections)) {
        $section = 'default';
        $page = 'home';
    }
    
    ?>
    <link rel="stylesheet" href="<?= $cssPath ?>color-palette.css">
    <link rel="stylesheet" href="<?= $cssPath ?>dashboard_style.css">
    <link rel="stylesheet" href="<?= $cssPath ?>aside.css">
    <link rel="stylesheet" href="<?= $cssPath ?>header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="<?= $jsPath ?>accordion.js" defer></script>
</head>
<body>
    <?php 
        include 'include/aside.php'
    ?>
    <div class="content">
        <?php
            $nome_pagina = $page;
            include 'include/header.php';
        
            include "section/{$section}/{$page}.php";
        ?>
        
    </div>
</body>
</html>