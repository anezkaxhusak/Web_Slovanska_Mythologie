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
           <h1>Novodobé tradice<h1>
          </header>
          <section>
            <p>Ve 21. století se stále více lidí obrací zpět k vlastnímu kulturnímu kořeni. Hledají něco, co není povrchní, co má hloubku a spojení s krajinou, jazykem a minulostí. Právě v tomto prostoru se rodí nové slovanské tradice - inspirované minulostí, ale formované současností.</p>
        <p>Nejde o kopírování starého. Jde o hledání nové formy, která dává smysl dnešnímu člověku. Lidé znovu objevují symboliku přírodních cyklů, význam obřadů, kolektivních prožitků, hudby a řemesla. Někteří se vracejí k obřadům podle slunečního kalendáře, jiní vytvářejí nové oslavy propojující staré motivy s moderním životním stylem.</p>
       <p> Tyto nové tradice nemají jednotnou formu. Vznikají spontánně - na festivalech, v komunitách, v krajině. A přestože jsou novodobé, mají společného ducha s těmi původními: úctu k zemi, rytmu života a lidskému společenství.</p>
       <p>Tradice a svátky, které do dnes slovanské národy slaví se dají rozdělit do několika kategorií: </p>
        <ul class="list-unstyled">
      <li>
      <a href="OldTradToday.php" class="text-decoration-none">
      <strong>Tradice převzaté z pohanství</strong>
    </a>, které nějakou formou přežily do dnes,
    </li>
    <img  src="images/KoupalaTrad.jpg" class="img1" alt="Obrázek: Koupala - tradice">
    <li>
      <a href="ChristianTrad.php" class="text-decoration-none">
      <strong>Tradice převzaté z křesťanství</strong>
    </a>, které stále slavíme, přestože počet křesťanů - obzvlášť na území České Republiky - klesá, a
    </li>
    <img  src="images/MikulášLepší.jpg" class="img1" alt="Obrázek: Mikuláš">
    <li>
      <a href="ModernUnrelated.php" class="text-decoration-none">
      <strong>Moderní tradice</strong>
    </a>, které dnes dodržujeme, ale nemají původ v žádném náboženství.
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
             </ul>
            </div>
            </div>
            </div>
        </main>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
