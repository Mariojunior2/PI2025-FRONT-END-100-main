<?php
// Start session for potential future use
session_start();

// Get conversation ID from URL parameter (default to 0 if not set)
$active_conversation_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Dummy data for conversations
$conversations = [
    0 => [
        'id' => 0,
        'name' => 'Ana Paula',
        'avatar' => 'https://i.pravatar.cc/150?img=5',
        'message' => 'Oi! Vi que você também cur...',
        'time' => '10:42',
        'unread' => 2,
        'online' => true,
        'status' => 'Online',
        'messages' => [
            [
                'content' => 'Oi! Tudo bem?',
                'time' => '10:30',
                'isReceiver' => false
            ],
            [
                'content' => 'Oi! Tudo ótimo e com você?',
                'time' => '10:32',
                'isReceiver' => true
            ],
            [
                'content' => 'Bem também! Vi que você se interessa por IA',
                'time' => '10:35',
                'isReceiver' => false
            ],
            [
                'content' => 'Sim! Estou estudando bastante sobre o assunto',
                'time' => '10:38',
                'isReceiver' => true
            ],
            [
                'content' => 'Que legal! Eu trabalho com isso',
                'time' => '10:40',
                'isReceiver' => false
            ],
            [
                'content' => 'Você já conhece o GPT-4?',
                'time' => '10:42',
                'isReceiver' => false
            ]
        ]
    ],
    1 => [
        'id' => 1,
        'name' => 'Carlos Eduardo',
        'avatar' => 'https://i.pravatar.cc/150?img=12',
        'message' => 'Vamos marcar aquele café para c...',
        'time' => '09:15',
        'unread' => 0,
        'online' => true,
        'status' => 'Há 30 minutos',
        'messages' => [
            [
                'content' => 'E aí, como está o projeto?',
                'time' => '09:10',
                'isReceiver' => false
            ],
            [
                'content' => 'Está avançando! Consegui terminar aquela parte difícil',
                'time' => '09:12',
                'isReceiver' => true
            ],
            [
                'content' => 'Ótimo! Vamos marcar aquele café para conversar sobre?',
                'time' => '09:15',
                'isReceiver' => false
            ]
        ]
    ],
    2 => [
        'id' => 2,
        'name' => 'Grupo de Desenvolvedores',
        'avatar' => 'https://i.pravatar.cc/150?img=32',
        'message' => 'Alguém já experimentou o n...',
        'time' => 'Ontem',
        'unread' => 5,
        'online' => true,
        'status' => 'Online',
        'messages' => [
            [
                'content' => 'Pessoal, alguém tem experiência com Docker?',
                'time' => '18:20',
                'isReceiver' => false,
                'sender' => 'Marcos Silva'
            ],
            [
                'content' => 'Sim, uso bastante. O que precisa saber?',
                'time' => '18:25',
                'isReceiver' => false,
                'sender' => 'Juliana Santos'
            ],
            [
                'content' => 'Estou com um problema com volumes persistentes',
                'time' => '18:28',
                'isReceiver' => false,
                'sender' => 'Marcos Silva'
            ],
            [
                'content' => 'Alguém já experimentou o novo framework?',
                'time' => '19:10',
                'isReceiver' => false,
                'sender' => 'Ricardo Almeida'
            ],
            [
                'content' => 'Ainda não, mas ouvi falar bem',
                'time' => '19:15',
                'isReceiver' => true
            ]
        ]
    ],
    3 => [
        'id' => 3,
        'name' => 'Mariana Silva',
        'avatar' => 'https://i.pravatar.cc/150?img=23',
        'message' => 'Chat temporário - expira em 8h',
        'time' => '16:20',
        'unread' => 0,
        'online' => true,
        'status' => 'Online',
        'messages' => [
            [
                'content' => 'Oi Mariana, tudo bem?',
                'time' => '16:10',
                'isReceiver' => true
            ],
            [
                'content' => 'Tudo ótimo! Precisava de ajuda com aquele projeto',
                'time' => '16:12',
                'isReceiver' => false
            ],
            [
                'content' => 'Claro, estou disponível para ajudar',
                'time' => '16:14',
                'isReceiver' => true
            ],
            [
                'content' => 'Lembrando que este chat é temporário - expira em 8h',
                'time' => '16:20',
                'isReceiver' => false
            ]
        ]
    ]
];

// Ensure the conversation ID is valid
if (!isset($conversations[$active_conversation_id])) {
    $active_conversation_id = 0;
}

// Current selected conversation
$current_conversation = $conversations[$active_conversation_id];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagens - TydraPI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/chat.css">
    <style>
        .sidebar {
            position: fixed;
        }
    </style>
    <?php include 'header.php' ?>
</head>
<body>
    <?php include 'sidebar.php' ?>
    
    <div class="chat-container">
        <!-- Sidebar/Conversations List -->
        <div class="conversation-list">
            <div class="conversation-list-header">
                Mensagens
            </div>
            <div class="search-container-chat">
                <input type="text" class="search-bar" placeholder="Buscar contatos..." aria-label="Buscar">
            </div>
            
            <!-- Conversation Items -->
            <?php foreach ($conversations as $conversation): ?>
                <a href="?id=<?php echo $conversation['id']; ?>" class="text-decoration-none">
                    <div class="conversation-item <?php echo ($conversation['id'] === $active_conversation_id) ? 'active' : ''; ?>">
                        <div class="avatar-wrapper">
                            <div class="avatar">
                                <img src="<?php echo htmlspecialchars($conversation['avatar']); ?>" alt="<?php echo htmlspecialchars($conversation['name']); ?>">
                            </div>
                            <?php if ($conversation['online']): ?>
                                <div class="online-indicator"></div>
                            <?php endif; ?>
                        </div>
                        <div class="conversation-info">
                            <div class="conversation-name"><?php echo htmlspecialchars($conversation['name']); ?></div>
                            <div class="conversation-message"><?php echo htmlspecialchars($conversation['message']); ?></div>
                        </div>
                        <div class="conversation-meta">
                            <div class="timestamp"><?php echo htmlspecialchars($conversation['time']); ?></div>
                            <?php if ($conversation['unread'] > 0): ?>
                                <div class="unread-badge"><?php echo $conversation['unread']; ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
        
        <!-- Chat Area -->
        <div class="chat-area">
            <!-- Chat Header - Always visible -->
            <div class="chat-header">
                <div class="chat-header-info">
                    <div class="avatar-wrapper">
                        <div class="avatar">
                            <img src="<?php echo htmlspecialchars($current_conversation['avatar']); ?>" alt="<?php echo htmlspecialchars($current_conversation['name']); ?>">
                        </div>
                        <?php if ($current_conversation['online']): ?>
                            <div class="online-indicator"></div>
                        <?php endif; ?>
                    </div>
                    <div class="chat-header-name"><?php echo htmlspecialchars($current_conversation['name']); ?></div>
                    <div class="chat-status"><?php echo htmlspecialchars($current_conversation['status']); ?></div>
                </div>
                <div class="chat-actions">
                    <button class="chat-action-btn">
                        <i class="fas fa-phone-alt"></i>
                    </button>
                    <button class="chat-action-btn">
                        <i class="fas fa-video"></i>
                    </button>
                    <button class="chat-action-btn">
                        <i class="fas fa-ellipsis-v"></i>
                    </button>
                </div>
            </div>
            
            <!-- Message Area - Changes based on selected conversation -->
            <div id="messageArea" class="message-area">
                <?php foreach ($current_conversation['messages'] as $message): ?>
                    <div class="message <?php echo $message['isReceiver'] ? 'message-receiver' : 'message-sender'; ?>">
                        <div class="message-content">
                            <?php echo htmlspecialchars($message['content']); ?>
                        </div>
                        <div class="message-time"><?php echo htmlspecialchars($message['time']); ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <!-- Message Input Area - Always the same -->
            <div class="message-input-area">
                <button class="message-action-btn">
                    <i class="far fa-image"></i>
                </button>
                <input type="text" class="message-input" placeholder="Digite sua mensagem..." aria-label="Mensagem">
                <button class="message-action-btn">
                    <i class="fas fa-microphone"></i>
                </button>
                <button class="message-action-btn send-btn" id="sendMessageBtn">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </div>
        </div>
    </div>

    <script>
        // Store conversation ID for message sending
        const activeConversationId = <?php echo $active_conversation_id; ?>;
        
        // Function to add new message to chat
        function addMessage(content, isReceiver = false) {
            const messageArea = document.getElementById('messageArea');
            const now = new Date();
            const hours = now.getHours().toString().padStart(2, '0');
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const timeString = `${hours}:${minutes}`;
            
            const messageDiv = document.createElement('div');
            messageDiv.className = `message ${isReceiver ? 'message-receiver' : 'message-sender'}`;
            
            messageDiv.innerHTML = `
                <div class="message-content">
                    ${content}
                </div>
                <div class="message-time">${timeString}</div>
            `;
            
            messageArea.appendChild(messageDiv);
            messageArea.scrollTop = messageArea.scrollHeight;
            
            // In a real application, you would send this message to the server
            // and associate it with the current conversation
            console.log(`Message sent to conversation ${activeConversationId}: ${content}`);
        }
        
        // Event listener for input field
        document.querySelector('.message-input').addEventListener('keypress', function(e) {
            if (e.key === 'Enter' && this.value.trim() !== '') {
                addMessage(this.value, true);
                this.value = '';
            }
        });
        
        // Event listener for send button
        document.querySelector('#sendMessageBtn').addEventListener('click', function() {
            const input = document.querySelector('.message-input');
            if (input.value.trim() !== '') {
                addMessage(input.value, true);
                input.value = '';
            }
        });
        
        // Scroll to bottom of message area on load
        window.onload = function() {
            const messageArea = document.getElementById('messageArea');
            messageArea.scrollTop = messageArea.scrollHeight;
        };
    </script>
</body>
</html>