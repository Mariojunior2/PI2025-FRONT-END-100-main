<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recursos Educacionais - TydraPI</title>
    <style>
        .sidebar {
            position: fixed;
        }
        
    </style>
    <?php include 'header.php' ?>
</head>
<body>
    <?php include 'sidebar.php' ?>
    <div class="content-wrapper">
        <!-- Cabeçalho de recursos -->
        <div class="resources-header">
            <h2 class="resources-title">Recursos Educacionais</h2>
            <div class="d-flex align-items-center gap-2">
                <div class="search-container search-container-education">
                    <input type="text" class="search-bar" placeholder="Buscar recursos...">
                    <i class="search-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </i>
                </div>
                <button class="filter-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel" viewBox="0 0 16 16">
                        <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2h-11z"/>
                    </svg>
                    <span>Filtros</span>
                </button>
            </div>
        </div>

        <!-- Seções de filtro -->
        <div class="row g-3 mb-3">
            <!-- Filtrar por Nível -->
            <div class="col-md-3">
                <div class="filter-card">
                    <h5>Filtrar por Nível</h5>
                    <button class="filter-option active">Todos os Níveis</button>
                    <button class="filter-option">Iniciante</button>
                    <button class="filter-option">Intermediário</button>
                    <button class="filter-option">Avançado</button>
                </div>
            </div>

            <!-- Filtrar por Assunto -->
            <div class="col-md-3">
                <div class="filter-card">
                    <h5>Filtrar por Assunto</h5>
                    <button class="filter-option active d-flex justify-content-between align-items-center">
                        <span>Todos os Assuntos</span>
                        <span>📄</span>
                    </button>
                    <button class="filter-option">Matemática</button>
                    <button class="filter-option">Física</button>
                    <button class="filter-option">Programação</button>
                    <button class="filter-option">Idiomas</button>
                </div>
            </div>

            <!-- Formato -->
            <div class="col-md-3">
                <div class="filter-card">
                    <h5>Formato</h5>
                    <button class="filter-option active">Todos os Formatos</button>
                    <button class="filter-option">PDF/Documento</button>
                    <button class="filter-option">Vídeo</button>
                    <button class="filter-option">Áudio</button>
                    <button class="filter-option d-flex justify-content-between align-items-center">
                        <span>Interativo</span>
                        <span class="format-badge">Open</span>
                    </button>
                </div>
            </div>

            <!-- Opções -->
            <div class="col-md-3">
                <div class="filter-card">
                    <h5>Opções</h5>
                    <p class="text-secondary-custom">Ordenar por</p>
                    <select class="form-select">
                        <option>Mais recentes</option>
                        <option>Mais populares</option>
                        <option>Mais relevantes</option>
                    </select>
                    
                    <div class="form-check mt-3">
                        <input class="form-check-input" type="checkbox" id="certificacaoCheck">
                        <label class="form-check-label" for="certificacaoCheck">
                            Com certificação
                        </label>
                    </div>
                    
                    <div class="d-flex mt-3 gap-2">
                        <button class="btn-primary action-btn" style="border-radius: 0%;">Grade</button>
                        <button class="tab-button secondary">Lista</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Informações -->
        <div class="row mb-3">
            <div class="col-md-12">
                <div class="filter-card">
                    <h5>Informações</h5>
                    <p class="info-text">
                        Recursos educacionais para aprimorar seus estudos e conhecimentos. Use os filtros para encontrar exatamente o que você está procurando.
                    </p>
                    
                    <div class="categories-container">
                        <div class="category-item">
                            <div class="resource-icon icon-blue">
                            <span>📚</span>
                            </div>
                            <p class="category-text">Material<br>de Estudo</p>
                        </div>
                        
                        <div class="category-item">
                            <div class="resource-icon icon-red">
                                <span>🎬</span>
                            </div>
                            <p class="category-text">Vídeo<br>Aulas</p>
                        </div>
                        
                        <div class="category-item">
                            <div class="resource-icon icon-yellow">
                                <span>🎯</span>
                            </div>
                            <p class="category-text">Exercícios</p>
                        </div>
                        
                        <div class="category-item">
                            <div class="resource-icon icon-green">
                                <span>📝</span>
                            </div>
                            <p class="category-text">Dicas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Barra de Tabs -->
        <div class="footer-tabs mb-3 align-items-center"  role="tablist" aria-label="Categorias de recursos">
    
            <button class="footer-tab" role="tab" aria-selected="false" tabindex="-1">
                <i class="bi bi-book me-1" aria-hidden="true"></i>
                <span>Material de Estudo</span>
            </button>
            <button class="footer-tab" role="tab" aria-selected="false" tabindex="-1">
                <i class="bi bi-camera-video me-1" aria-hidden="true"></i>
                <span>Vídeo Aulas</span>
            </button>
            <button class="footer-tab" role="tab" aria-selected="false" tabindex="-1">
                <i class="bi bi-pencil-square me-1" aria-hidden="true"></i>
                <span>Exercícios</span>
            </button>
            <button class="footer-tab" role="tab" aria-selected="false" tabindex="-1">
                <i class="bi bi-journal-text me-1" aria-hidden="true"></i>
                <span>Dicas</span>
            </button>
            <button class="footer-tab" role="tab" aria-selected="false" tabindex="-1">
                <i class="bi bi-question-circle me-1" aria-hidden="true"></i>
                <span>Quizzes</span>
            </button>

            <button class="footer-tab" role="tab" aria-selected="false" tabindex="-1">
                <i class="bi bi-journal-bookmark me-1" aria-hidden="true"></i>
                <span>Cursos</span>
            </button>
            <button class="footer-tab" role="tab" aria-selected="false" tabindex="-1">
                <i class="bi bi-bar-chart me-1" aria-hidden="true"></i>
                <span>Apresentações</span>
            </button>
            <button class="footer-tab" role="tab" aria-selected="false" tabindex="-1">
                <i class="bi bi-file-earmark-text me-1" aria-hidden="true"></i>
                <span>Artigos</span>
            </button>
        </div>

        <!-- Cards de Recursos -->
        <div class="row">
            <?php
            $resources = [
                [
                    'icon' => 'bi-book',
                    'icon_color' => 'icon-yellow',
                    'title' => 'Pomodoro e outras técnicas de foco',
                    'tags' => ['Técnica', 'Estudo', 'Geral'],
                    'description' => 'Aprenda a usar o método Pomodoro e outras técnicas para aumentar sua concentração nos estudos.',
                    'author' => 'Carolina Mendes (Instituto de Produtividade Acadêmica)',
                    'stats' => ['Produtividade', 'Foco', 'Técnicas de Estudo'],
                    'views' => '623 visualizações',
                    'updated' => 'Atualizado em: 2024-03-15'
                ],
                [
                    'icon' => 'bi-file-earmark-text',
                    'icon_color' => 'icon-green',
                    'title' => 'Artigo Científico: Impactos da IA na Educação',
                    'tags' => ['Artigo Científico', 'Acadêmico', 'IA'],
                    'description' => 'Artigo acadêmico sobre como a Inteligência Artificial está transformando os métodos educacionais.',
                    'author' => 'Prof. Dr. Gustavo Mendes (Instituto de Pesquisas Educacionais)',
                    'stats' => ['IA', 'Educação', 'Pesquisa'],
                    'views' => '285 visualizações',
                    'updated' => 'Atualizado em: 2024-03-05'
                ]
            ];
            foreach ($resources as $resource) {
                echo '<div class="col-md-6 mb-3">';
                echo '<div class="resource-card">';
                echo '<div class="card-header">';
                echo '<div class="card-icon ' . $resource["icon_color"] . '">';
                echo '<i class="bi ' . $resource["icon"] . '" aria-hidden="true"></i>';
                echo '</div>';
                echo '<div class="card-title-area">';
                echo '<h3 class="card-title">' . $resource["title"] . '</h3>';
                echo '<div>';
                foreach ($resource["tags"] as $tag) {
                    echo '<span class="tag">' . $tag . '</span>';
                }
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '<p class="card-description">' . $resource["description"] . '</p>';
                echo '<p class="card-author">Autor: ' . $resource["author"] . '</p>';
                echo '<div class="card-stats">';
                foreach ($resource["stats"] as $stat) {
                    echo '<span>' . $stat . '</span>';
                }
                echo '</div>';
                echo '<div class="card-stats">';
                echo '<span>' . $resource["views"] . '</span>';
                echo '<span>' . $resource["updated"] . '</span>';
                echo '</div>';
                echo '<div class="card-divider"></div>';
                echo '<div class="card-actions">';
                echo '<button class="action-btn btn-primary">Abrir</button>';
                echo '<div class="icon-buttons">';
                echo '<button class="icon-btn">';
                echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">';
                echo '<path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>';
                echo '<path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>';
                echo '</svg>';
                echo '</button>';
                echo '<button class="icon-btn">';
                echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">';
                echo '<path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/>';
                echo '</svg>';
                echo '</button>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>