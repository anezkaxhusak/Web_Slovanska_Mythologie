<?php
session_start();
?>
<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <title>Slovanská mytologie</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Vlastní CSS -->
  <link rel="stylesheet" href="styles/gods.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark  ">

            <div class="container-fluid">
                <a class="navbar-brand d-flex align-items-center" >
                    <img src="images/Logo.png" alt="Logo" style="height: 80px; margin-right: 10px;">
                    Slovanská mytologie</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Přepnout navigaci">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <button type="button" class="btn btn-outline-light"> <a class="nav-link" href="base.php#">Hlavní stránka</a></button>
                <div class="dropdown">
                <button class="btn btn-outline-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Články
                     </button>
                        <ul class="dropdown-menu">
                         <li><a class="dropdown-item" href="gods.php">Bohové</a></li>
                    <li><a class="dropdown-item" href="creatures.php">Stvoření a monstra</a></li>
                    <li><a class="dropdown-item" href="traditions_old.php">Staré slovanské tradice </a></li>
                    <li><a class="dropdown-item" href="traditions_new.php">Nové slovanské tradice </a></li>
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
        <div class="container-fluid">
        <div class="row">
        <nav class="col-md-2 d-none d-md-block sidebar   p-3">
        <ul class="nav flex-column">
        <li class="nav-item dropdown">
        <button class="btn btn-outline-light dropdown-toggle w-100 text-start" type="button" data-bs-toggle="dropdown">Bohové</button>
                        <ul class="dropdown-menu">
                         <li><a class="dropdown-item2" href="BigGods.php">Staré božstvo</a></li>
                        <li><a class="dropdown-item2" href="SmallerGods.php">Mladší božstvo</a></li>
                         
                     </ul>
        <button class="btn btn-outline-light dropdown-toggle w-100 text-start" type="button" data-bs-toggle="dropdown">Stvoření a monstra</button>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item2" href="demoni_domaci.php">Domácí démoni</a></li>
                        <li><a class="dropdown-item2" href="demoni_cas.php">Démoni času</a></li>
                        <li><a class="dropdown-item2" href="demoni_vody.php">Démoni vody</a></li>
                        <li><a class="dropdown-item2" href="demoni_ohne.php">Démoni ohně</a></li>
                        <li><a class="dropdown-item2" href="demoni_vetru.php">Démoni větru</a></li>
                        <li><a class="dropdown-item2" href="demoni_les_pol.php">Démoni lesu a pole</a></li>
                        <li><a class="dropdown-item2" href="demoni_hor_podzemi.php">Démoni hor</a></li>
                     </ul>
        <button class="btn btn-outline-light dropdown-toggle w-100 text-start" type="button" data-bs-toggle="dropdown">Staré tradice</button>
                    <ul class="dropdown-menu">
                         <li><a class="dropdown-item2" href="SpringTraditionOld.php">Jarní</a></li>
                        <li><a class="dropdown-item2" href="SummerTraditionOld.php">Letní</a></li>
                        <li><a class="dropdown-item2" href="FallTraditionOld.php">Podzimní</a></li>
                        <li><a class="dropdown-item2" href="WinterTraditionOld.php">Zimní</a></li>
                     </ul>
        <button class="btn btn-outline-light dropdown-toggle w-100 text-start" type="button" data-bs-toggle="dropdown">Nové tradice</button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item2" href="OldTradToday.php">Tradice přenesené z dob pohanství</a></li>
                        <li><a class="dropdown-item2" href="ChristianTrad.php">Tradice přenesené z křesťanství</a></li>
                        <li><a class="dropdown-item2" href="ModernUnrelated.php">Moderní tradice</a></li>
                     </ul>
        
        <!-- <button class="btn btn-outline-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Slované a náboženství</button> -->
      </ul>
    </li>
    </nav>

    <main class="article">
      <header class="pt-3 pb-3">
        <h1>Démoni lusů a polí<h1>
      </header>
      <section>
      <p>Démoni, kteří pečují o živočichy a rostliny. Tyto bytosti lze rozdělit na ty, co pečují o les, a na strážce polí a luk.</p>
        <p>Zprávy o uctívání lesních a polních bytostí jsou velmi staré. Jsou zaznamenány v adoracích stromů a hájů. Ve skutečnosti ani tak nejde o uctívání samotných stromů či rostlin, ale spíše o uctívání bytostí, které v nich přebývají.</p>
        <p>Každý strom či rostlina má svého sejnu neboli vílu či ducha. Každý les má zase svého vládce, jenž se zjevuje v podobě chlupatého obra s drápy místo nehtů.</p>

        <h2>Lesovci</h2>
        <p>Velké chlupaté bytosti, jimž Svatogor svěřil vládu nad jednotlivými lesy. Dokážou se proměnit v jakékoliv zvíře nebo strom. K lidem mohou být dobrotiví, ale také velmi nebezpeční.</p>
        <img  src="images/Lesovci.jpg" class="img1" alt="Obrázek: Lesovci">
        
        <h2>Sejna</h2>
        <p>Pojmenování pro mužského ducha stromu nebo také rostliny či houby. Sejnové jsou velmi vysoké a štíhlé bytosti podobné lidem.</p>
        <h2>Lesní Víly</h2>
        <p>Také zvané Samogorky. Jsou ženskými duchy stromů, rostlin a hub. Jsou podobné vodním či polním vílám, ale jsou (stejně jako sejnové) mnohem vyšší.</p>
        <img  src="images/Lesnívíly.jpeg" class="img1" alt="Obrázek: Lesní víly">
        <h2>Grgalica</h2>
        <p>Zlá divoženka, která láká děti i mladé hochy do hlubokých zákoutí, kde je zabije a sežere.</p>

        <h2>Mamuna</h2>
        <p>Lesní stařena, která ráda pomůže dobrým lidem v nouzi. Zná všechny kouzelné bylinky a jejich moc. Jejím manželem je Gorianin - Iesní duch, který dokáže léčit všechny nemoci.</p>
        <img  src="images/Mamuna.jpg" class="img1" alt="Obrázek: Mamuna">
        
        <h2>Mavekyně </h2>
        <p>Polní a luční víly jen o maličko vyšší než obilné klasy. Jako všechny vily i ony rády tančí. Svým tancem často vytvářejí v obilí různé obrazce.</p>
        <h2>Běloň </h2>
        <p>Také zvaný Sporiš. Duch, který se zjevuje jako mládenec v bílé košili. Obvykle se k lidem chová přátelsky. Pomáhá jim při sklizni a obdarovává ty, kteří se s ním spřátelí. Svým příchodem přináší dobrou úrodu.</p>
        <h2>Serpolnice</h2>
        <p>Ženské polní strašidlo, které svou kosou seká lidské hlavy</p>
        <img  src="images/Serpolnice.webp" class="img1" alt="Obrázek: Serpolnice">
        
      </section>
        </div>
        </div>
        </main>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>