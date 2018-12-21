<?php include "head.inc"; ?>

<style>
    
#pagewrap{
    display: grid;
    grid-gap: 0px;
    grid-auto-columns: 1fr;
    grid-template-areas:
        "informationsarkitektur"
        "info"
        "saulw"
        "lego";
        }
    
#informationsarkitektur{
    grid-area: informationsarkitektur;
    background-color: plum;
}

#info{
    grid-area: info;
    background-color: plum;
}

#saulw{
    grid-area: saulw;
    background-color: plum;
}

#lego{
    grid-area: lego;
    background-color: plum;
} 


@media screen and (min-width:500px){
    
#pagewrap{
    display: grid;
    grid-gap: 0px;
    grid-auto-columns: 1fr 1fr;
    grid-template-areas:
        "informationsarkitektur informationsarkitektur"
        "info info"
        "saulw saulw"
        "lego lego";
        }
    
}
    
@media screen and (min-width:900px){
    
    #pagewrap{
    display: grid;
    grid-gap: 0px;
    grid-template-columns: 1fr 1fr 1fr;
    grid-template-areas: 
        "informationsarkitektur informationsarkitektur informationsarkitektur"
        "info info info"
        "saulw saulw saulw"
        "lego lego lego";
        }
}
    
</style>

    </head>

    <body>
        
        
<?php include "menu.inc"; ?>



<div id="pagewrap"> 

            <div id="informationsarkitektur">
                <h1>Informationsarkitektur</h1>
            </div>
            
            <div id="info">
                <p>
                Informationsarkitektur er en måde at inddele information på. 
                Der findes mange forskellige måder at gøre det på, og det er meget sjældent at alle opfatter det på samme måde.
                Man kan heller ikke inddele alt information på samme måde, i en plade forretning ville det eksempelvis være dumt at inddele pladserne efter hvilken farve pladecoveret har, men derimod inddele det efter alfabetisk orden. 
                Hvorimod i en genbrugsforretning inddeler de ofte tøjet i farver, og der ville det ikke være bruger venligt hvis de inddelte det alfabetisk. 
                </p>
            </div>
                
            <div id="saulw">
                <p>Saul Wurman mener at der er 5 måder at inddele information på, det kalder han: LATC </p>
                
                <dl> 
                    <dt>Location - lokation</dt>
                    <dd>- Kort </dd>
                    <dt>Alphabet - Alfabetisk </dt>
                    <dd>- Ordbog</dd>
                    <dt>Time- Tid</dt>
                    <dt>Category - kategori <dt>
                    <dd>- Farver</dd>
                    <dt>Hierarchy -Hierarki<dt>
                    <dd>- Større end mindre end</dd> 
                </dl>
            </div>
            
            <div id="lego">
                <h2>LEGO- opgave </h2>

                <p>På klassen fik vi til opgave at inddele det Lego som blev lagt på vores bord. Vi var ca. inddelt i 5 grupper
                Søren og jeg inddelte vores i hvilke klodser der passede sammen, eksempelvis hvis der var 2 4x4 klodser kom de altså i samme bunke uanset deres farve. Dette hos en anden gruppe helt anderledes, de havde inddelt deres efter farve. 
                Alle måderne som blev brugt var rigtige, men man kan tale om hvilken giver mest brugervenlig tilgang.
                Det handler nemlig om at gøre det let for sig selv og brugerne. 
                </p>
            </div>
    
    </div> <!-- pagewrap slut -->

<?php include "foot.inc"; ?>
