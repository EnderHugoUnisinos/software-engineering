<?php
// dashboard_router.php
session_start();

// Verificar autenticação
if (!isset($_SESSION['user_id'])) {
    header('Location: /login');
    exit;
}

// Redirecionar para o painel correto baseado no perfil
switch ($_SESSION['perfil']) {
    case 'admin':
        header('Location: /administrador');
        break;
    case 'func':
        header('Location: /funcionario');
        break;
    case 'user':
        header('Location: /usuario');
        break;
    default:
        header('Location: /login');
}
exit;