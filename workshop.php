<?php include "head.inc"; ?>   
<style>
    #pagewrap{
        display: grid;
        grid-gap: 0px;
        grid-auto-columns: 1fr;
        grid-template-areas:
            "workshoppp"
            "starten"
            "emne"
            "proces"
            "reflek"
            "formålet"
            "voresopg"
            "faellesbog"
            "tiltop";
    }
    
    
    
    #workshoppp{
        grid-area: workshoppp;
        border-bottom: solid #e589ba 1px;
    }
    
    #emne{
        grid-area: emne;
    }
    
    #proces{
        grid-area: proces;
        border-bottom: solid #e589ba 1px;
    }
    
    #reflek{
        grid-area: reflek;
    }
    
    #formålet{
        grid-area: formålet;
        border-bottom: solid #e589ba 1px;
    }
    
    #voresopg{
        grid-area: voresopg;
    }
    
    #starten{
        grid-area: starten;
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
            "workshoppp workshoppp"
            "starten emne"
            "proces reflek"
            "formålet formålet"
            "voresopg faellesbog"
            "tiltop tiltop";
            }
    
    #reflek{
        grid-area: reflek;
        border-bottom: solid #e589ba 1px;
    }
    
    
    
}
    
@media screen and (min-width:900px){
     #pagewrap{
        display: grid;
        grid-gap: 0px;
        grid-auto-columns: 1fr 1fr 1fr;
        grid-template-areas:
            "workshoppp workshoppp workshoppp"
            "starten starten emne"
            "proces reflek formålet"
            "voresopg faellesbog tiltop";
            }   
    
}
    
</style>


  </head>

  <body>
    
      
   <?php include "menu.inc"; ?>
      
<!-- her starter sidens indhold ------------- --> 
    
    <div id="pagewrap">
        
        
         <div id="workshoppp">
                <h1>Workshop</h1> 
        </div>
            
        <div id="starten">
            <h2>Starten</h2>
            <p> 
                "Et collaborative research-, skrive- og præsentationsprojekt"
                <br>
                Denne workshop er det første projekt vi får lov at arbejde med. Her bliver vi inddelt i grupper og får udleveret nogrle emner vi hver i sær skal arbejde med. 
            </p>
        </div>
    
        
        <div id="emne">
            <h2>Emne</h2>
            <p> 
                Anchor element, borders and backgrounds
            </p>
        </div>
        
         <div id="proces">
            <h2>Proces</h2>
            <p> 
                Vi starter ud med Anchor tag, hvilket vi i starten finder lidt forvirrende, og ved ikke helt hvordan vi skal få vist hvordan det fungerer. Dog efter vi har siddet med det, går med tiden op for os hvordan det kan bruges, og hvor smart det er. 
                Da vi havde færdiggjort Anchor tag, bevægede vi os videre til borders, hvilket vi havde en god forståelse for hvad var, det samme med backgrounds. 
                Her kunne vi vise mange eksempler på hvordan det fungerer.
            </p>
            </div>
        
        
        <div id="reflek">
            <h2>Reflektion</h2>
            <p> 
                Selve fremlæggelsen kunne have været meget bedre hvis vi havde brugt mere tid på at øve os. Udover det havde det været bedre struktureret hvis at vi ikke sprang så meget rundt i koden. 
            </p>
        </div>
        
        <div id="formålet">
            <h2>Formålet</h2>
            <p> 
                Formålet med denne opgave var at skabe en opslagsbog som vi alle kunne benytte hvis man gerne ville vide noget om de emner de andre havde skrevet om. På den måde kunne vi nemt spørge hinanden hvis vi havde brug for hjælp til særlige emner. Folk kunne se i opslagsbogen og vende tilbage til mig hvis at de havde spørgsmål til eks. Borders. 
            </p>
        </div>
        
        <div id="voresopg">
            <h2>Vores Opgave</h2>
            <p> I linket neden under har i mulighed for at se vores færdige opgave.</p>
            <a href="billeder/Anchor-element-and-Borders.pdf" target="_blank"> Vores opgave</a>
        </div>
        
        <div id="faellesbog">
            <h2>Opslagsbogen</h2>
            <p> I linket neden under kan i se den samlede opslagsboh hvor alle vores forskellige emner ligger</p>
            <a href="file:///Users/idathomsen/Downloads/HTML%20CSS%20Workshop%20(3).pdf" target="_blank">Opslagsbog</a>
        </div>
        
        <div id="tiltop">
        <a href="http://idak0001.web.eadania.dk/Portfolio/workshop.php"><img src="billeder/%20blomsttop.jpg"></a>
        </div>
      
        
    </div> <!--  ---------- pagewrap slutter --------------- !-->  
    
      
        
<!-- her slutter sidensindhold ************** --> 
        
    <?php include "foot.inc"; ?>