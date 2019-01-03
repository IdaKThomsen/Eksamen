<?php include "head.inc"; ?>   
<style>
    #pagewrap{
        display: grid;
        grid-gap: 0px;
        grid-auto-columns: 1fr;
        grid-template-areas:
            "onepage"
            "starten"
            "reasearch"
            "empert"
            "userstories"
            "fulist"
            "heri"
            "designfas"
            "produktionsfasen"
            "reflektion"
            "semper"
            "tiltop"
            ;

    }
    
    #onepage{
        grid-area:onepage;
        border-bottom: solid #e589ba 1px;
    }
    #starten{
        grid-area:starten;
        border-bottom: solid #e589ba 1px;
    }
    #reasearch{
        grid-area:reasearch; 
    }
    #empert{
        grid-area:empert; 
    }
    #userstories{
        grid-area: userstories;
    }
    #fulist{
        grid-area: fulist;
    }
    
    #heri{
        grid-area: heri;
    }
    
    #designfas{
        grid-area: designfas;
    }
    
     #produktionsfasen{
        grid-area: produktionsfasen;
    }
    
     #reflektion{
        grid-area: reflektion;
    }
    
     #semper{
        grid-area: semper;
        border-top: solid #e589ba 1px;
        
    }
    
    #tiltop{
            grid-area: tiltop;
            max-height: 100%;
            text-align: right;
            padding: 20px;
            }
    
    iframe{
        width: 100%;
        height: 500px;
    }
    
    
@media screen and (min-width:500px){
    #pagewrap{
        display: grid;
        grid-gap: 0px;
        grid-auto-columns: 1fr;
        grid-template-areas:
            "onepage onepage"
            "starten starten"
            "reasearch reasearch"
            "empert userstories"
            "fulist heri"
            "designfas designfas" 
            "produktionsfasen reflektion"
            "semper semper"
            "tiltop tiltop"
            ;
        }  
    
}
    
@media screen and (min-width:900px){
    #pagewrap{
        display: grid;
        grid-gap: 0px;
        grid-auto-columns: 1fr;
        grid-template-areas:
            "onepage onepage onepage"
            "starten starten starten"
            "reasearch reasearch reasearch"
            "empert empert empert"
            "userstories fulist heri" 
            "designfas designfas designfas"
            "produktionsfasen reflektion reflektion"
            "semper semper semper"
            "tiltop tiltop tiltop"
            ;

    }

}
    
</style>


  </head>

  <body>
    
      
   <?php include "menu.inc"; ?>
      
<!-- her starter sidens indhold ------------- --> 
    
    <div id="pagewrap">
        
        
            <div id="onepage">
                <h1>Onepage</h1> 
            </div>
            
            <div id="starten">
            <h2>Starten</h2>
            <p> 
                Hele projektet startede med at vi blev delt ind i tomandsgrupper, der efter trak vi det produkt som vores side skulle handle om. 
                Sofie og jeg trak "Semper grød " 
                Vores opgave var at tage udgangspunkt i det produkt vi fik udleveret.
                Hele processen er udarbejdet via Design thinking.
            </p>
            </div>
            
            <div id="reasearch">
                <h2>Reasearch  fasen</h2> 
            </div>
        
            <div id="empert">
            <h2>Empathize</h2>
            <p> 
                Vi startede hele projektet med empathize fasen. 
                Her lavede vi brainstorms over hvilke folk der kunne være interessenterne til produktet. På den måde kom vi hurtigt frem til at vi ville være en mulighed at vores målgruppe var outdoor folk. Her lavede vi en række spørgsmål som vi stillede til folk som var inden for kategorien "outdoor", vi fik en kæmpe respons på vores spørgsmål, og kunne nemt finde frem til det vi ville arbejde med. Ud fra deres svar var det nemt at finde frem til userstories, og efterfølgende lave en feature unfeature liste. Vi fik også lavet et hierarki over hvad vi syntes der skulle vises på siden.  
            </p>
            </div>
            
            <div id="userstories">
            <h2>Userstories</h2>
            <p> 
                Som løber ønsker jeg et lille og let produkt så jeg nemt kan spise det på min løbe tur. 
                Som vandre ønsker jeg en snack som er lille og næringsrig så jeg kan nå mine mål hurtigere. 
                Som vandre ønsker jeg en emballage der er let at tage med igen så jeg ikke sviner til i naturen. 
            </p>
            </div>
            
          <div id="fulist">
            <h2>Feature / unfeature</h2>
            <p> 
                feature: 
                <br>
                Information om Semper 
                Guide til at folde sammen 
                Hvor nem den er at have med

                Unfeature: 
                <br>
                Salg 
                Fokus på emballeringen ift. til miljøet 
                Fokus på indholdet 
                Andre Semper produkter 
            </p>
            </div>
        
            <div id="heri">
            <h2>Hierarki</h2>
            <dl>
                <dt>Information om produktet </dt>
                <dt>Historie om os, og hvorfor vi anbefaler Semper grød</dt>  
                <dt>3 billeder hvor det vises hvor nemt det er at have den med på tur </dt>  
                <dt>En video der viser hvor nem den er at folde sammen, og tage med sig igen </dt>
                <dt>Anmeldelser fra folk der syntes om Semper grød.</dt>  
                <dt>SO-ME </dt>
            </dl>  
            </div>
        
            <div id="designfas">
            <h2>Design fasen</h2>
            <p> 
                Efter at have defineret problemet bevægede vi os videre til Idefasen, her begyndte vi at finde på ideer som ville kunne hjælpe os med at få brandet produktet til en ny målgruppe. Her begyndte vi at arbejde med ideer til hvordan vores side skulle se ud. 
            </p> 
            <p>

                Vi udarbejdede et moodbord, som. Skulle stå til baggrund for vores farvevalg. 
                Her gik vi efter at holde de farver som allerede var på emballeringen, og ud over det ville vi gerne sætte mere fokus på Outdoor livet, og derfor valgte vi at tilføje mere grøn, rød og orange - da det passede lige til årstiden vi lavede projektet i. 
            </p>
            <p>

                Vi havde valgt en typografi, som passede godt til vores design og gennerelle tema, men vi lavede den fejl at vi ikke brugte det igennem hele vores design, vi glemte det simpelthen. Det har været en god lærestreg, fordi nu er jeg meget opmærksom på om mine ting har de rigtige fonte og om det bliver vist rigtigt i forkelige browsere.  
            </p>
            <p>
                Vi udarbejdede wireframes til 3 størrelser skærme.
                Dette var en lang proces, da designet ikke er det samme hele vejen igennem. 
                Vi startede med at arbejde på wireframen til mobilversionen, og kom frem til hvordan den skulle fremstå, derefter tablet og til sidst til en stor skærm.
                Det var en stor hjælp at få de tanker vi havde skrevt ned på et papir, så vi begge vidste hvor vi genre ville hen. 
            </p>
            </div>   
            
            <div id="produktionsfasen">
            <h2>Produktionsfasen</h2>
            <p> 
                Da vi begyndte at arbejde i produktionsfasen gik det hurtigt op for os at vi skulle have været mere grundige med vores wireframes som vi udarbejde i Photoshop, vi ville have gjort det nemt for os selv, hvis de var gjort helt færdige. Selv om det var et hul på vejen, så fik vi alligevel kodet siden færdigt, og comittet den til github, så vi var klar til at fremlægge den. 
            </p>
            </div>
        
            <div id="reflektion">
            <h2>Refleksion</h2>
            <p> 
                Igennem hele processen kunne jeg mærke at det var mere udfordrende end jeg havde forventet. Jeg har ofte ideer til hvordan tingene skal se ud, inde i mit hoved men jeg overvurderer noglegange mine evner ift. kodnings. Så det kan godt komme til at ende uf i at tingene ikke helt bliversom man ønsker.
                <br>
                Da vi skulle til at comitte siden til github, opdager vi hvor stor siden er, pga de billeder vi har lagt på siden. Vi når desværre ikke at rette i det, hvilket resulterer i at siden loader meget langsomt. Men alle disse udfordringer har ledt til meget mere forståelse og viden inden for kodning og faserne.
                
            </p>
            </div>

        <div id="semper">
        <p> Her er vores færdige side </p>    
        <iframe src="http://idak0001.web.eadania.dk/Onepage/"></iframe>
        </div>        
        
      
        <div id="tiltop">
             <a  href="http://idak0001.web.eadania.dk/Portfolio/index.php"><img src="billeder/%20blomsttop.jpg"></a> 
        </div>
        
      
    </div> <!--  ---------- pagewrap slutter --------------- !-->  
    
      
        
<!-- her slutter sidensindhold ************** --> 
        
    <?php include "foot.inc"; ?>