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
        
       
      </ul>
    </li>
    </nav>

    <main class="article">
      <header class="pt-3 pb-3">
        <h1>Zimní tradice<h1>
      </header>
      <section>
      

<h2>Příchod zimy</h2>
<p>Oslava příchodu zimy byla u starých Slovanů spojena nejen s přípravami na chladné období, ale také s hlubokými duchovními rituály. 
    Lidé se scházeli u ohňů, zpívali písně a připravovali zásoby na zimu. Toto období představovalo čas setkání pozemského světa s podsvětím, kdy se podle slovanských představ stírala hranice mezi světem živých a mrtvých, mezi lidi tak přicházeli jak blahovolní předkové, tak zlovolní mrtví.</p>
<p>Zimu personifikovala bohyně Morana (též Morena), božstva smrti, která vládne v zimě. Její příchod znamenal nejen fyzickou změnu ročního období, ale také duchovní přechod, kdy síly temnoty dosahují vrcholu své moci. 
    Slované věřili, že během nejdelších nocí roku se otevírají brány mezi světy a duše zemřelých mohou navštívit své potomky.</p>
<p>Během příprav na zimu probíhaly důležité obřady na ochranu před zlými silami. Celé období svátků bylo v prvé řadě zasvěceno Velesovi a duším předků. Lidé vykonávali očistné rituály, zapalovali ochranné ohně a připravovali talismany, které měly chránit domácnost po celou zimu. Zvláštní pozornost byla věnována poslednímu výhonu dobytka před zimním ustájením, což bylo spojeno se svátky pastýřů.</p>
<img  src="images/Zimnírovnodennost.jpg" class="img1" alt="Obrázek: Zimní oslava">

<h2>Kračún</h2>
<p>Kračun či Hody je slovanský svátek zimního slunovratu. Tento nejvýznamnější zimní svátek se slavil v době nejdelší noci roku, kdy za třeskutých mrazů obrazně končí život skomírajícího slunce a tím i celý roční koloběh. Hned na druhý den se však sluneční božstvo zrodí nanovo a věčné Svarogovo kolo se začíná točit opět kupředu.</p>
<p>Označení Kračun pochází od slova kráčeti, neboť dny se začínají prodlužovat, "kráčet". Svátek měl pro Slovany zásadní význam, protože zimní slunovrat byl Slovany považován za počátek nového roku. Podle tradice došlo ke zrození slunečního božstva při ranním svítání dne 25. prosince.</p>
<p>Během Kračunu se konaly složité rituály zaměřené na podporu znovuzrozeného slunce. Nejvýznamnějším prvkem oslav zimního slunovratu byl OHEŇ. Symbolizoval život, dával světlo, teplo a ochranu. Ohně se zapalovaly při západu slunce a musely hořet celou noc. Slované věřili, že do sebe tento oheň vstřebává poslední zbytek Dažbogovy síly a udrží ji po celou noc. Proto se u ohně bdělo až do rána, aby nevyhasl.</p>
<p>Ještě před setměním hospodyně přichystala slavnostně prostřený stůl, na němž nechyběl česnek, chléb, sůl, sláma, červená jablíčka, ořechy, ale také množství pokrmů, jejichž přítomnost měla zaručit blahobyt celému hospodářství. Každý z těchto pokrmů měl symbolický význam - jablko jako symbol zdraví, ořechy značící hojnost, česnek na ochranu před zlými duchy nebo pečivo - kulatý chléb nebo oplatka symbolizující právě oslavované Slunce.</p>

<img  src="images/Kračún.webp" class="img1" alt="Obrázek: Kračún">
<img  src="images/Kračún1.jpg" class="img1" alt="Obrázek: Kračún">
<h2>Koleda</h2>
<p>Koledování či koleda je v lidové kultuře obřadní obchůzka spojená s různými zvyky jako je vybírání darů, zpěv nebo věštění. Tento zvyk byl spojen s obřadními obchůzkami s figurou dítěte symbolizující nejspíše nové slunce za doprovodu písní, říkadel a proseb o obdarování, štědrost při koledě měla zajistit bohatství v příštím roce.</p>
<p>Koleda byla někdy personifikována, v Rusku se za ni do bílého převlékala dívka, v Bělorusku byly tyto dívky dvě, jedna představovala Koledu bohatou, druhá chudou, podle toho kterou z nich si hospodář náhodně vybral se věštilo, jaký ho čeká rok.</p>
<p>Koledovalo se od zimního slunovratu až do přísluní, tedy křesťanské tradice Tří králů. Smyslem koledy bylo zahnat démony a ochránit před nimi ostatní lidi. Mladíci museli několik dní před koledou dokonce dodržovat i sexuální půst. Od hospodyně za to dostávali jídlo, pití, ale i peníze.</p>
<img  src="images/Koleda.webp" class="img1" alt="Obrázek: Koleda">
<h2>Ovseň - Rituál plodnosti</h2>
<p>Dalším typickým zvykem je ovseň, useň, avseň či govseň spočívající v obsypávání lidí zrním. Jedná se nejspíše o projev agrární magie, který měl zajistit bohatou úrodu. Tento rituál patřil mezi nejdůležitější zimní obřady, protože symbolicky zajišťoval prosperitu pro následující rok.</p>
<p>Tento obyčej byl také personifikován jako bytost jedoucí na šedé svini, spojení zimního slunovratu se prasetem lze nalézt i v představě zlatého prasátka a pořádání vepřových hodů. K těm nejvýznamnějším dějstvím patřilo zejména obsypávání hospodáře a jeho rodiny zrny, čili „Ovseň", během ruské novoroční kolední obchůzky.</p>

<h2>Zimní Velesovy svátky</h2>
<p>Období po zimním slunovratu bylo zcela zasvěceno bohu Velesovi. Celé období svátků bylo v prvé řadě zasvěceno Velesovi a duším předků, určité obřady se však konaly i na počest dalších božstev. Tyto svátky představovaly čas, kdy se světy přiblížily k sobě nejvíce během celého roku.</p>
<p>Po zrození nového slunce za svítání následuje dvanáct dní označovaných jako nečisté. Během této doby se věřilo, že hranice mezi světy jsou nejslabší a různé nadpřirozené bytosti mohou volně putovat mezi lidmi. Bylo zvykem prostírat u večeře i pro zesnulé příbuzné, u kterých se čekalo, že přijdou rodinu navštívit, nebo vystavit za oknem zapálenou svíčku, často ve vyřezané řepě, která měla bloudícím duším mrtvých posvítit na jejich cestu.</p>
<p></p>
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
        <strong>Kolovrat</strong> - 
                    <a href="https://kolovrat.pohanskaspolecnost.cz/kolo-roku-slovane/" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                       onmouseover="this.style.textDecoration='underline'"
                       onmouseout="this.style.textDecoration='none'">
                        Výroční slavnosti starých slovanů
                    </a>
        </li>
        <li id="zdroj-peruni" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>PERUNI</strong> - 
                    <a href="https://peruni.estranky.sk/clanky/svet-slovanskych-bohu-a-demonu.html" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                       onmouseover="this.style.textDecoration='underline'"
                       onmouseout="this.style.textDecoration='none'">
                        Svet slovanských bohů a démonov
                    </a>
                </li>
                <li id="zdroj-wikipedia-kracun" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Wikipedie</strong> - 
                    <a href="https://cs.wikipedia.org/wiki/Kra%C4%8Dun" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                       onmouseover="this.style.textDecoration='underline'"
                       onmouseout="this.style.textDecoration='none'">
                        Kračun
                    </a>
                </li>
                <li id="zdroj-kolovrat" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Kolovrat</strong> - 
                    <a href="https://kolovrat.pohanskaspolecnost.cz/kolo-roku-slovane/" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                       onmouseover="this.style.textDecoration='underline'"
                       onmouseout="this.style.textDecoration='none'">
                        Kolo roku: Slované
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
                <li id="zdroj-rodna-vira-veles" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Rodná víra z.s.</strong> - 
                    <a href="https://rodnavira.cz/slovane/bohove/veles/" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                       onmouseover="this.style.textDecoration='underline'"
                       onmouseout="this.style.textDecoration='none'">
                        Veles
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
                <li id="zdroj-nas-region" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Náš REGION</strong> - 
                    <a href="https://nasregion.cz/kracun-vanocni-zvyky-starych-slovanu-slavime-dodnes-a-ani-to-nevime-197186/" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                       onmouseover="this.style.textDecoration='underline'"
                       onmouseout="this.style.textDecoration='none'">
                        Kračun. Vánoční zvyky starých Slovanů slavíme dodnes a ani to nevíme
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