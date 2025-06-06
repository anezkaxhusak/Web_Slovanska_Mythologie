<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ..//auth/login.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přidat tradici</title>
    
    <!-- Bootstrap CSS -->
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
        

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        <h2>Podělte se s námi o vaši tradici!</h2>
                    </div>
                    <div class="card-body">
                        <form action="../../controllers/TraditionController.php" method="post" enctype="multipart/form-data">
                            
                            <div class="mb-3">
                                <label for="name" class="form-label">Název tradice: <span class="text-danger">*</span></label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="age" class="form-label">Stáří tradice:</label>
                                <input type="text" id="age" name="age" class="form-control" required value="<?= htmlspecialchars($traditionToEdit['age'] ?? '') ?>">
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Popis: <span class="text-danger">*</label> 
                                <textarea id="description" name="description" class="form-control" required rows="3"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="season" class="form-label">Časové období: <span class="text-danger">*</label>
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
                                <input type="url" id="link" name="link" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="images" class="form-label">Obrázky (můžete nahrát více):</label>
                                <input type="file" id="images" name="images[]" class="form-control" multiple accept="image/*">
                            </div>

                            <button type="submit" class="btn btn-success w-100">Uložit tradici</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>