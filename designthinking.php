 <?php include "head.inc"; ?>   
<style>
    #pagewrap{
        display: grid;
        grid-gap: 0px;
        grid-auto-columns: 1fr;
        grid-template-areas:
            "designtp"
            "hvaderdt"
            "opgaven"
            "de5fase"
            "emperz"
            "define"
            "ideate"
            "prototyp"
            "test"
            "video"
            "video1"
            "video2"
            "kilde"
            "tiltop"
            ;

    }
    
    #designtp{
        grid-area: designtp;
        border-bottom: solid #e589ba 1px;
    }
    
    #hvaderdt{
        grid-area: hvaderdt;
    }
    
    #opgaven{
        grid-area: opgaven;
    }
    
    #de5fase{
        grid-area: de5fase;
        border-top: solid #e589ba 1px;
        padding: 10px;
    }
    
    #emperz{
        grid-area: emperz;
    }
    
    #define{
        grid-area: define;
    }
    
    #ideate{
        grid-area: ideate;
    }
    
    #prototyp{
        grid-area: prototyp;
    }
    
    #test{
        grid-area: test;
    }
    
    #video{
        grid-area: video;
        border-top: solid #e589ba 1px;
        padding: 10px;
    }
    
    #video1{
        grid-area: video1;
        text-align: center;
        padding: 10px;
    }
    
    #video2{
        grid-area: video2;
        text-align: center;
        padding: 10px;
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
            "designtp designtp"
            "hvaderdt opgaven"
            "de5fase de5fase"
            "emperz define"
            "ideate prototyp"
            "test test"
            "video video"
            "video1 video2"
            "kilde tiltop"
            ;

    }
}
@media screen and (min-width:900px){
     #pagewrap{
        display: grid;
        grid-gap: 3px;
        grid-auto-columns: 1fr;
        grid-template-areas:
            "designtp designtp designtp"
            "hvaderdt hvaderdt opgaven"
            "de5fase de5fase de5fase"
            "emperz define ideate"
            "prototyp test test"
            "video video video"
            "video1 . video2"
            "kilde tiltop tiltop"
            ;
        }
} 
</style>


  </head>

  <body>
    
      
   <?php include "menu.inc"; ?>
      
<!-- her starter sidens indhold ------------- --> 
    
    <div id="pagewrap">
        
        <div id="designtp">
            <h1>Design Thinking Projekt</h1> 
        </div>
        
        <div id="hvaderdt">
            <h2>Starten</h2>
            <p> 
                Hele projektet startede med at vi blev delt ind i tomandsgrupper, der efter trak vi det produkt som vores side skulle handle om. 
                Sofie og jeg trak "Semper grød " 
                Vores opgave var at tage udgangspunkt i det produkt vi fik udleveret.
                Hele processen er udarbejdet via Design thinking.
            </p>
        </div>
        
        <div id="opgaven">
            <h2>Opgaven</h2>
            <p> 
                Sådan lød vores opgave vi fik stillet:
                <br> 
                "I projektet arbejdes der målrettet på at designe den bedst mulige løsning. Løsningen præsenteres i form af en prototype og tilhørende forklaring (video).
                Emnet for projektet er udlån og reservation."
            </p>
        </div>
        
        <div id="de5fase">
                <h1>De 5 faser</h1> 
            </div>
        
        
        <div id="emperz">
            <h2>Fase 1 - Empathize</h2>
            <p> 
                Her gælder det om at være åben og nysgerrig, og sørge for at få indsamlet så meget data omkring problemstillingen som overhovedet muligt. 
                Man skal altså sørge for at forstå hvad brugens problem er, man skal være meget opmærksom på at man ikke må finde løsninger allerede nu. 
            </p>
            <p>
                Da vi sad i denne fase lavede vi først en overvejelse over hvad vores muligheder var ud fra det givet emne, vi valgte klub. Efterfølgende lavede vi en ny brainstorm hvor vi skrev op hvilke sportsgrene vi kunne vælge hvor udlejning og udlån spillede en rolle. Ydermere stillede vi os selv spørgsmål, som gjorde os klar til at snakke med dem som var inden under vores valgte kategori.
            </p>
        </div>
        
        <div id="define">
            <h2>Fase 2 - Define </h2>
            <p> 
               Når man befinder sig i define fasen, så handler det om at få lavet en struktur over alt det information man har fået indsamlet, på den måde kan man finde frem til et fælles problem, og på den måde arbejde sig frem til en problemstilling. Her er også vigtigt at man arbejder sig hen i et mere specifik definition.
            </p>
            <p>
                Da vi havde snakket med folk fra de forskellige klubber, kunne vi hurtigt finde frem til en række fælles træk ved hver af klubberne, vi lavede da en ny brainstorm for hver af sportsgrenene, og fandt frem til hvilke problemer der var mest væsentlige at tage fat i, på en måde kunne vi komme frem til en problemstilling som lød: struktur, dokumentation, konsekvens. 
                Alle dækker over problemer som er i klubberne i ift. udlåning af udstyr.

            </p>
        </div>
        
         <div id="ideate">
            <h2>Fase 3 - Ideate </h2>
            <p> 
                Først her starter idegenerering, ud fra problemstillingen må man nu begynde at komme op med ideer til at løse de problemer man har fundet frem til via alle informationerne man har indsamlet. Når man er i Ideate fasen er det vigtigt at være åben igen, man skal ikke bare tage den første og bedste ide der falder en ind, med derimod være nysgerrig igen.
            </p>
            <p>
                Vi lavede en brainstorm over de ideer vi syntes der kunne være med til at løse problemet, vi fandt dog hurtigt frem til at vi ville bruge ideen "overbliksapp" og på den måde vil det blive nemmere for brugeren at låne udstyr. Her kom vi med ideer til hvad appens funktioner skulle være, og hvad den skal indeholde.
            </p>
        </div>
        
        <div id="prototyp">
            <h2>Fase 4 - Prototype  </h2>
            <p> 
                I denne fase udarbejder man en prototype af ens idé, den skal indeholde de ting man er kommet frem til igennem processen, På den måse sikre man sig det bedste resultat. 
                Her planlægger man også hvordan ens design/layout bliver, og man skal hele tiden huske at brugeren er i fokus.  
            </p>
            <p>
                Vi satte os ned og begyndte at lave wireframes, og på den måde kom vi frem til hvordan appen ville kunne fungere bedst. Vi havde igennem hele fasen i tankerne hvad der vil være den mest naturlige løsning ift. "hvilken side skal komme først?", "hvad skal der ske når man trykker her?" vi blev hele tiden klogere på hvordan vi frem til det bedste færdige resultat. 
            </p>
        </div>
        
        <div id="test">
            <h2>Fase 5- Test </h2>
            <p> 
               Her tester man det færdige produkt, det skal gerne gøres af personer som ikke har været en del af dit projekt, ellers er dataene man indsamler ikke troværdige. Når man er kommet til test fasen, skal man være opmærksom på at det kan lede til ændringer, da det ikke er sikkert test personerne finder din tiltænkte løsning som den bedste, men det er en el af test fasen. Her er det meningen at man skal se om der er mulighed for forbedringer, eller ændringer. 
  
            </p>
            <p>
                Da vi kom til test fasen lagde vi vores prototype op på et bord, og bedte folk om at teste den. Vi kom hurtigt frem til at folk ikke brugte appen som vi havde tænkt den skulle, så efter en del brugertests lavede vi nogle få rettelser, og testede så igen. Til sidst fandt vi frem til den bedste mulige prototype til vores app. 
            </p>
        </div>
        
        <div id="video">
                <h1>Videoer</h1> 
        </div>
        
        
        <div id="video1"> 
            <p> Video fra første og anden dag </p>
            <a href="https://www.youtube.com/watch?v=u0RLMGxWwR8&t=1s&fbclid=IwAR1zUKVKZ_ZY7RZppJgIJYh37t2fptSRYSSwjFRlNt3c62BYQQ5Lz097i1s" target="_blank"><img src="billeder/youtubelogo.png"> </a>
        </div>
        
        <div id="video2"> 
            <p> Video fra tredje og fjerde dag</p>
            <a href="https://www.youtube.com/watch?v=w2_737BU6yA&t=3s"  target="_blank"><img src="billeder/youtubelogo.png"> </a>
        </div>
        
        <div id="tiltop">
            <a href="http://idak0001.web.eadania.dk/Portfolio/index.php"><img src="billeder/%20blomsttop.jpg"></a>
        </div>
        
        <div id="kilde">
            <h4> Kilder </h4> 
            <h4> Design Thinking - Interaction design foundation - Artikel/video</h4> 
            <h4> Design thinking - Niels Østergaard - PDF</h4>  
            <h4> innovation.sites.ku.dk/metoder/ - Hjemmeside </h4>
        </div>
      
    </div> <!--  ---------- pagewrap slutter --------------- !-->  
    
      
        
<!-- her slutter sidensindhold ************** --> 
        
    <?php include "foot.inc"; ?>