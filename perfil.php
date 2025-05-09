<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - TydraPI</title>
    <style>
        .sidebar {
            width: 20%;
            position: fixed;
        }
 
      
        .content-wrapper {
            align-self: center;
            margin-left: 260px;
            padding: 20px;
            width: calc(100%);
        }

        .perfil-avatar-container {
            top: 50px !important;

        }
    </style>
    <script src="https://unpkg.com/lucide@latest"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">

    <?php include 'header.php' ?>
</head>
<body>
    <?php include 'sidebar.php' ?>
    <div class="perfil-body content-wrapper">
    <div class="perfil-container perfil-animate-fade-in">
        <div class="perfil-flex perfil-flex-col perfil-md-flex-row perfil-gap-6">
            <!-- Coluna de perfil -->
            <div class="perfil-w-full perfil-md-w-1-3 perfil-space-y-4">
                <div class="perfil-card perfil-overflow-hidden">
                    <div class="perfil-gradient-banner"></div>
                    <div class="perfil-card-content perfil-pt-0 perfil-relative">
                        <div class="perfil-avatar-container">
                            <div class="perfil-avatar">
                                <img src="https://i.pravatar.cc/150?img=68" alt="João Silva" class="perfil-avatar-img">
                            </div>
                        </div>
                        <div class="perfil-pt-12 perfil-pb-4">
                            <div class="perfil-flex perfil-justify-between perfil-items-start">
                                <div>
                                    <h2 class="perfil-name">João Silva</h2>
                                    <p class="perfil-username">@joaosilva</p>
                                </div>
                                <button class="perfil-btn-outline">
                                    <i data-lucide="edit" class="perfil-icon-sm"></i> Editar
                                </button>
                            </div>
                            
                            <p class="perfil-mt-4 perfil-bio">Desenvolvedor Full Stack | React, Node.js, TypeScript | Entusiasta de IA e Tecnologias Emergentes | São Paulo, Brasil</p>
                            
                            <div class="perfil-flex perfil-items-center perfil-mt-4 perfil-text-gray perfil-text-sm">
                                <i data-lucide="calendar" class="perfil-icon-sm perfil-mr-2"></i>
                                <span>Membro desde Abril 2023</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="perfil-card">
                    <div class="perfil-card-header">
                        <div class="perfil-card-title">Estatísticas</div>
                    </div>
                    <div class="perfil-card-content">
                        <div class="perfil-grid perfil-grid-cols-3 perfil-gap-4 perfil-text-center">
                            <div>
                                <p class="perfil-stats-value">128</p>
                                <p class="perfil-stats-label">Conexões</p>
                            </div>
                            <div>
                                <p class="perfil-stats-value">5</p>
                                <p class="perfil-stats-label">Grupos</p>
                            </div>
                            <div>
                                <p class="perfil-stats-value">92%</p>
                                <p class="perfil-stats-label">Reputação</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="perfil-card">
                    <div class="perfil-card-header">
                        <div class="perfil-card-title">Impressões</div>
                    </div>
                    <div class="perfil-card-content">
                        <div class="perfil-space-y-4">
                            <div class="perfil-flex perfil-items-center">
                                <div class="perfil-text-green perfil-mr-3">
                                    <i data-lucide="thumbs-up" class="perfil-icon"></i>
                                </div>
                                <div class="perfil-flex-1">
                                    <div class="perfil-progress-bar">
                                        <div class="perfil-progress-fill perfil-bg-green" style="width: 70%"></div>
                                    </div>
                                </div>
                                <span class="perfil-ml-3 perfil-text-sm">24</span>
                            </div>
                            <div class="perfil-flex perfil-items-center">
                                <div class="perfil-text-gray perfil-mr-3">
                                    <i data-lucide="heart" class="perfil-icon"></i>
                                </div>
                                <div class="perfil-flex-1">
                                    <div class="perfil-progress-bar">
                                        <div class="perfil-progress-fill perfil-bg-gray" style="width: 23%"></div>
                                    </div>
                                </div>
                                <span class="perfil-ml-3 perfil-text-sm">8</span>
                            </div>
                            <div class="perfil-flex perfil-items-center">
                                <div class="perfil-text-red perfil-mr-3">
                                    <i data-lucide="thumbs-down" class="perfil-icon"></i>
                                </div>
                                <div class="perfil-flex-1">
                                    <div class="perfil-progress-bar">
                                        <div class="perfil-progress-fill perfil-bg-red" style="width: 6%"></div>
                                    </div>
                                </div>
                                <span class="perfil-ml-3 perfil-text-sm">2</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="perfil-card">
                    <div class="perfil-card-header">
                        <div class="perfil-card-title">Conquistas</div>
                    </div>
                    <div class="perfil-card-content">
                        <div class="perfil-space-y-3">
                            <div class="perfil-flex perfil-items-start">
                                <div class="perfil-badge perfil-mr-3">1</div>
                                <div>
                                    <h4 class="perfil-badge-title">Conversador Ativo</h4>
                                    <p class="perfil-badge-desc">Mantém conversas ativas diariamente</p>
                                </div>
                            </div>
                            <div class="perfil-flex perfil-items-start">
                                <div class="perfil-badge perfil-mr-3">2</div>
                                <div>
                                    <h4 class="perfil-badge-title">Criador de Conteúdo</h4>
                                    <p class="perfil-badge-desc">Publica conteúdo valioso regularmente</p>
                                </div>
                            </div>
                            <div class="perfil-flex perfil-items-start">
                                <div class="perfil-badge perfil-mr-3">3</div>
                                <div>
                                    <h4 class="perfil-badge-title">Moderador</h4>
                                    <p class="perfil-badge-desc">Ajuda a manter a comunidade saudável</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Coluna de conteúdo -->
            <div class="perfil-w-full perfil-md-w-2-3">
                <div class="perfil-tabs">
                    <ul class="perfil-tabs-list">
                        <li class="perfil-tab perfil-tab-active" data-tab="activity">Atividade</li>
                        <li class="perfil-tab" data-tab="connections">Conexões</li>
                        <li class="perfil-tab" data-tab="groups">Grupos</li>
                    </ul>
                    
                    <div class="perfil-tab-content perfil-tab-content-active" id="activity">
                        <div class="perfil-card">
                            <div class="perfil-card-header">
                                <div class="perfil-card-title">Atividades Recentes</div>
                            </div>
                            <div class="perfil-card-content">
                                <div class="perfil-space-y-6 perfil-relative">
                                    <div class="perfil-timeline-line"></div>
                                    
                                    <div class="perfil-timeline-item">
                                        <div class="perfil-timeline-icon">
                                            <i data-lucide="users" class="perfil-icon-xs"></i>
                                        </div>
                                        <div>
                                            <h4 class="perfil-timeline-title">Novo Match</h4>
                                            <p class="perfil-timeline-desc">Você e Ana Paula agora estão conectados</p>
                                            <p class="perfil-timeline-time">Hoje, 14:23</p>
                                        </div>
                                        <div class="perfil-divider"></div>
                                    </div>
                                    
                                    <div class="perfil-timeline-item">
                                        <div class="perfil-timeline-icon">
                                            <i data-lucide="users" class="perfil-icon-xs"></i>
                                        </div>
                                        <div>
                                            <h4 class="perfil-timeline-title">Novo Grupo</h4>
                                            <p class="perfil-timeline-desc">Você entrou no grupo 'Desenvolvedores React Brasil'</p>
                                            <p class="perfil-timeline-time">Ontem, 10:45</p>
                                        </div>
                                        <div class="perfil-divider"></div>
                                    </div>
                                    
                                    <div class="perfil-timeline-item">
                                        <div class="perfil-timeline-icon">
                                            <i data-lucide="message-square" class="perfil-icon-xs"></i>
                                        </div>
                                        <div>
                                            <h4 class="perfil-timeline-title">Chat Expirado</h4>
                                            <p class="perfil-timeline-desc">Seu chat com Carlos Eduardo expirou após 24h</p>
                                            <p class="perfil-timeline-time">12 Abr, 2025</p>
                                        </div>
                                        <div class="perfil-divider"></div>
                                    </div>
                                    
                                    <div class="perfil-timeline-item">
                                        <div class="perfil-timeline-icon">
                                            <i data-lucide="thumbs-up" class="perfil-icon-xs"></i>
                                        </div>
                                        <div>
                                            <h4 class="perfil-timeline-title">Reputação Aumentada</h4>
                                            <p class="perfil-timeline-desc">Você recebeu 3 avaliações positivas esta semana</p>
                                            <p class="perfil-timeline-time">10 Abr, 2025</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="perfil-tab-content" id="connections">
                        <div class="perfil-card">
                            <div class="perfil-card-header">
                                <div class="perfil-card-title">Minhas Conexões</div>
                            </div>
                            <div class="perfil-card-content">
                                <p class="perfil-text-gray perfil-mb-4">Você possui 128 conexões</p>
                                
                                <div class="perfil-grid perfil-grid-cols-1 perfil-md-grid-cols-2 perfil-gap-4">
                                    <?php for($i = 1; $i <= 4; $i++): ?>
                                    <div class="perfil-connection-item">
                                        <div class="perfil-connection-avatar">
                                            <img src="https://i.pravatar.cc/150?img=<?php echo $i + 20; ?>" alt="Usuário <?php echo $i; ?>">
                                        </div>
                                        <div class="perfil-ml-3 perfil-flex-1">
                                            <h4 class="perfil-connection-name">Usuário <?php echo $i; ?></h4>
                                            <p class="perfil-connection-username">@usuario<?php echo $i; ?></p>
                                        </div>
                                        <button class="perfil-btn-ghost">
                                            <i data-lucide="message-square" class="perfil-icon-sm"></i>
                                        </button>
                                    </div>
                                    <?php endfor; ?>
                                </div>
                                
                                <button class="perfil-btn-secondary perfil-w-full perfil-mt-4">
                                    Ver todas as conexões
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="perfil-tab-content" id="groups">
                        <div class="perfil-card">
                            <div class="perfil-card-header">
                                <div class="perfil-card-title">Meus Grupos</div>
                            </div>
                            <div class="perfil-card-content">
                                <p class="perfil-text-gray perfil-mb-4">Você participa de 5 grupos</p>
                                
                                <div class="perfil-space-y-4">
                                    <?php for($i = 1; $i <= 3; $i++): ?>
                                    <div class="perfil-group-item">
                                        <div class="perfil-group-avatar">
                                            <img src="https://i.pravatar.cc/150?img=<?php echo $i + 50; ?>" alt="Grupo <?php echo $i; ?>">
                                        </div>
                                        <div class="perfil-ml-3 perfil-flex-1">
                                            <h4 class="perfil-group-name">Grupo <?php echo $i; ?></h4>
                                            <p class="perfil-group-members">123 membros</p>
                                            <p class="perfil-group-desc perfil-mt-1">Descrição breve do grupo <?php echo $i; ?>...</p>
                                        </div>
                                        <button class="perfil-btn-outline">
                                            Ver grupo
                                        </button>
                                    </div>
                                    <?php endfor; ?>
                                </div>
                                
                                <button class="perfil-btn-secondary perfil-w-full perfil-mt-4">
                                    Ver todos os grupos
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Inicialização dos ícones Lucide
        lucide.createIcons();
        
        // Funcionalidade das abas
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('.perfil-tab');
            
            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    // Remover classe ativa de todas as abas
                    tabs.forEach(t => t.classList.remove('perfil-tab-active'));
                    
                    // Adicionar classe ativa à aba clicada
                    this.classList.add('perfil-tab-active');
                    
                    // Ocultar todos os conteúdos
                    const contents = document.querySelectorAll('.perfil-tab-content');
                    contents.forEach(content => content.classList.remove('perfil-tab-content-active'));
                    
                    // Mostrar o conteúdo correspondente
                    const tabId = this.getAttribute('data-tab');
                    document.getElementById(tabId).classList.add('perfil-tab-content-active');
                });
            });
        });
    </script>
    </div>
    
</body>
</html>