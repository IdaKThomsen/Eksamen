<?php include "head.inc"; ?>

<style>

#pagewrap{
    display: grid;
    grid-gap: 0px;
    grid-auto-columns: 1fr;
    grid-template-areas:
        "planover"
        "pinfo"
        "mogd"
        "brain"
        "stories"
        "wire"
        "mock"
        "infoark"
        "proto";
    }
    
#planover{
    grid-area: planover;
    background-color: lightyellow;
}

#pinfo{
    grid-area: pinfo;
    background-color: lightyellow;
}


#mogd{
    grid-area: mogd;
    background-color: lightyellow;
}

#brain{
    grid-area: brain;
    background-color: lightyellow;
}

#stories{
    grid-area: stories;
    background-color: lightyellow;
}


#wire{
    grid-area: wire;
    background-color: lightyellow;
}

#mock{
    grid-area: mock;
    background-color: lightyellow;
}

#infoark{
    grid-area: infoark;
    background-color: lightyellow;
    
}


#proto{
    grid-area: proto;
    background-color: lightyellow;
}
    
@media screen and (min-width:500px){
    
#pagewrap{
    display: grid;
    grid-gap: 0px;
    grid-auto-columns: 1fr 1fr;
    grid-template-areas:
        "planover planover "
        "pinfo pinfo" 
        "mogd mogd"
        "stories stories"
        "brain brain"
        "wire wire"
        "mock mock"
        "infoark infoark"
        "proto proto";
    }
 
}

@media screen and (min-width:900px){
    
    #pagewrap{
    display: grid;
    grid-gap: 0px;
    grid-template-columns: 1fr 1fr 1fr;
    grid-template-areas:
        "planover planover planover"
        "pinfo pinfo pinfo"
        "mogd mogd mogd"
        "stories stories stories"
        "brain brain brain "
        "wire wire wire"
        "mock mock mock"
        "infoark infoark infoark"
        "proto proto proto";
        }
}

</style>

    </head>

     <body>

    

<?php include "menu.inc"; ?>


    
<div id="pagewrap">     

            <div id="planover">
                <h1> Planlægning / Overordnet design</h1>
            </div>
    
    
            
            <div id="pinfo">
                <p>
                Hvis man enten får til opgave at lave en hjemmeside for en kunde, eller bare gerne vil lave sin egen hjemmeside, er der nogle værktøjer som er vigtige at tage med i sine overvejelser. Værktøjerne anvendes til at forventningsafstemme og undgå større fejl og mangler, på den måde kan man sikre sig mest tilfredshed. 
                </p>
            </div>
            
            <div id="mogd">
                <h2>Mål og delmål</h2>

                <p>Det er vigtigt at få en plan over hvad ens mål og forventninger med siden er. Det er vigtigt at man får en forståelse af hvad siden skal udstråle. Hvis ikke får forståelsen for hvad ens kunde ønsker, kan det ende med en masse misforståelser, og at siden ikke fremstår som ønsket 
                </p>
                <p>Ift. Opgaven vi fik stillet på klassen omkring " det bette ismejeri" havde vi et møde med Niels, hvor han udpenslede hvad han ønskede hans side skulle indeholde. Det var med til at give os en ide om hvad vi kunne gøre for at opfylde hans mål og forventninger. 
                Han fortalte os at han ikke så godt kunne lide sit nuværende logo, med den blå farve det havde, udover det måtte der godt være fokus på at det var hjemmelavet. </p>

                <p>Det kan være vigtig at stille konstruktive spørgsmål og komme med ideer, da det er os som udviklere der har bedst styr på hvordan han via en hjemmeside får bedst profit. </p>
            </div>
                
            <div id="brain">
                <h2>Brainstorm</h2>

                <p>Brainstorming er med til at få skabt en god dialog og ideer til det projekt man har fået givet. I en brainstorm, er det vigtigt at huske, at der er aldrig en ide som er dårlig, man skal bare skrive alt ned. 
                </p>

                <p>Ift. Det bette ismejeri fik vi lavet en brainstorm over alle de krav ham kom med. 
                På den måde fik vi lavet en overordnet ide om hvad vi skulle gå i gang med.</p> 
            </div>
            
            <div id="stories">
                <h2>Userstories - feature /unfeature</h2>

                <p>Grunden til at userstories er en god ide at anvende er at man kommer mere i dybden med hvad forbrugeren vil have, det er med til at skabe et fælles sprog så alle involveret parter får en fællesforståelse.
                    På den måde kan man også komme frem til en feature/unfeature liste. 
                </p>
                <p>              
                Efter en sortering af ideer fra brainstormen, lavede vi userstories. Vi arbejde ud fra "som 'bugertype' ønsker jeg 'handling' 'formål'.
                Som ismejeris ønsker jeg en god hjemmeside, så min virksomhed bliver set af flere.    
                </p>
                <p> 
                Når man har lavet userstories, kommer man nemt frem til hvad man vil inkludere. 
                Når man vælger hvilke features man ikke vil inkludere, så kommer man frem til en mere passende side, ud fra hvad kunden ønsker. På samme måde med de ting man ønsker at inkludere, det skaber en bedre tilpasning. 
                </p> 
            </div>    
            
            <div id="wire">
                <h2>Wireframes</h2>
                <p> 
                Dette er en måde at skitse ens ideer til hjemmesiden. Det skal gøres helt simpelt så man kun fokusere på funktionalitet.  
                Hvis man indsætter billeder, text osv. Så kommer brugerne kun til at fokusere på det. 
                </p> 
            </div>
            
            <div id="mock">
                <h2>Mock-ups</h2>
                <p> 
                Her laver man den tænkte hjemmeside med billeder tekst farver mm. Så kunden sm i dette tilfælde er Niels får en ide om hvad hans færdige produkt kommer til at være. En god ide kan være at skabe flere mock-ups så at han har mulighed for at vælge hvad han bedst kan lide, på den måde kan man også nemmere skabe rettelser inden det færdige resultat vises.   
                </p>  
            </div> 
            
            <div id="infoark">
                <h2>Informations arkitektur </h2>
                
            </div>
                <!-- indsæt link til informationsarkitektur som er længere oppe --> 
            <div id="proto">
                <h2>Prototype</h2>
                <p>Når alle andre faser i værktøjskassen er kørt igennem, kommer man til at lave prototypen. 
                Denne fase er her hvor man arbejder på at komme frem til ens færdige produkt. Her ser man virkelig hvordan produktet fungere i praksis. Det kan være at prototypen ikke fungerer som tænkt, men der er stadig muligheder for løbende rettelser. 
                </p>
            </div>

    </div> <!-- pagewrap slut --> 
        
<?php include "foot.inc"; ?>
