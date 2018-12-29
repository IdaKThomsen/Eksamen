<?php include "head.inc"; ?>   

<style>
     #pagewrap{
            display: grid;
            grid-gap: 0px;
            grid-auto-columns: 1fr;
            grid-template-areas:
                "photo"
                "hvaderps"
                "nond"
                "generlt"
                "inter"
                "works"
                "short"
                "artb"
                "selec"
                "qst"
                "shap"
                "pen"
                "billeder"
                "idaescape"
                "brunobil"
                "tiltop";
            }

    #photo{
        grid-area: photo;
        border-bottom: solid #e589ba 1px;
    }

    #hvaderps{
        grid-area: hvaderps;
    }

    #nond{
        grid-area: nond;
    }
    
    #generlt{
        grid-area: generlt;
        border-top: solid #e589ba 1px;
    }
    
    #inter{
        grid-area: inter;
    }
    
    #works{
        grid-area: works;
    }
    
    #short{
        grid-area: short;
    }
    
    #artb{
        grid-area: artb;
    }
    
    #selec{
        grid-area: selec;
    }
    
    
    #qst{
        grid-area: qst;
    }
    
    #shap{
        grid-area: shap;
    }
    
    #pen{
        grid-area: pen;
    }
    
    #billeder{
        grid-area: billeder;
    }
    
    #idaescape{
        grid-area: idaescape;
        text-align: center;
        
    }
    
    #brunobil{
        grid-area: brunobil;
        text-align: center;
        
    }
    
    #tiltop{
        grid-area: tiltop;
        text-align: right;
        padding-bottom: 20px;
        max-height: 100%;
    }
    

    
@media screen and (min-width:500px){  
        #pagewrap{
            display: grid;
            grid-gap: 0px;
            grid-auto-columns: 1fr 1fr;
            grid-template-areas:
                "photo photo"
                "hvaderps nond"
                "generlt generlt"
                "inter works"
                "short artb"
                "selec qst"
                "shap pen"
                "billeder billeder"
                "idaescape brunobil"
                ". tiltop";
            }
    
    }
    
@media screen and (min-width:900px){    
           #pagewrap{
            display: grid;
            grid-gap: 0px;
            grid-auto-columns: 1fr 1fr 1fr;
            grid-template-areas:
                "photo photo photo"
                "hvaderps hvaderps nond"
                "generlt generlt generlt"
                "inter works short"
                "artb selec qst"
                "shap pen ."
                "billeder idaescape brunobil"
                ". . tiltop";
            } 
    }
</style>

  </head>

  <body>
    
      
   <?php include "menu.inc"; ?>
      
<!-- her starter sidens indhold ------------- --> 
    
    <div id="pagewrap">
    
        <div id="photo">
        <h1>Photoshop</h1>
        </div>
        
        <div id="hvaderps">
        <h2> Hvad er Photoshop? </h2>
        <p> 
            Photoshop er et billede regeringsprogram som giver brugern mulighed for at manupulere farver billeder osv. Photoshop pixelbaseret program altså når man skalerer ind, vil man kunne se hver enkelt pixel. 
            Man arbejder i layers, for bl.a. at arbejde non destruktivt, og for at få mere dybde i billederne, og få nemmere ved at redigere og fortryde sit arbejde eks. Fritlægninger skygger mm. 
        </p>
        </div>
    
        <div id="nond">
        <h2> Non destruktivt </h2>
        <p> 
            I stedet for at gå ind og fjerne noget permanent, ligger man et layer eller en layermask. 
            Illustrator er et vector baseret. = man kan skalerer næsten uendeligt, hvilket resulterer i at hvis man laver en prik, så ville man kunne printe den ud så ville den stadig se lige så intakt ud, modsat Photoshop. 
        </p>
        </div>
        
        <div id="generlt">
        <h2> Muligheder i Photoshop </h2>
        <p> 
            Der er mange forskellige "tools" som man kan anvende i photoshop, hvilket giver brugeren 1000-vis af muligheder. Jeg kommer ind på  de "tools" vi har arbejdet mest med og andre tips, som gør det lettere for brugeren.
        </p>
        </div>
        
        <div id="inter">
            <dl>
            <dt>Interface </dt>     
                <dd>
                    det er det skærmbillede man ser når man går ind på Photoshop
                </dd> 
            </dl>
        </div>
        
        <div id="works">
            <dl>
                <dt>Workspace </dt> 
                    <dd> 
                    gør det muligt man kan selv lave sin egen unikke interface hvilket søger for at det passer til de behov man har, Dette kan være en "tidsbesparelse" eller "brugervenlighed" for en selv
                    </dd>
            </dl>
        </div>
        
        <div id="short">
        
            <dl>
                <dt>Keyboard Shortcuts </dt> 
                    <dd>
                    de kan være gode at bruge, da det kan gøre dit arbejde nemmere. I stedet for at bruge tid på at lede efter sit "lasso tool" kan man trykkel "L".   
                    </dd>
            </dl>
        </div>
        
        <div id="artb">
            <dl>
            <dt>Artboards</dt> 
                <dd> 
                    Det er de forskellige lærereder man kan arbejde på - det giver dig mulighed for at arbejde på flere ting på samme tid. 
                </dd>
            </dl>
        </div>
        
        <div id="selec">
            <dl>
            <dt>Selections </dt>
                <dd> 
                    man vælger en del af billede man arbejder på og lave specifikke ændringer 
                </dd>
             </dl>
        </div>
        
        
        <div id="qst">
            <dl>
            <dt>Quick selection tool </dt> 
                <dd> 
                    Den gætter på hvad du gerne vil seclecte, og du kan selv gå ind og ændre i markeringen, hvis den ikke har markeret alt, så kan du tilføje, og fjerne. 
                </dd>
            </dl>
        </div>
        
        
        <div id="shap">
            <dl>
            <dt>Shapes</dt> 
                <dd>  
                    firkanter, Elipse generelt figurer
                </dd>
            </dl>
        </div>
        
        <div id="pen">
            <dl>
            <dt>Pen tool</dt> 
                <dd> 
                    Bruges til at definerer punkter på dit billede, det er også en måde at seclecte noget på.
                </dd>
            </dl>    
        </div>
        
        <div id="billeder">
            <p> Her er et par af de billeder vi har lavet i Photoshop igennem timerne</p>
        </div>
        
        <div id="idaescape">
            <img id="idaes" src="billeder/iescape.jpg">
         </div> 
        
        <div id="brunobil">
            <img id="bruno" src="billeder/ibruni.jpg">
        </div>
        
        
        <div id="tiltop">
            <a href="http://idak0001.web.eadania.dk/Portfolio/brugertest.php"><img src="billeder/%20blomsttop.jpg"></a>
        </div>
        
    </div>  
    
      
        
<!-- her slutter sidensindhold ************** --> 
        
    <?php include "foot.inc"; ?>