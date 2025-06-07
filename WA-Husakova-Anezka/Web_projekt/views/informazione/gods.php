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
        <h1>Slovanští bohové<h1>
      </header>
      <section>
        <p>Slovanské pojetí božství bylo úzce spjato s přírodou a řádem světa. Nebylo to oddělené nebe, ale krajina, v níž člověk žil, jako pole, les, řeka, déšť. 
          Božské bylo obsaženo v samotném pohybu ročních období, v pravidelném střídání světla a tmy, v neviditelných vazbách mezi člověkem a krajinou. 
          Bohové nebyli vzdálení vládci, ale přítomné síly, které bylo možné cítit a někdy snad i zahlédnout v přechodových momentech - při svítání, při bouřce, při smrti. </p>
        <p>V různých slovanských regionech se tyto síly projevovaly pod odlišnými jmény a podobami, ale jejich smysl zůstával: chránit, řídit, připomínat, že člověk je jen jednou částí širšího řádu. 
          Bohové Slovanů nebyli striktně dobří nebo zlí. Byli mocní, proměnliví, někdy ochraňující, jindy ničiví. A především - vyžadovali respekt. Ne formální poslušnost, ale hluboké vědomí hranic.</p>
          Bohové nebyli jen nadpřirozené bytosti - byli součástí každodenního života. V jejich jménu se sázelo, sklízelo, bojovalo i smířovalo. Neexistoval ostrý předěl mezi duchovním a světským. 
          Obřady, obětiny, slova i ticho měly svou váhu. A když člověk zapomněl, co je důležité, božská rovnováha to dříve či později připomněla - skrze neúrodu, nemoc, nehodu, nebo tichý vnitřní neklid, který nešlo zahnat.</p>
        <p>Zajímavé je, že na rozdíl od jiných civilizací se slovanské mýty dochovaly jen útržkovitě. Psaná tradice přišla pozdě, často už pod vlivem křesťanství. O to víc prostoru ale zůstalo pro fantazii, pro hledání. 
        <p>Každá legenda, každý kus vyšívaného ornamentu, každé slovo s kořenem sahajícím do dávných časů může být klíčem k pochopení toho, jak staří Slované vnímali svět.</p>
        <p>A právě tato neúplnost je možná tím, co činí slovanské bohy tak fascinujícími. Nejsou uzavřeným panteonem s přesným seznamem a životopisem. Jsou spíše krajinou, do které lze vstoupit. Někdy mlhavou, někdy drsnou, ale vždy živou.</p>

        <p> Kdo byli bohové starých Slovanů? </p>
        <img src="images/SlovMyth.jpg" class="img1" alt="Obrázek: Slovanská mytologie">
        
        <p>Slovanské bohy je možné rozdělit do dvou období: </p>
        <ul class="list-unstyled">
      <li>
      <a href="BigGods.php" class="text-decoration-none">
      <strong>První éra : Prabohové</strong>
    </a>
    </li>
    <li>
      <a href="SmallerGods.php" class="text-decoration-none">
      <strong>Druhá éra : Mladší bohové</strong>
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
                <li id="zdroj-wikipedia-seznam" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Wikipedie</strong> - 
                    <a href="https://cs.wikipedia.org/wiki/Seznam_slovanských_bohů" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                       onmouseover="this.style.textDecoration='underline'"
                       onmouseout="this.style.textDecoration='none'">
                        Seznam slovanských bohů
                    </a>
                </li>
                <li id="zdroj-e-stredovek" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>e-středověk.cz</strong> - 
                    <a href="https://www.e-stredovek.cz/post/slovanska-mytologie/" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                       onmouseover="this.style.textDecoration='underline'"
                       onmouseout="this.style.textDecoration='none'">
                        Slovanská mytologie
                    </a>
                </li>
                <li id="zdroj-nas-region-mytologie" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Náš REGION</strong> - 
                    <a href="https://nasregion.cz/anticka-mytologie-ta-slovanska-je-stejne-bohata-ale-temer-neznama-169942/" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                       onmouseover="this.style.textDecoration='underline'"
                       onmouseout="this.style.textDecoration='none'">
                        Antická mytologie? Ta slovanská je stejně bohatá, ale téměř neznámá
                    </a>
                        </li>
                <li style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Kudy kam</strong> - 
                    <a href="https://blog.veruce.cz/znate-bohy-svych-predku/" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                       onmouseover="this.style.textDecoration='underline'"
                       onmouseout="this.style.textDecoration='none'">
                        Znáte bohy svých předků?
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
