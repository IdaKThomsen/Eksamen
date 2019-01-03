<?php include "head.inc"; ?>   

    <style>
        #pagewrap{ 
        display: grid;
        grid-gap: 0px;
        grid-template-columns: 1fr;
        grid-template-areas:
           "produktionsmodeller"
            "deniogtyvespg"
            "nybollemodel"
            "nybmodel"
            "kilde"
            "tiltop";
        }

        #produktionsmodeller{
            grid-area: produktionsmodeller;
            border-bottom: solid #e589ba 1px;

            }
        
        #deniogtyvespg{
            grid-area: deniogtyvespg; 
            border-bottom: solid #e589ba 1px;
            margin-bottom: 20px;
            }
        
        #nybollemodel{
            grid-area: nybollemodel;  
            }
        
        nybmodel{
            grid-area: nybmodel;
        }
        
        bbillede{
            max-width:100%;
            margin: 20px;
            text-align: center;
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
        grid-template-columns: 1fr 1fr;
        grid-template-areas:
           "produktionsmodeller produktionsmodeller"
            "deniogtyvespg deniogtyvespg"
            "nybollemodel nybmodel"
            "kilde tiltop";
            }
            
        }
         
         
    @media screen and (min-width:900px){
        
    #pagewrap{
        display: grid;
        grid-gap: 0px;
        grid-template-columns: 1fr 1fr 1fr;
        grid-template-areas:
        "produktionsmodeller produktionsmodeller produktionsmodeller"
        "deniogtyvespg deniogtyvespg deniogtyvespg"
        "nybollemodel nybollemodel nybmodel"
        "kilde tiltop tiltop";
         }    
            
        }
    </style>

  </head>

  <body>
    
      
   <?php include "menu.inc"; ?>
      
<!-- her starter sidens indhold ------------- --> 
    
    <div id="pagewrap">
        
        <div id="produktionsmodeller">
        <h1> Produktionsmodeller</h1>
        <p> 
            Produktionsmodeller anvendes når man vil igangsætte opgaven med kunden. 
            Altså man kan begynde at planlægge det konkrete produkt og på den måde finde frem til konkret indhold.
        </p>
        </div>
        
        <div id="deniogtyvespg">
        <h2> De 29 spørgsmål</h2>
        <p>
            Denne model bygger på  lasswells formel, men er foldet mere ud, og har derfor 29 spørgsmål i stedet for 5. Den bruges altså til planlægge kommunikation med sin kunde.
        </p> 
        
        <dl>
        <dt> 1. Hvem er målgruppen?</dt>
            <dd> Hvilken gruppe mennekser er det vi gerne vil ramme? Hvad ved vi om dem? </dd>
        <dt> 2. Er kommunikation løsningen?</dt>
            <dd> Overvej om målgruppen har brug for en multimedieløsning, eller om det faktisk er bedre med en anden slags løsning.</dd>
        <dt> 3. Hvad er budskabet?</dt>
            <dd> For at finde ud af hvad budskabet skal være, er det vigtigt at man sætter sig ind i firmaet, så man får en forståelse for hvad de ønsker at udtrykke.</dd>
        <dt> 4. Hvad er mediet?</dt>
            <dd> Overvej hvilket medie skal sende budskabet</dd>
        <dt> 5. Hvilken effekt skal produktet have hos målgruppen?</dt>
            <dd> hvad følelser skal det bringe frem? provokernede, sørgelige, glade. det er vigtigt at man rammer rigtige så der ikke sker misforståelser.  </dd>
        <dt> 6. Hvad er formålet med effekten hos målgruppen?</dt>
            <dd> Der kna være forskellige formål alt efter hvilken slags firma du er eller hvilken slags målgruppe du har.  Det kunne være at blive opdaget, salg, informere osv.  </dd>
        <dt> 7. Hvem er afsender?</dt>
            <dd> hvem er den eller de personer som sender dette ud? </dd>
        <dt> 8. Indgår produktet i en strategi eller politik?</dt>
            <dd> Hvis din kunde har en bestemt strategi ift. deres firma, vil det være en god ide at følge den, så firmaets kunder ikke bliver forvirret. </dd>
        <dt> 9. Hvilken effekt skal produktet have hos afsenderen?</dt>
            <dd> Skabe en stærkere strategi, give mere viden inden for det område de befinder sig på. </dd>
        <dt> 10. Hvad er formålet med effekten hos afsenderen?</dt>
            <dd> alt efter hvilken afdeling man er i, er det for det meste vækst man går efter. Dette skal ikke kun forståes som økonomisk vækst, det kan også være vækst ift. markedsføringsafdelingen </dd>
        <dt> 11. Hvordan påvirkes målgruppen ellers af lignende budskaber?</dt>
            <dd> Man skal sætte sig ind i hvordan sin målgruppe bliver påvirket af andre, som kan have samme budskab som en selv. På den måde vil man have mulighed for at forbedre udfaldet. </dd>
        <dt> 12. Intimideres målgruppen?</dt>
            <dd> Det handler om at skabe en forståelse for målgruppen, så de ikke føler sig "dårligt tilpas". </dd>
        <dt> 13. Er produktet lavet før?</dt>
            <dd> Hvis produktet er lavet før, skal du finde ud af hvordan du kan sørge for at det ikke bare bliver en dirkete kopiering, men hvordan du har mulighed for at gøre det bedre.</dd>
        <dt> 14. Hvor, hvornår og hvordan skal målgruppen opleve produktet?</dt>
            <dd> Man skla gøre det klart for sig selv og virksomheden, hvornår der er det perfekte tidspunkt at udgive produktet. Hvis der er tale om en ny chokolade julekalender, går det ikke at den bliver udgivet i Januar. </dd>
        <dt> 15. Hvordan skal produktet distribueres?</dt>
            <dd>  Når valget af dristrubutør er taget, skal man vælge den rette strategi som passer netop til den type. Det handeler om at skabe en forståelse, så man både kan holde økonomien nede, samtidig med at man gør det "lækkert" for modtageren. hvis man laver en flyer men information, nytter det ikke noget at det er kavet på avispapir, her ville det være en bedre oplevelse for kunden at det blev trykt på noget tykkere papir. </dd>
        <dt> 16. Hvilke genrer skal bruges?</dt>
            <dd> </dd>
        <dt> 17. Hvilke fortællemåder skal bruges?</dt>
        <dt> 18. Hvilke færdigheder skal producenten have?</dt>
        <dt> 19. Hvilken viden skal producenten have?</dt>
        <dt> 20. Hvor meget skal der med?</dt>
        <dt> 21. Hvilket apparatur er nødvendigt?</dt>
        <dt> 22. Hvad må det koste?</dt>
        <dt> 23. Hvilke juridiske problemer er der også?</dt>
        <dt> 24. Hvilke etiske problemer kan der opstå?</dt>
        <dt> 25. Hvad skal produktet hedde?</dt>
        <dt> 26. Hvordan er tidsplanen?</dt>
        <dt> 27. Hvordan informeres rekvirenten?</dt>
        <dt> 28. Hvordan skal produktet afprøves?</dt>
        <dt> 29. Hvordan laves produktet nemmest?</dt> 
        </dl>
            
        </div>
      
        <div id="nybollemodel">
        <h2> Den nye bolllemodel </h2>
        <p>
            Bolle modellen bliver brugt når der skal skabes et      medie produkt, det kunne være en hjemmeside eller en plakat. Når man anvender denne model er den med til at skabe et overblik over hvor meget man skal vise hensyn til når man kommunikerer. Modellen lavet dynamisk via pilene, og hver bolle har derfor en sammen hæng til hinanden. 
        </p>
        <dl>    
            <dt> Målgruppe</dt>
                <dd>Den gruppe personer man har i tankerne ift. projektet.</dd>
            <dt> Indhold</dt>
                <dd> Indeholdet af selve konnunikationen. Det er vigtigt at der er skabet en god forståelses mellem målgruppe og indhold, så de fungerer bedst muligt. </dd>
            <dt> Afsender</dt> 
                <dd>Den person som skaber selve kommunikationen  </dd>
            <dt> Medie </dt> 
                <dd>Mediet er der hvor kommunikationen forgår, og det er ofte bestemt ud fra målgruppen. </dd>
            <dt> Kommunikations miljø</dt> 
                <dd>Stedet hvor det bliver sendt ud til modtageren, det kunne eks. være Facebook eller i et magasin </dd>
            <dt> Udformning</dt> 
                <dd>Er måden hele projektet er lavet på. Det er vigtigt at overveje hvilken tekst man vil skrive og hvilke billeder ma vil bruge, alt dette kommer meget an på målgruppen  </dd>
        </dl> 
        
        </div>
        
        <div id="nybmodel">
         <img id="bbillede" src="billeder/nybolmodel1.png">
        </div>
        
        <div id="kilde">
            
            <h4> kilder </h4> 
            <h4> Kommunikation i multimediedesign - Kap 8 - produktionsmodeller til løsninger s. 113-127 </h4> 
            
        </div>
        
        <div id="tiltop">
        <a href="http://idak0001.web.eadania.dk/Portfolio/produktionsmodeller.php"><img src="billeder/%20blomsttop.jpg"></a>
        </div>
        
      
    </div> <!---------- pagewrap slut-- --!>  
    
      
        
<!-- her slutter sidensindhold ************** --> 
        
    <?php include "foot.inc"; ?>