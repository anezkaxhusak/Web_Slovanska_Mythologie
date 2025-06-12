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
        
      </ul>
    </li>
    </nav>

    <main class="article">
      <header class="pt-3 pb-3">
        <h1>Jarní tradice<h1>
      </header>
      <section>
        <p><h2>Hromnice</h2>
<p>Hromnice, slavené 2. února, jsou prvním svátkem jara v slovanském kalendáři. Tento svátek je v původní slovanské tradici spojen s probouzením boha Peruna, vládce hromů a blesků, ze zimního spánku. 
    Perun byl představitelem plodivé síly a jeho probuzení znamenalo příchod jarního zahřmění, které zahánělo zlé duchy zimy.</p>
<p>Při prvním jarním hřmění lidé klekávali na zem a líbali ji. Ve světnicích přemísťovali nábytek, hýbali nádobím, na dvorku nadzvedávali vozy a mávali polním nářadím. Před vraty zatínali do země sekery - všechny tyto rituály měly pomoci Perunovi vyhánět zlé duchy ze stavení.</p>
<p>Lidé uklízeli po zimě, vymetali stáje, čistili topeniště a zapalovali hranice s očistnou mocí. Světily se také studánky a vodní zdroje, aby bylo po celý rok dostatek vody pro lidi, dobytek i pole.</p>
<p></p>

<h2>Masopust</h2>
<p>Tradiční svátek před Velikonocemi, spojený s tancem, hudbou a maskami. Sloužil k vyhnání zimy a oslavě plodnosti a hojnosti.</p>
<p>Hlavním prvkem masopustu byly průvody masek, které obcházely vesnice s muzikou. Masky měly různé podoby - od zvířecích (medvěd, kobyla) až po lidské postavy. Tyto průvody vybíraly do košíků kořalku, vejce, slaninu, koblihy nebo Boží milosti, které byly večer společně konzumovány v hospodě.</p>
<p>Konaly se také obřadní tance, například "na len", "na konopě", "žabská" nebo tanec "pod šable" ve Strání. Masopust končil přesně o půlnoci v úterý "pochováním basy" nebo Baccha, symbolizující konec veselí a začátek půstu.</p>
<img  src="images/Masopust.webp" class="img1" alt="Obrázek: Masopust">

<h2>Vítání jara</h2>
<ul>
  <li>11. února - první den jara podle některých tradic.</li>
  <li>Počátek března - přílet ptáků, symbolizující návrat života.</li>
  <li>Jarní rovnodennost - den, kdy je den stejně dlouhý jako noc, oslava rovnováhy a obnovy přírody.</li>
</ul>

<h2>Svátek prvního hromu</h2>
<p>Oslava příchodu bouřek a hromů, spojená s bohem Perunem. Lidé věřili, že hromy přinášejí úrodu a chrání před nebezpečím.</p>

<h2>Přivítání Rusalek</h2>
<p>Rusalka je duch přírody, symbolizující vodní síly. Její přivítání bylo spojené s rituály uctívání vody a přírody.</p>
<p>Rusalkám se tradičně dávaly stužky a pentle, které se věšely na větve stromů u vodních ploch nebo na studně. Lidé jim pekli žitný chléb a nechávali ho na oknech, aby se mohly nasytit jeho vůní. Také jim byly dávány drobné obětiny - mince, chléb či kousky jemného plátna.</p>
<img  src="images/Vítánírusalek.jpg" class="img1" alt="Obrázek: Přivítání rusalek">

<h2>Jarilovy slavnosti</h2>
<p>Jarilovy slavnosti byly zasvěceny bohu Jarilovi, který symbolizoval jaro, mladickou sílu a plodnost. Tyto slavnosti zahrnovaly tance, zpěv a obřady zaměřené na podporu úrody a plodnosti.</p>
<p></p>
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
    
                    <li id="zdroj-kolovrat" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                        <strong>Kolovrat</strong> - 
                        <a href="https://kolovrat.pohanskaspolecnost.cz/kolo-roku-slovane/" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                           onmouseover="this.style.textDecoration='underline'"
                           onmouseout="this.style.textDecoration='none'">
                            Výroční slavnosti starých slovanů
                        </a>
                    </li>
                    <li id="zdroj-peruni" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                        <strong>Peruni.sk</strong> - 
                        <a href="https://peruni.estranky.sk/clanky/svet-slovanskych-bohu-a-demonu.html" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                           onmouseover="this.style.textDecoration='underline'"
                           onmouseout="this.style.textDecoration='none'">
                            Svět slovanských bohů a démonů
                        </a>
                    </li>
                    <li id="zdroj-wikipedia-masopust" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                        <strong>Wikipedie</strong> - 
                        <a href="https://cs.wikipedia.org/wiki/Masopust" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                           onmouseover="this.style.textDecoration='underline'"
                           onmouseout="this.style.textDecoration='none'">
                            Masopust
                        </a>
                    </li>
                    <li id="zdroj-czech-traditions" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                        <strong>České tradice</strong> - 
                        <a href="https://cesketradice.cz/hromnice/" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                           onmouseover="this.style.textDecoration='underline'"
                           onmouseout="this.style.textDecoration='none'">
                            Hromnice
                        </a>
                    </li>
                    <li id="zdroj-slovane-mytologie" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                        <strong>Slované.cz</strong> - 
                        <a href="http://slovane.cz/?cat=7" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                           onmouseover="this.style.textDecoration='underline'"
                           onmouseout="this.style.textDecoration='none'">
                            Mytologie slovanských duchů
                        </a>
                    </li>
                    <li id="zdroj-rozhlas-jarilo" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                        <strong>Český rozhlas Plus</strong> - 
                        <a href="https://plus.rozhlas.cz/jarilo-a-jarni-mytus-jak-slavili-velikonoce-stari-slovane-6580752" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                           onmouseover="this.style.textDecoration='underline'"
                           onmouseout="this.style.textDecoration='none'">
                            Jarilo a jarní mýtus
                        </a>
                    </li>
                    <li id="zdroj-estara-rusalky" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                        <strong>Estärä</strong> - 
                        <a href="https://estara.cz/rusalky/" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                           onmouseover="this.style.textDecoration='underline'"
                           onmouseout="this.style.textDecoration='none'">
                            Rusalky
                        </a>
                    </li>
                    <li id="zdroj-slovansky-kruh" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                        <strong>Slovanský kruh</strong> - 
                        <a href="http://www.slovanskykruh.cz/2017/03/hromnice-zimni-dedkove/" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                           onmouseover="this.style.textDecoration='underline'"
                           onmouseout="this.style.textDecoration='none'">
                            Hromnice / Zimní Dědkové
                        </a>
                </li>
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