<?php include "head.inc"; ?>   
    
<style>
    
    #pagewrap{
        display: grid;
        grid-gap: 0px;
        grid-auto-columns: 1fr;
        grid-template-areas:
            "dmogp"
            "seo"
            "konv"
            "split"
            "strategiger"
            "facebook"
            "insta"
            "kilde"
            "tiltop";
    }
    
    #dmogp{
        grid-area: dmogp;
        border-bottom: solid #e589ba 1px;
    }
    
    #seo{
        grid-area: seo;
    }
    
    #konv{
        grid-area: konv;
    }
    
    #split{
        grid-area: split;
    }
    
    #strategiger{
        grid-area: strategiger;
        border-top: solid #e589ba 1px;
    }
    
    #facebook{
        grid-area: facebook;
    }
    
    #insta{
        grid-area: insta;
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
            "dmogp dmogp"
            "seo seo"
            "konv split"
            "strategiger strategiger"
            "facebook insta"
            "kilde tiltop";
        }
        
    }
     
    
    @media screen and (min-width:900px){
    #pagewrap{
        display: grid;
        grid-gap: 0px;
        grid-auto-columns: 1fr;
        grid-template-areas:
            "dmogp dmogp dmogp"
            "seo seo seo"
            "konv split split"
            "strategiger strategiger strategiger"
            "facebook insta insta"
            "kilde tiltop tiltop";
        }    
    
    }
    
    
    
</style>

</head>

<body>
    
      
   <?php include "menu.inc"; ?>
      
<!-- her starter sidens indhold ------------- --> 
    
    <div id="pagewrap">
        
        <div id="dmogp">
        <h1>Digitale medier og platforme</h1>
        </div>
        
        <div id="seo">
        <h2> SEO </h2>
        <p> 
            Search Engine Optimization
            <br>
            Hvis man ønsker at få sin hjemmeside ført frem i lyset, et det vigtigt at man benytter SEO. 
            SEO er søgemaskine optimering, hvilket vil sige at eksempelvis Google har visse måder at sortere på. Hvis ens side indeholder store billeder, som gør det svært /langsom for brugerne at loade ens side, vil Google ikke sætte den øverst, da den ikke virker hurtigt nok. Derimod hvis at du har arbejdet med dit SEO løbende og testet det, vil det kunne give en bedre effekt. 
        </p>
        </div>
        
        <div id="konv">
        <h2>Konvertering</h2>
        <p>
            Så snart at folk begynder at bruge din hjemmeside, er det vigtigt at se ikke falder fra igen, eksempelvis ved salget. Det er meget vigtigt ikke at ligge fælder for kunderne, så de går væk fra hjemmesiden igen. 
            Man kan miste mange kunder på at ens design ikke er responsivt, eller at hjemmesiden bare ikke er lavet godt nok til mobil versionen. De fleste mennesker  burger deres mobiler til shopping, sociale medier mm. Så det er vigtigt at gå efter reglen "mobile first".
            <br>
            I kan læse mere om responsivt design  <a href="http://idak0001.web.eadania.dk/Portfolio/css.php"> HER </a>
        </p>
        </div>
        
        <div id="split"> 
        <h2> Splittest </h2>
        <p> 
            Der er mange måder at optimere sin konverteringsrate på, en af dem kan være at lave splittest.
        </p>
        <p>
            Her tester man dele på sin hjemmeside, og finder frem til hvad der giver mest trafik på hjemmesiden.
            Man kan eksempelvis teste hvilken farve "køb" knappen skal have, det kan være en god ide at have med i overvejelserne at årstiderne spiller en rolle. I julen er alting for det meste rødt, så der kan man teste at have en rød knap. Man kan teste mange ting, for at finde frem til hvad der virker bedst for ens hjemmeside, men det er vigtigt at der er et formål.
        </p>
        </div>
        
        <div id="strategiger"> 
        <h2> Sociale medier - forskellige strategier </h2>
        <p>
            Når man taler sociale medier er det meget vigtigt at man er opmærksom på at man ikke skal ligge samme strategier til eks. Facebook og Instagram, de to medier har nemlig 2 helt forskellige måder at fungerer på. 
            Dog er det generelt vigtigt at bringe mere personlighed indover opslagene på disse to. Man skal også have med i overvejelserne at, man ikke kan skrive på sin faktiske hjemmeside som man gør på sine sociale medier, det er nemlig to helt forskellige tekst produktioner.  
        </p>
        </div>
        <div id="facebook"> 
        <h2> Facebook</h2>
        <p>
            Her er det vigtigt at man laver korte forståelige opslag, hvor folk kan interagere. På den måde sørger man for at flest muligt ser opslaget, fordi de skriver kommentarer til billedet. Ved at mange folk kommenterer og "liker" opslaget, vil det blive set hos folk som ikke engang kender til ens side. Når man laver et opslag på Facebook er det vigtigt at der er noget visuelt med, man kan nemmere fange folk hvis man tilføjer et billede eller lign. I modsætning til instagram er det ikke en god ide at skrive tekst på sit billede, det er bedre at tilføje det i den tilhørende beskrivelse. Via Facebook kan man også lave klikbare links, hvilket kan sende folk direkte til din hjemmeside, og skabe et salg. 
        </p>
        </div>
      
        <div id="insta"> 
        <h2> Instagram </h2>
        <p>
            Når man bruger Instagram er det vigtigt at man tænker på at teksten til ens billede bliver "gemt" som en kommentar, hvilket kan resultere i at folk ikke læser teksten, men bare scroller videre. Det kan derfor være godt at skrive en tekst hen over billedet man ligger op, på den måde kan man sikre sig at folk ser ens budskab. 
            Man kan ikke lave direkte links på ens billeder, derfor er det vigtigt at man har et link på sin profil, så folk bliver sendt det rigtige sted hen. Instagram er også en god måde at skabe en interaktion med kunderne på, man har nemlig mulighed for at "reposte" nogle af kundernes opslag, og det vil give kunden en følelse af at de bliver anerkendt, hvilket kan lede til merslag.
            
            <br>
            <img src="billeder/faceinsta1.jpg">    
        </p>
        </div>
        
        <div id="kilde"> 
            <h4> Kilder </h4> 
            <h4> Online-Marketing - Carsten Guldborg - pdf  </h4> 
        </div>
        
        <div id="tiltop">
        <a href="http://idak0001.web.eadania.dk/Portfolio/Digitalemedierogplatforme.php"><img src="billeder/%20blomsttop.jpg"></a>
        </div>
        
        
        
    </div>  
    
      
        
<!-- her slutter sidensindhold ************** --> 
        
    <?php include "foot.inc"; ?>