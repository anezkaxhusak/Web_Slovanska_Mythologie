<?php
session_start();

require_once '../models/Database.php';
require_once '../models/Comment.php';
require_once '../models/Tradition.php';

header('Content-Type: application/json');

$db = (new Database())->getConnection();
$commentModel = new Comment($db);
$traditionModel = new Tradition($db);

$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['REQUEST_URI'];


function checkAuthentication() {
    if (!isset($_SESSION['user_id'])) {
        http_response_code(401);
        echo json_encode(['success' => false, 'message' => 'Musíte být přihlášeni']);
        exit;
    }
    return [
        'id' => $_SESSION['user_id'],
        'username' => $_SESSION['username'],
        'role' => $_SESSION['role'] ?? 'user'
    ];
}


function checkTraditionExists($traditionModel, $traditionId) {
    $tradition = $traditionModel->getById($traditionId);
    if (!$tradition) {
        http_response_code(404);
        echo json_encode(['success' => false, 'message' => 'Tradice nebyla nalezena']);
        exit;
    }
    return $tradition;
}

switch ($method) {
    case 'GET':
       
        if (preg_match('/\/api\/comments\/tradition\/(\d+)/', $path, $matches)) {
            $traditionId = $matches[1];
            
           
            checkTraditionExists($traditionModel, $traditionId);
            
            $comments = $commentModel->getByTraditionId($traditionId);
            
            
            $currentUserId = $_SESSION['user_id'] ?? null;
            foreach ($comments as &$comment) {
                $comment['can_edit'] = ($currentUserId == $comment['user_id']);
                $comment['can_delete'] = ($currentUserId == $comment['user_id']) || 
                                       (($_SESSION['role'] ?? '') === 'admin');
                
                $comment['author_name'] = trim($comment['name'] . ' ' . $comment['surname']) ?: $comment['username'];
            }
            
            echo json_encode(['success' => true, 'data' => $comments]);
        } else {
            http_response_code(404);
            echo json_encode(['success' => false, 'message' => 'Neplatná cesta']);
        }
        break;
        
    case 'POST':
        // Přidání nového komentáře
        if (strpos($path, '/api/comments') !== false) {
            $user = checkAuthentication();
            
            $input = json_decode(file_get_contents('php://input'), true);
            $traditionId = (int)($input['tradition_id'] ?? 0);
            $content = trim($input['content'] ?? '');
            
            if (!$traditionId || !$content) {
                http_response_code(400);
                echo json_encode(['success' => false, 'message' => 'Chybí povinné údaje']);
                exit;
            }
            
            if (strlen($content) > 1000) {
                http_response_code(400);
                echo json_encode(['success' => false, 'message' => 'Komentář je příliš dlouhý (max 1000 znaků)']);
                exit;
            }
            
            
            checkTraditionExists($traditionModel, $traditionId);
            
            $success = $commentModel->create($user['id'], $traditionId, $content);
            
            if ($success) {
                echo json_encode(['success' => true, 'message' => 'Komentář byl přidán']);
            } else {
                http_response_code(500);
                echo json_encode(['success' => false, 'message' => 'Chyba při přidávání komentáře']);
            }
        } else {
            http_response_code(404);
            echo json_encode(['success' => false, 'message' => 'Neplatná cesta']);
        }
        break;
        
    case 'PUT':
        // Editace komentáře
        if (preg_match('/\/api\/comments\/(\d+)/', $path, $matches)) {
            $user = checkAuthentication();
            $commentId = $matches[1];
            
            $input = json_decode(file_get_contents('php://input'), true);
            $content = trim($input['content'] ?? '');
            
            if (!$content) {
                http_response_code(400);
                echo json_encode(['success' => false, 'message' => 'Obsah komentáře nemůže být prázdný']);
                exit;
            }
            
            if (strlen($content) > 1000) {
                http_response_code(400);
                echo json_encode(['success' => false, 'message' => 'Komentář je příliš dlouhý (max 1000 znaků)']);
                exit;
            }
            
            $success = $commentModel->update($commentId, $user['id'], $content);
            
            if ($success) {
                echo json_encode(['success' => true, 'message' => 'Komentář byl upraven']);
            } else {
                http_response_code(403);
                echo json_encode(['success' => false, 'message' => 'Nemáte oprávnění upravit tento komentář']);
            }
        } else {
            http_response_code(404);
            echo json_encode(['success' => false, 'message' => 'Neplatná cesta']);
        }
        break;
        
    case 'DELETE':
        
        if (preg_match('/\/api\/comments\/(\d+)/', $path, $matches)) {
            $user = checkAuthentication();
            $commentId = $matches[1];
            
            
            if ($user['role'] === 'admin') {
                $sql = "UPDATE comments SET is_active = 0 WHERE id = ?";
                $stmt = $db->prepare($sql);
                $success = $stmt->execute([$commentId]);
            } else {
                $success = $commentModel->delete($commentId, $user['id']);
            }
            
            if ($success) {
                echo json_encode(['success' => true, 'message' => 'Komentář byl smazán']);
            } else {
                http_response_code(403);
                echo json_encode(['success' => false, 'message' => 'Nemáte oprávnění smazat tento komentář']);
            }
        } else {
            http_response_code(404);
            echo json_encode(['success' => false, 'message' => 'Neplatná cesta']);
        }
        break;
        
    default:
        http_response_code(405);
        echo json_encode(['success' => false, 'message' => 'Nepodporovaná HTTP metoda']);
        break;
}
?>