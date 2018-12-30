<?php include "head.inc"; ?>   
<style>
    #pagewrap{
        display: grid;
        grid-gap: 0px;
        grid-auto-columns: 1fr;
        grid-template-areas:
            "gestalt"
            "perception"
            "narhed"
            "konten"
            "lighed"
            "simp"
            "whitesp"
            "ruleof3"
            "figure";

    }
    
    
    #gestalt{
        grid-area: gestalt;
    }
    
    #perception{
        grid-area: perception;
    }
    
    #narhed{
        grid-area: narhed;
    }
    
    #konten{
        grid-area: konten;
    }
    
    #lighed{
        grid-area: lighed;
    }
    
    #simp{
        grid-area: simp;
    }
    
    #whitesp{
        grid-area: whitesp;
    }
    
    #ruleof3{
        grid-area: ruleof3;
    }
    
    #figure{
        grid-area: figure;
    }
    
    #{
        grid-area: ;
    }
    
    
    #tiltop{
            grid-area: tiltop;
            max-height: 100%;
            text-align: right;
            padding: 20px;
            }
    
    #kilde{
        grid-area: kilde;
        border: solid #e589ba 1px;
        margin: 10px;
        }
    
@media screen and (min-width:500px){
    
@media screen and (min-width:900px){
    
    
    
    
</style>


  </head>

  <body>
    
      
   <?php include "menu.inc"; ?>
      
<!-- her starter sidens indhold ------------- --> 
    
    <div id="pagewrap">
        
        <div id="gestalt">
                <h1>Gestaltlovene</h1> 
            </div>
            
            <div id="perception">
            <h2>Perception</h2>
            <p> 
                Perception er opfattelser og fortolkninger af det vi sanser 
                Perception er påvirket af gestaltlovene samt vores baggrund og forventninger 
                Objekt perception er simpelthen vores opfattelse af ydre objekter 
                Man kan ikke bare arbejde med én af lovene, de hænger ofte sammen.
            </p>
            </div>
        
            <div id="narhed">
            <h2>Nærhed - Proximity</h2>
            <p> 
                Objekterne som er tætter på hinanden, opfatter vi som værende forbundet. Nærhed ‘trumfer’ Lighed i bl.a. farver/kontraster
                Det er ét af de første principper som rammer vores opfattelsesevne.
            </p>
            <img src="billeder/naerhed.png">
            </div>
            
            <div id="konten">
            <h2>Kontinuitet - Continuity </h2>
            <p> 
                Elementer som er arrangeret på linje eller kurver. 
                Opfattes som værende tættere på hinanden. 
                Objekter arrangeret på linie eller kurver, opfattes som relaterede i højere grad end hvis de ikke er. Brødkrumme, paragraffer, grafer (både vertikale og horisontale) kommunikerer relation
            <img src="billeder/continue.png">
            </p>
            </div>
    
            <div id="lighed">
            <h2>Lighed- Similarity </h2>
            <p> 
                Farver er den stærkeste måde at skabe lighed på. 
                Denne "lov" er med til at skabe struktur. 
                Visuelle elementer som er ens i form, størrelse, farve og retning opfattes som del af en gruppe. Farver er den stærkeste måde at skabe lighed på. Det kan benyttes til at skabe relationer i navigation, links osv. for at understøtte hierarkiet i sitet. Gennemført styling og content er vigtigt og antyder struktur.
            <img src="billeder/simlaraty.png">
            </p>
            </div>
        
            <div id="simp">
            <h2>Simplicity - prägnanz </h2>
            <p> 
                Når man anvender Simplicity er er det en måde at simplificerer elementer på. 
                Hvis man  kigger på billedet, kan man sagtens at begge billeder skal forstille en stol, men stolen til højre er gjort mere simpel, hvilket kan gøre det mere overskueligt for brugeren hvis man eks. Taler om ikoner på en hjemmeside. 
            <img src="billeder/simply.jpg">
            </p>
            </div>
        
            <div id="whitesp">
            <h2>Luft - White space </h2>
            <p> 
                Jo mere whitespace, jo mere overblik. 
                Anvendes for at dele tingene mere op, skabe overblik. 
                Der er ingen regler omkring hvor meget whitspace man skal anvende, men det kan være med til at skabe et meget moderne og simplistisk udssende hvis man anvender meget, det kan også have den modsatte effekt. Derfor er det vigtigt at overveje hvilket udtryk man vil gå efter, 
            </p>
            </div>
        
            <div id="ruleof3">
            <h2> Rule of thirds</h2>
            <p> 
                Her skaber man fokus, på de helt rigtige felter i billedet. 
                Man inddeler billedet i 9 felter, og så placerer man det man gerne vil have fokus på i skæringspunkterne. 
                Når man anvender "the rule of 3".
            <img src="billeder/ruleoft.png">
            </p>
            </div>
        
            <div id="figure">
            <h2> Figur-grund - Figure-ground</h2>
            <p> 
                Når man taler om figur-grund menes der at man ikke kun kan se forgrunden på billedet, man vil også kunne se baggrunden. Det handler altså om at skelne imellem forgrund og baggrund. 
            <img src="billeder/figureground.jpg">
            </p>
            </div>
        
            
        
        
        
        
        
        
    
        
    
        
        <div id="kilde">
            
            <h4> Kilder </h4> 
            <h4> Gestaltlovene - Carsten Bogner - PDF</h4> 
        </div>
      
       <div id="tiltop">
           <a href="http://idak0001.web.eadania.dk/Portfolio/gestaltlovene.php"><img src="billeder/%20blomsttop.jpg"></a>
        </div>
        
      
    </div> <!--  ---------- pagewrap slutter --------------- !-->  
    
      
        
<!-- her slutter sidensindhold ************** --> 
        
    <?php include "foot.inc"; ?>