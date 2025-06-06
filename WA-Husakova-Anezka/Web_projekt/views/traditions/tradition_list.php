<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['username'])) {
    header("Location: ../views/auth/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slovanská mytologie - Výpis tradicí</title>
     <!-- Bootstrap CSS -->
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
                <button class="btn btn-outline-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead class="table-primary">
                                    <tr>
                                        <th>Název</th>
                                        <th>Stáří</th>
                                        <th>Popis</th>
                                        <th>Časové období</th>
                                        <th>Obrázek</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($traditions as $tradition): ?>
                                    <tr>
                                        <td><?= htmlspecialchars($tradition['name']) ?></td>
                                        <td><?= htmlspecialchars($tradition['age']) ?></td>
                                        <td><?= htmlspecialchars($tradition['description']) ?></td>
                                        <td><?= htmlspecialchars($tradition['season']) ?></td>
                                        <td>
                                            <?php
                                            if (!empty($tradition['images'])) {
                                                $imgs = json_decode($tradition['images'], true);
                                                if (is_array($imgs)) {
                                                    foreach ($imgs as $img) {
                                                        echo "<img src=''" . htmlspecialchars($img) . "' alt='obrázek' class='img-thumbnail' style='max-width: 100px; height: auto; margin-right: 5px;' />";
                                                    }
                                                }
                                            } else {
                                                echo "Žádný obrázek";
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    <?php else: ?>
                        <div class="alert alert-info">Žádná tradice nebyla nalezena</div>
                    <?php endif; ?>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>