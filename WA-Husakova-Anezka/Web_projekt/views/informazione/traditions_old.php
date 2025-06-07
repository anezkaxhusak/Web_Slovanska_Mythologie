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
        <h1>Starodobé tradice<h1>
      </header>
      <section>
      <p>
Slovanské pohanství, známé také jako rodnověří nebo rodná víra, představuje prastarý duchovní a náboženský systém, který úzce souvisel s rytmy přírody, koloběhem života a smrtí a uctíváním přírodních sil. 
Pro staré Slovany byl svět živý a posvátný - řeky, lesy, nebe, bouře i slunce byly vnímány jako projevy silných božstev, které bylo třeba ctít, usmiřovat a žádat o přízeň. 
Každý přírodní úkaz měl svůj hluboký význam a byl spojen s konkrétními rituály.
</p>

<p>
Slované věřili v mnoho bohů a duchů, z nichž každý měl svůj okruh působnosti. 
Například Perun vládl hromům a válce, Veles byl bohem podsvětí, dobytka a magie, Jarilo přinášel jaro a plodnost, Mokoš byla ochránkyní žen a domácnosti, Dažbog zosobňoval životodárné slunce. 
Tito bohové nebyli vzdálení a abstraktní - byli součástí každodenního života, přítomní v dešti, úrodě, bouři i zdraví dětí. 
</p>

<p>
Koloběh roku tvořil základ pro duchovní i praktický život. Slované slavili přirozené přechody mezi obdobími: zimní a letní slunovrat, jarní a podzimní rovnodennost, začátek jara, sklizeň, první mráz nebo přílet ptáků. 
Každý svátek měl svůj specifický význam, způsob oslav a rituální úkony - od rozdělávání posvátných ohňů a obětování darů bohům, přes věštby a tance, až po očistné koupele nebo společné hostiny.
</p>

<p>
Velkou roli hrála také úcta k předkům a duchům přírody - tzv. domácím duchům, rusalám, lesním mužíkům a jiným bytostem, které bylo třeba udržet v rovnováze a neznepokojovat. 
Kultura starých Slovanů byla silně založena na cyklickém pojetí času, v němž smrt nebyla konec, ale přirozená součást přeměny a návratu k životu.
</p>

<p>
I když byla původní víra Slovanů po přijetí křesťanství postupně vytlačována, mnoho pohanských prvků přežilo ve folkloru, lidových zvycích a svátcích, které známe dodnes - ať už v podobě velikonočních obyčejů, dožínkových slavností nebo vánočního koledování.
 Dnes se tyto tradice oživují nejen v rámci novopohanských směrů, ale i jako součást kulturního a duchovního dědictví, které nám připomíná propojení člověka s přírodou, úctu k Zemi a koloběh života.
</p>
<img  src="images/KoupalaTrad.jpg" class="img1" alt="Obrázek: Koupala - tradice">
<img  src="images/Podzimnirovnodennost.jpg" class="img1" alt="Obrázek: Oslava podzimní rovnodennosti">
<img  src="images/MokošPodzimSvátek.jpg" class="img1" alt="Obrázek: Mokošin podzimní svátek">

  <p>Jeden ze způsobů jak dnes můžeme rozdělit staré slovanské tradice je podle ročních období : </p>
        <ul class="list-unstyled">
      <li>
      <a href="SpringTraditionOld.php" class="text-decoration-none">
      <strong>Jarní tradice</strong>
    </a>
    </li>
    <li>
      <a href="SummerTraditionOld.php" class="text-decoration-none">
      <strong>Letní tradice</strong>
    </a>
    </li>
    <li>
      <a href="FallTraditionOld.php" class="text-decoration-none">
      <strong>Podzimní tradice</strong>
    </a>
    </li>
    <li>
      <a href="WinterTraditionOld.php" class="text-decoration-none">
      <strong>Zimní tradice</strong>
    </a> 
     </li>
</ul>
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
                    <li id="zdroj-slovansky-kruh" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Slovanský kruh</strong> - 
                    <a href="http://www.slovanskykruh.cz/2017/03/kolovrat-aneb-slovanske-slavnosti-v-prubehu-roku/" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                       onmouseover="this.style.textDecoration='underline'"
                       onmouseout="this.style.textDecoration='none'">
                        Kolovrat aneb Slovanské slavnosti v průběhu roku
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
