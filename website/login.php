<?php
// login.php
session_start();

// Se o usuário já estiver logado, redireciona para o dashboard
if (isset($_SESSION['user_id'])) {
    header('Location: /dashboard');
    exit;
}

// Processar o formulário de login quando enviado
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $valid_profiles = ['user', 'admin', 'func'];
    
    // Validação básica (em sistema real, validar com banco de dados)
    if (!empty($email) && !empty($password)) {
        // Autenticação simulada - em sistema real, verificar no banco de dados
        $valid_credentials = [
            'admin' => ['email' => 'admin@exemplo.com', 'password' => 'admin123'],
            'func' => ['email' => 'func@exemplo.com', 'password' => 'func123'],
            'user' => ['email' => 'user@exemplo.com', 'password' => 'user123']
        ];
        for ($i = 0; $i < count($valid_profiles); $i++) {
            $profile = $valid_profiles[$i];
            if (isset($valid_credentials[$profile]) && 
                $email === $valid_credentials[$profile]['email'] && 
                $password === $valid_credentials[$profile]['password']) {
                // Autenticação bem-sucedida
                $_SESSION['user_id'] = 1;
                $_SESSION['user_email'] = $email;
                $_SESSION['user_name'] = 'Usuário ' . ucfirst($profile);
                $_SESSION['perfil'] = $profile;
                
                // Redirecionar para o dashboard
                header('Location: /dashboard');
                exit;
            } else if ($i >= count($valid_profiles)-1) {
                $error = "Credenciais inválidas.";
            }
        }
    } else {
        $error = "Email e senha são obrigatórios!";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestão - Login</title>
    <link rel="stylesheet" href="/css/color-palette.css">
    <link rel="stylesheet" href="/css/login_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://unpkg.com/@govbr-ds/webcomponents@1.21.3/dist/webcomponents.umd.min.js" type="module"></script>
</head>
<body>
    <main>
        <div class="main-card">
            <div class="banner-container">
                <h1 class="bold">Nome do Abrigo</h1>
                <img src="" alt="">
            </div>
            <div class="login-container">
                <div class="login-card">
                    <div class="login-header">
                        <h1 class="bold">Fazer login</h1>
                        <div class="decoration"></div>
                    </div>
                    <div class="login-body">
                        <?php if ($error): ?>
                            <div class="error-message" id="errorMessage">
                                <i class="fas fa-exclamation-circle"></i> <?= $error ?>
                            </div>
                        <?php endif; ?>
                        
                        <form id="loginForm" method="POST" action="/login">
                            <input type="hidden" name="profile" id="selectedProfile" value="admin">
                            
                            <div class="form-group">
                                <input type="email" id="email" name="email" class="form-control" placeholder="seu.email@exemplo.com" required
                                    value="<?= $_POST['email'] ?? '' ?>">
                            </div>
                            
                            <div class="form-group">
                                <div class="password-container">
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Digite sua senha" required>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn bold">
                                <i class="fas fa-sign-in-alt"></i> Entrar
                            </button>

                            <div class="forgot">
                                <a href="#" class="forgot-password">Esqueci minha senha</a>
                            </div>
                        </form>
                        <div class="separator">
                            <div class="line"></div>
                            <span>Ou</span>
                        </div>
                        <div class="gov-button-container">
                            <br-sign-in
                            type="primary"
                            density="large"
                            label="Entrar com"
                            entity="gov.br"
                            ></br-sign-in>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="left">
            <p><span class="bold">Ajuda</span></p>
            <a href="#">Fale com o suporte</a>
            <a href="#">Termos de uso</a>
            <a href="#">Politica de privacidade</a>
        </div>
        <div class="middle">
            <p>2025 Abrigo Lorem Ipsum - São Leopoldo/RS</p>
        </div>
        <div class="right">
            <div class="contato">
                <p><span class="bold">Entre em contato</span></p>
                <p class="info">(51) XXXX-XXXX</p>
                <p class="info">123, Rua XYZ, Bairro Lorem Ipsum, São Leopoldo, RS</p>
            </div>
            <div class="icons">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </footer>

    <script>
        // Seleção de perfil
        const roleOptions = document.querySelectorAll('.role-option');
        const selectedProfile = document.getElementById('selectedProfile');
        
        // Validação de formulário
        const loginForm = document.getElementById('loginForm');
        const emailInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');
        
        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }
        
        emailInput.addEventListener('blur', () => {
            if (emailInput.value && !validateEmail(emailInput.value)) {
                emailInput.style.borderColor = 'var(--danger)';
            } else {
                emailInput.style.borderColor = '';
            }
        });
        
        passwordInput.addEventListener('blur', () => {
            if (passwordInput.value && passwordInput.value.length < 6) {
                passwordInput.style.borderColor = 'var(--danger)';
            } else {
                passwordInput.style.borderColor = '';
            }
        });
        
        loginForm.addEventListener('submit', (e) => {
            let isValid = true;
            
            if (!emailInput.value || !validateEmail(emailInput.value)) {
                emailInput.style.borderColor = 'var(--danger)';
                isValid = false;
            }
            
            if (!passwordInput.value || passwordInput.value.length < 6) {
                passwordInput.style.borderColor = 'var(--danger)';
                isValid = false;
            }
            
            if (!isValid) {
                e.preventDefault();
                const errorMessage = document.getElementById('errorMessage');
                if (errorMessage) {
                    errorMessage.textContent = 'Por favor, corrija os campos destacados.';
                    errorMessage.style.display = 'block';
                }
            }
        });
    </script>
    <script>
        // Script para autopreenchimento e submissão
        document.addEventListener('DOMContentLoaded', function() {
        const govBrButton = document.querySelector('br-sign-in');
        
        if(govBrButton) {
            govBrButton.addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('email').value = 'user@exemplo.com';
            document.getElementById('password').value = 'user123';
            document.getElementById('loginForm').submit();
            });
        }
        });
    </script>
</body>
</html>