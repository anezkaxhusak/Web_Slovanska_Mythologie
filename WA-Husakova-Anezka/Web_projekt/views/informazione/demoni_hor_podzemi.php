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
        <h1>Démoni hor a podzemí<h1>
      </header>
      <section>
      <p>Hory i podzemí byly odjakživa místem bohů. Hory představovali i element pevné hmoty a nedosažitelnost jejich vrcholu předznamenávala místo, kde se jde sekat s bohy nebo alespoň s duchy skal, jeskyní a hor. </p>
        <p>Oběti na posvátných místech byly určené bytostem, které přebývají ve stromech nebo kamenech, případně jsou s nimi nějak spojeny.</p>
        <p>Ani v případě výšek, nebo naopak velkých hlubin tomu není jinak. Ve slovanských horách a jeskyních můžeme potkat neskutečně mnoho horských duchů, skřítků i jiných bytostí, kteří chrání božská tajemství hor a podzemí. Snad každá hora má svého ducha, který často zlé trestá a statečné odměňuje.</p>
        <p></p>
        <p></p>
        <h2>Permoníci </h2>
        <p>Skřítkové podzemí a jeskyní. Vzhledem jsou velmi podobní lidem, ale jsou menší a zavalitější. Vynikají v kovářství a hornictví.</p>
        <p>Slovo permoník je odvozeno z německého Bergmännchen („důlní mužíček") a objevuje se v řadě variant: permon, perkmon, pergmon nebo perkmont. Permoníci mají velkou hlavu, krátké nohy a poměrně široký hrudník. Nosí hornické oblečení a v ruce mívají svítilnu.</p>
        <p>Pokud ho horník zahlédl, mohl očekávat nešťastnou událost nebo nalezení drahých kovů. Kdo slyšel tyto bytosti pracovat, měl štěstí. Pro dobré vztahy s permoníky bylo nutné dodržovat hornické zvyklosti a nosit jim oběti.</p>
        <img  src="images/Permoník.jpg" class="img1" alt="Obrázek: Permoník">
        <h2>Trpaslíci </h2>
        <p>Jsou vzrůstem vyšší než skřítkové. Chrání ložiska drahých kovů a starají se o ně.</p>
        <p>Ve slovanské mytologii splývají s permoníky a jinými malými bytostmi jako jsou ludkové známí u západních Slovanů.</p>
        <h2>Boruta </h2>
        <p>Jeskynní víly. Boruty pečují o všechny jeskyně. Rády v nich pořádají překrásné slavnosti pro všechny podzemní bytosti.</p>
        <p>Původně se jednalo o polskou mytologickou postavu - lesního démona podobného českému hejkalovi. Boruta byla také označována jako błotnik, tedy bahenní duch.</p>
        <img  src="images/Boruta.jpg" class="img1" alt="Obrázek: Boruta">
        <h2>Labus</h2>
        <p>Zlý skřítek, jenž láká lidi, a zejména děti, do podzemních hlubin, kde je nechá zabloudit až zahynout.Patří mezi nebezpečné bytosti podzemního světa, které se specializují na svádění nezkušených poutníků.</p>
        <h2>Krakonoš</h2>
        <p>Místní horský duch, vládce a ochránce Krkonoš. Krakonoš nebo též Rýbrcoul (německy Rübezahl, polsky Liczyrzepa) je bájný duch hor, který v různých podobách chrání celé Krkonoše před chamtivými hledači pokladů, pytláky a dalšími nenechavci.</p>
        <p>V lidových vyprávěních se objevuje přibližně už v 15. a 16. století. První vyobrazení Krakonoše pochází z Helwigovy mapy Slezska z roku 1561. V legendách je zobrazován jako vousatý, často zrzavý obr, stařec nebo mnich.</p>
        <p>Někdy je přísný a výhrůžný, jindy neškodný a vtipný. Bedlivě sleduje ty, kteří chtějí nekalými úmysly horám uškodit.</p>
        <img  src="images/Krakonoš.jpg" class="img1" alt="Obrázek: Krakonoš">
        <h2>Loktibrada</h2>
        <p>Syn Kovlada a Runy. Zdědil po svých rodičích moc nad podzemními poklady a rudnými žílami. Jeho jméno naznačuje spojení s kováním a zpracováním kovů, což odpovídá tradici hornictví v slovanské kultuře.</p>
        <h2>Bělič, Dimek a Laber</h2>
        <p>Konkrétní podzemní skřítci, kteří rádi prozrazují lidem, kde hledat rudonosné žíly, kde mohou najít bohatství nebo ukrytý poklad. Tito tři bratři představují laskavější stránku podzemních bytostí, které občas pomáhají poctivým horníkům a hledačům pokladů.</p>
        <h2>Górzoni</h2>
        <p>Horští duchové známí ve slovanské mytologii. Patří mezi zemské elementy reprezentující duchy hor, skal, jeskyní a kamenů. Byly jim věnovány obětní kameny s vyhloubeninkami, které měly podobu misek, lidských nohou, rukou, zvířecích stop či křížů. Voda z těchto jamek byla používána k léčení.</p>
        <h2>Asilkové (Osilkové)</h2>
        <p>Obrové skal a řek. Tito mocní duchové střeží horské průsmyky a skalní útvary. Jsou to bytosti obrovské síly, které dokážou přesouvat balvany a měnit tok horských potoků podle své vůle.</p>
        <h2>Psoň </h2>
        <p>Podobá se koni, ale je nižší. Tato bytost skřítkům slouží podobným způsobem, jako lidem slouží kůň. Psoň je věrným společníkem podzemních bytostí a pomáhá jim při dopravě po podzemních chodbách a jeskyních.</p>
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
        <li style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Wikipedie</strong> - 
                    <a href="https://cs.wikipedia.org/wiki/Permon%C3%ADk" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                       onmouseover="this.style.textDecoration='underline'"
                       onmouseout="this.style.textDecoration='none'">
                        Permoník
                    </a>
                </li>
                <li style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Wikipedie</strong> - 
                    <a href="https://cs.wikipedia.org/wiki/Krakono%C5%A1" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                       onmouseover="this.style.textDecoration='underline'"
                       onmouseout="this.style.textDecoration='none'">
                        Krakonoš
                    </a>
                </li>
                <li style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Wikipedie</strong> - 
                    <a href="https://cs.wikipedia.org/wiki/Slovansk%C3%A1_mytologie" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                       onmouseover="this.style.textDecoration='underline'"
                       onmouseout="this.style.textDecoration='none'">
                        Slovanská mytologie
                    </a>
                </li>
                <li style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>PERUNI - Svět slovanských bohů a démonů</strong> - 
                    <a href="https://peruni.estranky.sk/clanky/svet-slovanskych-bohu-a-demonu.html" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                       onmouseover="this.style.textDecoration='underline'"
                       onmouseout="this.style.textDecoration='none'">
                        Zemské elementy - horští duchové
                    </a>
                </li>
                <li style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Chi.cz - Slovanská mytologie</strong> - 
                    <a href="https://chi.cz/magie/slovanska-mytologie" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                       onmouseover="this.style.textDecoration='underline'"
                       onmouseout="this.style.textDecoration='none'">
                        Seznam postav slovanské mytologie
                    </a>
                </li>
                <li style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Emefka.sk</strong> - 
                    <a href="https://emefka.sk/morena-ci-demonicke-sudicky-10-dalsich-desivych-bytosti-zo-slovanskej-mytologie-2-cast/" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                       onmouseover="this.style.textDecoration='underline'"
                       onmouseout="this.style.textDecoration='none'">
                        Desivé bytosti zo slovanskej mytológie
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