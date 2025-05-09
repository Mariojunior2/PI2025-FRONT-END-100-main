<!-- sidebar.php -->
<nav class="sidebar d-flex flex-column p-3">
  <a href="#" class="d-flex align-items-center mb-4 text-decoration-none">
    <span class="fs-4 text-danger me-1">Tydra</span><span class="fs-4 text-white">PI</span>
  </a>

  <?php
    $currentPage = basename($_SERVER['PHP_SELF']);
    // Menus with optional sub-items
    $menus = [
      [
        'label' => 'Recursos Educacionais',
        'icon'  => 'graduation-cap',
        'link'  => 'recursoeducacionais.php',
        'items' => [
          ['label'=>'Material de Estudo','icon'=>'book','href'=>'#'],
          ['label'=>'Video Aulas','icon'=>'video','href'=>'#'],
          ['label'=>'Exercícios Práticos','icon'=>'tasks','href'=>'#'],
          ['label'=>'Dicas de Estudo','icon'=>'lightbulb','href'=>'#'],
        ],
        'pages' => ['recursoeducacionais.php','material.php','videos.php','exercicios.php','dicas.php'],
      ],
      [
        'label' => 'Notificações',
        'icon'  => 'bell',
        'link'  => 'notific.php',
        'items' => [
          ['label'=>'Acadêmicas','icon'=>'book','href'=>'#'],
          ['label'=>'Calendário','icon'=>'calendar','href'=>'#'],
          ['label'=>'Materiais','icon'=>'tasks','href'=>'#'],
        ],
        'pages' => ['notific.php'],
      ],
    ];
  ?>

  <ul class="nav nav-pills flex-column mb-auto">
    <li><a href="hub.php" class="nav-link <?= $currentPage=='hub.php'?'active':'' ?>"><i class="fas fa-home me-2"></i>Início</a></li>
    <li><a href="explorar.php" class="nav-link <?= $currentPage=='explorar.php'?'active':'' ?>"><i class="fas fa-compass me-2"></i>Explorar</a></li>
    <li><a href="chat.php" class="nav-link d-flex justify-content-between align-items-center <?= $currentPage=='chat.php'?'active':'' ?>"><span><i class="fas fa-comment me-2"></i>Mensagens</span><span class="badge bg-danger">7</span></a></li>
    <li><a href="comunidades.php" class="nav-link <?= $currentPage=='comunidades.php'?'active':'' ?>"><i class="fas fa-users me-2"></i>Comunidades</a></li>

    <?php foreach($menus as $menu): ?>
      <?php $isActive = in_array($currentPage, $menu['pages']); ?>
      <?php if($isActive): ?>
        <li class="has-submenu active">
          <a href="<?= $menu['link'] ?>" class="nav-link d-flex justify-content-between align-items-center submenu-toggle active">
            <span><i class="fas fa-<?= $menu['icon'] ?> me-2"></i><?= $menu['label'] ?></span>
            <i class="fas fa-chevron-down submenu-icon"></i>
          </a>
          <ul class="sub-menu">
            <?php foreach($menu['items'] as $item): ?>
              <li><a href="<?= $item['href'] ?>" class="nav-link sub-link"><i class="fas fa-<?= $item['icon'] ?> me-2"></i><?= $item['label'] ?></a></li>
            <?php endforeach; ?>
          </ul>
        </li>
      <?php else: ?>
        <li>
          <a href="<?= $menu['link'] ?>" class="nav-link<?= $isActive?' active':'' ?>">
            <i class="fas fa-<?= $menu['icon'] ?> me-2"></i><?= $menu['label'] ?>
          </a>
        </li>
      <?php endif; ?>
    <?php endforeach; ?>

    <li><a href="perfil.php" class="nav-link <?= $currentPage=='index.php'?'active':'' ?>"><i class="fas fa-user me-2"></i>Perfil</a></li>
    <li><a href="configuracao.php" class="nav-link <?= $currentPage=='configuracao.php'?'active':'' ?>"><i class="fas fa-cog me-2"></i>Configurações</a></li>
  </ul>

  <hr class="border-secondary my-3">

  <div class="d-flex align-items-center">
    <img src="https://i.pravatar.cc/150?img=56" class="rounded-circle me-2" width="40" height="40">
    <div>
      <div>João Silva</div>
      <small class="text-secondary-custom">@joaosilva</small>
    </div>
    <span class="ms-auto bg-success rounded-circle status-indicator"></span>
  </div>
</nav>

<script>
  // Apenas adiciona o listener ao submenu ativo (se existir)
  const activeToggle = document.querySelector('.has-submenu.active .submenu-toggle');
  if(activeToggle){
    activeToggle.addEventListener('click', e=>{
      e.preventDefault();
      const menu = activeToggle.closest('.has-submenu');
      menu.classList.toggle('active');
    });

    // Fechar se clicar fora
    document.addEventListener('click', e=>{
      const menu = document.querySelector('.has-submenu.active');
      if(menu && !menu.contains(e.target)){
        menu.classList.remove('active');
      }
    });
  }
</script>

