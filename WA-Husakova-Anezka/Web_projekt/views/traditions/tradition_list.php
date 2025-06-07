<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['username'])) {
    header("Location: ../views/auth/login.php");
    exit();
}

require_once '../models/Database.php';
require_once '../models/Comment.php';

$db = (new Database())->getConnection();
$commentModel = new Comment($db);
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slovanská mytologie - Výpis tradicí</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../views/informazione/styles/gods.css">
</head>
<body class="traditions-page">

    <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container-fluid">
             <a class="navbar-brand d-flex align-items-center" >
                    <img src="../views/informazione/images/Logo.png" alt="Logo" style="height: 80px; margin-right: 10px;">
                    Slovanská mytologie</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Přepnout navigaci">
                <span class="navbar-toggler-icon"></span>
            </button>
            <button type="button" class="btn btn-outline-light"> 
                <a class="nav-link" href="../views/informazione/base.php#">Hlavní stránka</a>
            </button>
            <div class="dropdown">
                <button class="btn btn-outline-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    Články
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../views/informazione/gods.php">Bohové</a></li>
                    <li><a class="dropdown-item" href="../views/informazione/creatures.php">Stvoření a monstra</a></li>
                    <li><a class="dropdown-item" href="../views/informazione/traditions_old.php">Staré slovanské tradice</a></li>
                    <li><a class="dropdown-item" href="../views/informazione/traditions_new.php">Nové slovanské tradice</a></li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                 <?php if (isset($_SESSION['username'])): ?>
        <button type="button" class="btn btn-outline-light">
            <a class="nav-link" href="../views/traditions/tradition_create.php">Přidat tradici</a>
        </button>
        <button type="button" class="btn btn-outline-light">
            <a class="nav-link" href="../controllers/traditions_list.php">Výpis tradicí</a>
        </button>
    <?php endif; ?>
                </button>
                
                
                <ul class="navbar-nav ms-auto">
                    <?php if (isset($_SESSION['username'])): ?>
                        <li class="nav-item">
                            <span class="nav-link text-white">Přihlášen jako: <strong><?= htmlspecialchars($_SESSION['username']) ?></strong></span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../controllers/logout.php">Odhlásit se</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="../views/auth/login.php">Přihlášení</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../views/auth/register.php">Registrace</a>
                        </li>
                    <?php endif; ?>
                    <?php if (isset($_SESSION['username'])): ?>
                    <button type="button" class="btn btn-outline-light">
                        <a class="nav-link" href="../views/traditions/tradition_edit_delete.php">Editace a mazání</a>
                    </button>
                <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block sidebar p-3">
                <ul class="nav flex-column">
                    <li class="nav-item dropdown">
                        <button class="btn btn-outline-light dropdown-toggle w-100 text-start" type="button" data-bs-toggle="dropdown">Bohové</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item2" href="../views/informazione/BigGods.php">Staré božstvo</a></li>
                            <li><a class="dropdown-item2" href="../views/informazione/SmallerGods.php">Mladší božstvo</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <button class="btn btn-outline-light dropdown-toggle w-100 text-start" type="button" data-bs-toggle="dropdown">Stvoření a monstra</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item2" href="../views/informazione/demoni_domaci.php">Domácí démoni</a></li>
                            <li><a class="dropdown-item2" href="../views/informazione/demoni_cas.php">Démoni času</a></li>
                            <li><a class="dropdown-item2" href="../views/informazione/demoni_vody.php">Démoni vody</a></li>
                            <li><a class="dropdown-item2" href="../views/informazione/demoni_ohne.php">Démoni ohně</a></li>
                            <li><a class="dropdown-item2" href="../views/informazione/demoni_vetru.php">Démoni větru</a></li>
                            <li><a class="dropdown-item2" href="../views/informazione/demoni_les_pol.php">Démoni lesu a pole</a></li>
                            <li><a class="dropdown-item2" href="../views/informazione/demoni_hor_podzemi.php">Démoni hor</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <button class="btn btn-outline-light dropdown-toggle w-100 text-start" type="button" data-bs-toggle="dropdown">Staré tradice</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item2" href="../views/informazione/SpringTraditionOld.php">Jarní</a></li>
                            <li><a class="dropdown-item2" href="../views/informazione/SummerTraditionOld.php">Letní</a></li>
                            <li><a class="dropdown-item2" href="../views/informazione/FallTraditionOld.php">Podzimní</a></li>
                            <li><a class="dropdown-item2" href="../views/informazione/WinterTraditionOld.php">Zimní</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <button class="btn btn-outline-light dropdown-toggle w-100 text-start" type="button" data-bs-toggle="dropdown">Nové tradice</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item2" href="../views/informazione/OldTradToday.php">Tradice přenesené z dob pohanství</a></li>
                            <li><a class="dropdown-item2" href="../views/informazione/ChristianTrad.php">Tradice přenesené z křesťanství</a></li>
                            <li><a class="dropdown-item2" href="../views/informazione/ModernUnrelated.php">Moderní tradice</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <main class="col-md-10 ms-sm-auto col-lg-10 px-md-4">
                <div class="table-container">
                    <header class="pt-3 pb-3">
                        <h1>Vaše tradice na jednom místě</h1>
                    </header>
                    
                    <?php if(!empty($traditions)): ?>
                        <?php foreach ($traditions as $tradition): ?>
                            <div class="tradition-card">
                                <h3><?= htmlspecialchars($tradition['name']) ?></h3>
                                <p><strong>Stáří:</strong> <?= htmlspecialchars($tradition['age']) ?></p>
                                <p><strong>Časové období:</strong> <?= htmlspecialchars($tradition['season']) ?></p>
                                <p><strong>Popis:</strong> <?= htmlspecialchars($tradition['description']) ?></p>
                                
                                <?php if (!empty($tradition['link'])): ?>
                                    <p><strong>Odkaz:</strong> <a href="<?= htmlspecialchars($tradition['link']) ?>" target="_blank">Více informací</a></p>
                                <?php endif; ?>
                                
                                <?php if (!empty($tradition['images'])): ?>
                                <div class="tradition-images">
                                <strong>Obrázky:</strong><br>
                                <?php
                                $imgs = json_decode($tradition['images'], true);
                                    if (is_array($imgs)) {
                                    foreach ($imgs as $img) {
                                    $imagePath = ltrim($img, '/');
                                    $fullPath = '../' . $imagePath;
                                if (file_exists($fullPath)) {
                            echo "<img src='../" . htmlspecialchars($imagePath) . "' alt='obrázek tradice' class='tradition-image' />";
                            } else {
                        echo "<span class='text-muted'>Obrázek nenalezen</span>";
                        }
                       }
                     }
                            ?>
                            </div>
                            <?php endif; ?>
                                
                                <div class="comments-section" data-tradition-id="<?= $tradition['id'] ?>">
                                    <h4>Komentáře 
                                        <span class="comments-count badge bg-primary"><?= $commentModel->getCountByTradition($tradition['id']) ?></span>
                                    </h4>
                                    
                                    <?php if (isset($_SESSION['user_id'])): ?>
                                        <div class="comment-form">
                                            <form class="add-comment-form">
                                                <div class="mb-3">
                                                    <textarea 
                                                        class="form-control comment-content" 
                                                        placeholder="Napište váš komentář..." 
                                                        required
                                                        maxlength="1000"
                                                        rows="3"
                                                    ></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Přidat komentář</button>
                                            </form>
                                        </div>
                                    <?php else: ?>
                                        <p class="text-muted">
                                            <a href="../views/auth/login.php">Přihlaste se</a> pro přidání komentáře.
                                        </p>
                                    <?php endif; ?>
                                    
                                    <div class="comments-list">
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="alert alert-info">Žádná tradice nebyla nalezena</div>
                    <?php endif; ?>
                </div>
            </main>
        </div>
    </div>

    <script>
        window.currentUserId = <?= json_encode($_SESSION['user_id'] ?? null) ?>;
        window.currentUserRole = <?= json_encode($_SESSION['role'] ?? 'user') ?>;
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        class CommentsManager {
            constructor() {
                this.init();
            }
            
            init() {
                document.querySelectorAll('.comments-section').forEach(section => {
                    const traditionId = section.dataset.traditionId;
                    this.loadComments(traditionId, section);
                });
                
                document.querySelectorAll('.add-comment-form').forEach(form => {
                    form.addEventListener('submit', (e) => {
                        e.preventDefault();
                        const section = form.closest('.comments-section');
                        const traditionId = section.dataset.traditionId;
                        this.addComment(traditionId, section);
                    });
                });
            }
            
            async loadComments(traditionId, section) {
                try {
                    const response = await fetch(`../controllers/comments_api.php/api/comments/tradition/${traditionId}`);
                    const result = await response.json();
                    
                    if (result.success) {
                        this.renderComments(result.data, section);
                        this.updateCommentsCount(result.data.length, section);
                    }
                } catch (error) {
                    console.error('Chyba při načítání komentářů:', error);
                }
            }
            
            async addComment(traditionId, section) {
                const form = section.querySelector('.add-comment-form');
                const textarea = form.querySelector('.comment-content');
                const content = textarea.value.trim();
                
                if (!content) {
                    this.showMessage('Komentář nemůže být prázdný', 'error');
                    return;
                }
                
                try {
                    const response = await fetch('../controllers/comments_api.php/api/comments', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify({
                            tradition_id: parseInt(traditionId),
                            content: content
                        })
                    });
                    
                    const result = await response.json();
                    
                    if (result.success) {
                        textarea.value = '';
                        this.loadComments(traditionId, section);
                        this.showMessage('Komentář byl přidán', 'success');
                    } else {
                        this.showMessage(result.message || 'Chyba při přidávání komentáře', 'error');
                    }
                } catch (error) {
                    console.error('Chyba při přidávání komentáře:', error);
                    this.showMessage('Chyba při přidávání komentáře', 'error');
                }
            }
            
            async deleteComment(commentId, traditionId, section) {
                if (!confirm('Opravdu chcete smazat tento komentář?')) {
                    return;
                }
                
                try {
                    const response = await fetch(`../controllers/comments_api.php/api/comments/${commentId}`, {
                        method: 'DELETE'
                    });
                    
                    const result = await response.json();
                    
                    if (result.success) {
                        this.loadComments(traditionId, section);
                        this.showMessage('Komentář byl smazán', 'success');
                    } else {
                        this.showMessage(result.message || 'Chyba při mazání komentáře', 'error');
                    }
                } catch (error) {
                    console.error('Chyba při mazání komentáře:', error);
                    this.showMessage('Chyba při mazání komentáře', 'error');
                }
            }
            
            renderComments(comments, section) {
                const commentsList = section.querySelector('.comments-list');
                
                if (comments.length === 0) {
                    commentsList.innerHTML = '<p class="text-muted">Zatím žádné komentáře.</p>';
                    return;
                }
                
                const commentsHtml = comments.map(comment => `
                    <div class="comment" data-comment-id="${comment.id}">
                        <div class="comment-header">
                            <div class="comment-author">
                                <strong>${this.escapeHtml(comment.author_name)}</strong>
                            </div>
                            <div class="comment-date">
                                ${this.formatDate(comment.created_at)}
                                ${comment.created_at !== comment.updated_at ? ' (upraveno)' : ''}
                            </div>
                        </div>
                        <div class="comment-content">
                            ${this.escapeHtml(comment.content).replace(/\n/g, '<br>')}
                        </div>
                        ${comment.can_delete ? `
                            <div class="comment-actions">
                                <button onclick="commentsManager.deleteComment(${comment.id}, ${section.dataset.traditionId}, this.closest('.comments-section'))" class="btn btn-sm btn-outline-danger">
                                    Smazat
                                </button>
                            </div>
                        ` : ''}
                    </div>
                `).join('');
                
                commentsList.innerHTML = commentsHtml;
            }
            
            updateCommentsCount(count, section) {
                const badge = section.querySelector('.comments-count');
                if (badge) {
                    badge.textContent = count;
                }
            }
            
            escapeHtml(text) {
                const div = document.createElement('div');
                div.textContent = text;
                return div.innerHTML;
            }
            
            formatDate(dateString) {
                const date = new Date(dateString);
                return date.toLocaleDateString('cs-CZ') + ' ' + date.toLocaleTimeString('cs-CZ', {
                    hour: '2-digit',
                    minute: '2-digit'
                });
            }
            
            showMessage(message, type) {
                const messageDiv = document.createElement('div');
                messageDiv.className = `message message-${type}`;
                messageDiv.textContent = message;
                
                document.body.appendChild(messageDiv);
                
                setTimeout(() => {
                    messageDiv.remove();
                }, 4000);
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            window.commentsManager = new CommentsManager();
        });
    </script>
</body>
</html>