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
        <h1>Podzimní tradice<h1>
      </header>
      <section>

<h2>Perunův den</h2>
<p>Oslava boha Peruna, vládce hromu a blesku. Slavnosti zahrnovaly obřady zaměřené na ochranu před bouřkami a zajištění úrody.</p>
<img src="images/PerunůvDen.jpg" class="img1" alt="Obrázek: Perunův Den">

<h2>Dožínky</h2>
<p>Oslava sklizně a poděkování za úrodu. Lidé pořádali hostiny, zpívali písně a tancovali na počest boha Roda.</p>
<p>Podle slovanské tradice se vázal snop obilí do tvaru ženské postavy, přezdívalo se mu nevěsta nebo baba. Ten byl zavezen každému pantátovi a zanechán ve stodole do příštích dožínek pro ochranu stavení a dobrou úrodu v příštím roce. S Dožínkami se pojí obřadní cesta vesničanů z pole, kdy se spolu vezou na povoze se sklizenou úrodou ozdobení květinami a věnci z klasů.</p>
<p>Staří Slované v průběhu svátku obětovali chléb, typickou složku stravy Slovanů, případně kaši z obilí anebo oplatky. Zakončení hospodářského roku charakterizuje bujará oslava a velká hostina. Tradičně se oslavuje hojnost plodů a darů Matky Země spolu s uctěním bohyně Mokoš, bohyně Živy a dalších božstev bdících nad počasím a úrodnou půdou.</p>
<p></p>
<img  src="images/Dožínky.jpg" class="img1" alt="Obrázek: Dožínky">
<img  src="images/Dožínky1.jpg" class="img1" alt="Obrázek: Dožínky">


<h2>Odlet ptactva</h2>
<p>Symbolický svátek spojený s odletem ptáků na jih. Odlet ptactva byl jedním z nejvýraznějších signálů blížící se zimy, kterému Slované přikládali velký význam. Věřili, že ptáci jsou posly mezi světy a jejich odchod znamená uzavření komunikace s nebeskými sférami až do jara. V některých oblastech se konaly rituály na rozloučení s teplým obdobím a přípravy na dlouhé zimní měsíce.</p>

<h2>Podzimní rovnodennost - Svátek Roda a Rožanic</h2>
<p>Den, kdy je den stejně dlouhý jako noc, oslava rovnováhy a sklizně. Lidé uctívali boha Roda a bohyni Rožanicu, patrony úrody a plodnosti. Podzimní rovnodennost byla dobou, kdy se děkovalo za úrodu a prosilo o ochranu v nadcházející zimě.</p>
<img  src="images/Podzimnirovnodennost.jpg" class="img1" alt="Obrázek: Podzimní rovnodennost">

<h2>Mokošin podzimní svátek</h2>
<p>Oslava bohyně Mokoše, spojená s podzimní sklizní. Slavnosti zahrnovaly obřady zaměřené na zajištění dobré úrody a ochranu domácnosti.</p>
<img  src="images/MokošPodzimSvátek.jpg" class="img1" alt="Obrázek: Mokošin podzimní svátek">

<h2>Dušičky</h2>
<p>Oslava památky zesnulých. Lidé navštěvovali hroby svých předků, zapalovali svíčky a modlili se za jejich duše.</p>
<p>Historickým předchůdcem křesťanských dušiček byly u pohanských Slovanů ritualizované oslavy či hostiny, konané přímo na nekropolích na počest zesnulých předků. 
    S ohledem na fakt, že Keltové a poté Slované osídlili Střední Evropu a jejich kultury se zde prolínaly, předpokládá se, že svátek Samhain byl slaven i na území ČR.</p>
<p>Dušičky připadají na období, kdy Keltové oslavovali konec roku, svátek Samhain. Tento čas mezi podzimní rovnodenností a zimním slunovratem byl dobou, kdy se stírá hranice mezi světem živých a mrtvých. 
    Živí světlem ukazují cestu mrtvým. Dušičková tradice zapalovat svíčky pochází od Keltů i Slovanů, kteří věřili, že oheň očišťuje a pomáhá chránit před zlými silami.</p>
<p>Na Dušičky se zapalovala na okně svíce, aby duše mrtvého věděla, kam se vrátit za svými živými blízkými. Hořet mělo i dřevo v kamnech, aby duším nebyla zima. 
    Na stole se zemřelým nechávaly zbytky večeře nebo dával chléb na okno. Aby se duše nevyplašily, v tento den se z domu nevymetalo smetí. Pekly se "kosti svatých", bochánky či rohlíky ve tvaru kostí, a toto pečivo se rozdávalo chudým jako projev milosrdenství.</p>
<img  src="images/Dušičky.jpg" class="img1" alt="Obrázek: Dušičky">
<img  src="images/Dušičky1.jpg" class="img1" alt="Obrázek: Dušičky">

<h2>Podzimní Dědy</h2>
<p>Oslava památky předků, spojená s podzimní sklizní. Lidé pořádali hostiny a obřady na počest svých předků.</p>
<p>Podzimní Dědy byly jedním z významných slovanských svátků uctívajících zemřelé předky. Na rozdíl od Dušiček, které se týkaly individuálního vzpomínání na konkrétní zesnulé, Dědy byly více kolektivním uctěním všech předků rodu. 
    Věřilo se, že během tohoto období se duše předků vracejí, aby se podělily o sklizenou úrodu a požehnaly svým potomkům.</p>
<p>Tento svátek zdůrazňoval kontinuitu rodu a důležitost předávání tradic z generace na generaci. Připravovaly se zvláštní pokrmy, které měli rádi zemřelí předci, a konaly se hostiny, při kterých se vyprávěly příběhy o předcích a jejich činech. Kult předků byl u Slovanů velmi silný a představoval jeden ze základních pilířů jejich náboženského systému.</p>
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
         </li>
                <li id="zdroj-peruni-demy" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>PERUNI</strong> - 
                    <a href="https://peruni.estranky.sk/clanky/svet-slovanskych-bohu-a-demonu.html" target="_blank" style="color: #1e3a8a; text-decoration: none;" onmouseover="this.style.textDecoration='underline'" onmouseout="this.style.textDecoration='none'">
                        Svět slovanských bohů a démonů
                    </a>
                </li>
                <li id="zdroj-wikipedia-dozinky" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Wikipedie</strong> - 
                    <a href="https://cs.wikipedia.org/wiki/Dožínky" target="_blank" style="color: #1e3a8a; text-decoration: none;" onmouseover="this.style.textDecoration='underline'" onmouseout="this.style.textDecoration='none'">
                        Dožínky
                    </a>
                </li>
                </li>
                    </a>
                </li>
                <li id="zdroj-rodna-vira-mokos" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Rodná víra z.s.</strong> - 
                    <a href="https://rodnavira.cz/slovane/bohove/mokos/" target="_blank" style="color: #1e3a8a; text-decoration: none;" onmouseover="this.style.textDecoration='underline'" onmouseout="this.style.textDecoration='none'">
                        Mokoš
                    </a>
                </li>
                <li id="zdroj-wikipedia-dusicky" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Wikipedie</strong> - 
                    <a href="https://cs.wikipedia.org/wiki/Dušičky" target="_blank" style="color: #1e3a8a; text-decoration: none;" onmouseover="this.style.textDecoration='underline'" onmouseout="this.style.textDecoration='none'">
                        Dušičky
                    </a>
                </li>
                <li id="zdroj-prima-living" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Prima Living</strong> - 
                    <a href="https://living.iprima.cz/co-delali-na-dusicky-nasi-predci-zdobili-hroby-vyrezavali-repu-nebo-pekli-kosti-191403" target="_blank" style="color: #1e3a8a; text-decoration: none;" onmouseover="this.style.textDecoration='underline'" onmouseout="this.style.textDecoration='none'">
                        Dušičky našich předků. Lidové tradice, zvyky a pověry
                    </a>
                </li>
                <li id="zdroj-slovansky-kruh" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Slovanský kruh</strong> - 
                    <a href="http://www.slovanskykruh.cz/2017/03/hody-podzimni-rovnodennost/" target="_blank" style="color: #1e3a8a; text-decoration: none;" onmouseover="this.style.textDecoration='underline'" onmouseout="this.style.textDecoration='none'">
                        Hody / Podzimní rovnodennost
                    </a>
                </li>
                <li id="zdroj-slovansky-kruh" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Kouzla z nití</strong> - 
                    <a href="https://www.kouzlazniti.cz/l/kolo-roku-proc-a-jak-ozivaji-stare-pohanske-svatky-a-tradice/" target="_blank" style="color: #1e3a8a; text-decoration: none;" onmouseover="this.style.textDecoration='underline'" onmouseout="this.style.textDecoration='none'">
                        Kolo roku - proč a jak ožívají staré pohanské svátky a tradice
                    </a>
                </li>
                 <li id="zdroj-slovansky-kruh" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Kolovrat</strong> - 
                    <a href="https://kolovrat.pohanskaspolecnost.cz/kolo-roku-slovane/" target="_blank" style="color: #1e3a8a; text-decoration: none;" onmouseover="this.style.textDecoration='underline'" onmouseout="this.style.textDecoration='none'">
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