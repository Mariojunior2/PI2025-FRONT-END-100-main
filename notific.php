<?php
session_start(); // Inicia a sessão

function getNotifications($type = 'all')
{
    $notifications = [
        [
            'id' => 1,
            'title' => "Entrega de Trabalho",
            'message' => "Lembrete: O trabalho final de Programação Web deve ser entregue hoje até às 23:59.",
            'date' => "13/04/2025",
            'time' => "09:30",
            'type' => "academic",
            'priority' => "high",
            'read' => false,
            'academicType' => "deadline"
        ],
        [
            'id' => 2,
            'title' => "Prova Amanhã",
            'message' => "Não se esqueça da prova de Banco de Dados amanhã às 10:00 na sala 302.",
            'date' => "12/04/2025",
            'time' => "14:45",
            'type' => "academic",
            'priority' => "high",
            'read' => false,
            'academicType' => "exam"
        ],
        [
            'id' => 3,
            'title' => "Material Disponível",
            'message' => "O professor de Algoritmos disponibilizou o material para a próxima aula.",
            'date' => "11/04/2025",
            'time' => "16:20",
            'type' => "materials",
            'priority' => "medium",
            'read' => false,
            'academicType' => "homework"
        ],
    ];

    if ($type !== 'all') {
        return array_filter($notifications, fn($n) => $n['type'] === $type);
    }
    return $notifications;
}

if (isset($_POST['action'])) {
    $action = $_POST['action'];
    $id = intval($_POST['notification_id'] ?? 0);

    if ($action === 'mark_read' && $id) {
        $_SESSION['message'] = "Notificação marcada como lida";
    }
    if ($action === 'mark_all_read') {
        $_SESSION['message'] = "Todas as notificações foram marcadas como lidas";
    }
    if ($action === 'delete' && $id) {
        $_SESSION['message'] = "Notificação removida";
    }

    header('Location: ' . $_SERVER['PHP_SELF'] . (isset($_GET['type']) ? "?type={$_GET['type']}" : ''));
    exit;
}

$activeTab = $_GET['type'] ?? 'all';
$notifications = getNotifications($activeTab);

function countUnread($list, $type = null)
{
    return count(array_filter($list, fn($n) => !$n['read'] && ($type === null || $n['type'] === $type)));
}

$allUnreadCount      = countUnread(getNotifications());
$academicUnreadCount = countUnread(getNotifications(), 'academic');
$calendarUnreadCount = countUnread(getNotifications(), 'calendar');
$materialsUnreadCount = countUnread(getNotifications(), 'materials');

function getNotificationIcon($n)
{
    if ($n['type'] === 'academic') {
        switch ($n['academicType'] ?? '') {
            case 'homework':
                return '<i class="fa-solid fa-book text-primary"></i>';
            case 'exam':
                return '<i class="fa-solid fa-graduation-cap text-warning"></i>';
            case 'deadline':
                return '<i class="fa-solid fa-clock text-danger"></i>';
            case 'event':
                return '<i class="fa-solid fa-calendar-days text-success"></i>';
        }
        return '<i class="fa-solid fa-graduation-cap text-danger"></i>';
    }
    if ($n['type'] === 'calendar')  return '<i class="fa-solid fa-calendar-days text-danger"></i>';
    if ($n['type'] === 'materials') return '<i class="fa-solid fa-book text-danger"></i>';
    return '<i class="fa-solid fa-bell text-danger"></i>';
}

function getPriorityIcon($p)
{
    return match ($p) {
        'high'   => '<i class="fa-solid fa-exclamation-circle text-danger"></i>',
        'medium' => '<i class="fa-solid fa-info-circle text-warning"></i>',
        default  => '<i class="fa-solid fa-info-circle text-success"></i>',
    };
}

include 'header.php';
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Notificações - TydraPI</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        .sidebar {
            width: 20%;
            position: fixed;
        }


        .content-wrapper {
            align-self: center;
            margin-left: 260px;
            padding: 20px;
            width: calc(83%);
        }
    </style>
</head>

<body>
    <?php include 'sidebar.php' ?>
    <div class="tydrapi-container py-6 animate-fade-in content-wrapper">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Notificações</h1>

            <form method="post" class="inline">
                <input type="hidden" name="action" value="mark_all_read">
                <button type="submit" class="tydrapi-button-outline">
                    <i class="bi-check mr-2"></i> Marcar todas como lidas
                </button>
            </form>
        </div>

        <?php if (isset($_SESSION['message'])): ?>
            <div class="notification-toast">
                <?php echo $_SESSION['message']; ?>
                <?php unset($_SESSION['message']); ?>
            </div>
        <?php endif; ?>

        <div class="tabs-container mb-6">
            <a href="?type=all" class="tab <?php echo $activeTab === 'all' ? 'active' : ''; ?>">
                <i class="fas fa-bell mr-2"></i> Todas
                <?php if ($allUnreadCount > 0): ?>
                    <span class="badge"><?php echo $allUnreadCount; ?></span>
                <?php endif; ?>
            </a>
            <a href="?type=academic" class="tab <?php echo $activeTab === 'academic' ? 'active' : ''; ?>">
                <i class=" fas fa-book  mr-2"></i> Acadêmicas
                <?php if ($academicUnreadCount > 0): ?>
                    <span class="badge"><?php echo $academicUnreadCount; ?></span>
                <?php endif; ?>
            </a>
            <a href="?type=calendar" class="tab <?php echo $activeTab === 'calendar' ? 'active' : ''; ?>">
                <i class="fas fa-calendar mr-2"></i> Calendário
                <?php if ($calendarUnreadCount > 0): ?>
                    <span class="badge"><?php echo $calendarUnreadCount; ?></span>
                <?php endif; ?>
            </a>
            <a href="?type=materials" class="tab <?php echo $activeTab === 'materials' ? 'active' : ''; ?>">
                <i class="fas fa-tasks mr-2"></i> Materiais
                <?php if ($materialsUnreadCount > 0): ?>
                    <span class="badge"><?php echo $materialsUnreadCount; ?></span>
                <?php endif; ?>
            </a>
        </div>

        <div class="tab-content">
            <?php if (count($notifications) > 0): ?>
                <?php foreach ($notifications as $notification): ?>
                    <div class="tydrapi-card <?php echo !$notification['read'] ? 'unread' : ''; ?>">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <?php echo getNotificationIcon($notification); ?>
                            </div>
                            <div class="ml-4 flex-grow">
                                <div class="flex justify-between">
                                    <div>
                                        <h3 class="font-medium text-base flex items-center">
                                            <?php echo htmlspecialchars($notification['title']); ?>
                                            <span class="ml-2"><?php echo getPriorityIcon($notification['priority']); ?></span>
                                        </h3>
                                        <p class="text-sm mt-1"><?php echo htmlspecialchars($notification['message']); ?></p>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-xs text-tydrapi-gray"><?php echo htmlspecialchars($notification['date']); ?></p>
                                        <p class="text-xs text-tydrapi-gray"><?php echo htmlspecialchars($notification['time']); ?></p>
                                    </div>
                                </div>
                                <div class="flex justify-between mt-3">
                                    <div>
                                        <?php if (!$notification['read']): ?>
                                            <span class="badge bg-tydrapi-red">Não lida</span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="flex gap-2">
                                        <?php if (!$notification['read']): ?>
                                            <form method="post" class="inline">
                                                <input type="hidden" name="action" value="mark_read">
                                                <input type="hidden" name="notification_id" value="<?php echo $notification['id']; ?>">
                                                <button type="submit" class="btn-outline-sm">
                                                    <i class="bi-check mr-1"></i> Marcar como lida
                                                </button>
                                            </form>
                                        <?php endif; ?>
                                        <form method="post" class="inline">
                                            <input type="hidden" name="action" value="delete">
                                            <input type="hidden" name="notification_id" value="<?php echo $notification['id']; ?>">
                                            <button type="submit" class="btn-ghost-sm">
                                                Remover
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="text-center py-10">
                    <p class="text-tydrapi-gray">Não há notificações para exibir.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('#notificationTabs .nav-link');
            const notifications = document.querySelectorAll('#notificationsList .notification-card');

            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    // Remove active class from all tabs
                    tabs.forEach(t => t.classList.remove('active'));
                    // Add active class to clicked tab
                    this.classList.add('active');

                    const filter = this.getAttribute('data-filter');

                    notifications.forEach(notification => {
                        if (filter === 'all') {
                            notification.style.display = 'flex';
                        } else {
                            if (notification.getAttribute('data-status') === filter) {
                                notification.style.display = 'flex';
                            } else {
                                notification.style.display = 'none';
                            }
                        }
                    });
                });
            });

            // Mark as read button functionality
            const markReadButtons = document.querySelectorAll('.mark-read-btn');

            markReadButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const notification = this.closest('.notification-card');
                    notification.classList.remove('unread');
                    notification.classList.add('read');
                    notification.setAttribute('data-status', 'read');
                    this.textContent = 'Lida';
                    this.classList.remove('btn-outline-danger');
                    this.classList.add('btn-success');
                    this.disabled = true;

                    // If current tab is "Não Lidas", hide this notification after marking read
                    const activeTab = document.querySelector('#notificationTabs .nav-link.active');
                    if (activeTab && activeTab.getAttribute('data-filter') === 'unread') {
                        notification.style.display = 'none';
                    }
                });
            });
        });
    </script>
</body>

</html>