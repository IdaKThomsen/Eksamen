<?php include "head.inc"; ?>

       <style>


        #pagewrap{
            display: grid;
            grid-gap: 0px;
            grid-auto-columns: 1fr;
            grid-template-areas:
                "versionsstyring"
                "hvorforv"
                "hvadv"
                "hvorv"
                "git"
                "vbegreber";
                }

        
#versionsstyring{
    grid-area:versionsstyring;
    background-color: antiquewhite;
}

#hvorforv{
    grid-area: hvorforv;
    background-color: antiquewhite;
}

#hvadv{
    grid-area: hvadv;
    background-color: antiquewhite;
 }

#hvorv{
    grid-area: hvorv;
    background-color: antiquewhite;
}

#git{
    grid-area: git;
    background-color: antiquewhite;
    

}

#vbegreber{
    grid-area: vbegreber;
    background-color: antiquewhite;
    
}
        
        
@media screen and (min-width:500px){
    
#pagewrap{
    display: grid;
    grid-gap: 0px;
    grid-auto-columns: 1fr 1fr;
    grid-template-areas:
        "versionsstyring versionsstyring "
        "hvorforv hvorforv"
        "hvadv hvadv"
        "hvorv hvorv"
        "vbegreber vbegreber"
        "git git";
       
    }        
        
@media screen and (min-width:900px){
    #pagewrap{
    display: grid;
    grid-gap: 0px;
    grid-template-columns: 1fr 1fr 1fr;
    grid-template-areas:
        "versionsstyring versionsstyring versionsstyring"
        "hvorforv hvorforv hvorforv"
        "hvadv hvadv hvadv"
        "hvorv hvorv hvorv"
        "git git git"
        "vbegreber vbegreber vbegreber"
        ;
        }
         
</style>   

    </head>

<body>

<?php include "menu.inc"; ?>



<div id="pagewrap">

            <div id="versionsstyring">
                <h1> Versionsstyring </h1>
            </div>
                
            <div id="hvorforv">
                <h2>Hvorfor versionsstyring?</h2>
                <p>
                Man anvender det for at undgå fejl, men hvis de så alligevel opstår er det et værktøj til at kunne gå tilbage og opdage og rette fejlen. Man har mulighed for at have flere projekter i gang ad gangen, så man kan eksempelvis have flere versioner af den samme side, så kan kunden selv vælge hvad de syntes der fungerer bedst for dem. Det er for at kunne samarbejde, så man gør det nemmere for sig selv. 
                </p>
            </div>
            
            <div id="hvadv">
                <h2>Hvad er versionsstyring?</h2> 

                <p>En måde at arbejde non destruktivt på, altså en metode til at arbejde i flere lag, så hvis der opstår større fejl undervejs i ens projekt kan man gå tilbage.
                hver gang man comitter en version kan man tilføje noter om hvad ændringen omhandler, så det er lettere a navigerer.  
                Når man bruger en VCS ( version control system) kan den understøtte versionsstyring og  på den måde samarbejde.
                Versionsstyring kan enten være en tjeneste i skyen eller installeret på en lokal server
                </p>
            </div>    
            
            <div id="hvorv">
                <h2>Hvor bruges versionsstyring?</h2>

                <p>Versionsstyring er noget man anvender i alle slags it projekter eksempelvis:
                Udvikling af administrative systemer, apps, embeddede systemer, frameworks, libraries. Det er ikke kun én type bruger som anvender versionsstyringen, det er alle som arbejder professionelt med at it udvikle, store organisationer iværksætteres osv. 
                </p>
            </div>
            
            <div id="git">
                <h2>Git </h2>
                <p>Det belv opfundet af Linus Thorvald, da han havde brug for at holde styr på udviklingen af Linux. Git er et version styringssystem, og det er altså et sæt regler, om hvordan noget fungerer. 
                </p>

                <h2>GitHub </h2>
                
                <p>Er en webplatfrom der tillader at man kan oprette Git - repositories - så man ikke selv behøver at installerer en. Github har en del features indbygget bla til samarbejde, projektstyring, man kan også via github dele sin kode, og se andres, på den måde er det også et socialt medie. Dog kan man også gøre det privat, så der ikke er andre end en selv der ser hvad man har lavet.
                </p>
            </div>
            
            <div id="vbegreber">
                <h2>Væsentlige begreber</h2>

                <dl>
                    <dt>Reposetory (repo)</dt>
                        <dd>- en samling af filer, som en projektmappe</dd> 
    
	                <dt>Branch - en forgrening</dt> 
                        <dd>- en parallel version i dit repo, men berører ikke master</dd> 
                    
	                <dt> Commit </dt>
                        <dd>- en revision, som at gemme men med mulighed for at finde tilbage</dd>
                    
                    <dt>Diff - difference</dt>
                        <dd>- en forskel mellem to commits</dd>  
                    <dt>Merge</dt>
                        <dd>- når ændringer i en branch samles med en anden (eks. Gennem en pull request)</dd>
                    <dt>Pull</dt>
                        <dd>- når du henter ændringer og merger dem</dd>
                </dl>
            </div>
    </div>


<?php include "foot.inc"; ?>


