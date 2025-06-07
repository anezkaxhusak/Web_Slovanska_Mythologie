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
        <h1>Démoni vody<h1>
      </header>
      <section>
      <p>Snad neexistuje jezero či potůček, který by neměl svého vodníka nebo vodní vílu. Slované měli vždy prameny, řeky, jezera i moře ve velké úctě a stejně tak i bytosti, jež v nich přebývají. </p>
        <p>Zvláštní úctě se těšily veletoky, napřiklad otec Dněpr a , matička" Volha nebo Dunaj či Visla. Bytosti, jež přebývají v pramenech, studánkách, potocích, řekách, jezerech a mořích, mají převážně ženskou podobu víl, samovíl, rusalek, mořských panen nebo vodních žínek. </p>
        <p>Lidem mohou jak škodit, tak i pomáhat. Aby si lidé vodní bytosti naklonili, přinášejí jim na břehy vodních toků obětiny: koláče, chléb, máslo, atd. </p>
        <h2>Vodní víly</h2>
        <p>Přebývají v pramenech, řekách a jezerech. Jedná se o krásné dívky s průsvitným tělem a s dlouhými zlatými či rusými vlasy, v kterých se nachází jejich životní síla. Krásně zpívají a tančí na místech, která lze poznat podle čarodějného kruhu z hub, jahod či trávy. Mohou se měnit ve zvířata, především labutě, koně, sokola či vlka.</p>
        <p>Slovanské víly jsou spojovány především s vodním živlem a objevují se nejvíce v jihoslovanském folklóru. U východních Slovanů jejich místo zaujímá rusalka, v českém prostředí se namísto o vílách zpravidla hovoří o vodních pannách, lesních žínkách a divoženkách.</p>
        <img  src="images/Vodnívíly.jpg" class="img1" alt="Obrázek: Vodní víly">
        
        <h2>Judy a Beregyně</h2>
        <p>Zlé temné bytosti, jež přebývají stejně jako víly pramenech, řekách a jezerech. Lidem škodí a patří mezi nejnebezpečnější vodní démony slovanského folklóru.</p>
        <p>Juda - představuje temnou stránku vodních víl a je obávaná pro svou schopnost topit lidi a způsobovat neštěstí u vodních toků. Na rozdíl od blahovolných víl, judy jsou vysloveně zlovolné a jejich jediným cílem je škodit lidem.</p>
        <p>Beregyně - další skupinou zlých vodních bytostí známých především z východoslovanského folklóru. Tyto démony jsou spojovány s břehy řek a jezer, kde číhají na oběti. Často se objevují společně s jinými vodními bytostmi a tvoří nebezpečné spojenectví proti lidem.</p>
        <img  src="images/JudyaBeregyně.jpeg" class="img1" alt="Obrázek: Judy a Beregyně">
        
        <h2>Rusalky</h2>
        <p>Víly, které se zrodily z duší předčasně zemřelých, utopených děvčat a také dívek, jež si samy vzaly život.</p>
        <p>Rusalky jsou bytosti vodního živlu, přičemž však jejich působnost není vázána jen na vodu. V té podle pověsti přežívají ve svých křišťálových palácích jen zimu. Na jaře a začátkem léta vystupují na louky, kde se rády často kolébají na větvích stromů.</p>
        <img  src="images/Rusalky.jpg" class="img1" alt="Obrázek: Rusalky">
        
        <h2>Vodník</h2>
        <p>Mužský představitel vodních bytostí. Vodníky pověřil bůh Vodan, aby se starali o vodní toky a nádrže. odobá se mu německý nixe nebo skotský kelpie.</p>
        <p>Vodník je znám západním i východním Slovanům, z jižních pouze Slovincům. Jeho partnerkou často bývá vodní panna či rusalka. Víra ve vodníka vychází ze slovanského kultu vody.</p>
        <p>Obvykle jde o malého mužíčka se zelenými vlasy, oblečeného do zelené či červené, který sedává na vrbě u vody a kouří fajfku. Jeho poznávacím znamením je, že mu z šosu kape voda. Ve vodě je velmi mocný, zatímco na suchu zpravidla slabý.</p>
        
        <img  src="images/Vodník.jpg" class="img1" alt="Obrázek: Vodník">
        
        <h2>Bolotník</h2>
        <p>Vysloveně zlý druh vodníka, žije v bažinách. Bolotník je znám svou schopností vytvářet klamné světla a bludiště, kterými svádí lidi z cesty přímo do bažin.</p>
        <p>Živí se především strachem a životní silou svých obětí. Podle pověstí má schopnost měnit svou podobu a často se jeví jako ztracený poutník nebo krásná žena volající o pomoc.</p>
        <h2>Rákosník </h2>
        <p>Také zlý démon, a žije v močálech a v rákosí. Rákosník je specialista na ukrývání se v hustém rákosí, odkud číhá na své oběti. Jeho jméno pochází z jeho oblíbeného útočiště - hustých porostů rákosí u břehů řek a jezer.</p>
        <p>Tato bytost je obzvláště nebezpečná pro rybáře a lovce vodního ptactva, kteří se pohybují v blízkosti rákosových porostů. Rákosník dokáže napodobovat zvuky zraněných zvířat nebo volání o pomoc, čímž láká své oběti do pastí.</p>
        <h2>Pramen</h2>
        <p>Bývá tak nazýván strážce pramene nebo studny. Obvykle se objevuje jako dlouhovlasý stařec. Prameny, studánky a další zdroje čisté vody měly u Slovanů zvláštní postavení a jejich strážci byli považováni za důležité božské bytosti.</p>
        <p>Pramen je na rozdíl od jiných vodních bytostí obvykle blahovolný k lidem, pokud se k němu chovají s úctou. Chrání čistotu vody a trestá ty, kdo znečišťují nebo poškozují vodní zdroje. Podle tradice je třeba Pramenovi přinášet oběti v podobě čistého chleba, medu nebo květin.</p>
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
                    <strong>PERUNI</strong> - <a href="https://peruni.estranky.sk/clanky/svet-slovanskych-bohu-a-demonu.html" target="_blank" style="color: #1e3a8a; text-decoration: none;" onmouseover="this.style.textDecoration='underline'" onmouseout="this.style.textDecoration='none'">Svět slovanských bohů a démonů</a>
                </li>
                <li id="zdroj-wikipedia-vila" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Wikipedie</strong> - <a href="https://cs.wikipedia.org/wiki/V%C3%ADla" target="_blank" style="color: #1e3a8a; text-decoration: none;" onmouseover="this.style.textDecoration='underline'" onmouseout="this.style.textDecoration='none'">Víla - slovanská mytologie</a>
                </li>
                <li id="zdroj-wikipedia-rusalka" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Wikipedia</strong> - <a href="https://en.wikipedia.org/wiki/Rusalka" target="_blank" style="color: #1e3a8a; text-decoration: none;" onmouseover="this.style.textDecoration='underline'" onmouseout="this.style.textDecoration='none'">Rusalka - Slavic folklore</a>
                </li>
                <li id="zdroj-wikipedia-vodnik" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Wikipedie</strong> - <a href="https://cs.wikipedia.org/wiki/Vodn%C3%ADk" target="_blank" style="color: #1e3a8a; text-decoration: none;" onmouseover="this.style.textDecoration='underline'" onmouseout="this.style.textDecoration='none'">Vodník - slovanský folklór</a>
                </li>
                <li id="zdroj-slovane" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Slované.cz</strong> - <a href="http://slovane.cz/?cat=7" target="_blank" style="color: #1e3a8a; text-decoration: none;" onmouseover="this.style.textDecoration='underline'" onmouseout="this.style.textDecoration='none'">Mytologie slovanských duchů</a>
                </li>
                <li id="zdroj-drakkaria" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>Drakkaria</strong> - <a href="https://www.drakkaria.cz/tema/mytologie/vodnik-postava-ze-slovanske-mytologie" target="_blank" style="color: #1e3a8a; text-decoration: none;" onmouseover="this.style.textDecoration='underline'" onmouseout="this.style.textDecoration='none'">Vodník, postava ze slovanské mytologie</a>
                </li>
                <li id="zdroj-estredovek" style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                    <strong>e-středověk.cz</strong> - <a href="https://www.e-stredovek.cz/post/slovanska-mytologie/" target="_blank" style="color: #1e3a8a; text-decoration: none;" onmouseover="this.style.textDecoration='underline'" onmouseout="this.style.textDecoration='none'">Slovanská mytologie</a>
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