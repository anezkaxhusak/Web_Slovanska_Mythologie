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
        <h1>Démoni ohně<h1>
      </header>
      <section>
      <p>Stejně jako většina ostatních démonů i bytosti ohně se projevují jako hodní i jako zlí. Náklonnost bytostí ohně si je možné zabezpečit magickými oběťmi, obvykle vhazováním žertvy do plamenů posvátného ohně.</p>
        <p>Živý, tedy posvátný oheň se ve zvycích Slovanů zapaloval třením dřívek, případně křesadlem. Zvláštní úctě se těšil oheň v domácnostech. Hospodyně vždy musela před zažehnutím ohně pec vymést a pak oheň udržovat, aby nevyhasl. </p>
        <p>Démoni ohně přinášejí do domu blahobyt, ale také ho mohou zničit. Ve slovanské mytologii měl oheň zvláštní postavení - byl považován za posvátný element s očistnou a léčivou mocí, který chránil před démony. Po nástupu křesťanství se však bůh ohně Svarog změnil na démona a projevoval se v podobě ohnivých dráčků, hádků, salamandrů a dalších bytostí.</p>
        <p></p>
        <h2>Bludičky  </h2>
        <p>Podle slovanských pověstí jsou bludičky duše zemřelých násilnou smrtí, nekřtěňátek nebo jiných nešťastníků. Objevují se jako bludná světýlka, která se pohybují nad bažinami, hřbitovy či jinými místy spojenými se smrtí. Jejich záměry moč být různé - někdy chtějí pomoci zbloudilému poutníkovi, jindy ho však chtějí zavést do záhuby.</p>
        <p></p>
        <img  src="images/Bludičky.jpg" class="img1" alt="Obrázek: Bludičky">
        <h2>Zmok</h2>
        <p>Také zvaný Rarach. Přináší svému hospodáři na jedné straně štěstí, ale na stranu druhou se pak zmocní jeho duše. Rarach se zjevuje jako malý ohnivý mužíček, který se proměňuje v sokolovitého dravce raroha.</p>
        <h2>Plevník </h2>
        <p>Také Plivník, je téměř shodný s rarachem, ale na rozdíl od něj se neproměňuje ve zvířecí podoby. Manifestuje se především jako ohnivá koule nebo světlo, které se pohybuje vzduchem. V některých oblastech byl považován za méně nebezpečnou variantu zmoka, i když i on mohl způsobit škody, pokud se s ním člověk nedovedl správně zacházet.</p>
        <h2>Salamandr</h2>
        <p>Malý ohnivý dráček nebo had. Je to bytost stvořená magii, Mohou jej stvořit jak bohové, tak i lidští čarodějové. Salamandr přináší bohatství a blahobyt; na rozdíl od zmoků ho jeho tvůrce ovládá.</p>
        <img  src="images/Salamandr.webp" class="img1" alt="Obrázek: Salamandr">
        <h2>Ohnivý skřítek</h2>
        <p>Ztělesňuje oheň. Čím lépe je o takovou bytost postaráno, tím více roste a lépe chrání ohniště</p>
        <h2>Ohnivý muž (Dýma, Dýmač)</h2>
            <p>Odlišný typ démona ohně, známý také jako Dýma či Dýmač. Je to strašidlo lidského původu, vesměs duše hříšníka, která se nemůže dostat na onen svět. Na rozdíl od jiných démonů ohně má lidský původ a často se zjevuje jako ohnivá postava připomínající člověka.</p>
            <p>Ohnivý muž představuje temnou stránku démonů ohně. Vzniká z duší těch, kteří za života spáchali těžké hříchy nebo zemřeli v hněvu. Tyto duše jsou odsouzeny bloudit mezi světy a často se mstí živým. Na rozdíl od ostatních démonů ohně, kteří mohou být i prospěšní, je ohnivý muž téměř vždy nepřátelský a nebezpečný.</p>
        <h2>Pták Ohnivák</h2>
         <p>Velký planoucí pták s rudým a zlatým peřím pocházející z daleké země. Jeho pera, i když jsou vytrhnuta, stále jasně svítí. Tato bytost je spojena s bohem Simarglom z kyjevského panteonu knížete Vladimíra. Simargl byl původně převzat z íránského prostředí jako okřídlené stvoření s psí hlavou, které bylo ochráncem rostlin a zprostředkovatelem mezi světy. V slovanské adaptaci se stal protektorem ohňů a ohnišť.</p>
            <p>Podobně jako fénix se Pták Ohnivák dokáže zrodit ze svého vlastního popela, což symbolizuje věčný koloběh života a smrti, destruction and renewal spojený s ohněm. V lidových pohádkách se často objevuje jako zdroj zlatých jablek nebo jiných pokladů, ale získat ho vyžaduje velkou odvahu a chytrost.</p>
            
        <img  src="images/PtákOhnivák.jpg" class="img1" alt="Obrázek: Pták Ohnivák">
        <img  src="images/PtákOhnivák2.jpg" class="img1" alt="Obrázek: Pták Ohnivák">
        

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
                <li id="zdroj-peruni" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>PERUNI</strong> - 
                    <a href="https://peruni.estranky.sk/clanky/svet-slovanskych-bohu-a-demonu.html" target="_blank" style="color: #1e3a8a; text-decoration: none;" onmouseover="this.style.textDecoration='underline'" onmouseout="this.style.textDecoration='none'">
                        Svět slovanských bohů a démonů
                    </a>
                </li>
                <li id="zdroj-wikipedia-demoni" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Wikipedie</strong> - 
                    <a href="https://cs.wikipedia.org/wiki/Slovanští_démoni" target="_blank" style="color: #1e3a8a; text-decoration: none;" onmouseover="this.style.textDecoration='underline'" onmouseout="this.style.textDecoration='none'">
                        Slovanští démoni
                    </a>
                </li>
                <li id="zdroj-wikipedia-rarog" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Wikipedie</strong> - 
                    <a href="https://cs.wikipedia.org/wiki/Rarog" target="_blank" style="color: #1e3a8a; text-decoration: none;" onmouseover="this.style.textDecoration='underline'" onmouseout="this.style.textDecoration='none'">
                        Rarog
                    </a>
                </li>
                <li id="zdroj-wikipedia-simargl" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Wikipedia</strong> - 
                    <a href="https://en.wikipedia.org/wiki/Simargl" target="_blank" style="color: #1e3a8a; text-decoration: none;" onmouseover="this.style.textDecoration='underline'" onmouseout="this.style.textDecoration='none'">
                        Simargl
                    </a>
                </li>
                <li id="zdroj-wikipedia-ptak" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Wikipedie</strong> - 
                    <a href="https://cs.m.wikipedia.org/wiki/Pt%C3%A1k_Ohniv%C3%A1k" target="_blank" style="color: #1e3a8a; text-decoration: none;" onmouseover="this.style.textDecoration='underline'" onmouseout="this.style.textDecoration='none'">
                        Pták Ohnivák
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