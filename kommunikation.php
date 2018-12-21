   <?php include "head.inc"; ?>   
 
 
<style>
#pagewrap{
    display: grid;
    grid-gap: 0px;
    grid-auto-columns: 1fr;
    grid-template-areas:
        "kommunikation"
        "hvaderk"
        "tretyper"
        "kongurentogin"
        "synkronogasynkron"
        "grundantagelser"
        "hparadigme"
        "imkmodellen"
        "imkbillede"
        "generelimk"
        "sparadigme"
        "lbillede"
        "lmodel";
}


#kommunikation{
    grid-area: kommunikation;
    background-color: aqua;
}

#hvaderk{
    grid-area: hvaderk;
    background-color: pink;
}

#tretyper{
    grid-area: tretyper;
    background-color: antiquewhite;
}

#kongurentogin{
    grid-area: kongurentogin;
    background-color: azure;
}

#synkronogasynkron{
    grid-area: synkronogasynkron;
    background-color: beige;
}

#grundantagelser{
    grid-area: grundantagelser;
    background-color: aliceblue;
}

#hparadigme{
    grid-area: hparadigme;
    background-color: aquamarine;
}

#imkmodellen{
    grid-area: imkmodellen;
    background-color: mediumvioletred;
}

#imkbillede{
    grid-area: imkbillede;
    background-color: aliceblue;
    max-width: 100%;
    height: auto;
    
}

#generelimk{
    grid-area: generelimk;
    background-color: orchid;
}

#sparadigme{
    grid-area: sparadigme;
    background-color: beige;
}

#lbillede{
    grid-area: lbillede;
    max-width: 100%;
    height: auto;
}

#lmodel{
    grid-area: lmodel;
    background-color: skyblue;
}

@media screen and (min-width:500px){
    
#pagewrap{
    display: grid;
    grid-gap: 0px;
    grid-auto-columns: 2fr;
    grid-template-areas:
        "kommunikation kommunikation"
        "hvaderk tretyper"
        "kongurentogin synkronogasynkron"
        "grundantagelser grundantagelser"
        "hparadigme hparadigme"
        "imkmodellen imkmodellen"
        "imkbillede imkbillede"
        "generelimk generelimk"
        "sparadigme sparadigme"
        "lbillede lbillede"
        "lmodel lmodel";
    
    }
      
    
@media screen and (min-width:900px){
    #pagewrap{
    display: grid;
    grid-gap: 0px;
    grid-auto-columns: 4fr;
    grid-template-areas:
        "kommunikation kommunikation kommunikation kommunikation"
        "hvaderk hvaderk tretyper tretyper"
        "kongurentogin kongurentogin synkronogasynkron synkronogasynkron"
        "grundantagelser grundantagelser grundantagelser grundantagelser"
        "hparadigme hparadigme hparadigme hparadigme"
        "imkmodellen imkmodellen imkmodellen imkmodellen"
        "imkbillede imkbillede imkbillede imkbillede "
        "generelimk generelimk generelimk generelimk"
        "sparadigme sparadigme sparadigme sparadigme"
        "lmodel lmodel lbillede lbillede";
     }
    
    
}

</style>

    </head>

    <body>

    
<?php include "menu.inc"; ?>
    
    
      
    <div id="pagewrap">
        
        <div id="kommunikation">
        <h1> kommunikation</h1>
        </div>
        
        <div id="hvaderk">
        <h2> Hvad er kommunikation?</h2>
        <p> 
            Kommunikation er en måde at interagere med andre mennesker, det bliver beskrevet ”en proces hvor vi meddeler os til hinanden” så som:
        </p>
        <dl>
        <dt>Det vi siger og gør</dt>
        <dt>Det vi ikke siger og ikke gør </dt>
        <dt>Dem vi siger det til </dt>
        <dd>- Afsender</dd>
        <dd>- Modtager</dd>
        <dd>- Budskab</dd>
        <dt>Vores perception(opfattelse)</dt> 
        </dl>
            
        </div>   
        
        <div id="tretyper">
        <h2> Former for kommunikation</h2>
        <p>
            Alt hvad vi gør er kommunikation, og der findes 3 typer
        </p>

        <dl>
        <dt>Verbal</dt>
        <dd>- Den måde vi taler på</dd>
        <dt>Non- Verbal </dt>
        <dd>- Det vi ikke siger </dd>
        <dd>- Arme (gestik) ansigt (mimik)</dd>
        <dd>- Dette sender meddeler om hvordan det verbale skal tolkes.</dd>
        <dt>Skriftlig kommunikation </dt>
        <dd>- Tekster</dd>
        <dd>- Messenger </dd>
        <dd>- Sms  </dd>
        </dl>  
	
        <p>
            Som multimediedesigner benytter man sig af alle 3 typer, da vi både kommunikere igennem Billeder, film og tekster.
        </p>
        </div>
            
        <div id="kongurentogin">
        <h2> Kongruent og inkongruent kommunikation </h2>
        
        <p>
        Kongruent: 
        </p>
        <p>
            Det kan forklares at der er sammenhæng imellem det man siger og det man gør, så er der tale om kongruent
            Hvis at afsender siger at " du er sød" og viser forelskelse og glæde.
        </p>
        <p>
        Inkongruent: 
        </p>
        <p>
            Dette vil sige at der ikke er en sammenhæng i det man siger og gør. 
            Hvis at afsender siger at " du er sød" og vrisser surt.
            Dette kan lede til misforståelser.     
        </p>    
        
        </div>
        
        <div id="synkronogasynkron">
        <h2> Synkron og Asynkron kommunikation</h2>
        <p>Synkron kommunikation:</p>
        <p>
            Her skal begge parter kommunikerer på samme tid dette kan forgå ved fysisk samtale altså generelt
            hvis man kommunikerer på samme tid 
        </p>
        <p>Asynkron:</p>
        <p>
            Dette vil sige at begge parter ikke kommunikerer synkront men hvis man skriver en E-mail, og der først bliver svaret dagen efter.
        </p>
        
        </div>
            
        <div id="grundantagelser">
        <h2> De 5 grundantagelser</h2>
        
        <dl>
        <dt>
        Man kan ikke ikke-kommunikere
        </dt>
            <dd>
                Man kan ikke undgå at kommunikere.
                Selv om man ikke siger noget til den man står over for, vil man stadig kommunikerer, i det tilfælde vil det være non verbalt. 
            </dd>
        <dt>
        Enhver kommunikation består af to dele: selve indholdet og oplysninger om det indbyrdes forhold, der er mellem dem, der kommunikerer.
        </dt>
            <dd>
                Det afhænger meget af siturationen, og hvem man taler med. 
            </dd>
        <dt>
        Den måde, vi udtrykker os på, og den måde, vi tolker hinandens kommunikation på, afhænger også af det forhold vi har til hinanden.
        </dt>
            <dd>
                hvis man bruger ironi i in måde at kommunikerer på, kan der opstå misforståelser imellem de 2 parter, hvis ikke se kender hinanden så godt. 
            </dd>
        <dt>
        Mennesker kommunikerer både med en digital kode og en analog kode
        </dt>
            <dd>
                Digitale koder er det som bliver sagt hvor at analoge koder er kropssprog, det nonverbale og ens tonefald.
            </dd>
        <dt>
        Kommunikationsudveksling er enten symmetrisk eller asymmetrisk
        </dt>
            <dd>
                når der er symmetri i kommunikationen er trækker det ofte i en positiv retning, da begge parter er lige værdige i kommunikationen hvor imod i en asymetrisk kommunikation kan trække imod konflikt eller misforståelse.
            </dd>
        </dl>
            
        </div>
            
        <div id="hparadigme">
        <h2>Kommunikationsparadigmer</h2>
        <p>
            Man kan dele kommunikationsteorierne op i 2 paradigmer
            Det humanistiske paradigme og det samfundsvidenskabelige paradigme 
        </p>
        
        <h2>Det humanistiske paradigme</h2>
            
        <p>
            Også kendt sominteraktions paradigmet da det er optaget af interaktionen mellem mennesker, 

            Individet er i fokus, og der ligger et overvejende fokus på modtager der ses som aktiv og medskabende.

            Som der også ligger i ordet trækkes der på de humanistiske fag så som sprog, kultur, psykologi kunst osv

            Det som også gør sig gældende her er at der er fokuseret på kvalitative undersøgelser, da man som sagt ligger vægt på individet. Man bygger dem på få men nøje udvalgte recipienter( modtagere) 

            Her er der mere fokus på det unikke, end som det generelle 

            Her er er det også kaldt en induktiv metode, når man benytter sig af kvalitativ metode. 
            Da det handler om en specifik målgruppe, og ikke bare en tilfældig gruppe. 


            Uanset hvilken intention afsenderen har haft er det altid modtageren som bestemmer hvordan han/hun vil afkode det.
            Det er altså op til modtager hvad han/hun vil få ud af det, og derfor spiller modtager en aktiv rolle i dette.
            </p>
        
        <p>
            Karakteristiske træk for humanistisk kommunikation paradigme 
        </p>
            
        <dl>
        <dt>Subjektivt ( selvstændige tanker)</dt>
        <dt>Fortolkning ( individuelle tanker )</dt>
        <dt>Kvalitativ tilgang ( den enkelte)</dt>
        <dt>Induktion</dt>
        <dt>Situations bestemt 
        </dt>
        <dt>Modtager orienteret</dt>
        <dt>Interaktion imellem mennesker </dt>
        <dt>Mennesket ses som aktivt</dt>
        </dl>
            
    </div>
          
        <div id="imkmodellen">  
        <h2>IMK modellen</h2>    
        </div>
            
        <div id="imkbillede">
        <img src="Portfolio/billeder/imkmodellen1.jpg">
        </div>    
            
        <div id="generelimk">
        <p>
            IMK = International markeds kommunikation
        </p>
        <p>
            Ved brug af denne model er afsender og modtager lige værdige.
            Der kan altså ikke ske en kommunikation uden at der er en modtager som deltager. </p>
        
        
        <p>Tekst</p>
        <p>
            Teksten er selve det budskab, der bliver produceret fra afsenderen side for herefter at blive afkodet af modtageren i en kommunikationssituation. Det vil sige, at teksten den markedskommunikation en virksomhed afsender i form af eksempelvis en brochure, reklamefilm og lignende
        </p>
        
        <p> Afsender</p>
        <p>
            Den som vil kommunikere budskabet til en modtager. Den som står bag kommunikationen. 
        </p>
            
        <dl>
        <dt>Tekstintern afsender</dt>
            <dd>Den tekst interne afsender derimod, er sprogligt eller visuelt til stede i teksten.</dd>
        <dt>Tekstekstern afsender</dt>
            <dd>Dette kunne eks. Være reklamebureauet som poster denne reklame. Den tekst eksterne afsender, er ansvarlig for udformningen af teksten, og har således ikke nødvendigvis noget at gøre med det budskab teksten eventuelt indeholder

            </dd>
        <dt>Primær afsender</dt>
            <dd>Den primære afsender er afsenderen, der står bag teksten. En reklame har altså den virksomhed der reklameres for som primær afsender. </dd>
        <dt>Sekundær afsender</dt>
            <dd> Det kunne være en specialist som bliver taget ind, som hjælper med at gøre budskabet mere troværdigt.
            </dd>
            </dl>
            
        <p>Referenten</p>
        <p>
            Dette handler om alt det "teksten" referer til.
            Ofte er det en effekt som et produkt giver. Det er ofte måden et produkt er brandet på, det referer til modtagerens forståelse.
        </p>
        <p>Koden</p>
        <p> 
            Det er vigtigt at modtageren forstår koden, da den kan være forskellig ift. Kultur normer osv.
            Det er et slags sprog modtageren skal kunne tale, for at forstå det rigtigt 
            Hvis koden ikke stemmer overens med kulturen, kan der opstå stor misforståelser.
        </p> 

        <p>Kontekst/kultur</p>
        <p>
            Konteksten / kulturen er det punkt, der danner rammen om produktion og receptionen af teksten og er den umiddelbare situation, hvor teksten befinder sig og kan identificeres ud fra ”hvem?”, ”hvad?”, ”hvor?” og ”hvornår?” spørgsmål. Kulturen kan også have en påvirkning på disse spørgsmål, derfor kan den også have en naturlig påvirkning på teksten 
        </p>
        
        <p> Medier </p>
        
        <p>
            Dette omhandler alle medier, computer, mobil tablet reklamer mm. 
            Medier er den instans hvorigennem teksten transmitteres og formidles, dette er dog ikke ensbetydende med, medier kun er et transportmiddel. Valg af medie skal tillægges en stor rolle, da mediekanalen både kan påvirke budskabet og opfattelsen af budskabet 
            Det skal passe til det budskab man vil formidle
            Det er vigtigt at fokusere på anvendelse og situation
        </p>
        
        <p> Genre</p>
            
        <p>
            Genre er en gruppe af tekster med samme kommunikative formål, og ”hvor dette formål er bestemmende for teksternes trækstruktur og de retoriske strategier” *Frandsen 2004: 57]. En teksts genre er således et resultat af tekstens sproglig og/eller visuelle form, kontekst/kultur og medie. [Frandsen mfl. 2004: 57-58]
        </p>

  
        </div>  
        
        <div id="sparadigme">
        <h2>Det samfundsvidenskabelige paradigme</h2>
        <p>
            I dette paradigme er der fokus på afsenderen.
        <br>   
            I modsætning til det humanistiske paradigme er fagområderne her de samfundsvidenskabelige såsom sociologi, politik, økonomi osv. 
        <br>
            Måden det samfundsvidenskabelige paradigme fungere på er at det fokuserer på den kvantitative metode, altså alle data skal være målbare.
            Her er der ikke fokus på individet, man skal være i stand til at tage en objektiv position, så man ikke sætter personlige præg på situationen.  
        </p>
      
        <p> Karakteristiske træk i det samfundsvidenskabelige paradigme</p>
            
        <dl>
        <dt>Objektivt</dt>
        <dt>Forklaring</dt>
        <dt>Kvantitativ tilgang</dt>
        <dt>Deduktion</dt>
        <dt>Stabile omgivelser </dt>
        <dt>Afsenderorienteret</dt>
        <dt>Transmission</dt>
        <dt>Handlingsanvisende</dt>
        <dt>Modtageren ses som passiv</dt>
        </dl>
            
        </div>
        
        <div id="lbillede">
        <img src="billeder/lasswellsformel1.jpg">
        </div>
            
        <div id="lmodel">
        <h2>Lasswells formel</h2>
        <p> 
        Via Harold D. Lasswells formel ser man på hvad der sker igennem en kommunikation    
        </p>
        <dl>
        <dt>- Hvem</dt>
        <dt>- Siger hvad</dt>
        <dt>- Gennem hvilken kanal</dt>
        <dt>- Til hvem</dt>
        <dt>- Med hvilken effekt?</dt>
        </dl>
           
        </div>    
        
            
        </div> <!-- pagewrap slut --> 
        

<?php include "foot.inc"; ?>

