<?php
session_start();

require_once '../models/Database.php';
require_once '../models/Tradition.php';

if (!isset($_SESSION['username'])) {
    header("Location: ../views/auth/login.php");
    exit();
}

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];

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

    if ($traditionModel->delete($id)) {
        header("Location: ../views/traditions/tradition_edit_delete.php?success=deleted");
        exit();
    } else {
        header("Location: ../views/traditions/tradition_edit_delete.php?error=delete_failed");
        exit();
    }
} else {
    header("Location: ../views/traditions/tradition_edit_delete.php?error=invalid_request");
    exit();
}
?>