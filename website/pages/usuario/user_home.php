<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <?php
    include_once __DIR__ . '/../../config.php';
    
    $imgPath = '/img/';
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

    <link rel="stylesheet" href="/css/color-palette.css">
    <link rel="stylesheet" href="/css/user/user_header.css">
    <link rel="stylesheet" href="/css/user/user_style.css">
    <link rel="stylesheet" href="/css/content-loader.css">
    <script type="module" src="<?= $jsPath ?>user_spa.js"></script> 

</head>
<body>
    <?php 
        $nome_pagina = 'Dashboard';
        include 'include/header.php'
    ?>
    <main class="content-container">
        <!-- SPA content will be injected here -->
        <div class="loading">Carregando conteúdo...</div>
    </main>
</body>
</html>