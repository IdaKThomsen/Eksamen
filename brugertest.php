<?php include "head.inc"; ?>   

<style>
        #pagewrap{
            display: grid;
            grid-gap: 0px;
            grid-auto-columns: 1fr;
            grid-template-areas:
                "Brugert"
                "viden"
                "posit"
                "hermaneutik"
                "Metodiskeo"
                "Kvantitativ"
                "Kvalitativ"
                "Brugerinddragelse"
                "Kortsotering"
                "kilde"
                "tiltop";
            }
    
    #Brugert{
        grid-area: Brugert;
        border-bottom: solid #e589ba 1px;
    }
    
    #viden{
        grid-area: viden;
        border-bottom: solid #e589ba 1px;
    }
    
    #posit{
        grid-area: posit;
    }
    
    #hermaneutik{
        grid-area: hermaneutik;
    }
    
    #Metodiskeo{
        grid-area: Metodiskeo;
        border-top: solid #e589ba 1px;
    }
    
    #Kvantitativ{
        grid-area: Kvantitativ;
    }
    
    #Kvalitativ{
        grid-area: Kvalitativ;
    }
    
    #Brugerinddragelse{
        grid-area: Brugerinddragelse;
    }
    
    #Kortsotering{
        grid-area: Kortsotering;
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
                "Brugert Brugert"
                "viden viden"
                "posit hermaneutik"
                "Metodiskeo Metodiskeo"
                "Kvantitativ Kvalitativ"
                "Brugerinddragelse Kortsotering"
                "kilde tiltop";
            }
       
    }
    
  
    @media screen and (min-width:900px){
        #pagewrap{
            display: grid;
            grid-gap: 0px;
            grid-auto-columns: 1fr 1fr 1fr;
            grid-template-areas:
                "Brugert Brugert Brugert"
                "viden viden"
                "posit hermaneutik hermaneutik"
                "Metodiskeo Metodiskeo Metodiskeo"
                "Kvantitativ Kvalitativ Kvalitativ"
                "Brugerinddragelse Kortsotering Kortsotering"
                "kilde tiltop tiltop";
            }
        
    }
    
    
</style>

  </head>

  <body>
    
      
   <?php include "menu.inc"; ?>
      
<!-- her starter sidens indhold ------------- --> 
    
    <div id="pagewrap">
        
        <div id="Brugert">
        <h1>Brugertest</h1>
        </div>
        
        <div id="viden">
        <h2> Videnskabsteori </h2>
        <p> 
            "Videnskabsteori defineres som teorien om videnskab"
            <br>
            Vi bruger videnskabsteori til at dykke ned i den viden vi har.
            På den måde kan vi finde ud af om der findes andre virkeligheder  
            Der har været en kæmpe diskussion omkring en kjole 
            Er den blå og sort eller er den hvid og guld, der kan man argumenterer for at der findes flere virkeligheder fordi der er nogle der ser den som hvid /guld. Selvom at det er bevist at den er sort/blå. Ved at bruge videnskabelige metoder, kommer vi frem til hvordan vi kan se vores brugeres virkelighed, hvilket er vigtigt for at ramme ens målgruppe perfekt.  
        </p>
        </div>
        
        <div id="posit">
        <h2>Positivisme</h2>
        <p>
            Her er der fokus på at der kun er én sandhed, det vil sige at når det er videnskabeligt bevist at kjolen er blå/sort 
            Så er det sandheden. Så selv om at nogle ser den som hvid/guld så er det forkert. Det er en metoder der bliver brugt til at indsamle data som kan måles og vejes ud fra virkeligheden. Eksempelvis kan man lave en brugertest hvor man holder øje med hvor folk klikker henne, men ikke hvorfor de klikker der hvor de gør, fordi det bliver for hermeneutisk. Dette er en kvantitative tilgang. 
        </p>
        </div>
        
        <div id="hermaneutik"> 
        <h2> Hermeneutik </h2>
        <p> 
            Her vil man fokuserer på den enkeltes verden. Man tager udgangspunkt i kvalitative data da man gerne vil forstå den enkeltes handling. 
        </p>
            <img src="billeder/hermaeu.png">
        <p>
            Denne model viser at man kan komme med en forståelse for noget eks. Et digt og lave en fortolkning på det og få en ny forståelse, og på den måde kan man blive ved. Denne metode bruges når man gerne vil vide hvorfor at brugerne klikker på knappen, altså man vil have en forståelse for den enkeltes handling. 
        </p>
        </div>
        
        <div id="Metodiskeo"> 
        <h2> Metodiske overvejelser </h2>
        <p>
            Det er vigtigt at gøre sig overvejelser i forhold til hvilke metoder man benytter sig af. 
            Det kommer nemlig meget an på hvad man vil frem til. 
            <br>
            Eks " hvilke spørgsmål vil jeg besvare med undersøgelsen?" 
            <br>
            Ved at stille sig selv spørgsmål som dette, kan man få en ide om hvordan man kommer frem til det bedste valg. 
        </p>
        </div>
        <div id="Kvantitativ"> 
        <h2> Kvantitativ</h2>
        <p> 
            Målbart - Objektiv. 
            Ved kvantitativ metode sørger man for at indsamle data ved at tage de ting som kan måles og vejes. 
            Altså kan man eksempelvis lave spørgeskemaer, som har faste svar muligheder, på den måde kan man sætte tal på resultatet.  
            Dette er en god måde at få indsamlet meget data, det er dog mindre personligt og er helt modsat af den kvalitativmetode. 
        </p>
        </div>
      
        <div id="Kvalitativ"> 
        <h2> Kvalitativ  </h2>
        <p>
            Når man bruger Instagram er det vigtigt at man tænker på at teksten til ens billede bliver "gemt" som en kommentar, hvilket kan resultere i at folk ikke læser teksten, men bare scroller videre. Det kan derfor være godt at skrive en tekst hen over billedet man ligger op, på den måde kan man sikre sig at folk ser ens budskab. 
            Man kan ikke lave direkte links på ens billeder, derfor er det vigtigt at man har et link på sin profil, så folk bliver sendt det rigtige sted hen. Instagram er også en god måde at skabe en interaktion med kunderne på, man har nemlig mulighed for at "reposte" nogle af kundernes opslag, og det vil give kunden en følelse af at de bliver anerkendt, hvilket kan lede til merslag.
             
        </p>
        </div>
        
         <div id="Brugerinddragelse"> 
        <h2> Brugerinddragelse / test   </h2>
        <p>
            Vi vil gerne inddrage vores brugere for at prøve at forstå de behov som brugeren har. Vi kommer med en hvis forståelse af hvordan noget skal fungere, og ved at præsentere det for vores brugere, kan de Be- eller afkræfte, om vi er på rette spor. Vi inddrager dem derfor for at sørge for at man hele tiden holder sig opdateret, på den måde kan man sige at brugerne sørger for kvalitet til de løsninger man kommer med.
            <br>
            Når man laver brugertests er det vigtigt at fokusere på at det er en gentagende proces, man skal altså blive ved med at holde sig opdateret. Man har en forståelse for noget, og tester den på brugerne, hvilket giver en ny forståelse, som kan hjælpe en med at ramme de præcise mål. Det er derfor vigtigt at blive ved med at teste fra start til slut.
        </p>
        </div>
        
         <div id="Kortsotering "> 
        <h2> Kortsotering   </h2>
        <p>
            Nå man laver en kort sortering, er det for at finde ud af hvordan folk vil kategoriserer de emner man har.Søren, Steffen og jeg lavede en kortsotering på "det bette ismeri" som vi blev introduceret til i Niels timer. Vi lavede en række kategorier, og lagde dem op som vi gerne ville have at det skulle fungere, der efter spurgte vi 3 forskellige elever på skolen, og bedte dem om at sorterer kategorierne, og vi fik 3 meget forskellige svar, men på den måde kom vi frem til at de havde forslag som faktisk gav mere mening end dem vi selv havde antaget. 
            
            <img src="billeder/kortbil.jpg">  
        </p>
        </div>

        <div id="kilde"> 
            <h4> Kilder </h4> 
            <h4> MMD brugertest 101018 - Mariann Daugaard - PP </h4> 
        </div>
        
        <div id="tiltop">
        <a href="http://idak0001.web.eadania.dk/Portfolio/brugertest.php"><img src="billeder/%20blomsttop.jpg"></a>
        </div>
    
      
      
    
    </div>  
    
      
        
<!-- her slutter sidensindhold ************** --> 
        
    <?php include "foot.inc"; ?>