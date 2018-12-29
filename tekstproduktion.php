<?php include "head.inc"; ?>   

<style>
    #pagewrap{
        display: grid;
        grid-gap: 0px;
        grid-auto-columns: 1fr;
        grid-template-areas:
            "tekstproduk"
            "MogT"
            "de5nyhed"
            "forståelse"
            "fundamant"
            "webtekst"
            "nyhedstrekanten"
            "nyhedbillede"
            "dyder"
            "kilde"
            "tiltop";
        }

    #tekstproduk{
        grid-area: tekstproduk;
    }
    
    #MogT{
        grid-area: MogT;
        border-top: solid #e589ba 1px;

    }
    
    #de5nyhed{
        grid-area: de5nyhed;
        border-top: solid #e589ba 1px;

    }
    
    #forståelse{
        grid-area: forståelse;
    }
    
    #fundamant{
        grid-area: fundamant;
        border-top: solid #e589ba 1px;
    }
    
    #webtekst{
        grid-area: webtekst;
    }
    
    #nyhedstrekanten{
        grid-area: nyhedstrekanten;
    }
    
    #nyhedbillede{
        grid-area: nyhedbillede;
    }
    
    #dyder{
        grid-area: dyder;
        border-top: solid #e589ba 1px;
        margin-top: 10px;
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
    
    #news{
        text-align: center;
    }
    
    #nybillede{
        text-align: center;
    }

@media screen and (min-width:500px){
    #pagewrap{
        display: grid;
        grid-gap: 0px;
        grid-auto-columns: 1fr 1fr;
        grid-template-areas:
            "tekstproduk tekstproduk"
            "MogT de5nyhed"
            "forståelse forståelse"
            "fundamant fundamant"
            "webtekst webtekst"
            "nyhedstrekanten nyhedbillede"
            "dyder dyder"
            "kilde kilde"
            "tiltop tiltop";
        }

}
    
    
    
@media screen and (min-width:900px){
     #pagewrap{
        display: grid;
        grid-gap: 0px;
        grid-auto-columns: 1fr 1fr;
        grid-template-areas:
            "tekstproduk tekstproduk tekstproduk"
            "MogT de5nyhed forståelse"
            "fundamant webtekst nyhedstrekanten"
            ". . nyhedbillede"
            "dyder dyder dyder "
            "kilde tiltop tiltop";
            }
    
    #tekstproduk{
        grid-area: tekstproduk;
         border-bottom: solid #e589ba 1px;
    }
    
    #MogT{
        grid-area: MogT;
        border-style: none;
    }
    
    #de5nyhed{
        grid-area: de5nyhed;
        border-style: none;
    }
    
    #webtekst{
        grid-area: webtekst;
        border-top: solid #e589ba 1px;
    }
    
    #nyhedstrekanten{
        grid-area: nyhedstrekanten;
        border-top: solid #e589ba 1px;
    }
    
    
    
}
    
    
</style>



    </head>

<body>
    
      
   <?php include "menu.inc"; ?>
      
<!-- her starter sidens indhold ------------- --> 
    
    <div id="pagewrap">
     
        <div id="tekstproduk">
            <h1> Tekst produktion</h1>
        </div>
        
        <div id="MogT"> 
        <h2> Medietyper og Genre</h2>
        <dl> 
            <dt>Artiklen – klassisk artikelstruktur </dt>  
            <dt>Brochuren – informationsstruktur. </dt>
            <dt>Annoncen – Traditionel opbygning</dt>
            <dt>Webtekster – Interaktion</dt>
            <dd> - Brugeroplevelser og service for den travle læser </dd>
            <dt>Sociale medietekster – Svært at opsætte helt faste regler og modeller</dt>
            <dd> - Meget er intuitivt og præget af spontanitet. </dd>
        </dl>
            
        <img id="news" src="billeder/newsbil.png">
            
        </div>
        
        <div id="de5nyhed">
        <h2> De 5 nyhedskriterier</h2>
        <p> Når man skal lave tekstproduktion er det vigtigt at have fokus på de 5 nyhedskriterier </p>
        
        <dl> 
            <dt>Væsentlighed</dt>    
            <dt>Sensation</dt>
            <dt>Konflikt</dt>
            <dt>Identifikation</dt>
            <dt>Aktualitet</dt>
        </dl>
        
        <p> Når man følger disse vil de hjælpe med at lede til bedre kvalitet som søger for at målgruppen bliver ramt.
        Ydermere sørger det for delinger så budskabet bliver spredt. 
        </p>
            
        </div>
        
        <div id="forståelse">
        <h2> Forståelse </h2>
        <p> Når man vil forstå en tekst kan man anvender man disse metoder </p>
        
        <dl> 
            <dt>Scanning: orienteringsproces/visuelt </dt> 
                <dd> - Man kigger kort igennem det hele for at skabe en hurtig forståelse  </dd>
            <dt>Skimming: helhedsforståelse/forestilling</dt>
                <dd> - Man skimmer de større ting i teksten, overskrit brødtekst og billeder. </dd>
            <dt>Læsning: meningen pba. det store billede + de små elementer</dt>
                <dd> - Her tager man sig tid til at læse teksten.   </dd>
            <dt>Checking: betragtning af helheden ud fra skimming/scanning og læsning</dt>
                <dd> - Man kombinerer nu de 3 ovenstående ting, for at skabe en helhed. </dd>
        </dl>   
          
        <p> 
            Dette er i øvrigt også vigtigt at have i tankerne når man selv producere en tekst. 
            Læseren skal have en hvis forståelse af hvad teksten handler om, også hvis læseren bare skimmer.
        </p>
            
        </div>
        
        <div id="fundamant">
        <h2> Fundament for et godt website </h2>
        <p> Det er vigtigt at man har et klar formål, så folk ved hvorfor at de skal vælge netop din website.</p>
            
        <dl>
            <p> Man skal gøre det klar for sig selv, og sin modtager hvad man vil fokusere på. eks. skal den:</p>
            <dt>Give informationer til potentielle kunder</dt>
                <dd></dd>
            <dt>Servicere eksisterende kunder</dt> 
                <dd></dd>
            <dt>Oplyse om produkter</dt>
                <dd></dd>
            <dt>Sælge produkter</dt>
                <dd></dd>
            <dt>Rekruttere medarbejdere</dt> 
        </dl>
        
        </div>
        
        <div id="webtekst"> 
        <h2> Webtekst</h2>
        <p> Det er vigtigt når man laver tekster         til web, at man fokusere på at gøre det       brugervenligt for brugeren 
            Man kan benytte hyperlinks til det meste, hvilket gør det overskueligt for brugeren, at komme igennem webteksten
            Dette kan også sørge for at læseren bliver fastholdt. Når man laver en god webtekst er det vigtigt at den skaber en konvertering, så læseren vælger netop dig, dette kan også refereres til en call to action. 
            Ydermere er det vigtigt at fokusere på at fokusere på SEO fra begyndelsen, da det hjælper med at man bliver opdaget. 
        </p>
        <p> 
            Vi fik til opgave at lave vores egen      tekst produktion, hvor vi skulle lave 3    forskellige tekster én til en website og én som skulle være en nyhedsartikel. 
            
            <a href="billeder/Tekstertilweb.pdf" target="_blank"> I kan se mit forsøg her </a>
        </p>
        </div>
    
        <div id="nyhedstrekanten">
        <h2> Nyhedstrekanten </h2>
        <p> 
            I forhold til nyhedstrekanten er det en god ide at starte med det vigtigste først. 
            Man starter med en indledning hvor man skal gøre det interessant for læseren 
            Her skal man fortælle nyheden ( hvem, hvad hvor og hvornår)
            Der næst skal indledningen uddybes, hvilket fører til baggrunden, det er der hvor man fortæller overordnet om emnet.   
            Sekundære emner kan være når man referer til lignende hændelser, dette kan give læseren en bedrer forståelse for helheden af teksten 
            Detaljer tilføjes for at understøtte til allersidst dette kan eks være statistik
        </p>
        </div>
        
        <div id="nyhedbillede">
        <img id="nybillede" src="billeder/nyhedstrekanten.jpg">
        </div>
        
        <div id="dyder">
        <h2> Sprogdyder</h2>
        <dl> 
            <dt>Aptum – hensigtsmæssighed</dt> 
                <dd> Her er der tale om "et passende sprog" man skal altså fokusere på emne, afsender og modtager</dd>
            <dt>Puritas - Renhed </dt>
                <dd> Her er der tale om korrekthed ift. grammatik, udtale, stavning, syntaks </dd>
            <dt>Ornauts - Udsmykning </dt>
                <dd> Man skal pynte sit sprog, så modtageren finder det spændende, ydermere er det en god ide at skabe personlighed i sit sprog</dd>
            <dt>Perspicuitas: Gennemsigtighed </dt>
                <dd> Man skal ikke gøre teksten for kompliceret for modtageren, det er vigtigt at skabe klarhed igennem hele teksten.</dd>  
        </dl>
        
        <p> 
            Man kan også koble Sprog dyderne på "Elocutio" som ses på billedet  <a href="http://idak0001.web.eadania.dk/Portfolio/pr%C3%A6sentationsteknik.php">HER</a> under "Forberedelsen til den gode præsentation"
        </p>    
            
        </div>
        <div id="kilde">
            
            <h4> Kilder </h4> 
            <h4> MMD2018 tekst - Mariann Daugaard - PP</h4> 
            
        </div>
        
        <div id="tiltop">
        <a href="http://idak0001.web.eadania.dk/Portfolio/tekstproduktion.php"><img src="billeder/%20blomsttop.jpg"></a>
        </div>
        
        
    </div>  
    
      
        
<!-- her slutter sidensindhold ************** --> 
        
    <?php include "foot.inc"; ?>