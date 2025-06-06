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
        <h1>Pohanské tradice dnes<h1>
      </header>
      <section>
      <p>
Mnoho pohanských zvyků a rituálů, které praktikovali naši slovanští předci, se dochovalo až do dnešních dnů v podobě lidových tradic a svátků. Tyto obyčeje odrážejí hluboký vztah k přírodě, jejím cyklům a posvátnému koloběhu života. Často se prolínají s křesťanskými svátky nebo přetrvaly jako folklórní oslavy a rituály, které dodnes oživují vesnice i města.
</p>

<h2>Vynášení Morany (Smrti)</h2>
<p>
Tradiční obřad známý jako "vynášení smrti" se koná na konci zimy, nejčastěji v březnu. Lidé vyrobí figurínu Morany  - zosobnění zimy, smrti a neplodnosti  - a slavnostně ji nesou k řece nebo potoku, kde ji utopí či spálí. Tento rituál symbolizuje konec zimy a přivítání jara, návrat života a plodnosti.
</p>
<img  src="images/VynášeníMorany.jpeg" class="img1" alt="Obrázek: Vynášení Morany">


<h2> Noc čarodějnic (Filipojakubská noc)</h2>
<p>
Slavená v noci z 30. dubna na 1. května, tato tradice má původ v pohanských oslavách jara a ochranných rituálech. Lidé věřili, že v tuto noc mají zlé síly  - zejména čarodějnice  - zvláštní moc. Zapalovaly se proto ohně na kopcích a lidé skákali přes plameny, aby se očistili a zajistili si zdraví.
</p>
<img  src="images/UpalováníČarodejnic.jpg" class="img1" alt="Obrázek: Upalování čarodejnic">

<h2>Vánoční zvyky s pohanskými kořeny</h2>
<p>
Mnoho vánočních obyčejů má předkřesťanský původ. Zimní slunovrat byl dříve oslavován jako návrat slunce a světla. Zvyky jako krájení jablka, házení střevícem nebo věštění budoucnosti pomocí ořechových skořápek pocházejí z dávných rituálů spojených s obnovou života a předpovědí osudu.
</p>
<img  src="images/VanocniTradPohan.jpeg" class="img1" alt="Obrázek: Vánoční tradice pocházející z pohanství">


<h2>Velikonoční tradice</h2>
<p>
Velikonoce jako svátek jara a obnovy mají jasné pohanské kořeny. Předkřesťanské oslavy byly zaměřeny na návrat plodnosti, života a síly přírody. Zvyky jako pletení pomlázky nebo velikonoční koledování pocházejí z rituálů na podporu zdraví, síly a úrody.
</p>
<img  src="images/Velikonoce.jpg" class="img1" alt="Obrázek: Velikonoce">

<h2>Další dochované zvyky s pohanskými kořeny</h2>
<ul>
  <li><strong>Dožínky:</strong> Oslavy konce sklizně s děkovnými obřady a hostinami.</li>
  <li><strong>Letní slunovrat:</strong> Oslavy slunce a plodnosti  - dnes často spojené s hudebními festivaly a ohňovými rituály.</li>
  <li><strong>Dušičky:</strong> Památka zesnulých má původ v pohanském uctívání předků  - světla a jídlo pro duše mrtvých.</li>
</ul>

<p>
Tyto tradice jsou důkazem síly kulturní paměti a připomínkou toho, že staré zvyky mohou přežít staletí  - proměněné, ale stále živé. Uchovávají v sobě respekt k přírodě, cyklu života a komunitnímu duchu.
</p>

      </section>
        </div>
        </div>
    </main>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>