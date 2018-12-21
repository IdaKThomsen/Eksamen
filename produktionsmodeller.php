<?php include "head.inc"; ?>   

    <style>
        #pagewrap{ 
        display: grid;
        grid-gap: 0px;
        grid-template-columns: 1fr;
        grid-template-areas:
           "produktionsmodeller"
            "deniogtyvespg"
            "nybollemodel";
        }

        #produktionsmodeller{
            grid-area: produktionsmodeller;
            background-color: aliceblue;
            }
        
        #deniogtyvespg{
            grid-area: deniogtyvespg;
            background-color: azure;
            }
        
        #nybollemodel{
            grid-area: nybollemodel;
            background-color: antiquewhite;
        }
    
    @media screen and (min-width:500px){
        
    #pagewrap{
        display: grid;
        grid-gap: 0px;
        grid-template-columns: 1fr 1fr;
        grid-template-areas:
           "produktionsmodeller produktionsmodeller"
            "deniogtyvespg deniogtyvespg"
            "nybollemodel nybollemodel";
            }
            
        }
         
         
    @media screen and (min-width:900px){
        
    #pagewrap{
        display: grid;
        grid-gap: 0px;
        grid-template-columns: 1fr 1fr 1fr;
        grid-template-areas:
        "produktionsmodeller produktionsmodeller produktionsmodeller"
        "deniogtyvespg deniogtyvespg nybollemodel";
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
            Denne model bygger på  lasswells formel, men er foldet mere ud, og har derfor 29 spørgsmål i stedet for 5. Den bruges altså til planlægge kommunikation.
        </p> 
        
        <dl>
        <dt> 1. Hvem er målgruppen?</dt>
        <dt> 2. Er kommunikation løsningen?</dt>
        <dt> 3. Hvad er budskabet?</dt>
        <dt> 4. Hvad er mediet?</dt>
        <dt> 5. Hvilken effekt skal produktet have hos målgruppen?</dt>
        <dt> 6. Hvad er formålet med effekten hos målgruppen?</dt>
        <dt> 7. Hvem er afsender?</dt>
        <dt> 8. Indgår produktet i en strategi eller politik?</dt>
        <dt> 9. Hvilken effekt skal produktet have hos afsenderen?</dt>
        <dt> 10. Hvad er formålet med effekten hos afsenderen?</dt>
        <dt> 11. Hvordan påvirkes målgruppen ellers af lignende budskaber?</dt>
        <dt> 12. Intimideres målgruppen?</dt>
        <dt> 13. Er produktet lavet før?</dt>
        <dt> 14. Hvor, hvornår og hvordan skal målgruppen opleve produktet?</dt>
        <dt> 15. Hvordan skal produktet distribueres?</dt>
        <dt> 16. Hvilke genrer skal bruges?</dt>
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
      
    </div> <!---------- pagewrap slut-- --!>  
    
      
        
<!-- her slutter sidensindhold ************** --> 
        
    <?php include "foot.inc"; ?>