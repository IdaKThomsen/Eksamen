
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
        <img id="ida" src="billeder/Ida4.jpg">
    </div>
        
    <div id="hvorformultimediedesign">
        <h1> Hvorfor multimediedesign?</h1>
        <p> Dette udklip fra den første obligatoriske aflevering vi lavede vil give en god forståelse hvorfor jeg netop har valgt denne uddannelse. 
        <br>
        <br>
            "Den verden vi lever i, bliver mere og mere digitaliseret. Der bliver opfundet nyere og smartere digitale løsninger konstant. Det er netop grunden til, at jeg har valgt dette studie. Jeg synes hastigheden indenfor dette felt er vildt fascinerende. Hvis ikke man holder sig opdateret hele tiden, ender man med at blive overhælet. Det som er den helt store motivationsfaktor, er at jeg kan komme til at beskæftige mig både med designprocesser og markedsføring. Jeg kommer i løbet af studiet til at finde ud af, hvordan man går fra ideudvikling til det færdige produkt, hvilket jeg ser meget frem til. Jeg elsker at udfolde mig kreativt, hvilket jeg ser stor mulighed for. Min interesse ligger i et spændingsfelt imellem business og design. Jeg har gjort mig mange overvejelser omkring ”kodnings-delen”, da jeg var bekymret for, at det blev for ” nørdet ” for mig. Jeg er dog efter introperioden kommet frem til, at det er stærkt fundament som giver en grundlæggende forståelse for de processor som interesserer mig mest. Dog tror jeg, at det som bliver den største udfordring for mig er netop kodning, da det er et område, jeg ikke har været inde på før. Men grundet at uddannelsen er så ”praktisk”, så tror jeg, at meget af det bliver sat i en kontekst, så at man kan se et formål med det man laver."s </p>
    </div>
    
    <div id="opgavenisigselv">
        <h1>Portfolio</h1>
        <p> Arbejdsproces:</p>

        <p>Content:</p>
        <p>
            Vi var en gruppe på omkring 5 som aftalte at lave en studiegruppe, hvor vi kunne hjælpe hinanden med notater til de forskellige emner. Vi startede allerede i denne gruppe omkring en halvanden uge inden vi officielt fik opgaven.  Det har været en stor hjælp at sidde sammen og dele de forskellige noter /viden vi hver især havde, på den måde har jeg fået gennemgået stoffet  igen, hvilket har givet en bedre forståelse i sidste ende. Vi snakkede i fællesskab om hvad vi ville have med på siden, og hvordan det skulle stilles op
        </p>
        <p>Kodning:</p> 
        <p>
            Da alt min tekst til de forskellige emner var sammenfattet, begyndte den del som jeg havde frygtet mest. Jeg har ikke prøvet at kode før jeg startede her, så ofte løber ens fantasi af med en, hvilket er lidt dumt når ens færdigheder ikke er til det. 
            Jeg startede med at lave wireframes for at skabe en ide omkring hvordan jeg ønskede mit design skulle se ud. Både over navigationen og hver af de andre sider.  
        </p>
        <p>Generelt: </p>

        <p>
            Jeg havde hele tiden i hovedet at det skulle være så simpelt som muligt, da jeg ikke "tør" at bevæge mig ud på alt for dybt vand, da jeg stadig er i en læringsproces hvor jeg gør mit bedste for at skabe en forståelse for det hele, hovedsageligt kodningsdelen. 
        </p>
    </div>
    
    <div id="reflektion">
        <h1> Reflektion </h1>
        <p> 
            Overordnet syntes jeg at det er men ret fed følelse at sidde med, når man ser det færdige resultat af sin side, også taget i betragtning at der er et par "små" fejl.

            Jeg har mindet mig selv om i løbet af denne proces, at det handler ikke om at komme ud med det flotteste resultat, eller at være den bedste, men det handler derimod om min lærings proces 

            Og jeg har igennem hele projektet lært noget nyt hver dag. Det har ikke altid været lige nemt at forholde sig til, men det har været en spændende proces. 

            Jeg ser frem til at jeg kan komme til at udvikle mine færdigheder.
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