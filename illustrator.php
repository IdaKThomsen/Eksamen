<?php include "head.inc"; ?> 

<style>
    #pagewrap{
        display: grid;
        grid-gap: 0px;
        grid-auto-columns: 1fr;
        grid-template-areas:
            "Illu"
            "genereltI"
            "flag"
            "vector"
            "toolss"
            "pen"
            "shapetool"
            "cst"
            "logoskive"
            "america"
            "tiltop";

    }
    
    #Illu{
        grid-area: Illu;
        border-bottom: solid #e589ba 1px;
        padding: 10px;
    }
    
    #genereltI{
        grid-area: genereltI;
    }
    
    #flag{
        grid-area: flag;
        padding: 20px;
    }
    
    #vector{
        grid-area: vector;
    }
    
    #toolss{
        grid-area: toolss;
        border-bottom: solid #e589ba 1px;
        padding: 10px;
    }
    
    #pen{
        grid-area: pen;
    }
    
    #shapetool{
        grid-area: shapetool;
    }
    
    #cst{
        grid-area: cst;
    }
    
    #logoskive{
        grid-area: logoskive;
        padding: 20px;
    }
    
    #america{
        grid-area: america;
        padding: 20px;
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
            "Illu Illu"
            "genereltI vector"
            "toolss toolss"
            "pen shapetool"
            "flag cst"
            "logoskive america"
            ". tiltop";

    }
    
    }
    
@media screen and (min-width:900px){
         #pagewrap{
        display: grid;
        grid-gap: 0px;
        grid-auto-columns: 1fr 1fr 1fr;
        grid-template-areas:
            "Illu Illu Illu"
            "genereltI flag vector"
            "toolss toolss toolss"
            "pen shapetool cst"
            "logoskive . america"
            ". . tiltop";
        }
    }
        
</style>


  </head>

  <body>
    
      
   <?php include "menu.inc"; ?>
      
<!-- her starter sidens indhold ------------- --> 
    
    <div id="pagewrap">
        
        
        <div id="Illu">
                <h1>Illustrator</h1> 
        </div>
            
        <div id="genereltI">
            <h2> Hvad er Illustrator?</h2>
            <p> 
                Illustrator er et program hvor der er mulighed for at tegne og udvikle logoer
                Man arbejder mest i lag så man arbejder non destruktivt. 
                Det giver mest mening at skabe noget fra bunden i illustrator, da det ville være dumt og trække billeder ind i det, fordi at de er pixelbasseret. 
                Det kunne bla være logoer som bliver lavet. 
            </p>
        </div>
        
        <div id="flag">
            <img id="amfalg" src="billeder/amerikanskflag.png">
        
        </div>
        
        <div id="vector">
            <h2>Vector baseret </h2>
            <p> 
                Illustrator er et vector baseret Dvs.man kan skalerer næsten uendeligt, hvilket resulterer i at hvis man laver en prik, så ville man kunne printe den ud så ville den stadig se lige så intakt ud, modsat Photoshop som arbejder i pixels. Man mister altså ikke kvalitet hvis man zoomer i Illustrator. 
            </p>
        </div>
        
            <div id="toolss">
            <h2> Tools </h2>
            </div>
                
        <div id="pen">
                <dl> 
                    <dt>Pen tool </dt>
                    <dd>
                        Giver dig mulighed for at skabe formerne selv, man kan altså i frihånd tegne hvad man vil. 
                    </dd>
                </dl>
        </div>
        
         <div id="shapetool">
                <dl> 
                    <dt>Shape tool</dt>
                    <dd>
                        Bruges til at skabe en bestemt figur, der er nogle som allerede er "lavet" eksempelvis en stjerne, firkant eller elipse 
                    </dd>
                </dl>
        </div>
            
        <div id="cst">
                <dl> 
                    <dt>Custom shape tool</dt>
                    <dd>
                        Er et værktøj som man bruger til at samle flere shapes så det komme til at blive en sammenhængende figur.
                    </dd>
                </dl>
        </div>
            
        <div id="logoskive">
            <img id="logo" src="billeder/cirkuslogo.png">
        </div>
        
        <div id="america"> 
            <img id="cptamerica" src="billeder/America.jpg">
        </div>
        
            
        <div id="tiltop">
            <a href="http://idak0001.web.eadania.dk/Portfolio/illustrator.php"><img src="billeder/%20blomsttop.jpg"></a>
        </div>
        
    
        
    </div>  <!-- ---------- pagewrap slutter --------------- !-->  
    
      
        
<!-- her slutter sidensindhold ************** --> 
        
    <?php include "foot.inc"; ?>