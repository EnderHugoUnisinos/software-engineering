
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
    <link rel="stylesheet" href="/css/color-palette.css">
    <link rel="stylesheet" href="/css/content-loader.css">
    <link rel="stylesheet" href="/css/dashboard/dashboard_style.css">
    <link rel="stylesheet" href="/css/dashboard/dashboard_header.css">
    <link rel="stylesheet" href="/css/dashboard/aside.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="<?= $jsPath ?>accordion.js" defer></script>
    <script type="module" src="<?= $jsPath ?>admin_spa.js"></script>
</head>
<body>
    <?php 
        include 'include/aside.php'
    ?>
    <div class="content">
        <?php
            // Set default page name for initial load
            $nome_pagina = 'Dashboard';
            include 'include/header.php';
        ?>
        <main class="content-container" style="position:relative;">
            <!-- SPA content will be injected here -->
            <div class="loading">Carregando conteúdo...</div>
        </main>
    </div>
</body>
</html>