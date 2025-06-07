<?php
session_start();
?>
<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <title>Slovanská mytologie</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles/gods.css">
</head>
<body>

<div class="container-fluid">
  <div class="row">
    <nav class="navbar navbar-expand-lg navbar-dark   mb-4">
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
        <main class="article2">
      <header class="pt-3 pb-3">
        <h1>Stvoření a démoni<h1>
      </header>
      <section>
        <p> Ve světě starých Slovanů neexistovalo ostré oddělení mezi přirozeným a nadpřirozeným. Kromě bohů a božstev uctívaných v rámci náboženských obřadů byl jejich svět obydlen mnoha dalšími bytostmi - duchy, démony a stvořeními, které se nacházely všude kolem: v lesích, na polích, ve vodě, v domech, ale i v časech dne či ročních obdobích. 
          Tyto bytosti nebyly nutně vnímány jako zlé - jejich působení mohlo být prospěšné i škodlivé, podle toho, jak se k nim lidé chovali. </p> 
          <p> Přítomnost těchto bytostí odrážela vnímání světa jako živého celku, kde každé místo a každý jev měl svého ducha nebo strážce. 
            Slované si nevysvětlovali neznámé jevy abstraktně, ale prostřednictvím osobních a často regionálně odlišných představ. 
            Mnohé z těchto bytostí byly spojeny s konkrétními činnostmi - hospodařením, smrtí, narozením, změnami počasí nebo přechodovými momenty v čase. </p> 
            <p> Z těchto představ se postupně vytvořil rozsáhlý a členitý soubor mytických bytostí, které dnes souhrnně označujeme jako démoni nebo duchové. Jejich role se lišila podle místa výskytu, charakteru a účelu. 
              Některé chránily domácnost, jiné ovládaly lesy, další byly spojeny s podzemím nebo vodními toky. </p> 
              <img src="images/SlovMyth3.jpg" class="img1" alt="Obrázek: 3 postavy slovanské mytologie">


              <p> Je možné tyto bytosti rozdělit do několika kategorií: </p> 
              <ul class="list-unstyled">
  <li>
    <a href="demoni_domaci.php" class="text-decoration-none">
      <strong>Domácí démoni</strong>
    </a> - bytosti spojené s domem, ohništěm a rodinným životem.
  </li>
  <li>
    <a href="demoni_les_pol.php" class="text-decoration-none">
      <strong>Lesní a polní démoni</strong>
    </a> - duchové vegetace, pole, lovu a nespoutané přírody.
  </li>
  <li>
    <a href="demoni_hor_podzemi.php" class="text-decoration-none">
      <strong>Démoni hor</strong>
    </a> - bytosti z temných a nepřístupných míst, často spojované s poklady, moudrostí nebo smrtí.
  </li>
  <li>
    <a href="demoni_vody.php" class="text-decoration-none">
      <strong>Vodní démoni</strong>
    </a> - duchové řek, jezer, studní a bažin, ovlivňující úrodu i lidský osud.
  </li>
  <li>
    <a href="demoni_ohne.php" class="text-decoration-none">
      <strong>Ohniví démoni</strong>
    </a> - bytosti spojené s ohněm, bleskem a destruktivní silou, ale i očistou a obnovou.
  </li>
  <li>
    <a href="demoni_vetru.php" class="text-decoration-none">
      <strong>Démoni větru</strong>
    </a> - nestálé a pohyblivé síly vzduchu, změny a poselství.
  </li>
  <li>
    <a href="demoni_cas.php" class="text-decoration-none">
      <strong>Démoni času</strong>
    </a> - abstraktnější bytosti ztělesňující přechodnost, roční cykly nebo okamžiky zvratu.
  </li>
</ul>
        <p> Každá skupina má své specifické zástupce, jejichž podoba a chování se liší podle regionální tradice. Dohromady však tvoří jeden z nejbohatších a nejpestřejších prvků slovanského mytologického světa. </p>
      </section>
      <div style="background-color: #fff9db; border: 1px solid #facc15; border-radius: 16px; padding: 1rem; margin-top: 2rem; font-size: 0.9rem;">
    <h3 style="color: #1e3a8a; font-size: 1rem; margin-bottom: 0.8rem; font-weight: bold;">Zdroje</h3>
    <ul style="list-style: none; padding: 0; margin: 0;">
        <li style="margin-bottom: 0.3rem; font-size: 0.85rem;">
            <strong>Bohové starých Slovanů</strong> - 
            <a target="_blank" style="color: #1e3a8a; text-decoration: none;"
               onmouseover="this.style.textDecoration='underline'"
               onmouseout="this.style.textDecoration='none'">
                Peter Weleslaw Kuzmišín, Bohové starých Slovanů, 1. vyd. Nakladatelství Eugenika, 2016. ISB 978-80-8100-454-4
            </a>
        </li>
        <li id="zdroj-peruni-demoni" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                        <strong>Peruni.sk</strong> - 
                        <a href="https://peruni.estranky.sk/clanky/svet-slovanskych-bohu-a-demonu.html" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                           onmouseover="this.style.textDecoration='underline'"
                           onmouseout="this.style.textDecoration='none'">
                            Svět slovanských bohů a démonů
                        </a>
                    </li>
                    <li id="zdroj-wikipedia-slovanski-demoni" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                        <strong>Wikipedie</strong> - 
                        <a href="https://cs.wikipedia.org/wiki/Slovanští_démoni" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                           onmouseover="this.style.textDecoration='underline'"
                           onmouseout="this.style.textDecoration='none'">
                            Slovanští démoni
                        </a>
                    </li>
                  </ul>
            </div>
        </div>
        </div>
        </main>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
