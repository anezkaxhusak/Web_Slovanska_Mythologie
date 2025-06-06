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
        <h1>Domácí démoni<h1>
      </header>
      <section>
        <p>Domácí démoni byli uctíváni po celém Slovany osídleném území,v jiných oblastech však byli popisování i pojmenování jinak. V zásadě šlo o vzývání předků a také žádosti o ochranu hospodáře, jeho rodiny a majetku. </p>
        <p>Domácím duchům se obvykle stavěly malé rodinné oltáře, na nichž byly umístěné sošky, jež představovaly konkrétního ochránce domu nebo některého z předků.
            Na tento oltář byly přinášeny obětiny, zejména misky s mlékem nebo kaší, případně kousky chleba.</p>
        <p>Pokud se duchům a démonům domova neprojevovala patřičná úcta, mohla se bytost, která původně dům a hospodářství ochraňovala, rozzlobit a začít škodit. Rozhněvaného ducha či předka pak bylo nutno si usmířit obětí. 
            Také se mohlo stát, že domácí ochránce podlehl při ochraně domova cizímu ochránci jiného hospodářství. Vítěz pak poražené rodině škodil. Takového škůdce je pak třeba vyhnat pomocí magického rituálu.</p>
            <h2> Did a Baba </h2>
            <p>Did a Baba jsou duchové našich nejsilnějších předků, sedí na ramenou každého člověka a chrání ho. Je možné je požádat o radu a o pomoc. </p>
            <p>Zjevují se většinou ve své lidské podobě buď jako tvář ozářená jasným světlem, nebo jako celé postava.</p>

            <h2>Stopjan nebo Stopjanka </h2>
            <p>Duch konkrétního předka, jenž se zjevuje svému potomkovi, pokud je žádán o radu a pomoc. Zjevují se buď jako tvář v zářícím světle, nebo jako celá postava.</p>

            <h2>Domovník a Kikimora</h2>
            <p>Jsou to duchové domu a hospodářství. Chrání dům, ve které se usadili, ale jen v tehdy, pokud se o ně pán domu dobře stará. Domovník má podobu malého chlupatého skřítka, nebo kocoura. Kikimora se lidem zjevuje jako kuřátko nebo slepice, občas také jako malá postavička na kuřecích nožkách.</p>
            <img src="images/Domovník.jpg" class="img1" alt="Obrázek: Domovník">
            <img src="images/Kikimora.jpg" class="img1" alt="Obrázek: Kikimora">
            <h2>Korgoruše</h2>
            <p>Pomocnice Domovníka, zjevující se v kočičí podobě.</p>
            <img  src="images/Korguše.jpg" class="img1" alt="Obrázek: Korguše">
            <h2>Hadovik</h2>
            <p>Hadovikk je také pomocník Domovníka. Jeho úkolem je přinášet rodině blahobyt. Sídlí pod prahem nebo pod pecí v podobě hada.</p>

            <h2>Chlévník</h2>
                <p>Chlévník je bytost podobná Domovníkovi nebo Kikimoře, jen s tím rozdílem že obývá stáje a chlévy. Pokud je o Chlévníka dobře postaráno, chrání statek a odhání od něj čarodějnice či jiné démony, kteří by chtěli hospodářství ublížit.</p>

            <h2>Humník</h2>
            <p>Humník je také duch který hlídá hospodářství a hospodáře, jenž se o něj stará. Humník se usazuje v sýpkách a sklepech, hlídá je a chrání.</p>

            <h2>Baník</h2>
                <p>Duch masáží a léčení, který hlídá teplé koupele a sauny. Vzhledem se podobá Domovníkovi, ale není tak chlupatý. Občas se proměňuje i v Salamandra.</p>

            <h2>Šotek</h2>
            <p>Malý skřítek, vypadá jako chlapec s drápy na rukou i na nohou. Jeho úkolem je chránit stáda vyhnaná na pastvu. Občas lidem vyvádí různé neplechy.</p>
            <img  src="images/Šotek.jpg" class="img1" alt="Obrázek: Šotek">
            <h2>Pikulík a Vincúrik</h2>
            <p>Bytosti malé jako palec s podobnými vlastnosti jako Šotek.</p>

            <h2>Človíčkové nebo Krasavečci.</h2>
            <p>Jsou to malinké chlupaté bytosti s velkýma ušima, trošku se podobají lidem.Žijí v lesích a na loukách. Některé rodiny človíčků se rády spojují s určitou lidskou rodinou, které potom pomáhají na polích i v lesích a přinášejí jí blahobyt a štěstí.</p>

      </section>
        </div>
        </div>
        </main>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>