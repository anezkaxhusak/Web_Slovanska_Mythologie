<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrace</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../informazione/styles/gods.css">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark  ">
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
                    </ul>
                </div>
            </div>
        </nav>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white text-center">
                    <h2>Registrace uživatele</h2>
                </div>
                <div class="card-body">
                    <form id="registrationForm" action="../../controllers/register.php" method="post" >
                        <div class="mb-3">
                            <label for="username" class="form-label">Uživatelské jméno:</label>
                            <input type="text" id="username" name="username" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail :</label>
                            <input type="email" id="email" name="email" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Jméno:</label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="surname" class="form-label">Příjmení :</label>
                            <input type="text" id="surname" name="surname" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Heslo:</label>
                            <input type="password" id="password" name="password" class="form-control"
                                   pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$"
                                   title="Min. 8 znaků, 1 velké písmeno a 1 číslo" required>
                        </div>

                        <div class="mb-3">
                            <label for="password_confirm" class="form-label">Potvrzení hesla:</label>
                            <input type="password" id="password_confirm" name="password_confirm" class="form-control" required>
                            <div id="passwordMatchMessage" class="form-text text-danger d-none">
                                Hesla se neshodují.
                            </div>
                        </div>

                        

                        <button type="submit" class="btn btn-primary w-100">Registrovat se</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    const form = document.getElementById('registrationForm');
    const password = document.getElementById('password');
    const confirm = document.getElementById('password_confirm');
    const message = document.getElementById('passwordMatchMessage');

    form.addEventListener('submit', function (e) {
        if (password.value !== confirm.value) {
            e.preventDefault();
            message.classList.remove('d-none');
        } else {
            message.classList.add('d-none');
        }
    });
</script>

</body>
</html>
