<?php
session_start();

require_once '../models/Database.php';
require_once '../models/Tradition.php';

if (!isset($_SESSION['username'])) {
    header("Location: ../views/auth/login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['id']) || empty($_POST['name']) || empty($_POST['age']) || empty($_POST['season'])) {
        header("Location: ../views/traditions/tradition_edit_delete.php?error=missing_fields");
        exit();
    }

    $id = (int)$_POST['id'];
    $name = trim(htmlspecialchars($_POST['name']));
    $age = trim(htmlspecialchars($_POST['age']));
    $description = trim(htmlspecialchars($_POST['description'] ?? ''));
    $season = trim(htmlspecialchars($_POST['season']));
    $link = trim(htmlspecialchars($_POST['link'] ?? ''));

    $db = (new Database())->getConnection();
    $traditionModel = new Tradition($db);

    $tradition = $traditionModel->getById($id);
    if (!$tradition) {
        header("Location: ../views/traditions/tradition_edit_delete.php?error=not_found");
        exit();
    }

    $currentUserId = $_SESSION['user_id'] ?? null;
    $isAdmin = ($_SESSION['role'] ?? '') === 'admin';
    $ownsTradition = $currentUserId == $tradition['user_id'];

    if (!$isAdmin && !$ownsTradition) {
        header("Location: ../views/traditions/tradition_edit_delete.php?error=no_permission");
        exit();
    }

    $success = $traditionModel->update(
        $id,
        $name,
        $age,
        $description,
        $season,
        $link,
        $currentUserId
    );
    

    if ($success) {
        header("Location: ../views/traditions/tradition_edit_delete.php?success=updated");
        exit();
    } else {
        header("Location: ../views/traditions/tradition_edit_delete.php?error=update_failed");
        exit();
    }
} else {
    header("Location: ../views/traditions/tradition_edit_delete.php");
    exit();
}
?>