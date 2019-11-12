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
          <h2 id="oddil_napis"> Oddíl badmintonu </h2>

            <p>Oddíl badmintonu je dlouhodobě pořadatelem turnajů od místní, přes regionální k republikové i mezinárodní úrovni. Některé jsou určené pro hráče s výkonnostními ambicemi, jiné pro rekreanty. Na některých lze vidět republikovou či krajskou špičku příslušné věkové kategorie, na jiných spíše snahu a úsilí než kvalitní sportovní výkon…</p>

             <p>   Oddílu bývá často svěřováno pořadatelství některého z Mistrovství ČR, pravidelně je pořadatelem sokolských přeborů družstev či jednotlivců. Je vybraným oddílem České obce sokolské, mnohonásobným držitelem titulu Přeborník kraje (oblasti) a účastníkem většiny celorepublikových turnajů. Dloudobě spolupracuje s 25. základní školou v Plzni - zajišťuje mimoškolní přípravu žáků tříd s rozšířeným vyučováním tělesné výchově se zaměřením na badminton. Pravidelná tréninková činnost, při které kromě prostor vlastní tělocvičny musí výraznou měrou využívat pronajaté prostory ve školních tělocvičních, její návaznost na strukturu soutěžní sezóny, maximální možná účast na soutěžích vč. zahraničních, pravidelně pořádaná letní soustředění, ale především snaha o výchovu vlastní kvalitní hráčské i trenérské základny, to jsou pilíře, na kterých oddíl dlouhodobě staví.</p>

          </div>

          <div class="social_container_oddil">
                <h2 class="like rezervace_nadpis"> Přečti si náš FB nebo si přijď zahrát </h2>
                <section class="rodic_social_oddil">
      	             <article class="flex_social_oddil fb_bad">

                         <iframe id="fb" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FBadmintonSokolDoubravka%2F&tabs=timeline&width=500&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="500" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

                         <iframe id="fb_mobil" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FBadmintonSokolDoubravka%2F&tabs=timeline&width=300&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

                    </article>
      	             <article class="flex_social_oddil">
                       <!--  <h2> Všechny informace se dozvíš tady! </h2> -->

                         <p>
                         <img id="clen" src="img/002-stopwatch.svg" alt="cas" width="45px" height="45px">
                         Po - Ne ve volných hodinách (viz. rezervační systém)
                         </p>

                         <p>
                         <img id="clen" src="img/003-badminton-court.svg" alt="cas" width="45px" height="45px">
                         K dispozici dva singlové kurty, popř. jeden deblový, možnost zapůjčení raket i míčků
                         </p>

                         <p>
                         <img id="clen" src="img/001-money.svg" alt="cas" width="45px" height="45px">
                         Cena za kurt na hodinu - 100Kč
                         </p>

                         <a id="rezervace" href="https://jdemenato.cz/reservation/sokol-doubravka/reservationcalendaroverview" target="_blank"> Rezervace </a>


                    </article>
                </section>
            </div>
            <div id="info" style="top: 0px;">

                 <p>   Snaha dosáhnout návaznosti žactvo - dorost - dospělí vedla (kromě již zmíněné spolupráce s 25. základní školou v Plzni) k zapojení do činnosti Sportovního centra mládeže v badmintonu v Českém Krumlově a následně ke vzniku samostatného regionálního tréninkového centra. Na základě výběru pracujeme nejenom s vlastními hráči, ale i s hráči jiných oddílů (klubů) z našeho regionu. </p>

                  <p>T. J. Sokol Plzeň – Doubravka začala před více než padesáti léty a v hrubých rysech je popsána v části věnované oddílu v části „historie T. J.“ a v příslušné pasáži na starších webových stránkách tělocvičné jednoty. Oddílem prošla velká spousta hráčů, z nichž mnozí dosáhli i na republikové medaile, byli členy reprezentačních výběrů regionu i republiky a sklízeli úspěchy na zahraničních akcích. Není možné je vyjmenovat a na někoho při tom nezapomenout. Množství úspěšných startů dokumentuje sbírka pohárů, medailí a diplomů v klubovně oddílu v budově doubravecké sokolovny, mnohá ocenění bychom našli ve sbírkách jednotlivých členů oddílu.</p>
              </div>

            <div class="aktuality_container">
                     <h2 id="kde">Aktuality v kategorii badminton</h2>
                     <div class="flex_aktualita">
                     <?php

                       require_once("in/pripojeni_db.php"); //pripojeni databaze

                       require_once("in/functions.php");

                       select_aktuality_podle_kategorie($conn, "badminton");

                      ?>
                    </div>
                    <a class="info_aktualita" href="aktuality.php"> Zobrazit další aktuality </a>
            </div>


            <div class="container_bad">
                   <h2 id="kde">Tréninky a badminton pro veřejnost</h2>
                   <p>Rozpis tréninkových hodin zahrnuje skupiny hráčů v doubravecké sokolovně i ve školních tělocvičnách (25. a 14 základní škola v Plzni) – přehled skupin je uveden v příloze. V tréninkových hodinách oddílu se ale najdou skuliny, které oddíl nedokáže plně využít a nabízí je nově příchozím zájemcům o badminton. Konkrétně se jedná o tréninkové hodiny oddílu v úterý a ve čtvrtek večer na 25. ZŠ (od 21h) a v úterý v čase mezi 18. a 21.hodinou na 14. ZŠ. Bližší informace na tel. č. 602 169 692, e-mailové adrese miladanovakova@centrum.cz nebo na webových stránkách Západočeského badmintonového svazu ( www.zpcbadminton.cz ). Hodiny využitelné pro badminton v doubravecké sokolovně je možné si rezervovat prostřednictvím on-line rezervačního systému na www.sokoldoubravka.cz po provedení registrace zájemce.</p>  
                   <div class="tlacitka_container"> 
                   <a class="container_button" href="doc/Prehled_treninkovych_skupin_zari2019.pdf"> Přehled tréninkových skupin </a>
                   <a class="container_button" href="tel:+420602169692"> Kontakt - Telefon </a>
                   <a class="container_button" href="mail:miladanovakova@centrum.cz"> Kontakt - Email </a>     
                   </div>
            </div>

            <div class="container_bad">
                   <h2 id="kde">Soustředění</h2>
                   <p>pořádá pro své členy oddíl badmintonu pravidelně. Každoročně se koná kondiční soustředění v závěru července (posledních několik let v Železné Rudě), počátek srpna patří herním soustředěním žákovských a dorosteneckých skupin. Letošní program zahrnoval příměstský tábor pro hráče z přípravek, navazovalo příměstské soustředění pro pokročilejší hráči a mimoplzeňské herní soustředění pro skupinu nejlepších hráčů ve věku žactvo + dorost. Letošní akce dokumentuje krátké zhodnocení léta spolu s několika fotografiemi v příloze.</p>   
                   <div class="tlacitka_container"> 
                   <a class="container_button" href="doc/Letosni_badmintonove_leto_2019.pdf"> Zhodnocení </a>   
                   <a class="container_button" href="https://photos.app.goo.gl/6qwcQYcCjRUPTA4L6"> Foto </a> 
                   </div>
            </div>


            <div class="container_bad">
                   <h2 id="kde">Vyplétání raket a prodej badmintonových potřeb</h2>
                   <p>badmintonové rakety vám vypleteme námi dodaným nebo vaším vlastním výpletem podle vašich požadavků. Pokud se vám při střetu se spoluhráčem nebo jiným nešťastným způsobem podaří nalomit nebo jinak poškodit badmintonovou raketu, zajistíme vám její opravu. Také vám můžeme nabídnout k prodeji základní badmintonové potřeby (rakety, míčky, bagy), zajistíme možnost testování a poradíme při výběru vhodného vybavení. Pro splnění vašich požadavků v tomto směru volejte na 602 169 692 nebo pište na adresu miladanovakova@centrum.cz .</p> 
                   <div class="tlacitka_container"> 
                   <a class="container_button" href="tel:+420602169692"> Kontakt - Telefon </a>
                   <a class="container_button" href="mail:miladanovakova@centrum.cz"> Kontakt - Email </a>     
                   </div>      
            </div>

            <div class="container_bad">
                   <h2 id="kde">Kontakty na vedení oddílů a trenéry skupin</h2>
                   <div class="tlacitka_container"> 
                   <a class="container_button" href="doc/Kontakty_na_trenery.pdf"> Kontakty</a> 
                   </div>      
            </div>











 <!-- -------------------------------------------------------------------------------------------------------------------- -->

          <?php require_once("footer.php"); ?>

</html>
