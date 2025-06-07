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
        <h1>Letní tradice<h1>
      </header>
      <section>
      

<h2>Přivítání Mokoše - Radonica</h2>
<p>Oslava bohyně Mokoše, patronky plodnosti a úrody. Slavnosti zahrnovaly obřady zaměřené na zajištění dobré sklizně a ochranu domácnosti.</p>
<p>Zemědělci od dávných dob připravují velkolepé děkovné hody. Lidé si však také uvědomovali, že Mokoš není pouhou zemskou bohyní, je také nebeskou přadlenou, vládkyní nad lidským osudem a ochránkyní posvátné nitě života všeho a všech, kteří jsou na tomto světě.</p>

<h2>Zelené svátky</h2>
<p>Oslava přírody a jejího bujení. Lidé zdobili své domovy zelenými ratolestmi a účastnili se tanců a zpěvů v přírodě. Významné bylo i obřadní obcházení polí, čištění studánek, zdobení domů ratolestmi, slavnostní vyhánění dobytka na pastvu.</p>
<p>Konec jara a přechod k letnímu období byl ve znamení svátků Rusalných. Zdobily se hroby a přinášely obětiny. V Čechách se hrály hry na Krále a královnu - O svatodušním pondělí zvolili chlapce krále (mezi sebou) a královnu. Podobná je i Jízda králů na Moravě.</p>

<h2>Koupala</h2>
<p>Slavnost spojená s letním slunovratem, oslava ohně a vody. Lidé zapalovali ohně, skákali přes ně a koupali se v řekách, aby očistili tělo i duši.</p>
<p>Letní slunovrat je oslavou slunce a vrcholného období jeho vlády, je nejdelší den v roce a také Dažboh, bůh slunce, je na vrcholu své moci. Lidé tedy oslavovali božstva spojená s ohněm a sluncem (Dažboh, Ogni, Svarožič), ale také bohyni plodivé síly Mokoš. Dalším hlavním bohem tohoto času je vedle Dažboha také Perun, jehož síla stále narůstá.</p>
<p>Smyslem svátku bylo zajištění zdárné úrody, a to skrze vláhu přivolanou koupelemi a teplo přivolané ohni. V kupadelných písních se objevuje motiv sňatku ohně a vody, dvou hlavních živlů tohoto svátku.</p>
<img  src="images/KoupalaTrad.webp" class="img1" alt="Koupala">
<img  src="images/KoupalaTrad1.jpg" class="img1" alt="Obrázek: Koupala">
<img  src="images/KoupalaTrad.jpg" class="img1" alt="Obrázek: Koupala">



<h2>Dodala</h2>
<p>Oslava bohyň a duchů přírody. Slavnosti zahrnovaly obřady zaměřené na udržení harmonie s přírodou a zajištění plodnosti. Dodola a Perperuna jsou starobylé slovanské obřady přivolávání deště, rozšířené mezi různými národy jihovýchodní Evropy až do 20. století.</p>
<p>Obřadní rituál je analogicko-imitativní magický obřad, který sestává ze zpěvu a tance prováděného mladými dívkami nebo chlapci v procesích následujících hlavního účinkujícího, který je oblečen v čerstvých větvích, listech a bylinách, s účelem vyvolání deště, obvykle praktikovaného v období sucha, zejména v letní sezóně.</p>
<p>Takto nazdobená dívka byla při tanci oblévána vodou přihlížejícími ženami, přičemž se jí všichni klaněli a vůbec jí jakožto pozemské zástupkyni bohyně prokazovali všemožnými způsoby úctu. Na konci tance Dodola požehnala všem přítomným i samotné zemi Perunovým jménem, poté jí byly postupně sňaty ozdoby a dívka se navracela zpět ke svému pozemskému životu.</p>
<p>Podle některých interpretací je Dodola slovanská bohyně deště a manželka nejvyššího boha Peruna (který je bohem hromu). Slované věřili, že když Dodola dojí své nebeské krávy, mraky, prší na zemi. Každé jaro Dodola údajně létá nad lesy a poli a šíří jarní zeleň, zdobí stromy květy.</p>
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
        </li>
                <li id="zdroj-kolovrat-slovane" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Kolovrat</strong> - 
                    <a href="https://kolovrat.pohanskaspolecnost.cz/kolo-roku-slovane/" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                       onmouseover="this.style.textDecoration='underline'"
                       onmouseout="this.style.textDecoration='none'">
                        Kolo roku: Slované
                    </a>
                </li>
                <li id="zdroj-wikipedie-kupadla" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Wikipedie</strong> - 
                    <a href="https://cs.wikipedia.org/wiki/Kupadelné_svátky" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                       onmouseover="this.style.textDecoration='underline'"
                       onmouseout="this.style.textDecoration='none'">
                        Kupadelné svátky
                    </a>
                </li>
                <li id="zdroj-wikipedie-mokos" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Wikipedie</strong> - 
                    <a href="https://cs.wikipedia.org/wiki/Moko%C5%A1" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                       onmouseover="this.style.textDecoration='underline'"
                       onmouseout="this.style.textDecoration='none'">
                        Mokoš
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
                <li id="zdroj-wild-coco-kupalo" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Wild & Coco</strong> - 
                    <a href="https://www.wildandcoco.com/letni-slunovrat-neboli-kupalo-magicky-svatek-ktery-si-zaslouzi-oslavu" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                       onmouseover="this.style.textDecoration='underline'"
                       onmouseout="this.style.textDecoration='none'">
                        Letní slunovrat neboli kupalo
                    </a>
                </li>
                <li id="zdroj-jasenka-kupala" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Jasenka je naša otčina</strong> - 
                    <a href="https://www.jasenka-nasaotcina.cz/zivot-slovanu/slovanske-svatky/clanky-prispevky/item/62-letni-slunovrat-a-kupala" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                       onmouseover="this.style.textDecoration='underline'"
                       onmouseout="this.style.textDecoration='none'">
                        Letní Slunovrat a Kupala
                    </a>
                </li>
                <li id="zdroj-rodna-vira-dodola" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Rodná víra</strong> - 
                    <a href="https://rodnavira.cz/blog/lidova-kultura/dodola-perperuna-starobyly-obrad-privolavani-deste/" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                       onmouseover="this.style.textDecoration='underline'"
                       onmouseout="this.style.textDecoration='none'">
                        Dodola, perperuna - starobylý obřad přivolávání deště
                    </a>
                </li>
                <li id="zdroj-wikipedia-dodola" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Wikipedia</strong> - 
                    <a href="https://en.wikipedia.org/wiki/Dodola_and_Perperuna" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                       onmouseover="this.style.textDecoration='underline'"
                       onmouseout="this.style.textDecoration='none'">
                        Dodola and Perperuna (anglicky)
                    </a>
                </li>
                <li id="zdroj-novinky-slovane" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Novinky.cz</strong> - 
                    <a href="https://www.novinky.cz/clanek/zena-styl-novodobi-slovane-ti-co-vynaseji-moranu-40007392" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                       onmouseover="this.style.textDecoration='underline'"
                       onmouseout="this.style.textDecoration='none'">
                        Novodobí Slované: ti, co vynášejí Moranu
                    </a>
                </li>
                <li id="zdroj-novinky-slovane" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Kolovrat</strong> - 
                    <a href="https://kolovrat.pohanskaspolecnost.cz/kolo-roku-slovane/" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                       onmouseover="this.style.textDecoration='underline'"
                       onmouseout="this.style.textDecoration='none'">
                        Výroční slavnosti starých slovanů
                    </a>
                </li>
            </ul>
        </div>
    </main>
    </ul>
</div>
        </div>
        </div>
    </main>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>