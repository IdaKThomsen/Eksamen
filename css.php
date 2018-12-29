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
        "grids"
        "responsiv"
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
    
#grids{
        grid-area: grids;
    }
    
#responsiv{
        grid-area: responsiv;
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
        "grids responsiv"
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
        "grids responsiv responsiv"
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
    
    
            <div id="grids">
            <h2> Grid</h2>
            <p>
                Der har førhen været muligheder som float- posisioning og efterfølgende flexbox, disse muligheder har fungeret, men ikke uden komplikationer. Da CSS Grid blev opfundet i 2017, blev det meget nemmere at skabe et godt layout. Grids er bygget på ideen fra flexbox, men man har nu mulighed for at arbejde i 2 retninger i stedet for 1 retning, altså det giver nu mulighed for at man nu både kan arbejde hoisontalt og vertikalt , hvor man med flexbox kun havde mulighed for at arbejde hoisontalt. I Flexbox er det at placere 2 billeder ved siden af hinanden, billeder skal også helst være samme størrelse, ellers kan det være med at ødelægge det tiltænkte layout. Med Grid har man nu mulighed for at placere elementer præcis hvor man vil. 
            </p>
            </div>
            
            <div id="responsiv">
            <h2> Responsivt design</h2>
            <p>
                Når man skaber en hjemmeside, er det vigtigt at man fokuserer på at den skal passe til flere enheder, da de har forskellige skærmstørrelser. Når der er tale om responsivt layout er det vigtigt at have tankegangen "mobile First", derefter tablet og til sidst webside. Grunden til at man tænker mobile First er fordi der er flere som tilgår hjemmesider via mobilen, og derfor er de vigtigt at den er tilpasset ens burgerer først. Det er også vigtigt at overveje ens design alt efter hvilken enhed man befinder sig på. For at få ens side responsiv skal man tilføje breakpoints i sit css, dette kan varierer alt efter hvilken skærmstørrelse der bliver brugt mest.     
            </p>
            </div>
    
    
            <div id="kilde">

                <h4> kilder </h4> 
                <h4> Intro til css - Niels Østergaard - PP</h4> 
                <h4> grids - Niels Østergaard - PP </h4>  
                <h4> Responsiv i praksis - Niels Østergaard - PDF </h4>
            </div>
    
            <div id="tiltop">
                <a href="http://idak0001.web.eadania.dk/Portfolio/css.php"><img src="billeder/%20blomsttop.jpg"></a>
            </div>
    
            
            
            
    
            
</div> <!--pagewrap slutter -->    


<?php include "foot.inc"; ?>
