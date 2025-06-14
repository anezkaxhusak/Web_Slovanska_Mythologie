<?php

class Tradition {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function create($name, $age, $description, $season, $link, $images, $user_id) {
        $sql = "INSERT INTO traditions (
                    name, age, description, season, link, images, user_id) 
                VALUES (
                    :name, :age, :description, :season, :link, :images, :user_id)";
        
        $stmt = $this->db->prepare($sql);
        
        return $stmt->execute([
            ':name' => $name,
            ':age' => $age,
            ':description' => $description,
            ':season' => $season,
            ':link' => $link,
            ':images' => json_encode($images),
            ':user_id' => $user_id
        ]);
    }

    public function getAll() {
        $sql = "SELECT * FROM traditions ORDER BY created_at DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $sql = "SELECT * FROM traditions WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    
    public function update($id, $name, $age, $description, $season, $link, $userId) {
        
        $tradition = $this->getById($id);
        if (!$tradition) {
            return false;
        }
        
        
        $currentUserId = $_SESSION['user_id'] ?? null;
        $isAdmin = ($_SESSION['role'] ?? '') === 'admin';
        $ownsTradition = $currentUserId == $tradition['user_id'];
        
        if (!$isAdmin && !$ownsTradition) {
            return false;
        }
        
        $sql = "UPDATE traditions SET name = ?, age = ?, description = ?, season = ?, link = ? WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            $name,
            $age,
            $description,
            $season,
            $link,
            $id
        ]);
    }
    
   
    public function delete($id) {
        
        $tradition = $this->getById($id);
        if (!$tradition) {
            return false;
        }
        
        $currentUserId = $_SESSION['user_id'] ?? null;
        $isAdmin = ($_SESSION['role'] ?? '') === 'admin';
        $ownsTradition = $currentUserId == $tradition['user_id'];
        
        if (!$isAdmin && !$ownsTradition) {
            return false;
        }
        
        $sql = "DELETE FROM traditions WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([':id' => $id]);
    }
}
?>