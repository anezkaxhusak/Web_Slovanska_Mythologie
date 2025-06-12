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
        <h1>Mladší božstvo<h1>
      </header>
      <section>
      <p>
Ve druhé éře slovanské mytologie se svět proměňuje - z božského základu prabohů vyrůstá svět lidí, rytmus roku, zemědělský život, slavnosti, války i každodenní vztahy. Bohové této doby již nejsou jen silami kosmu - přibližují se člověku. 
Zrcadlí roční cykly, svátky, plodnost i smrt, radost i ztrátu. Jsou mladší, dynamičtější, mnozí z nich se zjevují v konkrétních obdobích - a často se znovu ztrácejí, jakmile jejich čas pomine.
</p>
<p>
Tato generace bohů nese do slovanského světa nové emoce: vášeň, naději, smutek, žár jara i chlad podzimu. Vznikají zde příběhy božské lásky, bratrství, oběti i klamání osudu. 
Je to éra cyklického zrození a zániku - svátky jako Koliada, Kupala, Jarilo nebo Vesna nebyly jen slavnosti, ale mystéria obnovy a vnitřní proměny. 
A právě tito bohové a polobožské bytosti vytvářejí tu živou mytologii, která v některých podobách přežívá dodnes.
</p>
<p>Poznání slovanské mytologie je však limitováno vzácností a torzovitostí dobových písemných pramenů. Autentické slovanské mýty se prakticky nezachovaly a jejich podobu musíme rekonstruovat z komparativní mytologie, lingvistiky, archeologie a pozdního folklóru. 
    Písemné záznamy pochází většinou od křesťanských autorů a jsou zatíženy jejich vírou a znalostí antického náboženství.</p>

<h2>Koliad</h2>
<p>
Duch zimního slunovratu a nového začátku. Koliad přichází v nejdelší noci roku, aby symbolicky „přinesl“ nový sluneční cyklus. 
Je ztělesněním návratu světla, naděje a koloběhu času - každý rok se znovu rodí a s ním celý svět.
</p>
<p>Zimní slunovrat byl důležitým momentem pro většinu indoevropských kultur, neboť symbolizoval vítězství světla nad temnotou.</p>
<img  src="images/Koliad.jpg" class="img1" alt="Obrázek: Koliad">


<h2>Jarilo</h2>
<p>
Bůh jara, vášně a plodnosti. Jarilo je mladý, krásný, nositel obnovy, ale zároveň nestálý. Jeho příchod je spojen s táním, rozkvětem a bujícím životem. V některých verzích mýtů se na konci léta obětuje, aby příroda mohla znovu spočinout.
</p>
<p>Jarilo představuje personifikaci jarní síly přírody a často je spojován s erotickou energií a plodností. V východoslovanském folklóru se objevuje jako kultovní figura při jarních slavnostech.</p>
<img  src="images/Jarilo.webp" class="img1" alt="Obrázek: Jarilo">

<h2>Kupalo</h2>
<p>
Bůh letního slunovratu, ohně, vody a čistoty. Je symbolem radosti, vrcholné plodnosti a spojení protikladů. Jeho svátky jsou plné tance, skákání přes oheň, koupání a hledání zázračného kapradí. Kupalo ztělesňuje jedinečný okamžik rovnováhy a výbuch života.
</p>
<p>Letní slunovrat je oslavou slunce a vrcholného období jeho vlády, je nejdelší den v roce a také Dažboh, bůh slunce, je na vrcholu své moci. Základními atributy tohoto svátku je obřadní koupání, pálení ohňů a skákání přes ohně, vše doprovázeno nevázaným veselím.
</p>
<p>Kupadelné svátky se slavily po celém slovanském území - v Rusku jako Ivan Kupala, na Ukrajině jako Kupalo, v Polsku jako kupała či sobótka, v Bulharsku jako Ivan-den. V kupadelných písních se objevuje motiv sňatku ohně a vody, dvou hlavních živlů tohoto svátku.</p>
<img  src="images/Kupalo.jpg" class="img1" alt="Obrázek: Kupalo">


<h2>Svantovít</h2>
<p>
Mocné božstvo války, věštby a moci. Svantovít je často zobrazován se čtyřmi hlavami, hledícími do všech stran světa. Chrám na Arkóně byl jeho nejslavnějším kultovním místem. Jeho přítomnost znamenala vítězství i osudové rozhodnutí.</p>
<p>Svantovít byl slovanský bůh uctívaný polabskými Slovany, resp. kmenem Ránů na Rujáně. Díky politickému vlivu Rujány byl často ctěn okolními kmeny jako nejvyšší z bohů, dary mu přinášely kmeny od Vagrie po Pomořansko.</p>
<p>Pro polabské Slovany byl chrám zasvěcený Svantovítovi důležitou baštou pohanství i v době, kdy většina Evropy již byla křesťanská. Svatyně odolávala až do roku 1168, kdy Arkonu vyplenil dánský král Valdemar I.</p>
<p>Svantovít v sobě spojoval vlastnosti válečného i hospodářského boha. Z jeho rohu naplněného vínem kněz věštil úrodu na následující rok. Věštilo se pomocí tří řad dvou do země zapíchnutých a překřížených kopí, která kůň překračoval.</p>
<img  src="images/Svantovit.jpg" class="img1" alt="Obrázek: Svantovit">


<h2>Pizmar</h2>
<p>
Tajemný bůh pohanského Východu, spojovaný s nocí a tichem. Nese sebou mlčení, vnitřní vhled a skrytou sílu. Jeho jméno přežívá v okrajových záznamech a legendách jako síla, která mluví málo, ale zasahuje hluboko.
</p>
<p>O tomto božstvu se zachovalo velmi málo informací, což odpovídá jeho charakteru jako boha skrytých věcí a tichého poznání.</p>


<h2>Vesna a Jeseň</h2>
<p>
Dvě bohyně ročních období - Vesna jako mladé jaro, Jeseň jako moudrý podzim. Vesna přináší zrod, vůni květů, lásku a sluneční návrat. Jeseň sklízí, zavírá brány, zpomaluje svět. Spolu udržují rovnováhu života a zrání.
</p>
<p>Vesna byla mytologická ženská postava spojovaná s mládím a jarem v pozdější slovanské mytologii, zvláště u jižních Slovanů. Podle slovinské mytologie krásné ženy zvané "vesny" žily v palácích na vrcholcích hor, kde diskutovaly o osudu úrody a lidských obyvatel.
</p>
<img  src="images/Vesna.jpg" class="img1" alt="Obrázek: Vesna">

<h2>Rugevit, Porenut a Porevit</h2>
<p>
Tři bratři - bohové války, odvahy a síly. Rugevit bývá chápán jako vůdce, Porenut jako stratég, a Porevit jako hrdina či síla jednoty. Uctívaní zejména v Polabí jako božské trojjedinosti mužské moci a ochrany.
</p>
<p>V jižní části ostrova Rujana, ve významném městě Korenica, stály tři svatyně zasvěcené bohům Rujevitovi, Porevitovi a Porenutiovi.
</p>
<p>Podle Jacka Banaszkiewicze, polského profesora středověkých dějin, tato tři božstva nejsou "náhodnou" skupinou, ale skupinou božstev, která patronují oblastem základním pro existenci společnosti. Rugevita považuje za hlavního boha patronujícího válku a společnost, zatímco Porevita a Porenuta za božská dvojčata doplňující hlavní božstvo svými univerzálními charakteristikami.
</p>
<img  src="images/RuPoPo.jpg" class="img1" alt="Obrázek: Rugevit, Porenut, Porevit">


<h2>Prove a Perpult</h2>
<p>
Dvojice božstev rovnováhy a odporu. Prove je bůh práva, pravdy a struktury, Perpult naproti tomu zosobňuje protiklad, změnu a rozklad. Jejich věčný tanec připomíná, že rovnováha není stav, ale neustálý pohyb.
</p>
<p>Tato božstva představují dialektické principy - jeden stabilitu a řád, druhý dynamiku a změnu, společně udržující kosmickou rovnováhu.</p>


<h2>Usud</h2>
<p>
Tajemný bůh osudu, rozhodující o cestách duší a směřování světa. Nezasahuje násilně - spíše tká síť příčin a následků. Stojí mimo boje, ale všichni bohové se mu nakonec podřizují.
</p>
<p>Usud reprezentuje neúprosné zákony osudu a příčinnosti, které stojí nad všemi ostatními božstvy.
</p>
<img  src="images/Usud.jpg" class="img1" alt="Obrázek: Usud">


<h2>Serča a Neserča</h2>
<p>
Dcery Usuda, bohyně radosti a bolesti. Serča přináší soucit, lásku, naději a spojení. Neserča je strážkyní ztráty, odmítnutí a vnitřního smutku. Obě jsou neoddělitelné - dvě strany lidského osudu.
</p>
<p>Tato dvojice představuje polaritu lidských emocí a zkušeností, připomínající, že radost i smutek jsou nedílnou součástí života.</p>

<h2>Porebog a Podaga</h2>
<p>
Bohové spjatí s živly - Porebog s deštěm a podzemními prameny, Podaga s větrem a pohybem. Jejich síla je neviditelná, ale všudypřítomná. Často přicházejí bez varování a mění krajinu i lidi.
</p>
<p>Tito bohové představují živelné síly přírody, které člověk nemůže ovládat, pouze jim může vzdávat úctu.</p>
<img  src="images/Podaga.jpg" class="img1" alt="Obrázek: Podaga">


<h2>Svatogor a Magura</h2>
<p>
Svatogor, obrovský horský duch, zosobňuje sílu hor a tíhu nehybnosti. Je starý a silný, ale jeho krok nese svět. Magura, ženský duch hory, je ochránkyně, ale také strážkyně hranic mezi světem lidí a božským tichem.
</p>
<p>Je důležité poznamenat, že Svjatogor není v původní slovanské mytologii božstvo, ale postava z ruských bylin (hrdinských eposů). Ruský hrdina Svyatogor patří k starší generaci epických hrdinů. 
    Jeho obraz, ztělesňující obrovskou nevyžádanou sílu, inspiroval ruské básníky a spisovatele všech generací.</p>
<img  src="images/Svatogor.jpg" class="img1" alt="Obrázek: Svatogor">
<img  src="images/Magura1.png" class="img1" alt="Obrázek: Magura">

<h2>Kovlad a Runa</h2>
<p>
Kovlad je pán podzemí a manžel Runy. Runa je vládkyně zlatých dolů, také nazývaná Zemná paní. Kovlad je pánem permoníků a lesních víl. Pod svátým dubem se setkává s ostatními božskými bytostmi a démony.
</p>
<p>Tato dvojice představuje spojení praktického řemesla s magickým věděním - kovářství bylo v archaických kulturách často spojováno s magií.</p>
<p></p>

<h2>Vodan a Diva</h2>
<p>
Vodní bůh a lesní bohyně. Vodan je klidný i nebezpečný, přináší život i utopení. Diva je ochránkyně lesů, života zvířat a divoké přírody. Společně symbolizují svět mimo civilizaci - krásný i nezkrotný.
</p>
<p></p>
<img  src="images/Vodan.jpg" class="img1" alt="Obrázek: Vodan">
<img  src="images/Diva_Devana.jpg" class="img1" alt="Obrázek: Diva">



<h2>Smrt</h2>
<p>
Nejstarší přítomnost, která nikdy neodešla. Smrt ve slovanském pojetí není zlem - je nutným zakončením. Vede duši zpět k Rodu, k počátku. Má svou tvář, své rituály a své ticho.
</p>

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
            <a href="https://cs.wikipedia.org/wiki/Slovansk%C3%A1_mytologie" target="_blank" style="color: #1e3a8a; text-decoration: none;"
               onmouseover="this.style.textDecoration='underline'"
               onmouseout="this.style.textDecoration='none'">
                Slovanská mytologie
            </a>
        </li>
        <li style="margin-bottom: 0.3rem; font-size: 0.85rem;">
            <strong>Wikipedie</strong> - 
            <a href="https://cs.wikipedia.org/wiki/Seznam_slovanských_bohů" target="_blank" style="color: #1e3a8a; text-decoration: none;"
               onmouseover="this.style.textDecoration='underline'"
               onmouseout="this.style.textDecoration='none'">
                Seznam slovanských bohů
            </a>
        </li>
        <li style="margin-bottom: 0.3rem; font-size: 0.85rem;">
            <strong>Wikipedie</strong> - 
            <a href="https://cs.wikipedia.org/wiki/Polabští_Slované" target="_blank" style="color: #1e3a8a; text-decoration: none;"
               onmouseover="this.style.textDecoration='underline'"
               onmouseout="this.style.textDecoration='none'">
                Polabští Slované
            </a>
        </li>
        <li style="margin-bottom: 0.3rem; font-size: 0.85rem;">
            <strong>Wikipedie</strong> - 
            <a href="https://cs.wikipedia.org/wiki/Svantovít" target="_blank" style="color: #1e3a8a; text-decoration: none;"
               onmouseover="this.style.textDecoration='underline'"
               onmouseout="this.style.textDecoration='none'">
                Svantovít
            </a>
        </li>
        <li style="margin-bottom: 0.3rem; font-size: 0.85rem;">
            <strong>Wikipedie</strong> - 
            <a href="https://cs.wikipedia.org/wiki/Kupadelné_svátky" target="_blank" style="color: #1e3a8a; text-decoration: none;"
               onmouseover="this.style.textDecoration='underline'"
               onmouseout="this.style.textDecoration='none'">
                Kupadelné svátky
            </a>
        </li>
        <li style="margin-bottom: 0.3rem; font-size: 0.85rem;">
            <strong>Wikipedie</strong> - 
            <a href="https://cs.wikipedia.org/wiki/Bylina_(pověst)" target="_blank" style="color: #1e3a8a; text-decoration: none;"
               onmouseover="this.style.textDecoration='underline'"
               onmouseout="this.style.textDecoration='none'">
                Bylina (pověst)
            </a>
        </li>
        <li style="margin-bottom: 0.3rem; font-size: 0.85rem;">
            <strong>Specialized web</strong> - 
            <a href="http://www.slovanskykruh.cz/2017/03/koupadla-letni-slunovrat/" target="_blank" style="color: #1e3a8a; text-decoration: none;"
               onmouseover="this.style.textDecoration='underline'"
               onmouseout="this.style.textDecoration='none'">
                Slovanský kruh - Koupadla / Letní slunovrat
            </a>
        </li>
        <li style="margin-bottom: 0.3rem; font-size: 0.85rem;">
            <strong>Blog</strong> - 
            <a href="https://by-boudicca.blogspot.com/2022/02/rujana-arkona-davni-slovane.html" target="_blank" style="color: #1e3a8a; text-decoration: none;"
               onmouseover="this.style.textDecoration='underline'"
               onmouseout="this.style.textDecoration='none'">
                Rujána: Arkona a dávní Slované
            </a>
        </li>
        <li style="margin-bottom: 0.3rem; font-size: 0.85rem;">
            <strong>Web</strong> - 
            <a href="http://slovane.cz/?p=101" target="_blank" style="color: #1e3a8a; text-decoration: none;"
               onmouseover="this.style.textDecoration='underline'"
               onmouseout="this.style.textDecoration='none'">
                Slované.cz - Rujevit, Porevit a Porenut
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