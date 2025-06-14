<?php
session_start();

/* if (!isset($_SESSION['username'])) {
    header("Location: ../../controllers/traditions_list.php");
    exit();
} */
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
  <nav class="navbar navbar-expand-lg navbar navbar-dark">

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
        <nav class="col-md-2 d-none d-md-block sidebar p-3">
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
        
        
      </ul>
    </li>
    </nav>
                            
    <main class="col-md-10 ms-sm-auto px-4">
      <header class="pt-3 pb-3">
      </header>
            <div class="content-wrapper">
                <h1></h1>
                <section class="grid-container">
                    <article class="card">
                        <h2><a href="gods.php">Bohové</a></h2>
                        <p>Slovanská mytologie, ačkoliv není tak dochovaná jako řecká nebo severská, skrývá pestrý a fascinující svět bohů, duchů a nadpřirozených bytostí. Naši předkové - staří Slované - věřili v mnoho bohů, kteří vládli různým silám přírody, lidskému osudu i válce. Panteon se mohl mírně lišit podle regionu (východní, západní a jižní Slované), ale některá božstva byla uctívána plošně.</p>
                        <img src="images/SlovMyth.jpg" class="img2" alt="Obrázek vyzobrazující některé bytosti ze slovanské mythologie">
                    </article>
                    <article class="card">
                    <h2><a href="creatures.php">Stvoření a monstra</a></h2>
                        <p>Ve víře starých Slovanů hrály důležitou roli nadpřirozené bytosti spojené s přírodou, každodenním životem a lidským osudem. Každé místo - les, řeka, pole či dům - bylo považováno za obydlené neviditelnými silami, které bylo třeba respektovat.  
                            Tyto bytosti nebyly nutně dobré nebo zlé. Mohly chránit, ale také škodit, pokud byl narušen přirozený řád. Lidé s nimi počítali při zemědělské práci, v domácnosti i v rituálech. Víra v jejich existenci byla součástí běžného života a často se odrážela v lidových zvycích a pohádkách.</p>
                        <img src="images/Babajaga2.jpg"  class="img2" alt="Obrázek Baby Jagy" >
                    </article>
                    <article class="card">
                        <h2><h2><a href="traditions_old.php">Staré slovanské tradice</a></h2></h2>
                        <p>Slovanské tradice nebyly jen souborem zvyků, ale celým způsobem života. Vycházely z rytmu přírody a měly hluboký symbolický význam. Lidé nevnímali události v roce jako pouhé změny počasí, ale jako důležité okamžiky, které je třeba uctít, připomenout nebo oslavit.</p>
                        <img src="images/SlovTrad1.jpg"  class="img2" alt="Obrázek">
                    </article>
                    <article class="card">
                        <h2><a href="traditions_new.php">Nové slovanské tradice</a></h2>
                        <p>S příchodem křesťanství se staré slovanské tradice neztratily - proměnily se. Převzaly nové významy, ale zůstaly ve své podstatě. Z původních rituálů se staly lidové zvyky, které žijí dál, jen pod jiným jménem. A právě v této tiché kontinuitě je jejich síla.</p>
                        <img src="images/SlovTrad.webp"  class="img2" alt="Fotka slavících dívek">
                    </article>
                </section>
                
            </div>
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
        <li id="zdroj-kolovrat" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                        <strong>Kolovrat</strong> - 
                        <a href="https://kolovrat.pohanskaspolecnost.cz/kolo-roku-slovane/" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                           onmouseover="this.style.textDecoration='underline'"
                           onmouseout="this.style.textDecoration='none'">
                            Výroční slavnosti starých slovanů
                        </a>
                    </li>
                    <li id="zdroj-slovansky-kruh" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Slovanský kruh</strong> - 
                    <a href="http://www.slovanskykruh.cz/2017/03/kolovrat-aneb-slovanske-slavnosti-v-prubehu-roku/" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                       onmouseover="this.style.textDecoration='underline'"
                       onmouseout="this.style.textDecoration='none'">
                        Kolovrat aneb Slovanské slavnosti v průběhu roku
                    </a>
                </li>    
                <li id="zdroj-slovansky-kruh" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Novinky.cz</strong> - 
                    <a href="https://www.novinky.cz/clanek/zena-styl-novodobi-slovane-ti-co-vynaseji-moranu-40007392" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                       onmouseover="this.style.textDecoration='underline'"
                       onmouseout="this.style.textDecoration='none'">
                       Novodobí Slované: ti, co vynášejí Moranu
                    </a>
                </li>  
                <li id="zdroj-slovansky-kruh" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Kouzla z nití</strong> - 
                    <a href="https://www.kouzlazniti.cz/l/kolo-roku-proc-a-jak-ozivaji-stare-pohanske-svatky-a-tradice/" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                       onmouseover="this.style.textDecoration='underline'"
                       onmouseout="this.style.textDecoration='none'">
                       Kolo roku - proč a jak ožívají staré pohanské svátky a tradice
                    </a>
                </li>  
                 <li id="zdroj-wikipedia-mytologie" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Wikipedie</strong> - 
                    <a href="https://cs.wikipedia.org/wiki/Slovansk%C3%A1_mytologie" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                       onmouseover="this.style.textDecoration='underline'"
                       onmouseout="this.style.textDecoration='none'">
                        Slovanská mytologie
                    </a>
                </li>
                <li id="zdroj-wikipedia-nabozenstvi" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Wikipedie</strong> - 
                    <a href="https://cs.wikipedia.org/wiki/Slovanské_náboženství" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                       onmouseover="this.style.textDecoration='underline'"
                       onmouseout="this.style.textDecoration='none'">
                        Slovanské náboženství
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
