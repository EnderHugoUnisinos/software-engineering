<?php
// index.php (Front Controller)
session_start();

// Configurações básicas
define('BASE_PATH', __DIR__);
$base_dir = str_replace($_SERVER['DOCUMENT_ROOT'], '', BASE_PATH);
define('APP_URL', (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $base_dir);

// Obter a URL solicitada corretamente
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$script_path = dirname($_SERVER['SCRIPT_NAME']);

// Remover o caminho do script da URL
if ($script_path !== '/') {
    $request_url = preg_replace('#^' . preg_quote($script_path, '#') . '#', '', $request_uri);
} else {
    $request_url = $request_uri;
}

// Normalizar a URL
$request_url = '/' . trim($request_url, '/');
if ($request_url === '/') {
    $request_url = '/';
}

// Mapeamento de rotas
$routes = [
    '/' => 'login.php',
    '/login' => 'login.php',
    '/logout' => 'logout.php',
    '/dashboard' => 'dashboard_router.php',
    '/administrador' => 'pages/administrador/adm_home.php',
    '/funcionario' => 'pages/funcionario/func_home.php',
    '/usuario' => 'pages/usuario/user_home.php',
    '/administrador/([a-z0-9_-]+)' => 'admin_section_handler.php?section=$1',
    '/funcionario/([a-z0-9_-]+)' => 'func_section_handler.php?section=$1'
];

// Verificar correspondência de rotas
$matched = false;

foreach ($routes as $pattern => $handler) {
    // Converter padrão em expressão regular
    $regex = '#^' . $pattern . '$#i';
    
    if (preg_match($regex, $request_url, $matches)) {
        $matched = true;
        
        // Processar handler com parâmetros
        if (strpos($handler, '$') !== false) {
            $handler = preg_replace('#\$([0-9]+)#', '$matches[$1]', $handler);
        }
        
        // Incluir o arquivo handler
        if (file_exists($handler)) {
            include $handler;
            exit;
        }
        break;
    }
}

// Rota não encontrada
if (!$matched) {
    http_response_code(404);
    include '404.php';
}