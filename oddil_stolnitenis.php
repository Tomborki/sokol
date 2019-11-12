<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sokol Doubravka</title>
    <link href="css/12cols.css" rel="stylesheet">
    <link href="css/styl.css" rel="stylesheet">
    <link href="css/media_1000px.css" rel="stylesheet">
    <link href="css/media_520px.css" rel="stylesheet">
        <link href="css/oddil.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Signika:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet">

<link rel="icon" href="img/favicon-sokol.png" sizes="20x20">

    </head>
      <?php require_once("header.php"); ?>

          <!-- -------------------------------------------------------------------------------------------------------------------- -->
          <div id="info">
          <h2 id="oddil_napis"> Oddíl stolního tenisu </h2>

            <p>Oddíl stolního tenisu při Sokol Doubravka založilo v roce 1995 několik nadšenců pro hru s nejmenším míčkem, kteří se v sezóně 96/97 přihlásili do tehdejší soutěže neregistrovaných v Plzni. Začátky v tehdejší II. lize neregistrovaných byly krušné, ale postupně hráči získávali zkušenosti a herní kvalitu. Základní kádr týmu se rozšířil a posílil a v ročníku 98/99 mužstvo postoupilo do první ligy a v následujícím ročníku ji po boji udrželo. Současně s tím ale začal první rozpad družstva, které z různých důvodů opustilo několik hráčů. Bylo rozhodnuto opustit soutěž neregistrovaných a přihlásit tým do městského přeboru registrovaných hráčů. Náhradou za odešlé získal tým dva nové hráče. Ve své premiéře v městském přeboru v ročníku 1999/2000 mužstvo vybojovalo 3. místo. Bohužel možná nenaplněné představy o rychlém postupu do krajské soutěže a problémy s hrací místností vedly k druhému rozpadu oddílu a k ukončení účinkování i v soutěži registrovaných. V průběhu tohoto období nás opustili i poslední zakládající členové. Okolo torza bývalého týmu se postupně začal formovat nový oddíl. Po neblahých zkušenostech z minulosti ale zatím nehraje žádnou soutěž, členové v něm pouze trénují.</p>

          </div>

          <div class="social_container_oddil stolni_tenis_foto">
                <h2 class="like rezervace_nadpis"> Pojď si k nám zahrát </h2>
                <section class="rodic_social_oddil">
      	             <article class="flex_social_oddil">
                         <p>
                         <img id="clen" src="img/002-stopwatch.svg" alt="cas" width="45px" height="45px">
                         Po - Ne ve volných hodinách (viz. rezervační systém)
                         </p>

                         <p>
                         <img id="clen" src="img/003-badminton-court.svg" alt="cas" width="45px" height="45px">
                         K dispozici jeden stůl na stolní tenis, možnost zapůjčení raket i míčků
                         </p>

                         <p>
                         <img id="clen" src="img/001-money.svg" alt="cas" width="45px" height="45px">
                         Cena za 1 hodinu - 50Kč
                         </p>

                         <a id="rezervace" href="https://jdemenato.cz/reservation/sokol-doubravka/reservationcalendaroverview" target="_blank"> Rezervace </a>


                    </article>
                </section>
            </div>
            <div id="info" style="top: 0px;">

                 <p>V současnosti tvoří oddíl stolního tenisu 5 mužů středního a vyššího středního věku se zkušenostmi z regionálních a krajských soutěží. Již více než 3 roky rok se oddíl pokouší omladit svou členskou základnu pomocí přípravky pro žáky (pátek 16-17:30 hod ve velké tělocvičně). Členy oddílu je v současnosti 8 mladších i starších žáků.</p>
              </div>

            <div class="aktuality_container">
                     <h2 id="kde">Aktuality v kategorii stolní tenis</h2>
                     <div class="flex_aktualita">
                     <?php

                       require_once("in/pripojeni_db.php"); //pripojeni databaze

                       require_once("in/functions.php");

                       select_aktuality_podle_kategorie($conn, "stolni_tenis");

                      ?>
                    </div>
                    <a class="info_aktualita" href="aktuality.php"> Zobrazit další aktuality </a>
            </div>


            <div class="container_bad">
                   <h2 id="kde">Kde hrajeme</h2>
                   <p>Jak bylo již výše naznačeno, v Sokole Doubravka není kromě tělocvičny vhodná místnost dostatečných rozměrů a výšky pro alespoň dva stoly, tak jak předepisuje soutěžní řád České asociace stolního tenisu. Tělocvična je ale přeplněná a to i o víkendech, takže je prakticky nemožné zde získat časový prostor pro trénink a soutěžní zápasy. Kromě toho je zde i problém složitého a pracného zastiňování oken proti dennímu světlu. Herna stolního tenisu v 1. patře, s jedním stolem, kde se naše činnost odehrává, je vhodná opravdu jen pro tréninkové účely. V jednotě se nyní uvažuje o výstavbě další tělocvičny, která by mohla sloužit jako herna, ale zatím je to stále jen hudba budoucnosti.</p>  
            </div>

            <div class="container_bad">
                   <h2 id="kde">Z historie stolního tenisu jako takového</h2>
                   <p>Stolní tenis, stejně jako i většina ostatních současných sportů vznikl a získal svá první pravidla v Anglii. První zmínka je z roku 1881, kdy si gentlemani, kteří z důvodu nepříznivého počasí nemohli hrát lawn tenis, krátili dlouhou chvíli hraním tenisu na stole. Jako pálky posloužila víka od krabic na doutníky, míček se vyrobil z korkové zátky a síťku nahradila řada knih. V roce 1890 přivezl z cesty po Americe James Gibb, který je mimochodem uznáván jako zakladatel závodní hry, celuloidový míček, který objevil mezi dětskými hračkami. Záhy se celuloid ukázal jako nejvhodnější materiál.</p>  
                   <p>V Anglii se v prvních letech dvacátého století stal nový sport záhy velmi populární, ale jeho obliba zmizela stejně rychle jako přišla, protože nový sport kvůli materiálovému vybavení přinesl jen fádní pinkání. Ač byla již vynalezena pálka s vroubkovanou gumou, stolní tenis se na dvacet let propadl do nezájmu. V českých zemích se objevují první zmínky o stolním tenisu okolo roku 1900, po roce 1903 ale mizí. Teprve dvacátá léta minulého století znamenají znovuzrození stolního tenisu a jeho rozmach po celém světě.</p> 
                   <p>První mistrovství světa se konalo v roce 1926 v Londýně. Toto mistrovství také ukončilo éru dřevěných pálek, které nahradila pálka s vroubkovanou gumou. Pro zajímavost, ještě na mistrovství někteří zastánci korku žádali zákaz gumových potahů s odůvodněním, že kazí hru. Historie se opakuje a o třicet let později chtěli vyznavači tehdy již klasické pálky zakázat houbové potahy a používali stejný argument.</p>
                   <p>Dvacátá léta opanovali zejména maďarští hráči a toto období historie stolního tenisu se obecně nazývá maďarská éra. Od roku 1932 ale sportu s celuloidovým míčkem začínají kralovat jiní hráči. Na mistrovství světa, které se konalo v Praze se našim v družstvech podařilo porazit do té doby suverénní Maďary a získat první titul mistrů světa. Od té doby se začala psát éra, která se v historii stolního tenisu označuje jako československá. Stolní tenis se v Československu stává počtem titulů mistrů světa jedním z nejúspěšnějších sportů. Celkem naši sportovci získali 29 titulů. Sluší se připomenout některá jména: Maleček, Kolář, Lauterbach, Váňa. Tereba, Šlár, Štípek, Andreadis, Tokár , mezi ženami Kettnerová, dále Votrubcová a Depetrisová, hráčky Viktorie Plzeň. Bohužel, titulů by bylo zřejmě mnohem víc, nebýt druhé světové války. Po ní sice ještě medaile cinkaly, ale po nástupu komunismu i vlivem necitlivého přístupu funkcionářů jich ubývalo. Poslední titul získala dvojice Adreadis, Štípek v roce 1957. To již bylo zřejmé, že československé období končí a nastupuje Asie, v té době hlavně Japonsko. Přesto se od té doby vlivem široké a kvalitní základny podařilo vychovat mnoho skvělých hráčů, kteří dobyli medaile na světových i evropských šampionátech. Pro oživení paměti opět několik jmen: Miko, Staněk, Orlowski, Kunc, Dvořáček, Panský, Korbel, Voštová, Karlíková, Lužová, Grófová, Hrachová, Kasalová. Bohužel stolní tenis v českém podání stále ustupuje ze slávy. V současnosti není žádný český hráč ani hráčka ve světové špičce.</p>
            </div>





 <!-- -------------------------------------------------------------------------------------------------------------------- -->

          <?php require_once("footer.php"); ?>

</html>
