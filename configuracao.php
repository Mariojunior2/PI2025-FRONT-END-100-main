
<?php
// configuracoes.php - TydraPI Settings page
session_start();

// Mock user settings and preferences
$userSettings = [
    'profile' => [
        'name' => 'João Silva',
        'username' => 'joaosilva',
        'bio' => 'Desenvolvedor Full Stack | React, Node.js, TypeScript | Entusiasta de IA e Tecnologias Emergentes | São Paulo, Brasil',
        'email' => 'joao.silva@exemplo.com',
        'phone' => '+55 11 98765-4321'
    ],
    'notifications' => [
        'messages' => true,
        'matches' => true,
        'groups' => true,
        'mentions' => true,
        'email_notifications' => false,
        'push_notifications' => true
    ],
    'privacy' => [
        'profile_visibility' => 'all',
        'online_status' => true,
        'read_receipts' => true,
        'data_collection' => true,
        'chat_expiration' => '24h'
    ],
    'appearance' => [
        'theme' => 'dark',
        'font_size' => 'medium',
        'language' => 'pt-BR'
    ],
    'security' => [
        'two_factor' => false
    ]
];

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['save_profile'])) {
        // Process profile settings update
        // This is a mock - in a real app, you would update the database
        $_SESSION['settings_message'] = "Perfil atualizado com sucesso!";
    } elseif (isset($_POST['save_password'])) {
        // Process password update
        $_SESSION['settings_message'] = "Senha atualizada com sucesso!";
    } elseif (isset($_POST['save_notification_settings'])) {
        // Process notification settings update
        $_SESSION['settings_message'] = "Configurações de notificação atualizadas com sucesso!";
    } elseif (isset($_POST['save_privacy'])) {
        // Process privacy settings update
        $_SESSION['settings_message'] = "Configurações de privacidade atualizadas com sucesso!";
    } elseif (isset($_POST['save_appearance'])) {
        // Process appearance settings update
        $_SESSION['settings_message'] = "Preferências de aparência atualizadas com sucesso!";
    }
    
    // Redirect to prevent form resubmission
    header('Location: ' . $_SERVER['PHP_SELF'] . '?tab=' . $_GET['tab']);
    exit;
}

// Get active tab
$activeTab = isset($_GET['tab']) ? $_GET['tab'] : 'account';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TydraPI - Configurações</title>
    <link rel="stylesheet" href="settings-php.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <?php include 'header.php'; ?>
    <style>
        .sidebar {
            width: 20%;
            position: fixed;
        }
 
      
        .content-wrapper {
            justify-content: right;

        }
    </style>
</head>
<body>
<?php include 'sidebar.php' ?>
    <div class="settings-container content-wrapper">
        <h1 class="settings-title">Configurações</h1>
        
        <?php if (isset($_SESSION['settings_message'])): ?>
            <div class="settings-toast">
                <?php echo $_SESSION['settings_message']; ?>
                <?php unset($_SESSION['settings_message']); ?>
            </div>
        <?php endif; ?>
        
        <div class="settings-flex settings-flex-col settings-flex-md-row settings-gap-6">
            <!-- Sidebar Navigation -->
            <div class="settings-w-full settings-w-md-64">
                <div class="settings-tabs">
                    <a href="?tab=account" class="settings-tab <?php echo $activeTab === 'account' ? 'active' : ''; ?>">
                        <i class="fa fa-user settings-mr-2"></i> Conta
                    </a>
                    <a href="?tab=security" class="settings-tab <?php echo $activeTab === 'security' ? 'active' : ''; ?>">
                        <i class="fa fa-lock settings-mr-2"></i> Segurança
                    </a>
                    <a href="?tab=notifications" class="settings-tab <?php echo $activeTab === 'notifications' ? 'active' : ''; ?>">
                        <i class="fa fa-bell settings-mr-2"></i> Notificações
                    </a>
                    <a href="?tab=privacy" class="settings-tab <?php echo $activeTab === 'privacy' ? 'active' : ''; ?>">
                        <i class="fa fa-eye settings-mr-2"></i> Privacidade
                    </a>
                    <a href="?tab=appearance" class="settings-tab <?php echo $activeTab === 'appearance' ? 'active' : ''; ?>">
                        <i class="fa fa-moon settings-mr-2"></i> Aparência
                    </a>
                    
                    <hr class="settings-divider">
                    
                    <a href="index.php" class="settings-tab settings-text-red">
                        <i class="fa fa-sign-out-alt settings-mr-2"></i> Sair
                    </a>
                </div>
            </div>

            <div class="settings-flex-1 w-100">
                <?php if ($activeTab === 'account'): ?>
                    <div class="settings-card">
                        <div class="settings-mb-4">
                            <h2 class="settings-subtitle">Informações de Conta</h2>
                            <p class="settings-description">
                                Gerencie suas informações pessoais e de perfil
                            </p>
                        </div>
                        
                        <form method="post" class="settings-form">
                            <div class="settings-profile settings-mb-6">
                                <div class="settings-avatar-container">
                                    <div class="settings-avatar">
                                        <img src="https://i.pravatar.cc/150?img=68" alt="Foto de perfil">
                                    </div>
                                    <button type="button" class="settings-avatar-upload">
                                        <i class="fa fa-upload"></i>
                                    </button>
                                </div>
                                <div class="settings-user-info">
                                    <h3 class="settings-user-name"><?php echo $userSettings['profile']['name']; ?></h3>
                                    <p class="settings-user-username">@<?php echo $userSettings['profile']['username']; ?></p>
                                    <p class="settings-user-bio"><?php echo $userSettings['profile']['bio']; ?></p>
                                </div>
                            </div>
                            
                            <div class="settings-form-group">
                                <div class="settings-form-field">
                                    <label for="name" class="settings-label">Nome</label>
                                    <input 
                                        id="name" 
                                        name="name" 
                                        value="<?php echo $userSettings['profile']['name']; ?>" 
                                        class="settings-input"
                                    >
                                </div>
                                <div class="settings-form-field">
                                    <label for="username" class="settings-label">Nome de usuário</label>
                                    <input 
                                        id="username" 
                                        name="username" 
                                        value="<?php echo $userSettings['profile']['username']; ?>" 
                                        class="settings-input"
                                    >
                                </div>
                            </div>
                            
                            <div class="settings-form-field">
                                <label for="bio" class="settings-label">Biografia</label>
                                <textarea 
                                    id="bio" 
                                    name="bio" 
                                    rows="3"
                                    class="settings-textarea"
                                ><?php echo $userSettings['profile']['bio']; ?></textarea>
                            </div>
                            
                            <div class="settings-form-group">
                                <div class="settings-form-field">
                                    <label for="email" class="settings-label">Email</label>
                                    <input 
                                        id="email" 
                                        name="email" 
                                        type="email" 
                                        value="<?php echo $userSettings['profile']['email']; ?>" 
                                        class="settings-input"
                                    >
                                </div>
                                <div class="settings-form-field">
                                    <label for="phone" class="settings-label">Telefone</label>
                                    <input 
                                        id="phone" 
                                        name="phone" 
                                        value="<?php echo $userSettings['profile']['phone']; ?>" 
                                        class="settings-input"
                                    >
                                </div>
                            </div>
                            
                            <div>
                                <button 
                                    type="submit" 
                                    name="save_profile" 
                                    class="settings-btn settings-w-full settings-w-md-auto"
                                >
                                    Salvar alterações
                                </button>
                            </div>
                        </form>
                    </div>
                <?php elseif ($activeTab === 'security'): ?>
                    <div class="settings-card ">
                        <div class="settings-mb-4">
                            <h2 class="settings-subtitle">Segurança</h2>
                            <p class="settings-description">
                                Gerencie sua senha e configurações de segurança
                            </p>
                        </div>
                        
                        <div class="settings-space-y-6">
                            <form method="post" class="settings-space-y-4">
                                <h3 class="settings-group-title">Alterar senha</h3>
                                
                                <div class="settings-form-field">
                                    <label for="current-password" class="settings-label">Senha atual</label>
                                    <input 
                                        id="current-password" 
                                        name="current_password"
                                        type="password" 
                                        class="settings-input"
                                    >
                                </div>
                                
                                <div class="settings-form-field">
                                    <label for="new-password" class="settings-label">Nova senha</label>
                                    <input 
                                        id="new-password" 
                                        name="new_password"
                                        type="password" 
                                        class="settings-input"
                                    >
                                </div>
                                
                                <div class="settings-form-field">
                                    <label for="confirm-password" class="settings-label">Confirmar nova senha</label>
                                    <input 
                                        id="confirm-password" 
                                        name="confirm_password"
                                        type="password" 
                                        class="settings-input"
                                    >
                                </div>
                                
                                <div>
                                    <button 
                                        type="submit" 
                                        name="save_password" 
                                        class="settings-btn"
                                    >
                                        Atualizar senha
                                    </button>
                                </div>
                            </form>
                            
                            <hr class="settings-divider">
                            
                            <div class="settings-space-y-4">
                                <h3 class="settings-group-title">Autenticação de dois fatores</h3>
                                <p class="settings-hint">
                                    Adicione uma camada extra de segurança à sua conta com a autenticação de dois fatores.
                                </p>
                                
                                <div class="settings-form-row">
                                    <label for="twofa" class="settings-label">Ativar autenticação de dois fatores</label>
                                    <label class="settings-switch">
                                        <input type="checkbox" id="twofa" <?php echo $userSettings['security']['two_factor'] ? 'checked' : ''; ?>>
                                        <span class="settings-slider"></span>
                                    </label>
                                </div>
                            </div>
                            
                            <hr class="settings-divider">
                            
                            <div class="settings-space-y-4">
                                <h3 class="settings-group-title">Sessões ativas</h3>
                                <p class="settings-hint">
                                    Dispositivos onde você está conectado atualmente.
                                </p>
                                
                                <div class="settings-space-y-3">
                                    <div class="settings-session-item">
                                        <div class="settings-session-info">
                                            <h4>Chrome - Windows</h4>
                                            <p>São Paulo, Brasil • Ativo agora</p>
                                        </div>
                                        <span class="settings-badge">Atual</span>
                                    </div>
                                    
                                    <div class="settings-session-item">
                                        <div class="settings-session-info">
                                            <h4>Safari - iPhone</h4>
                                            <p>São Paulo, Brasil • Há 2 horas</p>
                                        </div>
                                        <button type="button" class="settings-btn-danger">
                                            Encerrar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php elseif ($activeTab === 'notifications'): ?>
                    <div class="settings-card">
                        <div class="settings-mb-4">
                            <h2 class="settings-subtitle">Notificações</h2>
                            <p class="settings-description">
                                Gerencie como você recebe notificações
                            </p>
                        </div>
                        
                        <form method="post" class="settings-form">
                            <div class="settings-space-y-4">
                                <h3 class="settings-group-title">Notificações push</h3>
                                
                                <div class="settings-space-y-3">
                                    <div class="settings-form-row">
                                        <label for="notify-messages" class="settings-label">Mensagens</label>
                                        <label class="settings-switch">
                                            <input 
                                                type="checkbox" 
                                                id="notify-messages" 
                                                name="notifications[messages]" 
                                                <?php echo $userSettings['notifications']['messages'] ? 'checked' : ''; ?>
                                            >
                                            <span class="settings-slider"></span>
                                        </label>
                                    </div>
                                    
                                    <div class="settings-form-row">
                                        <label for="notify-matches" class="settings-label">Novos matches</label>
                                        <label class="settings-switch">
                                            <input 
                                                type="checkbox" 
                                                id="notify-matches" 
                                                name="notifications[matches]" 
                                                <?php echo $userSettings['notifications']['matches'] ? 'checked' : ''; ?>
                                            >
                                            <span class="settings-slider"></span>
                                        </label>
                                    </div>
                                    
                                    <div class="settings-form-row">
                                        <label for="notify-groups" class="settings-label">Atividade em grupos</label>
                                        <label class="settings-switch">
                                            <input 
                                                type="checkbox" 
                                                id="notify-groups" 
                                                name="notifications[groups]" 
                                                <?php echo $userSettings['notifications']['groups'] ? 'checked' : ''; ?>
                                            >
                                            <span class="settings-slider"></span>
                                        </label>
                                    </div>
                                    
                                    <div class="settings-form-row">
                                        <label for="notify-mentions" class="settings-label">Menções</label>
                                        <label class="settings-switch">
                                            <input 
                                                type="checkbox" 
                                                id="notify-mentions" 
                                                name="notifications[mentions]" 
                                                <?php echo $userSettings['notifications']['mentions'] ? 'checked' : ''; ?>
                                            >
                                            <span class="settings-slider"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            
                            <hr class="settings-divider">
                            
                            <div class="settings-space-y-4">
                                <h3 class="settings-group-title">Métodos de notificação</h3>
                                
                                <div class="settings-space-y-3">
                                    <div class="settings-form-row">
                                        <div>
                                            <label for="notify-email" class="settings-label">Notificações por email</label>
                                            <p class="settings-hint">Receba resumos e atualizações importantes por email</p>
                                        </div>
                                        <label class="settings-switch">
                                            <input 
                                                type="checkbox" 
                                                id="notify-email" 
                                                name="notifications[email_notifications]" 
                                                <?php echo $userSettings['notifications']['email_notifications'] ? 'checked' : ''; ?>
                                            >
                                            <span class="settings-slider"></span>
                                        </label>
                                    </div>
                                    
                                    <div class="settings-form-row">
                                        <div>
                                            <label for="notify-push" class="settings-label">Notificações push</label>
                                            <p class="settings-hint">Receba notificações em tempo real no seu dispositivo</p>
                                        </div>
                                        <label class="settings-switch">
                                            <input 
                                                type="checkbox" 
                                                id="notify-push" 
                                                name="notifications[push_notifications]" 
                                                <?php echo $userSettings['notifications']['push_notifications'] ? 'checked' : ''; ?>
                                            >
                                            <span class="settings-slider"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="settings-mt-4">
                                <button type="submit" name="save_notification_settings" class="settings-btn">
                                    Salvar preferências
                                </button>
                            </div>
                        </form>
                    </div>
                <?php elseif ($activeTab === 'privacy'): ?>
                    <div class="settings-card">
                        <div class="settings-mb-4">
                            <h2 class="settings-subtitle">Privacidade</h2>
                            <p class="settings-description">
                                Gerencie quem pode ver seu perfil e como seus dados são usados
                            </p>
                        </div>
                        
                        <form method="post" class="settings-form">
                            <div class="settings-space-y-4">
                                <h3 class="settings-group-title">Visibilidade do perfil</h3>
                                
                                <div class="settings-form-field">
                                    <label for="profile-visibility" class="settings-label">Quem pode ver meu perfil</label>
                                    <select 
                                        id="profile-visibility" 
                                        name="privacy[profile_visibility]" 
                                        class="settings-select"
                                    >
                                        <option value="all" <?php echo $userSettings['privacy']['profile_visibility'] == 'all' ? 'selected' : ''; ?>>Todos</option>
                                        <option value="connections" <?php echo $userSettings['privacy']['profile_visibility'] == 'connections' ? 'selected' : ''; ?>>Apenas conexões</option>
                                        <option value="nobody" <?php echo $userSettings['privacy']['profile_visibility'] == 'nobody' ? 'selected' : ''; ?>>Ninguém</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="settings-space-y-3">
                                <div class="settings-form-row">
                                    <div>
                                        <label for="online-status" class="settings-label">Mostrar status online</label>
                                        <p class="settings-hint">Permite que outros usuários vejam quando você está online</p>
                                    </div>
                                    <label class="settings-switch">
                                        <input 
                                            type="checkbox" 
                                            id="online-status" 
                                            name="privacy[online_status]" 
                                            <?php echo $userSettings['privacy']['online_status'] ? 'checked' : ''; ?>
                                        >
                                        <span class="settings-slider"></span>
                                    </label>
                                </div>
                                
                                <div class="settings-form-row">
                                    <div>
                                        <label for="read-receipts" class="settings-label">Confirmações de leitura</label>
                                        <p class="settings-hint">Permite que outros usuários vejam quando você leu suas mensagens</p>
                                    </div>
                                    <label class="settings-switch">
                                        <input 
                                            type="checkbox" 
                                            id="read-receipts" 
                                            name="privacy[read_receipts]" 
                                            <?php echo $userSettings['privacy']['read_receipts'] ? 'checked' : ''; ?>
                                        >
                                        <span class="settings-slider"></span>
                                    </label>
                                </div>
                            </div>
                            
                            <hr class="settings-divider">
                            
                            <div class="settings-space-y-4">
                                <h3 class="settings-group-title">Configurações de chat</h3>
                                
                                <div class="settings-form-field">
                                    <label for="chat-expiration" class="settings-label">Expiração de chats temporários</label>
                                    <select 
                                        id="chat-expiration" 
                                        name="privacy[chat_expiration]" 
                                        class="settings-select"
                                    >
                                        <option value="12h" <?php echo $userSettings['privacy']['chat_expiration'] == '12h' ? 'selected' : ''; ?>>12 horas</option>
                                        <option value="24h" <?php echo $userSettings['privacy']['chat_expiration'] == '24h' ? 'selected' : ''; ?>>24 horas</option>
                                        <option value="48h" <?php echo $userSettings['privacy']['chat_expiration'] == '48h' ? 'selected' : ''; ?>>48 horas</option>
                                        <option value="never" <?php echo $userSettings['privacy']['chat_expiration'] == 'never' ? 'selected' : ''; ?>>Nunca expirar</option>
                                    </select>
                                </div>
                            </div>
                            
                            <hr class="settings-divider">
                            
                            <div class="settings-space-y-3">
                                <h3 class="settings-group-title">Dados e permissões</h3>
                                
                                <div class="settings-form-row">
                                    <div>
                                        <label for="data-collection" class="settings-label">Coleta de dados para melhorias</label>
                                        <p class="settings-hint">Permite a coleta de dados de uso para melhorar a experiência</p>
                                    </div>
                                    <label class="settings-switch">
                                        <input 
                                            type="checkbox" 
                                            id="data-collection" 
                                            name="privacy[data_collection]" 
                                            <?php echo $userSettings['privacy']['data_collection'] ? 'checked' : ''; ?>
                                        >
                                        <span class="settings-slider"></span>
                                    </label>
                                </div>
                                
                                <div class="settings-mt-2">
                                    <button type="button" class="settings-btn-outline settings-w-full">
                                        <i class="fa fa-shield-alt settings-mr-2"></i> Solicitar download dos meus dados
                                    </button>
                                </div>
                            </div>
                            
                            <div class="settings-mt-4">
                                <button type="submit" name="save_privacy" class="settings-btn">
                                    Salvar configurações
                                </button>
                            </div>
                        </form>
                    </div>
                <?php elseif ($activeTab === 'appearance'): ?>
                    <div class="settings-card">
                        <div class="settings-mb-4">
                            <h2 class="settings-subtitle">Aparência</h2>
                            <p class="settings-description">
                                Personalize a aparência e a experiência da aplicação
                            </p>
                        </div>
                        
                        <form method="post" class="settings-form">
                            <div class="settings-space-y-4">
                                <h3 class="settings-group-title">Tema</h3>
                                
                                <div class="settings-theme-options">
                                    <div class="settings-theme-option <?php echo $userSettings['appearance']['theme'] === 'light' ? 'active' : ''; ?>">
                                        <label for="theme-light" class="settings-theme-icon">
                                            <i class="fa fa-sun settings-mb-2"></i>
                                            <span>Claro</span>
                                            <input 
                                                type="radio" 
                                                id="theme-light" 
                                                name="appearance[theme]" 
                                                value="light" 
                                                class="settings-hidden" 
                                                <?php echo $userSettings['appearance']['theme'] === 'light' ? 'checked' : ''; ?>
                                            >
                                        </label>
                                    </div>
                                    
                                    <div class="settings-theme-option <?php echo $userSettings['appearance']['theme'] === 'dark' ? 'active' : ''; ?>">
                                        <label for="theme-dark" class="settings-theme-icon">
                                            <i class="fa fa-moon settings-mb-2"></i>
                                            <span>Escuro</span>
                                            <input 
                                                type="radio" 
                                                id="theme-dark" 
                                                name="appearance[theme]" 
                                                value="dark" 
                                                class="settings-hidden" 
                                                <?php echo $userSettings['appearance']['theme'] === 'dark' ? 'checked' : ''; ?>
                                            >
                                        </label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="settings-space-y-4 settings-mt-6">
                                <h3 class="settings-group-title">Configurações de texto</h3>
                                
                                <div class="settings-form-field">
                                    <label for="font-size" class="settings-label">Tamanho da fonte</label>
                                    <select 
                                        id="font-size" 
                                        name="appearance[font_size]" 
                                        class="settings-select"
                                    >
                                        <option value="small" <?php echo $userSettings['appearance']['font_size'] === 'small' ? 'selected' : ''; ?>>Pequeno</option>
                                        <option value="medium" <?php echo $userSettings['appearance']['font_size'] === 'medium' ? 'selected' : ''; ?>>Médio</option>
                                        <option value="large" <?php echo $userSettings['appearance']['font_size'] === 'large' ? 'selected' : ''; ?>>Grande</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="settings-space-y-4 settings-mt-6">
                                <h3 class="settings-group-title">Idioma</h3>
                                
                                <div class="settings-form-field">
                                    <label for="language" class="settings-label">Idioma da aplicação</label>
                                    <select 
                                        id="language" 
                                        name="appearance[language]" 
                                        class="settings-select"
                                    >
                                        <option value="pt-BR" <?php echo $userSettings['appearance']['language'] === 'pt-BR' ? 'selected' : ''; ?>>Português (Brasil)</option>
                                        <option value="en-US" <?php echo $userSettings['appearance']['language'] === 'en-US' ? 'selected' : ''; ?>>English (US)</option>
                                        <option value="es" <?php echo $userSettings['appearance']['language'] === 'es' ? 'selected' : ''; ?>>Español</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="settings-mt-6">
                                <button type="submit" name="save_appearance" class="settings-btn">
                                    Salvar preferências
                                </button>
                            </div>
                        </form>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <script>
        // Toast notification script
        document.addEventListener('DOMContentLoaded', function() {
            const toast = document.querySelector('.settings-toast');
            if (toast) {
                setTimeout(function() {
                    toast.style.opacity = '0';
                    toast.style.transition = 'opacity 0.5s ease';
                    setTimeout(function() {
                        toast.remove();
                    }, 500);
                }, 3000);
            }
            
            // Theme selection
            const themeOptions = document.querySelectorAll('[name="appearance[theme]"]');
            themeOptions.forEach(function(option) {
                option.addEventListener('change', function() {
                    const themeContainers = document.querySelectorAll('.settings-theme-option');
                    themeContainers.forEach(function(container) {
                        container.classList.remove('active');
                    });
                    
                    if (this.checked) {
                        const selectedContainer = this.closest('.settings-theme-option');
                        selectedContainer.classList.add('active');
                    }
                });
            });
        });
    </script>
</body>
</html>