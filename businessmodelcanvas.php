<?php include "head.inc"; ?>   

<style>
        #pagewrap{
            display: grid;
            grid-gap: 0px;
            grid-auto-columns: 1fr;
            grid-template-areas:
                "bmc"
                "forståelse"
                "de9byggesten"
                "Organisation"
                "produkt"
                "salg"
                "oekonomisk"
                "forretning"
                "arke"
                "ryanair"
                "kilde"
                "tiltop";
            }
    
    #bmc{
        grid-area: bmc;
        border-bottom: solid #e589ba 1px;
    }

    #forståelse{
        grid-area: forståelse;
    }
    
    #de9byggesten{
        grid-area: de9byggesten;
        border-bottom: solid #e589ba 1px;
    }
    
    #Organisation{
        grid-area: Organisation;
    }
    
    #produkt{
        grid-area: produkt;
    }
    
    #salg{
        grid-area: salg;
    }
    
    #oekonomisk{
        grid-area: oekonomisk;
    }
    
    #forretning{
        grid-area: forretning;
        border-top: solid #e589ba 1px;
    }
    
    #arke{
        grid-area: arke;
    }
    
    #ryanair{
        grid-area: ryanair;
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
                grid-auto-columns: 1fr;
                grid-template-areas:
                    "bmc bmc"
                    "forståelse forståelse"
                    "de9byggesten de9byggesten"
                    "Organisation produkt"
                    "salg oekonomisk"
                    "forretning forretning"
                    "arke arke"
                    "ryanair ryanair"
                    "kilde tiltop";
                }
    
    }
    
@media screen and (min-width:900px){ 
        #pagewrap{
                display: grid;
                grid-gap: 0px;
                grid-auto-columns: 1fr 1fr 1fr;
                grid-template-areas:
                    "bmc bmc bmc"
                    "forståelse forståelse forståelse"
                    "de9byggesten de9byggesten de9byggesten"
                    "Organisation produkt salg"
                    "oekonomisk oekonomisk oekonomisk"
                    "forretning forretning forretning"
                    "arke arke ryanair"
                    "kilde tiltop tiltop";
                }
    }

</style>

  </head>

  <body>
    
      
   <?php include "menu.inc"; ?>
      
<!-- her starter sidens indhold ------------- --> 
    
    <div id="pagewrap">
        
        <div id="bmc">
        <h1> Business Model Canvas </h1>
        </div>
        
        <div id="forståelse">
        <h2> Forståelse </h2>
        <p> 
            "BMC er en måde, hvorpå virksomheden kan få inspiration til sin forretnings-model. Den blev introduceret i 2010 af Alexander Osterwalder i Business Model Generation"
            <br>
            BMC er en måde skabe en fælles forståelse af den organisation du er i, eller i i gang med at opbygge. Den hjælper med at finde ud af hvordan virksomheden fungerer, på den måde kan man også nemmere at komme frem til innovative tilføjelser. 
            <br>
            Når man taler BMC kan man ikke komme uden om de 9 byggesten, som ligger fundamentet for hele modellen. 
        </p>
        </div>
      
        <div id="de9byggesten">
        <h1>  De 9 byggesten </h1>
        </div>
        
        <div id="Organisation">
        <h2> Organisation </h2>
        <dl>
            <dt>Nøgle partnere  - NP</dt>
                <dd>Partnerskaber imellem andre virksomheder- det kan både være konkurrenter eller ikke konkurrenter.</dd>
            <dt>Nøgle aktiviteter - NA</dt>
                <dd>Dette er det som virksomheden står for at leverer - hvis man eksempelvis er en produktionsvirksomhed - er en nøgleaktivitet produktion- de skal altså fremstille produkter til kunderne. 
                </dd>
            <dt>Nøgle Ressourcer - NR </dt>
                <dd>Det er det som får forretnings modellen til at virke - her kan der eksempelvis være tale om fysiske ressourcer så som bygninger køretøjer maskiner mm. 
            </dd>
        </dl>
        </div>
        
        <div id="produkt">
        <h2> produkt </h2>
        <dl>
            <dt>Værditilbud -  VT</dt>
                <dd>Dette kan være grunden til at kunderne vælger os og ikke et andet firma - vi kunne eksempelvis tilbyde billigere priser sammenlignet med konkurrenten. </dd>
        </dl>
        </div>
      
        <div id="salg">
        <h2> Salg</h2>
         <dl>
            <dt>Kundesegmenter-  KS </dt>
                <dd>Kunden er det essentielle i BMC, fordi har vi igen kunder, har vi ingen forretning.</dd>
            <dt>Kunderelationer - KR </dt>
                <dd>Alt efter hvilke kundesegment man befinder sig i så er det en måde at skabe kundefastholdelse og mersalg. 
                </dd>
            <dt>Kanaler - K </dt>
                <dd>Det er den måde vi leverer til vores kunder</dd>
        </dl>
        </div>
        
        <div id="oekonomisk">
        <h2> Økonomi </h2>
         <dl>
            <dt>Omkostningsstruktur - OS</dt>
                <dd>Her er der tale om de omkostninger man har i virksomheden - der er mange former for omkostninger - eksempelvis lønninger er en del af virksomhedens faste omkostninger. </dd>
            <dt>Indtægtsstrømme - IS </dt>
                <dd> Penge virksomheden generere via kundesegmenterne. 
                </dd>
        </dl>
        </div>
        
        <div id="forretning">
        <h2> Forretningsforståelse </h2>
         <p> 
             For at få forretnings forståelse er det vigtigt  at lære sig selv at kende som virksomhed. 
             Man kan eksempelvis starte med at finde ud af hvilken type virksomhed man er
        </p>
        <dl>
            <dt>Produktionsvirksomhed </dt>
            <dt>Handelsvirksomhed</dt>
            <dt>Servicevirksomhed </dt>
        </dl>     
        <p>
            Når man har fastlagt hvilke virksomhedstype man er, kan man gå vider med spørgsmål som disse: 
            Hvem er virksomheden skabt for, hvem er virksomheden osv. 
            På den måde kan man syre sig ind på hvad ens vision, mål og værdier er. 
        </p>    
        </div>
        
        <div id="arke">
        <h2> Forretningstyper/arketyper </h2>
        
        <dl>
            <dt>Den digitale købmand</dt>
	           <dd>
                Har sin fysiske butik men supplerer med     salg via Internettet
                - Branding, annoncering, varekataloger, service- og vejledninger på nettet
                </dd>
            <dt>Webshoppen</dt>
                <dd>
                Køber hos grosister og sælger direkte til forbrugere via internettet.
                - Undgår fordyrende fysisk detailbutik omkostninger og har samtidigt større varesortiment
                </dd>
            <dt>Den digitale producent</dt>
	           <dd>
                Udvider sine fysiske produkter med digitale tjenester bl.a. med IOT (Internet Of Things)
                - Skaber nye funktionaliteter samt digitale lock-in effekter om det fysiske produkt
                </dd>
            <dt>Software producenten</dt>
                <dd>
                Bygger software med licens/direkte betaling
                - Marginalomkostninger grænsende til nul, skalerbarhed og udrulning/opdatering via internet
                </dd>
            <dt>Den digitale platformsbygger</dt>
                <dd>
                Bygger sin egen digitale platform på internettet
                - Skalering af antal bruger og brugen kilden til indirekte salg
                </dd>
            <dt>App opfinderen</dt>
                <dd>
                Ser et behov og bygger en app som dækker behovet
                - Ekstremt lave start-up og exit costs
                </dd>
            <dt>Wiki-skaberen</dt>
	           <dd>
                Brugerne er både skabere samt forbrugere af indholdet
                - Indtjening sker gennem donationer og eller indirekte salg
                </dd>  
        </dl>     
        <p>
            Grunden til at det er en god ide at anvende en forretningsmodel, er at man finder ud af hvilke kunder man har, hvad værdier virksomheden kan tilbyde kunderne 
            <br>
            "Forretningsmodellen kortlægger hvilke aktiviteter, ressourcer og samarbejdspartnere der er behov for, for at kunne tilføre kunden værdi, og hvilke udgifter og indtægter der er forbundet hermed – kort sagt, hvordan virksomheden tjener penge."
        </p>    
        </div>
        
        <div id="ryanair"> 
        <h2> Øvelse - Ryanair</h2>
        <p> 
            På klassen arbejde vi med business model Canvas.
            Vi fik firmaet RyanAir som vi skulle tage udgangspunkt i. Her fik vi sat alle segmenterne i spil
        </p>
        
        <dl> 
            <dt>Nøglepartnere: Lufthavne </dt>   
            <dt>Nøgleaktiviteter: Flere dagsrejser </dt>  
            <dt>Nøgleressourcer: Fly, aktier  </dt>  
            <dt>Værdifaktorer:  billige flybilletter direkte fly i Europa</dt> 
            <dt>Kunderelationer: Selvbetjening, automatiseret service  </dt>  
            <dt>Kunder: Folk der gerne vil rejse billigt,  </dt>  
            <dt>Kanaler: Rejsesøgemaskiner, egen hjemmeside, rejse bureau</dt> 
            <dt>Omkostninger: lønninger, benzin, marketing,  </dt>  
            <dt>Indtægtsstrømme: Kundeservice, tilkøb af plads, mad mm.  </dt> 
        </dl>
        
        <img src="billeder/ryanair.jpg">
        
        </div>
        
        <div id="kilde">
            
            <h4> Kilder </h4> 
            <h4> Forretningsforståelse  MMD 071118 - Mariann Daugaard - PP </h4> 
            <h4> Business model generation - s. 20-62 - Bog </h4>  
        </div>
        
        <div id="tiltop">
            <a href="http://idak0001.web.eadania.dk/Portfolio/businessmodelcanvas.php"><img src="billeder/%20blomsttop.jpg"></a>
        </div>
        
    </div>  <!-- pagewrap slutter ---------------------------------------- -->
    
        
<!-- her slutter sidensindhold ************** --> 
        
    <?php include "foot.inc"; ?>