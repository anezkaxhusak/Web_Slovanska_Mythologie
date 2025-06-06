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
        <h1>Démoni ohně<h1>
      </header>
      <section>
      <p>Stejně jako většina ostatních démonů i bytosti ohně se projevují jako hodní i jako zlí. Náklonnost bytostí ohně si je možné zabezpečit magickými oběťmi, obvykle vhazováním žertvy do plamenů posvátného ohně.</p>
        <p>Živý, tedy posvátný oheň se ve zvycích Slovanů zapaloval třením dřívek, případně křesadlem. Zvláštní úctě se těšil oheň v domácnostech. Hospodyně vždy musela před zažehnutím ohně pec vymést a pak oheň udržovat, aby nevyhasl. </p>
        <p>Démoni ohně přinášejí do domu blahobyt, ale také ho mohou zničit.</p>
        <h2>Bludičky  </h2>
        <p>Ohníčky duší, jimž nebylo povoleno vstoupit do podsvětí, protože zemřely násilnou smrtí. Tyto bludičky se za svou smrt často mstí tím, že lákají lidi na nebezpečná. mista. Jiné. zase naopak ukazují správnou cestu tomu, kdo se ztratil.</p>
        <img  src="images/Bludičky.jpg" class="img1" alt="Obrázek: Bludičky">
        <h2>Zmok</h2>
        <p>Také zvaný Rarach. Přináší svému hospodáři na jedné straně štěstí, ale na stranu druhou se pak zmocní jeho duše. Rarach se zjevuje jako malý ohnivý mužíček, který se proměňuje v sokolovitého dravce raroha.</p>
        <h2>Plevník </h2>
        <p>Druh zmoka, jenž se na rozdíl od něj nemění ve zvíře, ale zjevuje se jako ohnivá koule.</p>
        <h2>Salamandr</h2>
        <p>Malý ohnivý dráček nebo had. Je to bytost stvořená magii, Mohou jej stvořit jak bohové, tak i lidští čarodějové. Salamandr přináší bohatství a blahobyt; na rozdíl od zmoků ho jeho tvůrce ovládá.</p>
        <img  src="images/Salamandr.webp" class="img1" alt="Obrázek: Salamandr">
        <h2>Ohnivý skřítek</h2>
        <p>Ztělesňuje oheň. Čím lépe je o takovou bytost postaráno, tím více roste a lépe chrání ohniště</p>
        <h2>Pták Ohnivák</h2>
        <p>Kouzelný pták, chrání ohniště. Je ztělestněním boha Simargla a nčkdy bývá zobrazován jako zlatý nebo měděný kohout. Pták Ohnivák přináší bohatství a zdraví. Umírá tím, že shoří, ale znovu se ze svého popela zrodí.</p>
        <img  src="images/PtákOhnivák.jpg" class="img1" alt="Obrázek: Pták Ohnivák">
        <img  src="images/PtákOhnivák2.jpg" class="img1" alt="Obrázek: Pták Ohnivák">
        

      </section>
        </div>
        </div>
        </main>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>