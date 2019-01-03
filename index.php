
   <?php include "head.inc"; ?>   
      

    <style>
            #pagewrap{
                display: grid;
                grid-gap: 0px;
                grid-template-columns: 1fr;
                grid-template-areas:
                    "ida"
                    "hvorformultimediedesign"
                    "opgavenisigselv"
                    "reflektion"
                    "tiltop";
            }

            #billede{
                grid-area: ida;
                text-align: right;
                background-color: fafafa;
                padding: 0;
                border-bottom: solid #e589ba 1px;
            }

            #ida{
                max-width: 100%;
                vertical-align: text-bottom;  
            }

            #hvorformultimediedesign{
                grid-area: hvorformultimediedesign;
                position: sticky;
                text-align: center;
                border-bottom: solid #e589ba 1px;
                padding-top: 5px;
            }

            #opgavenisigselv{
                grid-area: opgavenisigselv;
                position: sticky;
                text-align: center;
                border-bottom: solid #e589ba 1px;
                padding-top: 15px;
            }

            #reflektion{
                grid-area: reflektion;
                position: sticky;
                text-align: center;
                border-bottom: solid #e589ba 1px;
                padding-top: 15px;
            }

            #quote{
                grid-area: quote;
                display: none;
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
                    grid-template-columns: 1fr 1fr;
                    grid-template-areas:
                    "ida ida"
                    "hvorformultimediedesign hvorformultimediedesign"
                    "opgavenisigselv opgavenisigselv"
                    "reflektion reflektion"
                    ". tiltop";

                    }


                #quote{
                grid-area: quote;
                display: none;
                }

                #billede{
                    vertical-align: bottom;
                }


            }

            @media screen and (min-width:900px){

                #pagewrap{
                    display: grid;
                    grid-gap: 0px;
                    grid-template-columns: 1fr 1fr 1fr;
                    grid-template-areas:
                    "ida hvorformultimediedesign hvorformultimediedesign "
                    "opgavenisigselv opgavenisigselv opgavenisigselv"
                    "reflektion reflektion quote"
                    ". . tiltop";
                    }

                #quote{
                    grid-area: quote;
                    display: block;
                    align-self: end;
                    border-bottom: solid #e589ba 1px;
                    
                 }
                
                #quoteimg{
                    width: 100%;
                     }
            
            }

    </style>
  </head>
  <body>
    
      
   <?php include "menu.inc"; ?>
      
<!-- her starter sidens indhold ------------- --> 
    
<body> 
    <div id="pagewrap"> 
    
    <div id="billede">
        <img id="ida" src="billeder/Ida6.jpg">
    </div>
        
    <div id="hvorformultimediedesign">
        <h1> Hvorfor multimediedesign?</h1>
        <p> Dette udklip fra den første obligatoriske aflevering vi lavede vil give en god forståelse hvorfor jeg netop har valgt denne uddannelse. 
        <br>
        <br>
            "Den verden vi lever i, bliver mere og mere digitaliseret. Der bliver opfundet nyere og smartere digitale løsninger konstant. Det er netop grunden til, at jeg har valgt dette studie. Jeg synes hastigheden indenfor dette felt er vildt fascinerende. Hvis ikke man holder sig opdateret hele tiden, ender man med at blive overhælet. Det som er den helt store motivationsfaktor, er at jeg kan komme til at beskæftige mig både med designprocesser og markedsføring. Jeg kommer i løbet af studiet til at finde ud af, hvordan man går fra ideudvikling til det færdige produkt, hvilket jeg ser meget frem til. Jeg elsker at udfolde mig kreativt, hvilket jeg ser stor mulighed for. Min interesse ligger i et spændingsfelt imellem business og design. Jeg har gjort mig mange overvejelser omkring ”kodnings-delen”, da jeg var bekymret for, at det blev for ” nørdet ” for mig. Jeg er dog efter introperioden kommet frem til, at det er stærkt fundament som giver en grundlæggende forståelse for de processor som interesserer mig mest. Dog tror jeg, at det som bliver den største udfordring for mig er netop kodning, da det er et område, jeg ikke har været inde på før. Men grundet at uddannelsen er så ”praktisk”, så tror jeg, at meget af det bliver sat i en kontekst, så at man kan se et formål med det man laver." </p>
    </div>
    
    <div id="opgavenisigselv">
        <h1>Portfolio</h1>
        <p>Indhold:</p>
        <p>
            Vi var en gruppe på omkring 5 som aftalte at lave en studiegruppe, hvor vi kunne hjælpe hinanden med notater til de forskellige emner. Vi startede allerede i denne gruppe omkring en halvanden uge inden vi officielt fik opgaven.  Det har været en stor hjælp at sidde sammen og dele de forskellige noter /viden vi hver især havde, på den måde har jeg fået gennemgået stoffet  igen, hvilket har givet en bedre forståelse i sidste ende. Vi snakkede i fællesskab om hvad vi ville have med på siden, og hvordan det skulle stilles op.

        </p>
        <p>Kodning:</p> 
        <p>
            Da alt min tekst til de forskellige emner var sammenfattet, begyndte den del som jeg havde frygtet mest. Jeg har ikke prøvet at kode før jeg startede her, så ofte løber ens fantasi af med en, hvilket er lidt dumt når ens færdigheder ikke er til det. Jeg startede med at lave wireframes for at skabe en ide omkring hvordan jeg ønskede mit design skulle se ud. Både over navigationen og hver af de andre sider. Jeg startede ud med at arbejde med Webudvikling, og efter at have færdiggjort det emne fandt jeg hurtigt ud af den smarteste måde for mig at arbejde med de andre emner på. Jeg lavede en skabelon som jeg kunne bruge hver gang jeg gik i gang med et nyt emne, det gjorde processen for mig lidt nemmere. 
        </p>
        <p> Design </p>
        <p> 
            Hele designprocessen startede for mig, da jeg begyndte at lave wireframes. Jeg udarbejde først mobil versionen,  og der havde jeg en klar tanke om at den bare skulle være 1 kolonne, da jeg ellers syntes at det kan blive for småt, eller for presset. Da jeg kom til tablet versionen lavede jeg først en wireframe over at den skulle fylde 4 kolonner, fordi de 2 yderste skulle være "blanke", samme tanke havde jeg omkring web, Men jeg fandt hurtigt ud af at jeg bare ville lave hhv. tablet 2 kolonner og web 3. 
            Jeg har valgt at lave det gennemgående tema i på min hjemmeside lyserødt, da det er en af mine absolutte yndlingsfarver, på den måde kommer der også lidt personlighed ind over, hvilket jeg også syntes er en god ide. 
        </p>
    </div>
    
    <div id="reflektion">
        <h1> Reflektion </h1>
        <p> 
            Overordnet syntes jeg at det er en ret fed følelse at sidde med, når man ser det færdige resultat af sin side, også taget i betragtning at der er et par "små" fejl. Men nå man tænker på at for bare 3 måneder siden, startede jeg på den her uddannelse uden nogen form for erfaring inden for hverken Photoshop, Illustrator eller HTML/CSS. Og nu har jeg bevæget mig ud i at lave en hjemmeside fra bunden. 
            Jeg har mindet mig selv om i løbet af denne proces, at det handler ikke om at komme ud med det flotteste resultat, eller at være den bedste, men det handler derimod om min lærings proces Og jeg har igennem hele projektet lært noget nyt hver dag. Det har ikke altid været lige nemt at forholde sig til, men det har været en spændende proces. Jeg ser frem til at jeg kan komme til at udvikle mine færdigheder.
            Jeg havde hele tiden i hovedet at det skulle være så simpelt som muligt, da jeg ikke "tør" at bevæge mig ud på alt for dybt vand, da jeg stadig er i en læringsproces hvor jeg gør mit bedste for at skabe en forståelse for det hele,  og sørge for at jeg kan drage paralleller imellem de forskellige fag. 
            <br>
            Jeg syntes at jeg kom rigtigt godt fra start ved at arbejde på teksterne inden at jeg overhovedet gik i gang med at kode. Det der virkelig blev en udfordring for mig var at forstå det her med at lave filerne om til .PHP og  .inc og selve processen med Filezilla. Da jeg var kommet ret langt ville min side lige pludselig ikke vise CSS 
            Det viste sig at være fordi at jeg havde lagt filerne fra computeren forkert over på Filezilla. Men Ved at slette alt som allerede lå på Filezilla og oploade igen, så virkede det. Så Jeg har lært at forstå hvordan det skal bruges nu, hvilket har gjort den sidste del af projektet meget nemmere.  
        </p>
    </div>
            
    <div id="quote">
        <img id="quoteimg" src="billeder/quote6.jpg">
    </div>
        
    <div id="tiltop">
        <a href="http://idak0001.web.eadania.dk/Portfolio/index.php"><img src="billeder/%20blomsttop.jpg"></a>
    </div>
        
      </div> <!-- pagewrap slut -->
      
<!-- her slutter sidensindhold ************** --> 
        
    <?php include "foot.inc"; ?>