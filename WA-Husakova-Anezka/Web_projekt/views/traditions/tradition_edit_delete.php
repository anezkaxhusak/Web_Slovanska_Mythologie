<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../../controllers/traditions_list.php");
    exit();
}

require_once '../../models/Database.php';
require_once '../../models/Tradition.php';

$db = (new Database())->getConnection();
$traditionModel = new Tradition($db);
$traditions = $traditionModel->getAll();

$editMode = false;
$traditionToEdit = null;

if (isset($_GET['edit'])) {
    $editId = (int)$_GET['edit'];
    $traditionToEdit = $traditionModel->getById($editId);
    if ($traditionToEdit) {
        $editMode = true;
    }
}

$successMessage = '';
$errorMessage = '';

if (isset($_GET['success'])) {
    switch ($_GET['success']) {
        case 'updated':
            $successMessage = 'Tradice byla úspěšně aktualizována.';
            break;
        case 'deleted':
            $successMessage = 'Tradice byla úspěšně smazána.';
            break;
    }
}

if (isset($_GET['error'])) {
    switch ($_GET['error']) {
        case 'not_found':
            $errorMessage = 'Tradice nebyla nalezena.';
            break;
        case 'no_permission':
            $errorMessage = 'Nemáte oprávnění k této akci.';
            break;
        case 'delete_failed':
            $errorMessage = 'Smazání tradice se nezdařilo.';
            break;
        case 'update_failed':
            $errorMessage = 'Aktualizace tradice se nezdařila.';
            break;
        case 'invalid_request':
            $errorMessage = 'Neplatný požadavek.';
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editace a mazání tradicí</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../informazione/styles/gods.css">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark mb-4">
        <div class="container-fluid">
             <a class="navbar-brand d-flex align-items-center" >
                    <img src="../informazione/images/Logo.png" alt="Logo" style="height: 80px; margin-right: 10px;">
                    Slovanská mytologie</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Přepnout navigaci">
                <span class="navbar-toggler-icon"></span>
            </button>
            <button type="button" class="btn btn-outline-light"> <a class="nav-link" href="../informazione/base.php#">Hlavní stránka</a></button>
            <div class="dropdown">
                <button class="btn btn-outline-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Články
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../informazione/gods.php">Bohové</a></li>
                    <li><a class="dropdown-item" href="../informazione/creatures.php">Stvoření a monstra</a></li>
                    <li><a class="dropdown-item" href="../informazione/traditions_old.php">Staré slovanské tradice </a></li>
                    <li><a class="dropdown-item" href="../informazione/traditions_new.php">Nové slovanské tradice </a></li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <?php if (isset($_SESSION['username'])): ?>
        <button type="button" class="btn btn-outline-light">
            <a class="nav-link" href="../../views/traditions/tradition_create.php">Přidat tradici</a>
        </button>
        <button type="button" class="btn btn-outline-light">
            <a class="nav-link" href="../../controllers/traditions_list.php">Výpis tradicí</a>
        </button>
    <?php endif; ?>
                <ul class="navbar-nav ms-auto">
                    <?php if (isset($_SESSION['username'])): ?>
                        <li class="nav-item">
                            <span class="nav-link text-white">Přihlášen jako: <strong><?= htmlspecialchars($_SESSION['username']) ?></strong></span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../controllers/logout.php">Odhlásit se</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="../auth/login.php">Přihlášení</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../auth/register.php">Registrace</a>
                        </li>
                    <?php endif; ?>
                    <?php if (isset($_SESSION['username'])): ?>
                        <button type="button" class="btn btn-outline-light">
                            <a class="nav-link" href="../../views/traditions/tradition_edit_delete.php">Editace a mazání</a>
                        </button>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <?php if ($successMessage): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= htmlspecialchars($successMessage) ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <?php if ($errorMessage): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= htmlspecialchars($errorMessage) ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <?php if ($editMode): ?>
            <div class="row justify-content-center mt-5">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-primary text-white text-center">
                            <h2>Upravit tradici: <?= htmlspecialchars($traditionToEdit['name']) ?></h2>
                        </div>
                        <div class="card-body">
                            <form action="../../controllers/tradition_update.php" method="post">
                                <input type="hidden" name="id" value="<?= $traditionToEdit['id'] ?>">
                                
                                <div class="mb-3">
                                    <label class="form-label">ID tradice:</label>
                                    <input type="text" class="form-control" value="<?= $traditionToEdit['id'] ?>" disabled>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="name" class="form-label">Název tradice:</label>
                                    <input type="text" id="name" name="name" class="form-control" required value="<?= htmlspecialchars($traditionToEdit['name']) ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="age" class="form-label">Stáří tradice:</label>
                                    <input type="text" id="age" name="age" class="form-control" required value="<?= htmlspecialchars($traditionToEdit['age']) ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Popis:</label>
                                    <textarea id="description" name="description" class="form-control" rows="3"><?= htmlspecialchars($traditionToEdit['description']) ?></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="season" class="form-label">Časové období:</label>
                                    <select id="season" name="season" class="form-select" required>
                                        <option value="">-- Vyberte období --</option>
                                        <?php
                                        $seasons = [
                                            'jarni' => 'Jarní',
                                            'letni' => 'Letní',
                                            'podzimni' => 'Podzimní',
                                            'zimni' => 'Zimní',
                                            'svatečni' => 'Sváteční',
                                            'narozeninova' => 'Narozeninová',
                                            'vanočni' => 'Vánoční',
                                            'valentynska' => 'Valentýnská',
                                            'velikonocni' => 'Velikonoční',
                                            'halloweenska' => 'Halloweenská',
                                            'dusickova' => 'Dušičková',
                                            'jina' => 'Jiná',
                                            'nesezonni' => 'Nesezónní',
                                        ];

                                        $selectedSeason = $traditionToEdit['season'] ?? '';

                                        foreach ($seasons as $value => $label) {
                                            $selected = ($selectedSeason === $value) ? 'selected' : '';
                                            echo "<option value=\"$value\" $selected>$label</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="link" class="form-label">Odkaz:</label>
                                    <input type="url" id="link" name="link" class="form-control" value="<?= htmlspecialchars($traditionToEdit['link']) ?>">
                                </div>

                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-success">Uložit změny</button>
                                    <a href="../../views/traditions/tradition_edit_delete.php" class="btn btn-secondary">Zrušit</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <h2 class="mb-4">Editace a mazání tradicí</h2>
            
            <?php if (!empty($traditions)): ?>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="table-primary">
                            <tr>
                                <th>ID</th>
                                <th>Název</th>
                                <th>Stáří</th>
                                <th>Popis</th>
                                <th>Časové období</th>
                                <th>Akce</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($traditions as $tradition): ?>
                                <?php
                                    $traditionUserId = $tradition['user_id'] ?? null;
                                    $currentUserId = $_SESSION['user_id'] ?? null;
                                    $isAdmin = ($_SESSION['role'] ?? '') === 'admin';
                                    $ownsTradition = $currentUserId == $traditionUserId;
                                ?>
                                <tr>
                                    <td><?= htmlspecialchars($tradition['id']) ?></td>
                                    <td><?= htmlspecialchars($tradition['name']) ?></td>
                                    <td><?= htmlspecialchars($tradition['age']) ?></td>
                                    <td><?= htmlspecialchars($tradition['description']) ?></td>
                                    <td><?= htmlspecialchars($tradition['season']) ?></td>
                                    <td>
                                        <?php if ($isAdmin || $ownsTradition): ?>
                                            <a href="?edit=<?= $tradition['id'] ?>" class="btn btn-sm btn-primary me-1">Upravit</a>
                                            <a href="../../controllers/tradition_delete.php?id=<?= $tradition['id'] ?>" 
                                               class="btn btn-sm btn-danger" 
                                               onclick="return confirm('Opravdu chcete smazat tuto tradici?');">Smazat</a>
                                        <?php else: ?>
                                            <span class="text-muted">Nemáte oprávnění</span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php else: ?>
                <div class="alert alert-info">Žádná tradice nebyla nalezena.</div>
            <?php endif; ?>
        <?php endif; ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>