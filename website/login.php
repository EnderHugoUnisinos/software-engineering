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
    $profile = $_POST['profile'] ?? 'user';
    
    // Validação básica (em sistema real, validar com banco de dados)
    if (!empty($email) && !empty($password)) {
        // Autenticação simulada - em sistema real, verificar no banco de dados
        $valid_credentials = [
            'admin' => ['email' => 'admin@exemplo.com', 'password' => 'admin123'],
            'func' => ['email' => 'func@exemplo.com', 'password' => 'func123'],
            'user' => ['email' => 'user@exemplo.com', 'password' => 'user123']
        ];
        
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
        } else {
            $error = "Credenciais inválidas para o perfil selecionado.";
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <div class="logo">
                <i class="fas fa-lock"></i>
            </div>
            <h1>Acesso ao Sistema</h1>
            <p>Entre com suas credenciais para continuar</p>
            <div class="decoration"></div>
        </div>
        
        <div class="login-body">
            <?php if ($error): ?>
                <div class="error-message" id="errorMessage">
                    <i class="fas fa-exclamation-circle"></i> <?= $error ?>
                </div>
            <?php endif; ?>
            
            <div class="role-selector">
                <div class="role-option active" data-role="admin">
                    <i class="fas fa-user-shield"></i>
                    <div>Administrador</div>
                </div>
                <div class="role-option" data-role="func">
                    <i class="fas fa-user-tie"></i>
                    <div>Funcionário</div>
                </div>
                <div class="role-option" data-role="user">
                    <i class="fas fa-user"></i>
                    <div>Usuário</div>
                </div>
            </div>
            
            <form id="loginForm" method="POST" action="/login">
                <input type="hidden" name="profile" id="selectedProfile" value="admin">
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="seu.email@exemplo.com" required
                           value="<?= $_POST['email'] ?? '' ?>">
                </div>
                
                <div class="form-group">
                    <label for="password">Senha</label>
                    <div class="password-container">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Digite sua senha" required>
                        <span class="toggle-password" id="togglePassword">
                            <i class="fas fa-eye"></i>
                        </span>
                    </div>
                </div>
                
                <div class="remember-forgot">
                    <div class="remember">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">Lembrar-me</label>
                    </div>
                    <a href="#" class="forgot-password">Esqueceu a senha?</a>
                </div>
                
                <button type="submit" class="btn">
                    <i class="fas fa-sign-in-alt"></i> Entrar no Sistema
                </button>
            </form>
        </div>
    </div>

    <script>
        // Seleção de perfil
        const roleOptions = document.querySelectorAll('.role-option');
        const selectedProfile = document.getElementById('selectedProfile');
        
        roleOptions.forEach(option => {
            option.addEventListener('click', () => {
                roleOptions.forEach(o => o.classList.remove('active'));
                option.classList.add('active');
                selectedProfile.value = option.dataset.role;
            });
        });

        // Mostrar/ocultar senha
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        
        togglePassword.addEventListener('click', () => {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            togglePassword.innerHTML = type === 'password' ? '<i class="fas fa-eye"></i>' : '<i class="fas fa-eye-slash"></i>';
        });

        // Validação de formulário
        const loginForm = document.getElementById('loginForm');
        const emailInput = document.getElementById('email');
        
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
</body>
</html>