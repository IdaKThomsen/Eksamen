<?php include "head.inc"; ?>

<style>

#pagewrap{
    display: grid;
    grid-gap: 0px;
    grid-auto-columns: 1fr;
    grid-template-areas:
        "historie"
        "worldplaceofknowledge"
        "internettet"
        "femperioder"
        "kilde"
        "tiltop";
    }

#historie{
    grid-area: historie;
}
#worldplaceofknowledge{
    grid-area: worldplaceofknowledge;
}

#internettet{
    grid-area: internettet;
}

#femperioder{
    grid-area: femperioder;
    border-top: solid #e589ba 1px;
} 
#kilde{
        grid-area: kilde;
        border: solid #e589ba 1px;
        margin: 10px;
        }
    
#tiltop{
        grid-area: tiltop;
        max-height: 100%;
        text-align: right;
        padding: 20px;
            }
    
    
@media screen and (min-width:500px){
    
#pagewrap{
    display: grid;
    grid-gap: 0px;
    grid-auto-columns: 1fr 1fr;
    grid-template-areas:
        "historie historie"
        "worldplaceofknowledge internettet"
        "femperioder femperioder"
        "kilde tiltop";
    }
}

    
@media screen and (min-width:900px){
    
    #pagewrap{
    display: grid;
    grid-gap: 0px;
    grid-template-columns: 1fr 1fr 1fr;
    grid-template-areas:
        "historie historie historie"
        "worldplaceofknowledge internettet internettet"
        "femperioder femperioder femperioder"
        "kilde kilde tiltop";
        }

}
    
</style>

    </head>

    <body>

    
<?php include "menu.inc"; ?>


      
        <div id="pagewrap">
            
            <div id="historie">
                <h1> Historie </h1> 
            </div>
            
            <div id="worldplaceofknowledge">
            <h2>World place of knowledge</h2>
            <p> 
                Kilde video 
                I det 20 århundrede havde man så meget information, at det skabte furstation for folk, man vidste ikke hvordan man kunne strukturere eller bevare alt denne information på den smarteste måde, Det skete et informations overload, der var for meget information til at man kunne håndtere det. Dette overload resulterede i at man skabte stedet " world place of knowlegde" 
                Her sørgede man for at der ikke var flere af samme dokument, billede mm. Ydermere fokuserede de også på at få linkede flere ting sammen hvis der var en sammenhæng     
            </p>
            </div>
            
            <div id="internettet">
            <h2> Internettet </h2>
                
            <p> Kilde : video 
                Historien bag internettet i 1957 er skabt af det videnskabelige netværk "ARPANET" det militære netværk "RAND" det kommercielle netværk "NPL" og tilsidst det videnskabelige netværk "Cyclades".
                Alle 4 netværk opstod af samme grund, nemlig at de ville dele viden, så de arbejde med at skabe og dele informationer.
                Men grundet Cyclades ikke havde samme budget som de andre netværk, kunne de kun fokusere på at der skulle skabes kommunikation imellem andre netværk.
 
                Mange tror at WWW "world wide web" er internettet, men det er ikke sandheden. WWW er et hypertext system som hjælper os med at få vist sider/billeder mm i vores browser. Det kan også forklares således: 
                Internettet er det vejsystem vi har i Danmark, og bilerne der kører på vejsystemet er eks. WWW. 

                Der blev oprettet protokoller, for at skabe et regelsæt for hvordan computerne skal tale sammen, Det er meget vigtigt at de er ens ellers kan de ikke tale sammen. Det er aftale om hvordan man kommunikerer. 
            </p>
            </div>
            
            <div id="femperioder">
                <h2> 5 perioder</h2>
            <p>
                Fra 1993 har webbet udviklet sig, man kan tale om 5 forskellige perioder, som man skildre fra hinanden fordi der har været gradvis teknologiske ændringer.
            </p>
     
                <ul>
                Tidlige eksperimenter ( 1993-  1996)
                </ul>
                <p>
                På dette tidspunkt var der mange begrænsninger i HTML, man kunne eksempelvis ikke kontrollere hvilken størrelse ens skrift havde, det var browseren der bestemte hvilket udtryk siden kom ud med. Der var dog stadig nogle som blev nysgerrige på nette,t og begynde at bruge det selv. Folk begyndte at anvende Mosaic - browser udviklet af NCSA Mosaic i 1993, for at kunne få mere kontrol over hvordan deres side kom til at se ud i sidste ende.
                </p>
                <ul>Under konstruktion(1996-2000)</ul>
                <p> 
                    Mange flere begyndte at bruge webbet til at skabe forretninger bla. var Amazon var en af de første webshops som fik en god start, med at sælge bøger. Men fordi at der var så mange som begyndte at udvikle hjemmesider så blev det svært for brugeren at finde ud af hvad der var bedst at bruge. 
                    I takt med at flere begyndte at anvende webbet, så kom der også forskellige meninger omkring hvad der var vigtigt at fokusere på- David Siegel mente at det var vigtigt at fokusere på designet, hvor at Jakob Nielsen mente at man skulle tænke mere på brugervenlighed. 
                    i 2002 var det år hvor Microsoft vandt browserkrigen over Netscape. Microsoft sad altså på 96 %. 
                </p>
                <ul>Semantisk søgning (2000-2003)</ul>
                <p> 
                    Grundet det der blev kaldt "millenium bug" blev folk mere utrykke ved at bruge webbet, og derfor skete "dotcom krakket" hvilket resulterede i at mange mistede deres penge. 
                    Imens alt dette stod på blev man introduceret til Google, som kunne erstatte alt hvad de tidlligere søgemaskiner ikke kunne klare.
                    Google gjorde det nemmere for folk at blive opdaget, fordi google havde bedre mulighed for at dømme om siderne var gyldige, de arbejde nemlig med Semantik. 
                    I forhold til at designe med CSS fik fok flere muligheder, men folk fik det samme sæt muligheder, så alle sider lignede stort set hinanden.
                </p>
                
                <ul> Sociale web(2003-2010)</ul>
                <p>
                    Nu er det brugerne som styre webbet. De har altså mulighed for at lave et forum til alle slags hobbyer, bla. startede siden "MySpace" som gjorde det muligt for folk at dele billeder, musik og meget andet, det gik dog lidt i stå da Facebook kom til. De sørgede for at folk kunne følge med i nyheder, sports begivenheder, ud over det kunne man nu dele videoer via youtube. Det var bla. også i denne periode at twitter kom til, det var også her at "#" blev en ting. Der blev skabt mange politiske begivenheder, som nu kunne ses af milioner af mennesker. 
                </p>
                <ul>Det mobile web(2010- nu)</ul>
                <p>
                    Man gik fra at alt forgik på en computerskærm, til at folk brugte deres smartphone, med toutch skærm. 
                    Måden at bruge Webbet på ændrede sig, da man nu gik ind på Apps i stedet for browsere. 
                    Dette fik også en indflydelse på hvordan måden at markedsføre sig på ændrede sig, for uanset hvor man bevægede sig hen så "følges" ens spor, så de kan vise  relateret indhold til det man lige har været inde på.
                </p>    
        
            </div>
            
            <div id="kilde">
            
                <h4> kilder </h4> 
                <h4> History of the Internet - Melih Bilgil - Video.</h4> 
                <h4> Navigating Knowledge - Video </h4>  
                <h4> Tim Berners-Lee - The World Wide Web - Video </h4>  
                </div>
            
            <div id="tiltop">
                <a href="http://idak0001.web.eadania.dk/Portfolio/historie.php"><img src="billeder/%20blomsttop.jpg"></a>
            </div>
            
        
        </div> <!-- pagewrap slut !-->

<?php include "foot.inc"; ?>
