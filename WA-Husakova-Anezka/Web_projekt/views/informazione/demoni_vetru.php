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
                <button type="button" class="btn btn-outline-light"><a class="nav-link" href="../../traditions/tradition_create.php">Přidat tradici</a></button>
                <button type="button" class="btn btn-outline-light"><a class="nav-link" href="../../controllers/traditions_list.php">Výpis tradicí</a></button>
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
        <h1>Démoni větru<h1>
      </header>
      <section>
        <p>Úcta k démonům větru, i k jiným úkazům na obloze je obecně velmi rozšířená nejen u slovanských kmenů, ale doslova po celém světě a sahá až do nejstarších dob. Některé tyto představy jsou zachyceny v lidové kultuře.</p>
        <p>Větrní démoni jsou sice divocí, ale nelze říci, že by byli doslova zlí. Dokonce se stává, že někdy napraví škodu, co způsobili. Přízeň větrných démonů se dá získat obětováním kousků chleba, které se položí za okno, nebo se vhodí mouka do větru. 
        Lidé se odjakživa proti hněvu větrů chrání různými rolničkami a zvonky, které zavěšují, aby ve větru cinkaly. </p>
        <p>Démoni větru mají ničivou sílu, ale mohou také nahlédnout do všech koutů všehomíru, čímž získávají velikou moudrost, a proto umí dobře poradit. Také dokážou vyčistit vzduch od nemocí, a dokonce i probudit milostnou touhu.</p>
        <h2>Baba Jaga</h2>
        <p>Baba Jaga je výrazně záporná vzdušná bytost, Je to ztělesněná bouřka v podobě zlé stařeny, která  létá na koštěti. Jaga je však také schopná Čarodějnice, která žije hluboko v lese, kde má dům na kuří noze. Plot okolo jejího domu je z lidských kostí, živí se totiž lidským masem a dušemi lidi. Ztělesňuje rozpoutané živly, které člověku přinášejí zkázu</p>
        <img  src="images/BabaYaga.webp" class="img1" alt="Obrázek: Baba Jaga">
        
        <img  src="images/BabaJaga.jpg" class="img1" alt="Obrázek: Baba Jaga">


        
        <h2>Vichr</h2>
        <p>Vich má démonický charakter a projevuje se ničivou silou.</p>
        <h2>Větrnice</h2>
        <p>Matka všech démonů větru. Stala se manželkou boha Striboga poté, co ji Stribog zachránil před Nijem - Skyprem Zlým. Zjevuje se jako krásná paní v bílých šatech věncem uvitým z bílých květů na hlavě.</p>
        <h2>Smršť</h2>
        <p>Nejmocnější a nejstarší syn Striboga a Větrnice. Přichází ze severu a přináší zimu a chlad. Zahalený do modrého pláště přijíždí na koni bílém jako sníh.</p>
        <h2>Vítr </h2>
        <p>Druhý syn Striboga a Větrnice. Přichází ze západu a přináší déšť. Také jezdí na bílém koni, ale plášť má zelený.</p>
        <h2>Větřík</h2>
        <p>Také zvaný oblačník, je třetím synem Striboga a Větrnice. Svěřena je mu jižní světová strana, jeho poryvy proto přinášejí teplo. Jako jeho bratři i on se zjevuje na bílém koni, ale v červeném plášti. Jeho úkolem je také pást oblaka na obloze.</p>
        <h2>Vánek</h2>
        <p>Nejmladší syn Větrnice a Striboga. Je to duch jemného větru, který přichází z východu. Jezdí také na bílém koni a zdobí jej žlutý plášť.</p>
        <h2>Oblačnice </h2>
        <p>Čtyři dcery Striboga a Větrnice. Jmenují se: Burja, oblačnice východu; Vjuga, oblačnice jihu; Jaga, oblačnice západu, a Metelice, oblačnice severu, která přináší sníh a chlad. Oblačnice na rozdíl od svých překrásných nevlastnich sester Vesny a Oseni nebyly obdařeny velkou krásou, ale zato se staly velkými čarodějkami.</p>
        <h2>Meluzína a Mráz</h2>
        <p>Dvojčata Vichru. Meluzína se projevuje hvízdavým mrazivým větrem. Mráz je studený vítr, který svým dechem vše promění v led.</p>
        <img  src="images/Meluzína2.jpg" class="img1" alt="Obrázek: Meluzína">
        <img  src="images/Meluzína.jpg" class="img1" alt="Obrázek: Meluzína">
        



      </section>
        </div>
        </div>
        </main>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>