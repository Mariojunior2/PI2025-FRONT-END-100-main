<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comunidades - TydraPI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
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
    <div class="communities-header">
        <h1 class="communities-title">Comunidades</h1>
        <div class="d-flex align-items-center">
            <div class="search-container search-container-comunition">
                <input type="text" class="search-input" placeholder="Buscar comunidades...">
                <span class="search-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </span>
            </div>
            <button class="create-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg>
                Criar Grupo
            </button>
        </div>
    </div>

    <div class="nav-tabs" style="border: none;">
        <div class="nav-tab">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
            </svg>
            Meus Grupos
        </div>
        <div class="nav-tab active">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8 16.016a7.5 7.5 0 0 0 1.962-14.74A1 1 0 0 0 9 0H7a1 1 0 0 0-.962 1.276A7.5 7.5 0 0 0 8 16.016zm6.5-7.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                <path d="m6.94 7.44 4.95-2.83-2.83 4.95-4.949 2.83 2.828-4.95z"/>
            </svg>
            Descobrir
        </div>
        <div class="nav-tab">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
            </svg>
            Eventos
        </div>
    </div>

    <!-- Conteúdo da aba Descobrir -->
    <div id="discover-content">
        <!-- Grupo 1 - Machine Learning Brasil -->
        <div class="group-card">
            <div class="group-header">
                <div class="group-avatar">
                    <img src="https://github.com/identicons/app/oauth_app/1902131" alt="Machine Learning Brasil">
                </div>
                <div class="group-info">
                    <h3 class="group-title">Machine Learning Brasil</h3>
                    <div class="group-meta">1245 membros</div>
                </div>
            </div>
            
            <p class="group-description">
                Grupo para discussão de técnicas e implementações de machine learning
            </p>
            
            <div class="tag-container">
                <span class="tag">IA</span>
                <span class="tag">Machine Learning</span>
                <span class="tag">Data Science</span>
            </div>
            
            <button class="join-btn">Participar</button>
        </div>

        <!-- Grupo 2 - Front-end Developers -->
        <div class="group-card">
            <div class="group-header">
                <div class="group-avatar">
                    <img src="https://github.com/identicons/app/oauth_app/1902132" alt="Front-end Developers">
                </div>
                <div class="group-info">
                    <h3 class="group-title">Front-end Developers</h3>
                    <div class="group-meta">2897 membros</div>
                </div>
            </div>
            
            <p class="group-description">
                Comunidade para desenvolvedores front-end compartilharem experiências e novidades
            </p>
            
            <div class="tag-container">
                <span class="tag">HTML</span>
                <span class="tag">CSS</span>
                <span class="tag">JavaScript</span>
                <span class="tag">Front-end</span>
            </div>
            
            <button class="join-btn">Participar</button>
        </div>
    </div>

    <!-- Eventos (inicialmente ocultos, mostrados quando a aba Eventos for clicada) -->
    <div id="events-content" style="display: none;">
  <!-- Grid de eventos usando Bootstrap e classes personalizadas -->
  <div class="events-grid-container">
    <!-- Aqui trocamos row-cols-1 row-cols-md-2 row-cols-lg-3 por row-cols-2 -->
    <div class="row row-cols-2 g-4">
      
      <!-- Evento 1 -->
      <div class="col events-grid-item">
        <div class="event-card h-100">
          <div class="event-header">
            <div class="event-icon icon-square" style="background-color: var(--purple-badge) !important;">
              <!-- ícone SVG -->
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
              </svg>
            </div>
            <div class="group-info">
              <h3 class="group-title">Workshop: Técnicas de Estudo Eficiente</h3>
              <div class="event-badges">
                <span class="badge badge-purple">Workshop</span>
                <span class="event-date">Sábado, 10h</span>
              </div>
            </div>
          </div>
        
          <p class="group-description">
            Aprenda métodos comprovados para estudar de forma mais eficiente e aumentar sua retenção de conteúdo.
          </p>
        
          <div class="group-tags">
            <span class="tag">Produtividade</span>
            <span class="tag">Estudo</span>
            <span class="tag">Workshop</span>
          </div>
        
          <div class="progress-bar">
            <div class="progress-fill purple"></div>
          </div>
          <div class="participants-count">28/35 participantes</div>
        
          <button class="join-btn mt-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="calendar-icon" viewBox="0 0 16 16">
              <path d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z"/>
              <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
            </svg>
            Participar
          </button>
        </div>
      </div>

      <!-- Evento 2 -->
      <div class="col events-grid-item">
        <div class="event-card h-100">
          <div class="event-header">
            <div class="event-icon icon-square" style="background-color: var(--orange-badge) !important;">
              <!-- ícone SVG -->
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8 3a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V8a6 6 0 1 1 12 0v5a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h1V8a5 5 0 0 0-5-5z"/>
              </svg>
            </div>
            <div class="group-info">
              <h3 class="group-title">Sessão de Estudo em Grupo: Física</h3>
              <div class="event-badges">
                <span class="badge badge-orange">Estudo em Grupo</span>
                <span class="event-date">Quarta, 16h</span>
              </div>
            </div>
          </div>
        
          <p class="group-description">
            Grupo de estudo para resolver exercícios de Física e discutir conceitos difíceis juntos.
          </p>
        
          <div class="group-tags">
            <span class="tag">Física</span>
            <span class="tag">Estudo em Grupo</span>
            <span class="tag">Exercícios</span>
          </div>
        
          <div class="progress-bar">
            <div class="progress-fill orange"></div>
          </div>
          <div class="participants-count">8/15 participantes</div>
        
          <button class="join-btn mt-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="calendar-icon" viewBox="0 0 16 16">
              <path d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z"/>
              <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
            </svg>
            Participar
          </button>
        </div>
      </div>

      <!-- Evento 3 -->
      <div class="col events-grid-item">
        <div class="event-card h-100">
          <div class="event-header">
            <div class="event-icon icon-square" style="background-color: var(--red-badge) !important;">
              <!-- ícone SVG -->
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556v4.35zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H2z"/>
              </svg>
            </div>
            <div class="group-info">
              <h3 class="group-title">Debate: Inteligência Artificial na Educação</h3>
              <div class="event-badges">
                <span class="badge badge-red">Debate</span>
                <span class="event-date">Segunda, 20h</span>
              </div>
            </div>
          </div>
        
          <p class="group-description">
            Debate sobre como a IA está transformando a educação e qual o futuro do aprendizado.
          </p>
        
          <div class="group-tags">
            <span class="tag">IA</span>
            <span class="tag">Debate</span>
            <span class="tag">Tecnologia</span>
            <span class="tag">Educação</span>
          </div>
        
          <div class="progress-bar">
            <div class="progress-fill red"></div>
          </div>
          <div class="participants-count">32/60 participantes</div>
        
          <button class="join-btn mt-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="calendar-icon" viewBox="0 0 16 16">
              <path d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z"/>
              <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
            </svg>
            Participar
          </button>
        </div>
      </div>

    </div>
  </div>
</div>


    <!-- Meus Grupos (inicialmente ocultos, mostrados quando a aba Meus Grupos for clicada) -->
    <div id="my-groups-content" style="display: none;">
        <!-- Grupo 1 -->
        <div class="group-card">
            <div class="group-header">
                <div class="group-avatar">
                    <img src="https://github.com/identicons/app/oauth_app/1902135" alt="Desenvolvedores React Brasil">
                </div>
                <div class="group-info">
                    <h3 class="group-title">Desenvolvedores React Brasil</h3>
                    <div class="group-meta">
                        <span class="member-badge">Membro</span>
                        1856 membros
                        <span class="notification-badge">12 novos</span>
                    </div>
                </div>
                <div class="group-actions">
                    <button class="action-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15z"/>
                        </svg>
                    </button>
                </div>
            </div>
            
            <p class="active-time">Ativo: Há 5 minutos</p>
        </div>
        
        <!-- Grupo 2 -->
        <div class="group-card">
            <div class="group-header">
                <div class="group-avatar">
                    <img src="https://github.com/identicons/app/oauth_app/1902136" alt="UX/UI Design">
                </div>
                <div class="group-info">
                    <h3 class="group-title">UX/UI Design</h3>
                    <div class="group-meta">
                        <span class="admin-badge">Admin</span>
                        732 membros
                    </div>
                </div>
                <div class="group-actions">
                    <button class="action-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15z"/>
                        </svg>
                    </button>
                    <button class="action-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                        </svg>
                    </button>
                </div>
            </div>
            
            <p class="active-time">Ativo: Há 1 hora</p>
        </div>
        
        <!-- Grupo 3 -->
        <div class="group-card">
            <div class="group-header">
                <div class="group-avatar">
                    <img src="https://github.com/identicons/app/oauth_app/1902137" alt="Programadores São Paulo">
                </div>
                <div class="group-info">
                    <h3 class="group-title">Programadores São Paulo</h3>
                    <div class="group-meta">
                        <span class="member-badge">Membro</span>
                        3421 membros
                        <span class="notification-badge">5 novos</span>
                    </div>
                </div>
                <div class="group-actions">
                    <button class="action-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15z"/>
                        </svg>
                    </button>
                </div>
            </div>
            
            <p class="active-time">Ativo: Há 30 minutos</p>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Referências para as abas e conteúdos
    const tabs = document.querySelectorAll('.nav-tab');
    const discoverContent = document.getElementById('discover-content');
    const myGroupsContent = document.getElementById('my-groups-content');
    const eventsContent = document.getElementById('events-content');
    
    // Adiciona eventos de clique às abas
    tabs.forEach((tab, index) => {
        tab.addEventListener('click', function() {
            // Remove a classe active de todas as abas
            tabs.forEach(t => t.classList.remove('active'));
            
            // Adiciona a classe active à aba clicada
            this.classList.add('active');
            
            // Oculta todos os conteúdos
            discoverContent.style.display = 'none';
            myGroupsContent.style.display = 'none';
            eventsContent.style.display = 'none';
            
            // Mostra o conteúdo correspondente à aba clicada
            if (index === 0) {
                myGroupsContent.style.display = 'block';
            } else if (index === 1) {
                discoverContent.style.display = 'block';
            } else if (index === 2) {
                eventsContent.style.display = 'block';
            }
        });
    });
});
</script>


</body>
</html>