<?php
// Start session for potential future use
session_start();

// Data for trending topics
$tendencias = [
    [
        'titulo' => 'Inteligência Artificial no Brasil',
        'categoria' => 'Tecnologia',
        'posts' => '1240',
        'em_alta' => true
    ],
    [
        'titulo' => 'Desenvolvimento Web 2023',
        'categoria' => 'Programação',
        'posts' => '890',
        'em_alta' => true
    ],
    [
        'titulo' => 'Design de interfaces minimalistas',
        'categoria' => 'Design',
        'posts' => '567',
        'em_alta' => false
    ],
    [
        'titulo' => 'Cloud Computing e DevOps',
        'categoria' => 'Tecnologia',
        'posts' => '732',
        'em_alta' => false
    ],
    [
        'titulo' => 'Frameworks JavaScript Modernos',
        'categoria' => 'Programação',
        'posts' => '945',
        'em_alta' => true
    ]
];

// Data for groups
$grupos = [
    [
        'nome' => 'Desenvolvedores React Brasil',
        'membros' => '1856',
        'descricao' => 'Grupo para discutir React, React Native e todo o ecossistema Javascript no Brasil.',
        'tags' => ['React', 'JavaScript', 'Frontend']
    ],
    [
        'nome' => 'Inteligência Artificial e Machine Learning',
        'membros' => '2453',
        'descricao' => 'Discussões sobre IA, ML, Deep Learning e suas aplicações na indústria e academia.',
        'tags' => ['IA', 'Machine Learning', 'Tecnologia']
    ],
    [
        'nome' => 'UX/UI Designers Brasil',
        'membros' => '1352',
        'descricao' => 'Comunidade de designers compartilhando conhecimento sobre experiência do usuário e interfaces.',
        'tags' => ['UX', 'UI', 'Design']
    ],
    [
        'nome' => 'DevOps e Cloud',
        'membros' => '978',
        'descricao' => 'Grupo focado em infraestrutura, automação, CI/CD e serviços em nuvem.',
        'tags' => ['DevOps', 'Cloud', 'AWS', 'Docker']
    ]
];

// Data for events
$eventos = [
    [
        'titulo' => 'Workshop de IA Generativa',
        'data' => '15 Abr, 2023',
        'horario' => '19:00 - 21:00',
        'local' => 'Online',
        'participantes' => '234',
        'organizador' => 'Comunidade IA Brasil'
    ],
    [
        'titulo' => 'Meetup de Desenvolvedores',
        'data' => '28 Abr, 2023',
        'horario' => '14:00 - 18:00',
        'local' => 'São Paulo, SP',
        'participantes' => '87',
        'organizador' => 'Dev Community SP'
    ],
    [
        'titulo' => 'Conferência de UX/UI Design',
        'data' => '10 Mai, 2023',
        'horario' => '09:00 - 18:00',
        'local' => 'Rio de Janeiro, RJ',
        'participantes' => '156',
        'organizador' => 'Brazilian Design Association'
    ],
    [
        'titulo' => 'Hackathon: Tecnologia para Saúde',
        'data' => '22 Mai, 2023',
        'horario' => '08:00 - 20:00',
        'local' => 'Online',
        'participantes' => '312',
        'organizador' => 'Health Tech Brazil'
    ]
];

// Data for users
$usuarios = [
    [
        'nome' => 'Juliana Mendes',
        'username' => '@julianamendes',
        'seguidores' => '1245',
        'verificado' => true,
        'bio' => 'Desenvolvedora Frontend | React | UX/UI Design'
    ],
    [
        'nome' => 'Ricardo Alves',
        'username' => '@ricardoalves',
        'seguidores' => '982',
        'verificado' => false,
        'bio' => 'Tech Lead at @empresa | JS, TS, Node | Mentor'
    ],
    [
        'nome' => 'Carolina Lima',
        'username' => '@carolina',
        'seguidores' => '3572',
        'verificado' => true,
        'bio' => 'Designer de Produto | Professora de UX/UI | Palestrante'
    ],
    [
        'nome' => 'Pedro Santos',
        'username' => '@pedrosantos',
        'seguidores' => '756',
        'verificado' => false,
        'bio' => 'Desenvolvedor Backend | Python | Java | Cloud Computing'
    ],
    [
        'nome' => 'Marina Costa',
        'username' => '@marinacosta',
        'seguidores' => '2135',
        'verificado' => true,
        'bio' => 'AI Researcher | Data Science | Machine Learning | PhD'
    ]
];

// Determine which tab is active
$active_tab = isset($_GET['tab']) ? $_GET['tab'] : 'tendencias';

// Validate tab parameter
$valid_tabs = ['tendencias', 'grupos', 'eventos', 'usuarios'];
if (!in_array($active_tab, $valid_tabs)) {
    $active_tab = 'tendencias';
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explorar - TydraPI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <?php include 'header.php'; ?>
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
    </style>
</head>
<body>

        <!-- Sidebar -->
        <?php include 'sidebar.php' ?>
        <div class="d-flex">
        <!-- Main content -->
        <div class="content-wrapper">
            <div class="container">
                <header class="header row">
                <div class="col align-items-center p-3">    
                <h1>Explorar</h1>
                </div>

                <!-- Search Bar -->
                 
                <div class="search-container col justify-center search-container-explorar">
                    <input type="text" class="search-bar" placeholder="Buscar..." aria-label="Buscar">
                </div>
                </header>

                <!-- Navigation Tabs -->
                <nav class="tabs">
                    <a href="?tab=tendencias" class="tab-link <?php echo $active_tab === 'tendencias' ? 'active' : ''; ?>">
                        <i class="fas fa-chart-line"></i> Tendências
                    </a>
                    <a href="?tab=grupos" class="tab-link <?php echo $active_tab === 'grupos' ? 'active' : ''; ?>">
                        <i class="fas fa-users"></i> Grupos
                    </a>
                    <a href="?tab=eventos" class="tab-link <?php echo $active_tab === 'eventos' ? 'active' : ''; ?>">
                        <i class="far fa-calendar-alt"></i> Eventos
                    </a>
                    <a href="?tab=usuarios" class="tab-link <?php echo $active_tab === 'usuarios' ? 'active' : ''; ?>">
                        <i class="fas fa-user"></i> Usuários
                    </a>
                </nav>

                <main class="content">
                    <?php if ($active_tab === 'tendencias'): ?>
                        <!-- Tendências Tab Content -->
                        <div class="tendencias-container">
                            <?php foreach ($tendencias as $topico): ?>
                                <div class="card">
                                    <div class="card-header">
                                        <div>
                                            <h2 class="card-title"><?php echo htmlspecialchars($topico['titulo']); ?></h2>
                                            <div class="card-meta">
                                                <span class="tag"><?php echo htmlspecialchars($topico['categoria']); ?></span>
                                                <span><?php echo htmlspecialchars($topico['posts']); ?> posts</span>
                                            </div>
                                        </div>
                                        <?php if ($topico['em_alta']): ?>
                                            <span class="badge">Em alta</span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php elseif ($active_tab === 'grupos'): ?>
                        <!-- Grupos Tab Content -->
                        <div class="grupos-container">
                            <?php foreach ($grupos as $grupo): ?>
                                <div class="card">
                                    <div class="card-header">
                                        <div class="user-profile">
                                            <div class="avatar">
                                                <i class="fas fa-users"></i>
                                            </div>
                                            <div class="user-info">
                                                <h2 class="card-title"><?php echo htmlspecialchars($grupo['nome']); ?></h2>
                                                <div class="follower-count"><?php echo htmlspecialchars($grupo['membros']); ?> membros</div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="card-description"><?php echo htmlspecialchars($grupo['descricao']); ?></p>
                                    
                                    <div class="tags-container">
                                        <?php foreach ($grupo['tags'] as $tag): ?>
                                            <span class="tag"><?php echo htmlspecialchars($tag); ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                    
                                    <div class="card-actionsEvents">
                                        <button class="btn btn-participate w-100">Participar</button>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php elseif ($active_tab === 'eventos'): ?>
                        <!-- Eventos Tab Content -->
                        <div class="eventos-container">
                            <?php foreach ($eventos as $evento): ?>
                                <div class="card">
                                    <div class="card-header">
                                        <div>
                                            <h2 class="card-title"><?php echo htmlspecialchars($evento['titulo']); ?></h2>
                                            <div class="event-date">
                                                <?php echo htmlspecialchars($evento['data']); ?> • <?php echo htmlspecialchars($evento['horario']); ?>
                                            </div>
                                            <div class="event-location">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <?php echo htmlspecialchars($evento['local']); ?> • <?php echo htmlspecialchars($evento['participantes']); ?> participantes
                                            </div>
                                            <div class="event-organizer">
                                                Organizado por: <?php echo htmlspecialchars($evento['organizador']); ?>
                                            </div>
                                        </div>
                                        <button class="btn">Participar</button>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php elseif ($active_tab === 'usuarios'): ?>
                        <!-- Usuários Tab Content -->
                        <div class="usuarios-container">
                            <?php foreach ($usuarios as $usuario): ?>
                                <div class="card">
                                    <div class="user-profile">
                                        <div class="avatar">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <div class="user-info">
                                            <div class="user-name">
                                                <?php echo htmlspecialchars($usuario['nome']); ?>
                                                <?php if ($usuario['verificado']): ?>
                                                    <span class="verification-badge">Verificado</span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="username"><?php echo htmlspecialchars($usuario['username']); ?> • <?php echo htmlspecialchars($usuario['seguidores']); ?> seguidores</div>
                                            <div class="user-bio"><?php echo htmlspecialchars($usuario['bio']); ?></div>
                                        </div>
                                        <button class="btn">Seguir</button>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </main>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Search bar functionality
            const searchBar = document.querySelector('.search-bar');
            if (searchBar) {
                searchBar.addEventListener('input', function() {
                    // This is a placeholder for search functionality
                    // In a real application, this would filter content or make AJAX requests
                    console.log('Searching for:', this.value);
                });
            }

            // Button click handlers
            const participateButtons = document.querySelectorAll('.btn-participate');
            participateButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    // This would typically send a request to join a group or event
                    this.textContent = 'Solicitado';
                    this.classList.add('btn-outline');
                    this.disabled = true;
                });
            });

            const followButtons = document.querySelectorAll('.btn-follow');
            followButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    if (this.textContent.trim() === 'Seguir') {
                        this.textContent = 'Seguindo';
                        this.classList.add('btn-outline');
                    } else {
                        this.textContent = 'Seguir';
                        this.classList.remove('btn-outline');
                    }
                });
            });
        });
    </script>
</body>
</html>