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
            Ačkoliv k nám jejich jména doléhala rozličně, ze stínů lidových písní a legend, zůstávají fascinujícím obrazem slovanského chápání světa jako živého, propojeného celku, kde každá bytost má své místo a každá síla své jméno.</p>
            <h2>Rod</h2>
        <p>Prabůh počátku, z něhož vzniklo vše. Není stvořitelem v lidském smyslu, ale silou zrození, principem života. Je přítomen v krvi, rodu, pokračování.</p>
        <p>V některých tradicích je Rod považován za nejstarší a nejzákladnější ze všech slovanských božstev - není to osobní bůh, ale spíše kosmický princip, který stojí za vším existujícím. Jeho jméno se dochovalo v mnoha slovanských jazycích ve slovech souvisejících s rodinou, původem a zrozením.</p>
        <p>Rod byl uctíván především mezi východními Slovany, zejména v oblasti dnešního Ruska, Ukrajiny a Běloruska. Jeho jméno se dochovalo v mnoha slovanských jazycích ve slovech souvisejících s rodinou, původem a zrozením. Moderní neopohanské skupiny v Rusku ho často volí jako vrchní božstvo.</p>
        <img src="images/Rod.jpg" class="img1" alt="Obrázek: Rod">
        <h2>Lada</h2>
        <p>Bohyně harmonie, plodnosti a krásy. Ztělesňuje rovnováhu mezi protiklady, ženský princip ve své sjednocující podobě. Patronka míru a zrození.</p>
        <p>Věří se, že má roli matky bohyně mezi některými slovanskými skupinami, a v jiných je Lada jednoduše označována jako velká bohyně. V některých ohledech je podobná severské Frejje, kvůli své asociaci s láskou, plodností a smrtí.</p>
        <p>Její kult byl nejsilnější mezi západními a jižními Slovany - v dnešním Polsku, České republice, na Slovensku a v části Balkánu. Ve východoslovanské oblasti byla často ztotožňována s Mokošį nebo s křesťanskou Pannou Marií.</p>
        <img src="images/Lada.jpg" class="img1" alt="Obrázek: Lada">
        <h2>Triglav</h2>
        <p>Trojhlavýbůh představující minulost, přítomnost a budoucnost. Jméno "Triglav" ve skutečnosti znamená "ten se třemi hlavami". Ve slovanské mytologii je někdy představován jako komplex bohů, a jako reference nejblíže Trojici v křesťanství nebo Trimurti v hinduismu.</p>
        <p>Triglav byl nejvíce uctíván mezi pobaltskými Slovany.</p>
        <img src="images/Triglav.jpg" class="img1" alt="Vyzobrazení Triglava">

        <h2>Bělbog</h2>
        <p>Také mu říkali: Bělbog, Běloboh, Baga, Bhaga, Bělovít, Bělun, Bialbog, Bjelobog a Bylun</p>
        <p>Bělbog patří mezi významnější sluneční bohy a také mezi nejstarší. Je to bílý bůh ztělesňující dobro a světlo. Často bývá ztotožňován se samotným Sluncem, proto sídlí na východě a svou mocí končí „zlou“ tmu.</p>
        <p>V době zimního slunovratu vždy porazil Černoboga a převzal od něho kontrolu nad řízením vývoje. V den letního slunovratu se boj opakoval, avšak vítězem byl tentokrát Černobog.</p>
        <img src="images/Bělbog.jpg" class="img1" alt="Obrázek: Bělbog">
        <img src="images/CernobogABelobog.jpg" class="img1" alt="Obrázek: Bělbog a Černobog">
        <h2>Černobog</h2>
        <p>Říkali mu také: Černoboh, Czorneboh, Czernebog, Czarnobóg, Crnobog, Meles</p>
        <p>Temný protějšek Bělboga. Ztělesnění noci, smůly, strachu a smrti. Ale není zlem - je nezbytným stínem ve světě protikladů.</p>
        <p>Zmínky o Černobogovi pocházejí především ze západoslovanských oblastí, kde ho zaznamenal německý kronikář Helmold. V dnešní době se čím dál častěji objevuje názor, že Černobog a Bělbog byli slovanskou reakcí na příchod prvního křesťanství, tedy že vznikli jako prolnutí křesťanského Boha a Ďábla se slovanskou mytologií.</p>
        <p> Družkou Černoboga byla Morana, se kterou dokonce zplodil několik démonů.</p>
        <img src="images/Černobog2.jpg" class="img1" alt="Obrázek: Černobog">
        <img src="images/Černobog.jpeg" class="img1" alt="Obrázek: Černobog">

        <h2>Svarog</h2>
        <p>Svarog nebo také Svaroh je slovanský bůh nejasné funkce a významu. Nejčastěji je badateli interpretován jako nebeské a stvořitelské božstvo případně jako sluneční nebo kovářsko-magické božstvo.</p>
        <p>Svarog byl uctíván napříč celým slovanským územím, ale s regionálními rozdíly. U východních Slovanů byl považován za otce Dažboga, u jižních Slovanů za boha slunce a světla. V ruských dialektech se zachovalo zastaralé slovo "свáрог" (svarog) znamenající "oheň" a "kovář". Mnoho měst v celé oblasti nese jména odvozená od Svaroga.</p></p>
        <img src="images/Svarog.jpg" class="img1" alt="Vyzobrazení Svarogaa">
        
        
        <h2>Perun</h2>
        <p>Říkali mu také: Perkunas, Perkon, Perk, Puruša</p>
        <p>Nejsilnějším bohem slovanského panteonu. Bůh hromu, války a ochrany. v době válek vystupuje do čela slovanského panteonu, aby zajistil vítězství našim zbraním a ochránil ty, kteří jdou do války. 
            V době míru je bohem deště, bouře, hromu a blesku, přinášeje úrodě vláhu. </p>
            <p> Je mu zasvěcen nejsilnější strom v přírodě - dub. Jeho posvátným zvířetem je býk. Jeho zbraní je ohnivá sekera </p>
        <p>Perun byl uctíván od Baltu k Černému moři. Hlavní kultovní centra existovala v Novgorodu, Kyjevě a na místě Peryn u jezera Ilmen. U západních Slovanů byl znám jako Prone (zaznamenal Helmold), u pobaltských Slovanů v oblasti Hannoverského Wendlandu se čtvrtek nazýval "Perěndan" - "den Peruna". 
            Archaeologické nálezy sekerek s Perunovými symboly pocházejí z období 11.-12. století z celé střední a východní Evropy.</p>
            <img src="images/Perun1.webp" class="img1" alt="Vyzobrazení Peruna">
        
        
        <h2>Veles</h2>
        <p>Nebo také Volos, je pán podsvětí, magie, zvířat a poezie. Jeho říše je temná, ale nezbytná. Věčný protivník Peruna, ztělesnění hluboké moudrosti a tajemství. </p>
           <p>Patřil pravděpodobně mezi nejvýznamnější slovanská božstva. Je jedním z mála slovanských bohů, pro něž lze nalézt důkazy obětí ve všech slovanských národech.</p></p>
            <p>Veles/Volos byl uctíván po celém slovanském území - od Ruska (kde je nazýván Volos) po ostatní slovanské oblasti (kde je znám jako Veles). V Kyjevě stála jeho socha v obchodnické čtvrti Podol, níže než Perunova na kopci.</p>
           <img src="images/Veles.jpg" class="img1" alt="Veles">

        <h2>Mokoš</h2>
        <p>Velká bohyně země, vody, ženství a osudu. Strážkyně plodnosti, rození a ženské síly. Ochránkyně pracujících a tkadlen života. Je zosobněním vlhké, úrodné a plodné země. Její samotné jméno je pravděpodobně odvozené od kořene mok- mokrý, vlhký. </p>
        <p>Mokoš je jediné ženské božstvo ve Vladimírově panteonu. Mimo východoslovanské prostředí písemné zprávy o Mokoši neexistují. O jejím uctívání mohou svědčit jen některá toponyma. Tím může být především lokalita Mokošín u Přelouče v Čechách. 
            Dále můžeme jmenovat Mukus na Rujáně nebo Mogast / Mokoš v Horních Francích</p>
        <p>Svátek bohyně Mokoši býval spojován se slavností kupadel, současní novopohané jej však umisťují samostatně na podzim.</p>
        <img src="images/Mokoš.jpg" class="img1" alt="Vyzobrazní Mokoše">
        
        <h2>Dažbog</h2>
        <p>Jeden z nejvýznamnějších a nejuctívanějších slovanských bohů. Syn slunce, nositel světla a života. Dobrotivý bůh, dárce tepla, hojnosti a jasnosti. Předek lidí ve slovanské tradici. Bývá ztotožňován se Svarožicem a Chorsem. </p>
        <p>Dažbog byl uctíván především mezi východními Slovany. Ve Slovu o pluku Igorově je ruský lid nazýván "Dažbožovi vnuci". Jeho kult byl silný v Kyjevské Rusi, kde měl sochu ve Vladimírově panteonu. 
            Archeologické nálezy slunečních motivů na keramice naznačují jeho široké uctívání.</p>
        <img src="images/Dažbog.jpg" class="img1" alt="Vyzobrazení Dažboga">
        
        
        <h2>Chors</h2>
        <p>Je východoslovanský bůh, jehož idol stál společně s idoly dalších božstev takzvaného Vladimírova panteonu v Kyjevě. Nejčastěji je vykládán jako solární božstvo a ztotožňován s Dažbogem,</p>
        <img src="images/Chors.jpg" class="img1" alt="Obrázek: Chors">
        
        <h2>Morana</h2>
        <p>Také nazývána: Morěna, Morjana, pol. Marzena, Marzana</p>
        <p>Chápána jako zpodobnění smrti či zimy, přichází s chladem a odchodem, ale není zlá - bez ní by nový život neměl kde začít. Je symbolicky upalována, topena či zakopávána při jarních lidových obřadech vynášení smrtky a vítání jara, které se zachovaly po celém slovanském území.</p>
        <img src="images/Morana.png" class="img1" alt="Vyzobrazení Morany">
        
        <h2>Živa</h2>
        <p>Živa je bohyně léta. Symbolizuje štědrost, vitalitu, hojnost a plodnost. Přinášela bohatou úrodu a požehnání přírodě. Její jméno je odvozeno od slova “život”. Představuje energii obsaženou ve všem živém na Zemi - v rostlinách, zvířatech i lidech</p>
        <p>Živa byla uctívána především kmenem Polabanů. V Polsku je známa jako Žywia, v českých zemích jako Živa. Některé zdroje ji ztotožňují s Mokoší nebo s dalšími životodárnými bohyněmi.</p>
        <h2>Stribog</h2>
        <p>Pán větrů, proudů a pohybu. Jeho dech rozhýbává listí, přináší změny a nese zprávy z daleka. Nepředvídatelný, mocný, volný.</p>
        <p>Stribog byl uctíván především mezi východními Slovany, kde měl místo ve Vladimírově panteonu. Ve Slovu o pluku Igorově jsou větry nazývány "Stribožovi vnuci", což dokládá jeho důležitost v ruské mytologii. Jeho kult byl silný v stepních oblastech, kde jsou větry každodenní realitou.</p>
        <img src="images/Stribog.jpg" class="img1" alt="Obrázek: Stribog">
        <h2>Simargl</h2>
        <p>Okřídlený pes, strážce mezi světy. Ochránce ohně, rostlin a rodiny. Tajemné a ochranné božstvo na pomezí nebe a země.</p>
        <p>Simargl byl nejvíce uctíván mezi východními Slovany, kteří ho představovali jako mýtického tvora v podobě okřídleného psa. Měl sochu ve Vladimírově panteonu a jeho obrazy lze nalézt na náramcích z 12. a 13. století. Jeho jméno má pravděpodobně íránský původ (Simurgh), což odráží kulturní výměnu na východoevropských stepích.</p>
        <img src="images/Simargl.jpg" class="img1" alt="Obrázek: Simargl">
                        
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
            <strong>Článek</strong> - 
            <a href="https://zena-in.cz/clanek/belobog-a-cernobog-jin-a-jang-starych-slovanu" target="_blank" style="color: #1e3a8a; text-decoration: none;">
                Jing a Jang starých slovanů
            </a>
        </li>
        <li style="margin-bottom: 0.3rem; font-size: 0.85rem;">
            <strong>Článek</strong> - 
            <a href="https://www.gamepark.cz/blog/43431-bohove/365299-belbog" target="_blank" style="color: #1e3a8a; text-decoration: none;">
                Bělbog
            </a>
        </li>
        <li style="margin-bottom: 0.3rem; font-size: 0.85rem;">
            <strong>Wikipedie</strong> - 
            <a href="https://cs.wikipedia.org/wiki/Svarog" target="_blank" style="color: #1e3a8a; text-decoration: none;">
                Svarog
            </a>
        </li>
        <li style="margin-bottom: 0.3rem; font-size: 0.85rem;">
            <strong>Rodná víra</strong> - 
            <a href="https://rodnavira.cz/slovane/bohove/perun/" target="_blank" style="color: #1e3a8a; text-decoration: none;">
                Perun 
            </a>
        </li>
        <li style="margin-bottom: 0.3rem; font-size: 0.85rem;">
            <strong>Wikipedie</strong> - 
            <a href="https://cs.wikipedia.org/wiki/Perun" target="_blank" style="color: #1e3a8a; text-decoration: none;">
                Perun
            </a>
        </li>
        <li style="margin-bottom: 0.3rem; font-size: 0.85rem;">
            <strong>Wikipedie</strong> - 
            <a href="https://cs.wikipedia.org/wiki/Veles" target="_blank" style="color: #1e3a8a; text-decoration: none;">
                Veles
            </a>
        </li>
        <li style="margin-bottom: 0.3rem; font-size: 0.85rem;">
            <strong>Článek</strong> - 
            <a href="https://rodnavira.cz/slovane/bohove/veles/" target="_blank" style="color: #1e3a8a; text-decoration: none;">
                Veles - Rodná víra
            </a>
        </li>
        <li style="margin-bottom: 0.3rem; font-size: 0.85rem;">
            <strong>Wikipedie</strong> - 
            <a href="https://cs.wikipedia.org/wiki/Moko%C5%A1" target="_blank" style="color: #1e3a8a; text-decoration: none;">
                Mokoš
            </a>
        </li>
        <li style="margin-bottom: 0.3rem; font-size: 0.85rem;">
            <strong>Rodná víra</strong> - 
            <a href="https://rodnavira.cz/slovane/bohove/mokos/" target="_blank" style="color: #1e3a8a; text-decoration: none;">
                Mokoš
            </a>
        </li>
        <li style="margin-bottom: 0.3rem; font-size: 0.85rem;">
            <strong>Wikipedie</strong> - 
            <a href="https://cs.wikipedia.org/wiki/Da%C5%BEbog" target="_blank" style="color: #1e3a8a; text-decoration: none;">
                Dažbog
            </a>
        </li>
        <li style="margin-bottom: 0.3rem; font-size: 0.85rem;">
            <strong>Rodná víra</strong> - 
            <a href="https://rodnavira.cz/slovane/bohove/dazboh/" target="_blank" style="color: #1e3a8a; text-decoration: none;">
                Dažbog
            </a>
        </li>
        <li style="margin-bottom: 0.3rem; font-size: 0.85rem;">
            <strong>Wikipedie</strong> - 
            <a href="https://cs.wikipedia.org/wiki/Chors" target="_blank" style="color: #1e3a8a; text-decoration: none;">
                Chors
            </a>
        </li>
        <li style="margin-bottom: 0.3rem; font-size: 0.85rem;">
            <strong>Rodná víra</strong> - 
            <a href="https://rodnavira.cz/slovane/bohove/morana/" target="_blank" style="color: #1e3a8a; text-decoration: none;">
                Morana
            </a>
        </li>
        <li style="margin-bottom: 0.3rem; font-size: 0.85rem;">
            <strong>Wikipedie</strong> - 
            <a href="https://cs.wikipedia.org/wiki/%C5%BDiva_(mytologie)" target="_blank" style="color: #1e3a8a; text-decoration: none;">
                Živa
            </a>
        </li>
        <li style="margin-bottom: 0.3rem; font-size: 0.85rem;">
            <strong>Článek</strong> - 
            <a href="https://www.leros.cz/ziva-slovanska-bohyne-leta" target="_blank" style="color: #1e3a8a; text-decoration: none;">
                Živa
            </a>
        </li>
        <li style="margin-bottom: 0.3rem; font-size: 0.85rem;">
            <strong>Rodná víra</strong> - 
            <a href="https://rodnavira.cz/slovane/bohove/stribog/" target="_blank" style="color: #1e3a8a; text-decoration: none;">
                Stribog
            </a>
        </li>
        <li style="margin-bottom: 0.3rem; font-size: 0.85rem;">
            <strong>Wikipedie</strong> - 
            <a href="https://cs.wikipedia.org/wiki/Simargl" target="_blank" style="color: #1e3a8a; text-decoration: none;">
                Simargl
            </a>
        </li>
        <li style="margin-bottom: 0.3rem; font-size: 0.85rem;">
            <strong>Rodná víra</strong> - 
            <a href="https://rodnavira.cz/slovane/bohove/simargl/" target="_blank" style="color: #1e3a8a; text-decoration: none;">
                Simargl
            </a>
                        
        </li>


    </ul>
</div>
        </div>
        </div>
        
        </main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>