  <?php include "head.inc"; ?>   
<style>
    #pagewrap{
        display: grid;
        grid-gap: 0px;
        grid-auto-columns: 1fr;
        grid-template-areas:
            "farver"
            "farve"
            "prim"
            "sekun"
            "terti"
            "farvehjulbil"
            "smyk"
            "klm"
            "kulør"
            "mæthed"
            "lyshed"
            "farvesætning"
            "monokrom"
            "analog"
            "komplementær"
            "skomplementær"
            "triader"
            "tetriader"
            "typo"
            "infotyp"
            "typef"
            "goderåd"
            "kilde"
            "tiltop";

    }

    #farver{
        grid-area: farver;
        border-bottom: solid #e589ba 1px;
    }    
    
    #farve{
        grid-area: farve;
    }
    
    #farvehjulbil{
        grid-area: farvehjulbil;
    }
    
    #prim{
        grid-area: prim;
    }
    
    #sekun{
        grid-area: sekun;
    }
    
    #terti{
        grid-area: terti;
    }
    
    #smyk{
        grid-area: smyk;
        border-top: solid #e589ba 1px;
    }
    
    #klm{
        grid-area: klm;
    }
    
    #kulør{
        grid-area: kulør;
    }
    
    #mæthed{
        grid-area: mæthed;
    }
    
    #lyshed{
        grid-area: lyshed;
    }
    
    #farvesætning{
        grid-area: farvesætning;
        border-top: solid #e589ba 1px;
    }
    
    #monokrom{
        grid-area: monokrom;
    }
    
    #analog{
        grid-area: analog;
    }
    
    #komplementær{
        grid-area: komplementær;
    }
    
    #skomplementær{
        grid-area: skomplementær;
    }
    
    #triader{
        grid-area: triader;
    }
    
    #tetriader{
        grid-area: tetriader;
    }
    
    #typo{
        grid-area: typo;
        border-top: solid #e589ba 1px;
    }
    
    #infotyp{
        grid-area: infotyp;
    }
    
    #typef{
        grid-area: typef;
    }
    
    #goderåd{
        grid-area: goderåd;
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
            "farver farver"
            "farve farve"
            "prim sekun"
            "terti farvehjulbil"
            "smyk smyk"
            "klm klm"
            "kulør mæthed"
            "lyshed lyshed"
            "farvesætning farvesætning"
            "monokrom analog"
            "komplementær skomplementær"
            "triader tetriader"
            "typo typo"
            "infotyp infotyp"
            "typef goderåd"
            "kilde tiltop";

    }

    
}
    
@media screen and (min-width:900px){
    #pagewrap{
        display: grid;
        grid-gap: 0px;
        grid-auto-columns: 1fr 1fr 1fr;
        grid-template-areas:
            "farver farver farver"
            "farve farve farve"
            "prim sekun terti"
            ". farvehjulbil ."
            "smyk smyk smyk"
            "klm klm klm"
            "kulør mæthed lyshed"
            "farvesætning farvesætning farvesætning"
            "monokrom analog komplementær"
            "skomplementær triader tetriader"
            "typo typo typo"
            "infotyp typef goderåd"
            "kilde tiltop tiltop";

    }

    
}
    
    
</style>


  </head>

  <body>
    
      
   <?php include "menu.inc"; ?>
      
<!-- her starter sidens indhold ------------- --> 
    
    <div id="pagewrap">
        
            <div id="farver">
                <h1>Farver</h1> 
            </div>
            
            <div id="farve">
            <h2>Farvehjulet</h2>
            </div>
    
        <div id="prim">
            <h2> Primære farver </h2>
            <p>
                RGB står for Rød, Gul, blå
                255%  svare det til 100% rød - den kan ikke blive mere rød eks. 
                Og når man giver alle 3 farver 255% så får man hvid.
                Farver der er klare.
                Når man bruger RGB farver er det beregnet til skærmbrug.
            </p>
                
        </div>
        
        <div id="sekun">
            <h2>Sekundære  farver </h2>
            <p>
                Blandet af to primære farver
            </p>
        </div>
        
        <div id="terti">
            <h2>Tertiære farver  </h2>
            <p>
                Blandet imellem primære og sekundære.
                Et farve system er ikke absolut, da det kan variere afhængigt af mennesket og kulturen. 
                Farver som stod overfor hinanden, defineredes som komplementære, og skabte en optisk kontrast.
            </p>
        </div>
            
        <div id="farvehjulbil">
                <img id="fbillede" src="billeder/farvehjul.jpg">
        </div>
            
        <div id="smyk">
            <h2> SMYK </h2>
            <p> 
                Den er substraktiv  - det vil sige at den trækker farver ud. Så hvis man blander primærfarver i SMYK så ender man med sort, og omvendt med RGB så bliver det hvidt.Denne er beregnet til tryk.
            </p>
        </div>
        
        <div id="klm">
            <h2> Kulør mæthed og lyshed </h2>   
        </div>
        
        <div id="kulør">
            <h2> kulør </h2>
            <p> 
                En graduering eller variation af en farve
                Man kan gå eks. Fra lys til mørk
            </p>   
        </div>
        
        <div id="mæthed">
            <h2> Mæthed </h2>
            <p> 
                En kulør blandes med forskellige mængder af gråtone Det siges også, at farven får en ‘valør’
                Jo mere grå du kommer i, jo mindre mættet bliver den. 
            </p>   
        </div>
        
        <div id="lyshed">
            <h2> Lyshed </h2>
            <p> 
                En kulør blandes med ren sort eller hvid 
            </p>   
        </div>
        
         <div id="farvesætning">
            <h2> Farvesammensætning </h2>   
        </div>
        
         <div id="monokrom">
            <h2> Monokrom </h2>
            <p> 
                Én kulør, som justeres ifht. lyshed og mætning. Den går altså nærmest fra hvid til sort i nuancer af samme farve.
            </p>   
             <img id="monobillede" src="billeder/monokrom.png">
        </div>
        
        <div id="analog">
            <h2> Analog </h2>
            <p> 
                Én kulør indenfor et bredere spektrum af lyshed og mætning.
            </p>   
            <img id="anabillede" src="billeder/analog.png">
        </div>
        
        <div id="komplementær">
            <h2> Komplementær </h2>
            <p> 
                 Farver der ligger direkte overfor hinanden i farvecirklen.
            </p>  
            <img id="kompbillede" src="billeder/komplim%C3%A6nt%C3%A6r.png">
        </div>
        
        <div id="skomplementær">
            <h2> Split komplimentær </h2>
            <p> 
                 Farver der ligger direkte overfor hinanden, med et lidt bredere farvespektrum. 
            </p>   
            <img id="skompbillede" src="billeder/splitk.png">
        </div>
        
        <div id="triader">
            <h2> Triader </h2>
            <p> 
                 Tre farver som ligger lige langt fra hinanden.  
            </p>   
            <img id="tribillede" src="billeder/triader.png">
        </div>
        
         <div id="tetriader">
            <h2> Tetriader (dobbeltkomplementære) </h2>
            <p> 
                Fire farver som er komplementære.
            </p>
             <img id="tetbillede" src="billeder/tetriader.png">
        </div>
        
         <div id="typo">
            <h2> Typografi </h2>   
        </div>
        
        <div id="infotyp">
            <h2> Ikke kun skrifttyper </h2>
            <p> Da jeg første gang hørte ordet "Typografi" tænkte jeg at der var tale om skrifttyper, også kaldt "fonts" men det er faktisk meget mere end det.
            <br>
            Det kan også være:</p>
            <dl>
                <dt>Fonte</dt>
                    <dd>hold dig til 2 fonte, hvis det er nødvendigt, så tag 3.</dd>
                <dt>Kolonner</dt>
                <dt>Læsbarhed</dt>
                <dt>Layout</dt>
                <dt>Billeder</dt>
                <dt>Logoer</dt>
            </dl>
        </div>
        
        <div id="typef">
            <h2> Typeface </h2> 
            <p>
                En font family er den skrift type man vælger, jeg har eks. valgt "raleway" men for at lave den til en typeface skal man også vælge en "weight" det kan være italic(kursiv), bold(fed), regular(alm.) der findes mange kombinationer. 
                Men for at få en "typeface" skal man sltså kobinere font family og weight. 
            </p>
        </div>
        
        <div id="goderåd">
            <img id="gr" src="billeder/goderaadbil.jpg">
        </div>
        
        <div id="kilde">
            <h4> Kilder </h4> 
            <h4> Farvelaere - Carsten Bogner - PDF </h4> 
            <h4> Typografi - Carsten Bogner - PDF </h4>  
        </div>
        
        <div id="tiltop">
             <a href="http://idak0001.web.eadania.dk/Portfolio/farver.php"><img src="billeder/%20blomsttop.jpg"></a>
        </div>
      
    </div> <!--  ---------- pagewrap slutter --------------- !-->  
    
      
        
<!-- her slutter sidensindhold ************** --> 
        
    <?php include "foot.inc"; ?>