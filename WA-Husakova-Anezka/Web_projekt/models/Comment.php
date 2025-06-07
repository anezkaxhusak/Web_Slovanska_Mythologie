<?php

class Comment {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    
    public function getByTraditionId($traditionId) {
        $sql = "SELECT c.*, u.username, u.name, u.surname 
                FROM comments c 
                JOIN users u ON c.user_id = u.id 
                WHERE c.tradition_id = ? AND c.is_active = 1 
                ORDER BY c.created_at DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$traditionId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    
    public function create($userId, $traditionId, $content) {
        $sql = "INSERT INTO comments (user_id, tradition_id, content) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$userId, $traditionId, $content]);
    }


    public function delete($commentId, $userId) {
        $sql = "UPDATE comments SET is_active = 0 WHERE id = ? AND user_id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$commentId, $userId]);
    }

 
    public function update($commentId, $userId, $content) {
        $sql = "UPDATE comments SET content = ?, updated_at = NOW() WHERE id = ? AND user_id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$content, $commentId, $userId]);
    }

    
    public function getById($commentId) {
        $sql = "SELECT * FROM comments WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$commentId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getCountByTradition($traditionId) {
        $sql = "SELECT COUNT(*) as count FROM comments WHERE tradition_id = ? AND is_active = 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$traditionId]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['count'];
    }
}
?>