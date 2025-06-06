<?php
session_start();

require_once '../models/Database.php';
require_once '../models/Tradition.php';


class TraditionController {
    private $db;
    private $traditionModel;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->traditionModel = new Tradition($this->db);
    }

    public function createTradition() {
        
        if (!isset($_SESSION['user_id'])) {
            header("Location: ../controllers/traditions_list.php");
            exit();
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $age = htmlspecialchars($_POST['age']);
            $description = htmlspecialchars($_POST['description']);
            $season = htmlspecialchars($_POST['season']);
            $link = htmlspecialchars($_POST['link']);

            $user_id = $_SESSION['user_id'];

            $imagePaths = [];
            if (!empty($_FILES['images']['name'][0])) {
                $uploadDir = '../public/images/';
                foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
                    $filename = basename($_FILES['images']['name'][$key]);
                    $targetPath = $uploadDir . $filename;

                    if (move_uploaded_file($tmp_name, $targetPath)) {
                        $imagePaths[] = '/public/images/' . $filename; 
                        
                    }
                }
            }

            if ($this->traditionModel->create(
                $name, $age, $description, $season, $link, $imagePaths, $user_id
            )) {
                header("Location: ../controllers/traditions_list.php");
                exit();
            } else {
                echo "Chyba při ukládání tradice.";
            }
        }
    }

    public function listTraditions () {
        $traditions = $this->traditionModel->getAll();
        include '../views/traditions/tradition_list.php';
    }
}

$controller = new TraditionController();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $controller->createTradition();
}
