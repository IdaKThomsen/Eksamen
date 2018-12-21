<?php include "head.inc"; ?>


<style>
    
#pagewrap{
    display: grid;
    grid-gap: 0px;
    grid-auto-columns: 1fr;
    grid-template-areas:
        "css"
        "cssinfo"
        "pei"
        "emb"
        "inli"
        "syntax"
        "kilde"
        "tiltop";
    }
    
#css{
    grid-area:css;
    
}
    
#cinfo{
     text-align: center;   
    }

#cssinfo{
    grid-area: cssinfo;
    border-bottom: solid #e589ba 1px;
    
}

#pei{
    grid-area: pei;
    
}

#emb{
        grid-area: emb;
    }

#inli{
        grid-area: inli;
    }    
    
    
    
#syntax{
    grid-area: syntax;
    border-top: solid #e589ba 1px;
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
        "css css"
        "cssinfo cssinfo "
        "pei inli" 
        "emb emb"
        "syntax syntax"
        "kilde tiltop";
        }
}

 @media screen and (min-width:900px){
    
    #pagewrap{
    display: grid;
    grid-gap: 0px;
    grid-template-columns: 1fr 1fr 1fr;
    grid-template-areas:
        "css css css"
        "cssinfo cssinfo cssinfo"
        "pei emb inli"
        "syntax syntax syntax"
        "kilde kilde tiltop";
        }   
    }
    
</style>

    </head>

    <body>

<?php include "menu.inc"; ?>

<div id="pagewrap">

            <div id="css">
                <h1> CSS </h1>
            </div>    
            
            <div id="cssinfo">
                <p id="cinfo">
                CSS står for "cascading style sheets" og er et "sprog" der beskriver udssende.
                </p>
                
                <p>
                HTML understøtter udseende, men der kan ligge forskellige CSS i de forskellige browsere, man kan derfor ikke være sikker på at det ser ens ud, hvis man tester det på 2 forskellige browsere. Derfor kan det være en god ide at nulstille, for at der ikke er noget styling tilbage.
                </p>
                
                <p>
                CSS gør det muligt at adskille struktur og udseende 
                Det gør det muligt at beholde designet og rette i indholdet, og omvendt.
                Så kan man nøjes med at rette farven på en side, istedet for at rette det på alle eks 10 sider man har. 
                </p>
            </div>
            
            <div id="pei">
                <h2>Placering </h2>
                <p>
                Man har forskellige muligheder for at placere sit CSS, det er meget op til hvad man selv virker bedst for en selv.
                Der er mulighed for Embeded, Inline eller i eksternt (link).
                </p>
            </div>      
            <div id="emb">    
                <h2>Embed</h2>
                <p>
                dette skal skrives i starten af ens HTML under &lt;head&gt;  &lt;/head&gt; efterfulgt af &lt;style&gt; &lt;/style&gt; dette kan dog blive uoverskueligt da man så skal rulle meget langt ned for at komme til ens egentlige HTML. Det kan som i mit tilfælde dog være en fordel, da jeg har mange sider, så i stedet for at lave eksterne dokumenter (link) så har jeg mit css Embeddet i alle mine html dokumenter. 
                </p>
            </div>
            <div id="inli">  
                <h2>Inline</h2>
                <p>
                Man kan også anvende inline styling til sit CSS. Det vil sige at man laver stylingen direkte i ens tag - Dette er ikke en god metode at bruge da det kan blive svært at finde rundt i.

                Den måde vi har arbejdet med CSS på er i et eksternt dokument, hvilket gør det muligt at skabe ensartethed. 
                </p>
            </div>
            
            <div id="syntax">
                <h2>CSS syntaks</h2>
                <p>
                For at kunne style i sit HTML er det vigtigt at vælge den rigtige selector. Ens selector kan være givet en .class eller et #id.
                Hvis det er en selector der er valgt skriver man " .container" som bliver efterfulgt af en krøllet parentes, så kommer property som fortæller noget om hvad det er man genre vil ændre på, i eksemplet er det width som er efterfulgt af et kolon også kaldt en værdi separator næst kommer værdien som er 88% i eksemplet, dette kunne også skrives i em eller pixels (Px). Den sluttes med et semikolon og sluttes helt med en krøllet parentes.  
                </p>
            
            </div>
    
            <div id="kilde">

                <h4> kilder </h4> 
                <h4> Intro til css - Niels Østergaard - PP</h4> 
                <h4> </h4>  
                <h4>  </h4>
            </div>
    
            <div id="tiltop">
                <a href="http://idak0001.web.eadania.dk/Portfolio/css.php"><img src="billeder/%20blomsttop.jpg"></a>
            </div>
    
            
            
            
    
            
</div> <!--pagewrap slutter -->    


<?php include "foot.inc"; ?>
