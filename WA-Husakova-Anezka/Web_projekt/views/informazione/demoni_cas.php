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
        <h1>Démoni času<h1>
      </header>
      <section>
        <p>Démoni času úzce souvisejí s vegetačními cykly a rytmem času jako takovým Vedle slunovratů a dnů rovnodennosti mají velký význam i fáze měsíce a jednotlivé části dne, jako jsou poledne a půlnoc.</p>
        <p>Mnoho bytostí, jimž je svěřena péče o tyto cykly, je zobrazeno v pohádkách všech slovanských národů.</p>
        <p>Někteří démoni času mají na starosti střídání těchto cyklů, ale ve slovanské démonologii se můžeme setkat i s bytostmi, které chrání posvátnost určitého období či hodiny, například poledne, kdy slunce stoupá po obloze až na vrchol a pak se začíná naklánět k obzoru</p>
        <p>Další významnou částí dne je půlnoc, která je považována za hodinu duchů.</p>
        <h2>Dvanáct měsíčků</h2>
        <p>Starci rozsazení kolem ohně a střídající se na trůnu, díky čemuž se střídají měsíce a roční období.</p>
        <p>Kolem vatry bylo dvanáct kamenů a na nich sedělo dvanáct mužů. Každý muž představoval jeden měsíc v roce. Na nejvyšším kameni v čele seděl Leden, který zrovna vládl. Tato představa dvanácti měsíčků jako živých bytostí, které se střídají ve vládě nad časem, se objevuje v mnoha slovanských pohádkách a představuje personifikaci koloběhu roku.</p>
        <h2>Večernice</h2>
        <p>Překrásná víla, zjevuje se za soumraku. Na noční oblohu vychází jako první hvězda.</p> 
        <p>Zora je poetické pojmenování pro Jitřenku, úsvit a ranní červánky, případně i Večernici a večerní červánky, příbuzné slovu "záře". V obecném povědomí je někdy Zora nazývána slovanskou bohyní výše zmíněných fenoménů. Také Poláci mají svou Večernici a říkají jí Nočnice. Veškerá slovanská mytologie se často odvolává na bohyně, zosobněné starými ženami, které mohou být trochu i obdobou naší Večernice či Polednice nebo bludičky.</p>

            <img src="images/Večernice.jpg" class="img1" alt="Obrázek: Večernice">
        <h2>Rannice</h2>
        <p>Nejmladší dcerou boha noci Dije, oznamuje brzký příchod Svantovíta a také samotného Dažboga.</p>
        <p>Rannice představuje personifikaci úsvitu a ranních červánků. Jako dcera boha noci je spojovacím článkem mezi temnotou a světlem, oznamuje konec noci a příchod nového dne pod vládou slunečních božstev.</p>
        <h2>Polednice</h2>
        <p>Krutá víla, přestože je dcera somatného Dažboga. Vyhání lidi z polí a chrání svatost poledne. Provinilce krutě trestá, někdy dokonce i smrtí. Nejčastěji se zjevuje jako stařena nebo žebračka.</p> 
        <p>Polednice je mytická bytost ve slovanském folklóru obcházející v poledne pole, jež trestá ty, kdo na nich v tuto dobu pracují, a která unáší děti.</p>
        <p>Polednici se podobá v křesťanské tradici známý daemon meridianus - „polední démon", který způsobuje stav zvaný akédia „otupělost, apatie". Svým kladením hádanek se podobá řecké sfinx.</p>
        
        <img src="images/Polednice2.jpg" class="img1" alt="Obrázek: Polednice">
        <h2>Poledníček</h2>
        <p>Pomocník Polednice. Také trestá polední práci i škůdce na poli. Zjevuje se jako chlapec v bílé košili</p>
        <p>Kromě polednice byly známy bytosti jako poledníček, klekánice a klekáníček, půlnočnice a nemodlilka. Poledníček představuje mužskou variantu polednice, často zobrazovaný jako malý chlapec, který pomáhá polednici při hlídání polední svatosti.</p>
        <h2>Půlnočnice</h2>
        <p>Také Dijova dcera, stale se ženou Smrtě. Zjevuje se o půlnoci a svým příchodem oznamuje smrt.</p> 
        <p>Slovenská klakanica byla známá hlavně v Záhoří, nočnica či polnočnice se zjevovala o půlnoci a oznamovala tak smrt v rodině. Je to duch, staré ženy, duch snů, samotný sen. Má silný skřípavý hlas (vichřice podoba) a vůni mechu a lesa. A její čas působení přichází s večerem.</p>
        <img src="images/Půlnočnice.png" class="img1" alt="Obrázek: Půlnočnice">
        <h2>Klekánice - Půlnočnice</h2>
        <p>Obvykle bývá zobrazována jako tajemná stařena nebo čarodějnice, která se objevuje za soumraku, kdy „klekají“ zvony. 
            Věřilo se, že přichází, aby varovala děti, které ještě nejsou doma, a odváděla je pryč, pokud neposlechnou rodiče. 
        Tento mýtus měl funkci morálního ponaučení a pomáhal dětem chápat důležitost návratu domů před setměním.</p>
        <p>Klekánice unáší neposlušné a toulavé děti po večerním zvonění – klekání. Klekánice patří mezi prastaré démonické bytosti, které jsou vázány k určité denní době, vymezují ji a dbají na dodržování určitých pravidel s ní spojených.</p>
        <p>Česká klekánice mívá stejně jako někdy polednice podobu škaredé stařeny s rozcuchanými vlasy, šikmýma očima a kopytem. Také je znám klekáníček, který se objevuje jako mužík chodící po kolenou, jako děsivý mužík s rohy či vířící sloup prachu.</p>
        <img src="images/Klekánice.jpg" class="img1" alt="Obrázek: Klékánice">
        <img src="images/PůlPolKlek.jpg" class =img1 alt="Obrázek: Půlnočnice, Polednice a Klékánice">
        <h2>Tři jezdci</h2>
        <p>První jezdec na bílém koni a je strážcem úsvitu (Svantovít); druhý dozírá na den a jezdí na zlatém koni(Dažbog); třetí jezdí na černém koni a má na starosti noc (Dij) .</p>
        <p>Tato trojice jezdců představuje personifikaci tří hlavních částí dne - úsvitu, dne a noci. Každý jezdec je spojen s určitým božstvem a barvou koně, což symbolizuje přechody světla během dne. Bílý kůň úsvitu reprezentuje čistotu ranního světla, zlatý kůň dne plnost slunečního svitu a černý kůň noci tajemství a odpočinek.</p>
        <p></p>
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
                <a href="https://cs.wikipedia.org/wiki/Polednice" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                   onmouseover="this.style.textDecoration='underline'"
                   onmouseout="this.style.textDecoration='none'">
                    Polednice
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
                <a href="https://cs.m.wikipedia.org/wiki/O_dvan%C3%A1cti_m%C4%9Bs%C3%AD%C4%8Dk%C3%A1ch" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                   onmouseover="this.style.textDecoration='underline'"
                   onmouseout="this.style.textDecoration='none'">
                    O dvanácti měsíčkách
                </a>
            </li>
            <li style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                <strong>Web</strong> - 
                <a href="https://peruni.estranky.sk/clanky/svet-slovanskych-bohu-a-demonu.html" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                   onmouseover="this.style.textDecoration='underline'"
                   onmouseout="this.style.textDecoration='none'">
                    PERUNI - SVĚT SLOVANSKÝCH BOHŮ A DÉMONŮ
                </a>
            </li>
            <li style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                <strong>Web</strong> - 
                <a href="http://vecernice50.cz/vecernice-a-nocnice/" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                   onmouseover="this.style.textDecoration='underline'"
                   onmouseout="this.style.textDecoration='none'">
                    Večernice a Nočnice
                </a>
            </li>
            <li style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                <strong>Web</strong> - 
                <a href="https://www.paracz.cz/slovanska-mytologie/" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                   onmouseover="this.style.textDecoration='underline'"
                   onmouseout="this.style.textDecoration='none'">
                    Slovanská mytologie - Paracz
                </a>
            </li>
            <li style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                <strong>Článek</strong> - 
                <a href="https://www.dudlu.cz/clanky-o-detech/jak-vypada-klekanice/" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                   onmouseover="this.style.textDecoration='underline'"
                   onmouseout="this.style.textDecoration='none'">
                    Jak vypadá Klekánice? - Dudlu.cz
                </a>
            </li>
            <li style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                <strong>Článek</strong> - 
                <a href="https://www.mivemi.cz/temata-a-clanky-o-detech/klekanice--kdo-to-je-a-jak-vypada/" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                   onmouseover="this.style.textDecoration='underline'"
                   onmouseout="this.style.textDecoration='none'">
                    Klekánice: Kdo to je a jak vypadá - MiVeMi.cz
                </a>
            </li>
            <li style="margin-bottom: 0.3rem; font-size: 0.85rem;">
                <strong>Rozhlas</strong> - 
                <a href="https://regiony.rozhlas.cz/neverite-na-polednici-se-ale-asi-mylite-zamysleni-pavla-konzbula-7990816" target="_blank" style="color: #1e3a8a; text-decoration: none;"
                   onmouseover="this.style.textDecoration='underline'"
                   onmouseout="this.style.textDecoration='none'">
                    Nevěříte na polednici? - Český rozhlas
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