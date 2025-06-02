<?php
// 404.php
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Página não encontrada</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        .error-container {
            max-width: 600px;
            padding: 2rem;
        }
        h1 {
            font-size: 5rem;
            color: #dc3545;
            margin-bottom: 1rem;
        }
        h2 {
            font-size: 2rem;
            margin-bottom: 1.5rem;
        }
        p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            color: #6c757d;
        }
        .btn {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            background: #4361ee;
            color: white;
            text-decoration: none;
            border-radius: 0.3rem;
            font-weight: bold;
            transition: background 0.3s;
        }
        .btn:hover {
            background: #3a56e0;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <h1>404</h1>
        <h2>Página não encontrada</h2>
        <p>A página que você está tentando acessar não existe ou foi movida.</p>
        <a href="/" class="btn">Voltar para a página inicial</a>
    </div>
</body>
</html>