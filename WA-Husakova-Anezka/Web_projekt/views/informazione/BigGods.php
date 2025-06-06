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
  <nav class="navbar navbar-expand-lg navbar-dark">

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
        <nav class="col-md-2 d-none d-md-block sidebar p-3">
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
        <h1>První éra: Slovanští prabohové a stvoření světa<h1>
      </header>
      <section>
        <p>V nejhlubším čase, kdy ještě neexistoval den ani noc, se zrodili první bohové - prabohové starých Slovanů. 
            Nebyli to bohové lidí, ale božstva světových principů, živlů, řádu i chaosu. Stvořili svět nejen silou, ale svou vlastní podstatou.    
            Z jejich dechu vznikl vítr, z jejich myšlenek slunce, z jejich střetů hrom a smrt. Tato první éra je érou nebeské tvořivosti, zemské plodnosti, hlubinné magie i kosmického napětí. 
            Bohové této doby nestojí jako sochy na podstavcích - jsou pohybem, protiklady, rytmem. Jejich síla nebyla uzavřená v legendách, ale přítomná v každodenním světě - ve slunci, dešti, bouři, snu, sklizni i smrti.
            Ačkoliv k nám jejich jména doléhala rozličně, ze stínů lidových písní a legend, zůstávají fascinujícím obrazem slovanského chápání světa jako živého, propojeného celku, kde každá bytost má své místo _ a každá síla své jméno.</p>
            <h2>Rod</h2>
        <p>Prabůh počátku, z něhož vzniklo vše. Není stvořitelem v lidském smyslu, ale silou zrození, principem života. Je přítomen v krvi, rodu, pokračování.</p>
        <img src="images/Rod.jpg" class="img1" alt="Obrázek: Rod">
        <h2>Lada</h2>
        <p>Bohyně harmonie, plodnosti a krásy. Ztělesňuje rovnováhu mezi protiklady, ženský princip ve své sjednocující podobě. Patronka míru a zrození.</p>
        <img src="images/Lada.jpg" class="img1" alt="Obrázek: Lada">
        <h2>Triglav / Bělbog</h2>
        <p>Trojjediný bůh představující minulost, přítomnost a budoucnost. Bělbog je jeho světlá podoba - síla dobra, světla a ochrany. Strážce osudu a spravedlnosti.</p>
        <img src="images/Triglav.jpg" class="img1" alt="Vyzobrazení Triglava">
        
        <h2>Černobog</h2>
        <p>Temný protějšek Bělboga. Ztělesnění noci, smůly, strachu a smrti. Ale není zlem - je nezbytným stínem ve světě protikladů.</p>
        <img src="images/Černobog2.jpg" class="img1" alt="Obrázek: Černobog">

        <h2>Svarog</h2>
        <p>Nebeský kovář, tvůrce světového řádu. Zrodil slunce, dal lidem oheň a naučil je pracovat. Symbol tvořivosti a zákona.</p>
        <img src="images/Svarog.jpg" class="img1" alt="Vyzobrazení Svarogaa">
        <h2>Perun</h2>
        <p>Bůh hromu, války a ochrany. Vládce blesků, strážce nebes a protivník chaosu. Jeho zbraně chrání svět před narušením řádu.</p>
        <img src="images/Perun1.webp" class="img1" alt="Vyzobrazení Peruna">
        <h2>Veles</h2>
        <p>Pán podsvětí, magie, zvířat a poezie. Jeho říše je temná, ale nezbytná. Věčný protivník Peruna, ztělesnění hluboké moudrosti a tajemství.</p>
        <img src="images/Veles.jpg" class="img1" alt="Veles">
        <h2>Mokoš</h2>
        <p>Velká bohyně země, vody, ženství a osudu. Strážkyně plodnosti, rození a ženské síly. Ochránkyně pracujících a tkadlen života.</p>
        <img src="images/Mokoš.jpg" class="img1" alt="Vyzobrazní Mokoše">
        <h2>Nij</h2>
        <p>Bůh hlubin, ticha a utopených duší. Tajemná postava světa mezi životem a smrtí, pán vodních přechodů a konců bez návratu.</p>
        <h2>Dažbog</h2>
        <p>Syn slunce, nositel světla a života. Dobrotivý bůh, dárce tepla, hojnosti a jasnosti. Předek lidí ve slovanské tradici.</p>
        <img src="images/Dažbog.jpg" class="img1" alt="Vyzobrazení Dažboga">
        <h2>Chors</h2>
        <p>Měsíční bůh, pán noci a tajemství. Mlčenlivý svědek snů, změn a skrytých cest. Doprovází člověka ve tmě a rozjímání.</p>
        <img src="images/Chors.jpg" class="img1" alt="Obrázek: Chors">
        <h2>Morana</h2>
        <p>Bohyně zimy, smrti a konce. Přichází s chladem a odchodem, ale není zlá - bez ní by nový život neměl kde začít.</p>
        <img src="images/Morana.png" class="img1" alt="Vyzobrazení Morany">
        <h2>Dij</h2>
        <p>Síla hněvu, běsů a neovladatelné vášně. Božstvo neklidu, nepředvídatelnosti a výbuchu. Připomíná, že v každém je skrytý oheň.</p>
        <h2>Živa</h2>
        <p>Bohyně života, jara a obnovy. Symbolizuje růst, sílu mládí, obrodu přírody i ducha. Je odpovědí na Moranu - světlo po tmě.</p>
        <h2>Stribog</h2>
        <p>Pán větrů, proudů a pohybu. Jeho dech rozhýbává listí, přináší změny a nese zprávy z daleka. Nepředvídatelný, mocný, volný.</p>
        <img src="images/Stribog.jpg" class="img1" alt="Obrázek: Stribog">
        <h2>Simargl</h2>
        <p>Okřídlený pes, strážce mezi světy. Ochránce ohně, rostlin a rodiny. Tajemné a ochranné božstvo na pomezí nebe a země.</p>
        <img src="images/Simargl.jpg" class="img1" alt="Obrázek: Simargl">

      </section>
        </div>
        </div>
        </main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>